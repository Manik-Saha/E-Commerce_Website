function back() {
    window.history.back();
  }

function Validate()
{
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var date = document.getElementById("date").value;
    var file = document.getElementById("file").value;

    if(fname=="" || lname=="" || email=="" || address=="" || phone=="" || password=="" || date=="" || file=="")
    {
        document.getElementById("error").innerHTML="Submit all info";
        return false;
    }
    else if( ! /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(fname))
    {
        document.getElementById("error").innerHTML="Invalid Name";
        return false;
    }
    else if( ! /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/.test(lname))
    {
        document.getElementById("error").innerHTML="Invalid Name";
        return false;
    }
    else if(! /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
    {
        document.getElementById("error").innerHTML="Invalid email format";
        return false;
    }

    else if(!/^[0-9]+$/.test(phone))
    {
        document.getElementById("error").innerHTML="phone can be only numbers";
        return false;
    }
    
    else if(password.length<6)
    {
        document.getElementById("error").innerHTML="Password atleast contain 6 digit";
        return false;
    }
}