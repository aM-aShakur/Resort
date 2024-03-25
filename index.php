<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        
      <?php
          $teamName = "Franco&Muhaymin";
          $teamEmail = "Franco&Muhaymin@mail.example.com";
        ?>

        <?php
          echo "<h1> $teamName's Resort</h1>";
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
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="yurts.php">Yurts</a>
                  <a class="nav-link" href="activities.php">Activities</a>
                  <a class="nav-link" href="reservation.php">Reservation</a>
                  <a class="nav-link" href="comments.php">Comments</a>
                </div>

              </div>
            </div>
          </nav>

        
        <?php
          echo "<p>$teamName's Resort offers a special lodging experience on the New Jersey Eastern Coast. Relax in serenity with Panoramic views of the Atlantic Ocean.</p>";
        ?>

        <ul>Private yurts with decks overlooking the ocean</ul>
        <ul>Activities lodge with fireplace and gift shop</ul>
        <ul>Nightly fine dining at the Overlook Cafe</ul>
        <ul>Heated outdoor pool and whirlpool</ul>
        <ul>Guided hiking tours of the redwoods</ul>

        <?php 
          echo "<p>$teamName's Resort</p>";
        ?>
        
        <div class="address">
          <p>One Norml Ave, Montclair</p>
          <p>New Jersey NJ 07043</p>
          <p>973-655-4166</p>
        </div>
        
        
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