/*
    Date: 30 August, 2021
    For Tonmoy exam

    Implement the following Stack ADT:

        push(x) : push an integer to the top of the stack.
        
        pop(): pop the top element from the stack.
        
        is_empty(): Check if the stack is empty,
        
        i.e if the stack is empty return true, false otherwise.

*/

#include <bits/stdc++.h>
 
using namespace std;
 
#define MAX 1000
 
class Stack {
    int top;
 
public:
    int a[MAX]; // Maximum size of Stack
 
    Stack() { top = -1; }
    bool push(int x);
    int pop();
    int isEmpty();
};
 
bool Stack::push(int x)
{
    if (top >= (MAX - 1)) {
        cout << "Stack Overflow";
        return false;
    }
    else {
        a[++top] = x;
        cout << x << " pushed into stack\n";
        return true;
    }
}
 
int Stack::pop()
{
    if (top < 0) {
        cout << "Stack Underflow";
        return 0;
    }
    else {
        int x = a[top--];
        cout << x << " pop from stack\n";
        return x;
    }
}
int Stack::isEmpty()
{
    if (top < 0) {
        cout << "Stack is Empty ";
        return true;
    }
    else {
        cout << "Stack is not Empty ";
        return false;
    }
}
  
// Driver program to test above functions
int main()
{
    class Stack s;
    s.push(10);
    s.pop();
    cout << s.isEmpty() <<"\n";
 
    return 0;
}