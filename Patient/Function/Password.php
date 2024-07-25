<?php
include ('Function/UpdatePassword.php');



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style type="text/css">
  #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: %;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(28, 28, 28, 0.4);
    z-index: 2;
    margin: auto;
  }
  .container1 {
      background-color: white;
      text-align: center;
      width: 40%;
      padding: 10px;
      border: 0px solid gray;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
      border-radius: 2vh;
      position: absolute;
      top: 50%;
      left: 60%;
      transform: translate(-50%, -50%);
      text-align: center;
    }


    .input2[type=text] {
      width: 92%;
    }
</style>
<body>
<form name="login" method = "post" action = "<?php $_PHP_SELF ?>">
    <div id="overlay">
      <div class="container1" style="padding: 46px;">
        <table border="0" cellspacing="0" cellpadding="0" align="right" width="8%"> 
          <tr>
            <td>
              <div class="" onclick="off()" style="color: dimgray; font-size: 15px; cursor: pointer;">Close(x)</div>
            </td>
          </tr>
        </table>
          <h2 style="font-weight: bold; font-size:25px" class="user-profile-patient-text31">Change Password</h2> 
         <div class="user-profile-patient-container24">
                        <span class="user-profile-patient-text31">
                          Enter current password
                        </span>
                        <input 
                          type="text"
                          name="Password"
                          placeholder="Password *"
                          class="user-profile-patient-textinput13 input input2"
                        />
                      </div>
                      <div class="user-profile-patient-container25">
                        <span class="user-profile-patient-text32">
                          Enter new password
                        </span>
                        <input
                          type="text"
                          name="NewPassword"
                          placeholder="Password *"
                          class="user-profile-patient-textinput14 input input2"
                        />
                      </div>
                      <div class="user-profile-patient-container26">
                        <span class="user-profile-patient-text33">
                          Re-enter new Password
                        </span>
                        <input
                          type="text"
                          name="ConPassword"
                          placeholder="Re-enter Password *"
                          class="user-profile-patient-textinput15 input input2"
                        />
                        <?php echo $error_Password; ?>
                      </div>
                      
                        <input
                        name="UpdatePatientProfilePass"
                        type="submit"
                        class="user-profile-patient-button1 button"
                        value ="Save"
                        onclick="return confirm('Are you sure you want to change your password?','Update Profile');"
                      >
      </div>
    </div>
  </form>
</body>
</html>

<script type="text/javascript">
  function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>