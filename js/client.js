function clientReviews(data){
    
    if(data == 'btn1'){

        document.getElementById("client_img").src="./Assets/Images/client/client1.PNG";
        document.getElementById("client_img").height="100";
        document.getElementById("client_img").width="100";
        document.getElementById("para").innerHTML = "NaviBus has been relying on Mercedes Daimler for 8 years for all our buses.<br>Their reliable service, competetive pricing has been instrumental in keeping our fleet running smoothly and efficiently.<br> We would like to recommend them to any bus company looking for a trustworthy and dependable supplier.";
        document.getElementById("para_name").innerHTML = "Ola Kallenius";
        
    }

    else if(data == 'btn2'){

        document.getElementById("client_img").src="./Assets/Images/client/client2.PNG";
        document.getElementById("client_img").height="100";
        document.getElementById("client_img").width="100";
        document.getElementById("para").innerHTML = "For the past 10 years, NaviBus has relied on Volvo for number of buses.<br>Their competitive pricing and dependable service have been crucial in maintaining the seamless and effective operation of our fleet.<br>Any bus company looking for a reliable and trustworthy provider should give them a try.";
        document.getElementById("para_name").innerHTML = "Martin Lundstedt";
        
    }
}