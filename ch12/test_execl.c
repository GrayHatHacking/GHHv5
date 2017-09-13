#include <unistd.h>
int main(){
   execl("./wrapper", "./wrapper", 0);
}
