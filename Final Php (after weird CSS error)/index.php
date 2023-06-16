<?php
  class Database{
    private $connection;

    function __construct(){
      $this->connect_db();
    }

    public function connect_db(){
      $this->connection = new mysqli('localhost', 'root', '', 'mydb');
      if($this->connection->connect_error){
        die("Database Connection Failed: " . $this->connection->connect_error);
      }
    }

    public function create($stnumber, $stname, $stprogram, $stterm, $stage){
      $sql = "INSERT INTO Phantasy (stnumber, stname, stprogram, stterm, stage) VALUES ('$stnumber', '$stname', '$stprogram', '$stterm', '$stage')";
      $res = $this->connection->query($sql);
      if($res){
        return true;
      } else{
        return false;
      }
    }

    public function read($stnumber=null){
      $sql = "SELECT * FROM Phantasy";
      if($stnumber){
        $sql .= " WHERE stnumber=$stnumber";
      }
      $res = $this->connection->query($sql);
      return $res;
    }
  }

  $database = new Database();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phantasy University</title>
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
  <style>
    /* Center the form inputs */
    .form-horizontal {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0 auto;
    }
  </style>
</head>
<body>
    <header>
      <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="./img/unilogo.png" alt="Header Logo" width="40%" height="40%"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Student Imput</a></li>
              <li class="nav-item"><a class="nav-link" href="view.php">Data</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <section class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Phantasy </br>University</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="index.php">
            <div class="form-group">
              <label for="stnumber" style="color: white;">Student Number:</label>
              <input type="text" name="stnumber" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stname" style="color: white;">Student Name:</label>
              <input type="text" name="stname" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stprogram" style="color: white;">Student Program:</label>
              <input type="text" name="stprogram" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stterm" style="color: white;">Student Term:</label>
              <input type="text" name="stterm" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="stage" style="color: white;">Student Age:</label>
              <input type="number" name="stage" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Save" class="btn btn-primary">
            </div>
          </form>
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

<?php
  if(isset($_POST['submit'])){
    $stnumber = $_POST['stnumber'];
    $stname = $_POST['stname'];
    $stprogram = $_POST['stprogram'];
    $stterm = $_POST['stterm'];
    $stage = $_POST['stage'];

    if($database->create($stnumber, $stname, $stprogram, $stterm, $stage)){
      echo '<script>alert("Record Created Successfully");</script>';
    } else{
      echo '<script>alert("Record Creation Failed");</script>';
    }
  }
?>