

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

            <!-- Photo Grid -->
            <div class="row"> 
            <div class="column">
                <img src="./img/gallery/1.png" style="width:100%">
                <img src="./img/gallery/2.png" style="width:100%">
                <img src="./img/gallery/3.png" style="width:100%">
                <img src="./img/gallery/4.png" style="width:100%">
                <img src="./img/gallery/5.png" style="width:100%">
                <img src="./img/gallery/6.png" style="width:100%">
                <img src="./img/gallery/7.png" style="width:100%">
                <img src="./img/gallery/21.png" style="width:100%">
                <img src="./img/gallery/22.png" style="width:100%">
            </div>
            <div class="column">
                <img src="./img/gallery/8.png" style="width:100%">
                <img src="./img/gallery/10.png" style="width:100%">
                <img src="./img/gallery/11.png" style="width:100%">
                <img src="./img/gallery/12.png" style="width:100%">
                <img src="./img/gallery/13.png" style="width:100%">
                <img src="./img/gallery/24.png" style="width:100%">
                <img src="./img/gallery/25.png" style="width:100%">
                <img src="./img/gallery/23.png" style="width:100%">
            </div>  
            <div class="column">
                <img src="./img/gallery/14.png" style="width:100%">
                <img src="./img/gallery/15.jpg" style="width:100%">
                <img src="./img/gallery/16.png" style="width:100%">
                <img src="./img/gallery/17.jpg" style="width:100%">
                <img src="./img/gallery/18.jpg" style="width:100%">
                <img src="./img/gallery/19.png" style="width:100%">
                <img src="./img/gallery/20.png" style="width:100%">
                <img src="./img/gallery/26.png" style="width:100%">
                <img src="./img/gallery/27.png" style="width:100%">
            </div>
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
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="./img/gallery/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="./img/gallery/2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="./img/gallery/3.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="./img/gallery/4.png" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
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
  </style>
</html>