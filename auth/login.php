   <?php
    if (!empty($_SESSION['id'])) {
        header("location:?v=chat");
    } include 'controllers/authController.php'; ?>
   <section class="sect1">
       <form action="" method="POST" class='col-10 col-sm-11 col-md-6 col-lg-5'>
           <h1>LOGIN <?= APP_NAME ?></h1>
         
    
                     
                     <?php if (isset($page_err)) {?>
                    <h5 class="<?php echo $page_err_color; unset($_SESSION['reg']) ?> p-2 fw-bold"><?= $page_err ?></h5>   
                     <?php } ?>
                     
           </div>  <div class="">
               <input type="email" placeholder="Enter Email" name="email">
               <small class="p-2  text-danger"><?php if (isset($email_err)) {
                                                    echo $email_err;
                                                } ?></small>
           </div>
           <div class="">
               <input type="password" placeholder="Enter  Password" name="password">
               <small class="p-2  text-danger"><?php if (isset($password_err)) {
                                                    echo $password_err;
                                                } ?></small>
           </div>

           <div class="bsn">
               <input type="submit" value="Login" name="login">
           </div>
           <div class="shadow-none">
               <a href="?v=register"> Don't have an account? Register</a>
           </div>

       </form>
   </section>