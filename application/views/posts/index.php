<h2 style="padding-bottom: 2em"><?= $title ?></h2>
<? foreach($posts as $index => $post): ?>
	<div class="allPost" style="padding-bottom: 3em;">
		<h3><?= word_limiter($post['title'],50) ?></h3>
		<div class="row">
			<div class="col-md-3">
				<img src="<?= site_url() ?>assets/images/posts/<?= $post['post_image'] ?>" class="post-thumb" alt="">
			</div>
			<div class="col-md-9">
			<small class="post-date">Posted on: <?= $post['create_at'] ?> in <strong><?= $post['name'] ?></strong></small><hr>
				<?= $post['body'] ?>
				<br><br>
				<p><a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']) ?>">Leer más</a></p>
			</div>	
		</div>
	</div>
<? endforeach ?>
