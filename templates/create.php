<?php include('includes/header.php') ?>
<form role="form"
            <div role="form-group">
              <label id="text_label">Topic Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
            </div>
            <div role="form-group">
              <label id="text_label">Category</label>
              <select class="form-control">
                <option>Design</option>
                <option>Development</option>
                <option>Business & Marketing</option>
                <option>Search Engines</option>
                <option>Cloud & Hosting</option>
              </select>
            </div>
            <div class="form-group">
              <label id="text-label"> Topic Body</label>
              <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
              <script>CKEDITOR.replace('body');</script>
            </div>
            <button type="submit" class="btn btn-primary ">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div id="sidebar">
             <div class="block">
               <h3>Login Form</h3>
               <form role="form">
               <div class="form-group">
                 <label id="text_label">Username</label>
                 <input type="text" class="form-control"  placeholder="Enter Password" name="username">
               </div>
               <div class="form-group">
                 <label id="text_label">Password</label>
                 <input type="password" class="form-control"  placeholder="Enter Password" name="password">
               </div>
               <button name="do_login"type="submit" class="btn btn-primary">Login</button><a href="register.html" class="btn btn-default">Create an Account</a>
               </form> 
<?php include('includes/footer.php') ?>