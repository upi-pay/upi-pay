#include<iostream>
#include<bits/stdc++.h>
using namespace std;
int main()
{
   int ipstream[]={7,1,5,4,6,2,3,0,3,0,2,5};
   int m,n,s,pgs;
   int frames =3;
   int pgfault=0;
   
   pgs=sizeof(ipstream)/sizeof(ipstream[0]);
   cout<<"Incoming \t Frame1 \t Frame2 \t Frame3 \t";
   int temp[frames];

   for(m=0;m<frames;m++){
    temp[m]=-1;
   }
   for(m=0;m<pgs;m++)
   {
    s=0;
    for(n=0;n<frames;n++)
    {
        if(ipstream[m]==temp[n])
        {
            s++;
            pgfault--;
        }
    }
    pgfault++;


// fault check krto
    if((pgfault <= frames) && s==0)
    {
        temp[m]=ipstream[m];

    }
    else if(s==0)
    {
        temp[(pgfault-1)%frames]=ipstream[m];
    }
   
    cout<<"\n";
    cout<<ipstream[m]<<"\t \t \t";
     for(n=0;n<frames;n++)
     {
      if(temp[n]!=-1)
      {
        cout<<temp[n]<<"\t \t \t";
      }
      else{
        cout<<"- \t \t \t";
      }
     }


   }
cout<<endl;
cout<<"Total pagefaults "<<pgfault<<endl;

cout<<"Total pagehit "<<pgs-pgfault<<endl;

return 0;
}