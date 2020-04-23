function checkPassword(event) {
    var x = document.getElementById("userPassword").value;
    document.getElementById("passwordMessage").style.display = "none";

    if (x == "") {
        //alert("Error: Password cannot be blank!");
        document.getElementById("passwordMessage").style.display = "Block";
    } else if (x.length < 6) {
        //alert("Error: Password must contain at least 6 characters");
        document.getElementById("passwordMessage").style.display = "Block";
    }
}