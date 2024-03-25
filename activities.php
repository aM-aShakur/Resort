<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
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

        .activity-image {
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .activity-image:hover {
            transform: scale(1.1);
        }
        #modalImage {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        #modalImage img {
            max-width: 80%;
            max-height: 80%;
            margin-top: 5%;
            border: 3px solid white;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
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
                  <a class="nav-link" href="#">Activities</a>
                  <a class="nav-link" href="reservation.php">Reservation</a>
                  <a class="nav-link" href="comments.php">Comments</a>
                </div>

              </div>
            </div>
          </nav>

    <h1>Activities at Pacific Trails</h1>

    <div class="container mt-5">
        <div class="row">
            <?php
            // Array containing paths to activity images
            $activity_images = ["image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg"];

            // Loop through each image and create HTML
            foreach ($activity_images as $image) {
                echo '<div class="col-md-3 mb-4">';
                echo '<img style="width: 300px; height: 200px;" class="activity-image img-fluid" src="' . $image . '" alt="Activity Image" onclick="showImage(\'' . $image . '\')">';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Modal for displaying image -->
    <div id="modalImage">
        <span onclick="closeModal()" class="close">&times;</span>
        <img id="modalImg" src="" alt="Modal Image">
    </div>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showImage(imageSrc) {
            var modal = document.getElementById('modalImage');
            var modalImg = document.getElementById('modalImg');
            modal.style.display = 'block';
            modalImg.src = imageSrc;
        }

        function closeModal() {
            var modal = document.getElementById('modalImage');
            modal.style.display = 'none';
        }
    </script>

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
