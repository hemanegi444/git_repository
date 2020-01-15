def mergeSort(A,p,r):
    if p<r:
        q=(p+r)//2
        mergeSort(A,p,q)
        mergeSort(A,q+1,r)
        merge(A,p,q,r)
        
def merge(A,p,q,r):
    L=A[:q+1]
    R=A[q+1:]
    i=j=k=0
    while i<len(L) and j<len(R):
        if L[i]<=R[j]:
            A[k]=L[i]
            i+=1
            k+=1
        else:
            A[k]=R[j]
            j+=1
            k+=1
    while i<len(L):
        A[k]=L[i]
        i+=1
        k+=1
    while j<len(R):
        A[k]=R[j]
        j+=1
        k+=1
##def mergeSort(A,p,r):
##    if p<r:
##        q=(p+r)//2
##        L=A[:q+1]
##        R=A[q+1:]
####        print(A)
####        print(L,'\t',R,end='')
##        print()
##        mergeSort(L,0,q)
##        mergeSort(R,0,q)
##        merge(A,L,R)
##def merge(A,L,R):
##    i=j=k=0
##    while i<len(L) and j<len(R):
##        if L[i]<=R[j]:
##            A[k]=L[i]
##            i+=1
##            k+=1
##        else:
##            A[k]=R[j]
##            j+=1
##            k+=1
##
##    while i<len(L):
##            A[k]=L[i]
##            i+=1
##            k+=1
##    
##    while i<len(R):
##            A[k]=R[j]
##            j+=1
##            k+=1
A=[16, 29, 37, 15, 54, 2, 11, 3]    
##A=[2,4,1,6,8,5,3,7]
n=len(A)
mergeSort(A,0,n-1)
for i in range(n):
    print(A[i])
##n=len(A)
##mergeSort(A,0,n-1)
##for i in range(n):
##    print(A[i])
    


