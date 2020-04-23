function checkPassword(event) {

    var userisLoggedin = false;
    var x = document.getElementById("userPassword").value;
    var y = document.getElementById("userEmail").value;

    document.getElementById("passwordMessage").style.display = "none";

    if (x == "" || y == "") {
        //alert("Error: Password cannot be blank!");
        document.getElementById("passwordMessage").style.display = "Block";
        alert("Please log in first");
    } else if (x.length < 6) {
        //alert("Error: Password must contain at least 6 characters");
        document.getElementById("passwordMessage").style.display = "Block";
    } else {
        userisLoggedin = true;
        //<span class="navbar-text">Logged In</span>
    }

    if (userisLoggedin == true) {
        document.getElementById("txtLogin").innerText = "Logged In";

        $(document).ready(function () {

            $("#myModal").modal('show')

        }

/*display modal if conditin true
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