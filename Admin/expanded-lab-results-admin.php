<?php 
include 'Function/AdminProfileFunction.php';
include 'Function/ResultFunctionAdmin.php';
include 'Function/SendResult.php';
date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y', time());

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Admin | Send Lab Results</title>
    <meta
      property="og:title"
      content="Expanded-Lab-Results-Admin - Copy of WellTech Care"
    />

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
      <link href="./expanded-lab-results-admin.css" rel="stylesheet" />

      <div class="expanded-lab-results-admin-container">
        <div
          class="expanded-lab-results-admin-admin-expanded-upload-results-container"
        >
          <div class="expanded-lab-results-admin-sidebar">
            <div class="expanded-lab-results-admin-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="expanded-lab-results-admin-image"
              />
              <div class="expanded-lab-results-admin-container01">
                <span class="expanded-lab-results-admin-logo-text">
                  WellTech Care
                </span>
                <span class="expanded-lab-results-admin-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg
                viewBox="0 0 1024 1024"
                class="expanded-lab-results-admin-icon"
              >
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="expanded-lab-results-admin-nav">
              <a
                href="admin-portal-home.php"
                class="expanded-lab-results-admin-navlink"
              >
                <div class="expanded-lab-results-admin-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="expanded-lab-results-admin-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="expanded-lab-results-admin-text01">
                    Dashboard
                  </span>
                </div>
              </a>
              <div class="expanded-lab-results-admin-container03">
                <a
                  href="manage-appointments-admin.php"
                  class="expanded-lab-results-admin-navlink1"
                >
                  <div class="expanded-lab-results-admin-container04">
                    <svg
                      viewBox="0 0 950.8571428571428 1024"
                      class="expanded-lab-results-admin-icon04"
                    >
                      <path
                        d="M73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                      ></path>
                    </svg>
                    <span class="expanded-lab-results-admin-text02">
                      Manage Appointments
                    </span>
                  </div>
                </a>
                <a
                  href="manage-doctors-admin.php"
                  class="expanded-lab-results-admin-navlink2"
                >
                  <div class="expanded-lab-results-admin-container05">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-lab-results-admin-icon06"
                    >
                      <path
                        d="M768 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM597.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM512 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496zM1024 896v-85.333c-0.043-53.12-19.499-101.76-51.883-139.136-27.819-32.128-65.195-55.936-107.904-67.243-22.784-6.016-46.123 7.552-52.139 30.336s7.552 46.123 30.336 52.139c25.899 6.869 48.469 21.248 65.195 40.619 19.413 22.443 31.019 51.456 31.061 83.285v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM672.085 174.891c34.261 8.789 61.653 30.507 78.379 58.752s22.656 62.72 13.867 96.981c-7.509 29.312-24.533 53.589-47.147 70.485-13.397 10.027-28.8 17.493-45.355 21.803-22.784 5.973-36.437 29.312-30.421 52.096s29.312 36.437 52.096 30.421c27.179-7.125 52.565-19.413 74.795-36.011 37.675-28.16 66.219-68.821 78.72-117.675 14.592-57.045 4.693-114.731-23.125-161.621s-73.6-83.328-130.645-97.963c-22.827-5.845-46.080 7.936-51.925 30.763s7.936 46.080 30.763 51.925z"
                      ></path>
                    </svg>
                    <span class="expanded-lab-results-admin-text03">
                      Manage Doctors
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="upload-lab-results-admin.php"
                class="expanded-lab-results-admin-navlink3"
              >
                <div class="expanded-lab-results-admin-upload-lab-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="expanded-lab-results-admin-icon08"
                  >
                    <path
                      d="M342 640l170-170 170 170-60 62-68-68v176h-84v-176l-68 66zM768 854v-470h-214v-214h-298v684h512zM598 86l256 256v512q0 34-26 59t-60 25h-512q-34 0-60-25t-26-59l2-684q0-34 25-59t59-25h342z"
                    ></path>
                  </svg>
                  <span class="expanded-lab-results-admin-text04">
                    <span>Upload Lab Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a href="user-profile-admin.php">
              <div class="expanded-lab-results-admin-profile">
                <svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="expanded-lab-results-admin-icon10"
                >
                  <path
                    d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                  ></path>
                </svg>
                <span class="expanded-lab-results-admin-text07">
                  <span>Profile</span>
                  <br />
                </span>
              </div>
              </a>
              <a
                href="login-admin.php"
                class="expanded-lab-results-admin-navlink4 logout"
              >
                <div class="expanded-lab-results-admin-logout">
                  <div class="expanded-lab-results-admin-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-lab-results-admin-icon12"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="expanded-lab-results-admin-container07">
                    <span class="expanded-lab-results-admin-text10">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="expanded-lab-results-admin-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $admin_picture ).'"class="expanded-lab-results-admin-image1"
                         />';?>
              <div class="expanded-lab-results-admin-container08">
                <span class="expanded-lab-results-admin-text13">
                  <?php echo $admin_firstname?>
                </span>
                <span class="expanded-lab-results-admin-text14">Admin</span>
              </div>
            </div>
          </div>
          <div class="expanded-lab-results-admin-main-body-container">
            <div class="expanded-lab-results-admin-header-container">
              <span class="expanded-lab-results-admin-patient-portal-txt">
                Admin Portal System&nbsp;
              </span>
              <div class="expanded-lab-results-admin-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="expanded-lab-results-admin-image2"
                />
                <a
                  href="manage-appointments-admin.php"
                  class="expanded-lab-results-admin-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="expanded-lab-results-admin-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="expanded-lab-results-admin-image4"
                />
              </div>
            </div>
            <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
            <div class="expanded-lab-results-admin-container09">
              <div class="expanded-lab-results-admin-container10">
                <div class="expanded-lab-results-admin-container11">
                  <div
                    class="expanded-lab-results-admin-doctor-enter-results-form-container"
                  >
                    <div class="expanded-lab-results-admin-container12">
                      <span
                        class="expanded-lab-results-admin-cnfrm-appointment-txt"
                      >
                        Enter Patient Results
                      </span>
                    </div>
                    <div class="expanded-lab-results-admin-container13">
                      <div class="expanded-lab-results-admin-container14">
                        <span
                          class="expanded-lab-results-admin-cnfrm-appointment-txt1"
                        >
                        Result Uploaded
                        </span>
                        <input
                          type="text"
                          name="DateToday"
                          value = "<?php echo $Result_Uploaded ?>"
                          placeholder="05/28/2022"
                          readonly
                          class="expanded-lab-results-admin-textinput input"
                        />
                      </div>
                      <div class="expanded-lab-results-admin-container15">
                        <span
                          class="expanded-lab-results-admin-cnfrm-appointment-txt2"
                        >
                          Results ID
                        </span>
                        <input
                          type="text"
                          name="Result_ID"
                          value = "<?php echo $Result_ID ?>"
                          placeholder="0025696420"
                          readonly
                          class="expanded-lab-results-admin-textinput01 input"
                        />
                        <input type="hidden" name="appointment_id" value = "<?php echo $appointment_id ?>"/>
                        <input type="hidden" name="Email" value = "<?php echo $Email ?>"/>
                        <input type="hidden" name="completed_date" value = "<?php echo $date ?>"/>
                      </div>
                    </div>
                    <div class="expanded-lab-results-admin-container16">
                      <span
                        class="expanded-lab-results-admin-cnfrm-appointment-txt3"
                      >
                        MEDICAL RESULTS
                      </span>
                    </div>
                    <div class="expanded-lab-results-admin-container17">
                      <div class="expanded-lab-results-admin-container18">
                        <div class="expanded-lab-results-admin-container19">
                          <span class="expanded-lab-results-admin-text15">
                            First Name
                          </span>
                          <input
                            type="text"
                            name="First_Name"
                            value = "<?php echo $First_Name ?>"
                            placeholder="Patient"
                            readonly
                            class="expanded-lab-results-admin-textinput02 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container20">
                          <span class="expanded-lab-results-admin-text16">
                            Middle Name
                          </span>
                          <input
                            type="text"
                            name="Middle_Name"
                            value = "<?php echo $Middle_Name ?>"
                            placeholder="Midname"
                            readonly
                            class="expanded-lab-results-admin-textinput03 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container21">
                          <span class="expanded-lab-results-admin-text17">
                            Last Name
                          </span>
                          <input
                            type="text"
                            name="Last_Name"
                            value = "<?php echo $Last_Name ?>"
                            placeholder="Name"
                            readonly
                            class="expanded-lab-results-admin-textinput04 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-container22">
                        <div class="expanded-lab-results-admin-age-container">
                          <span class="expanded-lab-results-admin-text18">
                            Age
                          </span>
                          <input
                            type="number"
                            name="Age"
                            enctype="Age *"
                            value = "<?php echo $Age ?>"
                            placeholder="48"
                            readonly
                            class="expanded-lab-results-admin-textinput05 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-blood-type">
                          <span class="expanded-lab-results-admin-text19">
                            Address
                          </span>
                          <input
                            type="text"
                            name="Address"
                            value = "<?php echo $Address ?>"
                            readonly
                            placeholder="Lot 18 Blk. 9 East Fairview, Quezon City"
                            class="expanded-lab-results-admin-textinput06 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-bdate-container">
                          <span class="expanded-lab-results-admin-text20">
                            Birthdate
                          </span>
                          <input
                            type="text"
                            name="Birthdate"
                            value = "<?php echo $Birthdate ?>"
                            placeholder="07/31/1995"
                            readonly
                            class="expanded-lab-results-admin-textinput07 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-container23">
                        <div class="expanded-lab-results-admin-container24">
                          <div class="expanded-lab-results-admin-height">
                            <span class="expanded-lab-results-admin-text21">
                              Height
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Height"
                              enctype="Height *"
                              value = "<?php echo $Height ?>"
                              placeholder="6'2"
                              readonly
                              class="expanded-lab-results-admin-textinput08 input"
                            />
                          </div>
                          <div class="expanded-lab-results-admin-weight">
                            <span class="expanded-lab-results-admin-text22">
                              Weight
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Weight"
                              enctype="Weight *"
                              value = "<?php echo $Weight ?>"
                              placeholder="76kg"
                              readonly
                              class="expanded-lab-results-admin-textinput09 input"
                            />
                          </div>
                        </div>
                        <div class="expanded-lab-results-admin-age-container1">
                          <span class="expanded-lab-results-admin-text23">
                            Gender
                          </span>
                          <input
                            type="text"
                            name="Gender"
                            enctype="Age *"
                            value = "<?php echo $Gender ?>"
                            placeholder="Male"
                            readonly
                            class="expanded-lab-results-admin-textinput10 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-age-container2">
                          <span class="expanded-lab-results-admin-text24">
                            Blood Type
                          </span>
                          <input
                            type="text"
                            name="BloodType"
                            enctype="Age *"
                            value = "<?php echo $BloodType ?>"
                            placeholder="A+"
                            readonly
                            class="expanded-lab-results-admin-textinput11 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-separator"></div>
                      <span
                        class="expanded-lab-results-admin-cnfrm-appointment-txt4"
                      >
                        VITAL SIGNS
                      </span>
                      <div class="expanded-lab-results-admin-container25">
                        <div class="expanded-lab-results-admin-container26">
                          <span class="expanded-lab-results-admin-text25">
                            Heart Rate
                          </span>
                          <input
                            type="text"
                            name="Patient_HeartRate"
                            value = "<?php echo $Patient_HeartRate ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput12 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container27">
                          <span class="expanded-lab-results-admin-text26">
                            Blood Pressure
                          </span>
                          <input
                            type="text"
                            name="Patient_BloodPressure"
                            value = "<?php echo $Patient_BloodPressure ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput13 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-container28">
                        <div class="expanded-lab-results-admin-container29">
                          <span class="expanded-lab-results-admin-text27">
                            Urinalysis Result
                          </span>
                          <input
                            type="text"
                            name="Patient_Urinalysis"
                            value = "<?php echo $Patient_Urinalysis ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput14 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container30">
                          <span class="expanded-lab-results-admin-text28">
                            Xray Result
                          </span>
                          <input
                            type="text"
                            name="Patient_Xray"
                            value = "<?php echo $Patient_Xray ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput15 input"
                          />
                        </div>
                      </div>
                      <span
                        class="expanded-lab-results-admin-cnfrm-appointment-txt5"
                      >
                        CBC RESULTS
                      </span>
                      <div class="expanded-lab-results-admin-container31">
                        <div class="expanded-lab-results-admin-container32">
                          <span class="expanded-lab-results-admin-text29">
                            RCB Count
                          </span>
                          <input
                            type="text"
                            name="Patient_RBC"
                            value = "<?php echo $Patient_RBC ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput16 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container33">
                          <span class="expanded-lab-results-admin-text30">
                            WBC Count
                          </span>
                          <input
                            type="text"
                            name="Patient_WBC"
                            value = "<?php echo $Patient_WBC ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput17 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container34">
                          <span class="expanded-lab-results-admin-text31">
                            Platelet Count
                          </span>
                          <input
                            type="text"
                            name="Patient_Platelet"
                            value = "<?php echo $Patient_Platelet ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput18 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-container35">
                        <div class="expanded-lab-results-admin-container36">
                          <span class="expanded-lab-results-admin-text32">
                            Hemoglobin
                          </span>
                          <input
                            type="text"
                            name="Patient_Hemoglobin"
                            value = "<?php echo $Patient_Hemoglobin ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput19 input"
                          />
                        </div>
                        <div class="expanded-lab-results-admin-container37">
                          <span class="expanded-lab-results-admin-text33">
                            Hematocrit
                          </span>
                          <input
                            type="text"
                            name="Patient_Hematocrit"
                            value = "<?php echo $Patient_Hematocrit ?>"
                            placeholder="Enter result/value"
                            readonly
                            class="expanded-lab-results-admin-textinput20 input"
                          />
                        </div>
                      </div>
                      <div class="expanded-lab-results-admin-container38">
                        <a
                          href="upload-lab-results-admin.php"
                          class="expanded-lab-results-admin-cancel-btn button"
                        >
                          Cancel
                        </a>
                        <input type="submit" name="SendResult" value="Send Results" 
                          class="expanded-lab-results-admin-send-res-btn button"
                        onclick="return confirm('Are you sure you want to sent the result with the Appointment ID: <?= $appointment_id?>')">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div></form>
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