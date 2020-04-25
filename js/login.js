function checkPassword(event) {

    var invalidFields = false;
    var userPassword = document.getElementById("userPassword").value;
    var userEmail = document.getElementById("userEmail").value;

    document.getElementById("passwordMessage").style.display = "none";
    document.getElementById("emailMessage").style.display = "none";

    // Password validation
    if (userPassword == "") {
        //alert("Error: Password cannot be blank!");
        document.getElementById("passwordMessage").style.display = "Block";
        //alert("Please log in first");
        invalidFields = true;
    } else if (userPassword.length < 6) {
        //alert("Error: Password must contain at least 6 characters");
        document.getElementById("passwordMessage").style.display = "Block";
        invalidFields = true;
    }

    //Email validation
    if (userEmail == "") {
        document.getElementById("emailMessage").style.display = "Block";
        invalidFields = true;
    }

    if (invalidFields == false) {
        // you are to go
        // login modal goes away
        document.getElementById("loginButton").style.display = "none";
        document.getElementById("buyNowButton").style.display = "Block";
        document.getElementById("userLoggedIn").style.display = "Block";
        document.getElementById("userLoggedIn").innerText = userEmail;
        document.getElementById("userLoggedIn").innerText = userEmail + " logged in"
    }
    else{
        // we have invalids
        // login modal stays
    }
}

/*

}var userisLoggedin = true;
var y = document.getElementById("userEmail").value;
var x = document.getElementById("userPassword");

if (x !== null && y !== null) {
return true;
} else {
userisLoggedin = false;
alert("Please log in first");
}

*/