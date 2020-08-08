#include <bits/stdc++.h>

using namespace std ;

template <class T>
class gstack
{
protected:
    T* data ;
    int tos ;
    int cap ;

public:
    gstack(int capacity)
    {
		data = new T[capacity] ;
		tos = -1 ;
		cap = capacity ;
	}

	gstack()
    {
		data = new T[5] ;
		tos = -1 ;
		cap = 5 ;
	}

	void push(T item)
	{

		if (isFull()) {
            // create a new array of twice size
			T* na = new T[cap];

			// copy the previous values
			for (int i = 0; i < cap; i++) {
				na[i] = data[i];
			}

			// change the reference
			data = na;
		}

		tos++;
		data[tos] = item;
	}

	T pop(){

		if (isEmpty()) {
			throw "Stack is Empty.";
		}

		T temp = data[tos];
		data[tos] = 0;
		tos--;
		return temp;
	}

	T top(){

		if (isEmpty()) {
			throw "Stack is Empty.";
		}

		T temp = data[tos];
		return temp;
	}

    int size() {
		return tos+1;
	}

	bool isEmpty() {
		return size()==0;
	}

	bool isFull() {
		return size()==cap;
	}

	void display() {

		cout<<endl<<"----------------"<<endl;

		for (int i = tos; i >= 0; i--) {
			cout<<data[i]<<" ";
		}

		cout<<".";
		cout<<endl<<"----------------"<<endl;

	}

};
