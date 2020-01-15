def insertion(A):
    for j in range(1,len(A)):
        key=A[j]
        i=j-1
        while i>=0 and A[i]>key :
            A[i+1]=A[i]
            i-=1
        A[i+1]=key

A=[9,6,5,0,8,2,7,1]
n=len(A)
insertion(A)
for i in range(n):
    print(A[i],end='')
