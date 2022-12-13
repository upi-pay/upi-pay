echo "enter an integer"
read b
temp=$b
while [ $temp -ne 0]
do
 reverse=$reverse$((temp%10))
 temp=$((temp/10))
done
echo "reverse is $reverse"