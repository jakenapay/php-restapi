<?php
session_start();
require 'api/config/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="col-12 col-sm-12 col-md-10 col-lg-4 border rounded px-4 py-3">
                <h5 class="text-center dm-serif-text-regular">Login</h5>
                <hr>
                <form action="./api/user/login.php" method="GET">
                    <div class="form-group mb-2">
                        <label for="email" class="dm-serif-text-regular-italic">Email address</label>
                        <input type="email"
                            class="input-field dm-serif-text-regular-italic form-control form-control-sm" id="email"
                            name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="dm-serif-text-regular-italic">Password</label>
                        <input type="password"
                            class="input-field dm-serif-text-regular-italic form-control form-control-sm" id="password"
                            name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn main-button btn-sm w-100 dm-serif-text-regular-italic"><i
                            class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login</button>
                </form>
                <p class="text-center dm-serif-text-small mb-0 mt-2">Don't have an account? <a href="signup.php">Sign
                        up</a></p>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>