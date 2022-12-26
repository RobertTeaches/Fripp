<?php


?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="generator" content="RSD 5.0.3532 - Trial Version">
    <title>Commons &amp; Soons</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/wireframe-theme.min.css">
    <!-- <script>document.createElement( "picture" );</script> -->
    <!-- <script class="picturefill" async="async" src="js/picturefill.min.js"></script> -->
    <link rel="stylesheet" href="css/main.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/reviews.js"></script>
    <script src="./js/color-picker.js"></script>
</head>

<body class="body-1 no-js">
    <div class="container-grid bg-full-screen-container">
        <video class="full-screen-video" autoplay="" loop="loop" muted="" poster="./images/video-poster.jpg?cache=1631611447892">
            <source src="./videos/fripp_video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container-grid container-leave-review" id="contact">
        <div class="container-grid contact-form-region"><span class="glyph contact-icon"><i class="coffeecup-icons-mailbox"></i></span>
            <h2 class="heading-contact">Leave A Review!</h2>
            <form class="form-container contact-form" method="post" action="/leave_review/post-review.php">
                <input value="" name="text-name" type="text" class="input">
                <label class="label label-input">Name</label>
                <input value="" name="stars-name" type="number" class="number">
                <label class="label label-input">Stars</label>
                <input value="" name="email-name" type="email" class="email">
                <label class="label label-input">Email</label>
                <textarea name="review-name" class="comments" placeholder="Write out your thoughts"></textarea>
                <button type="submit" class="form-button">Review</button>
            </form>
        </div>
    </div>
    <div class="container-grid container-footer">
        <div class="container-grid footer-region-container"><a href="#" class="responsive-picture footer-logo-link">
                <picture>
                    <img alt="Placeholder Picture" width="476" height="476" src="./images/c%26s_logo.png">
                </picture>
            </a>
            <a class="link-text logo-footer" href="#" data-scroll="">Back to top</a>
            <div class="rule footer-rule">
                <hr>
            </div>
            <div class="container-grid social-wrapper"><a class="glyph social-icon-links" href="#"><i class="coffeecup-icons-pinterest2"></i></a><a class="glyph social-icon-links" href="#"><i class="coffeecup-icons-vimeo"></i></a><a class="glyph social-icon-links" href="#"><i class="coffeecup-icons-youtube"></i></a><a class="glyph social-icon-links" href="#"><i class="coffeecup-icons-twitter"></i></a><a class="glyph social-icon-links" href="#"><i class="coffeecup-icons-facebook"></i></a></div>
            <div class="rule footer-rule">
                <hr>
            </div>
        </div>
    </div>
</body>

</html>