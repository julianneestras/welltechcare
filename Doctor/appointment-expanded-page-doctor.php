<?php
include ('Function/DoctorProfileFunction.php');
include ('Function/logout.php');
include ('Function/AddNotes.php');
date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y', time());
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Doctor | Manage Patient Appointment</title>
    <meta
      property="og:title"
      content="Appointment-Expanded-Page-Doctor - WellTech Care"
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
      <link href="./appointment-expanded-page-doctor.css" rel="stylesheet" />

      <div class="appointment-expanded-page-doctor-container">
        <div
          class="appointment-expanded-page-doctor-doctor-profile-body-container"
        >
          <div class="appointment-expanded-page-doctor-sidebar">
            <div class="appointment-expanded-page-doctor-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="appointment-expanded-page-doctor-image"
              />
              <div class="appointment-expanded-page-doctor-container01">
                <span class="appointment-expanded-page-doctor-logo-text">
                  WellTech Care
                </span>
                <span class="appointment-expanded-page-doctor-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg
                viewBox="0 0 1024 1024"
                class="appointment-expanded-page-doctor-icon"
              >
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="appointment-expanded-page-doctor-nav">
              <a
                href="doctor-portal-home.php"
                class="appointment-expanded-page-doctor-navlink"
              >
                <div class="appointment-expanded-page-doctor-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="appointment-expanded-page-doctor-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="appointment-expanded-page-doctor-text01">
                    Dashboard
                  </span>
                </div>
              </a>
              <div class="appointment-expanded-page-doctor-container03">
                <a
                  href="view-appointments-doctor.php"
                  class="appointment-expanded-page-doctor-navlink1"
                >
                  <div class="appointment-expanded-page-doctor-container04">
                    <div class="appointment-expanded-page-doctor-container05">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="appointment-expanded-page-doctor-icon04"
                      >
                        <path
                          d="M744.571 550.857l-292.571 292.571c-7.429 6.857-18.857 6.857-26.286 0l-164.571-164.571c-6.857-7.429-6.857-18.857 0-25.714l26.286-26.286c6.857-6.857 18.286-6.857 25.714 0l125.714 125.714 253.714-253.714c7.429-6.857 18.857-6.857 25.714 0l26.286 26.286c6.857 6.857 6.857 18.286 0 25.714zM73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                        ></path>
                      </svg>
                    </div>
                    <span class="appointment-expanded-page-doctor-text02">
                      View Appointments
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="enter-lab-results-doctor.php"
                class="appointment-expanded-page-doctor-navlink2"
              >
                <div class="appointment-expanded-page-doctor-enter-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="appointment-expanded-page-doctor-icon06"
                  >
                    <path
                      d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                    ></path>
                  </svg>
                  <span class="appointment-expanded-page-doctor-text03">
                    <span>Enter Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="user-profile-doctor.php"
                class="appointment-expanded-page-doctor-navlink3"
              >
                <div class="appointment-expanded-page-doctor-profile">
                  <svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="appointment-expanded-page-doctor-icon08"
                  >
                    <path
                      d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                    ></path>
                  </svg>
                  <span class="appointment-expanded-page-doctor-text06">
                    <span>Profile</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="login-doctor.php"
                class="appointment-expanded-page-doctor-navlink4 logout"
              >
                <div class="appointment-expanded-page-doctor-logout">
                  <div class="appointment-expanded-page-doctor-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="appointment-expanded-page-doctor-icon10"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="appointment-expanded-page-doctor-container07">
                    <span class="appointment-expanded-page-doctor-text09">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="appointment-expanded-page-doctor-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="appointment-expanded-page-doctor-image1"
                         />';?>
              <div class="appointment-expanded-page-doctor-container08">
                <span class="appointment-expanded-page-doctor-text12">
                  <?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?>
                </span>
                <span class="appointment-expanded-page-doctor-text13">
                  Doctor
                </span>
              </div>
            </div>
          </div>
          <div class="appointment-expanded-page-doctor-main-body-container">
            <div class="appointment-expanded-page-doctor-header-container">
              <span class="appointment-expanded-page-doctor-patient-portal-txt">
                Doctor Portal System&nbsp;
              </span>
              <div class="appointment-expanded-page-doctor-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="appointment-expanded-page-doctor-image2"
                />
                <a
                  href="view-appointments-doctor.php"
                  class="appointment-expanded-page-doctor-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="appointment-expanded-page-doctor-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="appointment-expanded-page-doctor-image4"
                />
              </div>
            </div>
            <div class="appointment-expanded-page-doctor-container09">
              <div class="appointment-expanded-page-doctor-container10">
                <div class="appointment-expanded-page-doctor-container11">
                  <div
                    class="appointment-expanded-page-doctor-doctor-view-appntmnts-form-container"
                  >
                    <form
                      class="appointment-expanded-page-doctor-patient-appntmnt-details-form" method="POST" action="<?php $_PHP_SELF ?>">
                    <?php
                     include 'Function/db.php';
                     if (isset($_GET['Appointment-ID'])) 
                      {
                        $appointment_id = $_GET['Appointment-ID'];
                        $sql = "SELECT * FROM appointments WHERE appointment_id='$appointment_id'";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result))

                      {

                    ?>
                      <div class="appointment-expanded-page-doctor-container12">
                        <span
                          class="appointment-expanded-page-doctor-cnfrm-appointment-txt"
                        >
                          Patient Appointment Details
                        </span>
                      </div>
                      <div class="appointment-expanded-page-doctor-container13">
                        <span class="appointment-expanded-page-doctor-text14">
                          <span>Name of Patient</span>
                          <br />
                        </span>
                        <input
                          type="email"
                          name="PatientName"
                          placeholder="Patient N. Name"
                          value ="<?= $row['First_Name' ]," " ,$row['Middle_Name']," " ,$row['Last_Name'] ?>"
                          class="appointment-expanded-page-doctor-textinput input"
                          readonly
                        />
                      </div>
                      <div class="appointment-expanded-page-doctor-container14">
                        <span class="appointment-expanded-page-doctor-text17">
                          Date/Time
                        </span>
                        <input
                          type="text"
                          name="DateTime"
                          placeholder="04/062022 12:50 PM"
                          value ="<?= $row['appointment_date']," @ " ,$row['appointment_time']?>"
                          class="appointment-expanded-page-doctor-textinput1 input"
                          readonly
                        />
                      </div>
                      <div class="appointment-expanded-page-doctor-container15">
                        <span class="appointment-expanded-page-doctor-text18">
                          Reason of Appointment
                        </span>
                        <textarea
                          type ="text"
                          name="PatientReason"
                          rows="4"
                          readonly
                          class="appointment-expanded-page-doctor-textarea textarea"><?= $row['appointment_reason']?></textarea>
                        
                      </div>
                      <div
                        class="appointment-expanded-page-doctor-back2page-container"
                      >
                        <a
                          href="view-appointments-doctor.php"
                          class="appointment-expanded-page-doctor-date-txt"
                        >
                          Back to page
                        </a>
                        <a
                          href="view-appointments-doctor.php"
                          class="appointment-expanded-page-doctor-navlink6"
                        >
                          <svg
                            viewBox="0 0 1024 1024"
                            class="appointment-expanded-page-doctor-icon12"
                          >
                            <path
                              d="M854 470v84h-520l238 240-60 60-342-342 342-342 60 60-238 240h520z"
                            ></path>
                          </svg>
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="appointment-expanded-page-doctor-notes-container">
                  <form class="appointment-expanded-page-doctor-form" method="POST" action="<?php $_PHP_SELF ?>">
                    <div class="appointment-expanded-page-doctor-container16">
                       <input type="hidden" name="appointment_id" value ="<?= $row['appointment_id' ]?>"/>
                      <span
                        class="appointment-expanded-page-doctor-patient-name-txt"
                      >
                        <span>Notes</span>
                        <br />
                      </span>
                      <textarea name="doctors_note" placeholder="Write something here" value ="<?= $row['doctors_note']?>" class="appointment-expanded-page-doctor-textarea1 textarea"><?= $row['doctors_note']?></textarea>
                      <div class="appointment-expanded-page-doctor-container17">
                        <div
                          class="appointment-expanded-page-doctor-container18"
                        >
                          <svg
                            viewBox="0 0 1024.5851428571427 1024"
                            class="appointment-expanded-page-doctor-icon14"
                          >
                            <path
                              d="M507.429 676.571l66.286-66.286-86.857-86.857-66.286 66.286v32h54.857v54.857h32zM758.857 265.143c-5.143-5.143-13.714-4.571-18.857 0.571l-200 200c-5.143 5.143-5.714 13.714-0.571 18.857s13.714 4.571 18.857-0.571l200-200c5.143-5.143 5.714-13.714 0.571-18.857zM804.571 604.571v108.571c0 90.857-73.714 164.571-164.571 164.571h-475.429c-90.857 0-164.571-73.714-164.571-164.571v-475.429c0-90.857 73.714-164.571 164.571-164.571h475.429c22.857 0 45.714 4.571 66.857 14.286 5.143 2.286 9.143 7.429 10.286 13.143 1.143 6.286-0.571 12-5.143 16.571l-28 28c-5.143 5.143-12 6.857-18.286 4.571-8.571-2.286-17.143-3.429-25.714-3.429h-475.429c-50.286 0-91.429 41.143-91.429 91.429v475.429c0 50.286 41.143 91.429 91.429 91.429h475.429c50.286 0 91.429-41.143 91.429-91.429v-72c0-4.571 1.714-9.143 5.143-12.571l36.571-36.571c5.714-5.714 13.143-6.857 20-4s11.429 9.143 11.429 16.571zM749.714 182.857l164.571 164.571-384 384h-164.571v-164.571zM1003.429 258.286l-52.571 52.571-164.571-164.571 52.571-52.571c21.143-21.143 56.571-21.143 77.714 0l86.857 86.857c21.143 21.143 21.143 56.571 0 77.714z"
                            ></path>
                          </svg>
                          <div
                            class="appointment-expanded-page-doctor-container19"
                          >
                            <div
                              class="appointment-expanded-page-doctor-container20"
                            >
                              <span
                                class="appointment-expanded-page-doctor-patient-name-txt1"
                              >
                                Notes for the Patient
                              </span>
                              <span
                                class="appointment-expanded-page-doctor-text21"
                              >
                                <?php echo $date ?>
                              </span>
                            </div>
                          </div>
                        </div>
                        <input type="submit" name="SaveNote" 
                          class="appointment-expanded-page-doctor-button button appointment-expanded-page-doctor-text22" value="Save Note" 
                        >

                            <br />
                      </div>
                    </div>
                  </form>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
     }
   }

            ?>
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