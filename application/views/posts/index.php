<h2 style="padding-bottom: 2em"><?= $title ?></h2>
<? foreach($posts as $index => $post): ?>
	<div class="allPost" style="padding-bottom: 3em;">
		<h3><?= $post['title'] ?></h3>
		<small class="post-date">Posted on: <?= $post['create_at'] ?></small><hr>
		<?= $post['body'] ?>
		<br><br>
		<p><a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']) ?>">Leer más</a></p>
	</div>
<? endforeach ?>
