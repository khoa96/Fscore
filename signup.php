<?php include "templates/head.php"; ?>
<body>
  <div class="authen-wrapper">
    <div class="left-authen"></div>
    <div class="right-authen">
      <form action="#" method="#" class="authen-form">
        <div class="logo-wrapper">
          <img src="./images/logo.png" class="logo-for-pc" alt="">
          <img src="./images/logo-authen-mobile.png" class="logo-for-mobile" alt="">
        </div>
        <h3 class="form-title">Sign Up</h3>

        <div class="input-item">
          <input type="email" name="" value="" placeholder="Email address" class="input-common" />
        </div>

        <div class="input-item">
          <input type="text" name="" value="" placeholder="Username" class="input-common" />
        </div>

        <div class="input-item">
          <input type="password" name="" value="" placeholder="Password" class="input-common" />
        </div>

        <div class="agree-box">
          <label class="checkbox-wrapper">
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
            I am over 18 and have read the T&Cs and privacy policy
          </label>

        </div>

        <div class="form-submit">
          <button class="btn-submit">Sign up</button>
        </div>

        <hr class="dash" />
        <span class="have-account-title">Already a member?</span>

        <div class="form-submit submit-signup">
          <a href="signup.html" target="#"  class="btn-submit btn-signup">Sign in</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>