<?php include('includes/header.php') ?>
<form role="form" enctype="multipart/form-data" method="post" action="register.php">
              <div class="form-group">
                <label id="text_label"> Name*</label><input type="text" class="form-control" name="name" placeholder="Enter your name ">
              </div>
              <div class="form-group">
                <label id="text_label">Email Address*</label><input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
              </div>
              <div class="form-group">
                <label id="text_label">Choose Username*</label><input type="text" class="form-control" name="username" placeholder="Create a username">
              </div>
              <div class="form-group">
                <label id="text_label">Password*</label><input type="password" class="form-control" name="password" placeholder="password">
              </div>
              <div class="form-group">
                <label id="text_label">Confirm Password*</label><input type="password" class="form-control" name="password2" placeholder="Confirm password">
              </div>
              <div class="form-group">
                <label id="text_label">Upload Avatar</label><input type="file" name="avatar">
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label id="text_label">About Me</label>
                <textarea id="text_label" rows="6" cols="80" class="form-control" name="about" placeholder="Tell us about your yourself"></textarea>
              </div>
              <br>
              <button name="register"type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
<?php include('includes/footer.php') ?>