// Validations


function validateName() {
    var Name = document.getElementById("name").value;
    var re1 = /^[a-zA-Z\s]{1,20}$/;
    if (re1.test(Name)) {
        document.getElementById("msg1").style.color = "green";
        document.getElementById("msg1").innerHTML = "valid";
        return true;
    }
    else {
        document.getElementById("msg1").style.color = "red";
        document.getElementById("msg1").innerHTML = "invalid";
        return false;
    }
}

function validateContact() {
    var Mob = document.getElementById("contact").value;
    var re2 = /^\d{10}$/;
    if (re2.test(Mob)) {
        document.getElementById("msg2").style.color = "green";
        document.getElementById("msg2").innerHTML = "valid";
        return true;
    }
    else {
        document.getElementById("msg2").style.color = "red";
        document.getElementById("msg2").innerHTML = "invalid";
        return false;
    }
}

function validateEmail() {
    var Email = document.getElementById("email").value;
    var atposition = Email.indexOf("@");
    var dotposition = Email.lastIndexOf(".");
    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= Email.length) {
        document.getElementById("msg3").style.color = "red";
        document.getElementById("msg3").innerHTML = "invalid";
        return false;
    }
    // var re3 = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    else {
        document.getElementById("msg3").style.color = "green";
        document.getElementById("msg3").innerHTML = "valid";
        return true;
    }

}
