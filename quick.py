
def quicksort(A,l,h):
    if(l<h):
        i=partion(A,l,h)
        quicksort(A,l,i-1)
        quicksort(A,i+1,h)
def partion(A,l,h):
    p=A[h]
    i=l-1
    for j in range(l,h):
        if A[j]<=p:
            i+=1
            A[i],A[j]=A[j],A[i]
    
    A[i+1],A[h]=A[h],A[i+1]
    return i+1
A=[6,5,8,9,3,10,15,12,16]
n=len(A)
quicksort(A,0,n-1)
print("Sorted Array is: ")
for i in range(n):
    print('%d'% A[i])

