<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"> Bonbon</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php"> LogIn</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="candybars.php">Candy Bars</a></li>
                      <li><a class="dropdown-item" href="brittlecandy.php">Brittle Candy</a></li>
                     
                      <li><a class="dropdown-item" href="chocolates.php">Chocolates</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>


    <div class="container">
        <div class="row">
            <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row">
                    <h3 style="font-size: large;"> HAVE AN ACCOUNT</h3>
                </div>
                

                <table class="table table-borderless">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary"> LOGIN</button></td>
                    </tr>




                </table>
            </div>

            <div class="col col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="row">
                    <h3 style="font-size: large;"> NEW USER</h3>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Place</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="text" class="form-control"></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary"> REGISTER </button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>