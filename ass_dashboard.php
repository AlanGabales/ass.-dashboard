<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'library') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Borrowing Library Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Custom sidebar styles */
    #sidebar {
      height: 100vh;
      background-color: #D9D9D9;
    }
    #sidebar .list-group-item {
      border-radius: 0;
      border-left: 0;
      border-right: 0;
      border-top: 1px solid rgba(0,0,0,.125);
      border-bottom: 1px solid rgba(0,0,0,.125);
    }
    .navbar{
        background-color: #D9D9D9;
    }
    /* Navbar styles */
    #navbar-menu {
      cursor: pointer;
    }
    /* Center content */
    #content {
      margin-top: 20px;
    }
    /* Hide sidebar on small screens */
    @media (max-width: 768px) {
      #sidebar {
        display: none;
      }
      #sidebar.show {
        display: block;
      }
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <span class="navbar-brand p-3">Borrowing Library Management System</span>
      <button id="navbar-menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <!-- Add your navigation items here, if needed -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- Sidebar -->
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block  sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="path/to/picture.jpg" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 50px;">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Transactions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cataloging</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Main content area (can be used for dashboard content) -->
      <main id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h1>Members Table</h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>Member</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script>
    // Toggle sidebar on menu icon click
    document.getElementById('navbar-menu').addEventListener('click', function() {
      document.getElementById('sidebar').classList.toggle('show');
    });
  </script>
</body>
</html>
