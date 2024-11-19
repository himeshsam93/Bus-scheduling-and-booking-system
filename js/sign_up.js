// checking the Password is matching or not
/*
function checkPassword(){

    var password = document.getElementById("txtPass").value;
    var rePassword = document.getElementById("txtRePass").value;

    if(password != rePassword){

        alert("Your entered Password and Re-entered Password is mismatched, Please try again !");

    }
}
*/

// checking the terms and condtions checkbox is checked or not, in order to proceed with the sign up
// allowing the button to be enabled once the checkbox is checked

function enableButton(){

    var checkbox = document.getElementById("Terms");
    var submitButton = document.getElementById("btnSignUp");

    submitButton.disabled = !checkbox.checked;
}

// allow password to visible 
function showPassword(){
   
    var password = document.getElementById("txtPass");
    var rePassword = document.getElementById("txtRePass");

    if ((password.type === "password") || (rePassword === "password")){

        password.type = "text";
        rePassword.type = "text";
    }
    else {

        password.type = "password";
        rePassword.type = "password";
    }
}

