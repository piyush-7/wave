<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" type="image/x-icon" href="assests/images/favicon.png">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/responsive.css">

  </head>
  <body >
  

    
    <nav class="navbar navbar-expand-lg " id="navbar" >
        <div class="container">
          <a class="navbar-brand ps-0" href="index.php"><img src="assests/images/home/logo.svg" id="logo" alt=""></a>
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
                       <a href="<?php echo base_url();?>invoice">
                        <strong>Invoicing</strong><br>
                       <small>Create and send professional invoices</small>
                       </a>
                       <hr>
                      </div>
                      
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 drop_menu_link">
                        <a href="">
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
              
              <a href="<?php echo base_url();?>login" class=" sing_in" id="padding_scroll" type="submit">Sign in</a>


              <a href="<?php echo base_url();?>signup" class=" sign_up" id="padding_scroll" type="submit">Sign up for free</a>


            </div>
          </div>
        </div>
      </nav>

      <!-- end header------------------------------------------------ -->