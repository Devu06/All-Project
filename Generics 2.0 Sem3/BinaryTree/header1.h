#include <bits/stdc++.h>

using namespace std ;

struct Node
{
  int data ;
  struct Node* left ;
  struct Node* right ;
};

class btree
{
    struct Node* root ;

public:
    btree()
    {
        root=construct(NULL,false) ;
    }
    btree(int pre[] ,int n1 ,int in[] , int n2)
    {
        root=construct(pre , 0 , n1-1 , in , 0 , n2-1) ;
    }

private:
    struct Node* newnode(int n)
    {
        struct Node* node = (struct Node*)malloc(sizeof(struct Node)) ;
        node->data=n ;
        node->left = NULL ;
        node->right=NULL;

        return node ;
    }

    struct Node* construct(struct Node* parent , bool ilc)
    {
        if(parent == NULL)
        {
            cout<<"Enter the data for the root node " << endl;
        }
        else
        {
            if(ilc)
            {
                cout<<"Enter the data for the left child of "<<parent->data<<endl ;
            }
            else
            {
                cout<<"Enter the data for the right child of "<<parent->data<<endl ;
            }
        }

        int n ;
        cin>>n ;

        struct Node* node = newnode(n) ;

        cout<<node->data<<" Has left child ?(Y/N)"<<endl ;

        char hlc ;
        cin>>hlc ;

        if(hlc=='Y'|| hlc=='Y')
        {
            node->left=construct(node,true) ;
        }
        else if(hlc=='N' || hlc=='n')
        {
            node->left=NULL;
        }

        cout<<node->data<<" Has right child?(Y/N)"<<endl ;

        char hrc ;
        cin>>hrc ;

        if(hrc=='Y'|| hrc=='Y')
        {
            node->right=construct(node,false) ;
        }
        else if(hrc=='N' || hrc=='n')
        {
            node->right=NULL;
        }

        return node ;

    }

    struct Node* construct(int pre[] , int plo , int phi , int in[] , int inlo , int inhi)
    {
        if(plo>phi || inlo>inhi)
        {
            return NULL ;
        }
        int n = pre[plo] ;
        struct Node* nn = newnode(n) ;

        int si = -1;
		for (int i = inlo; i <= inhi; i++) {
			if (pre[plo] == in[i]) {
				si = i;
				break;
			}
		}

		int nel = si - inlo;

		nn->left = construct(pre, plo + 1, plo + nel, in, inlo, si - 1);
		nn->right = construct(pre, plo + nel + 1, phi, in, si + 1, inhi);

		return nn;
    }

public:

    void display()
    {
        cout<<"--------------------------------------"<<endl ;
        if(root!=NULL)
        {
            display(root) ;
        }
        cout<<"--------------------------------------"<<endl ;

    }

    int size()
    {
        return size(root) ;
    }

    int max()
    {
        return max(root) ;
    }

    bool find(int item)
    {
        return find(item, root) ;
    }

    int ht()
    {
        return ht(root) ;
    }

    bool isbalanced()
    {
        return isbalanced(root)->b ;
    }

    bool flipequivalent(btree* other)
    {
        return flipequivalent(this->root , other->root ) ;
    }

    void preorder_display()
    {
        preorder(root) ;
        cout<<endl ;
    }

    void inorder_display()
    {
        inorder(root);
        cout<<endl ;
    }

    void postorder_display()
    {
        postorder(root) ;
        cout<<endl ;
    }

    int maxSubTreeSum()
    {
        return maxSubTreeSum(root)->maxsum ;
    }

    bool isTreeBST()
    {
        BSTPair* res = isTreeBST(root) ;
        cout<<res->largestBSTRoot->data ;
        cout<<res->size ;
    }

    void levelDisplay()
    {
        int nol = ht(root)+1 ;
        list<int>* levelorder = new list<int>[nol] ;
        levelDisplay(root,0,levelorder) ;

        list<int> :: iterator itr ;

        for(int i = 0 ; i<nol ; i++)
        {
            for(itr=levelorder[i].begin() ; itr != levelorder[i].end() ; itr++ )
            {
                cout<<*itr<<"  " ;
            }
        }
    }

private:
    void display(struct Node* node)
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

    int size(struct Node* node)
    {
        if(node==NULL)
        {
            return 0;
        }
        int ls = size(node->left) ;
        int rs = size(node->right) ;

        return ls+rs+1 ;
    }

    bool comp(int a, int b)
    {
        return (a < b);
    }

    int max(struct Node* node)
    {
        if(node==NULL)
        {
            return INT_MIN ;
        }
        int lm = max(node->left);
        int rm = max(node->right);
        int MAX = std::max(lm,rm) ;
        MAX=std::max(node->data,MAX) ;

        return MAX ;
    }

