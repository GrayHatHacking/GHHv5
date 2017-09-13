//overflow.c
#include <string.h>
main(){
  char str1[10];    //declare a 10 byte string
  //next, copy 35 bytes of "A" to str1
  strcpy (str1, "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
}
