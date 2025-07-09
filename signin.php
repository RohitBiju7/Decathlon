<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Decathlon</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.75rem 1.5rem;
      border-bottom: 1px solid #eee;
      background-color: white;
    }

    .back-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #000;
      font-size: 0.95rem;
      flex: 1;
    }

    .back-link img {
      width: 20px;
      margin-right: 6px;
    }

    .decathlon-logo {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .decathlon-logo img {
      height: 75px;
    }

    .main-content {
      display: flex;
      flex: 1;
    }

    .login-left {
      flex: 1;
      background: url('images/sign_side.webp') no-repeat center center;
      background-size: cover;
    }

    .login-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 4rem;
    }

    .login-form {
      max-width: 500px;
      margin: auto;
    }

    .login-form h2 {
      margin-bottom: 1rem;
      font-size: 1.6rem;
    }

    .tab-switch {
      display: flex;
      margin-bottom: 1rem;
    }

    .tab-switch div {
      padding: 0.5rem 1rem;
      font-weight: bold;
      color: #2c2dc1;
      border-bottom: 2px solid #2c2dc1;
    }

    .login-form input {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-form button {
      width: 100%;
      padding: 0.75rem;
      background-color: #2c2dc1;
      color: white;
      border: none;
      font-weight: bold;
      cursor: pointer;
      border-radius: 4px;
    }

    .info {
      font-size: 0.9rem;
      color: #555;
    }

    .info li {
      margin: 0.4rem 0;
    }

    .toggle-link {
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .toggle-link a {
      color: #2c2dc1;
      text-decoration: none;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .main-content {
        flex-direction: column;
      }

      .login-left {
        height: 200px;
      }
    }
  </style>
</head>
<body>
  <header>
    <a href="index.php" class="back-link">
      <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="Home">
      Back
    </a>
    <div class="decathlon-logo">
      <img src="images/logo.png" alt="Decathlon Logo">
    </div>
    <div style="flex: 1;"></div> <!-- Spacer to balance flex -->
  </header>

  <div class="main-content">
    <div class="login-left"></div>
    <div class="login-right">
      <div class="login-form">
        <h2 id="form-title">Login</h2>

        <div class="tab-switch">
          <div class="active">E-mail</div>
        </div>

        <input type="email" placeholder="Enter your email address">
        <button>NEXT</button>

        <div class="toggle-link">
          <span id="toggle-text">No account? <a onclick="switchToSignup()">Create your Decathlon account</a></span>
        </div>

        <ul class="info">
          <li>✔ Exclusive Deals and Sporty Rewards</li>
          <li>✔ Personalised Experiences</li>
          <li>✔ Faster Checkout</li>
          <li>✔ Easy Return/Exchange</li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    function switchToSignup() {
      document.getElementById('form-title').textContent = "Let's go!";
      document.getElementById('toggle-text').innerHTML =
        'Already have an account? <a onclick="switchToLogin()">Login</a>';
    }

    function switchToLogin() {
      document.getElementById('form-title').textContent = "Login";
      document.getElementById('toggle-text').innerHTML =
        'No account? <a onclick="switchToSignup()">Create your Decathlon account</a>';
    }
  </script>
</body>
</html>
