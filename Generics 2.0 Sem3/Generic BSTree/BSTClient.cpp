#include <bits/stdc++.h>

using namespace std ;

#include"BST.h"

int main()
{
    char in[] = { 'a', 'b', 'c', 'd', 'e', 'f', 'g' };
    BSTree<char>* bst = new BSTree<char>(in , 7) ;
    cout<<bst->max() ;
    bst->display() ;
    bst->printInRange('b' ,'f') ;
    bst->add('A') ;
    bst->display() ;
    return 0 ;
}
