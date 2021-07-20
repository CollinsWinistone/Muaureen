<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
    <?php include "navigation/navigation.php";?>

    <!-- main content-->
    <div class="container">
        <blockquote class="text-center">
            "Welcome to our platform.Help students find hostels.We are happy to have you"
        </blockquote>
        <!-- form for registration--> 
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">The email will be used to contact you by prospective customers</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Hostel Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hostel Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Location</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Location">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Conatct">
  </div>
  <div class="form-group mb-5">  
    <label for="exampleInputPassword1">Vacant Spaces</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Vacant spaces">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        <!-- end of form-->
    </div>
    <!-- end of main content-->
    <!--beginning of footer-->
    <?php include "includes/footer.php";?>
    <!-- end of footer-->
    <script src="js/jqery.js"></script>
    <script src="bootsrap/js/bootstrap.min.js"></script>
</body>
</html>