 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="assets/css/style.css">

     <title>SHaredBoard</title>
 </head>
 <body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
  <a class="navbar-brand" href="#">SHaredBoard</a>
   

  <div class="collapse navbar-collapse" id=" ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=ROOT_URL ?>">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?=ROOT_URL ?>shares">Shares</a>
      </li>
      
      
    </ul>
    <div class="navbar-left">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=ROOT_URL ?>users/login">login</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?=ROOT_URL ?>users/register">register</a>
      </li>
      
      
    </ul>
    </div>
    
  </div>
</nav>
<div class="container">
    <?php require($view) ?>
</div>
 </body>
 </html>