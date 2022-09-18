<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>About You</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">

	</head>
	<body id="main_body" >
		<div class="container">
			<h1>Tell me about yourself</h1>
			<form id="sample-form" class="testing-form" method="post" action="form-handler.php">
				<fieldset>
					<legend>User information</legend>

					<ul>
						<li>
							<label for="name">Name:</label>
							<input type="text" id="name" name="name">
						</li>

						<li>
							<label for="phone">Phone:</label>
							<input type="tel" id="phone" name="phone">
						</li>

						<li>
							<label for="email">Email:</label>
							<input type="email" id="email" name="email">
						</li>

            <li>
              <label class="description">How would you like to be contacted?</label>
              <span>
                <div class="radio">
                  <input class="rphone" type="radio" name="contactPreferences[]" value="Phone">Phone<br>
                  <input class="remail" type="radio" name="contactPreferences[]" value="Email">Email<br>
                  <input class="rboth" type="radio" name="contactPreferences[]" value="Email and Phone">Both<br>
                </div>
              </span>
            </li>

            <li id="comments">
              <label class="description" for="comments">Do you have any comments you would like to leave?</label>
              <textarea id="comments" name="comments" rows="6" cols="50"></textarea>
            </li>

					</ul>
				</fieldset>

				<fieldset>
					<legend>Other information:</legend>
						<ul>
							<li>
								<label for="fav-pizza">What kind of pizza do you like?</label>
								<select id="fav-pizza" name="fav-pizza">
									<option value="Plain">Plain</option>
									<option value="Pepperoni">Pepperoni</option>
									<option value="Pineapple">Pineapple</option>
								</select>
							</li>

              <li>
						<label class="description">When is your birthday? </label>
						<span>
							<input id="birthday" name="birthday" class="element text" value="" type="date">
							<label for="birthday"></label>
						</span>

					</li>

							<li>
								<label for="password">Hello is the secret password?</label>
								<input type="password" id="password" name="password" >
							</li>
						</ul>
				</fieldset>

				<input class="submit" type="submit" value="Submit" >
			</form>
		</div>
	</body>

  <footer>
  <p>Created by Rebecca Cohen</p>
  </footer>
</html>
