
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form</title>
  </head>
  <body>
    <h1>Contact Us</h1>
    <form action="connect3.php" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name1" required><br>

      <label for="phone">Phone Number:</label>
      <input type="tel" name="phone" required><br>

      <label for="email">Email:</label>
      <input type="email" name="email" required><br>

      <label for="message">Message:</label>
      <textarea name="message" rows="5" ></textarea><br>

      <input type="submit"  name="submit" >
    </form>
  </body>
</html>





<?php
session_start();


if(isset($_POST['submit']))
{
  $name = $_POST['name1'];
  $phone = $_POST['phone'] ;
  $email = $_POST['email'] ;
  $message = $_POST['message'] ;
  $con = mysqli_connect('localhost','root','','wt') ;
  $sql = "INSERT INTO wtt (name,phone,email,message) VALUES ('$name','$phone','$email','$message')"; 
  $rs = mysqli_query($con,$sql) ;

  if($rs)
  {
    echo "Information Added Successfully..." ;
  }
}



?>

