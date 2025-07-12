<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $password);
  $stmt->execute();

  echo "✅ Registered successfully. <a href='login.php'>Login now</a>";
  $stmt->close();
  $conn->close();
}
?>

<h2>Register</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required /><br>
  <input type="email" name="email" placeholder="Email" required /><br>
  <input type="password" name="password" placeholder="Password" required /><br>
  <button type="submit">Register</button>
</form>
