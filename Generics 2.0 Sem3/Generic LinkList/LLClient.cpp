#include <bits/stdc++.h>

using namespace std ;

#include "LinkList.h"

int main()
{
    try
    {
        linkedlist<int> lt ;
        lt.addFirst(3) ;
        lt.addLast(4) ;
        lt.addLast(5) ;
        lt.display() ;
        cout<<lt.getsize() ;
        lt.addAt(6,3) ;
        lt.display() ;
        cout<<lt.removeFirst() ;
        lt.display() ;
        cout<<lt.removeAt(2) ;
        lt.addFirst(3);
        lt.addFirst(2);
        lt.addFirst(1) ;
        lt.addLast(6) ;
        lt.addLast(7);
        lt.addLast(8);
        lt.addLast(9);
        lt.display() ;
        lt.kReverse(3);
        lt.display() ;
        cout<<lt.kthFromLast(4) ;
        lt.RPR() ;
        lt.display();

    }
    catch(const char* mssg)
    {
        cout<<endl<<mssg<<"." ;
    }

    return 0 ;
}
