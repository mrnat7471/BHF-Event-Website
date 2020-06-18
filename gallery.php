

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


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        
      <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./img/gallery/1.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/gallery/2.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/gallery/3.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./img/gallery/4.png">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
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