<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>Titel </title>
</head>
<body>
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>

	<div>
		<form method="post" action="register.php" >
			<h2>Register på X</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Redan medlem? <a href="login.php">Logga in</a>
			</p>
		</form>
	</div>
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
