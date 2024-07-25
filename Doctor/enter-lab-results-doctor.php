<?php
include 'Function/DoctorProfileFunction.php';
include 'Function/Search.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Doctor | Enter Lab Results</title>
    <meta
      property="og:title"
      content="EnterLabResults-Doctor - WellTech Care"
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
      <link href="./enter-lab-results-doctor.css" rel="stylesheet" />

      <div class="enter-lab-results-doctor-container">
        <div
          class="enter-lab-results-doctor-doctor-enter-results-body-container"
        >
          <div class="enter-lab-results-doctor-sidebar">
            <div class="enter-lab-results-doctor-logo-container">
              <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="enter-lab-results-doctor-image"
              />
              <div class="enter-lab-results-doctor-container01">
                <span class="enter-lab-results-doctor-logo-text">
                  WellTech Care
                </span>
                <span class="enter-lab-results-doctor-text">
                  Physical &amp; Health Care
                </span>
              </div>
              <svg
                viewBox="0 0 1024 1024"
                class="enter-lab-results-doctor-icon"
              >
                <path
                  d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                ></path>
              </svg>
            </div>
            <nav class="enter-lab-results-doctor-nav">
              <a
                href="doctor-portal-home.php"
                class="enter-lab-results-doctor-navlink"
              >
                <div class="enter-lab-results-doctor-container02">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="enter-lab-results-doctor-icon02"
                  >
                    <path
                      d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                    ></path>
                  </svg>
                  <span class="enter-lab-results-doctor-text01">Dashboard</span>
                </div>
              </a>
              <div class="enter-lab-results-doctor-container03">
                <a
                  href="view-appointments-doctor.php"
                  class="enter-lab-results-doctor-navlink1"
                >
                  <div class="enter-lab-results-doctor-container04">
                    <div class="enter-lab-results-doctor-container05">
                      <svg
                        viewBox="0 0 950.8571428571428 1024"
                        class="enter-lab-results-doctor-icon04"
                      >
                        <path
                          d="M744.571 550.857l-292.571 292.571c-7.429 6.857-18.857 6.857-26.286 0l-164.571-164.571c-6.857-7.429-6.857-18.857 0-25.714l26.286-26.286c6.857-6.857 18.286-6.857 25.714 0l125.714 125.714 253.714-253.714c7.429-6.857 18.857-6.857 25.714 0l26.286 26.286c6.857 6.857 6.857 18.286 0 25.714zM73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                        ></path>
                      </svg>
                    </div>
                    <span class="enter-lab-results-doctor-text02">
                      View Appointments
                    </span>
                  </div>
                </a>
              </div>
              <a
                href="enter-lab-results-doctor.php"
                class="enter-lab-results-doctor-navlink2"
              >
                <div class="enter-lab-results-doctor-enter-results">
                  <svg
                    viewBox="0 0 1024 1024"
                    class="enter-lab-results-doctor-icon06"
                  >
                    <path
                      d="M956.29 804.482l-316.29-527.024v-213.458h32c17.6 0 32-14.4 32-32s-14.4-32-32-32h-320c-17.6 0-32 14.4-32 32s14.4 32 32 32h32v213.458l-316.288 527.024c-72.442 120.734-16.512 219.518 124.288 219.518h640c140.8 0 196.73-98.784 124.29-219.518zM241.038 640l206.962-344.938v-231.062h128v231.062l206.964 344.938h-541.926z"
                    ></path>
                  </svg>
                  <span class="enter-lab-results-doctor-text03">
                    <span>Enter Results</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="user-profile-doctor.php"
                class="enter-lab-results-doctor-navlink3"
              >
                <div class="enter-lab-results-doctor-profile">
                  <svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="enter-lab-results-doctor-icon08"
                  >
                    <path
                      d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
                    ></path>
                  </svg>
                  <span class="enter-lab-results-doctor-text06">
                    <span>Profile</span>
                    <br />
                  </span>
                </div>
              </a>
              <a
                href="login-doctor.php"
                class="enter-lab-results-doctor-navlink4 logout"
              >
                <div class="enter-lab-results-doctor-logout">
                  <div class="enter-lab-results-doctor-container06">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="enter-lab-results-doctor-icon10"
                    >
                      <path
                        d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                      ></path>
                    </svg>
                  </div>
                  <div class="enter-lab-results-doctor-container07">
                    <span class="enter-lab-results-doctor-text09">
                      <span>Logout</span>
                      <br />
                    </span>
                  </div>
                </div>
              </a>
            </nav>
            <div class="enter-lab-results-doctor-profile1">
              <?php echo '<img src="data:image;base64,'.base64_encode( $doctor_image ).'"class="enter-lab-results-doctor-image1"
                         />';?>
              <div class="enter-lab-results-doctor-container08">
                <span class="enter-lab-results-doctor-text12">
                  <?php echo $doctor_firstname," ", $doctor_middleinitial," ", $doctor_lastname?>
                </span>
                <span class="enter-lab-results-doctor-text13">Doctor</span>
              </div>
            </div>
          </div>
          <div class="enter-lab-results-doctor-main-body-container">
            <div class="enter-lab-results-doctor-header-container">
              <span class="enter-lab-results-doctor-patient-portal-txt">
                Doctor Portal System&nbsp;
              </span>
              <div class="enter-lab-results-doctor-icons-container">
                <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="enter-lab-results-doctor-image2"
                />
                <a
                  href="view-appointments-doctor.php"
                  class="enter-lab-results-doctor-navlink5"
                >
                  <img
                    alt="image"
                    src="public/playground_assets/plus%20%5B4%5D-200h.png"
                    class="enter-lab-results-doctor-image3"
                  />
                </a>
                <img
                  alt="image"
                  src="public/playground_assets/bell%20%5B2%5D-200h.png"
                  class="enter-lab-results-doctor-image4"
                />
              </div>
            </div>
            <div class="enter-lab-results-doctor-container09">
              <div class="enter-lab-results-doctor-container10">
                <div class="enter-lab-results-doctor-container11">
                  <div
                    class="enter-lab-results-doctor-doctor-view-appntmnts-form-container"
                  >
                    <div class="enter-lab-results-doctor-container12">
                      <span
                        class="enter-lab-results-doctor-cnfrm-appointment-txt"
                      >
                      <form method="POST" action="">
                        Laboratory Results
                      </span>
                    </div>
                    
                    <div class="enter-lab-results-doctor-container13">
                      <input
                        name="search"
                        type="submit"
                        class="enter-lab-results-doctor-clear-btn button" style="margin-right: 8px;"
                        value ="Search"
                      >
                        
                      <input
                        type="text"
                        name="valueToSearch"
                        placeholder="Search here..."
                        class="enter-lab-results-doctor-textinput input"
                      />
                    </div>
                  </form>
                    <div class="enter-lab-results-doctor-html-node">
                      <style>

                        .svgcolor {
                            fill: #2eb1d6;
                            padding-top: 0px;

                        }

                        .svgcolor:hover {
                            fill: #378DBD;
                        }

                        .button {
                            background-color: none;
                            border: 0px solid #2eb1d6;
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
                            border: 0px solid #378DBD;
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

                                <!-- Header design -->
                                <tbody>
                                  <tr style="background-color: #0C234B;">
                                    <td
                                      style="padding: 16px; font-size: 14px; color: #F2F2F2; font-family: 'Exo 2', sans-serif; font-weight: 600; text-align: center"
                                    >
                                      PatientID
                                    </td>
                                    <td
                                      width="20%"
                                      style="padding: 16px; font-size: 14px; color: #F2F2F2; font-family: 'Exo 2', sans-serif; font-weight: 600;"
                                    >
                                      Name of Patient
                                    </td>
                                    <td
                                      width=""
                                      style="font-size: 14px; color: #F2F2F2; font-family: 'Exo 2', sans-serif; font-weight: 600; text-align: center"
                                    ></td>
                                  </tr>
                                  <?php
                                    include 'Function/db.php';
                                    $doctor_username = $_COOKIE['DoctorUsername'];
                                    $stmt = $conn->prepare("SELECT * FROM appointments WHERE doctor_username='$doctor_username' AND appointment_status='Approve'");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $search_result->fetch_assoc()):
                                  ?> 
                                  <!-- Record design -->
                                  <tr style="border-top: 1px solid #CED5E0;">
                                    <td
                                      width="40%"
                                      style="padding-left: 20px; padding-right: 20px; padding-top: 10px;  padding-bottom: 10px; text-align: center"
                                    >
                                      <font
                                        style="font-family: 'Inter', sans-serif; font-size: 13px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;"
                                      >
                                       <?= $row['Patient_ID'] ?>
                                      </font>
                                    </td>
                                    <td
                                      width="40%"
                                      style=" padding-left: 20px; padding-right: 20px; padding-top: 10px;  padding-bottom: 10px;"
                                    >
                                      <font
                                        style="font-family: 'Inter', sans-serif; font-size: 13px; color: #4C5A7A; line-height: 2; letter-spacing: -1px;"
                                      >
                                         <?= $row['First_Name']," ", $row['Middle_Name']," ", $row['Last_Name'] ?>
                                      </font>
                                    </td>
                                    <td
                                      align="center"
                                      width="20%"
                                      style="padding-left: 20px; padding-right: 20px"
                                    >
                                      <a href="lab-results-page-doctor.php?Patient-ID=<?= $row['Patient_ID'] ?>&Appointment-ID=<?= $row['appointment_id'] ?>" class="button">
                                        <svg
                                          width="18px"
                                          height="18px"
                                          viewBox="0 0 36 36"
                                          version="1.1"
                                          preserveAspectRatio="xMidYMid meet"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          class="svgcolor"
                                        >
                                          <path
                                            d="M28,30H6V8H19.22l2-2H6A2,2,0,0,0,4,8V30a2,2,0,0,0,2,2H28a2,2,0,0,0,2-2V15l-2,2Z"
                                            class="clr-i-outline clr-i-outline-path-1"
                                          ></path>
                                          <path
                                            d="M33.53,5.84,30.16,2.47a1.61,1.61,0,0,0-2.28,0L14.17,16.26l-1.11,4.81A1.61,1.61,0,0,0,14.63,23,1.69,1.69,0,0,0,15,23l4.85-1.07L33.53,8.12A1.61,1.61,0,0,0,33.53,5.84ZM18.81,20.08l-3.66.81L16,17.26,26.32,6.87l2.82,2.82ZM30.27,8.56,27.45,5.74,29,4.16,31.84,7Z"
                                            class="clr-i-outline clr-i-outline-path-2"
                                          ></path>
                                          <rect
                                            x="0"
                                            y="0"
                                            width="36"
                                            height="36"
                                            fill-opacity="0"
                                          ></rect>
                                        </svg>
                                        &nbsp;Edit Results
                                      </a>
                                    </td>
                                  </tr><?php endwhile; ?>
                                  <!-- End of record design -->
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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