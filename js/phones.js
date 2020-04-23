function postFetchForSignUp() {
    let nameInput = document.querySelector("#name")
    let usernameInput = document.querySelector("#username")


    fetch('http://localhost:3000/users', { // This is DB!!!!!   First, we make a Post fetch request where we want to store our users.
      method: 'POST',
      headers: {
        'Content-Type':'application/json',
        'Accept':'application/json'
      },


      body: JSON.stringify({
        name: nameInput.value,
        username: usernameInput.value
      })
    })
    .then(res=>res.json()) // This is PHP!!!!    
    .then(user => {
      localStorage.clear() // If there was a user signed in, this will                                   
                           // clear it up
      localStorage.id = user.id  // Then we can store the id we got 
      slapUser(user)
      logOutButton()
    })
  }


  signInButton.addEventListener('click', e => { //This is PHP !!!!
    signInForm()
    let form = signDiv.querySelector('.sign-in')
    let usernameInput = document.querySelector("#username")
    form.addEventListener('submit', e=>{
      e.preventDefault()
      fetch('http://localhost:3000/users') // We make a get fetch    // request where users are stored
      .then(res=>res.json()) 
      .then(usersArray => { 
        let user = usersArray.find(function(user){ 
            return user.username === usernameInput.value // Then we        // check if there is a user with a value given
          })
        if (user){
          signDiv.innerHTML = ""
          slapUser(user)
          localStorage.id = user.id // If there is so, we then store // it
          logOutButton()
          writeReview()
        }
      })
    })
  })

  When user logs out, the localStorage will be cleared like so;

function logOutButton(){
 let logOutButton = document.createElement("button")
 logOutButton.className = "log-out-button"
 logOutButton.innerText = "Log Out"
 signDiv.append(logOutButton)
 logOutButton.addEventListener('click', e=>{
   localStorage.clear() // We clear localStorage like so
 })
}



// Get the text field that we're going to track
let field = document.getElementById("field");
 
// See if we have an autosave value
// (this will only happen if the page is accidentally refreshed)
if (sessionStorage.getItem("autosave")) {
  // Restore the contents of the text field
  field.value = sessionStorage.getItem("autosave");
}
 
// Listen for changes in the text field
field.addEventListener("change", function() {
  // And save the results into the session storage object
  sessionStorage.setItem("autosave", field.value);
});




<button type="submit" class="btn btn-primary" onclick="userLogin()">Submit</button>


function userLogin() {  

    var userisLoggedin=true;
    var x= document.getElementById("userEmail");
    var y= document.getElementById("userPassword"); 
    
    if(x!==null && y!==null) {
        return true;
    }else{
        userisLoggedin=false;
        alert("Please log in first")
    }




function getLogIn(){
    let userEmail = document.getElementById("userEmail");
    let userPassword=docuemnt.getElementById("userPassword")
}

userEmail.addEventListener("change",function(){

}