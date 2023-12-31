<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro Designer World</title>
    
    <link rel="Icon" type="Images/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-dark-subtle ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pro Designer World</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-md-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="designs.php">Designs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacts.php">contacts</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hi (1).jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Graphics Design</h5>
        <p>If You Can Dream It, We Can Design It.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hi (2).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Web Design & Wedsite Development</h5>
        <p>Designs That Speak for Themselves.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hi (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Digital Marketing with Design</h5>
        <p>Graphic Design That Makes a Difference.</p>
      </div>
    </div>
  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section class="my-5 ">
        <div class='py-5'>
            <h2 class="text-center">About Us</h2>
        </div>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-6 col-md-6 col-12'>
                    <img src="images/Untitled design (1).png" class='img-fluid aboutimg' alt="">
                </div>
                <div class='col-lg-6 col-md-6 col-12'>
                    <h2 class='display-4'>Welcome to Our Portfolio</h2>
                    <p class='py-5'>This portfolio is a collection of five years worth of design work including branding, literature design, packaging design, design for the web, illustration, and exhibition graphics.The ultimate in fine design, Brimming with passion and bursting with vision this provides creative services to both public and private clients throughout Bangladesh and online platforms.I hope you enjoy browsing the portfolio, and that I become an invaluable resource to your business and clients. Remember, you are only a phone call and contact online</p>
                    <a href="about.php" class='btn btn-success '> check More </a>
                </div>
            </div>
        </div>
    </section>





    
    <section class="my-5 ">
        <div class='py-5'>
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class='container-fluid'>



            <div class='row'>
                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card" > 
                    <img src="images/BC 005.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Business Card</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center  ">
                        <a href="designs.php" class="card-link btn btn-danger  ">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card " >
                    <img src="images/flayer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Flyer Design</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center">
                        <a href="#" class="card-link btn btn-danger">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card" >
                    <img src="images/cci.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Certificate</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center">
                        <a href="#" class="card-link btn btn-danger">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>
            </div>





            <div class='row'>
                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card" >
                    <img src="images/Ei.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Envelope</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center">
                        <a href="#" class="card-link btn btn-danger">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>
                
                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card " >
                    <img src="images/Ci.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wall Calendar 2024</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center">
                        <a href="#" class="card-link btn btn-danger">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>

                <div class='col-lg-4 col-md-4 col-12'>
                  <div class="card" >
                    <img src="images/logo 2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Logo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                    <div class="card-body text-center">
                        <a href="#" class="card-link btn btn-danger">Card link</a>
                        <!-- <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                    </div>
                </div>
              </div>



        </div>

    </section>

<section class="my-5 ">
  <div class='py-5'>
    <h2 class="text-center">Our Gallery</h2>
  </div>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/1.png" class="img-fluid pd-3 ">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/2.png" class="img-fluid pd-3">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/3.png" class="img-fluid pd-3">
        </div>
        
        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/4.png" class="img-fluid pd-3 mt-4">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/5.png" class="img-fluid pd-3 mt-4">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/6.png" class="img-fluid pd-3 mt-4">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/7.png" class="img-fluid pd-3 mt-4">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/8.png" class="img-fluid pd-3 mt-4">
        </div>

        <div class='col-lg-4 col-md-4 col-12'>
          <img src="images/9.png" class="img-fluid pd-3 mt-4">
        </div>

      </div>
    </div>

</section>


<?php

// // Include config file
// require_once "config.php";
 
// // Define variables and initialize with empty values
// $name = $address = $salary = "";
// $name_err = $address_err = $salary_err = "";
 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     // Validate name
//     $input_name = trim($_POST["name"]);
//     if(empty($input_name)){
//         $name_err = "Please enter a name.";
//     } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
//         $name_err = "Please enter a valid name.";
//     } else{
//         $name = $input_name;
//     }
    
//     // Validate address
//     $input_address = trim($_POST["address"]);
//     if(empty($input_address)){
//         $address_err = "Please enter an address.";     
//     } else{
//         $address = $input_address;
//     }
    
//     // Validate salary
//     $input_salary = trim($_POST["salary"]);
//     if(empty($input_salary)){
//         $salary_err = "Please enter the salary amount.";     
//     } elseif(!ctype_digit($input_salary)){
//         $salary_err = "Please enter a positive integer value.";
//     } else{
//         $salary = $input_salary;
//     }
    
//     // Check input errors before inserting in database
//     if(empty($name_err) && empty($address_err) && empty($salary_err)){
//         // Prepare an insert statement
//         $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
//             // Set parameters
//             $param_name = $name;
//             $param_address = $address;
//             $param_salary = $salary;
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Records created successfully. Redirect to landing page
//                 header("location: index.php");
//                 exit();
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         mysqli_stmt_close($stmt);
//     }
    
//     // Close connection
//     mysqli_close($link);
// }

include("config.php");
    if (isset($_post["submit"])){
        $Username= $_post["user"];
        $Password= $_post["pass"];

        $sql="select * from login where Username ='$Username' and Password='$Password' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            header("location:index.php");
        }
        else{
            echo '<script>
                window.location.href="log.php";
                alert("Login failed.Invalid username or password!!!")
            </script>';
            }
    }
?>
 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Contact Us</h2>
                    <p>Please fill this form and submit </p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html> -->







<!-- <section class="my-5 ">
  <div class='py-5'>
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Contact</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>SN</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>E-mail</th>";
                                        echo "<th>Phone Number</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>

</section> -->


<!-- <section class="my-5 ">
  <div class='py-5'>
    <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto ">
    <form action='userinfo.php' method='post'>
      <div class='form-group'>
        <ladel> Username </ladel>
        <input type="text" name="user" class='form-control' autocomplete="off">

      </div>

      <div class='form-group'>
        <ladel> E-mail </ladel>
        <input type="text" name="email" class='form-control' autocomplete="off">

      </div>

      <div class='form-group'>
        <ladel> Mobile </ladel>
        <input type="text" name="mobile" class='form-control' autocomplete="off">

      </div>

      <div class='form-group'>
        <ladel> Comments </ladel>
        <textarea class="form-control" name="comments" autocomplete="off">

        </textarea>

      </div>

      <button type="submit" class="btn btn-success"> Submit </button>

    </form>
  </div>


</section> -->
<br>
<br><br>
<footer > 
  <h6 class="p-3 bg-dark text-white text-centers footer">@prodesignerworldProduction</h6>
</footer>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>