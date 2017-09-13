#include <stdio.h>
void main() {
        register int i asm("esp");
        printf("$esp = %#010x\n", i);
}
