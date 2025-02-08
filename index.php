<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Realtime Chat App</title>
    <link rel="stylesheet" href="assets/style/main.css">
    <!-- Google FOnt and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First name" name="fname" >
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last name" name="lname">
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input placeholder="Email Address" name="email" >
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password" >
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field">
                        <label for="">Profile Picture</label>
                        <input type="file" name="avatar">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat!">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.html">Login now!</a></div>
        </section>
    </div>
    <script src="assets/js/password.js"></script>
    <script src="assets/js/signup.js"></script>
</body>
</html>