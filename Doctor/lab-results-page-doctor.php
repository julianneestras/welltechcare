<?php
include ('Function/DoctorProfileFunction.php');
include ('Function/ResultID.php');
include ('Function/AddResultFunction.php');
include ('Function/ResultFunction.php');
date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y', time());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Doctor | Patient Lab Results</title>
    <meta
      property="og:title"
      content="Lab-Results-Page-Doctor - WellTech Care"
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
      <link href="./lab-results-page-doctor.css" rel="stylesheet" />

      <div class="lab-results-page-doctor-container">
        <div
          class="lab-results-page-doctor-doctor-enter-results-body-container"
        >
          <div class="lab-results-page-doctor-sidebar">
            <div class="lab-results-page-doctor-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="lab-results-page-doctor-image"
              />
              <div class="lab-results-page-doctor-container01">
                <span class="lab-results-page-doctor-logo-text">
                  WellTech Care
                </span>
                <span class="lab-results-page-doctor-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg viewBox="0 0 1024 1024" class="lab-results-page-doctor-icon">
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="lab-results-page-doctor-nav">
              <a
                href="doctor-portal-home.php"
                class="lab-results-page-doctor-navlink"
              >
                <div class="lab-results-page-doctor-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="lab-results-page-doctor-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="lab-results-page-doctor-text01">Dashboard</span>
                </div>
              </a>
              <div class="lab-results-page-doctor-container03">
                <a
                  href="view-appointments-doctor.php"
                  class="lab-results-page-doctor-navlink1"
                >
                  <div class="lab-results-page-doctor-container04">
                    <div class="lab-results-page-doctor-container05">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="lab-results-page-doctor-icon04"
                      >
                        <path
                          d="M744.571 550.857l-292.571 292.571c-7.429 6.857-18.857 6.857-26.286 0l-164.571-164.571c-6.857-7.429-6.857-18.857 0-25.714l26.286-26.286c6.857-6.857 18.286-6.857 25.714 0l125.714 125.714 253.714-253.714c7.429-6.857 18.857-6.857 25.714 0l26.286 26.286c6.857 6.857 6.857 18.286 0 25.714zM73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                        ></path>
                      </svg>
                    </div>
                    <span class="lab-results-page-doctor-text02">
                      View Appointments
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="enter-lab-results-doctor.php"
                class="lab-results-page-doctor-navlink2"
              >
                <div class="lab-results-page-doctor-enter-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="lab-results-page-doctor-icon06"
                  >
                    <path
                      d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                    ></path>
                  </svg>
                  <span class="lab-results-page-doctor-text03">
                    <span>Enter Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="user-profile-doctor.php"
                class="lab-results-page-doctor-navlink3"
              >
                <div class="lab-results-page-doctor-profile">
                  <svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="lab-results-page-doctor-icon08"
                  >
                    <path
                      d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                    ></path>
                  </svg>
                  <span class="lab-results-page-doctor-text06">
                    <span>Profile</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="login-doctor.php"
                class="lab-results-page-doctor-navlink4 logout"
              >
                <div class="lab-results-page-doctor-logout">
                  <div class="lab-results-page-doctor-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="lab-results-page-doctor-icon10"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="lab-results-page-doctor-container07">
                    <span class="lab-results-page-doctor-text09">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="lab-results-page-doctor-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="lab-results-page-doctor-image1"
                         />';?>
              <div class="lab-results-page-doctor-container08">
                <span class="lab-results-page-doctor-text12">
                  <?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?>
                </span>
                <span class="lab-results-page-doctor-text13">Doctor</span>
              </div>
            </div>
          </div>
          <div class="lab-results-page-doctor-main-body-container">
            <div class="lab-results-page-doctor-header-container">
              <span class="lab-results-page-doctor-patient-portal-txt">
                Doctor Portal System&nbsp;
              </span>
              <div class="lab-results-page-doctor-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="lab-results-page-doctor-image2"
                />
                <a
                  href="view-appointments-doctor.php"
                  class="lab-results-page-doctor-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="lab-results-page-doctor-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="lab-results-page-doctor-image4"
                />
              </div>
            </div>
            <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
              <?php 
                      include ('Function/db.php');
                        if (isset($_GET['Appointment-ID'])) 
                        {
                        $appointment_id = $_GET['Appointment-ID'];
                        $sql = "SELECT * FROM appointments WHERE appointment_id='$appointment_id'";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result))
                      {
                      ?>

                      <input type="hidden" name="appointment_id" value ="<?= $row['appointment_id']?>"/>
                      <input type="hidden" name="Email" value ="<?= $row['Email']?>"/>
                      <input type="hidden" name="doctor_name" value ="<?= $row['doctor_firstname'] ,' ', $row['doctor_middleinitial'],'. ',$row['doctor_lastname']?>"/>

                      <?php
                         }
                       }
                      ?>
            <div class="lab-results-page-doctor-container09">
              <div class="lab-results-page-doctor-container10">
                <div class="lab-results-page-doctor-container11">
                  <div
                    class="lab-results-page-doctor-doctor-enter-results-form-container"
                  >
                    <div class="lab-results-page-doctor-container12">
                      <span
                        class="lab-results-page-doctor-cnfrm-appointment-txt"
                      >
                        Enter Patient Results
                      </span>
                    </div>
                    <div class="lab-results-page-doctor-container13">
                      <div class="lab-results-page-doctor-container14">
                        <span
                          class="lab-results-page-doctor-cnfrm-appointment-txt1"
                        >
                          Today's Date
                        </span>
                        <input
                          type="text"
                          name="Result_Uploaded"
                          placeholder="placeholder"
                          value = "<?php echo $date ?>"
                          readonly
                          class="lab-results-page-doctor-textinput input"
                        />
                      </div>
                      <div class="lab-results-page-doctor-container15">
                        <span
                          class="lab-results-page-doctor-cnfrm-appointment-txt2"
                        >
                          Results ID
                        </span>
                        <input
                          type="text"
                          name="ResultsID"
                          disabled=""
                          placeholder="------------"
                          value = "<?php echo $Result_ID ?>"
                          class="lab-results-page-doctor-textinput01 input"
                        />
                      </div>
                    </div>
                    <div class="lab-results-page-doctor-container16">
                      <span
                        class="lab-results-page-doctor-cnfrm-appointment-txt3"
                      >
                        MEDICAL RESULTS
                      </span>
                    </div>
                    <?php 
                      include ('Function/db.php');
                        if (isset($_GET['Patient-ID'])) 
                        {
                        $Patient_ID = $_GET['Patient-ID'];
                        $sql = "SELECT * FROM patient_account WHERE Patient_ID='$Patient_ID'";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result))
                      {
                      ?>
                    <div class="lab-results-page-doctor-container17">
                      <div class="lab-results-page-doctor-container18">
                        <div class="lab-results-page-doctor-container19">
                          <span class="lab-results-page-doctor-text14">
                            <input type="hidden" name="Result_ID" value="RSLT-<?php echo ResultID();?>">
                            <input type="hidden" name="Patient_ID" value ="<?= $row['Patient_ID']?>">
                            First Name
                          </span>
                          <input
                            type="text"
                            name="First_Name"
                            placeholder="Patient"
                            readonly
                            value ="<?= $row['First_Name']?>"
                            class="lab-results-page-doctor-textinput02 input"
                          />
                        </div>
                        <div class="lab-results-page-doctor-container20">
                          <span class="lab-results-page-doctor-text15">
                            Middle Name
                          </span>
                          <input
                            type="text"
                            name="Middle_Name"
                            readonly
                            placeholder="Midname"
                            value ="<?= $row['Middle_Name']?>"
                            class="lab-results-page-doctor-textinput03 input"
                          />
                        </div>
                        <div class="lab-results-page-doctor-container21">
                          <span class="lab-results-page-doctor-text16">
                            Last Name
                          </span>
                          <input
                            type="text"
                            name="Last_Name"
                            readonly
                            placeholder="Name"
                            value ="<?= $row['Last_Name']?>"
                            class="lab-results-page-doctor-textinput04 input"
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-container22">
                        <div class="lab-results-page-doctor-age-container">
                          <span class="lab-results-page-doctor-text17">
                            Age
                          </span>
                          <input
                            type="number"
                            name="Age"
                            enctype="Age *"
                            readonly
                            placeholder="48"
                            value ="<?= $row['Age']?>"
                            class="lab-results-page-doctor-textinput05 input"
                          />
                        </div>
                        <div class="lab-results-page-doctor-blood-type">
                          <span class="lab-results-page-doctor-text18">
                            Address
                          </span>
                          <input
                            type="text"
                            name="Address"
                            readonly
                            placeholder="Lot 18 Blk. 9 East Fairview, Quezon City"
                            value ="<?= $row['Address']?>"
                            class="lab-results-page-doctor-textinput06 input"
                          />
                        </div>
                        <div class="lab-results-page-doctor-bdate-container">
                          <span class="lab-results-page-doctor-text19">
                            Birthdate
                          </span>
                          <input
                            type="text"
                            name="Birthdate"
                            readonly
                            value ="<?= $row['Birthdate']?>"
                            placeholder="07/31/1995"
                            class="lab-results-page-doctor-textinput07 input"
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-container23">
                        <div class="lab-results-page-doctor-container24">
                          <div class="lab-results-page-doctor-height">
                            <span class="lab-results-page-doctor-text20">
                              Height
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Height"
                              enctype="Height *"
                              readonly
                              placeholder="6'2"
                              value ="<?= $row['Height']?>"
                              class="lab-results-page-doctor-textinput08 input"
                            />
                          </div>
                          <div class="lab-results-page-doctor-weight">
                            <span class="lab-results-page-doctor-text21">
                              Weight
                            </span>
                            <input
                              type="number"
                              min="1"
                              name="Weight"
                              enctype="Weight *"
                              readonly
                              placeholder="76kg"
                              value ="<?= $row['Weight']?>"
                              class="lab-results-page-doctor-textinput09 input"
                            />
                          </div>
                        </div>
                        <div class="lab-results-page-doctor-age-container1">
                          <span class="lab-results-page-doctor-text22">
                            Gender
                          </span>
                          <input
                            type="text"
                            name="Gender"
                            enctype="Age *"
                            readonly
                            placeholder="Male"
                            value ="<?= $row['Gender']?>"
                            class="lab-results-page-doctor-textinput10 input"
                          />
                        </div>
                        <div class="lab-results-page-doctor-age-container2">
                          <span class="lab-results-page-doctor-text23">
                            Blood Type
                          </span>
                          <input
                            type="text"
                            name="BloodType"
                            enctype="Age *"
                            readonly
                            placeholder="A+"
                            value ="<?= $row['BloodType']?>"
                            class="lab-results-page-doctor-textinput11 input"
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-separator"></div>
                      <span
                        class="lab-results-page-doctor-cnfrm-appointment-txt4"
                      >
                          <?php
                         }
                       }
                      ?>

                        VITAL SIGNS

                        
                      </span>
                      <div class="lab-results-page-doctor-container25">
                        <div class="lab-results-page-doctor-container26">
                          <span class="lab-results-page-doctor-text24">
                            Heart Rate
                          </span>
                          <input
                            type="text"
                            name="Patient_HeartRate"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_HeartRate ?>"
                            class="lab-results-page-doctor-textinput12 input"
                            required

                          />
                        </div>
                        <div class="lab-results-page-doctor-container27">
                          <span class="lab-results-page-doctor-text25">
                            Blood Pressure
                          </span>
                          <input
                            type="text"
                            name="Patient_BloodPressure"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_BloodPressure ?>"
                            class="lab-results-page-doctor-textinput13 input"
                            required
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-container28">

                        <div class="lab-results-page-doctor-container29">
                          <span class="lab-results-page-doctor-text26">
                            Urinalysis Result
                          </span>
                          <input
                            type="text"
                            name="Patient_Urinalysis"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_Urinalysis?>"
                            class="lab-results-page-doctor-textinput14 input"
                            required
                          />
                        </div>
                        <div class="lab-results-page-doctor-container30">
                          <span class="lab-results-page-doctor-text27">
                            Xray Result
                          </span>
                          <input
                            type="text"
                            name="Patient_Xray"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_Xray?>"
                            class="lab-results-page-doctor-textinput15 input"
                            required
                          />
                        </div>
                      </div>
                      <span
                        class="lab-results-page-doctor-cnfrm-appointment-txt5"
                      >
                        CBC RESULTS
                      </span>
                      <div class="lab-results-page-doctor-container31">
                        <div class="lab-results-page-doctor-container32">
                          <span class="lab-results-page-doctor-text28">
                            RBC Count
                          </span>
                          <input
                            type="text"
                            name="Patient_RBC"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_RBC?>"
                            class="lab-results-page-doctor-textinput16 input"
                            required
                          />
                        </div>
                        <div class="lab-results-page-doctor-container33">
                          <span class="lab-results-page-doctor-text29">
                            WBC Count
                          </span>
                          <input
                            type="text"
                            name="Patient_WBC"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_WBC?>"
                            class="lab-results-page-doctor-textinput17 input"
                            required
                          />
                        </div>
                        <div class="lab-results-page-doctor-container34">
                          <span class="lab-results-page-doctor-text30">
                            Platelet Count
                          </span>
                          <input
                            type="text"
                            name="Patient_Platelet"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_Platelet?>"
                            class="lab-results-page-doctor-textinput18 input"
                            required
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-container35">
                        <div class="lab-results-page-doctor-container36">
                          <span class="lab-results-page-doctor-text31">
                            Hemoglobin
                          </span>
                          <input
                            type="text"
                            name="Patient_Hemoglobin"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_Hemoglobin?>"
                            class="lab-results-page-doctor-textinput19 input"
                            required
                          />
                        </div>
                        <div class="lab-results-page-doctor-container37">
                          <span class="lab-results-page-doctor-text32">
                            Hematocrit
                          </span>
                          <input
                            type="text"
                            name="Patient_Hematocrit"
                            placeholder="Enter result/value"
                            value = "<?php echo $Patient_Hematocrit?>"
                            class="lab-results-page-doctor-textinput20 input"
                            required
                          />
                        </div>
                      </div>
                      <div class="lab-results-page-doctor-container38">
                        <a href="enter-lab-results-doctor.php"
                        class="lab-results-page-doctor-cancel-btn button"
                        onclick="return confirm('Are you sure you want to cancel the upload of the result with the Appointment ID: <?= $appointment_id?>')">
                          Cancel
                        </a>
                        <button class="lab-results-page-doctor-button button" type="reset" onclick="return confirm('Are you sure you want to clear the text fields?')">
                          Clear All
                        </button>
                        <input type="submit" name="AddResult" class="lab-results-page-doctor-button1 button" value="Save" onclick="return confirm('Are you sure you want to upload the result with the Appointment ID: <?= $appointment_id?>')">
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
                window.location.href = 'login-doctor.php';
          });
         })
        
</script>
