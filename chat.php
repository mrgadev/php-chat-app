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
      <section class="chat-area">
        <header>
          <a href="#" class="back-icon"><i class="bi bi-arrow-left"></i></a>
          <img src="assets/img/profile.png" alt="" />
          <div class="details">
            <span>Muhammad Rizqi</span>
            <p>Active now</p>
          </div>
        </header>
        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, fugiat?</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="assets/img/profile.png" alt="">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, fugiat?</p>
            </div>
          </div>
        </div>

        <form action="#" class="typing-area">
          <input type="text" name="" id="" placeholder="Type a message here...">
          <button><i class="bi bi-send"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>
