//strfmt.c
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

static int canary=0;   // stores the canary value in .data section
static void checkCanary(void) __attribute__ ((destructor));

int main(int argc, char *argv[]){
    char temp[2048];       // string to hold large temp string
    strcpy(temp, argv[1]);   // take argv1 input and jam into temp
    printf(temp);            // print value of temp
    printf("\n");            // print carriage return
}

void checkCanary(void)
{
    printf("Canary at 0x%08x = 0x%08x\n", &canary, canary); //print canary
}

