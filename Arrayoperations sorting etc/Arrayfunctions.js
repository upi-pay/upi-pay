function op1(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    document.getElementById("idef").innerHTML = "The Array after sorting in acending order is:";
    document.getElementById("ians").innerHTML = array1.sort(function(a, b){return a-b});
}

function op2(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    document.getElementById("idef").innerHTML = "The Array after sorting in decending order is:";
    document.getElementById("ians").innerHTML = array1.sort(function(a, b){return b-a});
}

function op3(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    document.getElementById("idef").innerHTML = "The size of Array is:";
    document.getElementById("ians").innerHTML = array1.length;
}

function op4(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    document.getElementById("idef").innerHTML = "The Reverse of Array is:";
    document.getElementById("ians").innerHTML = array1.reverse();
}

function op5(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    var req=document.getElementById("ele").value;
    document.getElementById("idef").innerHTML = "The result of search function on Array is:";
    function check(x) {
        return x == req;
    }
    var ans=array1.findIndex(check);
    
    if(ans==-1){
        document.getElementById("ians").innerHTML = req+" is not present in the given array";
    } else{
        document.getElementById("ians").innerHTML = req+" is present at index "+ans+" in the given Array";
    }
}

function op6(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    document.getElementById("sdef").innerHTML = "The Array after sorting in acending order is:";
    document.getElementById("sans").innerHTML = array1.sort();
}

function op7(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    document.getElementById("sdef").innerHTML = "The Array after sorting in decending order is:";
    document.getElementById("sans").innerHTML = (array1.sort()).reverse();
}

function op8(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    document.getElementById("sdef").innerHTML = "The size of Array is:";
    document.getElementById("sans").innerHTML = array1.length;
}

function op9(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    document.getElementById("sdef").innerHTML = "The Reverse of Array is:";
    document.getElementById("sans").innerHTML = array1.reverse();
}

function op10(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    var req=document.getElementById("sele").value;
    document.getElementById("sdef").innerHTML = "The result of search function on Array is:";
    function check(x) {
        return x == req;
    }
    var ans=array1.findIndex(check);
    
    if(ans==-1){
        document.getElementById("sans").innerHTML = req+" is not present in the given array";
    } else{
        document.getElementById("sans").innerHTML = req+" is present at index "+ans+" in the given Array";
    }
}

function op11(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    
    for(var i=0;i<=array1.length-1;i++){
        for(var j=0;j<(array1.length-i-1);j++){
            if(parseInt(array1[j])>parseInt(array1[j+1])){
                var temp=array1[j];  
                array1[j]=array1[j+1];  
                array1[j+1]=temp; 
            }
        }
    }
    document.getElementById("idef1").innerHTML = "The Array after Bubble sort (acending order) is:";
    document.getElementById("ians1").innerHTML = array1;
}



function op13(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");

    for(var i=0;i<array1.length;i++){
        for(var j=0;j<array1.length-i-1;j++){
            if(parseInt(array1[j])<parseInt(array1[j+1])){
                var temp= array1[j];  
                array1[j]=array1[j+1];  
                array1[j+1]=temp; 
            }
        }
    }
    document.getElementById("idef1").innerHTML = "The Array after Bubble sort (decending order) is:";
    document.getElementById("ians1").innerHTML = array1;
}



function op15(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    var req=document.getElementById("ele1").value;
    document.getElementById("idef1").innerHTML = "The result of Linear search on Array is:";
    var i=0,f=0;
    for (i=0; i<array1.length; i++) {
        if (array1[i]===req) {
          f=1;
          break;
        }
      }
    
    if(f==0){
        document.getElementById("ians1").innerHTML = req+" is not present in the given array";
    } else{
        document.getElementById("ians1").innerHTML = req+" is present at index "+i+" in the given Array";
    }
}

function op17(){
    var str=document.getElementById("iin").value;
    const array1 = str.split(" ");
    document.getElementById("idef1").innerHTML = "The Reverse of Array is:";

    const reversedArray = []
    for(let i = array1.length - 1; i >= 0; i--) {
        const value = array1[i];
        reversedArray.push(value);
    }
    document.getElementById("ians1").innerHTML = reversedArray;
}

function op18(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    for (let j=0; j<array1.length-1; j++) {
        for (let i=j+1; i<array1.length; i++) {
            if (array1[j].localeCompare(array1[i])>0) {
                var temp = array1[j];
                array1[j] = array1[i];
                array1[i] = temp;
            }
        }
    }
    document.getElementById("sdef1").innerHTML = "The Array after Bubble sort (acending order) is:";
    document.getElementById("sans1").innerHTML = array1;
}



function op20(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    for (let j=0; j<array1.length-1; j++) {
        for (let i=j+1; i<array1.length; i++) {
            if (array1[j].localeCompare(array1[i])<0) {
                var temp = array1[j];
                array1[j] = array1[i];
                array1[i] = temp;
            }
        }
    }
    document.getElementById("sdef1").innerHTML = "The Array after Bubble sort (decending order) is:";
    document.getElementById("sans1").innerHTML = array1;
}


function op22(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    var req=document.getElementById("sele1").value;
    document.getElementById("sdef1").innerHTML = "The result of Linear search on Array is:";
    var i=0,f=0;
    for (i=0; i<array1.length; i++) {
        if (array1[i]===req) {
          f=1;
          break;
        }
      }
    
    if(f==0){
        document.getElementById("sans1").innerHTML = req+" is not present in the given array";
    } else{
        document.getElementById("sans1").innerHTML = req+" is present at index "+i+" in the given Array";
    }
}

function op24(){
    var str=document.getElementById("sin").value;
    const array1 = str.split(" ");
    document.getElementById("sdef1").innerHTML = "The Reverse of Array is:";

    const reversedArray = []
    for(let i = array1.length - 1; i >= 0; i--) {
        const value = array1[i];
        reversedArray.push(value);
    }
    document.getElementById("sans1").innerHTML = reversedArray;
}