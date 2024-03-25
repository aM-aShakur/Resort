<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
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
                  <a class="nav-link" href="#">Reservation</a>
                  <a class="nav-link" href="comments.php">Comments</a>
                </div>

              </div>
            </div>
          </nav>

    <div class="container mt-5">
        <?php
          echo "<h1> Reservation at $teamName's Resort </h1>";
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required autofocus>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Number & Street</label>
                <input class="form-control" id="address" name="address" rows="3" required></input>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input class="form-control" id="city" name="city" rows="3" required></input>
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input class="form-control" id="state" name="state" rows="3" required></input>
            </div>
            <div class="mb-3">
                <label for="zipCode" class="form-label">Zip Code</label>
                <input type="number" class="form-control" id="zipCode" name="zipCode" required>
            </div>
            <div class="mb-3">
                <label for="checkInDate" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
            </div>
            <div class="mb-3">
                <label for="checkOutDate" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required>
            </div>
            <div class="mb-3">
                <label for="peopleCount" class="form-label">Number of People</label>
                <input type="number" class="form-control" id="peopleCount" name="peopleCount" min="1" required>
            </div>
            <div class="mb-3">
                <label for="roomType" class="form-label">Room Type</label>
                <select class="form-select" id="roomType" name="roomType" required>
                    <option value="King">King</option>
                    <option value="Queen">Queen</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" placeholder="(###) ###-####" class="form-control" id="phoneNumber" name="phoneNumber" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" placeholder="Format: 123-456-7890" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" placeholder="name@domain.com" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="paymentMethod" class="form-label">Payment Method</label>
                <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                    <option value="MC">MC</option>
                    <option value="VISA">VISA</option>
                    <option value="AMEX">AMEX</option>
                    <option value="Discover">Discover</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number *</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" required>
            </div>
            <div class="mb-3">
                <label for="specialRequests" class="form-label">Special Requests</label>
                <textarea class="form-control" id="specialRequests" name="specialRequests" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Reserve a room</button>
            <button style="background-color: green;" class="btn btn-primary">Clear</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zipCode = $_POST["zipCode"];
        $checkInDate = $_POST["checkInDate"];
        $checkOutDate = $_POST["checkOutDate"];
        $numberOfDays = 4;
        $roomType = $_POST["roomType"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $peopleCount = $_POST["peopleCount"];
        $paymentMethod = $_POST["paymentMethod"];
        $cardNumber = $_POST["cardNumber"];
        $specialRequests = $_POST["specialRequests"];



        // Calculate total charge
        $roomPrices = ["King" => 200, "Queen" => 150, "Suite" => 300];
        $taxRate = 0.07;
        $totalCharge = ($roomPrices[$roomType] * $numberOfDays) * (1 + $taxRate);

        // Display total charge

        echo '<div class="container mt-5">';
        echo '<h3>Thank you ' .$firstName . $lastName . 'for your reservation</h3>';
        echo '<h3>Total charge is $' . number_format($totalCharge, 2) . '</h3>';
        echo '</div>';
    }
    ?>

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
