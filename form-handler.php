<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Yourself</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
  </head>
  <body>
    <?php
    			$name          = $_POST['name'];
    			$email         = $_POST['email'];
    			$phone         = $_POST['phone'];
    			$raido         = $_POST['radio'];
    			$comments      = $_POST['comments'];
    			$favoritePizza = $_POST['fav-pizza'];
    			$password      = $_POST['password'];

          if($password == "Hello"){
          echo "<h1> Your Information</h1>";
          echo "<h2> Main Information</h2>";

          //name
          echo "<ul class='information-list'>";
          if (!empty($name)) {
            echo "<li><span class='label'>Name:</span> $name</li>";
          }

          //phone
          if (!empty($phone)) {
            echo "<li><span class='label'>Phone:</span> $phone</li>";
          }

          //email
          if (!empty($email)) {
            echo "<li><span class='label'>Email:</span> <a href='mailto:'$email'>Email Me</li>";
          }

          //Contact Preferences
  			  if(!empty($_POST['contactPreferences'])){
  				echo "<h2>We will contact you by:</h2>";

  				foreach($_POST['contactPreferences'] as $value){
  					echo $value . ' ';
  				}
  			}

          //Comments
    			if(!empty($comments)){
    				echo "<h2>Comments:</h2>";
    				echo "<li><span class='label'></span> $comments</li>";
    			}
          echo "</ul>";

            echo "<h2>Other Information</h2>";

            //dropdown
    				if($favoritePizza == "Plain"){
    					echo "<p>You said plain huh!</p>";
              echo "<img src='images/plainpizza.gif' alt='Plain Pizza Box' />";

    				}elseif($favoritePizza == "Pepperoni"){
    					echo "<p>Ohhhh Pepperoni</p>";
              echo "<img src='images/peppizza.gif' alt='Pepperoni Pizza Dancing' />";

    				}else{
    					echo "<p>This was the correct answer!</p>";
              echo "<img src='images/pinepizza.gif' alt='Pepperoni Pizza Dancing' />";
    				}

          }else{
            echo "<h1> Wrong Password!</h1>";
            echo "<button onclick='history.go(-1);'>Back</button>";
          }
    			?>

  </body>
  <footer>
  <p>Created by Rebecca Cohen</p>
  </footer>
</html>
