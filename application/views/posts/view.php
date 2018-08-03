<h2><?= $post['title']  ?></h2>
<div class="post-body">
	<small class="post-date">Posted on: <?= $post['create_at'] ?></small><hr>
	<img src="<?= site_url() ?>assets/images/posts/<?= $post['post_image'] ?>" alt="">
	<?= $post['body'] ?>
</div>

<hr>
<a class="btn btn-default float-left" href="<?= base_url() ?>posts/edit/<?= $post['slug'] ?>">Edit</a>
<?= form_open('/posts/delete/'.$post['id']) ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form> 