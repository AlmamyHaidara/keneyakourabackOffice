<?php require_once("./config/config.php");

session_start();
if (isset($_SESSION["user"])) {
    header('Location: ./index.php');
    exit();
}
if (isset($_POST["register"])) {
    extract($_POST);
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($passwordRepet)) {
        global $con;
        try {
            if ($password == $passwordRepet) {
                $req = $con->prepare("SELECT * FROM user where email=? ");
                $req->execute([$email]);
                $res  =  $req->fetchAll(PDO::FETCH_ASSOC);
                if (sizeof($res) == 0) {
                    // die($password);
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    $req = $con->prepare("INSERT INTO user (nom,prenom, email, password) value (?,?,?,?)");
                    $req->execute([$nom, $prenom, $email, $hash]);
                    $res  =  $req->fetchAll(PDO::FETCH_ASSOC);

                    header('Location: ./login.php');
                    exit();
                } else {
                    $message = "Vous avez deja un compte";
                    header('Location: ./login.php');
                    exit();
                }
            } else {
                $message = "Les deux mot de passe doivent etre egaux";
            }
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    } else {
        $message = "Veuillez remplire correctement les champs";
    }
}
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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="./register.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="nom">
                                        <p class="text-danger"><?= isset($message) ? $message : "" ?></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="prenom">
                                        <p class="text-danger"><?= isset($message) ? $message : "" ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                    <p class="text-danger"><?= isset($message) ? $message : "" ?></p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                        <p class="text-danger"><?= isset($message) ? $message : "" ?></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="passwordRepet">
                                        <p class="text-danger"><?= isset($message) ? $message : "" ?></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="register">
                                    Register Account
                                </button>
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href=".login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>