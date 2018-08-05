<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Codeblog</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
  <script src="http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
  <link rel="stylesheet" href="<?= site_url() ?>assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Codeblog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>">Home</a><!--<span class="sr-only">(current)</span>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url().'about' ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url().'posts' ?>">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url().'categories' ?>">Categories</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a class="nav-link" href="<?= base_url() ?>/posts/create">Create Post</a>
      </li>
      <li>
        <a class="nav-link" href="<?= base_url() ?>/categories/create">Create Category</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container" style="padding-top: 3em">