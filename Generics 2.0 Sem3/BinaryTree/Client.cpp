#include <bits/stdc++.h>

using namespace std ;

#include "header1.h"

int main()
{
    int pre[] = { 10, 500, 30, 60, 55, 70, 20, 150, 300, 250, 400, 500 };
    int in[] = { 30, 500, 55, 60, 70, 10, 150, 20, 250, 300, 400, 500 };
    btree* bt = new btree(pre ,12 , in ,12);
    bt->display() ;
    cout<<bt->size()<<endl ;
//    bt->levelDisplay() ;
    return 0;
}

