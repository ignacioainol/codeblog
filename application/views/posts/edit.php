<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('posts/update') ?>
  <input type="hidden" name="id" value="<?= $post['id'] ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Add Title" value="<?= $post['title'] ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" id="" cols="30" rows="10" placeholder="Add Body"><?= $post['body'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="">Category</label>
    <select name="category_id" class="form-control">
      <? foreach($categories as $category): ?>
        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
      <? endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>