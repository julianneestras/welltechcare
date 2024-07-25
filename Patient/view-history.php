<?php
include ('Function/PatientPortalFunction.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Patient | Your Appointment History</title>
    <meta property="og:title" content="ViewHistory - WellTech Care" />

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
      <link href="./view-history.css" rel="stylesheet" />
      <div class="view-history-container">
        <div class="view-history-confirm-body-container">
          <div class="view-history-container01">
            <div class="view-history-sidebar">
              <div class="view-history-logo-container">
                <img
                alt="image"
                src="public/playground_assets/untitled%20design%20%5B2%5D-200h.png"
                class="view-history-image"
              />
                <div class="view-history-container02">
                  <span class="view-history-logo-text">WellTech Care</span>
                  <span class="view-history-text">Physical &amp; Health Care</span>
                </div>
                <svg viewBox="0 0 1024 1024" class="view-history-icon">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <nav class="view-history-nav">
                <span class="view-history-text01">MENU</span>
                <a href="patient-portal-home.php" class="view-history-navlink">
                  <div class="view-history-home">
                    <svg viewBox="0 0 1024 1024" class="view-history-icon02">
                      <path
                        d="M949.845 446.635c-144.64-121.771-407.296-348.629-409.899-350.933l-27.947-24.021-27.819 24.021c-2.645 2.261-265.429 229.035-412.16 351.915-18.688 16.811-29.355 40.32-29.355 64.384 0 47.104 38.229 85.333 85.333 85.333h42.667v256c0 47.104 38.229 85.333 85.333 85.333h128 384c47.104 0 85.333-38.229 85.333-85.333v-256h42.667c47.104 0 85.333-38.229 85.333-85.333 0-25.515-11.733-49.536-31.488-65.365zM597.333 853.333h-170.667v-213.333h170.667v213.333zM768 512l0.085 341.333c-0.085 0-128.085 0-128.085 0v-256h-256v256h-128v-341.333h-128.043c117.973-98.645 312.107-265.685 384.043-327.68 71.936 61.995 265.984 228.992 384 327.723 0-0-128-0-128-0.043z"
                      ></path>
                    </svg>
                    <span class="view-history-text02">Home</span>
                  </div>
                </a>
                <a href="schedule-appointment.php" class="view-history-navlink1">
                  <div class="view-history-schedule-appointment">
                    <svg viewBox="0 0 1024 1024" class="view-history-icon04">
                      <path
                        d="M320 384h128v128h-128zM512 384h128v128h-128zM704 384h128v128h-128zM128 768h128v128h-128zM320 768h128v128h-128zM512 768h128v128h-128zM320 576h128v128h-128zM512 576h128v128h-128zM704 576h128v128h-128zM128 576h128v128h-128zM832 0v64h-128v-64h-448v64h-128v-64h-128v1024h960v-1024h-128zM896 960h-832v-704h832v704z"
                      ></path>
                    </svg>
                    <span class="view-history-text03">Schedule Appointment</span>
                  </div>
                </a>
                <a href="laboratory-results.php" class="view-history-navlink2">
                  <div class="view-history-container03">
                    <svg viewBox="0 0 1024 1024" class="view-history-icon06">
                      <path
                        d="M864 0h-768c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h768c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM832 896h-704v-768h704v768zM256 576h448v64h-448zM256 704h448v64h-448zM320 288c0-53.019 42.981-96 96-96s96 42.981 96 96c0 53.019-42.981 96-96 96s-96-42.981-96-96zM480 384h-128c-52.8 0-96 28.8-96 64v64h320v-64c0-35.2-43.2-64-96-64z"
                      ></path>
                    </svg>
                    <span class="view-history-text04">Lab Results</span>
                  </div>
                </a>
                <a href="appointment-history.php" class="view-history-navlink3">
                  <div class="view-history-container04">
                    <div class="view-history-container05">
                      <svg viewBox="0 0 1024 1024" class="view-history-icon08">
                        <path
                          d="M512 342h64v180l150 90-32 52-182-110v-212zM554 128q158 0 271 112t113 272-113 272-271 112q-66 0-145-33t-125-79l60-62q88 88 210 88 124 0 212-87t88-211-88-211-212-87-211 87-87 211h128l-172 172-4-6-166-166h128q0-160 113-272t271-112z"
                        ></path>
                      </svg>
                    </div>
                    <span class="view-history-text05">Appointment History</span>
                  </div>
                </a>
                <span class="view-history-text06">
                  <span>PREFERENCES</span>
                  <br />
                </span>
                  <a
                  href="user-profile-patient.php"
                  class="view-history-navlink4"
                >
                  <div class="view-history-home1">
                    <img
                      alt="image"
                      src="public/playground_assets/user%20%5B1%5D-200h.png"
                      class="view-history-image1"
                    />
                    <span class="view-history-text09">
                      <span>Profile</span>
                      <br />
                    </span>
                  </div>
                </a>
                <a href="login-patient.php" class="view-history-navlink5 logout">
                  <div class="view-history-profile">
                    <div class="view-history-container06">
                      <svg viewBox="0 0 1024 1024" class="view-history-icon10">
                        <path
                          d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                        ></path>
                      </svg>
                    </div>
                    <div class="view-history-container07">
                      <span class="view-history-text12">
                        <span>Logout</span>
                        <br />
                      </span>
                    </div>
                  </div>
                </a>
              </nav>
            </div>
            <div class="view-history-header-body-container">
              <div class="view-history-header-container">
                <span class="view-history-patient-portal-txt">
                  Patient Portal System 
                </span>
                <div class="view-history-icons-container">
                  <svg
                    viewBox="0 0 950.8571428571428 1024"
                    class="view-history-icon12"
                  >
                    <path
                      d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                    ></path></svg
                  ><svg viewBox="0 0 1024 1024" class="view-history-icon14">
                    <path
                      d="M768 682l86 86v42h-684v-42l86-86v-212q0-100 51-174t141-96v-30q0-26 18-45t46-19 46 19 18 45v30q90 22 141 96t51 174v212zM512 938q-36 0-61-24t-25-60h172q0 34-26 59t-60 25z"
                    ></path>
                  </svg>
                  <a href="patient-portal-home.php" class="view-history-navlink6">
                    <svg viewBox="0 0 1024 1024" class="view-history-icon16">
                      <path
                        d="M219.429 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM329.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM573.714 677.143l57.714-218.286c4.571-19.429-6.857-39.429-26.286-44.571v0c-19.429-5.143-39.429 6.857-44.571 26.286l-57.714 218.286c-45.143 3.429-84.571 34.857-97.143 81.143-15.429 58.857 20 118.857 78.286 134.286 58.857 15.429 118.857-20 134.286-78.286 12-46.286-7.429-93.143-44.571-118.857zM950.857 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM585.143 292.571c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM841.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM1024 658.286c0 98.286-28 193.143-80.571 276-6.857 10.286-18.286 16.571-30.857 16.571h-801.143c-12.571 0-24-6.286-30.857-16.571-52.571-82.286-80.571-177.714-80.571-276 0-282.286 229.714-512 512-512s512 229.714 512 512z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <form class="view-history-confirm-appntmnt-form">
                <div class="view-history-confirm-appntmnt-container">
                  <div class="view-history-white-bg-container">
                    <div class="view-history-container08">
                      <div class="view-history-back2page-container">
                        <a
                          href="appointment-history.php"
                          class="view-history-navlink7"
                        >
                          <svg viewBox="0 0 1024 1024" class="view-history-icon18">
                            <path
                              d="M854 470v84h-520l238 240-60 60-342-342 342-342 60 60-238 240h520z"
                            ></path>
                          </svg>
                        </a>
                        <a
                          href="appointment-history.php"
                          class="view-history-date-txt"
                        >
                          Back to page
                        </a>
                      </div>
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
                      <span class="view-history-cnfrm-appointment-txt">
                        Your Appointment History
                      </span>
                      <div class="view-history-container09">
                        <div class="view-history-right-side-container">
                          <div class="view-history-container10">
                            <div class="view-history-container11">
                              <div class="view-history-container12">
                                <span class="view-history-text15">
                                  <span>Doctor</span>
                                  <br />
                                </span>
                                <span class="view-history-doc-name-txt">
                                  <?= "Dr. ",$row['doctor_firstname' ]," " ,$row['doctor_middleinitial']," " ,$row['doctor_lastname'] ?>
                                </span>
                              </div>
                              <div class="view-history-clinic-sched-txt">
                                <span class="view-history-text18">
                                  <span>Clinic Schedule</span>
                                  <br />
                                </span>
                                <span class="view-history-clinic-sched-txt1">
                                  <span><?= $row['appointment_date']?></span>
                                  <br />
                                  <span><?= $row['appointment_time']?></span>
                                </span>
                              </div>
                              <div class="view-history-contact-txt">
                                <span class="view-history-text24">
                                  <span>Contact Details</span>
                                  <br />
                                </span>
                                <span class="view-history-contact-doc-txt">
                                  <span><?= $row['doctor_contactno']?></span>
                                  <br />
                                  <span><?= $row['doctor_email']?></span>
                                </span>
                              </div>
                            </div>
                          </div>
                        <!--   <img
                            alt="image"
                            src="https://play.teleporthq.io/static/svg/default-img.svg"
                            class="view-history-doctor-pic-history"
                          /> -->

                        </div>
                        <div class="view-history-right-side-container1">
                          <div class="view-history-container13">
                            <div class="view-history-container14">
                              <svg
                                viewBox="0 0 950.8571428571428 1024"
                                class="view-history-icon20"
                              >
                                <path
                                  d="M73.143 950.857h164.571v-164.571h-164.571v164.571zM274.286 950.857h182.857v-164.571h-182.857v164.571zM73.143 749.714h164.571v-182.857h-164.571v182.857zM274.286 749.714h182.857v-182.857h-182.857v182.857zM73.143 530.286h164.571v-164.571h-164.571v164.571zM493.714 950.857h182.857v-164.571h-182.857v164.571zM274.286 530.286h182.857v-164.571h-182.857v164.571zM713.143 950.857h164.571v-164.571h-164.571v164.571zM493.714 749.714h182.857v-182.857h-182.857v182.857zM292.571 256v-164.571c0-9.714-8.571-18.286-18.286-18.286h-36.571c-9.714 0-18.286 8.571-18.286 18.286v164.571c0 9.714 8.571 18.286 18.286 18.286h36.571c9.714 0 18.286-8.571 18.286-18.286zM713.143 749.714h164.571v-182.857h-164.571v182.857zM493.714 530.286h182.857v-164.571h-182.857v164.571zM713.143 530.286h164.571v-164.571h-164.571v164.571zM731.429 256v-164.571c0-9.714-8.571-18.286-18.286-18.286h-36.571c-9.714 0-18.286 8.571-18.286 18.286v164.571c0 9.714 8.571 18.286 18.286 18.286h36.571c9.714 0 18.286-8.571 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                                ></path>
                              </svg>
                              <span class="view-history-appntmnt-txt">
                                Appointments
                              </span>
                            </div>
                            <div class="view-history-container15">
                              <span class="view-history-text30">STATUS</span>
                              <input
                                type="text"
                                name="Age"
                                enctype="Age *"
                                disabled
                                value = "<?= $row['appointment_status']?>"
                                placeholder="Approved"
                                class="view-history-textinput input"
                              />
                            </div>
                          </div>
                          <div class="view-history-container16">
                            <div class="view-history-container17">
                              <div class="view-history-container18">
                                <svg
                                  viewBox="0 0 1024 1024"
                                  class="view-history-icon22"
                                >
                                  <path
                                    d="M726 554v-84h-172v-172h-84v172h-172v84h172v172h84v-172h172zM810 128q34 0 60 26t26 60v596q0 34-26 60t-60 26h-596q-36 0-61-25t-25-61v-596q0-36 25-61t61-25h596z"
                                  ></path>
                                </svg>
                                <a
                                  href="appointment-summary.php?Appointment-ID=<?= $row['appointment_id'] ?>"
                                  name="CnfrmBtn"
                                  class="view-history-cnfrm-btn button"
                                >
                                  <span class="view-history-text31">
                                    <span>More Details</span>
                                    <br />
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <span class="view-history-patient-name-txt">
                            Result Received on:
                          </span>
                          <span class="view-history-date-txt1">
                            <?= $row['completed_date'] ?>
                          </span>
                          
                          <div class="view-history-separator"></div>
                          <div class="view-history-clinic-sched-txt2">
                            <span class="view-history-text36">
                              <span>Reason/Description</span>
                              <br />
                            </span>
                            <span class="view-history-reason-txt">
                              <?= $row['appointment_reason']?>  
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <?php
     }
   }

            ?>
          <div class="view-history-p-name-header-container">
            <div class="view-history-profile-header-container">
              <div class="view-history-profile-menu-container">

                <?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'"class="view-history-patient-pic-header"
                        /><br />';?> 


                <div class="view-history-profile-name-container">
                  <span class="view-history-patient-name-header"><?php echo $First_Name,' ',$Last_Name ?></span>
                  <span class="view-history-patient-txt-header">Patient</span>
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