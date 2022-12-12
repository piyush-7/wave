<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assests/images/favicon.png'); ?>">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assests/css/style_login.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assests/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assests/css/responsive.css'); ?>">
  

  </head>
  <body class="mt-0">
    <div class="container-fluid h-100">
        <div class="row align-items-center ">
            <div class="col p-5  gb_login align-items-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?= base_url('assests/images/market_analysis.svg'); ?>" alt="...">
                        <div class="h6_heading text-white">Focus on the work that matters
                            <h6>Finally a place where it all comes together</h6>
                            <p>Employees like you can even make Mondays a joy. Thanks for your hard work and super attitude.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('assests/images/designer.svg'); ?>" alt="...">
                        <div class="h6_heading text-white">
                            <h6>Focus on the work that matters</h6>
                            <p>Business opportunities are like buses, there’s always another one coming.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('assests/images/LeftImage.svg'); ?>" alt="...">
                        <div class="h6_heading text-white">
                            <h6>Best Employee Experience Platform</h6>
                            <p>Don’t limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. You achieve what you believe.</p>
                        </div>
                      </div>
                    </div>
                   
                  </div>

            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-xl-4 col-xxl-4  p-5">
                <div class="text-end">
                    <a href="<?= base_url()?>home"><img src="<?= base_url('assests/images/home/logo.svg'); ?>" alt=""></a>
                </div>
              <div class="py-5">
                <h6 class="login_heading">Login</h6>
                <p>Not yet registered? <a href="<?= base_url();?>signup">Sign Up</a></p>
              </div>
                
              <?php if($error=$this->session->flashdata('msg')){?>
                <?php if($er=$this->session->flashdata('msg_class')){?>

                  <div class="alert text-white <?= $er ?> ">
                      <?= $error ?>
                  </div>
                <?php }}?>
              <!--form-->
              <?php echo form_open('wave_controller/login'); ?>

                  <form id="wf-form-Free-Account-Form"  class="create-form-horizontal" aria-label="Free Account Form">
                    <div class="mb-5 inputteg">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control form-control-lg" id="" aria-describedby="" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email'); ?>
                    </div>

                      <div class="mb-3 inputteg">
                          <label for="" class="form-label">Password</label>
                          <input type="text" class="form-control form-control-lg" id="" name="password" >
                          
                      </div>
                      
                      <!-- <div class="mb-3 text-end form_forget_password">
                        <a  href="#">Forgot Password?</a>
                      </div> -->
                   
                    <!-- <a href="index.html" class="button cc-lilac cc-form-button w-button"> Login</a> -->
                    <!-- <button class="button cc-lilac cc-form-button w-button">Login</button> -->
                    <input type="submit" value="Login"  class="button cc-lilac cc-form-button w-button"> 
                    <!-- <div class="google-sso-group">
                        <div class="or-divider">
                            <div class="or-divider__line"></div>
                            <div>or</div>
                            <div class="or-divider__line"></div>
                        </div><a href="#" class="button cc-google-sso w-inline-block"><img loading="lazy" width="20" height="21" src="https://assets-global.website-files.com/62446230dcb514b828a6e237/62459f3ee0f117334550d6d9_google-g-logo_48dp.webp" id="w-node-_9f2277dd-61c3-f8bf-4433-41915aa5ddcc-e3a6e23a" alt="Google icon" class="google-g-logo">
                        <div id="w-node-_9f2277dd-61c3-f8bf-4433-41915aa5ddcd-e3a6e23a" class="cc-google-sso_text">Sign up with Google</div>
                    </a>
                </div> -->
            </form>
            <?= form_close(); ?>
            <div class="text-style-body legal-fine-print">By signing up, you are indicating that you have read and agree to the <a href="" target="_blank"><strong>Terms of Use</strong></a> and <a href="" target="_blank"><strong>Privacy Policy</strong></a>.</div>
            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?= base_url();?>assests/javascrip/index.js"></script>
  </body>
</html>