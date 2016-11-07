// fenwick tree
#include <stdio.h>
#include <stdlib.h>
#include<math.h>

int farr[100],size,a[100];
long binary(int x)
{
    int rem;int num =0;
	int i=0;
    while(x>0)
    {
        rem =x%2;
        x=x/2;
        num = rem* pow(10,i)+num;
		i++;

    }
    return num;
}

int todec(int x)
{
    int num=0; int rem;int i=0;
    while(x>0)
    {
        rem = x%10;
        num += rem*(pow(2,i));
        i++;
        x=x/10;
    }
    return num;
}

long twosC(long b)
{
    int rem; int num =0;
    int i=0;
    while(b>0)
    {
        rem=b%10;
        b= b/10;
        if(rem==1)
            num = num + (0*(pow(10,i)));
        else
            num = num+(1*(pow(10,i)));
        i++;

    }
    int dec = todec(num)  + 1;
    return binary(dec);
}

int nextelem(int cindex)
{
long x,y,z;
x=binary(cindex);
printf(" \n x=%d",x);
y=twosC(x);
z=y&x;
printf("\n z= %d",z);
z=todec(z)+todec(x);
printf("\n y=%d \n z=%d",y,z);
return (z);

}

void create ()
{
int i;
for(i=0; i<size;i++)
farr[i]=0;

}

void insert ()
{
printf("\n Enter the size of the array:");
//int size, a[];
int i,j,k;

scanf("%d",&size);
printf("\n Enter the elements:");
for( i=0; i<size; i++)
	scanf("%d",&a[i]);
printf("\n inside insert");
farr[0]=0;
for(k=0;k<size;k++)
{
j=k+1;

	while(j<=size)
	{
		printf(" \n %d",j);
		farr[j]=a[k]+farr[j];
		j=nextelem(j);
	}


}
}
void display()
{
int i;
for(i=0;i<size;i++)
printf("%d\n",farr[i]);
}

void main()
{
printf("a");
create();
insert();
//printf("\n %d", nextelem(4));
//printf("b");
//printf("\n 8=%d",binary(8));
display();
//system("clear");
}
