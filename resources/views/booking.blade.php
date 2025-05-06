
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Easy RentAL</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <header>
    <div class="logo">Easy RentAL</div>
    <nav>
      <a href="#">HOME</a>
      <a href="#">BIKES FOR RENT</a>
      <a href="#">OUR SERVICES</a>
      <a href="#">ABOUT US</a>
      <a href="#">FAQS</a>
    </nav>
    <div class="auth-buttons">
      <button>Log In</button>
      <button class="register">Register</button>
    </div>
  </header>

  <main>
    <section class="booking">
      <div class="form-section">
        <h4>Please Fill Up The Form In Detail For The Rental Inquiry:</h4>
        <form>
          <label>Name</label>
          <input type="text" placeholder="Enter your name" />
          <label>Phone Number</label>
          <input type="text" placeholder="Enter your number" />
          <label>Email</label>
          <input type="email" placeholder="Enter your email" />
          <label>Hire Date</label>
          <input type="date" />
          <label>Drop Off</label>
          <input type="date" />
          <label>Bike</label>
          <select>
            <option>Select Bike</option>
          </select>
          <button type="submit" class="book-btn">BOOK</button>
        </form>
      </div>

      <div class="info-section">
        <h2>BOOK NOW</h2>
        <h4>Booking Procedure:</h4>
        <p>We have simple form and terms and conditions, which you need to fill up before hiring the bikes.</p>
        <ul>
          <li>Original Passport with Nepalese visa or refundable cash deposit.</li>
          <li>ID card or Citizenship card original.</li>
          <li>Valid driving license from your country or International Driving license.</li>
          <li>Or Someone from Nepal who can stay as a Guarantor for the security deposit.</li>
        </ul>
        <p>If you have any questions, please write us at <strong>citymotorbike.com@gmail.com</strong>.</p>
      </div>
    </section>
  </main>

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
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background: #fff;
  color: #000;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1em 2em;
  border-bottom: 1px solid #ccc;
}

.logo {
  font-weight: bold;
  color: #007bff;
  font-size: 1.5em;
}

nav a {
  margin: 0 10px;
  text-decoration: none;
  color: #000;
}

.auth-buttons button {
  margin-left: 10px;
  padding: 5px 10px;
  border: none;
  background: #eee;
  cursor: pointer;
}

.auth-buttons .register {
  background:#007bff ;
  color: white;
}

.booking {
  display: flex;
  justify-content: space-between;
  padding: 2em;
}

.form-section, .info-section {
  width: 48%;
}

form {
  display: flex;
  flex-direction: column;
}

form label {
  margin: 10px 0 5px;
  font-weight: bold;
}

form input, form select {
  padding: 10px;
  margin-bottom: 10px;
}

.book-btn {
  background: #007bff;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.info-section h2 {
  color: #007bff;
  margin-bottom: 10px;
}

.info-section ul {
  margin-left: 20px;
  list-style: disc;
}

.footer {
  background: #007bff;
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


</style>

