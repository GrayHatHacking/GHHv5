#include <string.h>
#include <execinfo.h>
#include <stdlib.h>
#include <unistd.h>
#include <stdio.h>
//smallbuff.c   This is a sample vulnerable program with a small buffer

int main(int argc, char * argv[], char **envp){
        char buff[10];  //small buffer
	  char** env;
	  for (env = envp; *env != 0; env++)
	  {
		char* thisEnv = *env;
		printf("%s\n", thisEnv);    
	}

        strcpy( buff, argv[1]);  //problem: vulnerable function call
}
