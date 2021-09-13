<!DOCTYPE html>
<html>
<head>
	<title><?= $data['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= BASEURL; ?>">BookMark</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if( isset($_SESSION['usr']) ) : ?>
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#myAccount">My Account</a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#addBookmarkModal">Add New Bookmark</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASEURL; ?>/home/logout" >Logout</a>
        </li>
      <?php else : ?>

        <li class="nav-item active">
          <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">Register</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="" data-toggle="modal" data-target="#loginModal">Login</a>
        </li>
      <?php endif; ?>
    </ul>
    <?php if( $data['title'] != "BookMark") : ?>
      <form action="<?= BASEURL; ?>/home/results" method="POST" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <?php endif; ?>
  </div>
</nav>	

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="<?= BASEURL; ?>">BookMark</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="" data-toggle="modal" data-target="#exampleModal">Register</a>
		      <a class="nav-item nav-link" href="" data-toggle="modal" data-target="#loginModal">Login</a>
		      <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About Me</a>
		      
		    </div>
		  </div>
	  </div>
</nav>	 -->