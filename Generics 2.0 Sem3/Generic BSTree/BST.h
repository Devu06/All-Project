#include <bits/stdc++.h>

using namespace std ;

template <class T>
class Node
{
public:

    T data ;
    Node<T>* left ;
    Node<T>* right ;

    Node(T n)
    {
        data=n ;
        left=NULL ;
        right=NULL ;
    }
    Node()
    {
        left=NULL;
        right=NULL;
    }

};

template <class T>
class BSTree
{
    Node<T>* root ;


public:
    BSTree(T n)
    {
       root = new Node<T>(n) ;
    }
    BSTree()
    {
       root = NULL ;
    }

    BSTree(T in[] , int cap )
    {
		root = construct(in, 0, cap - 1);
	}


    void display()
    {
		cout<<endl<<"------------------------"<<endl;
		display(root);
		cout<<endl<<"------------------------"<<endl;
	}

    int size()
    {
		return size(root);
	}

    T max()
    {
		return max(root);
	}


	int ht()
	{
		return ht(root);
	}

    bool find(T item)
    {
		return find(root, item);
	}

    void printInRange(int lo, int hi)
    {
		printInRange(root, lo, hi);
	}

    void add(T item)
    {
		 add(root, item);
	}

    void remove(T item)
    {
		remove(root, NULL, item);
	}

private:

    Node<T>* construct( T in[], int lo, int hi)
    {

		if (lo > hi) {
			return NULL;
		}

		int mid = (lo + hi) / 2;

		Node<T>* nn = new Node<T>();
		nn->data = in[mid];

		nn->left = construct(in, lo, mid - 1);
		nn->right = construct(in, mid + 1, hi);

		return nn;

	}


    void display(Node<T>* node)
    {
        if(node->left!=NULL)
        {
            cout<<node->left->data<<"   ->" ;
        }
        else
        {
            cout<<".    ->" ;
        }
        cout<<node->data ;

        if(node->right!=NULL)
        {
            cout<<"<-   "<<node->right->data <<endl ;
        }
        else
        {
            cout<<"<-   ."<<endl;
        }

        if(node->left!=NULL)
        {
            display(node->left) ;
        }

        if(node->right!=NULL)
        {
            display(node->right) ;
        }
    }



	int size(Node<T>* node) {

		if (node == NULL) {
			return 0;
		}

		int ls = size(node->left);
		int rs = size(node->right);

		return ls + rs + 1;
	}



	T max(Node<T>* node) {

		if (node->right == NULL) {
			return node->data;
		}

		return max(node->right);
	}




	bool find(Node<T>* node, T item) {

		if (node == NULL)
			return false;

		if (item < node->data)
		{
			return find(node->left, item);
		}
		else if (item > node->data)
		{
			return find(node->right, item);
		}
		else
		{
			return true;
		}

	}



	int ht(Node<T>* node) {

		if (node == NULL) {
			return -1;
		}

		int lh = ht(node->left);
		int rh = ht(node->right);

		return std::max(lh, rh) + 1;

	}



	void printInRange(Node<T>* node, T lo, T hi) {

		if (node == NULL)
        {
			return;
		}

		if (node->data < lo) {
			printInRange(node->right, lo, hi);
		}

		if (node->data > hi) {
			printInRange(node->left, lo, hi);
		}

		if (node->data >= lo && node->data <= hi) {

			printInRange(node->left, lo, hi);
			cout<<node->data<<"  ";
			printInRange(node->right, lo, hi);

		}

	}




	void add(Node<T>* node, T item) {

        if(node==NULL)
        {
            Node<T>* nn = new Node<T>(item) ;
            root = node ;
        }
		else if (item <= node->data)
		{

			if (node->left == NULL)
			{
				Node<T>* nn = new Node<T>();
				nn->data = item;
				node->left = nn;
			}
			else
			{
				add(node->left, item);
			}

		}
		else {

			if (node->right == NULL)
			{

				Node<T>* nn = new Node<T>();
				nn->data = item;
				node->right = nn;
			}
            else
            {
				add(node->right, item);
			}

		}

	}




	void remove(Node<T>* node, Node<T>* parent, int item) {

		if (node == NULL)
		{
			return;
		}

		if (item < node->data)
		{
			remove(node->left, node, item);
		}
		else if (item > node->data)
		{
			remove(node->right, node, item);
		}
		else
		{

			if (node->left == NULL && node->right == NULL)
			{

				if (node->data <= parent->data)
				{
					parent->left = NULL;
				}
				else
				{
					parent->right = NULL;
				}
			}
			else if (node->left == NULL && node->right != NULL)
			{

				if (node->data <= parent->data)
				{
					parent->left = node->right;
				}
				else
				{
					parent->right = node->right;
				}

			}
			else if (node->left != NULL && node->right == NULL)
			{

				if (node->data <= parent->data)
				{
					parent->left = node->left;
				}
				else
				{
					parent->right = node->left;
				}

			}
			else
			{

				T temp = max(node->left);
				node->data = temp;
				remove(node->left, node, temp);

			}

		}

	}

};
