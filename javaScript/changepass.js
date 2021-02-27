function back() {
    window.history.back();
}

function Validate()
{
    var fpass = document.getElementById("newPass").value;
    var lpass = document.getElementById("conPass").value;


    if(fpass=="" || lpass=="")
    {
        document.getElementById("msg").innerHTML="Fill both fields";
        return false;
    }

    else if(fpass.length<6)
    {
        document.getElementById("msg").innerHTML="Password atleast contain 6 letters";
        return false;
    }

    else if(fpass != lpass)
    {
        document.getElementById("msg").innerHTML="Password did not match";
        return false;
    }
}