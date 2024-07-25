<?php 
include ('Function/adminlogin.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Admin | Login to your account</title>
    <meta property="og:title" content="Login-Admin - Copy of WellTech Care" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="shortcut icon"
      href="/playground_assets/logo1.png"
      type="icon/png"
      sizes="32x32"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./login-admin.css" rel="stylesheet" />

      <div class="login-admin-container">
        <div class="login-admin-logo-header-container">
          <div class="login-admin-header-top-container">
            <div class="login-admin-background-container">
              <img
                alt="image"
                src="public/playground_assets/untitled%20design%20%5B2%5D-500h.png"
                class="login-admin-image"
              />
              <div class="login-admin-header-top-p-m-e-name-container">
                <span class="login-admin-text">
                  <span class="login-admin-text01">ADMIN&nbsp;</span>
                  <span class="login-admin-text02">PORTAL</span>
                  <br />
                </span>
                <div class="login-admin-container1">
                  <span class="login-admin-logo-text">WellTech Care</span>
                  <span class="login-admin-text04">
                    Physical &amp; Health Care
                  </span>
                </div>
              </div>
              <div class="login-admin-container2">
                <a href="index.php" class="login-admin-navlink">
                  <svg viewBox="0 0 1024 1024" class="login-admin-icon">
                    <path
                      d="M1024 590.444l-512-397.426-512 397.428v-162.038l512-397.426 512 397.428zM896 576v384h-256v-256h-256v256h-256v-384l384-288z"
                    ></path>
                  </svg>
                </a>
                <a href="../index.php" class="login-admin-navlink1">
                  Go to website
                </a>
              </div>
            </div>
          </div>
          <div class="login-admin-white-container">
            <form class="login-admin-login-form" method="POST" action = "<?php $_PHP_SELF ?>">
              <div class="login-admin-body-login-container">
                <div class="login-admin-left-input-container">
                  <div class="login-admin-welcome-back-text-container">
                    <div class="login-admin-container3"></div>
                    <span class="login-admin-text05">welcome back</span>
                  </div>
                  <div class="login-admin-username-container">
                    <span class="login-admin-text06">Username</span>
                    <input
                      type="text"
                      name="admin_username"
                      required=""
                      placeholder="Enter Username"
                      class="login-admin-textinput input"
                    />
                    <?php if (isset($_COOKIE['admin_username']))
                    {
                      echo $_COOKIE['admin_username'];
                    }?>

                  </div>
                  <div class="login-admin-pass-container">
                    <span class="login-admin-text07">Password</span>
                    <!-- <svg viewBox="0 0 1024 1024" class="login-admin-icon2">
                      <path
                        d="M512 384q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM512 726q88 0 151-63t63-151-63-151-151-63-151 63-63 151 63 151 151 63zM512 192q158 0 286 88t184 232q-56 144-184 232t-286 88-286-88-184-232q56-144 184-232t286-88z"
                      ></path>
                    </svg> -->
                    <input
                      type="Password"
                      name="admin_password"
                      required=""
                      placeholder="Enter Password"
                      class="login-admin-textinput1 input"
                      style="outline: none;"
                    />
                  </div>
                  <span class="login-admin-text08">Forgot Password?</span>
                  <input 
                    type = "submit"
                    name="AdminSignIn"
                    class="login-admin-navlink2 button"
                    value="SIGN IN" 
                  >
                </div>
                <div class="login-admin-right-input-container">
                  <img
                    alt="image"
                    src="public/playground_assets/untitled%20design%20%5B2%5D-500h.png"
                    class="login-admin-image1"
                  />
                  <div class="login-admin-p-m-e-name-container">
                    <span class="login-admin-logo-text1">WellTech Care</span>
                    <span class="login-admin-text12">
                      Physical &amp; Health Care
                    </span>
                  </div>
                  <div class="login-admin-text-container">
                    <span class="login-admin-text13">
                      <span>Don't have an account?</span>
                      <br />
                    </span>
                    <span class="login-admin-text16">
                      Join us to start with your journey.
                    </span>
                  </div>
                  <div class="login-admin-btn-admin-container">
                    <div class="login-admin-container4">
                      <a href="../Doctor/login-doctor.php" class="login-admin-button button">
                        I'M A DOCTOR
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script
      data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
