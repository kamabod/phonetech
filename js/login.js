
    //Password  and email validation
    function checkPassword(event) {

    var invalidFields = false;
    var userPassword = document.getElementById("userPassword").value;
    var userEmail = document.getElementById("userEmail").value;
    //Email validation filter
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    document.getElementById("passwordMessage").style.display = "none";
    document.getElementById("emailMessage").style.display = "none";

    // Password validation 
    if (userPassword == "") {
        document.getElementById("passwordMessage").style.display = "Block";
        invalidFields = true;
    } else if (userPassword.length < 6) {
        document.getElementById("passwordMessage").style.display = "Block";
        invalidFields = true;
    }

    //Email validation
    if (userEmail == "") {
        document.getElementById("emailMessage").style.display = "Block";
        invalidFields = true;
    }
    else if (!filter.test(userEmail)) {
        document.getElementById("emailMessage").style.display = "Block";
        invalidFields = true;
    }

    if (invalidFields == false) {
        document.getElementById("loginButton").style.display = "none";
        document.getElementById("buyNowButton").style.display = "Block";
        document.getElementById("userLoggedIn").style.display = "Block";
        document.getElementById("userLoggedIn").innerText = userEmail;
        document.getElementById("userLoggedIn").innerText = userEmail + " logged in"
        document.getElementById("btnCloseModal").click();
    }
}


