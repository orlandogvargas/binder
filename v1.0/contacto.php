<?php
// BEGIN CONFIGURATION ////////////////////////////////////////////////

define('EMAIL_TO', 'info@binderobras.com');
define('EMAIL_SUBJECT', 'Nuevo mensaje desde binderobras.com!');
define('CAPTCHA_ENABLED', '1'); // 0 - Disabled, 1 - Enabled

// END CONFIGURATION ////////////////////////////////////////////////

define('CAPTCHA1', rand(1,9));
define('CAPTCHA2', rand(1,9));

if ($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$captcha = $_POST['captcha'];
	$captcha1 = $_POST['captcha1'];
	$captcha2 = $_POST['captcha2'];

// If captcha disabled, set variable values to avoid error
	if (CAPTCHA_ENABLED == '0') { $captcha1 = '1'; $captcha2 = '1'; $captcha = '2'; }

// Error handling
	if (empty($name) || empty($email) || empty($message)) { $msg = 'One or more fields is blank!'; }
	else if (!$email == '' && (!strstr($email,'@') || !strstr($email,'.'))) { $msg = 'Your email address is not formatted correctly!'; }
	else if (($captcha1 + $captcha2) != $captcha) { $msg = 'Anti-spam incorrect! Please try again.'; }

// Build email headers
	else {
		$headers = "From: ".$name." <".$email.">\r\n";
		$headers .= "Reply-To: ".$name." <".$email.">\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Build email body
		$body = '
		<html><body>
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr><td style="border-bottom: solid 1px #CCC; font-size:18px; font-weight:bold; padding:10px;" colspan="2">'.$email_subject.'</td></tr>
		<tr><td valign="top" style="padding:10px; border-bottom: solid 1px #CCC;" valign="top"><b>Name:</b></td><td style="padding:10px; border-bottom: solid 1px #CCC;">'.$name.' ('.$email.')</td></tr>
		<tr><td valign="top" style="padding:10px; border-bottom: solid 1px #CCC;" valign="top"><b>Message:</b></td><td style="padding:10px; border-bottom: solid 1px #CCC;">'.$message.'</td></tr>
		</table>
		</body></html>
		';

// Send the email, reset text boxes on form, and show success message
		mail(EMAIL_TO, EMAIL_SUBJECT, $body, $headers);
		$name = '';
		$email = '';
		$message = '';
		$msg = 'Mensaje enviado!';
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HEAD -->
	<?php
	$page = 'contacto';
	include 'head.php';
	?>

</head>

<body>
	<!--Preload-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- end topbar -->

    <!-- Navigation -->
      <?php include 'menu.php' ;?>

  <div class="">
    <div class="" style="background-image:url(media/contacto.jpg); background-size: cover; background-position: top;">
      <div class="introImagePage semTransparent">
        <h2 class="text-white text-center">CONTACTO</h2>
      </div>
    </div>
  </div>


  <div class="container mb-5">
    <div class=" d-flex justify-content-center">
      <div class="col-11 col-md-8 text-justify mt-5">
        <div class="row">

					<div class="col-12 col-md-6">
						<h3>CONTACTO</h3>
						<h5 class="">
							Teléfonos<br>
							(011) 4713 4436<br>
							15 6666 5184<br>
							 15 3799 3136
							<br><br>
							E-mail:<br>
							info@binder.com
							<br><br>

						<h5>
					</div>
        	<div class="col-12 col-md-6">
						<form method="post">
		          <div class="form-group">
		            <p>Name:<br><input type="text" name="name" value="<?php echo $name; ?>"  /></p>
		            <p>Email:<br><input type="text" name="email" value="<?php echo $email; ?>" /></p>
		            <p>Message:<br><textarea name="message" rows="5" cols="40" /><?php echo $message; ?></textarea></p>
		            <?php if (CAPTCHA_ENABLED != '0') { ?>
		            <p><?php echo CAPTCHA1; ?> + <?php echo CAPTCHA2; ?> = ?<br><input type="text" name="captcha" /></p>
		            <input type="hidden" name="captcha1" value="<?php echo CAPTCHA1; ?>" />
		            <input type="hidden" name="captcha2" value="<?php echo CAPTCHA2; ?>" />
		            <?php } ?>
		            <button type="submit" class="btn btn-primary" value="Submit">Enviar mensaje</button>
		          </div>
		        </form>
        	</div>

        </div>

        <?php echo $msg; ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- HEAD -->
    <?php include 'footer.php' ;?>
		<script type="text/javascript">
$(function(){
	$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
	$('.nav a').click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active')
	})
})
</script>

</body>

<!-- Mirrored from themecrazy.net/html/sigma/index-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 15:10:47 GMT -->
</html>
