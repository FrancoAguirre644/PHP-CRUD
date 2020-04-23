function validate() {

    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var hobby = document.getElementById("hobby").value;
    var band = true;


    if (firstName == "") {
        document.getElementById("firstNameError").innerHTML = "Please enter your name";
        band = false;
    } else {
        document.getElementById("firstNameError").innerHTML = "";
    }

    if (lastName == "") {
        document.getElementById("lastNameError").innerHTML = "Please enter your last name";
        band = false;
    } else {
        document.getElementById("lastNameError").innerHTML = "";
    }

    if (email == "") {
        document.getElementById("emailError").innerHTML = "Please enter your email";
        band = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }

    if (phone == "") {
        document.getElementById("phoneError").innerHTML = "Please enter your phone";
        band = false;
    } else {
        document.getElementById("phoneError").innerHTML = "";
    }

    if (hobby == "") {
        document.getElementById("hobbyError").innerHTML = "Please enter your hobby";
        band = false;
    } else {
        document.getElementById("hobbyError").innerHTML = "";
    }

    return band;
}