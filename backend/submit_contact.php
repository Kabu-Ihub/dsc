<?php
$_contactName = $_POST['contactName'];
$_contactEmail = $_POST['contactEmail'];
$_contactSubject = $_POST['contactSubject'];
$_contactMessage = $_POST['contactMessage'];

if (!empty(contactName) || !empty(contactEmail) || !empty(contactSubject) || !empty(contactMessage)) {
  $host = 'localhost';
  $dbUsername = 'root';
  $dbPassword = 'dracular';
  $dbname = 'dsc';

  //Connection
  $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if (mysqli_connect_error()) {
    die('Connect_Error'( mysqli_connect_errno().')'. mysqli_connect_error()));
  }
  else {
    // $SELECT = "SELECT co
    $INSERT = "INSERT INTO `contact` (`contactName`, `contactEmail`, `contactSubject`, `contactMessage`) VALUES (?, ?, ?, ?)";

    $stmt = $con->prepare($INSERT);
    $stmt->bind_param($_contactName, $contactEmail, $_contactSubject, $_contactMessage);
    $stm->execute();
    $stm->close();
    $stm->close();
}
}
?>
