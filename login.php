<?php include_once 'header.php'; ?>

<div class="container login-wrapper">
  <section class="section-login">
      <h1>LOGIN</h1>
      <p class="login-copy">Enter your email address and password below:</p>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">My email address is:</label>
          <input type="email" class="form-control" id="login_email" placeholder="Email address">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">My password is:</label>
          <input type="password" class="form-control" id="login_pass" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" class"login-checkbox"> Remember Me
          </label>
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
      <p class="copy-forgot">Forgot username or password?</p>
      <p>Don't have an account?<a href="#" class="copy-link">Register Now</a></p>
  </section>
</div>
<?php include_once 'footer.php'; ?>
