
window.onload = choosePic;

var myPics = new Array("Images/smartphones.jpg", "Images/phoneInSpace.jpg", "Images/selfies.jpg", "Images/apple11Silver.jpg", "Images/iphone11.jpg", "Images/iphone11a.jpg");
var uniqueNumbers = [3];

function choosePic() {
  //Fill array unique numbers
  uniqueRandom();

  console.log(uniqueNumbers);
  
  //set images
  document.getElementById("image1").src = myPics[uniqueNumbers[0]];
  document.getElementById("image2").src = myPics[uniqueNumbers[1]];
  document.getElementById("image3").src = myPics[uniqueNumbers[2]];
}

function uniqueRandom() {
  var randomNum = Math.floor(Math.random() * myPics.length); //3

  //fill array uniq values
  for (var i = 0; i < uniqueNumbers.length; i++) {
    //check if number was already selected
    while (uniqueNumbers.findIndex(x => x == randomNum) >= 0) {
      randomNum = Math.floor(Math.random() * myPics.length);
    }
    uniqueNumbers[i] = randomNum;
  }
}


//ImageSwitch = new Array();
//ImageSwitch[0] = 'Images/smartphones.jpg';
//ImageSwitch[1] = 'Images/iphone11.jpg';
////ImageSwitch[2] = 'Images/phoneInSpace.jpg';
//ImageSwitch[3] = 'Images/selfies.jpg';

//function swapImage() {
    //document.getElementById("myPic").setAttribute("src", ImageSwitch[Math.round(Math.random() * 3)]);
//}


//if ( document.addEventListener ) {
   // window.addEventListener( 'load', swap, false );
  // If IE event model is used
  //} else if ( document.attachEvent ) {
   // window.attachEvent( 'onload', swap );

