<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <p class="navbar-brand text-decoration-none" href="#">
    
    </p>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Sing In</button>
    </form>
  </div>
</nav>

    <section id="singUp" class="h-100 h-custom" >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">

              <div class="card-body">
                <h3 class="mb-md-3 text-center">Registration Info</h3>
    
                <form class="px-md-2" action="config/UserService.php" method="post">
    
                  <div class="form-outline mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                  </div>
    
                      <div class="form-outline mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" id="Email" />
                      </div>
   
                      <div class="form-outline mb-3">
                        <label class="form-label" for="Password">Password</label>
                        <input type="password" name="password" id="Password" class="form-control" />
                      </div>
                   
                      <div class="text-center">
                  <button type="submit" name="signup_btn" class="btn btn-success btn-lg ">Sing Up</button>
                </div>
                </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="h-100 h-custom" >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">

              <div class="card-body">
                <h3 class="mb-md-3 text-center">SING IN</h3>
    
                <form class="px-md-2" action="config/UserService.php" method="post">
    
                      <div class="form-outline mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" id="Email" />
                      </div>
   
                      <div class="form-outline mb-3">
                        <label class="form-label" for="Password">Password</label>
                        <input type="password" name="password" id="Password" class="form-control" />
                      </div>
                   
                      <div class="text-center">
                  <button type="submit" name="login_btn" class="btn btn-success btn-lg ">Sing Up</button>
                </div>
                </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>