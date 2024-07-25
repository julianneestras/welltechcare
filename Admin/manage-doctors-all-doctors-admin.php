<?php 
include 'Function/AdminProfileFunction.php';
include 'Function/db.php';
include 'Function/EditDoctorPerPage.php';
 if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 1;
    $start_from = ($page-1)*1;
    
    $query = "SELECT * FROM doctor_account limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="/public/playground_assets/logogumanaka.png">
    <title>WellTech Care - Admin | Manage Doctors</title>
    <meta
      property="og:title"
      content="Manage-Doctors-All-Doctors-Admin - Copy of Copy of WellTech Care"
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
  <script
    type="text/javascript"
    src="https://unpkg.com/dangerous-html@0.1.11/dist/default/lib.umd.js"
  ></script>
  <link href="./manage-doctors-all-doctors-admin.css" rel="stylesheet" />
  <div class="manage-doctors-all-doctors-admin-container">
    <div
      class="manage-doctors-all-doctors-admin-admin-manage-doctors-per-page-container"
    >
      <div class="manage-doctors-all-doctors-admin-sidebar">
        <div class="manage-doctors-all-doctors-admin-logo-container">
          <img
                alt="image"
                src="public/playground_assets/logo-200h.png"
                class="manage-doctors-all-doctors-admin-image"
              />
          <div class="manage-doctors-all-doctors-admin-container01">
            <span class="manage-doctors-all-doctors-admin-logo-text">
              WellTech Care
            </span>
            <span class="manage-doctors-all-doctors-admin-text">
              Physical &amp; Health Care
            </span>
          </div>
          <svg
            viewBox="0 0 1024 1024"
            class="manage-doctors-all-doctors-admin-icon"
          >
            <path
              d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
            ></path>
          </svg>
        </div>
        <nav class="manage-doctors-all-doctors-admin-nav">
          <a
            href="admin-portal-home.php"
            class="manage-doctors-all-doctors-admin-navlink"
          >
            <div class="manage-doctors-all-doctors-admin-container02">
              <svg
                viewBox="0 0 1024 1024"
                class="manage-doctors-all-doctors-admin-icon02"
              >
                <path
                  d="M101.803 350.336c-10.069 7.851-16.469 20.011-16.469 33.664v469.333c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h597.333c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-469.333c-0.043-12.8-5.717-25.301-16.469-33.664l-384-298.667c-15.275-11.733-36.736-12.16-52.395 0zM682.667 896v-384c0-23.552-19.115-42.667-42.667-42.667h-256c-23.552 0-42.667 19.115-42.667 42.667v384h-128c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-448.469l341.333-265.472 341.333 265.472v448.469c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501zM426.667 896v-341.333h170.667v341.333z"
                ></path>
              </svg>
              <span class="manage-doctors-all-doctors-admin-text01">
                Dashboard
              </span>
            </div>
          </a>
          <div class="manage-doctors-all-doctors-admin-container03">
            <a
              href="manage-appointments-admin.php"
              class="manage-doctors-all-doctors-admin-navlink1"
            >
              <div class="manage-doctors-all-doctors-admin-container04">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="manage-doctors-all-doctors-admin-icon04"
                >
                  <path
                    d="M73.143 950.857h804.571v-585.143h-804.571v585.143zM292.571 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM731.429 256v-164.571c0-10.286-8-18.286-18.286-18.286h-36.571c-10.286 0-18.286 8-18.286 18.286v164.571c0 10.286 8 18.286 18.286 18.286h36.571c10.286 0 18.286-8 18.286-18.286zM950.857 219.429v731.429c0 40-33.143 73.143-73.143 73.143h-804.571c-40 0-73.143-33.143-73.143-73.143v-731.429c0-40 33.143-73.143 73.143-73.143h73.143v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h219.429v-54.857c0-50.286 41.143-91.429 91.429-91.429h36.571c50.286 0 91.429 41.143 91.429 91.429v54.857h73.143c40 0 73.143 33.143 73.143 73.143z"
                  ></path>
                </svg>
                <span class="manage-doctors-all-doctors-admin-text02">
                  Manage Appointments
                </span>
              </div>
            </a>
            <a
              href="manage-doctors-admin.php"
              class="manage-doctors-all-doctors-admin-navlink2"
            >
              <div class="manage-doctors-all-doctors-admin-container05">
                <svg
                  viewBox="0 0 1024 1024"
                  class="manage-doctors-all-doctors-admin-icon06"
                >
                  <path
                    d="M768 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM597.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM512 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496zM1024 896v-85.333c-0.043-53.12-19.499-101.76-51.883-139.136-27.819-32.128-65.195-55.936-107.904-67.243-22.784-6.016-46.123 7.552-52.139 30.336s7.552 46.123 30.336 52.139c25.899 6.869 48.469 21.248 65.195 40.619 19.413 22.443 31.019 51.456 31.061 83.285v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM672.085 174.891c34.261 8.789 61.653 30.507 78.379 58.752s22.656 62.72 13.867 96.981c-7.509 29.312-24.533 53.589-47.147 70.485-13.397 10.027-28.8 17.493-45.355 21.803-22.784 5.973-36.437 29.312-30.421 52.096s29.312 36.437 52.096 30.421c27.179-7.125 52.565-19.413 74.795-36.011 37.675-28.16 66.219-68.821 78.72-117.675 14.592-57.045 4.693-114.731-23.125-161.621s-73.6-83.328-130.645-97.963c-22.827-5.845-46.080 7.936-51.925 30.763s7.936 46.080 30.763 51.925z"
                  ></path>
                </svg>
                <span class="manage-doctors-all-doctors-admin-text03">
                  Manage Doctors
                </span>
              </div>
            </a>
          </div>
          <a
            href="upload-lab-results-admin.php"
            class="manage-doctors-all-doctors-admin-navlink3"
          >
            <div class="manage-doctors-all-doctors-admin-upload-lab-results">
              <svg
                viewBox="0 0 1024 1024"
                class="manage-doctors-all-doctors-admin-icon08"
              >
                <path
                  d="M342 640l170-170 170 170-60 62-68-68v176h-84v-176l-68 66zM768 854v-470h-214v-214h-298v684h512zM598 86l256 256v512q0 34-26 59t-60 25h-512q-34 0-60-25t-26-59l2-684q0-34 25-59t59-25h342z"
                ></path>
              </svg>
              <span class="manage-doctors-all-doctors-admin-text04">
                <span>Upload Lab Results</span>
                <br />
              </span>
            </div>
          </a>
          <a
            href="user-profile-admin.php"
            class="manage-doctors-all-doctors-admin-navlink4"
          >
          <div class="manage-doctors-all-doctors-admin-profile">
            <svg
              viewBox="0 0 877.7142857142857 1024"
              class="manage-doctors-all-doctors-admin-icon10"
            >
              <path
                d="M686.286 448c80.571 23.429 191.429 102.857 191.429 362.857 0 117.714-87.429 213.143-194.857 213.143h-488c-107.429 0-194.857-95.429-194.857-213.143 0-260 110.857-339.429 191.429-362.857-28.571-45.143-45.143-98.286-45.143-155.429 0-161.143 131.429-292.571 292.571-292.571s292.571 131.429 292.571 292.571c0 57.143-16.571 110.286-45.143 155.429zM438.857 73.143c-121.143 0-219.429 98.286-219.429 219.429s98.286 219.429 219.429 219.429 219.429-98.286 219.429-219.429-98.286-219.429-219.429-219.429zM682.857 950.857c66.857 0 121.714-62.286 121.714-140 0-180-60.571-292.571-173.714-298.286-51.429 45.143-118.286 72.571-192 72.571s-140.571-27.429-192-72.571c-113.143 5.714-173.714 118.286-173.714 298.286 0 77.714 54.857 140 121.714 140h488z"
              ></path>
            </svg>
            <span class="manage-doctors-all-doctors-admin-text07">
              <span>Profile</span>
              <br />
            </span>
          </div>
          <a
            href="login-admin.php"
            class="manage-doctors-all-doctors-admin-navlink4 logout"
          >
            <div class="manage-doctors-all-doctors-admin-logout">
              <div class="manage-doctors-all-doctors-admin-container06">
                <svg
                  viewBox="0 0 1024 1024"
                  class="manage-doctors-all-doctors-admin-icon12"
                >
                  <path
                    d="M170 214v596h342v86h-342q-34 0-59-26t-25-60v-596q0-34 25-60t59-26h342v86h-342zM726 298l212 214-212 214-60-62 110-110h-434v-84h434l-110-112z"
                  ></path>
                </svg>
              </div>
              <div class="manage-doctors-all-doctors-admin-container07">
                <span class="manage-doctors-all-doctors-admin-text10">
                  <span>Logout</span>
                  <br />
                </span>
              </div>
            </div>
          </a>
        </nav>
        <div class="manage-doctors-all-doctors-admin-profile1">

          <?php echo '<img src="data:image;base64,'.base64_encode( $admin_picture ).'"class="manage-doctors-all-doctors-admin-image1""
                         />';?>
          <div class="manage-doctors-all-doctors-admin-container08">
            <span class="manage-doctors-all-doctors-admin-text13">
              <?php echo $admin_firstname?>
            </span>
            <span class="manage-doctors-all-doctors-admin-text14">Admin</span>
          </div>
        </div>
      </div>
      <div class="manage-doctors-all-doctors-admin-main-body-container">
        <div class="manage-doctors-all-doctors-admin-header-container">
          <span class="manage-doctors-all-doctors-admin-patient-portal-txt">
            Admin Portal System 
          </span>
          <div class="manage-doctors-all-doctors-admin-icons-container">
            <img
                  alt="image"
                  src="public/playground_assets/search-200h.png"
                  class="manage-doctors-all-doctors-admin-image2"
                />
                <a
                  href="manage-appointments-admin.php"
                  class="manage-doctors-all-doctors-admin-navlink5"
                >
               <img
              alt="image"
              src="public/playground_assets/plus%20%5B4%5D-200h.png"
              class="manage-doctors-all-doctors-admin-image3"
            />
            </a>
            <img
              alt="image"
              src="public/playground_assets/bell%20%5B2%5D-200h.png"
              class="manage-doctors-all-doctors-admin-image4"
            />
          </div>
        </div>
        <form method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
        <div class="manage-doctors-all-doctors-admin-container09">
          <div class="manage-doctors-all-doctors-admin-container10">
            <div class="manage-doctors-all-doctors-admin-container11">
              <div
                class="manage-doctors-all-doctors-admin-admin-manage-doctors-per-page-form-container"
              >
                <div
                  class="manage-doctors-all-doctors-admin-main-border-container"
                >
                  <div
                    class="manage-doctors-all-doctors-admin-main-bg-container" style="margin-top: 0px;"
                  >
                    <div class="manage-doctors-all-doctors-admin-container12">
                      <span class="manage-doctors-all-doctors-admin-text15">
                        personal information 
                      </span>
                      <a
                        href="manage-doctors-admin.php"
                        class="manage-doctors-all-doctors-admin-cancel-btn button"
                      >
                        <span class="manage-doctors-all-doctors-admin-text16">
                          (X) Cancel
                        </span>
                      </a>
                    </div>
                    <?php 
                    while($row=mysqli_fetch_assoc($result))
                    {
                     
                ?>
                    <div class="manage-doctors-all-doctors-admin-container13">
                      <div class="manage-doctors-all-doctors-admin-container14">
                        <div
                          class="manage-doctors-all-doctors-admin-container15"
                        >
                        <input
                            type="hidden"
                            name="doctor_id"
                            placeholder="First Name *"
                            value="<?=$row['doctor_id']; ?>" 
                            class="manage-doctors-all-doctors-admin-textinput input"
                          />
                          <span class="manage-doctors-all-doctors-admin-text17">
                            First Name
                          </span>
                          <input
                            type="text"
                            name="First Name"
                            placeholder="First Name *"
                            value="<?=$row['doctor_firstname']; ?>" 
                            class="manage-doctors-all-doctors-admin-textinput input"
                            readonly = "readonly"
                          />
                        </div>
                        <div
                          class="manage-doctors-all-doctors-admin-container16"
                        >
                          <span class="manage-doctors-all-doctors-admin-text18">
                            Middle Initial
                          </span>
                          <input
                            type="text"
                            name="Mid Name"
                            placeholder="Middle Initial *"
                            value="<?=$row['doctor_middleinitial']; ?>" 
                            class="manage-doctors-all-doctors-admin-textinput01 input"
                            readonly = "readonly"
                          />
                        </div>
                        <div
                          class="manage-doctors-all-doctors-admin-container17"
                        >
                          <span class="manage-doctors-all-doctors-admin-text19">
                            Last Name
                          </span>
                          <input
                            type="text"
                            name="Last Name"
                            placeholder="Last Name *"
                            value="<?=$row['doctor_lastname']; ?>" 
                            class="manage-doctors-all-doctors-admin-textinput02 input"
                            readonly = "readonly"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="manage-doctors-all-doctors-admin-container18">
                      <div
                        class="manage-doctors-all-doctors-admin-age-container"
                      >
                        <span class="manage-doctors-all-doctors-admin-text20">
                          Age
                        </span>
                        <input
                          type="number"
                          name="Age"
                          enctype="Age *"
                          required
                          placeholder="Age *"
                          value="<?=$row['doctor_age']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput03 input"
                          readonly = "readonly"
                        />
                      </div>
                      <div
                        class="manage-doctors-all-doctors-admin-bdate-container"
                      >
                        <span class="manage-doctors-all-doctors-admin-text21">
                          Birthdate
                        </span>
                        <input
                          type="date"
                          name="Birthdate"
                          value="<?=$row['doctor_birthdate']; ?>" 
                          required
                          placeholder="Birthdate *"
                          class="manage-doctors-all-doctors-admin-textinput04 input"
                          readonly = "readonly"
                        />
                      </div>
                    </div>
                    <div class="manage-doctors-all-doctors-admin-container19">
                      <div class="manage-doctors-all-doctors-admin-container20">
                        <span class="manage-doctors-all-doctors-admin-text22">
                          Profession/Expertise
                        </span>
                        <input
                          type="text"
                          name="Profession"
                          placeholder="Dr. *"
                          value="<?=$row['doctor_profession']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput05 input"
                          readonly = "readonly"
                        />
                      </div>
                      <div class="manage-doctors-all-doctors-admin-container21">
                        <span class="manage-doctors-all-doctors-admin-text23">
                          Gender
                        </span>
                        <input
                          type="text"
                          name="Gender"
                          placeholder="Gender *"
                          value="<?=$row['doctor_gender']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput06 input"
                          readonly = "readonly"
                        />
                      </div>
                    </div>
                    <div class="manage-doctors-all-doctors-admin-container22">
                      <span class="manage-doctors-all-doctors-admin-text24">
                        <span>Schedule</span>
                        <br />
                      </span>
                      <div class="manage-doctors-all-doctors-admin-container23">
                        <input
                          type="text"
                          name="Gender"
                          placeholder="Gender *"
                          value="<?=$row['doctor_dayschedule']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput06 input"
                          readonly = "readonly"
                        /> &nbsp;&nbsp;&nbsp;
                          <input
                          type="text"
                          name="Gender"
                          placeholder="Gender *"
                          value="<?=$row['doctor_timeschedule']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput06 input"
                          readonly = "readonly"
                              
                        />
                      </div>
                    </div>
                    <span class="manage-doctors-all-doctors-admin-text27">
                      CONTACT information
                    </span>
                    <div class="manage-doctors-all-doctors-admin-container24">
                      <div class="manage-doctors-all-doctors-admin-container25">
                        <span class="manage-doctors-all-doctors-admin-text28">
                          Email
                        </span>
                        <input
                          type="email"
                          name="doctor_email"
                          placeholder="Email *"
                          value="<?=$row['doctor_email']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput07 input"
                          id = "editDocEmail"
                          readonly = "readonly"
                          ondblclick = "UpdateClick();"
                        />
                      </div>
                      <div class="manage-doctors-all-doctors-admin-container26">
                        <span class="manage-doctors-all-doctors-admin-text29">
                          Contact Number
                        </span>
                        <input
                          type="tel"
                          name="doctor_contactno"
                          placeholder="Contact Number *"
                          value="<?=$row['doctor_contactno']; ?>" 
                          class="manage-doctors-all-doctors-admin-textinput08 input"
                          id = "editDocContactno"
                          readonly = "readonly"
                          ondblclick = "UpdateClick();"
                        />
                      </div>
                    </div>
                    <div
                      class="manage-doctors-all-doctors-admin-container27"
                    ></div>
                    <span class="manage-doctors-all-doctors-admin-text30">
                      YOUR ACCOUNT
                    </span>
                    <div class="manage-doctors-all-doctors-admin-container28">
                      <span class="manage-doctors-all-doctors-admin-text31">
                        Username
                      </span>
                      <input
                        type="text"
                        name="doctor_username"
                        placeholder="Username *"
                        value="<?=$row['doctor_username']; ?>" 
                        class="manage-doctors-all-doctors-admin-textinput09 input"
                        id = "editDocUsername"
                        readonly = "readonly"
                        ondblclick = "UpdateClick();"
                      />
                    </div>
                      <?php
                  
              }
            ?>
                  <!--   <div class="manage-doctors-all-doctors-admin-container29">
                      <span class="manage-doctors-all-doctors-admin-text32">
                        Password
                      </span>
                      <input
                        type="text"
                        name="Password"
                        placeholder="Password *"
                        class="manage-doctors-all-doctors-admin-textinput10 input"
                      />
                    </div> -->
                    
                    <div class="manage-doctors-all-doctors-admin-container30" style="margin-top: 42px">
                      <div class="manage-doctors-all-doctors-admin-container31">
                        <input
                            type ="submit"
                            class="manage-doctors-all-doctors-admin-button button"
                            value = "🖪 Save"
                            name = "UpdateDoctorProfile"
                            onclick = "return confirm('Are you sure you want to update this profile?')"
                          >
                        <input
                            type ="submit"
                            class="manage-doctors-all-doctors-admin-button1 button"
                            value = "🗑 Delete"
                            name = "DeleteDoctorProfile"
                            onclick = "return confirm('Are you sure you want to delete this profile')"
                          >
                      </div>
                      <div class="manage-doctors-all-doctors-admin-div" style="margin-left: -36px;">
                        <dangerous-html
                          html="<!DOCTYPE html>
<html>

<head>
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: #595959;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
            font-family: 'Exo 2', sans-serif;
            font-size: 10.5px;
        }

        .pagination a.active {
            background-color: #378DBD;
            color: white;
            border: 1px solid #378DBD;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <div class='pagination' style='margin-top: 10px'>
      <?php 
        
                $pr_query = "SELECT * FROM doctor_account";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result);
                $total_page = ceil($total_record/$num_per_page);

        for($i=1;$i<$total_page;$i++)
        {
          echo "<a href='manage-doctors-all-doctors-admin.php?page=".$i."'> $i </a>" ;
        }

        if($i>$page)
        {
           echo "<a href='manage-doctors-all-doctors-admin.php?page=".($page+1)."'> $i </a>" ;
        }

        ?>
       
    </div>

</body>

</html>"
                        ></dangerous-html>
                      </div>
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

<script>
function UpdateClick()
{
    document.getElementById('editDocEmail').removeAttribute('readonly');
    document.getElementById('editDocContactno').removeAttribute('readonly');
    document.getElementById('editDocUsername').removeAttribute('readonly');
}
</script>