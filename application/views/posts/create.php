<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('posts/create') ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" id="" cols="30" rows="10" placeholder="Add Body"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>