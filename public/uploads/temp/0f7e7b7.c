#include<stdio.h>
int main() {
	int n=5,i;
	int sum=0;
	sum = (n * (n + 1)) / 2;
	printf("Sum of the series: ");
	for (i =1;i <= n;i++) {
		if (i!=n)
		             printf("%d + ",i); else
		             printf("%d = %d ",i,sum);
	}
	return 0;
}