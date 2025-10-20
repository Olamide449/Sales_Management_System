<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sales Manager</title>

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"/>

  <link rel="stylesheet" href="style.css" />
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Sales Manager</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="product.html">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="sales.html">Sales</a></li>
          <li class="nav-item"><a class="nav-link" href="addproduct.html">Add Product</a></li>
        </ul>
        <form class="d-flex ms-lg-3" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <section class="hero d-flex align-items-center text-center text-lg-start">
    <div class="container py-5 mt-5">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold text-light mb-3">
            Welcome to <span class="text-primary">Sales Manager</span>
          </h1>
          <p class="lead text-secondary">
            Easily track products, manage sales, and grow your business with
            ease and simplicity.
          </p>
          <a href="#" class="btn btn-primary btn-lg mt-3">View Products</a>
        </div>
        <div class="col-lg-6 text-center">
          <img
            src="./sales.jpg"
            alt="Sales Dashboard"
            class="img-fluid rounded shadow-lg"
            width="500"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="container text-center py-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card bg-dark border-light h-100 shadow-sm p-3">
          <div class="display-5 mb-3">🛒</div>
          <h4 class="fw-bold text-light">Manage Products</h4>
          <p class="text-secondary">
            Keep track of your inventory in one simple dashboard.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark border-light h-100 shadow-sm p-3">
          <div class="display-5 mb-3">📊</div>
          <h4 class="fw-bold text-light">View Sales</h4>
          <p class="text-secondary">
            Monitor performance with real-time sales data insights.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark border-light h-100 shadow-sm p-3">
          <div class="display-5 mb-3">➕</div>
          <h4 class="fw-bold text-light">Add Products</h4>
          <p class="text-secondary">
            Quickly add and manage new items to your sales system.
          </p>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-center text-secondary py-4 border-top">
    <p class="mb-0">
      © 2025 Unique 🌹 | Sales Management System
    </p>
  </footer>

  
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
