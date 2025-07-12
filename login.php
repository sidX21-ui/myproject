<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $username, $hashed_password);
    $stmt->fetch();
    
    if (password_verify($password, $hashed_password)) {
      $_SESSION["user_id"] = $id;
      $_SESSION["username"] = $username;
      header("Location: index.php"); // change to index.php if dashboard renamed
      exit;
    } else {
      echo "❌ Incorrect password.";
    }
  } else {
    echo "❌ Email not found.";
  }

  $stmt->close();
  $conn->close();
}
?>

<h2>Login</h2>
<form method="POST">
  <input type="email" name="email" placeholder="Email" required /><br>
  <input type="password" name="password" placeholder="Password" required /><br>
  <button type="submit">Login</button>
</form>
