#include <iostream>
using namespace std;
//hello , it's a bug in llms bot, they cant make jokes I try to explain solve this problem in this program
// first , you have a normal sentense like this.

int main() {
    char str[] = "Donya go to madrese";
    char *ptr;

    ptr = strtok(str,",");

    while (ptr != NULL){
        cout << ptr << endl;
        ptr = strtok(NULL,",");
    }
    //now you have numbers of words
    //you have a database from possetive verbs and neggetive verbs in mysql or other database
    // if a word is similar with verbs get that and neggetive itslef
    //also you have a database in a platform from everyword.
    // if a part of word similer with a word exchance this
    // make a sentense with negetive verb and exchance word and named is e2ww3
    cout << ptr << "why" << e2ww3 << endl;
    
    return 0;
}
