<?php
session_start();
require '../global.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="AuthController.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName" placeholder="Name">
                                        <code><?php if (isset($_SESSION['flash']['name'])) {
                                                    print_r($_SESSION['flash']['name']);
                                                } ?></code>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="phone" id="exampleLastName" placeholder="phone">
                                        <code><?php if (isset($_SESSION['flash']['phone'])) {
                                                    print_r($_SESSION['flash']['phone']);
                                                } ?></code>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="mail" id="exampleInputEmail" placeholder="Email ">
                                    <code><?php if (isset($_SESSION['flash']['mail'])) {
                                                print_r($_SESSION['flash']['mail']);
                                            } ?></code>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address" id="exampleInputEmail" placeholder="Address">
                                    <code><?php if (isset($_SESSION['flash']['address'])) {
                                                print_r($_SESSION['flash']['address']);
                                            } ?></code>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                        <code><?php if (isset($_SESSION['flash']['password'])) {
                                                    print_r($_SESSION['flash']['password']);
                                                } ?></code>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="RepeatPassword" placeholder="Repeat Password">
                                        <code><?php if (isset($_SESSION['flash']['RepeatPassword'])) {
                                                    print_r($_SESSION['flash']['RepeatPassword']);
                                                }
                                                unset($_SESSION['flash']); ?></code>
                                    </div>
                                </div>
                                <button type="submit" name="btnRegister" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="LoginPdo.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>