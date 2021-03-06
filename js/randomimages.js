
//Display random images on carousel
window.onload = choosePic;

//Arrays
var myPics = new Array("Images/smartphones.jpg", "Images/phoneOnDesk.jpg", "Images/selfies.jpg", "Images/phoneInFlowers.jpg",
  "Images/phoneOnBeach.jpg", "Images/phoneRunning.jpg");
var uniqueNumbers = new Array(3);

function choosePic() {
  //Fill array unique numbers
  uniqueRandom();

  //Set images
  document.getElementById("image1").src = myPics[uniqueNumbers[0]];
  document.getElementById("image2").src = myPics[uniqueNumbers[1]];
  document.getElementById("image3").src = myPics[uniqueNumbers[2]];
}

function uniqueRandom() {
  var randomNum = Math.floor(Math.random() * myPics.length);

  //Fill array unique values
  for (var i = 0; i < uniqueNumbers.length; i++) {
  //Check if number was already selected
    while (uniqueNumbers.findIndex(x => x == randomNum) >= 0) {
      randomNum = Math.floor(Math.random() * myPics.length);
    }
    uniqueNumbers[i] = randomNum;
  }
}



