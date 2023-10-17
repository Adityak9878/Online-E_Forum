<!-- navbar -->

<?php 

session_start();

include "_loginmodal.php" ;
include "_signupmodal.php";



echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="https://seeklogo.com/images/D/discuss-among-us-logo-342D6E4731-seeklogo.com.png" width="30"
            height="30" alt="">
        iDiscuss
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Top Category
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>';

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==True )
        {
            echo '<form class="form-inline my-2 my-lg-0 method="get" action="search.php">
            <input class="form-control mr-sm-2" type="search" name="search" 
            placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            <p class="text-light bg-dark my-0 mx-2"><b>Welcome  '.$_SESSION['useremail'].'</b></p>
            <a href="partials/_logout.php" role="button" class="btn btn-outline-success mx-2">Logout</a>
            </form>';
        }

        else
        {
            echo '<form class="form-inline my-2 my-lg-0 method="get" action="search.php">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          <button type="button" class="btn btn-outline-success mx-2" data-toggle="modal"
                     data-target="#_loginmodal">Login</button>
        <button type="button" class="btn btn-outline-success mx-1" data-toggle="modal"
            data-target="#_signupmodal">Signup</button>';
        }

        
    //    echo ' <button type="button" class="btn btn-outline-success mx-2" data-toggle="modal"
    //         data-target="#_loginmodal">Login</button>
    // //     <button type="button" class="btn btn-outline-success mx-1" data-toggle="modal"
    // //         data-target="#_signupmodal">Signup</button>';
   
        echo '    </div>
</nav>';




if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="True")
{
      echo '  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><b>Congratulation!</b></strong> You can now Login .
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}

?>