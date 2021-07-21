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
    <div class="container-fluid bg-light">
        <h3 class="text-center">Eureka hostels</h3>
    </div>

    <?php include "navigation/navigation.php";?>
    <div id="main">
    <div class="row">
        <div class="col">
            <div class="container w-100">
                <!-- carousel-->
                <?php include "includes/carousel.php";?>
                <!-- end of carousel-->
            </div>
        </div>
        <div class="col">
            <h3 class="text-center">What is Eureka</h3>
            <hr class="light">
            <blockquote>
                Eureka is an online platform that helps students find hostels easily.
                We allow estate owners to register their hostels in the platform 
                therefore allowing students to find hostels easily
                <br>
                Hostel owners are required to provide valid information about their hostels so
                as to enhance reliability of our service.
                It was created and designed by Maureen Keziah
            </blockquote>
        </div>
    </div>
    </div>

    <!--beginning of footer-->
    <?php include "includes/footer.php";?>
    <!-- end of footer-->
    <script src="js/jqery.js"></script>
    <script src="bootsrap/js/bootstrap.min.js"></script>

</body>
</html>
