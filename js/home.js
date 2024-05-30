document.addEventListener("DOMContentLoaded", function() {
    var slideshow = document.getElementById("background-slideshow");
    var images = slideshow.getElementsByTagName("img");
    var currentIndex = 0;

    function showNextImage() {
        images[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.opacity = 1;
    }

    // Show the first image and set an interval for the slideshow
    images[currentIndex].style.opacity = 1;
    setInterval(showNextImage, 5000); // Change image every 5 seconds (5000 milliseconds)
});