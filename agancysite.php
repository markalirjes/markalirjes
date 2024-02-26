<?php
$ind = $_POST['ind'];
$name = $_POST['name'];
$email = $_POST['email'];
$cos = $_POST['cos'];
$color = $_POST['color'];
$add = $_POST['add'];
$pbc = $_POST['pbc'];
$pay = time() .'_'.$_FILES['pay']['name'];
$target = 'img/'. $pay;
$tmp_name = $_FILES['pay']['tmp_name'];
$conn = mysqli_connect("sql210.infinityfree.com","if0_35947137","fd53uWreGsB16n","if0_35947137_1advertising");
if ($email != null){
    $query = mysqli_query($conn , "INSERT INTO `users`( `name`, `email`, `add`, `color`, `pbc`, `ind`, `cos`,`pay`) VALUES ('$name','$email','$add','$color','$pbc','$ind','$cos','$pay')");
    move_uploaded_file($tmp_name , $target);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>1Advertising</title>
<link rel="icon" type="image/jpg" href="t.png">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    background-color: #111;
    color: white;
}
h1
{
    
    text-align: center;
    margin: 20px 0px 20px 0;
}
h2 
{
    color: whitesmoke;
    text-align: center;
    margin: 20px 0px 20px 0;
}

.parallax {
  /* The image used */
  background-image: url('2.jpg');
  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax1 {
  /* The image used */
  background-image: url('4.jpg');
  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.parallax2 {
  /* The image used */
  background-image: url('15.jpg');
  /* Set a specific height */
  min-height: 500px; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax3 {
  /* The image used */
  background-image: url('7.jpg');
  /* Set a specific height */
  min-height: 500px; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax4 {
  /* The image used */
  background-image: url('8.jpg');
  /* Set a specific height */
  min-height: 500px; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax5 {
  /* The image used */
  background-image: url('9.jpg');
  /* Set a specific height */
  min-height: 500px; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax6 {
  /* The image used */
  background-image: url('10.jpg');
  /* Set a specific height */
  min-height: 500px; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  color: white;
}
input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  color: white;
}
button {
  width: 50%;
  border-radius: 50px;
  background-color: #007bec;
  color: white;
  padding: 14px 20px;
  font-size: 20px;
  margin: 8px 100px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>
<body>

<h1>1ADVERTISING</h1>
<h2>Make your Space</h2>
<div class="parallax"></div>

<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">

<br>
Here we pursue only one goal: breaking the conventional formats of advertising that have become boring and creating a profound effect on the audience by creating strange works with the help of artificial intelligence and also creating an alliance between different ads that come from the same brand.
</div>

<div class="parallax1"></div>

<div style="font-size:26px;background-color: #111;color: white;scroll-behavior: smooth;">
When you register and send the payment receipt, we will deliver the product in the shortest possible time according to the amount and information entered.
<br>
Please see our portfolio:
This kind of advertising stays in mind longer.
</div>
<div class="parallax2"></div>
<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">
It's an ad for teenagers looking to start an online bank account:
</div>
<div class="parallax3"></div>
<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">
This is an advertisement for the younger generation who are looking for good fruits to cook:
</div>
<div class="parallax4"></div>
<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">
This is a great poster to promote drinks for cinema people:
</div>
<div class="parallax5"></div>
<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">
A funny advertisement for student loans:
</div>
<div class="parallax6"></div>
<div style="font-size:26px;background-color: #111;color: white;padding: 10px 10px 10px 10px;scroll-behavior: smooth;">
Modern، old-fashioned elements to attract the younger generation:
</div>

<div style="font-size:26px;background-color: #111;color: white;scroll-behavior: smooth;padding: 10px 10px 10px 10px;">
    price of poster : 19.97$
    <br>
    <br><br>
    Sign Up Form
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input name="ind" type="text" placeholder="what's your industry?">
        <input name="name" type="text" placeholder="what's your company's name?">
        <input name="email" type="text" placeholder="what's your email?">
        <input name="cos" type="text" placeholder="What are the characteristics of your main customers؟">
        <input name="pbc" type="text" placeholder="image or video?">
        <input name="add" type="text" placeholder="What is your product?">
        <input name="color" type="text" placeholder="what's your color?">
        <label>payment receipt</label>
        <input name = "pay" type="file">
        <button type="submit">Apply</button>
    </form>
    <p style="font-size: 15px;position: fixed;
    bottom: 0;
    left: 0;
    color: white;
    background-color: black;
    padding: 10px;">1Advertising Corp.@ 2024
        All rights reserved.</p>
</div>
</body>
</html>