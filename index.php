<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

<body class="bgcolor">
    <div class="container" style="height: 100vh">
        <div class="row d-flex justify-content-center align-items-center mt-5 pt-5">
            <div class="col-12 col-lg-5 p-1">
                <div class="bg-light m-2 p-4 rounded">
                    <h2 class="text-center dm-serif-text-regular">Welcome to your profile</h2>
                    <h5 class="text-center dm-serif-text-regular text-capitalize">Hello,
                        <?php echo $_SESSION['name']; ?>
                    </h5>
                    <hr>
                    <form action="./api/user/signup.php" method="POST">
                        <div class="form-group mb-2">
                            <label for="user_id" class="dm-serif-text-regular-italic">User ID</label>
                            <input type="text" class="input-field dm-serif-text-regular-small form-control form-control-sm"
                                id="user_id" name="user_id" aria-describedby="emailHelp"
                                value="<?php echo $_SESSION['user_id']; ?>" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name" class="dm-serif-text-regular-italic">Name</label>
                            <input type="text" class="input-field dm-serif-text-regular-small form-control form-control-sm"
                                id="name" name="name" aria-describedby="emailHelp"
                                value="<?php echo $_SESSION['name']; ?>" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email" class="dm-serif-text-regular-italic">Email address</label>
                            <input type="email" class="input-field dm-serif-text-regular-small form-control form-control-sm"
                                id="email" name="email" aria-describedby="emailHelp"
                                value="<?php echo $_SESSION['email']; ?>" readonly>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email" class="dm-serif-text-regular-italic">Role</label>
                            <input type="text"
                                class="input-field text-capitalize dm-serif-text-regular-small form-control form-control-sm"
                                id="email" name="email" aria-describedby="emailHelp"
                                value="<?php echo $_SESSION['role']; ?>" readonly>
                        </div>
                        <hr>
                        <div class="container p-0">
                            <code>JSON FROM API:</code>
                            <div class="bgcolor p-3 mb-4 json-viewer">
                                <p class="m-0"><?php echo json_encode($_SESSION['user_arr']); ?></p>
                            </div>

                    </form>
                </div>
                <a href="./api/user/logout.php" class="btn main-button dm-serif-text-regular btn-sm px-4">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
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