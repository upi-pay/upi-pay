#include<iostream>
#include<bits/stdc++.h>
using namespace std;
int main()
{
    int process[10];
    int AT[10];
    int BT[10];
    int TAT[10];
    int CT[10];
    int WT[10];
    int n;
    int total_wt=0;
    int total_tat=0;  
    int mx_ct=0;
    int min_at=0;
    cout<<"\n Enter the number of processes you wish to enter ";
    cin>>n;
    
    cout<<"Enter the process-id ";
    for(int i=0;i<n;i++)
    {
    cin>>process[i]; 
    }

    cout<<"Enter the AT ";
    for(int i=0;i<n;i++)
    {
    cin>>AT[i]; 
    }

    cout<<"Enter the BT ";
    for(int i=0;i<n;i++)
    {
    cin>>BT[i]; 
    }

//sort
   vector<vector<int>> v(n);
    for(int i=0; i<n; i++){
        v[i].push_back(process[i]);
        v[i].push_back(AT[i]);
        v[i].push_back(BT[i]);
    }
    sort(v.begin(), v.end(), [](const vector<int>& a, const vector<int>& b) {return a[1] < b[1]; });
    for(int i=0; i<n; i++){
        process[i] = v[i][0];
        AT[i] = v[i][1];
        BT[i] = v[i][2];
    }

//CT
        for(int j=0;j<n;j++)
        {
              CT[0]=AT[0]+BT[0];
              CT[j]=CT[j-1]+BT[j];
        }

//tat   
        for (int  i = 0; i < n ; i++)
        {
        TAT[i] = CT[i] - AT[i];
    }

//wt   
        for (int  i = 0; i < n ; i++)
        {
        WT[i] = TAT[i] - BT[i];
        }

//avg wt and tat    
    for (int  i=0; i<n; i++)
    {
        total_wt = total_wt + WT[i];
        total_tat = total_tat + TAT[i];
    
    }

    cout << "\n Process  "<< " AT  "
         << " BT  " << " CT  "<<" TAT "<<" WT \n";
    for(int i=0;i<n;i++)
    {
        cout<<"\n  "<<process[i]<<"      " <<AT[i]<<"      "<<BT[i]<<"     "<<CT[i]<<"    "<<TAT[i]<<"    "<<WT[i];
    } 
    
      cout << "\n Average waiting time = "
         << (float)total_wt / (float)n;
      cout << "\n Average turn around time = "
         << (float)total_tat / (float)n;
    

        for(int i=0;i<n;i++)
    {
          if (CT[i]>mx_ct) 
              mx_ct=CT[i];
    }

    for(int i=0;i<n;i++)
    {
          if (AT[i]<min_at) 
              min_at=AT[i];

    }

     float schedule_length = mx_ct-min_at;
     cout<<"\n Schedule Length : "<<schedule_length;

     float Throughput= n/schedule_length;
    cout<<"\n Throughput : "<<Throughput;
    
    //chart
    cout<<"\n \n Gantt Chart: \n";
    for(int i=0; i<n; i++){
        if (i==0) {
            cout<<" ";
        }
        else {
            for(int j=0; j<CT[i-1]; j++) cout<<"--";
            cout<<"---";
        }
    }
    for(int j=0; j<CT[int(n)-1]; j++) cout<<"--";
    cout<<endl;
    for(int i=0; i<n; i++){
        if (i==0) {
            cout<<"|";
        }
        else {
            for(int j=0; j<CT[i-1]/2; j++) {
                cout<<"  ";
            }
            cout<<"P"<<process[i-1];
            for(int j=0; j<CT[i-1]/2; j++) {
                cout<<"  ";
            }
            cout<<"|";
        }
    }
    for(int j=0; j<CT[int(n)-1]/2; j++) {
        cout<<"  ";
    }
    cout<<"P"<<process[int(n)-1];
    for(int j=0; j<CT[int(n)-1]/2; j++) {
        cout<<"  ";
    }
    cout<<"|";
    cout<<endl;
    for(int i=0; i<n; i++){
        if (i==0) {
            cout<<" ";
        }
        else {
            for(int j=0; j<CT[i-1]; j++) cout<<"--";
            cout<<"---";
        }
    }
    for(int j=0; j<CT[int(n)-1]; j++) cout<<"--";
    cout<<endl;
    for(int i=0; i<n; i++){
        if (i==0) {
            cout<<"0";
        }
        else {
            for(int j=0; j<CT[i-1]; j++) cout<<"  ";
            cout<<" ";
            cout<<CT[i-1];
        }
    }
    for(int j=0; j<CT[int(n)-1]; j++) cout<<"  ";
    cout<<CT[int(n)-1]<<endl;
    cout<<endl;
        return 0;
   
}

