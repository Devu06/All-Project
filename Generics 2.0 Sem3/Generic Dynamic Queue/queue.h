#include <bits/stdc++.h>

using namespace std ;

template <class T>
class gqueue
{

protected :
    T* data;
	int front;
	int size;
	int cap ;

public :
    gqueue() {
		data = new T[5] ;
		size = 0 ;
		cap = 5 ;
		front = 0 ;
	}

	gqueue(int capacity) {
		data = new T[capacity] ;
		cap = capacity ;
		size = 0 ;
		front = 0 ;
	}

	void enqueue(T item){

		if (isFull()) {
            T* na = new T[2*cap];

			for (int i = 0; i < Size(); i++) {
				int idx = (i + front) % cap;
				na[i] = data[idx];
			}

			data = na;
			front = 0;
			cap=cap*2 ;
		}

		int idx = (front + size) % cap;
		data[idx] = item;

		size++;

	}

	T dequeue(){

		if (isEmpty()) {
			throw "Queue is Empty.";
		}

		T temp = data[front];
		data[front] = 0;

		front = (front + 1) % cap;
		size--;

		return temp;

	}

	T getFront(){

		if (isEmpty()) {
			throw "Queue is Empty.";
		}

		T temp = data[front];
		return temp;

	}

	int Size() {
		return size;
	}

	bool isEmpty() {
		return Size() == 0;
	}

    bool isFull() {
		return Size() == cap;
	}

	void display() {

		cout<<endl<<"---------------------"<<endl;

		for (int i = 0; i < Size(); i++) {

			int idx = (i + front) % cap;
			cout<<data[idx]<<" ";

		}

		cout<<".";
		cout<<endl<<"---------------------"<<endl;
	}

};
