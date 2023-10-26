<doctype.!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" tyle="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
  </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Raw studio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
       
        
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact</h2>
</div>
<div class="w=50 mx-5">
       <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>Name</label>
           <input type="text" placeholder="Enter your name"name="user" autocomplete="off" class="form-control">
          </div>

          <div class="form-group">
            <label>Email</label>
           <input type="email" placeholder="xyz@gmail.com" name="email" id="mail" class="form-control">
          </div>

      <div class="form-group">
            <label>Mobile</label>
           <input type="text" placeholder="+91" name="mobile" autocomplete="off" class="form-control">
          </div>
<div class="form-group">
           <label>Comments</label>
           <textarea class="form-control" name="comments" placeholder="Any querys?"></textarea>
        </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
<h3 class="text-center">Thank you for visiting our website.</h3>

<footer>
  
  <h5 class="p-3 bg-dark text-white text-center hola" > Copyright @Raw Studio</h5>
  
</footer>
</body>
</html>