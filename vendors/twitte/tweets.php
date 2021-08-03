<?php include 'vendors/twitte/twitte/tweet.php';?>

<div class="owl-carousel twitterSlider">
    <?php
        foreach ($tweets as $key => $tweet) {
            echo '<div class="item"><i class="fa fa-twitter"></i><br>'. $tweet->text .'<br></div>';
        }
    ?>
</div>