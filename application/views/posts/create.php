<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open_multipart('posts/create') ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" name="body" class="form-control" id="" cols="30" rows="10" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
  	<label for="">Category</label>
  	<select name="category_id" class="form-control">
  		<? foreach($categories as $category): ?>
  			<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
  		<? endforeach ?>
  	</select>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>