<?php

$file = 'https://www.kindpng.com/picc/m/269-2697881_computer-icons-user-clip-art-transparent-png-icon.png';
$current = addslashes(file_get_contents($file);
echo $current;

$content = file_get_contents('https://lh3.googleusercontent.com/blogger_img_proxy/ANbyha1pxXyQB51J6N5mfK9NBCgGhdBj094WUcAP6DIxQHNwjEUcY-8E8-PGUwKK_xI61kqYJ6UBSNxTPHYvmOI3Ll3SNyxsiwnwZZJ0ErKo0CG3oByMFFl0iIUGJt7tg7Rhoc1KR23hmIC-eegPAW0IEnfOMCxkMw=w919-h516-p-k-no-nu');
//echo $content;
$var1 = "<img src='https://play.teleporthq.io/static/svg/default-img.svg' />";
include ('Function/db.php');
if (isset($_POST['submit'])) 
{
  $content = file_get_contents('https://www.flaticon.com/free-icon/round-account-button-with-user-inside_61205?term=profile%20picture&page=1&position=53&page=1&position=53&related_id=61205&origin=tag');
  $Image_Data = addslashes(file_get_contents('https://www.kindpng.com/picc/m/269-2697881_computer-icons-user-clip-art-transparent-png-icon.png'));   
$Patient_Image = $content;
$sql = "INSERT INTO test (img)
VALUES ('$Image_Data')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
<?php
include ('Function/db.php');
$Get_Data = $conn->prepare("SELECT * FROM test");
        $Get_Data->execute();
        $Data_Results = $Get_Data->get_result();
        while ($row = $Data_Results->fetch_assoc())
        {
            $Patient_Picture = $row["img"];
        }
?>

<!DOCTYPE html>
<html>
<body>

<h1>Display an Image as the Submit button</h1>

<form  method="post" enctype="multipart/form-data">
    
    <input type="submit" name="submit" value="submit">
</form>
<?php echo '<img src="data:image;base64,'.base64_encode( $Patient_Picture ).'"class="user-profile-patient-image2 "
                        id="profileDisplay" " alt="HTML5 Icon" /><br />';?>


</body>
</html>
