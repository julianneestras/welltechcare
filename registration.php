<?php
include("Function/RegistrationFunction.php");
include("Function/Java.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Patient | Register an account</title>
    <meta property="og:title" content="Registration - WellTech Care" />

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
      .user-profile-patient-image2 {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 100px;
      }

      .btn {
        color: var(--dl-color-gray-white);
        cursor: pointer;
        font-size: 14px;
        font-style: normal;
        transition: 0.3s;
        font-family: Exo 2;
        font-weight: 400;
        border-width: 0px;
        background-color: #378DBD;
        padding: 0.5rem 1rem 0.5rem;
        border-radius: 4px;

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
      <link href="./registration.css" rel="stylesheet" />

      <div class="registration-container">
        <div class="registration-header-row">
          <a href="index.php" class="registration-navlink">
            <div class="registration-container01">
              <img
                alt="logo"
                src="public/playground_assets/logo-600h.png"
                class="registration-logo"
              />
              <div class="registration-container02">
                <span class="registration-logo-text">WellTech Care</span>
                <span class="registration-text">
                  Physical &amp; Health Care
                </span>
              </div>
            </div>
          </a>
          <svg viewBox="0 0 1024 1024" class="registration-icon">
            <path
              d="M981.333 721.92c0.683-30.464-10.069-59.904-28.715-82.901-19.627-24.149-48.171-41.259-82.133-46.080-34.133-4.181-72.32-13.397-110.336-27.563-18.475-6.784-38.101-9.301-57.344-7.424-28.288 2.731-55.765 14.891-77.611 36.48l-30.72 30.72c-75.52-47.659-143.36-113.792-195.541-195.797l30.976-30.976c13.739-14.080 24.021-30.976 30.165-49.323 9.045-26.965 9.131-57.003-1.664-85.803-12.331-32.128-22.101-70.144-27.477-110.72-4.437-30.507-19.413-57.472-41.088-77.013-22.997-20.693-53.589-33.195-86.485-32.853h-127.829c-3.755 0-7.765 0.171-11.648 0.512-35.157 3.2-65.792 20.395-86.741 45.483s-32.341 58.325-29.141 93.824c12.8 131.243 58.24 266.368 137.216 388.352 64.085 102.955 155.648 197.248 268.715 269.056 109.568 72.405 242.517 122.112 387.669 137.856 3.925 0.384 8.149 0.555 12.288 0.555 35.328-0.128 67.328-14.635 90.368-37.845s37.248-55.339 37.12-90.496zM896 721.92v128c0.043 11.947-4.651 22.613-12.373 30.379s-18.304 12.587-30.123 12.629l-3.755-0.171c-130.56-14.208-250.581-59.221-348.757-124.117-103.595-65.835-185.984-150.955-243.285-242.944-72.405-111.787-113.28-233.856-124.757-351.488-1.024-11.435 2.731-22.443 9.771-30.891s17.195-14.080 28.928-15.147l131.712-0.171c11.563-0.128 21.632 4.011 29.312 10.923 7.253 6.571 12.288 15.616 13.781 25.941 6.059 45.739 17.408 90.325 32.299 129.067 3.456 9.216 3.413 19.072 0.427 28.075-2.091 6.187-5.589 11.989-10.325 16.853l-53.845 53.803c-13.824 13.824-16.171 34.731-6.912 51.243 67.584 118.827 163.797 211.499 272.256 272.128 16.939 9.472 37.632 6.144 50.987-7.083l54.187-54.187c7.083-6.997 16.085-10.965 25.515-11.904 6.485-0.64 13.227 0.213 19.584 2.56 43.605 16.256 88.32 27.136 129.451 32.171 10.283 1.451 19.712 7.083 26.24 15.147 6.272 7.723 9.856 17.579 9.643 29.099z"
            ></path>
          </svg>
          <div class="registration-container03">
            <span class="registration-text01">
              <span>Contact No.</span>
              <br />
            </span>
            <span class="registration-text04">0935-784-0897</span>
          </div>
          <img
            alt="image"
            src="public/playground_assets/placeholder-200h.png"
            class="registration-image"
          />
          <div class="registration-container04">
            <div class="registration-container05">
              <span class="registration-text05">
                <span>Opening hours</span>
                <br />
              </span>
              <span class="registration-text08">Mon-Sun: 9:00am-7:00pm</span>
            </div>
          </div>
          <img
            alt="image"
            src="public/playground_assets/click%20%5B1%5D-200h.png"
            class="registration-image1"
          />
          <div class="registration-container06">
            <span class="registration-text09">
              <span>Visit us&nbsp;</span>
              <br />
            </span>
            <span class="registration-text12">
              https://www.welltechcare.com/
            </span>
          </div>
        </div>
        <div class="registration-navbar-row">
          <header data-role="Header" class="registration-navbar-container">
            <div class="registration-nav">
              <a href="index.php" class="registration-navlink1"></a>
              <nav
                class="navigation-links5-nav navigation-links5-root-class-name24"
              >
                <a href="index.php" class="registration-navlink1"></a>
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
                <a href="registration.php" class="navigation-links5-navlink4">
                  <span>Register</span>
                </a>
              </nav>
            </div>
            <div class="registration-btn-group"></div>
            <div data-type="BurgerMenu" class="registration-burger-menu">
              <svg viewBox="0 0 1024 1024" class="registration-icon02">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <div data-type="MobileMenu" class="registration-mobile-menu">
              <div class="registration-nav1">
                <div class="registration-container07">
                  <img
                    alt="image"
                    src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                    class="registration-image2"
                  />
                  <div
                    data-type="CloseMobileMenu"
                    class="registration-menu-close"
                  >
                    <svg viewBox="0 0 1024 1024" class="registration-icon04">
                      <path
                        d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <nav
                  class="navigation-links5-nav navigation-links5-root-class-name25"
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
                  class="registration-icon06"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="registration-icon08"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="registration-icon10"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </div>
            <a href="Patient/login-patient.php" class="registration-login button">
              <span class="registration-text13">
                <span>LOGIN</span>
                <br />
              </span>
            </a>
          </header>
        </div>
        <div class="registration-banner-row">
          <div class="registration-banner-container">
            <div class="registration-container08">
              <span class="registration-text16">
                <span class="registration-text17">Patient</span>
                <br class="registration-text18" />
                <span class="registration-text19">PORTAL</span>
                <br />
              </span>
              <span class="registration-text21">
              Patients can log in to view or setup an appointment for medical check-ups.
              </span>
            </div>
          </div>
        </div>
        <div class="registration-create-acc-row">
          <div class="registration-create-acc-container">
            <div class="registration-separator"></div>
            <span class="registration-text22">
              <span>Create Your Account</span>
              <br />
            </span>
            <span class="registration-text25">
              Please be guided that 17 year old below are not eligible for an
              account, and we suggest that a parent should supervise the child
              or teenager if they want to get an appointment. Please be advised
              that by creating an account through our system, you are letting us
              collect your basic information for medical purposes. If you have
              any questions, contact us at (632)784-1000 / (632) 667-3000 or
              email us at welltechcare@gmail.com.
            </span>
            <div class="registration-separator1"></div>
          </div>
        </div>
        <div class="registration-regform-row" style="Height: 2310px; margin-top: -140px;">
          <div class="registration-regform-container">
            <div class="registration-left-container-border" style="Height: 1985;">
              <form class="registration-left-form" >
                <div class="registration-left-main-container">
                  <img
                    alt="image"
                    src="public/playground_assets/logo-600h.png"
                    class="registration-image3"
                  />
                  <a
                    href="Patient/login-patient.php"
                    class="registration-navlink2 button"
                  >
                    <svg viewBox="0 0 1024 1024" class="registration-icon12">
                      <path
                        d="M384 512h-320v-128h320v-128l192 192-192 192zM1024 0v832l-384 192v-192h-384v-256h64v192h320v-576l256-128h-576v256h-64v-320z"
                      ></path>
                    </svg>
                    <span class="registration-text26">Sign In</span>
                  </a>
                  <span class="registration-text27">
                    <span class="registration-text28">
                      Already have an account?
                    </span>
                    <span></span>
                    <a href="Patient/login-patient.php" class="registration-navlink3">
                      Sign in
                    </a>
                  </span>
                  <div class="registration-container09">
                    <div class="registration-container10">
                      <div class="registration-container11">
                        <img
                          alt="image"
                          src="public/playground_assets/envelope-200h.png"
                          class="registration-image4"
                        />
                        <span class="registration-text30">
                          welltechcare@gmail.com
                        </span>
                      </div>
                      <div class="registration-container12">
                        <img
                          alt="image"
                          src="public/playground_assets/call-200h.png"
                          class="registration-image5"
                        />
                        <span class="registration-text31">
                          (632)784-1000 / (632) 667-3000
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="registration-right-container-border" style="Height: 1985;">
              <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
                <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
                <div class="registration-right-main-container" style="margin-top: 10px">
                  <div class="registration-personal-info-container" style="margin-bottom: 8px; margin-top: 80px;">
                    <div class="registration-container13"></div>
                    <br>
                    <span class="registration-text32">
                      personal information
                    </span>
                  </div>
                  <div class="registration-f-n-container">
                    <span class="registration-text33">Last Name</span>
                    <input
                      type="text"
                      name="Last_Name"
                      placeholder="Last Name *"
                      class="registration-textinput input"
                      value ="<?php if(isset($_POST['Last_Name'])) {echo $_POST['Last_Name'];} ?>">
                      <?php echo $error_LastName_Length; ?>
                      <?php echo $error_LastName_Numeric; ?>
                      <?php echo $error_LastName_Speccharac; ?>
                  </div>
                  <div class="registration-m-n-container">
                    <span class="registration-text34">Middle Name</span>
                    <input
                      type="text"
                      name="Middle_Name"
                      placeholder="Middle Name *"
                      class="registration-textinput01 input"
                      value ="<?php if(isset($_POST['Middle_Name'])) {echo $_POST['Middle_Name'];} ?>"
                    />
                    <?php echo $error_MiddleName_Length; ?>
                    <?php echo $error_MiddleName_Numeric; ?>
                    <?php echo $error_MiddleName_Speccharac; ?>
                  </div>
                  <div class="registration-l-n-container">
                    <span class="registration-text35">First Name</span>
                    <input
                      type="text"
                      name="First_Name"
                      required=""
                      placeholder="First Name"
                      class="registration-textinput02 input"
                      value ="<?php if(isset($_POST['First_Name'])) {echo $_POST['First_Name'];} ?>"
                    />
                    <?php echo $error_FirstName_Length ?>
                    <?php echo $error_FirstName_Numeric ?>
                    <?php echo $error_FirstName_Speccharac ?>
                  </div>
                  <div class="registration-bdate-age-container">
                    <div class="registration-bdate-container">
                      <span class="registration-text36">Birthdate</span>
                      <input
                        type="text"
                        id = "date"
                        name="Birthdate"
                        onfocus="(this.type='date')" 
                        onblur="getAge();" max="2004-06-30" min="1923-01-01"
                        required=""
                        placeholder="Birthdate *"
                        class="registration-textinput03 input"
                        value="<?php if(isset($_POST['Birthdate'])){echo $_POST['Birthdate'];} ?>"
                      />

                    </div>
                    <div class="registration-age-container">
                      <span class="registration-text37">Age</span>
                      <input
                        type="number"
                        name="Age"
                        id ="Age"
                        enctype="Age *"
                        required
                        readonly
                        maxlength="2"
                        placeholder="Age *"
                        class="registration-textinput04 input"
                        value ="<?php if(isset($_POST['Age'])) {echo $_POST['Age'];} ?>"
                      />
                    </div>
                  </div>
                  <div class="registration-hght-wght-gender-container">
                    <div class="registration-height">
                      <span class="registration-text38">Height in CM</span>
                      <input
                        type="number"
                        min="1"
                        name="Height"
                        enctype="Height *"
                        required=""
                        placeholder="CM*"
                        class="registration-textinput05 input"
                        value ="<?php if(isset($_POST['Height'])) {echo $_POST['Height'];} ?>"
                      />
                    </div>
                    <div class="registration-weight">
                      <span class="registration-text39">Weight in KG</span>
                      <input
                        type="number"
                        min="1"
                        name="Weight"
                        enctype="Weight *"
                        required=""
                        placeholder="KG*"
                        class="registration-textinput06 input"
                        value ="<?php if(isset($_POST['Weight'])) {echo $_POST['Weight'];} ?>"
                      />
                    </div>
                    <div class="registration-gender">
                      <div class="registration-container14">
                        <div class="registration-container15">
                          <input
                            type="radio"
                            name="Gender"
                            checked=""
                            id = "Male"
                            required=""
                            value ="Male" 
                            
                            class="registration-radiobutton inputabs"
                          />

                          <span class="registration-text40">Male</span>
                        </div>
                        <div class="registration-container16">
                          <input
                            type="radio"
                            name="Gender"
                            required=""
                            id = "Female"
                            value="Female"
                            
                            class="registration-radiobutton1 inputabs"
                          />

                          <span class="registration-text41">Female</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="registration-blood-type">
                    <span class="registration-text42">Blood Type</span>
                    <select name="BloodType" class="registration-textinput07 input" >
                    <option value="" selected disabled>---</option>
                    <option value="A+"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "A+") echo 'selected="selected"';?>>A+</option>
                    <option value="A-"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "A-") echo 'selected="selected"';?>>A-</option>
                    <option value="B+"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "B+") echo 'selected="selected"';?>>B+</option>
                    <option value="B-"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "B-") echo 'selected="selected"';?>>B-</option>
                    <option value="AB+"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "AB+") echo 'selected="selected"';?>
                    >AB+</option>
                    <option value="AB-"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "AB-") echo 'selected="selected"';?>
                    >AB-</option>
                    <option value="O+"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "O+") echo 'selected="selected"';?>>O+</option>
                    <option value="O-"<?php if(isset($_POST['BloodType']) && $_POST['BloodType'] == "O-") echo 'selected="selected"';?>>O-</option>
                    </select>
                  </div>
                  <div class="registration-contact-info-container">
                    <div class="registration-container17"></div>
                    <span class="registration-text43">CONTACT information</span>
                  </div>
                  <div class="registration-address-container">
                    <span class="registration-text44">Full Address</span>
                    <input
                      type="text"
                      name="Address"
                      placeholder="Address *"
                      value ="<?php if(isset($_POST['Address'])) {echo $_POST['Address'];} ?>"
                      class="registration-textinput08 input"
                    />
                  </div>
                  <div class="registration-contact-no-container">
                    <span class="registration-text45">Contact Number</span>
                    <input
                      type="tel"
                      name="ContactNo"
                      placeholder="Enter your number [1234-567-8901]" 
                      required pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                      value ="<?php if(isset($_POST['ContactNo'])) {echo $_POST['ContactNo'];} ?>"
                      class="registration-textinput09 input"
                    />
                  </div>
                  <div class="registration-email-container">
                    <span class="registration-text46">Email</span>
                    <div class="registration-container18">
                      <input
                        type="email"
                        name="Email"
                        placeholder="Email *"
                        value ="<?php if(isset($_POST['Email'])) {echo $_POST['Email'];} ?>"
                        class="registration-textinput10 input"
                      />
                       <input type="submit" name="verify" class="registration-navlink4 button" value="Verify"> 
                    </div>
                  </div>
                  <div class="registration-code-container">
                    <span class="registration-text47">Enter Code</span>
                    <input
                      type="text"
                      name="VCode"
                      placeholder="Verify Code *"
                      class="registration-textinput11 input"
                      value="<?php if(isset($_POST['VCode'])){echo $_POST['VCode'];} ?>">
                          <?php echo $error_VCode; ?>

                  </div>
                </form>
                  <div class="registration-patient-acc-container">
                    <div class="registration-container19"></div>
                    <span class="registration-text48">PATIENT ACCOUNT</span>
                  </div>
                  <div class="registration-u-name-container">
                    <span class="registration-text49">Username</span>
                    <input
                      type="text"
                      name="Username"
                      placeholder="Username *"
                      class="registration-textinput12 input"
                    />
                     <?php echo $error_Username; ?>
                  </div>
                  <div class="registration-pass-container">
                    <div class="registration-container20">
                      <svg viewBox="0 0 1024 1024" class="registration-icon14">
                        <path
                          d="M512 384q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM512 726q88 0 151-63t63-151-63-151-151-63-151 63-63 151 63 151 151 63zM512 192q158 0 286 88t184 232q-56 144-184 232t-286 88-286-88-184-232q56-144 184-232t286-88z"
                        ></path>
                      </svg>
                      <span class="registration-text50">Password</span>
                      <input
                        type="text"
                        name="Password"
                        placeholder="Password *"
                        class="registration-textinput13 input"
                      />
                       <?php echo $error_NoPass; ?>
                       <?php echo $error_Password; ?>
                    </div>
                    <svg viewBox="0 0 1024 1024" class="registration-icon16">
                      <path
                        d="M432.128 222.464c27.776-6.485 55.253-9.429 79.36-9.131 75.008 0 141.184 23.851 198.741 59.435 47.744 29.525 89.131 66.859 123.477 104.448 27.477 30.080 50.133 59.947 67.627 85.376 13.952 20.267 24.32 37.291 31.275 49.28-23.296 40.661-49.493 77.696-75.861 108.459-15.317 17.877-13.269 44.843 4.608 60.16s44.843 13.269 60.16-4.608c34.901-40.704 68.736-90.112 97.408-143.787 6.315-11.904 6.955-26.368 0.555-39.211 0 0-16.896-33.664-47.787-78.635-19.243-27.989-44.288-61.099-74.965-94.635-38.144-41.771-85.504-84.779-141.611-119.467-68.053-42.027-149.589-72.149-242.603-72.149-31.317-0.384-65.707 3.371-99.84 11.349-22.955 5.376-37.205 28.331-31.829 51.285s28.331 37.205 51.285 31.829zM427.819 488.192l107.989 107.989c-7.765 2.603-15.872 4.011-24.021 4.309-21.888 0.768-43.947-6.784-61.184-22.869s-26.325-37.547-27.093-59.435c-0.341-10.155 1.067-20.309 4.309-30.037zM255.275 315.605l108.928 108.928c-18.517 29.483-27.136 63.317-25.941 96.683 1.536 43.605 19.755 86.741 54.229 118.827s78.763 47.232 122.368 45.696c29.525-1.024 58.837-9.728 84.651-25.941l99.072 99.072c-58.795 34.091-123.52 51.029-187.051 51.797-73.984 0-140.16-23.851-197.717-59.435-47.744-29.525-89.131-66.859-123.477-104.448-27.477-30.080-50.133-59.947-67.627-85.376-13.909-20.267-24.32-37.248-31.232-49.237 44.8-77.739 101.376-144.171 163.883-196.565zM12.501 72.832l182.229 182.229c-73.856 63.104-139.477 143.275-189.653 236.757-6.315 11.904-6.997 26.411-0.555 39.253 0 0 16.896 33.664 47.787 78.635 19.243 27.989 44.288 61.099 74.965 94.635 38.144 41.771 85.504 84.779 141.611 119.467 68.053 42.069 149.589 72.192 243.627 72.192 85.035-1.024 171.477-25.643 248.107-75.051l190.549 190.549c16.683 16.683 43.691 16.683 60.331 0s16.683-43.691 0-60.331l-378.709-378.709c-0.085-0.085-0.213-0.213-0.299-0.299l-179.584-179.627c-0.341-0.299-0.683-0.683-1.024-1.024l-379.051-379.008c-16.683-16.683-43.691-16.683-60.331 0s-16.683 43.691 0 60.331z"
                      ></path>
                    </svg>
                  </div>
                  <div class="registration-reenter-pass-container">
                    <div class="registration-container21">
                      <span class="registration-text51">Re-enter Password</span>
                      <input
                        type="text"
                        name="ConPassword"
                        placeholder="Re-enter Password *"
                        class="registration-textinput14 input"
                      />
                       <?php echo $error_NoConfirmationPass; ?>
                      <svg viewBox="0 0 1024 1024" class="registration-icon18">
                        <path
                          d="M512 384q52 0 90 38t38 90-38 90-90 38-90-38-38-90 38-90 90-38zM512 726q88 0 151-63t63-151-63-151-151-63-151 63-63 151 63 151 151 63zM512 192q158 0 286 88t184 232q-56 144-184 232t-286 88-286-88-184-232q56-144 184-232t286-88z"
                        ></path>
                      </svg>
                    </div>
                     <input type="file" name="my_image">
                    <input type="submit" name="register" class="registration-sign-up-btn button" value="Sign Up"><br><br><br><br>
                  </div>
                   
                </div>
              </form>
            </form>
            </div>
          </div>
        </div>
        <div class="registration-footer2row">
          <div class="registration-footer2container">
            <div class="registration-container22">
              <footer class="registration-footer">
                <span class="registration-text52">
                  © 2022 WellTech Care, All Rights Reserved.
                </span>
                <div class="registration-container23">
                  <div class="registration-container24">
                    <a href="index.php" class="registration-navlink5">Home</a>
                    <a href="about-us.php" class="registration-navlink6">
                      About Us
                    </a>
                    <a href="news.php" class="registration-navlink7">News</a>
                    <a href="contact-us.php" class="registration-navlink8">
                      Contact Us
                    </a>
                  </div>
                </div>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script 

    data-section-id="header"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    >
  </script>



  </body>
</html>
<script type="text/javascript">
  function triggerClick(e) {
  document.querySelector('#image').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
