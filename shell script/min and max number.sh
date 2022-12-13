echo "Enter elements"
for((i=0;i<5;i++))
do
  read b
  c[$i]=$b;
done

max=${c[0]}
min=${c[0]}

for((j=1;j<5;j++))
do
   t=${c[$j]}
  if(($t -ge $max))
  then
     max=$t
  fi

  if(($t -le $min))
  then
     min=$t
  fi
done
echo" max number is $max"
echo "min number is $min"