

<!doctype html>
<html lang="en">
<?php include("./Templates/navbar.php") ?>
    <body>
        <div class="image">
            <h2 class="imagetext">Gallery</h2>
        </div>

    <div style="padding-top: 20px; padding-bottom: 20px;">
        <div class="text_header">
            <h1>January 2020</h1>
            <p>Photos and Videos from January 2020</p>
            <iframe width="560"height="315;" src="https://www.youtube.com/embed/UxJMWbB8nFs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
         <!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="./img/gallery/1.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/2.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/3.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/4.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/5.png" onclick="openModal();currentSlide(5)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/6.png" onclick="openModal();currentSlide(6)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/8.png" onclick="openModal();currentSlide(8)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/9.png" onclick="openModal();currentSlide(9)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./img/gallery/10.png" onclick="openModal();currentSlide(10)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 27</div>
      <img src="./img/gallery/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 27</div>
      <img src="./img/gallery/2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 27</div>
      <img src="./img/gallery/3.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 27</div>
      <img src="./img/gallery/4.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 27</div>
      <img src="./img/gallery/5.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 27</div>
      <img src="./img/gallery/6.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 27</div>
      <img src="./img/gallery/8.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 27</div>
      <img src="./img/gallery/9.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 27</div>
      <img src="./img/gallery/10.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div> 

        
    <?php include("./Templates/footer.php") ?>
    </body>
    <style>
    body {
        overflow-x: hidden;
    }
    * {
    box-sizing: border-box;
  }
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
    padding-left: 20%;
  }
  .column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
  }
  .column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
  }
  .text_header {
      text-align: center;
  }


  .row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 65px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
  </style>

<script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</html>