<?php
include ('Function/DoctorProfileFunction.php')
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Doctor | Dashboard</title>
    <meta property="og:title" content="DoctorPortalHome - WellTech Care" />

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
      <link href="./doctor-portal-home.css" rel="stylesheet" />

      <div class="doctor-portal-home-container">
        <div class="doctor-portal-home-doctor-profile-body-container">
          <div class="doctor-portal-home-sidebar">
            <div class="doctor-portal-home-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="doctor-portal-home-image"
              />
              <div class="doctor-portal-home-container01">
                <span class="doctor-portal-home-logo-text">WellTech Care</span>
                <span class="doctor-portal-home-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg viewBox="0 0 1024 1024" class="doctor-portal-home-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="doctor-portal-home-nav">
              <a
                href="doctor-portal-home.php"
                class="doctor-portal-home-navlink"
              >
                <div class="doctor-portal-home-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="doctor-portal-home-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="doctor-portal-home-text01">Dashboard</span>
                </div>
              </a>
              <div class="doctor-portal-home-container03">
                <a
                  href="view-appointments-doctor.php"
                  class="doctor-portal-home-navlink01"
                >
                  <div class="doctor-portal-home-container04">
                    <div class="doctor-portal-home-container05">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="doctor-portal-home-icon04"
                      >
                        <path
                          d="M744.571 550.857l-292.571 292.571c-7.429 6.857-18.857 6.857-26.286 0l-164.571-164.571c-6.857-7.429-6.857-18.857 0-25.714l26.286-26.286c6.857-6.857 18.286-6.857 25.714 0l125.714 125.714 253.714-253.714c7.429-6.857 18.857-6.857 25.714 0l26.286 26.286c6.857 6.857 6.857 18.286 0 25.714zM73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                        ></path>
                      </svg>
                    </div>
                    <span class="doctor-portal-home-text02">
                      View Appointments
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="enter-lab-results-doctor.php"
                class="doctor-portal-home-navlink02"
              >
                <div class="doctor-portal-home-enter-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="doctor-portal-home-icon06"
                  >
                    <path
                      d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                    ></path>
                  </svg>
                  <span class="doctor-portal-home-text03">
                    <span>Enter Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="user-profile-doctor.php"
                class="doctor-portal-home-navlink03"
              >
                <div class="doctor-portal-home-profile">
                  <svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="doctor-portal-home-icon08"
                  >
                    <path
                      d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                    ></path>
                  </svg>
                  <span class="doctor-portal-home-text06">
                    <span>Profile</span>
                    <br />
                  </span>
                </div>
              </a>
              <a href="login-doctor.php" class="doctor-portal-home-navlink04 logout">
                <div class="doctor-portal-home-logout">
                  <div class="doctor-portal-home-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="doctor-portal-home-icon10"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="doctor-portal-home-container07">
                    <span class="doctor-portal-home-text09 logout">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="doctor-portal-home-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="doctor-portal-home-image1"
                         />';?>
              <div class="doctor-portal-home-container08">
                <span class="doctor-portal-home-text12"><?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?></span>
                <span class="doctor-portal-home-text13">Doctor</span>
              </div>
            </div>
          </div>
          <div class="doctor-portal-home-main-body-container">
            <div class="doctor-portal-home-header-container">
              <span class="doctor-portal-home-patient-portal-txt">
                Doctor Portal System&nbsp;
              </span>
              <div class="doctor-portal-home-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="doctor-portal-home-image2"
                />
                <a
                  href="view-appointments-doctor.php"
                  class="doctor-portal-home-navlink05"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="doctor-portal-home-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="doctor-portal-home-image4"
                />
              </div>
            </div>
           <?php
            include 'Function/db.php';
            $doctor_username = $_COOKIE['DoctorUsername'];
            $Count_Pendings = $conn->prepare("SELECT appointment_status, COUNT(appointment_status) FROM appointments WHERE doctor_username='$doctor_username' AND appointment_status='Approve'");
                  $Count_Pendings->execute();
                  $Count_Result = $Count_Pendings->get_result();
                  while ($row = $Count_Result->fetch_assoc()):
            
                  ?>
            
            <div class="doctor-portal-home-container09">
              <div class="doctor-portal-home-container10">
                <div class="doctor-portal-home-container11">
                  <div class="doctor-portal-home-container12">
                    <span class="doctor-portal-home-patient-name-txt">
                      <span>Hi, Dr. <?php echo $doctor_lastname?>!</span>
                      <br />
                    </span>
                    <span class="doctor-portal-home-text16">
                      <span class="doctor-portal-home-text17">You have</span>
                      <span class="doctor-portal-home-text18"><?= $row['COUNT(appointment_status)']?></span>
                      <span class="doctor-portal-home-text19">
                        pending appointments. Check it now.
                      </span>
                      <br class="doctor-portal-home-text20" />
                    </span>
                  </div>
               <?php endwhile; ?>
                  <a
                    href="view-appointments-doctor.php"
                    class="doctor-portal-home-navlink06 button"
                  >
                    <span class="doctor-portal-home-text21">
                      <span>Manage Appointments</span>
                      <br />
                    </span>
                  </a>
                </div>
                <div class="doctor-portal-home-container13">
                  <div class="doctor-portal-home-container14">
                    <div class="doctor-portal-home-container15">
                      <img
                        alt="image"
                        src="public/playground_assets/result-200h.png"
                        class="doctor-portal-home-image5"
                      />
                      <div class="doctor-portal-home-container16">
                        <span class="doctor-portal-home-patient-name-txt1">
                          Lab Results
                        </span>
                        <span class="doctor-portal-home-text24">
                          Enter Lab Results
                        </span>
                        <a
                          href="enter-lab-results-doctor.php"
                          class="doctor-portal-home-navlink07"
                        >
                          View Results
                        </a>
                      </div>
                    </div>
                    <div class="doctor-portal-home-container17">
                      <img
                        alt="image"
                        src="public/playground_assets/appointment-200h.png"
                        class="doctor-portal-home-image6"
                      />
                      <div class="doctor-portal-home-container18">
                        <span class="doctor-portal-home-patient-name-txt2">
                          My Appointments
                        </span>
                        <span class="doctor-portal-home-text25">
                          New Patients
                        </span>
                        <a
                          href="view-appointments-doctor.php"
                          class="doctor-portal-home-navlink08"
                        >
                          View Appointments
                        </a>
                      </div>
                    </div>
                    <div class="doctor-portal-home-container19">
                      <img
                        alt="image"
                        src="public/playground_assets/doctor-200h.png"
                        class="doctor-portal-home-image7"
                      />
                      <div class="doctor-portal-home-container20">
                        <span class="doctor-portal-home-patient-name-txt3">
                          My Profile
                        </span>
                        <span class="doctor-portal-home-text26">
                          Customize Profile
                        </span>
                        <a
                          href="user-profile-doctor.php"
                          class="doctor-portal-home-navlink09"
                        >
                          Go to Profile
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="doctor-portal-home-separator"></div>
                <div class="doctor-portal-home-container21">
                  <div class="doctor-portal-home-html-node">

                    <table style="width: 100%;  border: 0px solid #D9D9D9">

                      <tbody>

                        <tr>

                          <td>
                             <tr>
                                  <td
                                    colspan="4"
                                    style="padding-bottom:28px; font-size: 15px; color: #0C234B; font-family: 'Lato', sans-serif; font-weight: bold"
                                  >
                                    Recent Patients
                                  </td>

                                  <td
                                    style="padding-bottom:28px; font-size: 14px; color: #14A9FF; font-family: 'Lato', sans-serif; font-weight: 400; text-align: right"
                                  >
                                  <a href="view-appointments-doctor.php"> View All </a>
                                  </td>

                                </tr>
                             <?php
    
                        include 'Function/db.php';
                        $doctor_username = $_COOKIE['DoctorUsername'];
                        $stmt = $conn->prepare("SELECT * FROM appointments WHERE doctor_username='$doctor_username' AND appointment_status='Approve' limit 2");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()):
                          ?>
                            <table
                              style="border-collapse: collapse; width: 100%; align: center"
                            >

                              <tbody>
                               

                                <tr style="">
                                  <td
                                    width="20%"
                                    style="font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500"
                                  >
                                    Patient Name
                                  </td>
                                  <td
                                    width="20%"
                                    style="font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;"
                                  >
                                    Gender
                                  </td>
                                  <td
                                    width="20%"
                                    style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;"
                                  >
                                    Age
                                  </td>
                                  <td
                                    width="20%"
                                    style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500;"
                                  >
                                    Date
                                  </td>
                                  <td
                                    width="20%"
                                    style=" font-size: 12px; color: #999999; font-family: 'Exo 2', sans-serif; font-weight: 500; text-align:right"
                                  >
                                    Status
                                  </td>
                                </tr>
                                <tr style="border-bottom: 1px solid #CED5E0;">
                                  <td
                                    width="30%"
                                    style="padding-top: 10px; padding-bottom: 10px"
                                  >
                                    <font
                                      style="font-family: 'Lato', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2;"
                                    >
                                      <b><?= $row['First_Name']," ", $row['Middle_Name']," ", $row['Last_Name'] ?></b>
                                    </font>
                                  </td>

                                  <td
                                    width="20%"
                                    style="padding-top: 10px;  padding-bottom: 10px"
                                  >
                                    <font
                                      style="font-family: 'Lato', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2;"
                                    >
                                      <b><?= $row['Gender']?></b>
                                    </font>
                                  </td>
                                  <td
                                    width="20%"
                                    style="padding-top: 10px; padding-bottom: 10px"
                                  >
                                    <font
                                      style="font-family: 'Lato', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2;"
                                    >
                                      <b><?= $row['Age']?></b>
                                    </font>
                                  </td>
                                  <td
                                    width="20%"
                                    style="padding-top: 10px; padding-bottom: 10px"
                                  >
                                    <font
                                      style="font-family: 'Lato', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2;"
                                    >
                                      <b><?= $row['appointment_date']?></b>
                                    </font>
                                  </td>
                                  <td
                                    width="20%"
                                    style="padding-top: 10px; padding-bottom: 10px"
                                  >
                                    <font
                                      style="font-family: 'Lato', sans-serif; font-size: 12px; color: #4C5A7A; line-height: 2; text-align: right"
                                    >
                                      <b><?= $row['appointment_status']?></b>
                                    </font>
                                  </td>
                                </tr>
                              </tbody>
                            </table><?php endwhile; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="doctor-portal-home-container22">
                <div class="doctor-portal-home-container23">
                   <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="doctor-portal-home-image8"
                         />';?>
                  <span class="doctor-portal-home-patient-name-txt4">
                    <?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?>
                  </span>
                  <span class="doctor-portal-home-text27">Doctor</span>
                   <?php
                  include 'Function/db.php';
                  $doctor_username = $_COOKIE['DoctorUsername'];
                  $Count_Pendings = $conn->prepare("SELECT appointment_status,Patient_ID, COUNT(DISTINCT(Patient_ID)), COUNT(appointment_status) FROM appointments WHERE doctor_username='$doctor_username' AND appointment_status='Approve' OR appointment_status='Result Uploaded' OR appointment_status='Result Sent'");
                  $Count_Pendings->execute();
                  $Count_Result = $Count_Pendings->get_result();
                  while ($row = $Count_Result->fetch_assoc()):
            
                  ?>
                  <div class="doctor-portal-home-container24">
                    <div class="doctor-portal-home-container25">
                      <span class="doctor-portal-home-patient-name-txt5">
                        <?= $row['COUNT(appointment_status)']?>
                      </span>
                      <span class="doctor-portal-home-text28">
                        Appointments
                      </span>
                    </div>
                    <div class="doctor-portal-home-container26">
                      <span class="doctor-portal-home-patient-name-txt6">
                        <?= $row['COUNT(DISTINCT(Patient_ID))']?>
                      </span>
                      <span class="doctor-portal-home-text29">
                        Total Patients
                      </span>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <a
                    href="user-profile-doctor.php"
                    class="doctor-portal-home-navlink10"
                  >
                    Edit Profile
                  </a>
                </div>
                <div class="doctor-portal-home-container27">
                  <div class="doctor-portal-home-html-node1">
                    <style>
                      * {
                          box-sizing: border-box;

                      }

                      ul {
                          list-style-type: none;
                      }

                      .month {
                          padding: 20px;
                          width: 100%;
                          background: #1E5288;
                          text-align: center;
                          
                      }

                      .month ul {
                          margin: 0;
                          padding: 0;
                      }

                      .month ul li {
                          color: white;
                          font-size: 12px;
                          text-transform: uppercase;
                          letter-spacing: 3px;
                      }

                      .month .prev {
                          float: left;
                          padding-top: 10px;
                      }

                      .month .next {
                          float: right;
                          padding-top: 10px;
                      }

                      .weekdays {
                          margin: 0;
                          padding: 10px;
                          background-color: #CED5E0;
                          font-size: 12px;
                          


                      }

                      .weekdays li {
                          display: inline-block;
                          width: 12.5%;
                          color: #666;
                          text-align: center;

                      }

                      .days {
                          background: white;
                          margin: 0px;
                          padding-top: 14px;
                          padding-bottom: 10px;
                          padding-left: 2px;
                          padding-right: 0px;
                          margin-left: 0px;
                          border-radius: 20px;
                          

                      }

                      .days li {
                          list-style-type: none;
                          display: inline-block;
                          text-align: center;
                          padding: 9px 10px 5px;
                          font-size: 10px;
                          color: #777;
                          
                      }

                      .days li .active {
                          padding: 7px;
                          background: #378DBD;
                          color: white !important
                      }

                      /* Add media queries for smaller screens */
                      @media screen and (max-width:720px) {

                          .weekdays li,
                          .days li {
                              width: 13.1%;
                          }
                      }

                      @media screen and (max-width: 420px) {

                          .weekdays li,
                          .days li {
                              width: 12.5%;
                          }

                          .days li .active {
                              padding: 2px;
                          }
                      }

                      @media screen and (max-width: 290px) {

                          .weekdays li,
                          .days li {
                              width: 12.2%;
                          }
                      }
                    </style>

                    <div
                      class="month"
                      style="border-radius: 20px 20px 0px 0px;"
                    >
                      <ul>
                        <li class="prev">❮</li>
                        <li class="next">❯</li>
                        <li>
                          December
                          <br />
                          <span style="font-size:18px">2022</span>
                        </li>
                      </ul>
                    </div>

                    <ul class="weekdays">
                      <li>Mo</li>
                      <li>Tu</li>
                      <li>We</li>
                      <li>Th</li>
                      <li>Fr</li>
                      <li>Sa</li>
                      <li>Su</li>
                    </ul>

                    <ul class="days">
                      <li>1</li>
                      <li>2</li>
                      <li>3</li>
                      <li>4</li>
                      <li>5</li>
                      <li>6</li>
                      <li>7</li>
                      <li>8</li>
                      <li>9</li>
                      <li><span class="active">10</span></li>
                      <li>11</li>
                      <li>12</li>
                      <li>13</li>
                      <li>14</li>
                      <li>15</li>
                      <li>16</li>
                      <li>17</li>
                      <li>18</li>
                      <li>19</li>
                      <li>20</li>
                      <li>21</li>
                      <li>22</li>
                      <li>23</li>
                      <li>24</li>
                      <li>25</li>
                      <li>26</li>
                      <li>27</li>
                      <li>28</li>
                      <li>29</li>
                      <li>30</li>
                      <li>31</li>
                    </ul>
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
                window.location.href = 'login-doctor.php';
          });
         })
        
</script>