<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Realtime Chat App</title>
    <link rel="stylesheet" href="assets/style/main.css" />
    <!-- Google FOnt and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="wrapper">
      <section class="users">
        <header>
          <div class="content">
            <img src="assets/img/profile.png" alt="" />
            <div class="details">
              <span>Muhammad Rizqi</span>
              <p>Active now</p>
            </div>
          </div>
          <a href="#" class="logout">Logout</a>
        </header>
        <div class="search">
          <span class="text">Search user to start chat</span>
          <input type="text" placeholder="Search an user..." />
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="users-list">
          <a href="#">
            <div class="content">
              <img src="assets/img/profile.png" alt="">
              <div class="details">
                <span>Muhammad Rizqi</span>
                <p>This is a message</p>
              </div>
            </div>
            <div class="status-dot offline">
              <i class="bi bi-circle-fill"></i>
            </div>
          </a>

          <a href="#">
            <div class="content">
              <img src="assets/profile.png" alt="">
              <div class="details">
                <span>Muhammad Rizqi</span>
                <p>This is a message</p>
              </div>
            </div>
            <div class="status-dot ">
              <i class="bi bi-circle-fill"></i>
            </div>
          </a>

          <a href="#">
            <div class="content">
              <img src="assets/profile.png" alt="">
              <div class="details">
                <span>Muhammad Rizqi</span>
                <p>This is a message</p>
              </div>
            </div>
            <div class="status-dot ">
              <i class="bi bi-circle-fill"></i>
            </div>
          </a>

          <a href="#">
            <div class="content">
              <img src="assets/profile.png" alt="">
              <div class="details">
                <span>Muhammad Rizqi</span>
                <p>This is a message</p>
              </div>
            </div>
            <div class="status-dot ">
              <i class="bi bi-circle-fill"></i>
            </div>
          </a>
        </div>
      </section>
    </div>
    <script src="assets/js/users.js"></script>
  </body>
</html>