    bool find(int item , struct Node* node)
    {
        if(node==NULL)
        {
            return false;
        }

        bool sf=(item==node->data)?true:false ;
        bool lf=find(item , node->left) ;
        bool rf=find(item , node->right) ;

        return (sf || lf || rf) ;

    }

    int ht(struct Node* node)
    {
        if (node == NULL) {
			return -1;
		}

		int lh = ht(node->left);
		int rh = ht(node->right);

		return (std::max(lh, rh) + 1);
    }

    class BalPair
    {
    public:
        bool b ;
        int ht ;

        BalPair()
        {
            b=true ;
            ht=-1;
        }
    };

    BalPair* isbalanced(struct Node* node)
    {
        if(node==NULL)
        {
            BalPair* bp = new BalPair ;
            return bp ;
        }

        BalPair* lbp = isbalanced(node->left) ;
        BalPair* rbp = isbalanced(node->right) ;

        BalPair* sbp = new BalPair ;

        bool lb = lbp->b ;
        bool rb = rbp->b ;

        int bf = lbp->ht-rbp->ht ;

        if( bf==0 || bf == -1 || bf==1 || lb || rb)
        {
            sbp->b=true;
        }
        else
        {
            sbp->b=false;
        }

        sbp->ht = std::max(lbp->ht,rbp->ht) +1 ;

        return sbp ;
    }

    bool flipequivalent(struct Node* n1 , struct Node* n2)
    {
        if(n1==NULL && n2==NULL)
        {
            return true;
        }

        if(n1==NULL || n2==NULL)
        {
            return false ;
        }

        if(n1->data!=n2->data)
        {
            return false;
        }

        bool o1 = flipequivalent(n1->left, n2->right) ;
        bool o2 = flipequivalent(n1->right, n2->right) ;

        bool o3 = flipequivalent(n1->left, n2->right) ;
        bool o4 = flipequivalent(n1->right, n2->left) ;

        return (o1&&o2)||(o3&&o4) ;
    }

    void preorder(struct Node* node)
    {
        cout<<node->data<<" " ;
        preorder(node->left) ;
        preorder(node->right) ;
    }

    void inorder(struct Node* node)
    {
        inorder(node->left) ;
        cout<<node->data<<" " ;
        inorder(node->right) ;
    }

    void postorder(struct Node* node)
    {
        preorder(node->left) ;
        preorder(node->right) ;
        cout<<node->data<<" " ;
    }

    class subTreePair
    {
    public:
        int entiresum;
        int maxsum;
        subTreePair()
        {
            entiresum=0 ;
            maxsum=INT_MIN ;
        }
    };

    subTreePair* maxSubTreeSum(struct Node* node)
    {
        if(node==NULL)
        {
            subTreePair* stp= new subTreePair ;
            return stp ;
        }

        subTreePair* lstp = maxSubTreeSum(node->left) ;
        subTreePair* rstp = maxSubTreeSum(node->right) ;

        subTreePair* sstp = new subTreePair ;

        sstp->entiresum = lstp->entiresum + rstp->entiresum + node->data ;
        sstp->maxsum = std::max(lstp->maxsum , rstp->maxsum) ;
        sstp->maxsum = std::max(sstp->entiresum , sstp->maxsum) ;

        return sstp ;
    }

    class BSTPair
    {
    public:
		bool isBST ;
		int max ;
		int min ;

		struct Node* largestBSTRoot;
		int size;

		BSTPair()
		{
            isBST=true;
            max = INT_MIN ;
            min = INT_MAX ;

		}
	};

	BSTPair* isTreeBST(struct Node* node)
	{
        if (node == NULL)
        {
			BSTPair* bp = new BSTPair ;
			return bp;
		}

		BSTPair* lbp = isTreeBST(node->left);
		BSTPair* rbp = isTreeBST(node->right);

		BSTPair* sbp = new BSTPair;

		if (lbp->isBST && rbp->isBST && node->data > lbp->max && node->data < rbp->min) {
			sbp->isBST = true;

			sbp->largestBSTRoot = node;
			sbp->size = lbp->size + rbp->size + 1;
		} else {
			sbp->isBST = false;

			if (lbp->size >= rbp->size) {
				sbp->largestBSTRoot = lbp->largestBSTRoot;
				sbp->size = lbp->size;
			} else {
				sbp->largestBSTRoot = rbp->largestBSTRoot;
				sbp->size = rbp->size;
			}

		}

		sbp->max = std::max(lbp->max, rbp->max);
		sbp->max = std::max(node->data, sbp->max);
		sbp->min = std::min(lbp->min, rbp->min);
		sbp->min = std::min(node->data, sbp->min);

		return sbp;
	}

	void levelDisplay(struct Node* node , int level , list<int>* levellist )
	{
        if(node==NULL)
        {
            return ;
        }

        levellist[level].push_back(node->data) ;

        levelDisplay(node->left , level+1 , levellist) ;
        levelDisplay(node->right , level+1 , levellist) ;

        return ;
	}



};

