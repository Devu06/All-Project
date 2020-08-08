#include <bits/stdc++.h>

using namespace std ;

template <class T>

class Node
{
public:

    T data ;
    Node<T>* next ;

    Node(T n)
    {
        data=n ;
        next=NULL ;
    }
    Node()
    {
        next=NULL;
    }

};

template <class T>

class linkedlist
{
    Node<T>* head ;
    Node<T>* tail ;
    int size ;

public:
    linkedlist(T n)
    {
       this.head = new Node<T>(n) ;
       this.tail = head ;
       this.size = 1;
    }
    linkedlist()
    {
       head = NULL ;
       tail = head ;
       size = 0;
    }



    bool isEmpty() //O(1)
    {
        return size==0 ;
    }


    int getsize()
    {
        return size ;
    }



    T getFirst() //O(1)
    {
        if(size==0)
        {
            throw "LL is Empty" ;
        }
        return head.data ;
    }



    T getLast() //O(1)
    {
        if(size==0)
        {
            throw "LL is Empty" ;
        }
        return tail.data;
    }



    T getAt(int idx) //O(n)
    {
        if(size == 0)
        {
            throw "LL is Empty" ;
        }

        if(idx<0 || idx >= size)
        {
            throw "Invalid index." ;
        }

        Node<T> temp = head ;

        for(int i = 1 ; i<=idx ; i++)
        {
            temp=temp.next ;
        }

        return temp.data;
    }



private:
    Node<T>* getNodeAt(int idx)  //O(n)
    {
        if(size==0)
        {
            throw "LL is Empty" ;
        }

        if(idx<0 || idx >= size)
        {
            throw "Invalid index." ;
        }

        Node<T>* temp = head ;

        for(int i = 1 ; i<=idx ; i++)
        {
            temp=temp->next ;
        }

        return temp;
    }



public :
    void display()
    {
        cout<<endl<<"---------------------------"<<endl ;

        Node<T>* temp = head ;

        while(temp!=NULL)
        {
            cout<<temp->data<<" -> " ;
            temp=temp->next ;
        }

        cout<<"NULL"<<endl ;

        cout<<"---------------------------"<<endl ;
    }



    void addLast(T item)    //O(1)
    {
        Node<T>* nn = new Node<T>(item) ;

        if(size>0)
        {
            tail->next=nn ;
        }

        if(size==0)
        {
            head = nn ;
            tail = head ;
            size++;
        }
        else
        {
            tail = nn ;
            size++;
        }
    }



    void addFirst(T item)    //O(1)
    {
        Node<T>* nn = new Node<T>(item) ;

        if(size>0)
        {
            nn->next=head ;
        }

        if(size==0)
        {
            head = nn ;
            tail= head ;
            size++;
        }
        else
        {
            head = nn ;
            size++;
        }
    }



    void addAt(T item , int idx)    //O(n)
    {
        if(idx<0 || idx>size)
        {
            throw "Invalid Index" ;
        }

        if(idx == 0)
        {
            addFirst(item) ;
        }
        else if(idx == size)
        {
            addLast(item) ;
        }
        else
        {
            Node<T>* nn = new Node<T>(item) ;

            Node<T>* nm1 = getNodeAt(idx-1) ;
            Node<T>* np1 = nm1->next ;

            nm1->next = nn ;
            nn->next = np1 ;

            size++ ;
        }
    }



    T removeFirst() //O(1)
    {
        if(size==0)
        {
            throw "LL is Empty" ;
        }

        T temp = head->data ;

        if(size==1)
        {
            head = NULL ;
            tail = head ;
            size--;
        }
        else
        {
            head = head->next ;
            size-- ;
        }

        return temp ;
    }



    T removeLast() //O(n)
    {
        if(size==0)
        {
            throw "LL is Empty" ;
        }

        T temp = tail->data ;
        if(size==1)
        {
            head = NULL ;
            tail = NULL;
            size--;
        }
        else
        {
            Node<T>* sm2 = getNodeAt(size-2) ;

            sm2->next = NULL ;

            tail = sm2 ;
            size -- ;
        }

        return temp ;
    }



    T removeAt(int idx)
    {
        if(size == 0)
        {
            throw "LL is Empty" ;
        }

        if(idx < 0 || idx>= size)
        {
            throw "Invalid Index" ;
        }

        if(idx==0 )
        {
            return removeFirst() ;
        }
        else if(idx==size-1)
        {
            return removeLast() ;
        }
        else
        {
            Node<T>* nm1 = getNodeAt(idx-1) ;
            Node<T>* n = nm1->next ;
            Node<T>* np1 = n->next ;

            nm1->next=np1 ;

            size-- ;
            return n->data ;
        }

    }



    void RPR() //reverse using recursion
    {
        RPR(head, head->next);

        // head tail swap
        Node<T>* temp = head;
        head = tail;
        tail = temp;

        tail->next = NULL;

    }


private:
    void RPR(Node<T>* prev , Node<T>* curr)
    {
        if (curr == NULL) {
			return;
		}

		RPR(curr, curr->next);
		curr->next = prev;
    }


public:

    int mid()
    {
        Node<T>* slow = head;
		Node<T>* fast = head;

		while (fast->next != NULL && fast->next->next != NULL) {
			slow = slow->next;
			fast = fast->next->next;
		}

		return slow->data;
    }



    int kthFromLast(int k)
    {

		Node<T>* slow = head;
		Node<T>* fast = head;

		for (int i = 1; i <= k; i++) {
			fast = fast->next;
		}

		while (fast != NULL) {
			slow = slow->next;
			fast = fast->next;
		}

		return slow->data;
	}



    bool isLoopPresent()
    {
        Node<T>* slow = head ;
        Node<T>* fast = head ;
        while (fast != NULL && fast->next != NULL) {

			slow = slow->next;
			fast = fast->next->next;

			if (slow == fast) {
				return true;
			}
		}
		return false ;

    }



    void removeLoop()
    {

        Node<T>* slow = head;
        Node<T>* fast = head;

        while (fast != NULL && fast->next != NULL) {

            slow = slow->next;
            fast = fast->next->next;

            if (slow == fast) {
                break;
            }
        }
        if (slow == fast)
        {

			Node<T>* loop = slow;
			Node<T>* start = head;

			while (loop->next != start->next) {

				loop = loop->next;
				start = start->next;

			}

			loop->next = NULL;

			cout<<endl<<"Loop removal successful";
		}
        else {
			cout<<endl<<"No Loop present";
		}


    }



    void kReverse(int k)
    {
        linkedlist<T> prev ;

		while (size != 0) {

			linkedlist<T> curr ;

			for (int i = 1; i <= k && size != 0; i++) {
				curr.addFirst(removeFirst());
			}

			if (prev.head == NULL) {
				prev = curr;
			} else {
				prev.tail->next = curr.head;
				prev.tail = curr.tail;
				prev.size += curr.size;
			}

		}

		head = prev.head;
		tail = prev.tail;
		size = prev.size;

    }


};
