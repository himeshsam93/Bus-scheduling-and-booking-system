// member description
function members(data){

    if(data == 'mem1'){

        document.getElementById("avatar_img").src = "Assets/Images/img/himesh.png";
        document.getElementById("avatar_img").height="200"; 
        document.getElementById("avatar_img").width="200";
        document.getElementById("avatar_img").style.borderRadius = "50%";
        
        

    }
    //l inherit the height, width and borderRadius properties set earlier

    else if(data == 'mem2'){

        document.getElementById("avatar_img").src = "./Assets/Images/About_us/Shenali.png";
        document.getElementById("avatar_img").height="200"; 
        document.getElementById("avatar_img").width="200";
        document.getElementById("avatar_img").style.borderRadius = "50%";

    }
    else if(data == 'mem3'){

        document.getElementById("avatar_img").src = "./Assets/Images/About_us/Hasara.png";
        document.getElementById("avatar_img").height="200"; 
        document.getElementById("avatar_img").width="200";
        document.getElementById("avatar_img").style.borderRadius = "50%";

    }
    else if(data == 'mem4'){

        document.getElementById("avatar_img").src = "./Assets/Images/About_us/Ryan.png";
        document.getElementById("avatar_img").height="200"; 
        document.getElementById("avatar_img").width="200";
        document.getElementById("avatar_img").style.borderRadius = "50%";
 
    }
    else if(data == 'mem5'){

        document.getElementById("avatar_img").src = "./Assets/Images/About_us/Ashika.png";
        document.getElementById("avatar_img").height="200"; 
        document.getElementById("avatar_img").width="200";
        document.getElementById("avatar_img").style.borderRadius = "50%";

    }

    
}

// allow password to visible 
function showPassword(){
   
    var password = document.getElementById("Pass");
    var rePassword = document.getElementById("RePass");

    if ((password.type === "password") || (rePassword === "password")){

        password.type = "text";
        rePassword.type = "text";
    }
    else {

        password.type = "password";
        rePassword.type = "password";
    }
}



