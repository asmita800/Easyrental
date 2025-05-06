<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Easy RentAL</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="container header-content">
    <div class="logo">Easy RentAL</div>
    <nav class="nav">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>
  </div>
</header>

<!-- Hero Section -->
<section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <h1>We Provide Bikes<br>and Scooter for Rent</h1>
      <p>Find the best rides for your journey!</p>
      <div class="hero-buttons">
        <a href="#" class="btn primary">Bike for Rent</a>
        <a href="#" class="btn secondary">Scooter for Rent</a>
      </div>
    </div>
    <div class="hero-images">
      <img src="https://via.placeholder.com/150" alt="Bike 1">
      <img src="https://via.placeholder.com/150" alt="Bike 2">
      <img src="https://via.placeholder.com/150" alt="Bike 3">
    </div>
  </div>
</section>

<!-- Bikes Section -->
<section class="section">
  <div class="container">
    <h2>Get Your <span class="highlight">Bike</span> For Rent</h2>
    <div class="card-grid">
      <div class="card">
        <img src="{{asset('storage/frontend_images/cool-motorcycle-outdoors.jpg')}}" alt="Bike 1">
        <h3>Royal Enfield</h3>
        <p>$120/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Bike 2">
        <h3>Sport Bike</h3>
        <p>$100/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Bike 3">
        <h3>Harley Davidson</h3>
        <p>$200/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Bike 4">
        <h3>Vintage Bike</h3>
        <p>$90/day</p>
      </div>
    </div>
  </div>
</section>

<!-- Scooters Section -->
<section class="section">
  <div class="container">
    <h2>Get Your <span class="highlight">Scooter</span> For Rent</h2>
    <div class="card-grid">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Scooter 1">
        <h3>Honda Dio</h3>
        <p>$40/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Scooter 2">
        <h3>TVS Jupiter</h3>
        <p>$35/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Scooter 3">
        <h3>Yamaha Fascino</h3>
        <p>$45/day</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Scooter 4">
        <h3>Honda Activa</h3>
        <p>$50/day</p>
      </div>
    </div>
  </div>
</section>

<!-- Industry Section -->
<section class="section">
  <div class="container">
    <h2>What We Are In <span class="highlight">Rental Industry</span></h2>
    <div class="industry-tabs">
      <button class="tab active">Bikes</button>
      <button class="tab">Scooters</button>
      <button class="tab">Accessories</button>
    </div>
    <div class="card-grid">
      <!-- More rental cards here -->
      <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Item 1">
        <h3>Royal Enfield</h3>
        <p>$120/day</p>
      </div>
      <!-- (repeat as needed) -->
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container footer-content">
    <div>
      <p>Contact: rental@easyrental.com</p>
      <p>Phone: +1 234 567 890</p>
      <p>Address: 123 Street, City, Country</p>
    </div>
    <div class="social-icons">
      <a href="#"><img src="https://via.placeholder.com/24" alt="Facebook"></a>
      <a href="#"><img src="https://via.placeholder.com/24" alt="Instagram"></a>
    </div>
  </div>
  <p class="copy">&copy; 2025 Easy RentAL. All rights reserved.</p>
</footer>

</body>
</html>
<style>
    /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', 'poppins';
  background: #fff;
  color: #333;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

/* Header */
.header {
  background: #fff;
  padding: 20px 0;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.8rem;
  font-weight: bold;
  color: #0056b3;
}
.nav a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.nav a:hover {
  color: #007bff;
}

/* Hero Section */
.hero {
  background: #f8f9fa;
  padding: 80px 0;
}

.hero-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.hero-text {
  max-width: 50%;
}

.hero-text h1 {
  font-size: 2.8rem;
  margin-bottom: 20px;
}

.hero-text p {
  font-size: 1.1rem;
  margin-bottom: 30px;
}

.hero-buttons {
  display: flex;
  gap: 15px;
}

.btn {
  padding: 10px 25px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: bold;
}

.primary {
  background: #007bff;
  color: #fff;
}

.secondary {
  background: #fff;
  color: #007bff;
  border: 2px solid #007bff;
}

.hero-images img {
  width: 100px;
  margin-left: 10px;
}

/* Sections */
.section {
  padding: 60px 0;
}

.section h2 {
  font-size: 2rem;
  margin-bottom: 40px;
  text-align: center;
}

.highlight {
  color: #007bff;
}

/* Cards */
.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-top: 20px;
}

.card {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.card img {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 15px;
}

.card h3 {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.card p {
  color: #28a745;
  font-weight: bold;
}

/* Tabs */
.industry-tabs {
  text-align: center;
  margin-bottom: 30px;
}

.tab {
  background: #fff;
  border: 2px solid #007bff;
  color: #007bff;
  padding: 8px 20px;
  margin: 0 10px;
  border-radius: 30px;
  cursor: pointer;
}

.tab.active, .tab:hover {
  background: #007bff;
  color: #fff;
}

/* Footer */
.footer {
  background: #0056b3;
  color: #fff;
  padding: 30px 0;
  margin-top: 50px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.social-icons img {
  width: 24px;
  margin-left: 15px;
}

.copy {
  text-align: center;
  margin-top: 20px;
  font-size: 0.9rem;
}
