<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'connect.php';

$id =  rand(1, 999);
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$query = "INSERT INTO messages(id, name, email, comment) VALUES ('$id', '$name', '$email', '$comment')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}