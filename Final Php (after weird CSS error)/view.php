<?php
  require_once('database.php');
  $database = new Database();
  $result = $database->read();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phantasy University - View</title>
  <meta name="description" content="This week we will be using OOP PHP to create and read with our CRUD application">
  <meta name="robots" content="noindex, nofollow">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="./css/style.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/unilogo.png" alt="header logo" width="40%" height="40%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Student Input</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Data</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Student Data</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" style="color: white;">Student Number</th>
                <th scope="col" style="color: white;">Name</th>
                <th scope="col" style="color: white;">Program</th>
                <th scope="col" style="color: white;">Term</th>
                <th scope="col" style="color: white;">Age</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo '<td style="color: white;">' . $row['stnumber'] . '</td>';
                    echo '<td style="color: white;">' . $row['stname'] . '</td>';
                    echo '<td style="color: white;">' . $row['stprogram'] . '</td>';
                    echo '<td style="color: white;">' . $row['stterm'] . '</td>';
                    echo '<td style="color: white;">' . $row['stage'] . '</td>';
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='5'>No records found</td></tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="text-center">&copy; <?php echo date("Y"); ?> Phantasy University. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>