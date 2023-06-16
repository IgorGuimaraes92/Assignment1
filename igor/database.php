<?php
  // To save some time we are going to create a class to hold the database connection information.
  // As mentioned in the PDF we will define our class using the class keyword followed by the name of our class.
  class Database{
    // A private keyword, as the name suggests is the one that can only be accessed from within the class in which it is defined. 
    // All the keywords are by default under the public category unless they are specified as private or protected.
    private $connection;
    //A constructor allows you to initialize an object's properties upon creation of the object. 
    //If you create a __construct() function, 
    //PHP will automatically call this function when you create an object from a class.
    function __construct(){
      // In PHP, $this keyword references the current object of the class.    				
      //The $this keyword allows you to access the properties and methods of the current object within the class using the object operator
      $this->connect_db();
    }
    // The public access modifier allows you to access properties and methods from both inside and outside of the class.
    public function connect_db(){
      $this->connection = new mysqli('localhost', 'root', '', 'mydb');
      if($this->connection->connect_error){
        die("Database Connection Failed: " . $this->connection->connect_error);
      }
    }
    
    public function create($stnumber,$stname, $stprogram, $stterm, $stage){
      $sql = "INSERT INTO Phantasy (fname, lname, email) VALUES ('$stnumber','$stname','$stprogram','$stterm','$stage')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($stnumber=null){
		    $sql = "SELECT * FROM Phantasy";
		    if($stnumber){
          $sql .= " WHERE stnumber=$stnumber";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    /*
      This function has two parameters:
        The $inputs parameter is an associative array. It can be $_POST, $_GET, or a regular associative array.
        The $fields parameter is an array that specifies a list of fields with rules.
      The sanitize() function returns an array that contains the sanitized data.
    */
   /* public function sanitize($var){
      $return = mysqli_real_escape_string($this->connection, $var);
      return $return;
    }*/
  }
  $database = new Database();
?>
