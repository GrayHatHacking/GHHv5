#include <stdio.h>
#include <stdlib.h>
#code adapted with permission from Gynvael -
#https://github.com/gynvael/stream-en/tree/master/019-genetic-fuzzing

int main(int argc, char **argv) {
  FILE *f = fopen(argv[1], "rb");
  if (!f) {
    return 1;
  }

  char buf[16] = {0};
  fread(buf, 1, 16, f);
  fclose(f);

  if (buf[0] == 'a') {
    if (buf[1] == 'b') {
      if (buf[2] == 'c') {
        if (buf[3] == 'd') {
          if (buf[4] == 'e') {
            if (buf[5] == 'f') {
              if (buf[6] == 'g') {
                if (buf[7] == 'h') {
                                abort();
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
  return 0;

}
