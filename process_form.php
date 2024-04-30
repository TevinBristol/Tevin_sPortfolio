<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = sanitize_input($_POST["name"]);
  $last_name = sanitize_input($_POST["last_name"]);
  $phone = sanitize_input($_POST["phone"]);
  $email = sanitize_input($_POST["email"]);
  $instagram = sanitize_input($_POST["instagram"]);
  $other = sanitize_input($_POST["other"]);

  // Print the submitted data
  echo "<h1>Submitted Data:</h1>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Last Name:</strong> $last_name</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Instagram:</strong> $instagram</p>";
  echo "<p><strong>Other:</strong> $other</p>";
} else {
  // Redirect back to the form if accessed directly
  header("Location: phone_directory_form.html");
  exit();
}

function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
