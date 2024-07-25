<?php 
include 'Function/AdminProfileFunction.php';
include 'Function/AddDoctor.php';
include 'Function/AddDoctorFunction.php';
include 'Function/Java.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Admin | Add Doctor</title> 
    <meta
      property="og:title"
      content="Add-Doctor-Admin - Copy of Copy of WellTech Care"
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
      <link href="./add-doctor-admin.css" rel="stylesheet" />

      <div class="add-doctor-admin-container">
        <div class="add-doctor-admin-admin-add-doctors-container" style="height: 1510;">
          <div class="add-doctor-admin-sidebar">
            <div class="add-doctor-admin-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="add-doctor-admin-image"
              />
              <div class="add-doctor-admin-container01">
                <span class="add-doctor-admin-logo-text">WellTech Care</span>
                <span class="add-doctor-admin-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg viewBox="0 0 1024 1024" class="add-doctor-admin-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="add-doctor-admin-nav" style="margin-top: -912px;">
              <a href="admin-portal-home.php" class="add-doctor-admin-navlink">
                <div class="add-doctor-admin-container02">
                  <svg viewBox="0 0 1024 1024" class="add-doctor-admin-icon02">
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="add-doctor-admin-text01">Dashboard</span>
                </div>
              </a>
              <div class="add-doctor-admin-container03">
                <a
                  href="manage-appointments-admin.php"
                  class="add-doctor-admin-navlink1"
                >
                  <div class="add-doctor-admin-container04">
                    <svg
                      viewBox="0 0 950.8571428571428 1024"
                      class="add-doctor-admin-icon04"
                    >
                      <path
                        d="M73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                      ></path>
                    </svg>
                    <span class="add-doctor-admin-text02">
                      Manage Appointments
                    </span>
                  </div>
                </a>
                <a
                  href="manage-doctors-admin.php"
                  class="add-doctor-admin-navlink2"
                >
                  <div class="add-doctor-admin-container05">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="add-doctor-admin-icon06"
                    >
                      <path
                        d="M768 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM597.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM512 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496zM1024 896v-85.333c-0.043-53.12-19.499-101.76-51.883-139.136-27.819-32.128-65.195-55.936-107.904-67.243-22.784-6.016-46.123 7.552-52.139 30.336s7.552 46.123 30.336 52.139c25.899 6.869 48.469 21.248 65.195 40.619 19.413 22.443 31.019 51.456 31.061 83.285v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM672.085 174.891c34.261 8.789 61.653 30.507 78.379 58.752s22.656 62.72 13.867 96.981c-7.509 29.312-24.533 53.589-47.147 70.485-13.397 10.027-28.8 17.493-45.355 21.803-22.784 5.973-36.437 29.312-30.421 52.096s29.312 36.437 52.096 30.421c27.179-7.125 52.565-19.413 74.795-36.011 37.675-28.16 66.219-68.821 78.72-117.675 14.592-57.045 4.693-114.731-23.125-161.621s-73.6-83.328-130.645-97.963c-22.827-5.845-46.080 7.936-51.925 30.763s7.936 46.080 30.763 51.925z"
                      ></path>
                    </svg>
                    <span class="add-doctor-admin-text03">Manage Doctors</span>
                  </div>
                </a>
              </div>
              <a
                href="upload-lab-results-admin.php"
                class="add-doctor-admin-navlink3"
              >
                <div class="add-doctor-admin-upload-lab-results">
                  <svg viewBox="0 0 1024 1024" class="add-doctor-admin-icon08">
                    <path
                      d="M342 640l170-170 170 170-60 62-68-68v176h-84v-176l-68 66zM768 854v-470h-214v-214h-298v684h512zM598 86l256 256v512q0 34-26 59t-60 25h-512q-34 0-60-25t-26-59l2-684q0-34 25-59t59-25h342z"
                    ></path>
                  </svg>
                  <span class="add-doctor-admin-text04">
                    <span>Upload Lab Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a href="user-profile-admin.php">
              <div class="add-doctor-admin-profile">
                <svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="add-doctor-admin-icon10"
                >
                  <path
                    d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                  ></path>
                </svg>
                <span class="add-doctor-admin-text07">
                  <span>Profile</span>
                  <br />
                </span>
              </div>
              </a>
              <a href="login-admin.php" class="add-doctor-admin-navlink4 logout">
                <div class="add-doctor-admin-logout">
                  <div class="add-doctor-admin-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="add-doctor-admin-icon12"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="add-doctor-admin-container07">
                    <span class="add-doctor-admin-text10">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="add-doctor-admin-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $admin_picture ).'"class="add-doctor-admin-image1" 
                         />';?>
              <div class="add-doctor-admin-container08">
                <span class="add-doctor-admin-text13"><?php echo $admin_firstname?></span>
                <span class="add-doctor-admin-text14">Admin</span>
              </div>
            </div>
          </div>
          <div class="add-doctor-admin-main-body-container">
            <div class="add-doctor-admin-header-container">
              <span class="add-doctor-admin-patient-portal-txt">
                Admin Portal System&nbsp;
              </span>
              <div class="add-doctor-admin-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="add-doctor-admin-image2"
                />
                <a
                  href="manage-appointments-admin.php"
                  class="add-doctor-admin-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="add-doctor-admin-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="add-doctor-admin-image4"
                />
              </div>
            </div>
            <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
            <div class="add-doctor-admin-container09" style="height: 1400px;">
              <div class="add-doctor-admin-container10" style="height: 1400px;">
 
                <div class="add-doctor-admin-container11" style="height: 1400px;">
                  <div
                    class="add-doctor-admin-admin-add-doctors-form-container">  
                 
                    <div class="add-doctor-admin-main-border-container" style="height: 1250; margin-top: 215px;">
                      <div class="add-doctor-admin-add-a-doctor-txt-container" style="padding: 30px">
                        <span class="add-doctor-admin-text15">
                          Add a Doctor
                        </span>
                      </div>

                          <input
                            type="text"
                            name="doctor_id"
                            value = "DID-<?php echo DoctorID();?>"
                            class="add-doctor-admin-textinput input" hidden
                          />

                      <div style="margin-top: 38px;">
                           <img
                        alt="image"
                        src="https://play.teleporthq.io/static/svg/default-img.svg"
                        class="user-profile-patient-image2"
                        id = "profileDisplay" style="margin-bottom: 26px; margin-left: -2px;" 
                      />
                     <input type="file" name="image" onChange="displayImage(this)" id="image" onClick="triggerClick()"  hidden accept="image/gif, image/jpeg, image/png"/>
                        <!--our custom file upload button-->
                        <label for="image" class="btn" >Select Photo</label> <br>
                      </div>
                       
                      <div class="add-doctor-admin-main-bg-container">
                        <span class="add-doctor-admin-text16">
                          personal information&nbsp;
                        </span>
                      

                        <div class="add-doctor-admin-container12">
                          <div class="add-doctor-admin-container13">
                            <div class="add-doctor-admin-container14">
                              <span class="add-doctor-admin-text17">
                                First Name
                              </span>
                              <input
                                type="text"
                                name="doctor_firstname"
                                placeholder="First Name *"
                                class="add-doctor-admin-textinput input"
                                value ="<?php if(isset($_POST['doctor_firstname'])) {echo $_POST['doctor_firstname'];} ?>">
                              <?php echo $error_doctorfirstname_length; ?>
                              <?php echo $error_doctorfirstname_numeric; ?>
                              <?php echo $error_doctorfirstname_specialcharac; ?>
                            </div>
                            <div class="add-doctor-admin-container15">
                              <span class="add-doctor-admin-text18">
                                Middle Initial
                              </span>
                              <input
                                type="text"
                                name="doctor_middleinitial"
                                placeholder="Middle Initial *"
                                class="add-doctor-admin-textinput01 input"
                              value ="<?php if(isset($_POST['doctor_middleinitial'])) {echo $_POST['doctor_middleinitial'];} ?>">
                              <?php echo $error_doctormiddleinitial_length; ?>
                              <?php echo $error_doctormiddleinitial_numeric; ?>
                              <?php echo $error_doctormiddleinitial_specialcharac; ?>
                            </div>
                            <div class="add-doctor-admin-container16">
                              <span class="add-doctor-admin-text19">
                                Last Name
                              </span>
                              <input
                                type="text"
                                name="doctor_lastname"
                                placeholder="Last Name *"
                                class="add-doctor-admin-textinput02 input"
                              value ="<?php if(isset($_POST['doctor_lastname'])) {echo $_POST['doctor_lastname'];} ?>">
                              <?php echo $error_doctorlastname_length; ?>
                              <?php echo $error_doctorlastname_numeric; ?>
                              <?php echo $error_doctorlastname_specialcharac; ?>
                            </div>
                          </div>
                        </div>
                        <div class="add-doctor-admin-container17">
                          <div class="add-doctor-admin-age-container">
                            <span class="add-doctor-admin-text20">Age</span>
                            <input
                              type="number"
                              name="doctor_age"
                              id ="doctor_age"
                              enctype="Age *"
                              required
                              readonly
                              maxlength="2"
                              placeholder="Age *"
                              class="add-doctor-admin-textinput03 input"
                              value ="<?php if(isset($_POST['doctor_age'])) {echo $_POST['doctor_age'];} ?>">
                          </div>
                          <div class="add-doctor-admin-bdate-container">
                            <span class="add-doctor-admin-text21">
                              Birthdate
                            </span>
                            <input
                              type="text"
                              id = "date"
                              name="doctor_birthdate"
                              onfocus="(this.type='date')" 
                              onblur="getAge();" max="2004-06-30" min="1923-01-01"
                              required=""
                              placeholder="Birthdate *"
                              
                              class="add-doctor-admin-textinput04 input"
                            value ="<?php if(isset($_POST['doctor_birthdate'])) {echo $_POST['doctor_birthdate'];} ?>">
                          </div>
                        </div>
                        <div class="add-doctor-admin-container18">
                          <div class="add-doctor-admin-container19">
                            <span class="add-doctor-admin-text22">
                              Profession/Expertise
                            </span>
                            <input
                              type="text"
                              name="doctor_profession"
                              readonly
                              value = "Medical Professional"
                              placeholder="Medical Professional"
                              class="add-doctor-admin-textinput05 input"
                            />
                          </div>
                          <div class="add-doctor-admin-container20">
                            <div class="add-doctor-admin-container21">
                              <span class="add-doctor-admin-text23">
                                Gender
                              </span>
                            </div>
                            <select class="add-doctor-admin-select" name="doctor_gender">
                              <option value="" selected disabled>--Select Gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="add-doctor-admin-container22">
                          <span class="add-doctor-admin-text24">
                            <span>Schedule</span>
                            <br />
                          </span>
                          <div class="add-doctor-admin-container23">
                            <select class="add-doctor-admin-select1" data-placeholder="--Select Schedule--" 
                              multiple id="chosen-select" name="doctor_dayschedule[]">
                              <option value="Monday">Monday</option>
                              <option value="Tuesday">Tuesday</option>
                              <option value="Wednesday">Wednesday</option>
                              <option value="Thursday">Thursday</option>
                              <option value="Friday">Friday</option>
                              <option value="Saturday">Saturday</option>
                              <option value="Sunday">Sunday</option>
                            </select>
                            <select class="add-doctor-admin-select2" name="doctor_timeschedule[]">
                              <option value="" selected disabled >
                                -- Choose time --
                              </option>
                              <option value="7:00 AM - 11:00 AM">
                              7:00 AM - 11:00 AM</option>
                              <option value="6:30 AM - 10:30 AM">
                              6:30 AM - 10:30 AM</option>
                              <option value="7:30 AM - 11:30 AM">
                              7:30 AM - 11:30 AM</option>
                              <option value="1:00 PM - 7:00 PM">
                              1:00 PM - 7:00 PM</option>
                              <option value="12:00 PM - 7:00 PM">
                              12:00 PM - 7:00 PM</option>
                              <option value="3:00 PM - 9:00 PM">
                              3:00 PM - 9:00 PM</option>
                            </select>
                          </div>
                        </div>
                        <span class="add-doctor-admin-text27">
                          CONTACT information
                        </span>
                        <div class="add-doctor-admin-container24">
                          <div class="add-doctor-admin-container25">
                            <span class="add-doctor-admin-text28">Email</span>
                            <input
                              type="email"
                              name="doctor_email"
                              placeholder="Email *"
                              class="add-doctor-admin-textinput06 input"
                            />
                          </div>
                          <div class="add-doctor-admin-container26">
                            <span class="add-doctor-admin-text29">
                              Contact Number
                            </span>
                            <input
                              type="tel"
                              name="doctor_contactno"
                              placeholder="Contact Number *"
                              class="add-doctor-admin-textinput07 input"
                            />
                          </div>
                        </div>
                        <div class="add-doctor-admin-container27"></div>
                        <span class="add-doctor-admin-text30">
                          YOUR ACCOUNT
                        </span>
                        <div class="add-doctor-admin-container28">
                          <span class="add-doctor-admin-text31">Username</span>
                          <input
                            type="text"
                            name="doctor_username"
                            placeholder="Username *"
                            class="add-doctor-admin-textinput08 input"
                          />
                        </div>
                        <div class="add-doctor-admin-container29">
                          <span class="add-doctor-admin-text32">Password</span>
                          <input
                            type="text"
                            name="doctor_password"
                            placeholder="Password *"
                            class="add-doctor-admin-textinput09 input"
                          />
                        </div>
                        <div class="add-doctor-admin-container30">
                          <a
                            href="manage-doctors-admin.php"
                            class="add-doctor-admin-cancel-btn button"
                          >
                            (X) Cancel
                          </a>
                          <button class="add-doctor-admin-button button">
                            ✖ Clear All
                          </button>
                            <input type="submit" name="AddDoctor" value="+ Add"  class="add-doctor-admin-button1 button">
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

<script type="text/javascript">
  $("#chosen-select").chosen({
  no_results_text: "Oops, nothing found!"


})


</script>
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
                window.location.href = 'login-admin.php';
          });
         })
        
</script>