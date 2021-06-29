function validatePassword() {
    var password,npassword,cpassword,output = true;
    
    password = document.frmChange.password;
    npassword = document.frmChange.npassword;
    cpassword = document.frmChange.cpassword;
    
    if(!password.value) {
    password.focus();
    document.getElementById("password").innerHTML = "required";
    output = false;
    }
    else if(!npassword.value) {
        npassword.focus();
    document.getElementById("npassword").innerHTML = "required";
    output = false;
    }
    else if(!cpassword.value) {
        cpassword.focus();
    document.getElementById("cpassword").innerHTML = "required";
    output = false;
    }
    if(npassword.value != cpassword.value) {
        npassword.value="";
        cpassword.value="";
    npassword.focus();
    document.getElementById("cpassword").innerHTML = "not same";
    output = false;
    } 	
    return output;
    }