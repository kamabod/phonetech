
window.onload = choosePic;

var myPics = new Array("Images/smartphones.jpg", "Images/phoneOnDesk.jpg", "Images/selfies.jpg", "Images/phoneInFlowers.jpg",
 "Images/phoneAtConcert.jpg");
var uniqueNumbers = new Array(3);

function choosePic() {
  //Fill array unique numbers
  uniqueRandom();

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



