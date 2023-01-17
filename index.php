<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="generator" content="RSD 5.0.3532 - Trial Version">
  <title>The Silver Crab | Fripp Island Rental</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/wireframe-theme.min.css">
  <!-- <script>document.createElement( "picture" );</script> -->
  <!-- <script class="picturefill" async="async" src="js/picturefill.min.js"></script> -->
  <link rel="stylesheet" href="css/main.css?v=<?php md5_file("css/main.css")?>">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/main.js?v=<?php md5_file("./js/main.js")?>"></script>
  <script src="./js/reviews.js?v=<?php md5_file("./js/reviews.js")?>"></script>
  <script src="./js/color-picker.js?v=<?php md5_file("./js/color-picker.js")?>"></script>
</head>

<body class="body-1 no-js">
  <div class="color-picker">
    <label for="primary">Primary</label>
    <input type="color" name="primary" id="primary-color" oninput="colorUpdate(this)">
    <label for="off">Off</label>
    <input type="color" name="off" id="off-color" oninput="colorUpdate(this)">
    <label for="accent">Accent</label>
    <input type="color" name="accent" id="accent-color" oninput="colorUpdate(this)">
    <label for="oppsite">Background</label>
    <input type="color" name="oppsite" id="background-color" oninput="colorUpdate(this)">
    <label for="opposite-off">Off Background</label>
    <input type="color" name="opposite-off" id="off-background-color" oninput="colorUpdate(this)">

    <button onclick="saveColors()">Save</button>
  </div>
  <div class="container-grid bg-full-screen-container">
    <video class="full-screen-video" autoplay="" loop="loop" muted=""
      poster="./images/video-poster.jpg?cache=1631611447892">
      <source src="./videos/fripp_video.mp4" type="video/mp4">
    </video>
  </div>
  <div class="container-grid container-hero">
    <div class="container-grid statement-region " style="position: relative;" id="commons_and_sons">
      <div class="container-grid nav-region  ">
        <div class="link-text nav-link on-view" data-scroll="">
          <h1>Fripp Island Beach Home Rental</h1>
        </div>
      </div>
      <div class="container-grid hero-text-wrapper ">
        <h1 class="brand-name on-view">The Silver Crab</h1>
        <div class="container-grid sd-three-cols container-1">
          <div class="container-grid sd-two-cols container-3 on-view">
            <h3 class="heading-1 ">3</h3>
            <h3 class="style-header">Beds</h3>
          </div>
          <div class="container-grid sd-two-cols container-3 on-view">
            <h3 class="heading-1">3 &half;</h3>
            <h3 class="style-header">Baths</h3>
          </div>
        </div><button type="button" class="book on-view">Book Now</button>
      </div>
    </div>
  </div>
  <div class="container-grid intro-background" id="beach-breaker"></div>
  <div class="container-grid container-slide-photo">
    <h2 class="heading-yellow-section on-view ">The House</h2>
    <div id="picture_carasel" class="container-grid carousel carousel-fullwidth carousel-slider">
      <!-- TODO: in PHP, load images dynamically from /images/carosaul_images/ -->
      <a href="#!" class="responsive-picture carousel-item full-width-item">
        <picture>
          <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/07.jpg">
        </picture>
      </a>
      <a href="#!" class="responsive-picture carousel-item full-width-item">
        <picture>
          <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/04.jpg">
        </picture>
      </a><a href="#!" class="responsive-picture carousel-item full-width-item">
        <picture>
          <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/03.jpg">
        </picture>
      </a><a href="#!" class="responsive-picture carousel-item full-width-item">
        <picture>
          <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/01.jpg">
        </picture>
      </a><a href="#!" class="responsive-picture carousel-item full-width-item">
        <picture>
          <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/02.jpg">
        </picture>
      </a>
      <div class="html-element carousel-config on-view">
        <script>
          document.addEventListener('DOMContentLoaded', function ()
          {
            var elems = document.querySelectorAll('.carousel-fullwidth');
            var instances = M.Carousel.init(elems, { fullWidth: true, indicators: true });
          });

        </script>
      </div>
      <ul class="unorder-list indicators always-hide">
        <li class="list-item indicator-item"></li>
        <li class="list-item indicator-item"></li>
        <li class="list-item indicator-item"></li>
        <li class="list-item indicator-item"></li>
        <li class="list-item indicator-item"></li>
      </ul>
    </div>
  </div>
  <div class="container-grid container-history" id="history">
    <div class="container-grid component-region">
      <h2 class="heading-2 on-view">The Amenities</h2>
      <div class="container-grid feature-section">
        <div class="container-grid feature-new">
          <div class="container-grid feature-text-wrapper-new on-view">
            <h3 class="subheading-member">Inside the house</h3>
            <p class="paragraph paragraph-member">The inside of this beach condo is spacious and well-appointed, with large windows that let in plenty of natural light. The main living area includes a large kitchen, dining area, living room, and balcony.<br>The <strong>large</strong> kitchen features granite countertops, stainless steel appliances, and ample storage space. <br> The living room opens up to the balcony with a beautiful view of the ocean, making it the perfect spot to enjoy a cup of coffee in the morning or a glass of wine at sunset. <br>The condo has three bedrooms, each with its own en-suite bathroom, and an additional half bathroom for guests. <br>The bedrooms are comfortably furnished and decorated in a beachy, coastal style.<br>Overall, the condo is the perfect place for a relaxing beach vacation with family or friends.</p>
          </div>
          <div class="container-grid feature-pic-wrapper">
            <div class="responsive-picture css-feature-photo">
              <picture>
                <img alt="Selectors with Classes and IDs" width="1600" height="1067"
                  src="./images/carousel_images/02.jpg">
              </picture>
            </div>
          </div>
        </div>
        <div class="container-grid feature-new feature-grey feature-flip">
          <div class="container-grid feature-text-wrapper-new">
            <div class="container-grid feature-text-wrapper-new on-view">
              <h3 class="subheading-member">Outside the house</h3>
              <p class="paragraph paragraph-member">The space outside the condo is designed to make the most of the coastal setting. It has easy access to the beach, with just a short walk to the sand and surf. A courtyard area provides a lovely space to relax and enjoy the sunny weather, with ample seating and lush landscaping. The parking garage is conveniently located, providing a safe and secure place to store cars during your stay.<br></p>
            </div>
          </div>
          <div class="container-grid feature-pic-wrapper feature-pic-flip">
            <div class="responsive-picture css-feature-photo">
              <picture>
                <img alt="Reuse Existing Components" width="1600" height="1067" src="./images/carousel_images/03.jpg">
              </picture>
            </div>
          </div>
        </div>
      </div>
      <div class="container-grid feature-new" id="container-1-copy-1">
        <div class="container-grid feature-text-wrapper-new on-view">
          <h3 class="subheading-member">What's Nearby</h3>
          <p class="paragraph paragraph-member">The condo is located near a variety of amenities that offer something for everyone.  The nearby golf course and club is a golfer's paradise, with well-manicured greens and challenging fairways. The club also has a restaurant and bar, where you can enjoy a delicious meal or a refreshing drink after a round of golf. The area also features a variety of restaurants, offering everything from casual beachside dining to fine dining experiences. For those who love the outdoors, there are also plenty of biking paths and trails, offering scenic routes for exploring the natural beauty of the area. Whether you're looking to play golf, enjoy delicious food, or take in the natural beauty of the area, you'll find everything you need near The Silver Crab.</p>
        </div>
        <div class="container-grid feature-pic-wrapper">
          <div class="responsive-picture css-feature-photo">
            <picture>
              <img alt="Selectors with Classes and IDs" width="1600" height="1067"
                src="./images/carousel_images/02.jpg">
            </picture>
          </div>
        </div>
      </div>
      <div class="rule rule-history">
        <hr>
      </div>
      <h2 class="heading-yellow-section heading-left on-view">The Island</h2>
      <div class="responsive-picture history-picture on-view">
          <img style="width: 75%;margin: auto;margin-left: 12.5%;" alt="Placeholder Picture" width="1250" height="800" src="./images/carousel_images/04.jpg">
      </div>
      <h2 class="paragraph history-paragraph big">Fripp Island | What to do when you're here
      </h2>
      <p class="paragraph paragraph-member">Fripp Island is a beautiful barrier island located off the coast of South Carolina. Known for its pristine beaches and natural beauty, it offers a wide variety of activities for visitors to enjoy. Its proximity to Beaufort and Saint Helena Island makes it an ideal spot to explore the rich history and culture of the Lowcountry. One of the island's most popular attractions is the Hunting Island Lighthouse, which offers stunning views from the top of its 167 steps. The island also offers great fishing opportunities, both inshore and offshore, for those looking to catch a variety of species. In addition, visitors can enjoy some of the best southern cooking around, with a variety of restaurants offering delicious seafood, Lowcountry specialties and more. All in all, Fripp Island is a perfect spot for a relaxing and enjoyable vacation!</p>
    </div>
  </div>
  <div class="review-section">
    <h2 class="review-header">
      Read our Reviews
    </h2>
    <div class="row-layout">
      <button class="review-button" onclick="showLast()">&larr;</button>
      <div class="review-caresal" id="review-caresal">
        <div class="review-card" id="original-card">
          <!-- <img src="./images/c&s_logo.png" alt="" class="avatar-img"> -->
          <p class="stars">5 Stars</p>
          <p class="review-paragraph">I recently stayed at this beach condo and I couldn't be more pleased with my experience. The condo was absolutely beautiful and exceeded all of my expectations. The views from the condo were breathtaking, with panoramic ocean views that could be enjoyed from every room. The condo was also very comfortable, with comfortable beds that ensured a great night's sleep. The kitchen was well-equipped and had everything I needed to prepare meals. The location was perfect, just a short walk to the beach and close to many amenities. Overall, I had an amazing time and would highly recommend this beach condo to anyone looking for a relaxing and enjoyable vacation. I would give it 5 stars!</p>
        </div>
      </div>
      <button class="review-button" onclick="showNext()">&rarr;</button>
    </div>
  </div>
  <div class="container-grid container-personal-taylor" id="personal-taylor">
    <div class="container-grid message-container">
      <h2 class="heading-yellow-section heading-black-section">Get a Quote</h2>
      <form class="form-container">
        <div class="container-grid input-field"><input value="" name="name" type="text"><label class="label"
            for="name">Name</label></div>
        <div class="container-grid input-field"><input value="" name="email" type="email"><label class="label"
            for="email">Email Address</label></div><label class="label">Number of Guests</label><input value=""
          name="number-name" type="number">
        <div class="container-grid input-field"><label class="label" for="textarea">Comments</label></div><button
          type="submit" class="btn">Submit</button>
      </form>
    </div>
    <div class="container-grid card-region">
      <div class="container-grid card-wrapper">
        <div class="container-grid card-image">
          <div class="responsive-picture card-image">
            <picture>
              <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/01.jpg">
            </picture>
          </div>
          <h6 class="card-title">Article about Fripp</h6>
        </div>
        <div class="container-grid card-content">
          <p class="paragraph card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et metus.</p>
        </div>
        <div class="container-grid card-action">
          <a class="link-text text-link-card" href="#">Linked Text</a>
          <a class="link-text text-link-card" href="#">Linked Text</a>
        </div>
      </div>
      <div class="container-grid card-wrapper">
        <div class="container-grid card-image">
          <div class="responsive-picture card-image">
            <picture>
              <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/04.jpg">
            </picture>
          </div>
          <h6 class="card-title">Article About Fripp<br></h6>
        </div>
        <div class="container-grid card-content">
          <p class="paragraph card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et metus.</p>
        </div>
        <div class="container-grid card-action">
          <a class="link-text text-link-card" href="#">Linked Text</a>
          <a class="link-text text-link-card" href="#">Linked Text</a>
        </div>
      </div>
      <div class="container-grid card-wrapper">
        <div class="container-grid card-image">
          <div class="responsive-picture card-image">
            <picture>
              <img alt="Placeholder Picture" width="1600" height="1067" src="./images/carousel_images/07.jpg">
            </picture>
          </div>
          <h6 class="card-title">Article About Fripp<br></h6>
        </div>
        <div class="container-grid card-content">
          <p class="paragraph card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et metus.</p>
        </div>
        <div class="container-grid card-action">
          <a class="link-text text-link-card" href="#">Linked Text</a>
          <a class="link-text text-link-card" href="#">Linked Text</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-grid container-contact" id="contact">
    <div class="container-grid contact-form-region"><span class="glyph contact-icon"><i
          class="coffeecup-icons-mailbox"></i></span>
      <h2 class="heading-contact">Contact</h2>
      <form class="form-container contact-form" method="post"><input value="" name="text-name" type="text"
          class="input"><label class="label label-input">Name</label><input value="" name="last-name" type="text"
          class="input"><label class="label label-input">Last Name</label><input value="" name="email-name" type="email"
          class="email"><label class="label label-input">Email</label><textarea name="textarea-name" class="comments"
          placeholder="Tell us your request"></textarea><button type="submit" class="form-button">send</button></form>
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
      <div class="container-grid social-wrapper"><a class="glyph social-icon-links" href="#"><i
            class="coffeecup-icons-pinterest2"></i></a><a class="glyph social-icon-links" href="#"><i
            class="coffeecup-icons-vimeo"></i></a><a class="glyph social-icon-links" href="#"><i
            class="coffeecup-icons-youtube"></i></a><a class="glyph social-icon-links" href="#"><i
            class="coffeecup-icons-twitter"></i></a><a class="glyph social-icon-links" href="#"><i
            class="coffeecup-icons-facebook"></i></a></div>
      <div class="rule footer-rule">
        <hr>
      </div>
    </div>
  </div>
  <script src="js/outofview.js"></script>
  <script src="js/materialize.min.js"></script>
  <script>M.AutoInit();</script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- <script>
    var scroll = new SmoothScroll('a[href*="#"][data-scroll]', {
      speed: 250
    });
  </script> -->
</body>

</html>