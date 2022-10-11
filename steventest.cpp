#include <iostream>
#include <conio.h> 
using namespace std;

//MERGE SORT


struct mahasiswa {
	string nama;
	int nim;
	double ipk;
};

/* Link list node */
struct Node {
	mahasiswa data;
	Node *next;
};

/* function prototypes */
Node *SortedMerge(Node *a, Node *b);
void FrontBackSplit(Node *source, Node **frontRef, Node **backRef);
/* sorts the linked list by changing next pointers (not data) */
void MergeSort(Node **headRef){
	Node *head = *headRef;
	Node *a;
	Node *b;
/* Base case -- length 0 or 1 */
	if ((head == NULL) || (head->next == NULL)){
	  return;
	}
	/* Split head into 'a' and 'b' sublists */
	FrontBackSplit(head, &a, &b);
	/* Recursively sort the sublists */
	MergeSort(&a);
	MergeSort(&b);
	/* answer = merge the two sorted lists together */
	*headRef = SortedMerge(a, b);
}
/* See https:// www.geeksforgeeks.org/?p=3622 for details of this
function */
Node *SortedMerge(Node *a, Node *b){
	Node *result = NULL;
	/* Base cases */
	if (a == NULL)
		return (b);
	else if (b == NULL)
		return (a);
	/* Pick either a or b, and recur */
	if (a->data.nama <= b->data.nama){
		
		result = a;
		result->next = SortedMerge(a->next, b);
	}
	else{
		result = b;
		result->next = SortedMerge(a, b->next);
	}
	return (result);
}



/* UTILITY FUNCTIONS */
/* Split the nodes of the given list into front and back halves,
	and return the two lists using the reference parameters.
	If the length is odd, the extra node should go in the front list.
	Uses the fast/slow pointer strategy. */
void FrontBackSplit(Node *source,Node **frontRef, Node **backRef){
	Node *fast;
	Node *slow;
	slow = source;
	fast = source->next;
	/* Advance 'fast' two nodes, and advance 'slow' one node */
	while (fast != NULL){
		fast = fast->next;
		if (fast != NULL){
			slow = slow->next;
			fast = fast->next;
		}
	}
	/* 'slow' is before the midpoint in the list, so split it in two
	at that point. */
	*frontRef = source;
	*backRef = slow->next;
	slow->next = NULL;
}
/* Function to print nodes in a given linked list */
void printList(Node *node){
	while (node != NULL){
		
		cout << node->data.nama << endl;
		cout << node->data.nim << endl;
		cout << node->data.ipk << endl;
		node = node->next;
	}
}
/* Function to insert a node at the beginning of the linked list */
void insertLast(Node **head_ref, string nama, int nim, double ipk){
	/* allocate node */
	Node *new_node = new Node();
	/* put in the data */
	new_node->data.nama = nama;
	new_node->data.nim = nim;
	new_node->data.ipk = ipk;
	/* link the old list off the new node */
	new_node->next = (*head_ref);
	/* move the head to point to the new node */
	(*head_ref) = new_node;
}

struct Node *getTail(struct Node *cur){
while (cur != NULL && cur->next != NULL){
cur = cur->next;
}
return cur;
}
// Partitions the list taking the last element as the pivot
struct Node *partition(struct Node *head, struct Node *end, struct
Node **newHead, struct Node **newEnd){
struct Node *pivot = end;
struct Node *prev = NULL, *cur = head, *tail = pivot;
// During partition, both the head and end of the list
// might change which is updated in the newHead and
// newEnd variables
while (cur != pivot){
if (cur->data.nim < pivot->data.nim){
// First node that has a value less than the
// pivot - becomes the new head
if ((*newHead) == NULL){

(*newHead) = cur;
}
prev = cur;
cur = cur->next;
} else { // If cur node is greater than pivot
// Move cur node to next of tail, and change
// tail
if (prev){
prev->next = cur->next;
}
struct Node *tmp = cur->next;
cur->next = NULL;
tail->next = cur;
tail = cur;
cur = tmp;
}
}
// If the pivot data is the smallest element in the
// current list, pivot becomes the head
if ((*newHead) == NULL){
(*newHead) = pivot;
}
// Update newEnd to the current last node
(*newEnd) = tail;
// Return the pivot node
return pivot;
}
// here the sorting happens exclusive of the end node
struct Node *quickSortRecur(struct Node *head, struct Node *end){
// base condition
if (!head || head == end){
return head;
}
Node *newHead = NULL, *newEnd = NULL;
// Partition the list, newHead and newEnd will be
// updated by the partition function
struct Node *pivot = partition(head, end, &newHead, &newEnd);
// If pivot is the smallest element - no need to recur
// for the left part.
if (newHead != pivot){
// Set the node before the pivot node as NULL
	struct Node *tmp = newHead;
	while (tmp->next != pivot){
		tmp = tmp->next;
		tmp->next = NULL;
		// Recur for the list before pivot
		newHead = quickSortRecur(newHead, tmp);
		// Change next of last node of the left half to
		// pivot
		tmp = getTail(newHead);
		tmp->next = pivot;
	}
}
// Recur for the list after the pivot element
	pivot->next = quickSortRecur(pivot->next, newEnd);
	return newHead;
}

void quickSort(struct Node **headRef){
	(*headRef) = quickSortRecur(*headRef, getTail(*headRef));
	return;
}

/* Driver program to test above functions*/
int main(){
	/* Start with the empty list */
	Node *res = NULL;
	Node *a = NULL;
	/* Let us create a unsorted linked lists to test the functions
Created lists shall be a: 2->3->20->5->10->15 */
	insertLast(&a, "GUSTI", 124, 3.98);
	insertLast(&a, "AUZAN", 127, 3.78);
	insertLast(&a, "RAMDAN", 116, 3.88);
	insertLast(&a, "DAVIS", 118, 3.99);
	/* Sort the above created Linked List */
	printList(a);
	MergeSort(&a);
	cout << "Sorted Linked List is: \n";
	printList(a);
	printf("\n");
	quickSort(&a);
	printList(a);
	return 0;
}
