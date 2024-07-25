<?php
include ('Function/PatientPortalFunction.php');
include ('Function/ViewResultPatient.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Patient | Your Laboratory Results</title>
    <meta property="og:title" content="ViewLabResults - WellTech Care" />

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
      <link href="./view-lab-results.css" rel="stylesheet" />

      <div class="view-lab-results-container">
        <div class="view-lab-results-lab-results-body-container">
          <div class="view-lab-results-container01">
            <div class="view-lab-results-sidebar">
              <div class="view-lab-results-logo-container">
                <img
                  alt="image"
                  src="public/playground_assets/untitled%20design%20%5B2%5D-200h.png"
                  class="view-lab-results-image"
                />
                <div class="view-lab-results-container02">
                  <span class="view-lab-results-logo-text">WellTech Care</span>
                  <span class="view-lab-results-text">
                    Physical &amp; Health Care
                  </span>
                </div>
                <svg viewBox="0 0 1024 1024" class="view-lab-results-icon">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <nav class="view-lab-results-nav">
                <span class="view-lab-results-text01">MENU</span>
                <a
                  href="patient-portal-home.php"
                  class="view-lab-results-navlink"
                >
                  <div class="view-lab-results-home">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="view-lab-results-icon02"
                    >
                      <path
                        d="M949.845 446.635c-144.64-121.771-407.296-348.629-409.899-350.933l-27.947-24.021-27.819 24.021c-2.645 2.261-265.429 229.035-412.16 351.915-18.688 16.811-29.355 40.32-29.355 64.384 0 47.104 38.229 85.333 85.333 85.333h42.667v256c0 47.104 38.229 85.333 85.333 85.333h128 384c47.104 0 85.333-38.229 85.333-85.333v-256h42.667c47.104 0 85.333-38.229 85.333-85.333 0-25.515-11.733-49.536-31.488-65.365zM597.333 853.333h-170.667v-213.333h170.667v213.333zM768 512l0.085 341.333c-0.085 0-128.085 0-128.085 0v-256h-256v256h-128v-341.333h-128.043c117.973-98.645 312.107-265.685 384.043-327.68 71.936 61.995 265.984 228.992 384 327.723 0-0-128-0-128-0.043z"
                      ></path>
                    </svg>
                    <span class="view-lab-results-text02">Home</span>
                  </div>
                </a>
                <a
                  href="schedule-appointment.php"
                  class="view-lab-results-navlink01"
                >
                  <div class="view-lab-results-schedule-appointment">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="view-lab-results-icon04"
                    >
                      <path
                        d="M320 384h128v128h-128zM512 384h128v128h-128zM704 384h128v128h-128zM128 768h128v128h-128zM320 768h128v128h-128zM512 768h128v128h-128zM320 576h128v128h-128zM512 576h128v128h-128zM704 576h128v128h-128zM128 576h128v128h-128zM832 0v64h-128v-64h-448v64h-128v-64h-128v1024h960v-1024h-128zM896 960h-832v-704h832v704z"
                      ></path>
                    </svg>
                    <span class="view-lab-results-text03">
                      Schedule Appointment
                    </span>
                  </div>
                </a>
                <a
                  href="laboratory-results.php"
                  class="view-lab-results-navlink02"
                >
                  <div class="view-lab-results-container03">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="view-lab-results-icon06"
                    >
                      <path
                        d="M864 0h-768c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h768c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM832 896h-704v-768h704v768zM256 576h448v64h-448zM256 704h448v64h-448zM320 288c0-53.019 42.981-96 96-96s96 42.981 96 96c0 53.019-42.981 96-96 96s-96-42.981-96-96zM480 384h-128c-52.8 0-96 28.8-96 64v64h320v-64c0-35.2-43.2-64-96-64z"
                      ></path>
                    </svg>
                    <span class="view-lab-results-text04">Lab Results</span>
                  </div>
                </a>
                <a
                  href="appointment-history.php"
                  class="view-lab-results-navlink03"
                >
                  <div class="view-lab-results-container04">
                    <div class="view-lab-results-container05">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="view-lab-results-icon08"
                      >
                        <path
                          d="M512 342h64v180l150 90-32 52-182-110v-212zM554 128q158 0 271 112t113 272-113 272-271 112q-66 0-145-33t-125-79l60-62q88 88 210 88 124 0 212-87t88-211-88-211-212-87-211 87-87 211h128l-172 172-4-6-166-166h128q0-160 113-272t271-112z"
                        ></path>
                      </svg>
                    </div>
                    <span class="view-lab-results-text05">
                      Appointment History
                    </span>
                  </div>
                </a>
                <span class="view-lab-results-text06">
                  <span>PREFERENCES</span>
                  <br />
                </span>
                <a
                  href="user-profile-patient.php"
                  class="view-lab-results-navlink04"
                >
                  <div class="view-lab-results-home1">
                    <img
                      alt="image"
                      src="public/playground_assets/user%20%5B1%5D-200h.png"
                      class="view-lab-results-image1"
                    />
                    <span class="view-lab-results-text09">
                      <span>Profile</span>
                      <br />
                    </span>
                  </div>
                </a>
                <a href="login-patient.php" class="view-lab-results-navlink05 logout">
                  <div class="view-lab-results-profile">
                    <div class="view-lab-results-container06">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="view-lab-results-icon10"
                      >
                        <path
                          d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                        ></path>
                      </svg>
                    </div>
                    <div class="view-lab-results-container07">
                      <span class="view-lab-results-text12">
                        <span>Logout</span>
                        <br />
                      </span>
                    </div>
                  </div>
                </a>
              </nav>
            </div>
            <div class="view-lab-results-header-body-container">
              <div class="view-lab-results-header-container">
                <span class="view-lab-results-patient-portal-txt">
                  Patient Portal System&nbsp;
                </span>
                <div class="view-lab-results-icons-container">
                  <svg
                    viewBox="0 0 950.8571428571428 1024"
                    class="view-lab-results-icon12"
                  >
                    <path
                      d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                    ></path></svg
                  ><svg viewBox="0 0 1024 1024" class="view-lab-results-icon14">
                    <path
                      d="M768 682l86 86v42h-684v-42l86-86v-212q0-100 51-174t141-96v-30q0-26 18-45t46-19 46 19 18 45v30q90 22 141 96t51 174v212zM512 938q-36 0-61-24t-25-60h172q0 34-26 59t-60 25z"
                    ></path>
                  </svg>
                  <a
                    href="patient-portal-home.php"
                    class="view-lab-results-navlink06"
                  >
                    <svg
                      viewBox="0 0 1024 1024"
                      class="view-lab-results-icon16"
                    >
                      <path
                        d="M219.429 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM329.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM573.714 677.143l57.714-218.286c4.571-19.429-6.857-39.429-26.286-44.571v0c-19.429-5.143-39.429 6.857-44.571 26.286l-57.714 218.286c-45.143 3.429-84.571 34.857-97.143 81.143-15.429 58.857 20 118.857 78.286 134.286 58.857 15.429 118.857-20 134.286-78.286 12-46.286-7.429-93.143-44.571-118.857zM950.857 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM585.143 292.571c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM841.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM1024 658.286c0 98.286-28 193.143-80.571 276-6.857 10.286-18.286 16.571-30.857 16.571h-801.143c-12.571 0-24-6.286-30.857-16.571-52.571-82.286-80.571-177.714-80.571-276 0-282.286 229.714-512 512-512s512 229.714 512 512z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <form class="view-lab-results-view-lab-form">
                <div class="view-lab-results-view-lab-container">
                  <div class="view-lab-results-container08">
                    <div class="view-lab-results-container09">
                      <span class="view-lab-results-cnfrm-appointment-txt">
                        Lab Results
                      </span>
                      <div class="view-lab-results-container10">
                        <div class="view-lab-results-back2page-container">
                          <a
                            href="laboratory-results.php"
                            class="view-lab-results-date-txt"
                          >
                            Back to page
                          </a>
                          <a
                            href="laboratory-results.php"
                            class="view-lab-results-navlink07"
                          >
                            <svg
                              viewBox="0 0 1024 1024"
                              class="view-lab-results-icon18"
                            >
                              <path
                                d="M854 470v84h-520l238 240-60 60-342-342 342-342 60 60-238 240h520z"
                              ></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="view-lab-results-white-bg-container">
                    <div class="view-lab-results-container11">
                      <span class="view-lab-results-cnfrm-appointment-txt1">
                        Patient Medical History Form
                      </span>
                      <span class="view-lab-results-text15">
                        This form contains important information about your
                        health. These are strictly confidential and will become
                        part of your medical record.
                      </span>
                    </div>
                    <div class="view-lab-results-container13" >
                      <div class="view-lab-results-html-node" id="content">
                        <style></style>

                        <table
                          style="width: 100%; border: 1px solid #D9D9D9"
                          align="center"
                        >
                          <tbody>
                            <tr>
                              <td>
                                <table
                                  style="border-collapse: collapse; width: 100%;  padding-left: 20px; padding-right: 20px;"
                                >
                                  <tbody>
                                    <tr style=" background-color:#F2F2F2">
                                      <td
                                        width="100%"
                                        style="padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; text-align: right; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        Results ID
                                        <b style="padding-left: 20px;">
                                           <?php echo $Result_ID?>
                                        </b>
                                      </td>
                                    </tr>
                                    <tr
                                      style=" background-color:#F2F2F2; border-top: 2px solid #CED5E0"
                                    >
                                      <td
                                        width="100%"
                                        style="padding-left: 8px; padding-right: 8px; padding-top: 15px; padding-bottom: 8px; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <b>First Name</b>
                                        <font style="padding-left: 20px">
                                          <?php echo $First_Name ?>
                                        </font>

                                        <b style="padding-left: 150px;">
                                          Middle Name
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Middle_Name ?>
                                        </font>

                                        <b style="padding-left: 150px;">
                                          Surname
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Last_Name ?>
                                        </font>
                                      </td>
                                    </tr>
                                    <tr style=" background-color:#F2F2F2">
                                      <td
                                        width="100%"
                                        style="padding: 8px; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <b>Age</b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Age ?>
                                        </font>

                                        <b style="padding-left: 50px;">
                                          Date of Birth
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Birthdate ?>
                                        </font>

                                        <b style="padding-left: 50px;">
                                          Address
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Address ?>
                                        </font>
                                      </td>
                                    </tr>
                                    <tr style=" background-color:#F2F2F2">
                                      <td
                                        width="100%"
                                        style="padding-left: 8px; padding-right: 8px; padding-top: 8px; padding-bottom: 15px; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <b>Sex</b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Gender ?>
                                        </font>

                                        <b style="padding-left: 50px;">
                                          Weight
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Weight ?> kg
                                        </font>

                                        <b style="padding-left: 50px;">
                                          Height
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $Height ?> cm
                                        </font>

                                        <b style="padding-left: 50px;">
                                          Blood Type
                                        </b>
                                        <font style="padding-left: 20px">
                                          <?php echo $BloodType ?>
                                        </font>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td
                                        width="100%"
                                        style="text-align: center; padding: 20px; font-size: 16px; color: #0C234B; font-family: 'Exo 2', sans-serif; text-decoration: underline;"
                                      >
                                        <b>MEDICAL RESULTS</b>
                                      </td>
                                    </tr>
                                    <tr></tr>
                                  </tbody>
                                </table>
                                <table
                                  style="border-collapse: collapse; width: 100%;  padding-left: 20px; padding-right: 20px;"
                                >
                                  <tbody>
                                    <tr
                                      style=" background-color:#F2F2F2; border-top: 1px solid #D9D9D9; border-bottom: 1px solid #D9D9D9;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-weight: 600; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        Name of Test
                                      </td>
                                      <td
                                        style="padding-left: 20px; padding-right: 120px; padding-top: 15px; padding-bottom: 15px; text-align: right; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; font-weight: 600"
                                      >
                                        Results
                                      </td>
                                    </tr>

                                    <!-- Vital Signs -->
                                    <tr style=" background-color: white;">
                                      <td
                                        width="100%"
                                        style="font-weight: 600; padding-left: 20px; padding-right: 20px; padding-top: 8px; padding-bottom: 8px; text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <br />
                                        Vital Signs
                                      </td>

                                      <td
                                        style="font-weight: 600; padding-left: 20px; padding-right: 20px; padding-top: 8px; padding-bottom: 8px; text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      ></td>
                                    </tr>

                                    <!-- Urinalysis-->
                                    <tr
                                      style="background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Heart Rate
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <?php echo $Patient_HeartRate?>
                                      </td>
                                    </tr>

                                    <!-- Xray Result -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Blood Pressure
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                        <?php echo $Patient_BloodPressure?>
                                      </td>
                                    </tr>

                                    <!-- Heart Rate -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Urinalysis Result
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                       <?php echo $Patient_Urinalysis?>
                                      </td>

                                    </tr>

                                    <!-- Patient Vision -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                       X-ray Result
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                        <?php echo $Patient_Xray?>
                                      </td>
                                    </tr>

                                    <!-- CBC Results -->
                                    <tr style=" background-color: white;">
                                      <td
                                        width="100%"
                                        style="font-weight: 600; padding-left: 20px; padding-right: 20px; padding-top: 8px; padding-bottom: 8px; text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <br />
                                        <br />
                                        CBC Result
                                      </td>

                                      <td
                                        style="font-weight: 600; padding-left: 20px; padding-right: 20px; padding-top: 8px; padding-bottom: 8px; text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      ></td>
                                    </tr>

                                    <!-- RBC Count -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        RBC Count
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                        <?php echo $Patient_RBC?>
                                      </td>
                                    </tr>

                                    <!-- WBC Count -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        WBC Count
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif;"
                                      >
                                        <?php echo $Patient_WBC?>
                                      </td>
                                    </tr>

                                    <!-- Platelet Count -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Platelet Count
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                        <?php echo $Patient_Platelet?>
                                      </td>
                                    </tr>

                                    <!-- Hemoglobin -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Hemoglobin 
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                         <?php echo $Patient_Hemoglobin?>
                                      </td>
                                    </tr>

                                    <!-- Platelet Count -->
                                    <tr
                                      style=" background-color: white;"
                                    >
                                      <td
                                        width="100%"
                                        style="font-family: 'Lato', sans-serif; font-size: 12px; color:#0C234B; padding-left: 35px; font-weight: 600"
                                      >
                                        <br />
                                        Hematocrit
                                      </td>

                                      <td
                                        style="font-weight: 600;  text-align: left; font-size: 12px; color: #0C234B; font-family: 'Exo 2', sans-serif; "
                                      >
                                         <?php echo $Patient_Hematocrit?>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <br />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        
                      </div>
                  </div>
                 
                  <button onClick="createPDF();" style="color: #1e1e1e; border: 1px solid darkgray; background-color: #EFEFEF; padding: 6px; font-size: 14px; margin-left: 760px; margin-top: -12px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 114.13" style="enable-background:new 0 0 122.88 114.13" xml:space="preserve" fill="#1e1e1e" 
                  width="16px" height="16px" style="margin-left: 60px;"><g><path d="M23.2,29.44V3.35V0.53C23.2,0.24,23.44,0,23.73,0h2.82h54.99c0.09,0,0.17,0.02,0.24,0.06l1.93,0.8l-0.2,0.49l0.2-0.49 c0.08,0.03,0.14,0.08,0.2,0.14l12.93,12.76l0.84,0.83l-0.37,0.38l0.37-0.38c0.1,0.1,0.16,0.24,0.16,0.38v1.18v13.31 c0,0.29-0.24,0.53-0.53,0.53h-5.61c-0.29,0-0.53-0.24-0.53-0.53v-6.88H79.12H76.3c-0.29,0-0.53-0.24-0.53-0.53 c0-0.02,0-0.03,0-0.05v-2.77h0V6.69H29.89v22.75c0,0.29-0.24,0.53-0.53,0.53h-5.64C23.44,29.97,23.2,29.73,23.2,29.44L23.2,29.44z M30.96,67.85h60.97h0c0.04,0,0.08,0,0.12,0.01c0.83,0.02,1.63,0.19,2.36,0.49c0.79,0.33,1.51,0.81,2.11,1.41 c0.59,0.59,1.07,1.31,1.4,2.1c0.3,0.73,0.47,1.52,0.49,2.35c0.01,0.04,0.01,0.08,0.01,0.12v0v9.24h13.16h0c0.04,0,0.07,0,0.11,0.01 c0.57-0.01,1.13-0.14,1.64-0.35c0.57-0.24,1.08-0.59,1.51-1.02c0.43-0.43,0.78-0.94,1.02-1.51c0.21-0.51,0.34-1.07,0.35-1.65 c-0.01-0.03-0.01-0.07-0.01-0.1v0V43.55v0c0-0.04,0-0.07,0.01-0.11c-0.01-0.57-0.14-1.13-0.35-1.64c-0.24-0.56-0.59-1.08-1.02-1.51 c-0.43-0.43-0.94-0.78-1.51-1.02c-0.51-0.22-1.07-0.34-1.65-0.35c-0.03,0.01-0.07,0.01-0.1,0.01h0H11.31h0 c-0.04,0-0.08,0-0.11-0.01c-0.57,0.01-1.13,0.14-1.64,0.35C9,39.51,8.48,39.86,8.05,40.29c-0.43,0.43-0.78,0.94-1.02,1.51 c-0.21,0.51-0.34,1.07-0.35,1.65c0.01,0.03,0.01,0.07,0.01,0.1v0v35.41v0c0,0.04,0,0.08-0.01,0.11c0.01,0.57,0.14,1.13,0.35,1.64 c0.24,0.57,0.59,1.08,1.02,1.51C8.48,82.65,9,83,9.56,83.24c0.51,0.22,1.07,0.34,1.65,0.35c0.03-0.01,0.07-0.01,0.1-0.01h0h13.16 v-9.24v0c0-0.04,0-0.08,0.01-0.12c0.02-0.83,0.19-1.63,0.49-2.35c0.31-0.76,0.77-1.45,1.33-2.03c0.02-0.03,0.04-0.06,0.07-0.08 c0.59-0.59,1.31-1.07,2.1-1.4c0.73-0.3,1.52-0.47,2.36-0.49C30.87,67.85,30.91,67.85,30.96,67.85L30.96,67.85L30.96,67.85z M98.41,90.27v17.37v0c0,0.04,0,0.08-0.01,0.12c-0.02,0.83-0.19,1.63-0.49,2.36c-0.33,0.79-0.81,1.51-1.41,2.11 c-0.59,0.59-1.31,1.07-2.1,1.4c-0.73,0.3-1.52,0.47-2.35,0.49c-0.04,0.01-0.08,0.01-0.12,0.01h0H30.96h0 c-0.04,0-0.08-0.01-0.12-0.01c-0.83-0.02-1.62-0.19-2.35-0.49c-0.79-0.33-1.5-0.81-2.1-1.4c-0.6-0.6-1.08-1.31-1.41-2.11 c-0.3-0.73-0.47-1.52-0.49-2.35c-0.01-0.04-0.01-0.08-0.01-0.12v0V90.27H11.31h0c-0.04,0-0.08,0-0.12-0.01 c-1.49-0.02-2.91-0.32-4.2-0.85c-1.39-0.57-2.63-1.41-3.67-2.45c-1.04-1.04-1.88-2.28-2.45-3.67c-0.54-1.3-0.84-2.71-0.85-4.2 C0,79.04,0,79,0,78.96v0V43.55v0c0-0.04,0-0.08,0.01-0.12c0.02-1.49,0.32-2.9,0.85-4.2c0.57-1.39,1.41-2.63,2.45-3.67 c1.04-1.04,2.28-1.88,3.67-2.45c1.3-0.54,2.71-0.84,4.2-0.85c0.04-0.01,0.08-0.01,0.12-0.01h0h100.25h0c0.04,0,0.08,0,0.12,0.01 c1.49,0.02,2.91,0.32,4.2,0.85c1.39,0.57,2.63,1.41,3.67,2.45c1.04,1.04,1.88,2.28,2.45,3.67c0.54,1.3,0.84,2.71,0.85,4.2 c0.01,0.04,0.01,0.08,0.01,0.12v0v35.41v0c0,0.04,0,0.08-0.01,0.12c-0.02,1.49-0.32,2.9-0.85,4.2c-0.57,1.39-1.41,2.63-2.45,3.67 c-1.04,1.04-2.28,1.88-3.67,2.45c-1.3,0.54-2.71,0.84-4.2,0.85c-0.04,0.01-0.08,0.01-0.12,0.01h0H98.41L98.41,90.27z M89.47,15.86 l-7-6.91v6.91H89.47L89.47,15.86z M91.72,74.54H31.16v32.89h60.56V74.54L91.72,74.54z"/></g></svg>&ensp;Print this page</button></center>
                </div>
              </form>
            </div>
          </div>
          
          <div class="view-lab-results-p-name-header-container">
            <div class="view-lab-results-profile-header-container">
              <div class="view-lab-results-profile-menu-container">
                 <?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'"class="view-lab-results-patient-pic-header"
                         />';?>
                <div class="view-lab-results-profile-name-container">
                  <span class="view-lab-results-patient-name-header">
                    <?php echo $First_Name,' ',$Last_Name ?>
                  </span>
                  <span class="view-lab-results-patient-txt-header">
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
<body>
  <script type="text/javascript">
    function createPDF() {
      // 'content' yung name ng div. You can change it naman.
          var sTable = document.getElementById('content').innerHTML;

          // Lagay mo dito yung style ng table na makikita sa pdf. Mas okay if ilalagay mo ID kesa class name.
          var style = "<style>";
          style = style + "table { width: 100%; }";  
          style = style + "</style>";

          // Ito yung window na lalabas once ma click yung button.
          var win = window.open('', '', 'height=1000,width=1000');

          win.document.write('<html><head>');
          win.document.write(style);
          win.document.write('</head>');
          win.document.write('<body>');
          win.document.write(sTable);
          win.document.write('</body></html>');
          win.document.write('WellTechCare@2022');

          win.document.close();
          
          win.print();
      }
  </script>
</body>