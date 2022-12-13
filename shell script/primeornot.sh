flag=0
echo "Enter number"
read a;
for (( i=2; i<a; i++ ))
do
b=`expr $a % $i`
if [ $b -eq 0 ]
then
flag=1
fi
done
if [ $flag -eq 1 ]
then
echo not prime number
else
echo prime number
fi