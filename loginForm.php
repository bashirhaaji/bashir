<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="css/login_style.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

</head>
 
<body>
<!--Login form starts-->
  <section class="container-fluid">
  <!--row justify-content-center is used for centering the login form-->
    <section class="row justify-content-center">
    <!--Making the form responsive-->
      <section class="col-12 col-sm-6 col-md-4">
        <form class="form-container">
        <!--Binding the label and input together-->
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login </h4>
          <label for="Inputuser1">Username</label>
           <input type="email" class="form-control" id="Inputuser1" aria-describeby="usernameHelp" placeholder="Enter username">
        </div>
        <!--Binding the label and input together-->
        <div class="input-group mb-3">
  <input type="password" class="form-control" id="passwordInput" placeholder="Enter password">
  <div class="input-group-append">
    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
      <i class="fa fa-eye-slash" aria-hidden="true"></i>
    </span>
  </div>
</div>

<!-- Font Awesome (Make sure it's included) -->

<script>
  const togglePassword = document.querySelector("#togglePassword");
  const passwordInput = document.querySelector("#passwordInput");
  const icon = togglePassword.querySelector("i");

  togglePassword.addEventListener("click", function () {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    icon.classList.toggle("fa-eye");
    icon.classList.toggle("fa-eye-slash");
  });
</script>

  
        <button type="Sign in" class="btn btn-primary btn-block">Sign in</button>
        <div class="form-footer">
          <p> Don't have an account? <a href="#">Sign Up</a></p>
        </div>
        </form>
      </section>
    </section>
  </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
