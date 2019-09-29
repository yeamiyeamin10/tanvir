 <?php
  session_start();

  //initialize variables

  $username="";
  $email="";

  $errors=array();

  //connect to //
  $db = mysqli_connect("localhost", "root", "", "server") or die("could not connect to the server");

  //register users

$username = mysqli_real_escape_string($db, $POST["username"]);
$email = mysqli_real_escape_string($db, $POST["email"]);
$password_1 = mysqli_real_escape_string($db, $POST["password_1"]);
$password_2 = mysqli_real_escape_string($db, $POST["password_2"]);

//form vadidation

if(empty($username)) {array_push($errors, "Username is required")};
if(empty($email)) {array_push($errors, "Email is required")};
if(empty($password_1)) {array_push($errors, "Password is required")};
if($password_1 != $password_2) {array_push($errors, "Password didn't match")};

//check db for existing same user name

$user_check_query = " SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1 ";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){

  if($user['username'] === $username) {array_push($errors, "User already exists.");}
  if($user['email'] === $email) {array_push("This email already has been used");}

}

//register the user if no errors
if(count($errors)==0){
  $password = md5($password_1);
  $query = "INSERT INTO user (username,email,password) VALUES ('$usernmae','$email','$password')";
  mysqli_query($db,$query);
  $SESSION['username'] = $username;
  $SESSION['success'] = "You are now logged in";

  header('location: index.html');
}

?>
