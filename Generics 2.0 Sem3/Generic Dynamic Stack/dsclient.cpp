#include <bits/stdc++.h>

using namespace std ;

#include "stack.h"


int main()
{
    gstack<char> gs ;
    gs.push('a') ;
    gs.push('b') ;
    gs.push('c') ;
    gs.push('d') ;
    gs.push('e') ;
    gs.display() ;
    gs.push('f') ;
    gs.display() ;
    cout<<gs.pop()<<endl  ;
    return 0 ;
}
