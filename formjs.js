function validateForm() {
    var name = document.forms["newsForm"]["name"].value;
    var email = document.forms["newsForm"]["mail"].value;
    var bdate = document.forms["newsForm"]["bday"].value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (bdate == ""){
        alert("Birthdate must be filled out");
        return false;
    }

}

