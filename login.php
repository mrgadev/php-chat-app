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
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="First name">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field">
                        <input type="submit" value="Continue to Chat!">
                    </div>
            </form>
            <div class="link">Don't have an account yet? <a href="index.html">Register!</a></div>
        </section>
    </div>
</body>
</html>