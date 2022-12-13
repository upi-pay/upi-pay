Write a shell script to arrange numbers in ascending or descending order as per the user choice


echo enter the no of element
read n1
for (( i=0; i<$n1; i++ ))
do
            echo enter `expr $i + 1` the element.
            read a[$i]
done
for (( i=0; i<$n1; i++ ))
do
            for (( j=`expr $i + 1`; j<$n1; j++ ))
            do
                        if [ ${a[$i]} -gt ${a[$j]} ]
                        then
                                    x=${a[$i]}
                                    a[$i]=${a[$j]}
                                    a[$j]=$x
                        fi
            done
done
echo 1.Ascending  2.Descending
echo enter your choice...
read c
if [ $c = 1 ]
then
            echo the ascending order is....
            for (( i=0; i<$n1; i++ ))
            do
                        echo ${a[$i]}
            done
elif [ $c = 2 ]
then
            echo the descending order is...
            for (( i=$n1; i>0; i-- ))
            do
                        echo ${a[`expr $i - 1`]}
            done
else
            echo wrong choice......
fi