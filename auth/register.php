      <?php
        if (!empty($_SESSION['id'])) {
            header("location:?v=chat");
        }
        include 'controllers/authController.php'; ?>

      <section class="sect1">
          <form action="" method="POST" enctype="multipart/form-data" class='col-10 col-sm-11 col-md-6 col-lg-5'>
              <h1>REGISTER <?= APP_NAME ?></h1>
              <?php if (isset($page_err)) { ?>
                  <h5 class="<?php echo $page_err_color;
                                ?> p-2 fw-bold"><?= $page_err ?></h5>
              <?php } ?>
              <div class="PROFILEPICDIV bsn">
                  <label for="profile-pic" class="">
                      <img src="<?= APP_URL ?>asset/images/avatar.png" id="regpreview">
                      <p class="pp"> <i class="fa fa-upload"></i> choose profile pic</p>
                      <input required type="FILE" capture accept="image/*" name="profile_pic" onchange="previewregimg(event)" id="profile-pic" hidden>
                  </label>
              </div>
              <div class="">
                  <input required type="text" placeholder="Enter Full Name" name="names" value="<?php if (isset($_POST['names'])) {
                                                                                                    echo $_POST['names'];
                                                                                                } ?>">
                  <?php if (isset($name_err)) {
                        echo $name_err;
                    } ?></small>
              </div>

              <div class="">
                  <input required type="email" placeholder="Enter Email" name="email" value="<?php if (isset($_POST['email'])) {
                                                                                                    echo $_POST['email'];
                                                                                                } ?>">
                  <small class="p-2  text-danger"><?php if (isset($email_err)) {
                                                        echo $email_err;
                                                    } ?></small>
              </div>

              <div class="">
                  <input required type="password" placeholder="Enter  Password" name="password">
                  <small class="p-2  text-danger"><?php if (isset($password_err)) {
                                                        echo $password_err;
                                                    } ?></small>
              </div>
              <div class="">
                  <input type="text" hidden name="onlinestatus" value="0">
              </div>
              <div class="bsn">
                  <input type="submit" value="Register" name="register">
              </div>


              <div class="shadow-none">
                  <a href="?v=login"> Already have an account? Login</a>
              </div>

          </form>
          <script>
              let regpreview = document.getElementById('regpreview');

              function previewregimg(event) {
                  let src = URL.createObjectURL(event.target.files[0]);
                  regpreview.src = src;
              }
          </script>
      </section>