<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yurts Page</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="yurts.css">
    </head>

    <body>
        
      <?php
          $teamName = "Franco&Muhaymin";
          $teamEmail = "Franco&Muhaymin@mail.example.com";
        ?>

        <nav class="navbar navbar-expand-sm bg-body-tertiary">
            <div style="background-color: rgb(0, 160, 83);" class="container-fluid">
              <img src="msu_cs_department_logo.png"></img>
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  <a class="nav-link" href="#">Yurts</a>
                  <a class="nav-link" href="activities.php">Activities</a>
                  <a class="nav-link" href="reservation.php">Reservation</a>
                  <a class="nav-link" href="comments.php">Comments</a>
                </div>

              </div>
            </div>
          </nav>

          <h1>The Yurts at Pacific Trails</h1>
          
          <h3>What is a yurt?</h3>
          <p>Our luxury yurts are permanent structures four feet off the ground. Each yurt has canvas walls, a wooden floor, and a roof dome that can be opened.</p>
        
          <h3>How are the yurts furnished?</h3>
          <p>Each yurt is furnished with a queen-size bed with down quilt and gas-fired stove. The luxury camping experience also includes electricity and a sink with hot and cold running water. Shower and restroom facilities are located in the lodge.</p>

          <h3>What should I bring?</h3>
          <p>Bring a sense of adventure and some time to relax! Most guests also pack comfortable walking shoes and plan to dress for changing weather with layers of clothing.</p>
    </body>

    <?php
      echo "
      <footer>
        Copyright © 2024 $teamName's Resort
      </footer>
      <footer>
        email:$teamEmail
      </footer>";
    ?>

</html>