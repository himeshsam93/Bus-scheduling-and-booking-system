// Passenger Testimonials button JS codes 
function Passengers_Testimonials(data){

    if(data == 'btn1'){

        document.getElementById("avatar_img").src = "Assets/Images/Home/Passenger_1.png";
        document.getElementById("avatar_img").height="100"; 
        document.getElementById("avatar_img").width="100";
        document.getElementById("para").innerHTML = '"As a business traveller, NaviBus\' efficient booking system allows me to reserve my bus ticket on the go,<br> saving me precious minutes between meetings. Their reliable service ensures I arrive at my destination fresh <br> and ready to take on the day.  Navibus is my trusted partner for seamless business travel !"';
        document.getElementById("para_name").innerHTML = "Kumar Sangakkara <br> Sri Lankan former Cricketer";
    }

    else if(data == 'btn2'){

        document.getElementById("avatar_img").src = "Assets/Images/Home/Passenger_2.png";
        document.getElementById("avatar_img").height = "100";
        document.getElementById("avatar_img").width = "100";
        document.getElementById("para").innerHTML = '"As a CEO, navigating a busy schedule requires seamless solutions. NaviBus provides a seamless <br> transition between ends. Their user-friendly platform empowered me to book my bus ticket in seconds, <br> ensuring a smooth journey and focus on leading the company."';
        document.getElementById("para_name").innerHTML = "Otara Gunewardene <br> Entrepreneur";
    }
    else if(data == 'btn3'){

        document.getElementById("avatar_img").src = "Assets/Images/Home/Passenger_3.png";
        document.getElementById("avatar_img").height = "100";
        document.getElementById("avatar_img").width = "100";
        document.getElementById("para").innerHTML = '"On the go, between shoots, every minute counts. NaviBus\' convenient booking system lets me <br> secure my bus ticket in a flash. No long lines, just a seamless journey to my next destination.<br> Thanks, Navibus, for keeping me focused on the show."';
        document.getElementById("para_name").innerHTML = "Saranga Dissasekara <br> Actor and Model";
    }
    
}