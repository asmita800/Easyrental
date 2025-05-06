<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Easy RentAL - About Us</title>
  <link rel="stylesheet" href="styles.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Navigation -->
  <header>
    <div class="container nav-bar">
      <h1 class="logo">Easy RentAL</h1>
      <nav>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Bikes for Rent</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="#" class="active">About Us</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </nav>
      <div class="nav-buttons">
        <button class="btn-outline">Log In</button>
        <button class="btn-fill">Register</button>
      </div>
    </div>
  </header>

  <!-- About Us Section -->
  <section class="about">
    <h2 class="section-heading">Know More <span>About Us</span></h2>
    <div class="about-content container">
      <img src="motorbike.jpg" alt="Motorbike" class="about-image" />
      <div class="about-text">
        <h3>Who We Are in the <span class="highlight">Industry</span> We Show You</h3>
        <p>
          Our mission is to promote eco-friendly and convenient transportation by providing a seamless rental experience through our user-friendly platform. From hourly rentals to daily plans, we offer flexible options to suit every need. With well-maintained bikes, multiple pickup locations, and 24/7 customer support, we're here to help you ride better, faster, and greener. Come join us and make your journey memorable!
        </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container footer-content">
      <div class="footer-left">
        <h2>Easy RentAL</h2>
        <p>Bharatpur 5, Chitwan</p>
        <p>9812345676<br>9826734623</p>
        <p>info@bikerentalsystem.com<br>bikerental.com@gmail.com</p>
        <p><a href="https://www.bikerentalsystem.com">www.bikerentalsystem.com</a></p>
      </div>
      <div class="footer-right">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>

</body>
</html>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  font-family: 'Segoe UI', sans-serif;
  line-height: 1.6;
  color: #333;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

/* Header */
header {
  background: #fff;
  padding: 1rem 0;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.nav-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  color: #0072ce;
  font-weight: 600;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.nav-links a {
  text-decoration: none;
  color: #000;
  font-weight: 500;
}

.nav-links .active {
  border-bottom: 2px solid #0072ce;
}

.nav-buttons .btn-outline,
.nav-buttons .btn-fill {
  padding: 0.4rem 1rem;
  margin-left: 0.5rem;
  border: 1px solid #0072ce;
  background: transparent;
  color: #0072ce;
  border-radius: 4px;
  cursor: pointer;
}

.btn-fill {
  background-color: #0072ce;
  color: #fff;
}

/* About Section */
.about {
  background: #f9f9f9;
  padding: 4rem 0;
  text-align: center;
}

.section-heading {
  font-size: 1.8rem;
  margin-bottom: 2rem;
  font-weight: bold;
}

.section-heading span {
  color: #0072ce;
}

.about-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 2rem;
}

.about-image {
  flex: 1;
  max-width: 400px;
  border-radius: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.about-text {
  flex: 2;
  text-align: left;
}

.about-text h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.about-text .highlight {
  color: #0072ce;
}

.about-text p {
  color: #666;
  font-size: 1rem;
}

/* Footer */
footer {
  background: #0058a3;
  color: #fff;
  padding: 2rem 0;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 2rem;
}

.footer-left p, .footer-left a {
  margin: 0.4rem 0;
  color: #fff;
  font-size: 0.9rem;
  text-decoration: none;
}

.footer-right a {
  font-size: 1.8rem;
  color: #fff;
  margin-right: 1rem;
}


</style>