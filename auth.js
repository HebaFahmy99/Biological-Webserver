function validateForm(){
    var flag = true;
    var flag2 = true;
    var fName= document.getElementById("firstName").value;
    if(fName==''){
        document.getElementById('NameValid').style.display= 'block';
        flag = false;
    }
    else
    {
        document.getElementById('NameValid').style.display= 'none';
        flag = true;
    }

    var PhoneNum= document.getElementById('PhoneNum').value;
    var pattern = /^01[0125][0-9]{8}$/;
    if (!pattern.test(PhoneNum)){
        document.getElementById("phoneValid").style.display= 'block';
        flag2= false;
    }
    else
    {
        document.getElementById("phoneValid").style.display= 'none';
        flag2= true;
    }

    return flag&&flag2;
}

