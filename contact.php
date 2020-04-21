<?php
define("TITLE", " Contact Us | Franklin's Fine Dining");
include('includes/header.php');

/*
		NOTE:
		In the form in contact.php, the name text field has the name "name"
		If the user submits the form, the $_POST['name'] variable will be
		automatically created, and will contain the text they typed into
		the field. The $_POST['email'] variable will contain whatever they typed
		into the email field.
	
	
		PHP used in this script:
		
		preg_match()
		- Perform a regular expression match
		- http://ca2.php.net/preg_match
		
		isset()
		- Determine if a variable is set and is not NULL
		- http://ca2.php.net/manual/en/function.isset.php
		
		$_POST
		- An associative array of variables passed to the current script via the HTTP POST method.
		- http://www.php.net/manual/en/reserved.variables.post.php
		
		trim()
		- Strip whitespace (or other characters) from the beginning and end of a string
		- http://www.php.net/manual/en/function.trim.php
		
		exit
		- Output a message and terminate the current script
		- http://www.php.net//manual/en/function.exit.php
		
		die()
		- Equivalent to exit
		- http://ca1.php.net/manual/en/function.die.php
		
		wordwrap()
		- Wraps a string to a given number of characters
		- http://ca1.php.net/manual/en/function.wordwrap.php
		
		mail()
		- Send mail
		- http://ca1.php.net/manual/en/function.mail.php
	*/

?>

<div id="contact">
  <hr>
  <h1>Get in touch with us!</h1>

  <?php

  // Check for header injections
  function has_header_injections($str)
  {
    return preg_match("/[\r\n]/", $str);
  }

  if (isset($_POST['contact_submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg = $_POST['message'];

    //Check to see if $name or $email have header injections
    if (has_header_injections($name) || has_header_injections($email)) {
      die(); // if true, kill the script
    }

    if (!$name || !$email || $msg) {
      echo '<h4 class="error">All fields required</h4><a href="contact.php" class="button block">Go back and try again</a>';
      exit;
    }
  }

  ?>

  <form method="post" action="" id='contact-form'>
    <label for="name">Your name</label>
    <input type="text" id='name' name='name'>

    <label for="email">Your email</label>
    <input type="text" id='email' name='email'>

    <label for="message">and your message</label>
    <textarea id="message" name="message"></textarea>

    <input type="checkbox" id='subscribe' name='subscribe' value='Subscribe'>
    <label for="subscribe">Subscribe to newsletter</label>

    <input type="submit" class='button next' name='contact_submit' value='Send Message'>

  </form>
</div>


<?php include('includes/footer.php'); ?>