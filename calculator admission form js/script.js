
function validation()
{
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
  
    // var phoneval = parseInt(phone.value);

    var emailcheck = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var numbercheck = /^[6789][0-9]{9}$/;
   

    if(emailcheck.test(email))
    {
        document.getElementById("emm").innerHTML = " ";
    }
    else
    {
        document.getElementById("emm").innerHTML = "**Invalid Email";
        return false;
    }


    if(numbercheck.test(phone))
    {
        document.getElementById("phn").innerHTML = " ";
        console.log("pnh working")
    }
    else
    {
        console.log("phn not working")
        document.getElementById("phn").innerHTML = "**Invalid Phone Number";
        return false;
    }

    


    // return 0;
}
