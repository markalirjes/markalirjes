<?php
$con = mysqli_connect("sql202.infinityfree.com","if0_35625832","ENwLHV0mHiYN7","if0_35625832_users");
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$linkedin = $_POST['linkedin'];
$phone = $_POST['phone'];
$phch = strlen($phone);
$dgree = $_POST['dgree'];
$color = filter_input(INPUT_POST, 'cars', FILTER_SANITIZE_STRING);
$credit = "0";
$pitch = rand()."".$_FILES['pitch']['name'];
$tpitch = $_FILES['pitch']['tmp_name'];
$profile = rand()."".$_FILES['profile']['name'];
$prof = $_FILES['profile']['name'];
$tprofile = $_FILES['profile']['tmp_name'];
$innovate_code = rand(1,100000000);
$q = mysqli_query ($con , "SELECT * FROM signup WHERE `phone` = '$phone'");
$row = mysqli_num_rows($q);
if($phch == 11 AND $row != 1){
    if($firstname != null AND $lastname != null AND $phone != null AND $dgree != null AND $credit != null AND $linkedin != null AND $prof != null){        
        move_uploaded_file($tprofile, __DIR__ . '/files/' . $profile);
        move_uploaded_file($tpitch, __DIR__ . '/files/' . $pitch);
        $query = mysqli_query($con, "INSERT INTO `signup`(`firstname`, `lastname`, `phone`, `job`, `dgree`, `credit`, `pitch`, `profile`,`code`,`linkedin`) VALUES ('$firstname','$lastname',                 '$phone','$color','$dgree','$credit','$pitch','$profile','$innovate_code','$linkedin')");
    ?><p style="color:green;font-size:40px;"><?php echo "Your Signup Successfully , your Innoventiran Code is :".$innovate_code."Please save this for event day and Make Connection." ; ?></p><?php
    }else{
        ?><p style="color:orange;font-size:30px;">please fill all items form and profile image.</p> <?php
    }
?>
<?php
}else{
    ?><p  style="color:orange;font-size:30px;"><?php echo"your phone number is incorrect";?></p><?php
}
?>