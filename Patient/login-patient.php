<?php
include ('Function/PatientLoginFunction.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Patient | Login to your account</title>
    <meta property="og:title" content="Login-Patient - WellTech Care" />

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
      <link href="./login-patient.css" rel="stylesheet" />

      <div class="login-patient-container">
        <div class="login-patient-header-row">
          <a href="index.php" class="login-patient-navlink">
            <div class="login-patient-container01">
              <img
                alt="logo"
                src="public/playground_assets/logo-1500w.png"
                class="login-patient-logo"
              />
              <div class="login-patient-container02">
                <span class="login-patient-logo-text">WellTech Care</span>
                <span class="login-patient-text">
                  Physical &amp; Health Care
                </span>
              </div>
            </div>
          </a>
          <svg viewBox="0 0 1024 1024" class="login-patient-icon">
            <path
              d="M981.333 721.92c0.683-30.464-10.069-59.904-28.715-82.901-19.627-24.149-48.171-41.259-82.133-46.080-34.133-4.181-72.32-13.397-110.336-27.563-18.475-6.784-38.101-9.301-57.344-7.424-28.288 2.731-55.765 14.891-77.611 36.48l-30.72 30.72c-75.52-47.659-143.36-113.792-195.541-195.797l30.976-30.976c13.739-14.080 24.021-30.976 30.165-49.323 9.045-26.965 9.131-57.003-1.664-85.803-12.331-32.128-22.101-70.144-27.477-110.72-4.437-30.507-19.413-57.472-41.088-77.013-22.997-20.693-53.589-33.195-86.485-32.853h-127.829c-3.755 0-7.765 0.171-11.648 0.512-35.157 3.2-65.792 20.395-86.741 45.483s-32.341 58.325-29.141 93.824c12.8 131.243 58.24 266.368 137.216 388.352 64.085 102.955 155.648 197.248 268.715 269.056 109.568 72.405 242.517 122.112 387.669 137.856 3.925 0.384 8.149 0.555 12.288 0.555 35.328-0.128 67.328-14.635 90.368-37.845s37.248-55.339 37.12-90.496zM896 721.92v128c0.043 11.947-4.651 22.613-12.373 30.379s-18.304 12.587-30.123 12.629l-3.755-0.171c-130.56-14.208-250.581-59.221-348.757-124.117-103.595-65.835-185.984-150.955-243.285-242.944-72.405-111.787-113.28-233.856-124.757-351.488-1.024-11.435 2.731-22.443 9.771-30.891s17.195-14.080 28.928-15.147l131.712-0.171c11.563-0.128 21.632 4.011 29.312 10.923 7.253 6.571 12.288 15.616 13.781 25.941 6.059 45.739 17.408 90.325 32.299 129.067 3.456 9.216 3.413 19.072 0.427 28.075-2.091 6.187-5.589 11.989-10.325 16.853l-53.845 53.803c-13.824 13.824-16.171 34.731-6.912 51.243 67.584 118.827 163.797 211.499 272.256 272.128 16.939 9.472 37.632 6.144 50.987-7.083l54.187-54.187c7.083-6.997 16.085-10.965 25.515-11.904 6.485-0.64 13.227 0.213 19.584 2.56 43.605 16.256 88.32 27.136 129.451 32.171 10.283 1.451 19.712 7.083 26.24 15.147 6.272 7.723 9.856 17.579 9.643 29.099z"
            ></path>
          </svg>
          <div class="login-patient-container03">
            <span class="login-patient-text01">
              <span>Contact No.</span>
              <br />
            </span>
            <span class="login-patient-text04">0935-784-0897</span>
          </div>
          <img
            alt="image"
            src="public/playground_assets/placeholder-200h.png"
            class="login-patient-image"
          />
          <div class="login-patient-container04">
            <div class="login-patient-container05">
              <span class="login-patient-text05">
                <span>Opening hours</span>
                <br />
              </span>
              <span class="login-patient-text08">Mon-Sun: 9:00am-7:00pm</span>
            </div>
          </div>
          <img
            alt="image"
            src="public/playground_assets/click%20%5B1%5D-200h.png"
            class="login-patient-image1"
          />
          <div class="login-patient-container06">
            <span class="login-patient-text09">
              <span>Visit us&nbsp;</span>
              <br />
            </span>
            <span class="login-patient-text12">
              https://www.welltechcare.com/
            </span>
          </div>
        </div>
        <div class="login-patient-navbar-row">
          <header data-role="Header" class="login-patient-navbar-container">
            <div class="login-patient-nav">
              <a href="index.php" class="login-patient-navlink1"></a>
              <nav
                class="navigation-links5-nav navigation-links5-root-class-name26"
              >
                <a href="../index.php" class="login-patient-navlink1"></a>
                <a href="../index.php" class="navigation-links5-navlink">
                  <span>Home</span>
                </a>
                <a href="../news.php" class="navigation-links5-navlink1">
                  <span>News</span>
                </a>
                <a href="../about-us.php" class="navigation-links5-navlink2">
                  <span>About Us</span>
                </a>
                <a href="../contact-us.php" class="navigation-links5-navlink3">
                  <span>Contact Us</span>
                </a>
                <a href="../registration.php" class="navigation-links5-navlink4">
                  <span>Register</span>
                </a>
              </nav>
            </div>
            <div class="login-patient-btn-group"></div>
            <div data-type="BurgerMenu" class="login-patient-burger-menu">
              <svg viewBox="0 0 1024 1024" class="login-patient-icon02">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-type="MobileMenu" class="login-patient-mobile-menu">
              <div class="login-patient-nav1">
                <div class="login-patient-container07">
                  <img
                    alt="image"
                    src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                    class="login-patient-image2"
                  />
                  <div
                    data-type="CloseMobileMenu"
                    class="login-patient-menu-close"
                  >
                    <svg viewBox="0 0 1024 1024" class="login-patient-icon04">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <nav
                  class="navigation-links5-nav navigation-links5-root-class-name27"
                >
                  <a href="index.php" class="navigation-links5-navlink">
                    <span>Home</span>
                  </a>
                  <a href="news.php" class="navigation-links5-navlink1">
                    <span>News</span>
                  </a>
                  <a href="about-us.php" class="navigation-links5-navlink2">
                    <span>About Us</span>
                  </a>
                  <a href="contact-us.php" class="navigation-links5-navlink3">
                    <span>Contact Us</span>
                  </a>
                  <a
                    href="registration.php"
                    class="navigation-links5-navlink4"
                  >
                    <span>Registration</span>
                  </a>
                </nav>
              </div>
              <div>
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="login-patient-icon06"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="login-patient-icon08"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="login-patient-icon10"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
            <a href="login-patient.php" class="login-patient-login button">
              <span class="login-patient-text13">
                <span>LOGIN</span>
                <br />
              </span>
            </a>
          </header>
        </div>
        <div class="login-patient-banner-row">
          <div class="login-patient-banner-container">
            <div class="login-patient-container08">
              <span class="login-patient-text16">
                <span class="login-patient-text17">Patient</span>
                <br class="login-patient-text18" />
                <span class="login-patient-text19">PORTAL</span>
                <br />
              </span>
              <span class="login-patient-text21">
              Patients can log in to view or setup an appointment for medical check-ups.
              </span>
            </div>
          </div>
        </div>
        <div class="login-patient-sign-in-page-row">
          <div class="login-patient-sign-in-page-container">
            <form class="login-patient-sign-in-form" method="POST" action = "<?php $_PHP_SELF ?>">
              <div class="login-patient-container-login">
                <span class="login-patient-text22">
                  <span>
                    Login to the patient portal to get real-time updates.
                  </span>
                  <br />
                </span>

                <div class="login-patient-container09">
                  <div class="login-patient-left-side-container">
                    <div class="login-patient-welcome-back-text-container">
                      <div class="login-patient-container10"></div>
                      <span class="login-patient-text25">welcome back</span>
                    </div>
                    <div class="login-patient-username-container">
                      <span class="login-patient-text26">Username</span>
                      <input
                        type="text"
                        name="Username"
                        required=""
                        placeholder="Enter Username"
                        class="login-patient-textinput input"
                      />
                      <?php if (isset($_COOKIE['Username'])) 
                      {
                        echo $_COOKIE['Username'];
                      }  
                      ?>
                    </div>
                    <div class="login-patient-pass-container">
                      <span class="login-patient-text27">Password</span>
                      <!-- <svg viewBox="0 0 1024 1024" class="login-patient-icon12">
                        <path
                          d="M512 384q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM512 726q88 0 151-63t63-151-63-151-151-63-151 63-63 151 63 151 151 63zM512 192q158 0 286 88t184 232q-56 144-184 232t-286 88-286-88-184-232q56-144 184-232t286-88z"
                        ></path>
                      </svg> -->
                      <input
                        type="Password"
                        name="Password"
                        required=""
                        placeholder="Enter Password"
                        class="login-patient-textinput1 input"
                        style="outline: none;"
                      />
                      
                    </div>
                    <span class="login-patient-text28">Forgot Password?</span>
                    <input type="submit" name="login" class="login-patient-navlink2 button" value="Sign In"> 
                    <span class="login-patient-text29">
                      <span class="login-patient-text30">
                        Don't have an account yet?
                      </span>
                      <span class="login-patient-text31"></span>
                      <a
                        href="registration.php"
                        class="login-patient-navlink3"
                      >
                        Sign up
                      </a>
                    </span>
                  </form>
                    <div class="login-patient-container11">
                      <div class="login-patient-container12">
                        <div class="login-patient-container13">
                          <img
                            alt="image"
                            src="public/playground_assets/envelope-200h.png"
                            class="login-patient-image3"
                          />
                          <span class="login-patient-text32">
                            welltechcare@gmail.com
                          </span>
                        </div>
                        <div class="login-patient-container14">
                          <img
                            alt="image"
                            src="public/playground_assets/call-200h.png"
                            class="login-patient-image4"
                          />
                          <span class="login-patient-text33">
                            (632)784-1000 / (632) 667-3000
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="login-patient-right-side-container">
                    <div class="login-patient-container15">
                      <img
                        alt="image"
                        src="public/playground_assets/logo-1500w.png"
                        class="login-patient-image5"
                      />
                      <span class="login-patient-text34">
                        <span class="login-patient-text35">welltech care</span>
                        <br class="login-patient-text36" />
                        <span class="login-patient-text37"></span>
                        <span class="login-patient-text38">
                          physical &amp; healthcare
                        </span>
                        <br />
                      </span>
                      <span class="login-patient-text40">
                      WellTech care is one of the country's most affordable and trusted PME clinics, with over three branches across the country. If you want to know more about us, please click the button below.
                      </span>
                      <a
                        href="about-us.php"
                        class="login-patient-navlink4 button"
                      >
                        Click for more info
                      </a>
                    </div>
                    <div class="login-patient-container16">
                      <div class="login-patient-container17"></div>
                      <span class="login-patient-text41">our services</span>
                    </div>
                    <div class="login-patient-container18">
                      <div class="login-patient-container19">
                        <img
                          alt="image"
                          src="public/playground_assets/heart-checkup-400h.png"
                          class="login-patient-image6"
                        />
                        <span class="login-patient-text42">
                          <span class="login-patient-text43"></span>
                          <span class="login-patient-text44">
                            medical checkup
                          </span>
                          <br />
                        </span>
                        <span class="login-patient-text46">
                        Get only the best and most professional doctors conducting your PME or medical checkup on WellTech care.
                        </span>
                      </div>
                      <div class="login-patient-container20">
                        <img
                          alt="image"
                          src="public/playground_assets/deadline-400h.png"
                          class="login-patient-image7"
                        />
                        <span class="login-patient-text47">
                          <span class="login-patient-text48"></span>
                          <span class="login-patient-text49">
                            ONLINE APPOINTMENT SCHEDULE
                          </span>
                          <br />
                        </span>
                        <span class="login-patient-text51">
                        Place an appointment schedule on your chosen date and time and even your preferred doctor, and we will let you know if the appointment is approved via email.
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="login-patient-footer2row">
          <div class="login-patient-footer2container">
            <footer class="login-patient-footer">
              <span class="login-patient-text52">
                © 2022 WellTech Care, All Rights Reserved.
              </span>
              <div class="login-patient-container21">
                <div class="login-patient-container22">
                  <a href="index.php" class="login-patient-navlink5">Home</a>
                  <a href="about-us.php" class="login-patient-navlink6">
                    About Us
                  </a>
                  <a href="news.php" class="login-patient-navlink7">News</a>
                  <a href="contact-us.php" class="login-patient-navlink8">
                    Contact Us
                  </a>
                </div>
              </div>
            </footer>
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
