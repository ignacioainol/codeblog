<h2><?= $post['title']  ?></h2>
<div class="post-body">
	<small class="post-date">Posted on: <?= $post['create_at'] ?></small><hr>
	<?= $post['body'] ?>
</div>

<hr>
<?= form_open('/posts/delete/'.$post['id']) ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>