<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fripp Island Vacation Rental Condo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <link rel="stylesheet" href="style.css?v=<?php echo md5_file('style.css'); ?>">
</head>

<body>
    <header>
        <nav class="nav-bar">
            <ul class="nav-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><img src="" alt="" class="nav-logo"></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="jumbotron">
            <div class="container">
                <h1 id="hero-title">Welcome to Our Fripp Island Vacation Rental Condo</h1>
                <p id="hero-description">Relax and enjoy the breathtaking ocean view from our beautiful condo. Perfect for families or couples looking for a peaceful getaway.</p>
                <a id="hero-button" href="#rental-overview" class="btn btn-primary">Learn More</a>
            </div>
        </section>
        <section id="rental-overview" class="rental-overview">
            <div class="container">
                <h2 id="rental-overview-title">Rental Overview</h2>
                <p id="rental-overview-description-1">Our Fripp Island vacation rental condo is located on the oceanfront with panoramic views of the Atlantic Ocean. The condo features 2 bedrooms, 2 bathrooms, a fully equipped kitchen, and a spacious living room with comfortable seating for all guests. The condo also includes a private balcony with seating and ocean views.</p>
                <p id="rental-overview-description-2">Guests have access to all of the resort amenities, including swimming pools, tennis courts, golf courses, and a marina. The resort also offers a variety of dining options, from casual to fine dining.</p>
                <a id="rental-overview-button" href="#house-amenities" class="btn btn-primary">View Amenities</a>
            </div>
        </section>
        <section id="house-amenities">
            <div class="container">
                <h2>House Amenities</h2>
                <div class="amenities-grid">
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Bedrooms</h3>
                            <p>4 bedrooms with queen beds, sleeps 8 people.</p>
                        </div>
                    </div>
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Internet</h3>
                            <p>High-speed Wi-Fi is available throughout the house.</p>
                        </div>
                    </div>
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Kitchen</h3>
                            <p>Fully-equipped kitchen with stove, oven, refrigerator, and dishwasher.</p>
                        </div>
                    </div>
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-swimming-pool"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Pool</h3>
                            <p>Private outdoor pool with lounge chairs and pool toys.</p>
                        </div>
                    </div>
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-tv"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Entertainment</h3>
                            <p>Large-screen TV with cable, DVD player, and board games.</p>
                        </div>
                    </div>
                    <div class="amenities-card">
                        <div class="amenities-icon">
                            <i class="fas fa-washer"></i>
                        </div>
                        <div class="amenities-content">
                            <h3>Laundry</h3>
                            <p>Washer and dryer available for use.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="house-photos">
            <div class="container">
                <h2>House Photos</h2>
                <div class="photo-grid">
                    <div class="photo-item">
                        <a href="image/house-photo-1.jpg" target="_blank">
                            <img src="image/house-photo-1.jpg" alt="House photo 1">
                        </a>
                    </div>
                    <div class="photo-item">
                        <a href="image/house-photo-2.jpg" target="_blank">
                            <img src="image/house-photo-2.jpg" alt="House photo 2">
                        </a>
                    </div>
                    <div class="photo-item">
                        <a href="image/house-photo-3.jpg" target="_blank">
                            <img src="image/house-photo-3.jpg" alt="House photo 3">
                        </a>
                    </div>
                    <div class="photo-item">
                        <a href="image/house-photo-4.jpg" target="_blank">
                            <img src="image/house-photo-4.jpg" alt="House photo 4">
                        </a>
                    </div>
                    <div class="photo-item">
                        <a href="image/house-photo-5.jpg" target="_blank">
                            <img src="image/house-photo-5.jpg" alt="House photo 5">
                        </a>
                    </div>
                    <div class="photo-item">
                        <a href="image/house-photo-6.jpg" target="_blank">
                            <img src="image/house-photo-6.jpg" alt="House photo 6">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="reviews" class="reviews">
            <div class="container">
                <h2 id="reviews-title">Reviews</h2>
                <div id="reviews-container">
                    <div class="review-card">
                        <h3>Great Condo, Great Views!</h3>
                        <p>We loved our stay at this Fripp Island condo. The condo was clean, well-equipped, and had amazing views of the ocean. The resort amenities were great, and we enjoyed the pools and the golf course. We would definitely stay here again!</p>
                        <small>- John and Lisa M.</small>
                    </div>
                    <div class="review-card">
                        <h3>Perfect for a Family Vacation</h3>
                        <p>We had a wonderful time at this Fripp Island condo. The condo was spacious, clean, and had everything we needed for a comfortable stay. The resort amenities were great, and our kids loved the pools and the beach. We would highly recommend this condo to anyone looking for a peaceful and relaxing vacation.</p>
                        <small>- The Smith Family</small>
                    </div>
                    <div class="review-card">
                        <h3>Amazing Ocean Views</h3>
                        <p>This condo has some of the best ocean views we've ever seen. The condo was clean and comfortable, and had everything we needed for a great stay. The resort amenities were also great, and we enjoyed playing golf and tennis. We would definitely stay here again!</p>
                        <small>- The Jones Family</small>
                    </div>
                    <div class="review-card">
                        <h3>Relaxing Getaway</h3>
                        <p>We had a wonderful time at this Fripp Island condo. The condo was clean and comfortable, and had everything we needed for a relaxing vacation. The resort amenities were great, and we enjoyed the pools and the beach. We would definitely stay here again!</p>
                        <small>- The Brown Family</small>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">View All Reviews</a>
            </div>
        </section>
        <section id="fripp-island-overview" class="fripp-island-overview">
            <div class="container">
                <h2>Fripp Island Overview</h2>
                <p>Fripp Island is a beautiful barrier island located in the Lowcountry of South Carolina. The island is known for its natural beauty, pristine beaches, and abundant wildlife. Fripp Island is a popular destination for families and couples looking for a peaceful and relaxing getaway.</p>
                <a href="#" class="btn btn-primary">Learn More About Fripp Island</a>
            </div>
        </section>
        <section class="popout-articles">
            <div id="articles-container" class="container">
                <div class="article">
                    <h3>Explore the Beaches of Fripp Island</h3>
                    <p>Fripp Island is home to some of the most beautiful beaches in the Lowcountry. From secluded coves to wide stretches of sand, there is a beach for everyone on Fripp Island.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="article">
                    <h3>Discover the Wildlife of Fripp Island</h3>
                    <p>Fripp Island is home to a variety of wildlife, including dolphins, sea turtles, and a variety of bird species. Take a nature tour and explore the natural beauty of Fripp Island.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="article">
                    <h3>Enjoy Golfing on Fripp Island</h3>
                    <p>Fripp Island is home to two championship golf courses, Ocean Creek and Ocean Point. Both courses offer challenging play and stunning views of the ocean.</p>
                    <a href="#">Read More</a>
                </div>
                <div class="article">
                    <h3>Relax and Unwind on Fripp Island</h3>
                    <p>With its pristine beaches, natural beauty, and peaceful atmosphere, Fripp Island is the perfect place to unwind and recharge. Relax by the pool, take a walk on the beach, or just enjoy the view from your balcony.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </section>
        <section id="renter-login" class="renter-login">
            <div class="container">
                <h2>Renter Login</h2>
                <form>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p id="footer-text">© 2023 Fripp Island Vacation Rental Condo</p>
    </footer>
</body>

</html>