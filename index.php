<!doctype html>
<?php
session_start();
?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="user.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .header {
            width: 100%;
            height: 200px;
        }

        .header1 {
            background: grey;
            height: 43px;
            display: flex;

        }

        .content-header1 {
            margin-left: 100px;
            margin-right: 100px;
            display: flex;
            grid-template-columns: 50% 50%;
        }

        .login-logout {
            display: flex;
            margin-left: 800px;
            padding: 5px;
            gap: 20px;
        }

        .add-account a {
            display: flex;
            text-decoration: none;
            color: white;
        }

        .login a {
            display: flex;
            text-decoration: none;
            color: white;
        }

        .basket a {
            display: flex;
            text-decoration: none;
        }

        .basket-icon {
            display: flex;
            height: 35px;
            border-radius: 5px;
        }

        .tel {
            display: flex;
            padding: 5px;
        }
        .tel p svg{
            color:red;
        }
        .logo_search {
            display: flex;
            padding: 30px;
            background: green;
        }
        .logo_search{
            margin-left: 100px;
            margin-right: 100px;
            background: green;
        }
        .logo_search1{
            background: green;
        }
        .navbar {
            background: green;
            border: 1px solid white;
        }

        .navbar-brand {
            color: white;
        }

        .nav-link {
            color: white;
            font-size: 20px;
            margin-left: 30px;
        }

        .search {
            margin-left: 200px;
        }

        .form-control {
            width: 300px;
        }

        .logout-basket {
            margin-left: 420px;
        }

        .logout-basket a button {
            color: white;
            border: 3px solid white;
        }

        .search .btn-outline-success {
            color: white;
            border: 3px solid white;
        }
    </style>
</head>

<body>
    <header>

        <!-- place navbar here -->
        <div class="container-fluild md-5 ">
            <div class="header btn-success">
                <div class="header1">
                    <div class=content-header1>
                        <div class="tel">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            <p>
                            <p>Hotline:<a> 0395142866</a></p>
                        </div>
                        <div class="login-logout">
                            <div class="add-account">
                                <a href="#">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sign-intersection-t-fill" viewBox="0 0 16 16">
                                            <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435ZM5 5h6v1.5H8.75V12h-1.5V6.5H5V5Z" />
                                        </svg></p>
                                    <p>Đăng nhập</p>
                                </a>
                            </div>
                            
                            <div class="login">
                                <a href="#">
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                                        </svg></p>
                                    <p>Thêm tài khoản</p>
                                </a>
                            </div>
                            <div class="basket">
                                <a href="#">
                                    <button class=" basket-icon " type="submit">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </p>
                                        <p>Giỏ hàng</p>

                                    </button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="logo_search1">
                    <div class="logo_search">
                        <div class="logo">
                            <h3><b class="navbar-brand" href="#">Anh Trần Shop</b></h3>
                        </div>
                        <div class="search">
                            <form class="d-flex my-2 my-lg-0">
                                <input class="form-control me-sm-2" type="text" placeholder="Search">
                                <button class="btn  btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="logout-basket">
                            <form class="d-flex my-2 my-lg-0">

                                <a href="logout.php">
                                    <button type="button" name="logout" class="btn logout btn-outline-success my-2 my-sm-0">Logout</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-sm navbar-light ">
                    <div class="container">

                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="Index.php">Home <span class="visually-hidden">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="About.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="product.php">Product</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Main function</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="#">Product</a>
                                        <a class="dropdown-item" href="#">Action 2</a>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="session">

                </div>
            </div>
        </div>
    </header>
    <main>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>