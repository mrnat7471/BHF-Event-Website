<?php include("./Templates/navbar.php") ?>

<!doctype html>
<html lang="en">
    <body style="text-align: center;">
        <div class="image">
            <h2 class="imagetext">Our Streamers</h2>
        </div>  
        <div class="our_Twitch">
            <h1>Our Official Twitch Channel</h1>
            <!-- Add a placeholder for the Twitch embed -->
            <iframe
                            src="https://player.twitch.tv/?channel=bhfevent&parent=bhf_public.test&muted=true"
                            height="240"
                            width="426"
                            frameborder="0"
                            scrolling="no"
                            allowfullscreen="true"></iframe>
        </div>
        </div>
            <div class="partned_Streamers">
                <h2>Our Partnered Streamers</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <p>Nathan7471</p>
                        <iframe
                            src="https://player.twitch.tv/?channel=nathan7471&parent=streamernews.example.com&muted=true"
                            height="240"
                            width="426"
                            frameborder="0"
                            scrolling="no"
                            allowfullscreen="true"></iframe>
                        </div>
                        <div class="col-sm">
                        <p>bluedk</p>
                            <iframe
                            src="https://player.twitch.tv/?channel=vivabluedk&parent=streamernews.example.com&muted=true"
                            height="240"
                            width="426"
                            frameborder="0"
                            scrolling="no"
                            allowfullscreen="true"></iframe>
                        </div>
                        <div class="col-sm">
                        <p>t0p0tv</p>
                            <iframe
                            src="https://player.twitch.tv/?channel=t0p0tv&parent=streamernews.example.com&muted=true"
                            height="240"
                            width="426"
                            frameborder="0"
                            scrolling="no"
                            allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>



    <?php include("./Templates/footer.php") ?>
    </body>

</html>
