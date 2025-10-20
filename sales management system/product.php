<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products | Sales Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
   
    body {
      background: radial-gradient(circle at top, #121212, #0a0a0a);
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }


    .navbar {
      backdrop-filter: blur(10px);
      background: rgba(0, 0, 0, 0.8);
    }

    .navbar-brand {
      color: #0d6efd !important;
      letter-spacing: 1px;
      font-weight: 700;
    }

    .nav-link {
      color: #bbb !important;
      transition: color 0.3s ease;
    }

    .nav-link.active,
    .nav-link:hover {
      color: #0d6efd !important;
    }

    
    header {
      background: linear-gradient(120deg, #0d6efd33, #6610f233);
      border-bottom: 1px solid rgba(255,255,255,0.1);
      border-radius: 10px;
    }

    header h1 {
      font-size: 2.5rem;
    }

    .card {
      border: none;
      background: #1a1a1a;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(13, 110, 253, 0.3);
    }

    .card img {
      border-radius: 15px 15px 0 0;
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .card:hover img {
      transform: scale(1.07);
    }

    .card-body {
      padding: 1.25rem;
    }

    .card-title {
      font-size: 1.1rem;
      margin-bottom: 0.4rem;
    }

    .card-text {
      font-size: 0.95rem;
      color: #ccc;
    }

    .btn-primary {
      border: none;
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .btn-primary:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #6610f2, #0d6efd);
    }

    /* 🦶 Footer */
    footer {
      border-top: 1px solid rgba(255,255,255,0.1);
      background: #111;
      font-size: 0.9rem;
      color: #aaa;
    }

    footer p {
      margin: 0;
      letter-spacing: 0.5px;
    }

    /* 🌐 Responsive Tweaks */
    @media (max-width: 576px) {
      header h1 {
        font-size: 1.8rem;
      }
      .card img {
        height: 160px;
      }
    }
  </style>
</head>
<body>

  
  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sales Manager</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="products.html">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="sales.html">Sales</a></li>
          <li class="nav-item"><a class="nav-link" href="add-product.html">Add Product</a></li>
        </ul>
      </div>
    </div>
  </nav>

 
  <header class="text-center text-light py-5 mt-5">
    <h1 class="fw-bold">Our Products</h1>
    <p class="text-secondary">Discover quality products at unbeatable prices.</p>
  </header>


  <section class="container py-5">
    <div class="row g-4">

      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./wireless.jpeg" alt="Wireless Headphones">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Wireless Headphones</h5>
            <p class="card-text">$120.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./watch.jpeg" alt="Smart Watch">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Smart Watch</h5>
            <p class="card-text">$85.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

     
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./bluetooth.jpeg" alt="Bluetooth Speaker">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Bluetooth Speaker</h5>
            <p class="card-text">$60.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./laptop.jpeg" alt="Laptop Stand">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Laptop Stand</h5>
            <p class="card-text">$35.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

     
      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./charger.jpeg" alt="Portable Charger">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Portable Charger</h5>
            <p class="card-text">$45.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card h-100">
          <img src="./lamp.jpeg" alt="Desk Lamp">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Desk Lamp</h5>
            <p class="card-text">$25.00</p>
            <a href="#" class="btn btn-primary w-100">Buy Now</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  
  <footer class="text-center py-4 mt-5">
    <p>© 2025 Unique 🌹 | Sales Management System</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
