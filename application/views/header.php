<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" type="image/x-icon" href="<?php base_url('assests/images/favicon.png'); ?>">
    <script src="<?php base_url('https://kit.fontawesome.com/yourcode.js'); ?>" crossorigin="anonymous"></script>
    <link href="<?php base_url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url('assests/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php base_url('assests/css/responsive.css'); ?>">

  </head>
  <body >
  

    
    <nav class="navbar navbar-expand-lg " id="navbar" >
        <div class="container">
          <a class="navbar-brand ps-0" href="index.php"><img src="<?php base_url('assests/images/home/logo.svg'); ?>" id="logo" alt=""></a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav_padding_scrol" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Features
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2 10.4l2.9-2.8L14.5 9l-4.3 4.2L6 9l1.4-1.4 2.8 2.8z"></path></svg>
                </a>

                <div class="dropdown-menu p-3">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                       <a href="invoice.php">
                        <strong>Invoicing</strong><br>
                       <small>Create and send professional invoices</small>
                       </a>
                       <hr>
                      </div>
                      
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="invoice.php">
                          <strong>Banking</strong><br>
                         <small>Banking with built-in bookkeeping</small>
                         </a>
                         <hr>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="#">
                          <strong>Payments</strong><br>
                         <small>Accept credit cards and bank payments online</small>
                         </a>
                         <hr>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="#">
                          <strong>Payroll</strong><br>
                         <small>Pay your staff and yourself in minutes</small>
                         </a>
                         <hr>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="#">
                          <strong>Accounting</strong><br>
                         <small>Track your income and expenses</small>
                         </a>
                         <hr class="show_on_mobild">
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="#">
                          <strong>Advisors</strong><br>
                         <small>Get bookkeeping coaching</small>
                         </a>
                         
                      </div>
                    </div>
                  </div>
                  
                </div>



               
              </li>
              
              <li class="nav-item">
                <a class="nav-link nav_padding_scrol" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav_padding_scrol ">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav_padding_scrol dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Resource
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2 10.4l2.9-2.8L14.5 9l-4.3 4.2L6 9l1.4-1.4 2.8 2.8z"></path></svg>
                </a>
                <ul class="dropdown-menu p-3">
                  <li><a class="dropdown-item" href="#">About Us</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="#">Careers</a></li>
                  <hr>
                 
                  <li><a class="dropdown-item" href="#">How support works</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex justify-content-between border-0">
              
              <button class="btn sing_in" id="padding_scroll" onclick="document.location='login.php'"type="submit">Sign in</button>

              <button class="btn sign_up " onclick="document.location='signup.php'" type="submit">Sign up for free</button>
            </div>
          </div>
        </div>
      </nav>

      <!-- end header------------------------------------------------ -->