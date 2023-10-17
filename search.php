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





    <!-- Search Results Here !! -->

    <div class="container my-3 mx-3">
        <h1 class="py-3"> Result for <em>" <?php echo $_GET['search']?> " </em></h1>
        <div class="results">
            <?php
                $query=$_GET['search'];
                 $sql="SELECT * FROM `threads` WHERE MATCH (`thread_name`,`thread_disc`) against ('$query')";
                 $res=mysqli_query($conn,$sql);
                 $nores=True;
                 while($row=mysqli_fetch_assoc($res))
                     {
                        $nores=False;
                        $thread_name=$row['thread_name'];
                        $thread_desc=$row['thread_disc'];
                        $th_id=$row['thread_id'];
                        echo '<h3><a href="/Forum/thread.php?threadid='.$th_id.'" class="text-dark">'.$thread_name.'</a></h3>
                        <p>'.$thread_desc.'</p>';
                     }
                if($nores)
                {
                   echo' <div class="container">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4"><b>No Results Found ! </b></h1>
                            <p class="lead">To Edit or To write Select Appropiate Topic from 
                            Categories and Login then Post your Question and answer there :)</p>
                        </div>
                        </div>
                    </div>';
                }     
             ?>

        </div>
    </div>













    <?php      require "partials/_footer.php"; ?>









    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>