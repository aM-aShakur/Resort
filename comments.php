<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        img {
            width: 25px;
            height: 25px;
        }

        footer {
            background-color: grey; 
            color: white; 
            text-align: center;
        }
    </style>

</head>
<body>
<?php
          $teamName = "Franco&Muhaymin";
          $teamEmail = "Franco&Muhaymin@mail.example.com";
        ?>

        <?php
          echo "<h1> $teamName's Resort </h1>";
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
                  <a class="nav-link" href="yurts.php">Yurts</a>
                  <a class="nav-link" href="activities.php">Activities</a>
                  <a class="nav-link" href="reservation.php">Reservation</a>
                  <a class="nav-link" href="#">Comments</a>
                </div>

              </div>
            </div>
          </nav>

    <div class="container mt-5">
        <h1>We treasure your comments</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="name@domain.com" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Your Comments</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comments</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user inputs
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];

            // Set up greeting title based on provided business logic
            $greeting_title = '';
            if (!empty($name)) {
                $greeting_title = "Dear $name";
            } elseif (!empty($email)) {
                $greeting_title = "Dear $email";
            } else {
                $greeting_title = "Dear Guest,";
            }

            // Display the greeting title and comment
            echo "<p>$greeting_title</p>";
            if (!empty($comment)) {
                echo "<p>Thank you for your comment:</p>";
                echo "<p>$comment</p>";
            } else {
                echo "<p>Please enter your comments.</p>";
            }
        }
        ?>
    </div>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
      echo "
      <footer>
        Copyright © 2024 $teamName's Resort
      </footer>
      <footer>
        email:$teamEmail
      </footer>";
    ?>
</body>
</html>
