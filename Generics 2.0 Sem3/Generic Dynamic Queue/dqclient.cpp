#include <bits/stdc++.h>

using namespace std ;

#include "queue.h"

int main()
{
    gqueue<int> gq ;
    gq.enqueue(5) ;
    gq.enqueue(6) ;
    gq.enqueue(7) ;
    gq.enqueue(8) ;
    gq.enqueue(9) ;
    gq.display() ;
    gq.enqueue(10) ;
    cout<<gq.dequeue() ;
    gq.display() ;


    return 0 ;
}
