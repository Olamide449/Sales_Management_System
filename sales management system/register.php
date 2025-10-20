<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Sales Manager</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      min-height: 100vh;
      background: 
        linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.9)),
        url(./sales.jpg) no-repeat center center/cover;
      font-family: "Poppins", sans-serif;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    /* ===== Register Card ===== */
    .register-card {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      padding: 40px 35px;
      width: 100%;
      max-width: 460px;
      text-align: center;
      backdrop-filter: blur(12px);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4);
      margin-bottom: 30px;
    }

    .brand-logo {
      width: 70px;
      height: 70px;
      margin-bottom: 15px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.15);
      padding: 10px;
    }

    .register-card h1 {
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: #fff;
    }

    .register-card p {
      color: #ccc;
      font-size: 0.9rem;
      margin-bottom: 25px;
    }

    /* ===== Input Fields ===== */
    .form-control {
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.15);
      border-color: #0d6efd;
      box-shadow: none;
    }

    /* ===== Button ===== */
    .btn-primary {
      border-radius: 10px;
      border: none;
      background-color: #0d6efd;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      transform: scale(1.03);
    }

    /* ===== Login Redirect Text ===== */
    .login-text {
      margin-top: 18px;
      font-size: 0.9rem;
      color: #bbb;
    }

    .login-text a {
      color: #0d6efd;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .login-text a:hover {
      color: #0a58ca;
      text-decoration: underline;
    }

    /* ===== Footer ===== */
    footer {
      text-align: center;
      font-size: 0.85rem;
      color: #aaa;
      margin-top: auto;
      padding-bottom: 10px;
    }
  </style>
</head>

<body>
  <!-- ===== Register Form ===== -->
  <main class="register-card">
    <img
      src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
      alt="Sales Manager Logo"
      class="brand-logo"
    >

    <h1>Create an Account</h1>
    <p>Sign up to start managing your sales and products</p>

    <form method="POST" action="register.php">
      <div class="form-floating mb-3">
        <input
          type="text"
          class="form-control"
          id="floatingName"
          name="fullname"
          placeholder="Full Name"
          required
        >
        <label for="floatingName">Full Name</label>
      </div>

      <div class="form-floating mb-3">
        <input
          type="email"
          class="form-control"
          id="floatingEmail"
          name="email"
          placeholder="name@example.com"
          required
        >
        <label for="floatingEmail">Email address</label>
      </div>

      <div class="form-floating mb-3">
        <input
          type="password"
          class="form-control"
          id="floatingPassword"
          name="password"
          placeholder="Password"
          required
        >
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating mb-3">
        <input
          type="password"
          class="form-control"
          id="floatingConfirm"
          name="confirm_password"
          placeholder="Confirm Password"
          required
        >
        <label for="floatingConfirm">Confirm Password</label>
      </div>

      <button class="btn btn-primary w-100 py-2" type="submit">
        Register
      </button>
    </form>

    <p class="login-text">
      Already have an account?
      <a href="login.html">Sign in here</a>
    </p>
  </main>

  <footer>
    © 2025 Sales Manager — All Rights Reserved
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 <?php
include("php/registercontroller.php");
?>

