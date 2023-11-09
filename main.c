#include <stdio.h>
/*For example, you have a database with 16 members */
int main ()
{
  int myNumbers[] = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16 };
/* We divide the data into four parts and you choose the number you like from each part */
  printf ("%d", myNumbers[2]);
  printf ("%d", myNumbers[6]);
  printf ("%d", myNumbers[8]);
  printf ("%d", myNumbers[11]);
  /* The unconscious nodes that were created in the previous step, the
   * encryption work, which is simple, has been done, and it is tasteful. Now,
   * for entering, I want one of those nodes from you for each step. */
  int myNum = 3;
  int myNum1 = 7;
  int myNum2 = 9;
  int myNum3 = 16;
  /* At each stage, if you say the node correctly, you will receive a part of the information related to that node */
if (myNum = 3) {
    printf ("%d", myNumbers[0]);
    printf ("%d", myNumbers[1]);
    printf ("%d", myNumbers[3]);
    printf ("%d", myNumbers[2]);
  }
//If you enter the wrong node, we will create a unique path for you that will give you the information in the wrong order
else
  {
    printf ("%d", myNumbers[2]);
    printf ("%d", myNumbers[2]);
    printf ("%d", myNumbers[1]);
    printf ("%d", myNumbers[2]);
}
  return 0;
}
