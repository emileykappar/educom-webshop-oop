<?php 

require_once "database_model.php";
class UserModel extends DatabaseModel {

    protected function findUser($email){
        $sql = "SELECT * FROM users WHERE email =".$email;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0){

        }

    }
}
?>

<?php
// find user by email to see if user exitst (login form)
function findUserByEmail($email) {
   
    // set variables
    $conn = connectToDatabase(); // $conn now holds the function that creates the connection with the DB
    $email = mysqli_real_escape_string($conn, $email);
    $sql = "SELECT * FROM users WHERE email = '".$email."' "; // selects the right email from DB
    
    try {// function is triggered in a "try" block: so if the email is found and there is no exception the normal code is executed

        // mysqli_query runs the query (request of info) and puts the resulting data into a variable called $result.
        $result = mysqli_query($conn, $sql);
    
        if(!$result) {
            throw new Exception("Find user query failed, SQL: " . $sql . "error" . mysqli_error($conn));
        } else {
          $user = array();
          $user = mysqli_fetch_assoc($result); // fetches a row from table as an associative array, $result is required!
          //var_dump($user);
          return $user;
        }
    }
    finally {
    mysqli_close($conn);
    }
}
>?