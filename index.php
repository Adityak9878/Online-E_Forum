<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>iDiscuss</title>
</head>

<body>


<?php require "partials/_dbconnect.php"; ?>
<?php require "partials/_header.php"; ?>
    


    <!-- sliding window -->
    <!-- <div class="container"> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://wallpaperaccess.com/full/5673719.jpg" height=400 width=400 class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.shutterstock.com/image-vector/programming-banner-coding-best-languages-260nw-1033896166.jpg"
                    height=400 width=500 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn1.expresscomputer.in/wp-content/uploads/2019/03/19124614/developer-3461405_1280.png"
                    height=400 width=500 class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <!-- </div> -->


    <!-- Rowing Boards -->
    <div class="container my-3 background-color:powderblue;">
        <h2 class="text-center"><b>Categories</b></h2>
        <div class="row">

            <!-- Fetch Categories -->
            <?php 
            $sql="SELECT * FROM `categories`";
            $res=mysqli_query($conn,$sql);

            while($row=mysqli_fetch_assoc($res))
            {
                // echo $row['category_id'];
                $id=$row['category_id'];
                $cat_desc=$row['category_disc'];
                $cat_name=$row['category_name'];
                echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="images/'.$id.'.jpeg"
                        width=150 height=150 class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat_name.'</a></h5>
                        <p class="card-text">'.$cat_desc.'</p>
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-info">View Threads</a>
                    </div>
                </div>
            </div>';
            
            }

         ?>



        <?php      require "partials/_footer.php"; ?>


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
                crossorigin="anonymous">
            </script>
</body>

</html>