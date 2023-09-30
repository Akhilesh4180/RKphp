
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get/Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/rkphp/21_Get_Post.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>  
</nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
    

            //Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contacts";

        // Create a Connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        //Die if Connection was not successful
        if(!$conn)
        {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        }
        else
      {
            
        

        //submit these to a database.
        // sql query to be executed
        
        $sql =  "INSERT INTO `contactsus2` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn,$sql);

        
        if($result)
        {
          echo '<div class="alert alert- alert-success dismissible fade show" role="alert">
          <strong>Sucess!</strong> Your entry  has been submitted sucessfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        }
        else
        {
            // echo "The record was not inserted successfully because of this error-->" . mysqli_error($conn);
            echo '<div class="alert alert- alert-danger dismissible fade show" role="alert">
            <strong>Error! </strong> we are facing some technical issue and your entry  has not submitted sucessfully! we regret the inconvinience caused!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      }
    }  
?>

<div class="container mt-3">
    <h1>Contact us for your concerns</h1>
<form action="/rkphp/28_Form.php" method="post">
  <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
          </div>
          
          
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
        </div>


        <div class="mb-3">
            <label for="desc"  class="form-label">Description</label>
            <textarea class="form-control"  name="desc" id="desc" cols="30" rows="10"></textarea>
            
        </div>
        
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>