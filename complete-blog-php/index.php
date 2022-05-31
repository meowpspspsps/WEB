<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>Titel</title>
</head>
<body>
<script src="static/css/script.js"></script>

		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>

		<!-- banner -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>

		<div class="content">
			<h2 class="content-title">Senaste Artiklarna</h2>
			<hr>
			<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 10px;">
		<img src="<?php echo BASE_URL . './static/images/' . $post['image']; ?>" class="post_image" alt="">
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>

		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span class="read_more">Läs mer...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
