<?php   
include ('Function/PatientPortalFunction.php');
include ('Function/SearchLabResult.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Patient | Your Laboratory Results</title>
    <meta property="og:title" content="LaboratoryResults - WellTech Care" />

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
      <link href="./laboratory-results.css" rel="stylesheet" />

      <div class="laboratory-results-container">
        <div class="laboratory-results-appnmnt-history-body-container">
          <div class="laboratory-results-container01">
            <div class="laboratory-results-sidebar">
              <div class="laboratory-results-logo-container">
                <img
                  alt="image"
                  src="public/playground_assets/untitled%20design%20%5B2%5D-200h.png"
                  class="laboratory-results-image"
                />
                <div class="laboratory-results-container02">
                  <span class="laboratory-results-logo-text">
                    WellTech Care
                  </span>
                  <span class="laboratory-results-text">
                    Physical &amp; Health Care
                  </span>
                </div>
                <svg viewBox="0 0 1024 1024" class="laboratory-results-icon">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <nav class="laboratory-results-nav">
                <span class="laboratory-results-text01">MENU</span>
                <a
                  href="patient-portal-home.php"
                  class="laboratory-results-navlink"
                >
                  <div class="laboratory-results-home">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="laboratory-results-icon02"
                    >
                      <path
                        d="M949.845 446.635c-144.64-121.771-407.296-348.629-409.899-350.933l-27.947-24.021-27.819 24.021c-2.645 2.261-265.429 229.035-412.16 351.915-18.688 16.811-29.355 40.32-29.355 64.384 0 47.104 38.229 85.333 85.333 85.333h42.667v256c0 47.104 38.229 85.333 85.333 85.333h128 384c47.104 0 85.333-38.229 85.333-85.333v-256h42.667c47.104 0 85.333-38.229 85.333-85.333 0-25.515-11.733-49.536-31.488-65.365zM597.333 853.333h-170.667v-213.333h170.667v213.333zM768 512l0.085 341.333c-0.085 0-128.085 0-128.085 0v-256h-256v256h-128v-341.333h-128.043c117.973-98.645 312.107-265.685 384.043-327.68 71.936 61.995 265.984 228.992 384 327.723 0-0-128-0-128-0.043z"
                      ></path>
                    </svg>
                    <span class="laboratory-results-text02">Home</span>
                  </div>
                </a>
                <a
                  href="schedule-appointment.php"
                  class="laboratory-results-navlink1"
                >
                  <div class="laboratory-results-schedule-appointment">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="laboratory-results-icon04"
                    >
                      <path
                        d="M320 384h128v128h-128zM512 384h128v128h-128zM704 384h128v128h-128zM128 768h128v128h-128zM320 768h128v128h-128zM512 768h128v128h-128zM320 576h128v128h-128zM512 576h128v128h-128zM704 576h128v128h-128zM128 576h128v128h-128zM832 0v64h-128v-64h-448v64h-128v-64h-128v1024h960v-1024h-128zM896 960h-832v-704h832v704z"
                      ></path>
                    </svg>
                    <span class="laboratory-results-text03">
                      Schedule Appointment
                    </span>
                  </div>
                </a>
                <a
                  href="laboratory-results.php"
                  class="laboratory-results-navlink2"
                >
                  <div class="laboratory-results-container03">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="laboratory-results-icon06"
                    >
                      <path
                        d="M864 0h-768c-52.8 0-96 43.2-96 96v832c0 52.8 43.2 96 96 96h768c52.8 0 96-43.2 96-96v-832c0-52.8-43.2-96-96-96zM832 896h-704v-768h704v768zM256 576h448v64h-448zM256 704h448v64h-448zM320 288c0-53.019 42.981-96 96-96s96 42.981 96 96c0 53.019-42.981 96-96 96s-96-42.981-96-96zM480 384h-128c-52.8 0-96 28.8-96 64v64h320v-64c0-35.2-43.2-64-96-64z"
                      ></path>
                    </svg>
                    <span class="laboratory-results-text04">Lab Results</span>
                  </div>
                </a>
                <a
                  href="appointment-history.php"
                  class="laboratory-results-navlink3"
                >
                  <div class="laboratory-results-container04">
                    <div class="laboratory-results-container05">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="laboratory-results-icon08"
                      >
                        <path
                          d="M512 342h64v180l150 90-32 52-182-110v-212zM554 128q158 0 271 112t113 272-113 272-271 112q-66 0-145-33t-125-79l60-62q88 88 210 88 124 0 212-87t88-211-88-211-212-87-211 87-87 211h128l-172 172-4-6-166-166h128q0-160 113-272t271-112z"
                        ></path>
                      </svg>
                    </div>
                    <span class="laboratory-results-text05">
                      Appointment History
                    </span>
                  </div>
                </a>
                <span class="laboratory-results-text06">
                  <span>PREFERENCES</span>
                  <br />
                </span>
                <a
                  href="user-profile-patient.php"
                  class="laboratory-results-navlink4"
                >
                  <div class="laboratory-results-home1">
                    <img
                      alt="image"
                      src="public/playground_assets/user%20%5B1%5D-200h.png"
                      class="laboratory-results-image1"
                    />
                    <span class="laboratory-results-text09">
                      <span>Profile</span>
                      <br />
                    </span>
                  </div>
                </a>
                <a
                  href="login-patient.php"
                  class="laboratory-results-navlink5 logout"
                >
                  <div class="laboratory-results-profile">
                    <div class="laboratory-results-container06">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="laboratory-results-icon10"
                      >
                        <path
                          d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                        ></path>
                      </svg>
                    </div>
                    <div class="laboratory-results-container07">
                      <span class="laboratory-results-text12">
                        <span>Logout</span>
                        <br />
                      </span>
                    </div>
                  </div>
                </a>
              </nav>
            </div>
            <div class="laboratory-results-header-body-container">
              <div class="laboratory-results-header-container">
                <span class="laboratory-results-patient-portal-txt">
                  Patient Portal System&nbsp;
                </span>
                <div class="laboratory-results-icons-container">
                  <svg
                    viewBox="0 0 950.8571428571428 1024"
                    class="laboratory-results-icon12"
                  >
                    <path
                      d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                    ></path></svg
                  ><svg
                    viewBox="0 0 1024 1024"
                    class="laboratory-results-icon14"
                  >
                    <path
                      d="M768 682l86 86v42h-684v-42l86-86v-212q0-100 51-174t141-96v-30q0-26 18-45t46-19 46 19 18 45v30q90 22 141 96t51 174v212zM512 938q-36 0-61-24t-25-60h172q0 34-26 59t-60 25z"
                    ></path>
                  </svg>
                  <a
                    href="patient-portal-home.php"
                    class="laboratory-results-navlink6"
                  >
                    <svg
                      viewBox="0 0 1024 1024"
                      class="laboratory-results-icon16"
                    >
                      <path
                        d="M219.429 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM329.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM573.714 677.143l57.714-218.286c4.571-19.429-6.857-39.429-26.286-44.571v0c-19.429-5.143-39.429 6.857-44.571 26.286l-57.714 218.286c-45.143 3.429-84.571 34.857-97.143 81.143-15.429 58.857 20 118.857 78.286 134.286 58.857 15.429 118.857-20 134.286-78.286 12-46.286-7.429-93.143-44.571-118.857zM950.857 658.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM585.143 292.571c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM841.143 402.286c0-40.571-32.571-73.143-73.143-73.143s-73.143 32.571-73.143 73.143 32.571 73.143 73.143 73.143 73.143-32.571 73.143-73.143zM1024 658.286c0 98.286-28 193.143-80.571 276-6.857 10.286-18.286 16.571-30.857 16.571h-801.143c-12.571 0-24-6.286-30.857-16.571-52.571-82.286-80.571-177.714-80.571-276 0-282.286 229.714-512 512-512s512 229.714 512 512z"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <form class="laboratory-results-confirm-appntmnt-form" method="POST">
                <div class="laboratory-results-confirm-appntmnt-container">
                  <div class="laboratory-results-container08">
                    <div class="laboratory-results-container09">
                      <span class="laboratory-results-cnfrm-appointment-txt">
                        Lab Results
                      </span>
                    </div>
                  </div>
                  
                  <div class="laboratory-results-white-bg-container">
                    <div class="laboratory-results-container10">
                      <input
                        name="Patient_ID"
                        type="text" hidden
                        value = "<?php echo $Patient_ID?>"
                      >
                      <input
                        name="Search_Result"
                        type="submit"
                        value="Search"
                        class="laboratory-results-clear-btn button"  style="margin-top: 30px;"
                      >
                      <input
                        type="text"
                        name="valueToSearch"
                        placeholder="Search here..."
                        class="laboratory-results-textinput input"
                      />
                    </div>
                  </form>
                    <div class="laboratory-results-container11">
                      <div class="laboratory-results-html-node">
                        <style>
                          .button {
                              background-color: none;
                              border: 1px solid #2eb1d6;
                              color: #2eb1d6;
                              padding: 9px 16px;
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
                              background-color: none;
                              border: 1px solid #378DBD;
                              color: #378DBD;
                              padding: 9px 16px;
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
                        </style>

                        <table
                          style="width: 100%;  border: 1px solid #D9D9D9"
                          align="center"
                        >
                          <tbody>
                            <tr>
                              <td>
                                <table
                                  style="border-collapse: collapse; width: 100%;"
                                >
                                  <tbody>
                                    <tr style="background-color: #F2F2F2;">
                                      <td
                                        width="40%"
                                        style="padding: 16px; font-size: 14px; color: #0C234B; font-family: 'Exo 2', sans-serif; font-weight: 600"
                                      >
                                        Problem
                                      </td>
                                      <td
                                        width="20%"
                                        style="font-size: 14px; color: #0C234B; font-family: 'Exo 2', sans-serif; font-weight: 600; text-align: right"
                                      >
                                        Time Diagnosed
                                      </td>
                                      <td
                                        width="20%"
                                        style=" font-size: 14px; color: #0C234B; font-family: 'Exo 2', sans-serif; font-weight: 600; text-align: right"
                                      >
                                        Doctor
                                      </td>
                                      <td width="20%"></td>
                                    </tr>
                                    <?php
                                    include 'Function/db.php';
                                    $Patient_ID = $Patient_ID;
                                    $stmt = $conn->prepare("SELECT * FROM appointments WHERE Patient_ID='$Patient_ID' AND appointment_status='Result Sent'");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $search_result->fetch_assoc()):
                                  ?> 
                                    <tr style="border-top: 1px solid #CED5E0;">
                                      <td
                                        width="40%"
                                        style="padding-left: 20px; padding-right: 20px; padding-top: 10px;  padding-bottom: 10px;"
                                      >
                                        <font
                                          style="font-family: 'Lato', sans-serif; font-size: 14px; color: #4C5A7A; line-height: 2;"
                                        >
                                          <?= $row['appointment_reason'] ?>
                                        </font>
                                      </td>
                                      <td width="20%" style="text-align:right">
                                        <font
                                          style="font-family: 'Lato', sans-serif; font-size: 14px; color: #4C5A7A; line-height: 2;"
                                        >
                                          <?= $row['date'] ?>
                                          <br>
                                          <?= $row['time'] ?>
                                        </font>
                                      </td>
                                      <td width="20%" style="text-align: right">
                                        <font
                                          style="font-size: 14px; color: #4C5A7A; font-family: 'Lato', sans-serif; "
                                        >
                                          <?= $row['doctor_firstname'] ?>
                                          <br />
                                          <?= $row['doctor_middleinitial'],". ", $row['doctor_lastname'] ?>
                                        </font>
                                      </td>
                                      <td
                                        align="center"
                                        width="20%"
                                        style="padding-left: 20px; padding-right: 20px"
                                      >
                                        <a href="view-lab-results.php?Patient-ID=<?= $row['Patient_ID'] ?>&Appointment-ID=<?= $row['appointment_id'] ?>" class="button">
                                          View Results
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody><?php endwhile; ?>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="laboratory-results-p-name-header-container">
            <div class="laboratory-results-profile-header-container">
              <div class="laboratory-results-profile-menu-container">
   
                 <?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'
                 "class="laboratory-results-patient-pic-header"/>';?>
                <div class="laboratory-results-profile-name-container">
                  <span class="laboratory-results-patient-name-header">
                     <?php echo $First_Name,' ',$Last_Name ?>
                  </span>
                  <span class="laboratory-results-patient-txt-header">
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