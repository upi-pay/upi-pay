echo "enter the value of n"
read n1
a=0
b=1
count=2
echo "Fibonacci series"
echo $a
echo $b
while [ $count -le $n ]
do
fib='expr $a + $b'
a=$b
b=$fib
echo $fib
count='expr $count +1'
done