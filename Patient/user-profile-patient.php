<?php
include ('Function/PatientPortalFunction.php');
include ('Function/EditPatientProfile.php');
include ('Function/UpdateUser.php');
include ('Function/Password.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <title>WellTech Care - Patient | Edit Profile</title>
    <meta
      property="og:title"
      content="User-Profile-Patient - Copy of Copy of WellTech Care"
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

      a {
        border: 0px solid black;
        padding: 10px 2px;
        margin-right: 20px;
        margin-left: 20px;
        display: inline-block;
        cursor: pointer;
        width: 84%;
        margin-top: -4px;
      }
      a svg {
        display: inline-block;
        vertical-align: middle;
        margin-top: 8px;
        cursor: pointer;
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
      <link href="./user-profile-patient.css" rel="stylesheet" />

      <div class="user-profile-patient-container">
        <div class="user-profile-patient-profile-body-container">
          <div class="user-profile-patient-container01">
            <div class="user-profile-patient-sidebar">
              <div class="user-profile-patient-logo-container">
                <img
                  alt="image"
                  src="public/playground_assets/untitled%20design%20%5B2%5D-200h.png"
                  class="user-profile-patient-image"
                />
                <div class="user-profile-patient-container02">
                  <span class="user-profile-patient-logo-text">
                    WellTech Care
                  </span>
                  <span class="user-profile-patient-text">
                    Physical &amp; Health Care
                  </span>
                </div>
                <svg viewBox="0 0 1024 1024" class="user-profile-patient-icon">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <nav class="user-profile-patient-nav">
                <span class="user-profile-patient-text01">MENU</span>
                <a
                  href="patient-portal-home.php"
                  class="user-profile-patient-navlink"
                >
                  <div class="user-profile-patient-home">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="user-profile-patient-icon02"
                    >
                      <path
                        d="M949.845 446.635c-144.64-121.771-407.296-348.629-409.899-350.933l-27.947-24.021-27.819 24.021c-2.645 2.261-265.429 229.035-412.16 351.915-18.688 16.811-29.355 40.32-29.355 64.384 0 47.104 38.229 85.333 85.333 85.333h42.667v256c0 47.104 38.229 85.333 85.333 85.333h128 384c47.104 0 85.333-38.229 85.333-85.333v-256h42.667c47.104 0 85.333-38.229 85.333-85.333 0-25.515-11.733-49.536-31.488-65.365zM597.333 853.333h-170.667v-213.333h170.667v213.333zM768 512l0.085 341.333c-0.085 0-128.085 0-128.085 0v-256h-256v256h-128v-341.333h-128.043c117.973-98.645 312.107-265.685 384.043-327.68 71.936 61.995 265.984 228.992 384 327.723 0-0-128-0-128-0.043z"
                      ></path>
                    </svg>
                    <span class="user-profile-patient-text02">Home</span>
                  </div>
                </a>
                <a
                  href="schedule-appointment.php"
                  class="user-profile-patient-navlink1"
                >
                  <div class="user-profile-patient-schedule-appointment">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="user-profile-patient-icon04"
                    >
                      <path
                        d="M320 384h128v128h-128zM512 384h128v128h-128zM704 384h128v128h-128zM128 768h128v128h-128zM320 768h128v128h-128zM512 768h128v128h-128zM320 576h128v128h-128zM512 576h128v128h-128zM704 576h128v128h-128zM128 576h128v128h-128zM832 0v64h-128v-64h-448v64h-128v-64h-128v1024h960v-1024h-128zM896 960h-832v-704h832v704z"
                      ></path>
                    </svg>
                    <span class="user-profile-patient-text03">
                      Schedule Appointment
                    </span>
                  </div>
                </a>
                <a
                  href="view-lab-results.php"
                  class="user-profile-patient-navlink2"
                >
                  <div class="user-profile-patient-container03">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="user-profile-patient-icon06"
                    >
                      <path
                        d="M864 0h-768c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h768c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM832 896h-704v-768h704v768zM256 576h448v64h-448zM256 704h448v64h-448zM320 288c0-53.019 42.981-96 96-96s96 42.981 96 96c0 53.019-42.981 96-96 96s-96-42.981-96-96zM480 384h-128c-52.8 0-96 28.8-96 64v64h320v-64c0-35.2-43.2-64-96-64z"
                      ></path>
                    </svg>
                    <span class="user-profile-patient-text04">Lab Results</span>
                  </div>
                </a>
                <a
                  href="appointment-history.php"
                  class="user-profile-patient-navlink3"
                >
                  <div class="user-profile-patient-container04">
                    <div class="user-profile-patient-container05">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="user-profile-patient-icon08"
                      >
                        <path
                          d="M512 342h64v180l150 90-32 52-182-110v-212zM554 128q158 0 271 112t113 272-113 272-271 112q-66 0-145-33t-125-79l60-62q88 88 210 88 124 0 212-87t88-211-88-211-212-87-211 87-87 211h128l-172 172-4-6-166-166h128q0-160 113-272t271-112z"
                        ></path>
                      </svg>
                    </div>
                    <span class="user-profile-patient-text05">
                      Appointment History
                    </span>
                  </div>
                </a>
                <span class="user-profile-patient-text06">
                  <span>PREFERENCES</span>
                  <br />
                </span>
                <a
                  href="user-profile-patient.php"
                  class="user-profile-patient-navlink4"
                >
                  <div class="user-profile-patient-home1">
                    <img
                      alt="image"
                      src="public/playground_assets/user%20%5B1%5D-200h.png"
                      class="user-profile-patient-image1"
                    />
                    <span class="user-profile-patient-text09">
                      <span>Profile</span>
                      <br />
                    </span>
                  </div>
                </a>
                <a
                  href="login-patient.php"
                  class="user-profile-patient-navlink5 logout"
                >
                  <div class="user-profile-patient-profile">
                    <div class="user-profile-patient-container06">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="user-profile-patient-icon10"
                      >
                        <path
                          d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                        ></path>
                      </svg>
                    </div>
                    <div class="user-profile-patient-container07">
                      <span class="user-profile-patient-text12">
                        <span>Logout</span>
                        <br />
                      </span>
                    </div>
                  </div>
                </a>
              </nav>
            </div>
            <div class="user-profile-patient-container08">
              <div class="user-profile-patient-header-container">
                <div class="user-profile-patient-header-container1">
                  <span class="user-profile-patient-patient-portal-txt">
                    Patient Portal System&nbsp;
                  </span>
                  <div class="user-profile-patient-icons-container">
                    <svg
                      viewBox="0 0 950.8571428571428 1024"
                      class="user-profile-patient-icon12"
                    >
                      <path
                        d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                      ></path></svg
                    ><svg
                      viewBox="0 0 1024 1024"
                      class="user-profile-patient-icon14"
                    >
                      <path
                        d="M768 682l86 86v42h-684v-42l86-86v-212q0-100 51-174t141-96v-30q0-26 18-45t46-19 46 19 18 45v30q90 22 141 96t51 174v212zM512 938q-36 0-61-24t-25-60h172q0 34-26 59t-60 25z"
                      ></path>
                    </svg>
                    <a
                      href="patient-portal-home.php"
                      class="user-profile-patient-navlink6"
                    >
                      <svg
                        viewBox="0 0 1024 1024"
                        class="user-profile-patient-icon16"
                      >
                        <path
                          d="M219.429 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM329.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM573.714 677.143l57.714-218.286c4.571-19.429-6.857-39.429-26.286-44.571v0c-19.429-5.143-39.429 6.857-44.571 26.286l-57.714 218.286c-45.143 3.429-84.571 34.857-97.143 81.143-15.429 58.857 20 118.857 78.286 134.286 58.857 15.429 118.857-20 134.286-78.286 12-46.286-7.429-93.143-44.571-118.857zM950.857 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM585.143 292.571c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM841.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM1024 658.286c0 98.286-28 193.143-80.571 276-6.857 10.286-18.286 16.571-30.857 16.571h-801.143c-12.571 0-24-6.286-30.857-16.571-52.571-82.286-80.571-177.714-80.571-276 0-282.286 229.714-512 512-512s512 229.714 512 512z"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="user-profile-patient-banner-profile-container">
                <div class="user-profile-patient-container09"></div>
                <div class="user-profile-patient-container10">
                  <span class="user-profile-patient-patient-portal-txt1">
                    My Profile
                  </span>
                </div>
              </div>
              
              <div class="user-profile-patient-profile-body-container1">
                <form class="user-profile-patient-form-body" method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
                  <div class="user-profile-patient-after-form-container">
                    <div class="user-profile-patient-upload-image-container">
                      
                        <?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'"class="user-profile-patient-image2"
                        id="profileDisplay" /><br />';?> 
                      <!-- <div class="upload-btn-wrapper">
                        <label for="actual-btn" class="btn">Choose File</label>
                      </div> -->

                      <!--default html file upload button-->
                      <input type="file" name="Patient_Image" onChange="displayImage(this)" id="Patient_Image" onClick="triggerClick()"  hidden accept="image/gif, image/jpeg, image/png"/>
                        <br>
                        <!--our custom file upload button-->
                        <label for="Patient_Image" class="btn" >Select Photo</label>
                        <!-- <span id="file-chosen">No file chosen</span> -->

                    </div>
                    <div class="user-profile-patient-txt-fields-container">
                      <span class="user-profile-patient-text15">
                        personal information&nbsp;
                      </span>
                      <div class="user-profile-patient-container11">
                        <div class="user-profile-patient-container12">
                          <div class="user-profile-patient-container13">
                            <span class="user-profile-patient-text16">
                              First Name
                            </span>
                            <input
                              type="text"
                              name="First_Name"
                              placeholder="First Name *"
                              class="user-profile-patient-textinput input"
                              value ="<?php echo $First_Name ?>"
                              readonly = "readonly"
                              id = "editFN"
                              ondblclick="UpdateClick();"

                            />
                            <?php echo $error_FirstName_Length ?>
                            <?php echo $error_FirstName_Numeric ?>
                            <?php echo $error_FirstName_Speccharac ?>
                          </div>
                          <div class="user-profile-patient-container14">
                            <span class="user-profile-patient-text17">
                              Middle Name
                            </span>
                           <input
                              type="text"
                              name="Middle_Name"
                              placeholder="Middle Name *"
                              class="user-profile-patient-textinput01 input"
                              value ="<?php echo $Middle_Name ?>"
                              readonly = "readonly"
                              id = "editMN"
                              ondblclick="UpdateClick();"
                            />
                            <?php echo $error_MiddleName_Length; ?>
                            <?php echo $error_MiddleName_Numeric; ?>
                            <?php echo $error_MiddleName_Speccharac; ?>
                          </div>
                        </div>
                        <div class="user-profile-patient-container15">
                          <span class="user-profile-patient-text18">
                            Last Name
                          </span>
                          <input
                            type="text"
                            name="Last_Name"
                            placeholder="Last Name *"
                            class="user-profile-patient-textinput02 input"
                            value = "<?php echo $Last_Name ?>"
                            readonly = "readonly"
                            id = "editLN"
                            ondblclick="UpdateClick();"
                          />
                          <?php echo $error_LastName_Length; ?>
                      <?php echo $error_LastName_Numeric; ?>
                      <?php echo $error_LastName_Speccharac; ?>
                        </div>
                      </div>
                      <div class="user-profile-patient-container16">
                        <div class="user-profile-patient-bdate-container">
                          <span class="user-profile-patient-text19">
                            Birthdate
                          </span>
                         <input
                            type="date"
                            name="Birthdate"
                            value="<?php echo $Birthdate ?>"
                            required=""
                            placeholder="Birthdate *"
                            class="user-profile-patient-textinput03 input"
                            readonly = "readonly"
                          />
                        </div>
                        <div class="user-profile-patient-age-container">
                          <span class="user-profile-patient-text20">Age</span>
                          <input
                            type="number"
                            name="Age"
                            enctype="Age *"
                            required=""
                            placeholder="Age *"
                            class="user-profile-patient-textinput04 input"
                            value = "<?php echo $Age ?>"
                            readonly = "readonly"
                          />
                        </div>
                        <div class="user-profile-patient-blood-type">
                          <span class="user-profile-patient-text21">
                            Blood Type
                          </span>
                          <input
                            type="text"
                            name="Blood Type"
                            placeholder="Blood Type"
                            class="user-profile-patient-textinput05 input"
                            value ="<?php echo $BloodType ?>"
                            readonly
                          />
                        </div>
                      </div>
                      <div class="user-profile-patient-container17">
                        <div class="user-profile-patient-container18">
                          <div class="user-profile-patient-height">
                            <span class="user-profile-patient-text22">
                              Height in CM
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Height"
                              enctype="Height *"
                              placeholder="Height *"
                              class="user-profile-patient-textinput06 input"
                              value ="<?php echo $Height ?>"
                              readonly = "readonly"
                              id = "editHeight"
                              ondblclick="UpdateClick();"
                            />
                          </div>
                          <div class="user-profile-patient-weight">
                            <span class="user-profile-patient-text23">
                              Weight in KG
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Weight"
                              enctype="Weight *"
                              placeholder="Weight *"
                              class="user-profile-patient-textinput07 input"
                              value ="<?php echo $Weight?>"
                              readonly = "readonly"
                              id = "editWeight"
                              ondblclick="UpdateClick();"
                            />
                          </div>
                        </div>
                        <div class="user-profile-patient-age-container1">
                          <span class="user-profile-patient-text24">
                            Gender
                          </span>
                          <input
                            type="text"
                            name="Gender"
                            enctype="Age *"
                            required=""
                            placeholder="Gender *"
                            class="user-profile-patient-textinput08 input"
                            value = "<?php echo $Gender?>"
                            readonly
                          />
                        </div>
                      </div>
                      <span class="user-profile-patient-text25">
                        CONTACT information
                      </span>
                      <div class="user-profile-patient-container19">
                        <span class="user-profile-patient-text26">
                          Full Address
                        </span>
                        <input
                          type="text"
                          name="Address"
                          placeholder="Address *"
                          class="user-profile-patient-textinput09 input"
                          value ="<?php echo $Address ?>"
                          readonly = "readonly"
                          id = "editAddress"
                          ondblclick="UpdateClick();"
                        />
                      </div>
                      <div class="user-profile-patient-container20">
                        <div class="user-profile-patient-container21">
                          <span class="user-profile-patient-text27">
                            Contact Number
                          </span>
                          <input
                            type="tel"
                            name="ContactNo"
                            placeholder="Contact Number *"
                            class="user-profile-patient-textinput10 input"
                            value = "<?php echo $ContactNo?>"
                            readonly = "readonly"
                            id = "editContactNo"
                            ondblclick="UpdateClick();"
                          />
                        </div>
                        <div class="user-profile-patient-container22">
                          <span class="user-profile-patient-text28">Email</span>
                          <input
                            type="email"
                            name="Email"
                            placeholder="Email *"
                            class="user-profile-patient-textinput11 input"
                            value = "<?php echo $Email ?>"
                            readonly
                          />
                        </div>
                      </div>
                      <span class="user-profile-patient-text29">
                        YOUR ACCOUNT
                      </span>
                      <div class="user-profile-patient-container23">
                        <span class="user-profile-patient-text30">
                          Username
                        </span>
                        <input
                          type="text"
                          name="Username"
                          placeholder="Username *"
                          class="user-profile-patient-textinput12 input"
                          value = "<?php echo $Username ?>"
                          readonly = "readonly"
                          id = "editUsername"
                          ondblclick="UpdateClick();"
                        />
                      </div>
                      
                       <input
                        name="UpdatePatientProfile"
                        type="submit"
                        class="user-profile-patient-button1 button"
                        value ="Save"
                        onclick="return confirm('Are you sure you want to update your profile?','Update Profile');"
                      ><br>
                      <hr style="border: 1px solid #EBECF0; width: 88%; " align="left">
                      <a  onclick="on()">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.88 121.281" enable-background="new 0 0 122.88 121.281" xml:space="preserve" fill="dimgray" style="display: inline-flex;"><g><path d="M78.813,59.293c0.592-1.171,1.133-2.4,1.619-3.694c0.488-1.3,0.913-2.656,1.27-4.074c0.35-1.378,0.609-2.792,0.783-4.243 c0.172-1.442,0.257-2.933,0.257-4.471c0-2.571-0.247-5.043-0.745-7.414c-0.496-2.355-1.244-4.647-2.249-6.874 c-0.022-0.051-0.044-0.101-0.063-0.153c-0.999-2.209-2.168-4.274-3.508-6.193c-1.356-1.941-2.904-3.753-4.646-5.43l-0.021-0.021 c-1.728-1.681-3.604-3.179-5.627-4.498c-2.033-1.325-4.232-2.48-6.596-3.469c-2.328-0.966-4.741-1.694-7.24-2.182 c-2.489-0.485-5.073-0.73-7.751-0.73c-2.68,0-5.264,0.245-7.752,0.73c-2.499,0.488-4.912,1.216-7.24,2.182 c-2.363,0.988-4.557,2.144-6.588,3.469c-2.026,1.321-3.906,2.823-5.646,4.508c-1.744,1.69-3.302,3.513-4.667,5.467 c-1.364,1.953-2.552,4.057-3.56,6.31c-0.997,2.227-1.748,4.533-2.249,6.916c-0.497,2.362-0.747,4.824-0.747,7.383 c0,2.6,0.25,5.091,0.747,7.471c0.502,2.404,1.252,4.721,2.249,6.946c1.008,2.251,2.196,4.355,3.56,6.308 c1.365,1.955,2.922,3.777,4.667,5.469c1.739,1.684,3.62,3.186,5.646,4.508c2.031,1.324,4.226,2.48,6.588,3.469 c2.328,0.965,4.741,1.693,7.24,2.182c2.489,0.486,5.072,0.73,7.752,0.73c2.064,0,4.065-0.148,6-0.439 c1.97-0.297,3.874-0.736,5.712-1.316c1.852-0.584,3.628-1.279,5.331-2.09c1.695-0.805,3.324-1.727,4.889-2.764 c1.344-0.889,3.154-0.521,4.043,0.822c0.181,0.273,0.309,0.564,0.389,0.863l3.556,11.438h12.251c1.614,0,2.923,1.311,2.923,2.924 v12.271h12.291c1.615,0,2.924,1.309,2.924,2.924v10.906h12.43v-14.285L79.257,62.801C78.315,61.844,78.17,60.4,78.813,59.293 L78.813,59.293z M85.892,57.655c-0.317,0.844-0.665,1.682-1.042,2.515l37.03,37.592c0.613,0.535,1,1.324,1,2.201v18.395 c0,1.613-1.309,2.924-2.924,2.924H101.68c-1.614,0-2.924-1.311-2.924-2.924v-10.906h-12.29c-1.615,0-2.924-1.309-2.924-2.924 V92.256H72.071v-0.008c-1.247,0.002-2.402-0.805-2.787-2.059l-3.126-10.053c-0.763,0.416-1.539,0.814-2.329,1.189 c-1.95,0.926-3.978,1.723-6.085,2.387c-2.141,0.674-4.334,1.184-6.58,1.521c-2.238,0.336-4.528,0.508-6.869,0.508 c-3.037,0-5.993-0.283-8.872-0.846c-2.87-0.561-5.655-1.402-8.359-2.523c-2.67-1.117-5.177-2.439-7.524-3.973 c-2.353-1.535-4.531-3.271-6.536-5.215c-1.987-1.926-3.781-4.031-5.375-6.313c-1.584-2.268-2.956-4.693-4.108-7.269 C2.35,56.988,1.47,54.275,0.884,51.47C0.296,48.653,0,45.765,0,42.812c0-2.916,0.296-5.774,0.884-8.57 c0.586-2.786,1.466-5.489,2.637-8.104c1.153-2.576,2.524-5,4.108-7.269c1.594-2.282,3.388-4.388,5.375-6.313 c2.005-1.943,4.183-3.68,6.536-5.215c2.348-1.532,4.854-2.854,7.524-3.972c2.704-1.122,5.49-1.964,8.359-2.524 C38.303,0.282,41.259,0,44.295,0c3.035,0,5.992,0.282,8.871,0.845c2.869,0.56,5.656,1.403,8.36,2.524 c2.669,1.117,5.181,2.439,7.531,3.972c2.348,1.531,4.519,3.261,6.507,5.195l0.01,0.009c1.996,1.923,3.787,4.023,5.376,6.299 c1.559,2.23,2.906,4.61,4.049,7.137c0.025,0.047,0.049,0.096,0.071,0.146c1.172,2.596,2.05,5.292,2.637,8.084 c0.59,2.807,0.883,5.675,0.883,8.602c0,1.739-0.1,3.458-0.304,5.156c-0.201,1.689-0.507,3.348-0.919,4.974 C86.964,54.547,86.47,56.117,85.892,57.655L85.892,57.655z M38.326,24.555c1.755,0,3.407,0.318,4.956,0.955 c1.553,0.638,2.945,1.575,4.178,2.807c1.234,1.233,2.17,2.627,2.808,4.179c0.636,1.548,0.955,3.2,0.955,4.956 c0,1.744-0.319,3.391-0.957,4.936c-0.631,1.531-1.567,2.919-2.806,4.161l-0.006,0.005l-0.005,0.006l-0.002,0.002 c-1.241,1.24-2.629,2.175-4.164,2.806c-1.548,0.637-3.201,0.955-4.956,0.955c-1.756,0-3.4-0.319-4.927-0.956 c-1.526-0.637-2.902-1.584-4.125-2.841c-1.215-1.25-2.136-2.64-2.754-4.165c-0.618-1.527-0.932-3.165-0.932-4.909 c0-1.748,0.313-3.388,0.931-4.917c0.622-1.542,1.544-2.937,2.755-4.183c1.224-1.257,2.601-2.204,4.126-2.84 C34.926,24.874,36.57,24.555,38.326,24.555L38.326,24.555z M41.065,30.901c-0.807-0.332-1.721-0.498-2.74-0.498 c-0.994,0-1.891,0.166-2.688,0.499c-0.795,0.332-1.524,0.837-2.185,1.515c-0.679,0.7-1.189,1.462-1.521,2.288 c-0.33,0.817-0.498,1.732-0.498,2.748c0,0.994,0.168,1.9,0.499,2.716c0.338,0.833,0.846,1.598,1.521,2.292 c0.661,0.679,1.39,1.185,2.185,1.516c0.797,0.333,1.694,0.499,2.688,0.499c1.02,0,1.933-0.166,2.741-0.498 c0.815-0.335,1.568-0.849,2.259-1.54h0l0.011-0.011c0.691-0.691,1.205-1.443,1.539-2.254c0.333-0.806,0.5-1.714,0.5-2.72 c0-1.02-0.167-1.933-0.498-2.74c-0.33-0.803-0.848-1.557-1.552-2.26C42.622,31.748,41.869,31.231,41.065,30.901L41.065,30.901z"/></g></svg> 
                        <span style="margin-left: 30px; color: #1e1e1e;">Change your password
                     

                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve" height="20px" width="20px" fill="#838383">
                        <path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001  c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213  C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606  C255,161.018,253.42,157.202,250.606,154.389z">
                        </svg>
                        </span>

                        <br><span style="margin-left: 55px; font-size: 14px; color: gray;">Change your password at any time. </span>
                     
                      </a>

                      <hr style="border: 1px solid #EBECF0; width: 88%;" align="left">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="user-profile-patient-p-name-header-container">
            <div class="user-profile-patient-profile-header-container">
              <div class="user-profile-patient-profile-menu-container">


                <?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'"class="user-profile-patient-patient-pic-header"
                         />';?>
                <div class="user-profile-patient-profile-name-container">
                  <span class="user-profile-patient-patient-name-header">
                   <?php echo $First_Name,' ',$Last_Name ?>
                  </span>
                  <span class="user-profile-patient-patient-txt-header">
                    Patient
                  </span>
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

<script type="text/javascript">
  function triggerClick(e) {
  document.querySelector('#Patient_Image').click();
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
                window.location.href = 'login-patient.php';
          });
         })
        
</script>



