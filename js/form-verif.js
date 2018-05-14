    function validateForm(){
        var name = document.forms["form1"]["name"].value;
        if (name == ""){
            alert("Please enter your name");
            return false;
        }

        var year = document.forms["form1"]["age"].value;
        var day = new Date();
        var currentYear = day.getFullYear();
        var bornYear = parseInt(year);
        var age = currentYear - bornYear;
        if (age < 18) {
            alert("You are not eligible to give a feedback");
            return false;
        }


        var email = document.forms["form1"]["email"].value;
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");

        if (email == ""){
            alert("Please enter your email");
            return false;
        }
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
            alert("Not a valid email-address");
            return false;
        }

        var phone = document.forms["form1"]["phone"].value;
        var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if (phone.match(phoneno))
            {
                return true;
            }
        else
            {
                alert("not a valid phone number");
                return false;
            }


        var service = document.forms["form1"]["service"].value;
        if (service == ""){
            alert("Please enter your service");
            return false;
        }

        var message = document.forms["form1"]["message"].value;
        if (message == ""){
            alert("Please give us your feedback");
            return false;
        }

        var score = document.forms["form1"]["score"].value;
        if (score == ""){
            alert("Please grade us");
            return false;
        }
    }
