<?php 
include 'Function/AdminProfileFunction.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Admin | Dashboard</title>
    <meta
      property="og:title"
      content="AdminPortalHome - Copy of WellTech Care"
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

      .admin-portal-home-container02a {
  flex: 0 0 auto;
  width: 300px;
  cursor: pointer;
  height: 54px;
  display: flex;
  align-self: flex-start;
  transition: 0.3s;
  align-items: center;
  border-color: #CED5E0;
  border-width: 1px;
  justify-content: flex-start;
  text-decoration: none;
  background-color: #1E5288;
  border-top-width: 0px;
  border-left-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 1px;
}
.admin-portal-home-container02a:hover {
  color: var(--dl-color-gray-white);
  height: 50px;
  background-color: #1E5288;
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
      <link href="./admin-portal-home.css" rel="stylesheet" />

      <div class="admin-portal-home-container">
        <div class="admin-portal-home-admin-dashboard-body-container">
          <div class="admin-portal-home-sidebar">
            <div class="admin-portal-home-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="admin-portal-home-image"
              />
              <div class="admin-portal-home-container01">
                <span class="admin-portal-home-logo-text">WellTech Care</span>
                <span class="admin-portal-home-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg viewBox="0 0 1024 1024" class="admin-portal-home-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="admin-portal-home-nav">
              <a
                href="admin-portal-home.php"
                class="admin-portal-home-navlink"
              >
                <div class="admin-portal-home-container02a">
                  <svg viewBox="0 0 1024 1024" class="admin-portal-home-icon02">
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="admin-portal-home-text01">Dashboard</span>
                </div>
              </a>
              <div class="admin-portal-home-container03">
                <a
                  href="manage-appointments-admin.php"
                  class="admin-portal-home-navlink1"
                >
                  <div class="admin-portal-home-container04">
                    <svg
                      viewBox="0 0 950.8571428571428 1024"
                      class="admin-portal-home-icon04"
                    >
                      <path
                        d="M73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                      ></path>
                    </svg>
                    <span class="admin-portal-home-text02">
                      Manage Appointments
                    </span>
                  </div>
                </a>
                <a
                  href="manage-doctors-admin.php"
                  class="admin-portal-home-navlink2"
                >
                  <div class="admin-portal-home-container05">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="admin-portal-home-icon06"
                    >
                      <path
                        d="M768 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM597.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM512 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496zM1024 896v-85.333c-0.043-53.12-19.499-101.76-51.883-139.136-27.819-32.128-65.195-55.936-107.904-67.243-22.784-6.016-46.123 7.552-52.139 30.336s7.552 46.123 30.336 52.139c25.899 6.869 48.469 21.248 65.195 40.619 19.413 22.443 31.019 51.456 31.061 83.285v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM672.085 174.891c34.261 8.789 61.653 30.507 78.379 58.752s22.656 62.72 13.867 96.981c-7.509 29.312-24.533 53.589-47.147 70.485-13.397 10.027-28.8 17.493-45.355 21.803-22.784 5.973-36.437 29.312-30.421 52.096s29.312 36.437 52.096 30.421c27.179-7.125 52.565-19.413 74.795-36.011 37.675-28.16 66.219-68.821 78.72-117.675 14.592-57.045 4.693-114.731-23.125-161.621s-73.6-83.328-130.645-97.963c-22.827-5.845-46.080 7.936-51.925 30.763s7.936 46.080 30.763 51.925z"
                      ></path>
                    </svg>
                    <span class="admin-portal-home-text03">Manage Doctors</span>
                  </div>
                </a>
              </div>
              <a
                href="upload-lab-results-admin.php"
                class="admin-portal-home-navlink3"
              >
                <div class="admin-portal-home-enter-results">
                  <svg viewBox="0 0 1024 1024" class="admin-portal-home-icon08">
                    <path
                      d="M342 640l170-170 170 170-60 62-68-68v176h-84v-176l-68 66zM768 854v-470h-214v-214h-298v684h512zM598 86l256 256v512q0 34-26 59t-60 25h-512q-34 0-60-25t-26-59l2-684q0-34 25-59t59-25h342z"
                    ></path>
                  </svg>
                  <span class="admin-portal-home-text04">
                    <span>Upload Lab Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a href="user-profile-admin.php">
              <div class="admin-portal-home-profile">
                <svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="admin-portal-home-icon10"
                >
                  <path
                    d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                  ></path>
                </svg>
                <span class="admin-portal-home-text07">
                  <span>Profile</span>
                  <br />
                </span>
              </div>
              </a>
              <a href="login-admin.php" class="admin-portal-home-navlink4 logout">
                <div class="admin-portal-home-logout">
                  <div class="admin-portal-home-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="admin-portal-home-icon12"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="admin-portal-home-container07">
                    <span class="admin-portal-home-text10">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="admin-portal-home-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $admin_picture ).'"class="admin-portal-home-image1"
                         />';?>
              <div class="admin-portal-home-container08">
                <span class="admin-portal-home-text13"><?php echo $admin_firstname?></span>
                <span class="admin-portal-home-text14">Admin</span>
              </div>
            </div>
          </div>
          <div class="admin-portal-home-main-body-container">
            <div class="admin-portal-home-header-container">
              <span class="admin-portal-home-patient-portal-txt">
                Admin Portal System&nbsp;
              </span>
              <div class="admin-portal-home-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="admin-portal-home-image2"
                />
                <a
                  href="manage-appointments-admin.php"
                  class="admin-portal-home-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="admin-portal-home-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="admin-portal-home-image4"
                />
              </div>
            </div>
            <div class="admin-portal-home-container09">
              <div class="admin-portal-home-container10">
                <span class="admin-portal-home-text15">Dashboard Overview</span>
                <div class="admin-portal-home-container11">
                  <div class="admin-portal-home-container12">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="admin-portal-home-icon14"
                    >
                      <path
                        d="M86 128h810v128h-810v-128zM854 342q18 0 30 12t12 30v256q0 18-12 30t-30 12h-726q-18 0-30-12t-12-30v-256q0-18 12-30t30-12h726zM86 896v-128h810v128h-810z"
                      ></path>
                    </svg>
                    <div class="admin-portal-home-container13">
                      <div class="admin-portal-home-container14">
                        <span class="admin-portal-home-patient-name-txt">
                          Manage Appointments
                        </span>
                        <span class="admin-portal-home-text16">
                          View&nbsp; Patient Schedule
                        </span>
                      </div>
                      <a
                        href="manage-appointments-admin.php"
                        class="admin-portal-home-navlink6"
                      >
                        <span>View Appointments</span>
                        <br />
                      </a>
                    </div>
                  </div>
                  <div class="admin-portal-home-container15">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="admin-portal-home-icon16"
                    >
                      <path
                        d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                      ></path>
                    </svg>
                    <div class="admin-portal-home-container16">
                      <span class="admin-portal-home-patient-name-txt1">
                        Lab Results
                      </span>
                      <span class="admin-portal-home-text19">
                        Send Patient Results
                      </span>
                      <a
                        href="upload-lab-results-admin.php"
                        class="admin-portal-home-navlink7"
                      >
                        Upload Results
                      </a>
                    </div>
                  </div>
                  <div class="admin-portal-home-container17">
                    <div class="admin-portal-home-container18">
                      <span class="admin-portal-home-patient-name-txt2">
                        My Profile
                      </span>
                      <span class="admin-portal-home-text20">
                        Customize Profile
                      </span>
                      <span class="admin-portal-home-text21">
                        <a href="user-profile-admin.php">Go to Profile</a>
                      </span>
                    </div>
                  </div>
                  <div class="admin-portal-home-container19">
                    <div class="admin-portal-home-container20">
                      <span class="admin-portal-home-patient-name-txt3">
                        Manage Users
                      </span>
                      <span class="admin-portal-home-text22">
                        Manage Doctos
                      </span>
                      <a
                        href="manage-doctors-admin.php"
                        class="admin-portal-home-navlink8"
                      >
                        Go to Page
                      </a>
                    </div>
                  </div>
                </div>
                <span class="admin-portal-home-text23">
                  Latest Patient Appointment
                </span>
                <div class="admin-portal-home-separator"></div>
                <div class="admin-portal-home-container21">
                  <div class="admin-portal-home-html-node">
                    <style>
                      .button {
                      background-color: #2eb1d6;
                      border: none;
                      color: white;
                      padding: 14px 24px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;
                      cursor: pointer;
                      font-family: 'Exo 2', sans-serif;
                      font-size: 12px;
                      border-radius: 4px;
                      }

                      .button:hover {
                          background-color: #65c9e6;
                          color: white;
                      }
                    </style>

                    <table style="width: 100%;  border: 0px solid #D9D9D9; ">
                      <tr>
                          <td>
                              <table style="border-collapse: collapse; width: 100%; align: center; ">
                                  <tr  style="">
                                      <td width="20%"
                                          style="font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;  padding: 20px">
                                          DATE</td>
                                      <td width="20%"
                                          style="font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;">
                                          PATIENT NAME</td>
                                      <td width="20%"
                                          style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500; text-align: center">
                                          AGE</td>
                                      <td width="20%" style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;">GENDER</td>
                                      <td width="20%"
                                          style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;">STATUS
                                      </td>
                                  </tr>
                                  <?php
    
                                  include 'Function/db.php';
                                  // $doctor_username = $_COOKIE['DoctorUsername'];
                                  $stmt = $conn->prepare("SELECT * FROM appointments WHERE appointment_status= 'Booked' LIMIT 4");
                                  $stmt->execute();
                                  $result = $stmt->get_result();
                                  while ($row = $result->fetch_assoc()):
                                    ?>
                                  <tr style="border-bottom: 10px solid #F2F2F2; background-color: white; box-shadow: 0px 10px 5px 0px #d4d4d4;">
                                      <td width="30%" style="padding-top: 15px; padding-bottom: 15px; padding-left: 20px">
                                          <font style="font-family: 'Inter', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;">
                                              <b><?= $row['date']?></b>
                                          </font>
                                      </td>
                                    
                                      <td width="20%" style="padding-top: 15px; padding-bottom: 15px;">
                                          <font style="font-family: 'Inter', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;">
                                              <b><?= $row['First_Name'],' ',$row['Middle_Name'],' ',$row['Last_Name']?></b>
                                          </font>
                                      </td>
                                      <td width="20%" style="padding-top: 15px; padding-bottom: 15px; text-align: center">
                                          <font style="font-family: 'Inter', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;">
                                              <b><?= $row['Age']?></b>
                                          </font>
                                      </td>
                                      <td width="20%" style="padding-top: 15px; padding-bottom: 15px;">
                                          <font style="font-family: 'Inter', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;">
                                              <b><?= $row['Gender']?></b>
                                          </font>
                                      </td>
                                      <td width="20%" style="padding-top: 15px; padding-bottom: 15px;">
                                          <font style="font-family: 'Inter', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; letter-spacing: -1px; text-align: right">
                                              <b><?= $row['appointment_status']?></b>
                                          </font>
                                      </td>
                                  </tr><?php endwhile; ?>
                                      <td style="padding-top: 20px; padding-bottom: 10px"><a href="manage-appointments-admin.php" class="button">View All Schedule</a></td>
                                  </tr>
                                
                              </table>
                          </td>
                      </tr>
                    </table>
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