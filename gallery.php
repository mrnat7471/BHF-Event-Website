

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

            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>
            <div class="row"> 
            <div class="column">
                <img id="myImg" src="./img/gallery/1.png" style="width:100%">
                <img id="myImg" src="./img/gallery/2.png" style="width:100%">
                <img id="myImg" src="./img/gallery/3.png" style="width:100%">
                <img id="myImg" src="./img/gallery/4.png" style="width:100%">
                <img id="myImg" src="./img/gallery/5.png" style="width:100%">
                <img id="myImg" src="./img/gallery/6.png" style="width:100%">
                <img id="myImg" src="./img/gallery/7.png" style="width:100%">
                <img id="myImg" src="./img/gallery/21.png" style="width:100%">
                <img id="myImg" src="./img/gallery/22.png" style="width:100%">
            </div>
            <div class="column">
                <img id="myImg" src="./img/gallery/8.png" style="width:100%">
                <img id="myImg" src="./img/gallery/10.png" style="width:100%">
                <img id="myImg" src="./img/gallery/11.png" style="width:100%">
                <img id="myImg" src="./img/gallery/12.png" style="width:100%">
                <img id="myImg" src="./img/gallery/13.png" style="width:100%">
                <img id="myImg" src="./img/gallery/24.png" style="width:100%">
                <img id="myImg" src="./img/gallery/25.png" style="width:100%">
                <img id="myImg" src="./img/gallery/23.png" style="width:100%">
            </div>  
            <div class="column">
                <img id="myImg" src="./img/gallery/14.png" style="width:100%">
                <img id="myImg" src="./img/gallery/15.jpg" style="width:100%">
                <img id="myImg" src="./img/gallery/16.png" style="width:100%">
                <img id="myImg" src="./img/gallery/17.jpg" style="width:100%">
                <img id="myImg" src="./img/gallery/18.jpg" style="width:100%">
                <img id="myImg" src="./img/gallery/19.png" style="width:100%">
                <img id="myImg" src="./img/gallery/20.png" style="width:100%">
                <img id="myImg" src="./img/gallery/26.png" style="width:100%">
                <img id="myImg" src="./img/gallery/27.png" style="width:100%">
            </div>
        </div>
        </div>

        
    <?php include("./Templates/footer.php") ?>
    </body>

    <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 65px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
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
  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</html>