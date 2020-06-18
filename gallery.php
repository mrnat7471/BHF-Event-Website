

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

        <!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-md-12 d-flex justify-content-center mb-5">

  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 2">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="mb-3 pics animation all 1">
  <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

        
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

  .gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; }
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}
  </style>

  <script>
      $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
</html>