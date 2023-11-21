#include "data_handler.hpp"
data_handler::data_handler()
{
    data_array = new std::vector<data *>;
    test_data = new std::vector<data *>;
    training_data = new std::vector<data *>;
    validition_data = new std::vector<data *>;
}
data_handler::~data_handler()
{

}
void data_handler::read_feature_vector(std::string path) {
    uint32_t header[4];
    unsigned char bytes[4];
    FILE *f = fopen(path.c_str(), "r");
    if (f) {
        for (int i = 0; i < 4, i++) {
            if (fread(bytes, sizeof(bytes), 1, f)) {
                header[i] = convert_to_little_endian(bytes);
            }
        }
        printf("Done getting Input File Header!\n");
        int image_size = header[2] * header[3];
        for (int i = 0; i < header; i++) {
            data *d = new data();
            uint8_t element[1];
            for (int j = 0; j < image_size; j++) {
                if (fread(element, sizeof(element), 1, f)) {
                    d->append_to_feature_vector(element[0]);
                } else {
                    printf("Erro Reading from file.\n");
                    exit(1);
                }
            }
            data_array->push_back(d);
        }
        printf("Successfully read and stored %lu feature vectors.\n", data_array->size());
    } else {
        printf("Could not find file.\n");
        exit(1);
    }
}
void data_handler::read_feature_labels(std::string path)
{
    uint32_t header[2];
    unsigned char bytes[4];
    FILE *f = fopen(path.c_str(), "r");
    if(f)
    {
        for(int i = 0; i < 2; i++)
        {
            if (fread(bytes, sizeof (bytes),1, f))
            {
                header[i] = convert_to_little_endian(bytes);
            }
        }
        printf("Done getting Label File Header!\n");
        for(int i = 0; i < header; i++) {

            uint8_t element[1];

            if (fread(element, sizeof(element), 1, f)) {
                data_array->at(i)->set_lebal(element[0]);
                //printf("%d\n", i);
            } else {
                printf("Erro Reading from file.\n");
                exit(1);
                }
            }

        }
        printf("Successfully read and stored Labels.\n");
    }else
    {
        printf("Could not find file.\n");
        exit(1);
    }

void data_handler::split_data()
{
    std::unordered_set<int> used_indexes;
    int train_size = data_array->size() * TRAIN_SET_PERCENT;
    int test_size = data_array->size() * TEST_SET_PERCENT;
    int valid_size = data_array->size() * VALIDATION_PERCENT;

    int count = 0;
    while(count < train_size)
    {
        int rand_index = rand() % data_array->size();
        if(used_indexes.find(rand_index) == used_indexes.end())
        {
            training_data->push_back(data_array->at(rand_index));
            used_indexes.insert(rand_index);
            count++;
        }
    }
    count = 0;
    while(count < train_size)
    {
        int rand_index = rand() % data_array->size();
        if(used_indexes.find(rand_index) == used_indexes.end())
        {
            test_data->push_back(data_array->at(rand_index));
            used_indexes.insert(rand_index);
            count++;
        }
    }
    count = 0;
    while(count < valid_size)
    {
        int rand_index = rand() % data_array->size();
        if(used_indexes.find(rand_index) == used_indexes.end())
        {
            validition_data->push_back(data_array->at(rand_index));
            used_indexes.insert(rand_index);
            count++;
        }
    }

    printf("Training Data Size : %lu.\n", training_data->size());
    printf("Test Data Size : %lu.\n", test_data->size());
    printf("Validition Data Size : %lu.\n", validition_data->size());
}
void data_handler::count_classes()
{
    int count = 0;
    for(unsigned i = 0; i < data_array->size(); i++)
    {
        if(class_map.find(data_array->at(i)->get_label()) == class_map.end())
        {
            class_map[data_array->at(i)->get_label()] = count;
            data_array->at(i)->set_enumerated_label(count);
            count++;
        }
    }
    num_classes = count;
    printf("Successfully Extracted %d Unique Classes.\n", num_classes);
}
uint32_t data_handler::convert_to_little_endian(const unsigned char* bytes)
{
    return (uint32_t) ((bytes[0] << 24) |
                        bytes[1] << 16) |
                        bytes[2] << 8)  |
                        (bytes[3]));
}
std::vector<data *> * data_handler::get_training_data()
{
    return training_data;
}
std::vector<data *> * data_handler::get_test_data()
{
    return test_data;
}
std::vector<data *> * data_handler::get_validition_data()
{
    return validition_data;
}
int main()
{
    data_handler *dh = new data_handler();
    dh ->read_feature_vector("./FILE NAME");
    dh ->read_feature_labels("./FILE NAME");
    dh ->split_data();
    dh ->count_classes();
}