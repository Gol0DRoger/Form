<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello there.</title>
    <link rel="Stylesheet" href="style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap');
</style>
</head>
<body>
    <img class= "bg" src="Z.jpg" alt="Travel">
    <div id="const">
        <h2>Welcome to our Religious Trip Page</h2>
        
   <?php 
   $change=false; 
   if($change == true){
   echo"<p><i>Thanks for submitting the form. We are happy to see you joining us.</p>";
   }
   //Its useless right now.
   else if($change == false){
    echo "<p><i>Enter your details to confirm your participation.</p>";
   }
   ?>     

        <form action="index.php" method="post"> <!--Most Important step-->
            <input type="text" name="Name" id="name" placeholder="Enter your name">
            <br>
            <input type="number"  name="Age" id="age" placeholder="Enter your age" ><br>
            <input type="radio" id="male" name="Gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="Gender" value="female">
            <label for="female">Female</label><br>
            <input type="number"  name="Phone_Number" id="Phone" placeholder="Enter your Phone Number" ><br>
            <input type="text"  name="Email_ID" id="email" placeholder="Enter your Email Id" ><br>
            <button class="btn">SUBMIT</button>
            
        
    </div>
    <!--INSERT INTO `trip` (`Name`, `Age`, `Gender`, `Phone Number`, `Email ID`, `DT`) VALUES ('Rex', '22', 'Male', '8888888888', 'rishabhrawat106rex2222@gmail.com', current_timestamp());-->
</body>
</html>