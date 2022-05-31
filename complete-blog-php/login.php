<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
	<title>Titel </title>
</head>
<body>
<div class="container">
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Logga in</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Användarnamn">
			<input type="password" name="password" placeholder="Lösenord">
			<button type="submit" class="btn" name="login_btn">Logga in</button>
			<p>
				Not yet a member? <a href="register.php">Gå Med</a>
			</p>
		</form>
	</div>
</div>

	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
