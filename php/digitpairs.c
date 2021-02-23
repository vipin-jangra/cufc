#include<stdio.h>

int main()

{

int N,j,num,largest=0,smallest=1000,remd,i,count,numOfPairs=0;

int numbers[500],bitScore[500];

char tem;

scanf("%d",&N);

j=0;

do {

scanf("%d%c", &numbers[j], &tem);

j++;

} while(tem != '\n');

for(j=0;j<N;j++)

{

num=numbers[j];

largest=0;

smallest=1000;

while (num > 0) {

remd = num % 10;

if (remd > largest)

{

largest = remd;

}

if (remd < smallest)

{

smallest = remd;

}

num = num / 10;

}

bitScore[j]=((largest*11)+(smallest*7))%100;

}

for(i=1;i<9;i++)

{

count=0;

for(j=0;j<N;j=j+2)

{

num=bitScore[j]/10;

if(num==i)

count++;

}

if(count==2)

numOfPairs++;

else if(count>=3)

numOfPairs=numOfPairs+2;

count=0;

for(j=1;j<N;j=j+2)

{

num=bitScore[j]/10;

if(num==i)

count++;

}

if(count==2)

numOfPairs++;

else if(count>=3)

numOfPairs=numOfPairs+2;

}

printf("%d", numOfPairs);

getchar();

}
