<?php
session_start();
#dashboard.php

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php require 'includes/header.php'; ?>

<?php require 'includes/navbar.php'; ?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-body">
      <h2>Welcome</h2>

      <p>
        Logged in as:
        <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>
      </p>
    </div>

    <div class="card-footer text-end">
      <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <div class="card-body">
      <h3>Dashboard Content</h3>
      <p>This is a protected area. Only logged-in users can see this.</p>
    </div>

    <section>
      <div class="card-body">
        <h4>Learning Management System</h4>
        <p>You can add more content here, such as user-specific data, links, or other features.</p>
      </div>

      <div class="card-body">
        <h4>Profile Section</h4>
        <p>This section can be used to display user profile information or settings.</p>
      </div>


      <div class="card-body">
        <h4>Analytics</h4>
        <p>Here you can show some analytics or statistics relevant to the user.</p>
      </div>
    </section>


  </div>
</div>

<?php require 'includes/footer.php'; ?>