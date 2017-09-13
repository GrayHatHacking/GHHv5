//fmtstr.c
#include <string.h>
#include <stdio.h>
int main(int argc, char *argv[]){
  int canary=0;   // stores the canary value in .data section
  char temp[2048];       // string to hold large temp string
  strcpy(temp, argv[1]);   // take argv1 input and jam into temp
  printf(temp);            // print value of temp
  printf("\n");            // print carriage return
  printf("Canary at 0x%08x = 0x%08x\n", &canary, canary); //print canary
}
