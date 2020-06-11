// start design the image
// collect my Data
var landingPage = document.querySelector(".cinema");
let myImages = ["download.jpg", "3.jpg", "2.jpg", "images.jpg", "forpa.jpg", "title-bg-about.png"];
// changing background url


setInterval(() => {
    let randomeNumber = Math.floor(Math.random() * myImages.length);

    
landingPage.style.backgroundImage = 'url("public/assets/'+ myImages[randomeNumber]+'")';
landingPage.style.transition = 'all 1s';
}, 3000);
// end design the image background
var myNavLink = document.querySelectorAll(".nav-item");

// console.log(myNavLink);
