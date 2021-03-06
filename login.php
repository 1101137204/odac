<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>登入</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.minlogin.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>
        <script src="js/jquery.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">

            <form action="logincheck.php" method="POST" class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <div>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div> 
                <div>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                    <div id="msg"></div>
                </div>
                <!--
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                -->
                <div>
                    <button class="btn btn-lg btn-danger btn-block" id="sign" type="submit">Sign in</button>
                    <a class="btn btn-lg btn-primary btn-block"  href="signup.php">註冊</a>
                    <input type="hidden" name="refer" value="refer" >
                </div>
            </form>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
