#include <stdio.h> 
int main() { 
int A, C;
float B;
printf("informe o valor pra A");
scanf("%i",&A);
printf("informe o valor de B");
scanf("%f",&B);
printf("informe o valor de C");
scanf("%i",&C);
B = A+C; 
printf("o valor de B = %.0f que é a soma de A = %i e c = %i", B, A, C);
    return 0;
}

