<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('theme/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('theme/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <br>
        <br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style=" background: url('data:image/jpeg;base64,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');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                        </div>

                                        <div class="form text-center">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div> 
                                </div>
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