<?php
include 'Function/DoctorProfileFunction.php';
include 'Function/EditDoctorProfile.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Doctor | Edit Profile</title>
    <meta
      property="og:title"
      content="User-Profile-Doctor - Copy of Copy of WellTech Care"
    />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
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
      href="public/playground_assets/logo1.png"
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
      <link href="./user-profile-doctor.css" rel="stylesheet" />

      <div class="user-profile-doctor-container">
        <div class="user-profile-doctor-doctor-profile-body-container">
          <div class="user-profile-doctor-sidebar">
            <div class="user-profile-doctor-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="user-profile-doctor-image"
              />
              <div class="user-profile-doctor-container01">
                <span class="user-profile-doctor-logo-text">WellTech Care</span>
                <span class="user-profile-doctor-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg viewBox="0 0 1024 1024" class="user-profile-doctor-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="user-profile-doctor-nav">
              <a
                href="doctor-portal-home.php"
                class="user-profile-doctor-navlink"
              >
                <div class="user-profile-doctor-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="user-profile-doctor-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="user-profile-doctor-text01">Dashboard</span>
                </div>
              </a>
              <div class="user-profile-doctor-container03">
                <a
                  href="view-appointments-doctor.php"
                  class="user-profile-doctor-navlink1"
                >
                  <div class="user-profile-doctor-container04">
                    <div class="user-profile-doctor-container05">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="user-profile-doctor-icon04"
                      >
                        <path
                          d="M744.571 550.857l-292.571 292.571c-7.429 6.857-18.857 6.857-26.286 0l-164.571-164.571c-6.857-7.429-6.857-18.857 0-25.714l26.286-26.286c6.857-6.857 18.286-6.857 25.714 0l125.714 125.714 253.714-253.714c7.429-6.857 18.857-6.857 25.714 0l26.286 26.286c6.857 6.857 6.857 18.286 0 25.714zM73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                        ></path>
                      </svg>
                    </div>
                    <span class="user-profile-doctor-text02">
                      View Appointments
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="enter-lab-results-doctor.php"
                class="user-profile-doctor-navlink2"
              >
                <div class="user-profile-doctor-enter-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="user-profile-doctor-icon06"
                  >
                    <path
                      d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                    ></path>
                  </svg>
                  <span class="user-profile-doctor-text03">
                    <span>Enter Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="user-profile-doctor.php"
                class="user-profile-doctor-navlink3"
              >
                <div class="user-profile-doctor-profile">
                  <svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="user-profile-doctor-icon08"
                  >
                    <path
                      d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                    ></path>
                  </svg>
                  <span class="user-profile-doctor-text06">
                    <span>Profile</span>
                    <br />
                  </span>
                </div>
              </a>
              <a href="login-doctor.php" class="user-profile-doctor-navlink4 logout">
                <div class="user-profile-doctor-logout">
                  <div class="user-profile-doctor-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="user-profile-doctor-icon10"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="user-profile-doctor-container07">
                    <span class="user-profile-doctor-text09">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="user-profile-doctor-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="user-profile-doctor-image1"
                         />';?>
              <div class="user-profile-doctor-container08">
                <span class="user-profile-doctor-text12"><?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?></span>
                <span class="user-profile-doctor-text13">Doctor</span>
              </div>
            </div>
          </div>
          <div class="user-profile-doctor-main-body-container">
            <div class="user-profile-doctor-header-container">
              <span class="user-profile-doctor-patient-portal-txt">
                Doctor Portal System&nbsp;
              </span>
              <div class="user-profile-doctor-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="user-profile-doctor-image2"
                />
                <a
                  href="view-appointments-doctor.php"
                  class="user-profile-doctor-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="user-profile-doctor-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="user-profile-doctor-image4"
                />
              </div>
            </div>
            <div class="user-profile-doctor-container09">
              <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
              <div class="user-profile-doctor-container10">
                <div class="user-profile-doctor-container11">
                  <div
                    class="user-profile-doctor-doctor-profile-form-container"
                  >
                    <div class="user-profile-doctor-upload-image-container">
                      <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="user-profile-doctor-image5"
                        id="profileDisplay" /><br />';?>
                      <input type="file" name="Doctor_Image" onChange="displayImage(this)" id="Doctor_Image" onClick="triggerClick()"  hidden/>
                        <br>
                        <!--our custom file upload button-->
                        <label for="Doctor_Image" class="btn" >Select Photo</label>
                        <!-- <span id="file-chosen">No file chosen</span> -->
                    </div>
                    <div class="user-profile-doctor-container12">
                      <span class="user-profile-doctor-patient-portal-txt1">
                        Edit Profile
                      </span>
                      <div class="user-profile-doctor-txt-fields-container">
                        <span class="user-profile-doctor-text14">
                          personal information&nbsp;
                        </span>
                        <div class="user-profile-doctor-container13">
                          <div class="user-profile-doctor-container14">
                            <div class="user-profile-doctor-container15">
                              <span class="user-profile-doctor-text15">
                                First Name
                              </span>
                              <input
                                type="text"
                                name="First Name"
                                placeholder="First Name *"
                                value = "<?php echo $doctor_firstname ?>"
                                class="user-profile-doctor-textinput input"
                                readonly
                              />
                            </div>
                            <div class="user-profile-doctor-container16">
                              <span class="user-profile-doctor-text16">
                                Middle Initial
                              </span>
                              <input
                                type="text"
                                name="First Name"
                                placeholder="Middle Initial *"
                                value = "<?php echo $doctor_middleinitial ?>"
                                class="user-profile-doctor-textinput1 input"
                                readonly
                              />
                            </div>
                            <div class="user-profile-doctor-container17">
                              <span class="user-profile-doctor-text17">
                                Last Name
                              </span>
                              <input
                                type="text"
                                name="First Name"
                                placeholder="Last Name *"
                                value = "<?php echo $doctor_lastname ?>"
                                class="user-profile-doctor-textinput2 input"
                                readonly
                              />
                            </div>
                          </div>
                        </div>
                        <div class="user-profile-doctor-container18">
                          <div class="user-profile-doctor-age-container">
                            <span class="user-profile-doctor-text18">Age</span>
                            <input
                              type="number"
                              name="Age"
                              enctype="Age *"
                              required=""
                              placeholder="Age *"
                              value = "<?php echo $doctor_age ?>"
                              class="user-profile-doctor-textinput3 input"
                              readonly
                            />
                          </div>
                          <div class="user-profile-doctor-bdate-container">
                            <span class="user-profile-doctor-text19">
                              Birthdate
                            </span>
                            <input
                              type="date"
                              name="Birthdate"
                              value = "<?php echo $doctor_birthdate?>"
                              required=""
                              placeholder="Birthdate *"
                              class="user-profile-doctor-textinput4 input"
                              readonly
                            />
                          </div>
                        </div>
                        <div class="user-profile-doctor-container19">
                          <div class="user-profile-doctor-container20">
                            <span class="user-profile-doctor-text20">
                              Profession/Expertise
                            </span>
                            <input
                              type="text"
                              name="Profession"
                              placeholder="Dr *"
                              value = "<?php echo $doctor_profession ?>"
                              class="user-profile-doctor-textinput5 input"
                              readonly
                            />
                          </div>
                          <div class="user-profile-doctor-container21">
                            <span class="user-profile-doctor-text21">
                              Gender
                            </span>
                            <input
                              type="text"
                              name="Gender"
                              placeholder="Gender *"
                              value = "<?php echo $doctor_gender ?>"
                              class="user-profile-doctor-textinput6 input"
                              readonly
                            />
                          </div>
                        </div>
                        <div class="user-profile-doctor-container22">
                          <span class="user-profile-doctor-text22">
                            <span>Schedule</span>
                            <br />
                          </span>
                          <div class="user-profile-doctor-container23">
                            <input 
                            type="text"
                            name = "doctor_dayschedule"
                            readonly
                            value = "<?php echo $doctor_dayschedule ?>"
                            class="user-profile-doctor-select">

                         
                            <input
                            type = "text"
                            name = doctor_timeschedule
                            readonly
                            value = "<?php echo $doctor_timeschedule ?>" 
                            class="user-profile-doctor-select1">
                              
                          </div>
                        </div>
                        <span class="user-profile-doctor-text25">
                          CONTACT information
                        </span>
                        <div class="user-profile-doctor-container24">
                          <span class="user-profile-doctor-text26">Email</span>
                          <input
                            type="email"
                            name="doctor_email"
                            placeholder="Email *"
                            value = "<?php echo $doctor_email ?>" 
                            readonly
                            class="user-profile-doctor-textinput7 input"
                          />
                        </div>
                        <div class="user-profile-doctor-container25">
                          <div class="user-profile-doctor-container26">
                            <span class="user-profile-doctor-text27">
                              Contact Number
                            </span>
                            <input
                              type="tel"
                              name="Contact Number"
                              placeholder="Contact Number *"
                              readonly
                              value = "<?php echo $doctor_contactno ?>" 
                              class="user-profile-doctor-textinput8 input"
                            />
                          </div>
                        </div>
                        <input
                          name="UpdateDoctorProfile"
                          type="submit"
                          class="user-profile-doctor-button1 button"
                          value = "Save"
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
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
<script type="text/javascript">
  function triggerClick(e) 
  {
    document.querySelector('#Doctor_Image').click();
  }
  function displayImage(e)
  {
    if(e.files[0])
    {
      var reader = new FileReader();
      reader.onload = function(e)
      {
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }
</script>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script>

        $('.logout').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            swal({
          title: 'Log Out',
          text: "Are you sure you want to log out?",
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, log out!'
        }, function(){
                window.location.href = 'login-doctor.php';
          });
         })
        
</script>