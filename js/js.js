
$(document).ready(function() {
    var slideIndex = 0;
    var slides = $(".slideshow img");
    var totalSlides = slides.length;
    
    // Function to display the current slide
    function showSlide() {
      slides.hide();
      slides.eq(slideIndex).show();
    }
    
    // Function to move to the next slide
    function nextSlide() {
      slideIndex++;
      if (slideIndex >= totalSlides) {
        slideIndex = 0;
      }
      showSlide();
    }
    
    // Automatically move to the next slide every 3 seconds
    setInterval(nextSlide, 3000);
    
    // Display the initial slide
    showSlide();
  });
  



  $(document).ready(function() {
    var slideIndex = 0;
    var slides = $(".slideshow2 img");
    var totalSlides = slides.length;
    
    // Function to display the current slide
    function showSlide() {
      slides.hide();
      slides.eq(slideIndex).show();
    }
    
    // Function to move to the next slide
    function nextSlide() {
      slideIndex++;
      if (slideIndex >= totalSlides) {
        slideIndex = 0;
      }
      showSlide();
    }
    
    // Automatically move to the next slide every 3 seconds
    setInterval(nextSlide, 3000);
    
    // Display the initial slide
    showSlide();



  }
  
  );

