<?php

require_once('function/koneksi.php');
require_once('function/helper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="<?= BASE_URL . 'process/process_login.php' ?>" method="post">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-4  mt-5 me-3">Login</p>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Username</label>
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter username" name="username"/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password" required autocomplete="current-password"/>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#"
                      class="link-danger" style="text-decoration: none">Register</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
