<?php 
session_start();
require 'includes/header.php';

require 'includes/navbar.php';

require 'config.php'; 
 
?>



<main class="bg-light">


  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow">
          <div class="card-body">

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login"
                  type="button">
                  Login
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register"
                  type="button">
                  Register
                </button>
              </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">

              <!-- Login Form -->
              <div class="tab-pane fade show active" id="login">
                <h3 class="text-center mb-4">Login</h3>


                <form action="login_process.php" method="POST">
                  <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="loginEmail" placeholder="Enter your email"
                      required>
                  </div>

                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="loginPassword"
                      placeholder="Enter your password" required>
                  </div>

                  <div class="d-grid">
                    <button name="login" type="submit" class="btn btn-primary">
                      Login
                    </button>
                  </div>
                </form>
              </div>

              <!-- Registration Form -->
              <div class="tab-pane fade" id="register">
                <h3 class="text-center mb-4">Register</h3>


                <form action="register.php" method="POST">
                  <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input name="fullName" type="text" class="form-control" id="fullName"
                      placeholder="Enter your full name" required>
                  </div>

                  <div class="mb-3">
                    <label for="registerEmail" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="registerEmail"
                      placeholder="Enter your email" required>
                  </div>

                  <div class="mb-3">
                    <label for="registerPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="registerPassword" minlength="8"
                      placeholder="Create a password" required>
                  </div>

                  <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input name="confirm_password" type="password" class="form-control" id="confirmPassword"
                      minlength="8" placeholder="Confirm your password" required>
                  </div>

                  <div class="d-grid">
                    <button name="register" type="submit" class="btn btn-success">
                      Register
                    </button>
                  </div>
                </form>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>


</main>



<?php require 'includes/footer.php'; ?>