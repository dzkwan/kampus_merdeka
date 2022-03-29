<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://cdn.iconscout.com/icon/premium/png-64-thumb/profile-3133022-2606796.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@600&display=swap"
        rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Login</title>
</head>

<style>
body {
    background: linear-gradient(to bottom right, #8479E1, #4D77FF);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 603px;
}

.container {
    margin-top: 150px;
    height: 603px;
}

img {
    border-radius: 20px 0 0 20px;
}

.kanan {
    border-radius: 0 20px 20px 0;
}
</style>

<body>
    <?php
    $user = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    $login = isset($_POST['submit']) ? $_POST['submit'] : '';

    function cekLogin($username, $password){
        if ($username == 'admin' && $password == 'mimin') header("location:home.php");
        else echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Enter username and password correctly',
                    })
                    </script>";
    }

    if (!empty($login)) cekLogin($user, $pass);
    ?>
    <div class="container d-flex justify-content-center">
        <div class="col-sm-8 d-inline-flex align-items-start">
            <div class="col-sm-6 position-relative" style="font-family: 'Poppins', sans-serif">
                <img class="position-absolute"
                    src="https://images.unsplash.com/photo-1646767361640-a3469b3f76db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDY2fFJfRnluLUd3dGx3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    width="100%" height="184.7%">
                <h1 class="position-relative px-4 pt-4 fs-2">Be inspired by what you see</h1>
                <p class="position-relative ps-4 pe-5" style="font-size:10pt">Be faithful to your own taste, because
                    nothing you really like is ever out of style</p>
            </div>
            <div class="col-sm-6 bg-light kanan">
                <div class="py-4">
                    <h2 align="center" style="font-family: 'Poppins', sans-serif">Form Login <span><i
                                class="bi bi-question-diamond-fill" data-bs-toggle="tooltip" data-bs-placement="right"
                                title="user : admin & pw : mimin"
                                style="font-size:12pt;vertical-align:middle"></i></span></h2>
                </div>
                <div class="px-4 pb-5" style="font-family: 'Nunito', sans-serif">
                    <form action="#" method="POST">
                        <div class="input-group flex-nowrap mb-4">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="addon-wrapping">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person"></i></span>
                        </div>
                        <div class="input-group flex-nowrap mb-4">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                            <span class="input-group-text" id="addon-wrapping" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="click to visible">
                                <i class="bi bi-eye-slash pw" id="togglePassword" style="cursor:pointer"></i>
                            </span>
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary form-control" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function() {
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("bi-eye");
});
</script>

</html>