<?php
session_start();
$is_logged_in = isset($_SESSION["user_id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SkillBridge</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php if ($is_logged_in): ?>
  <!-- ✅ FULL DASHBOARD WHEN LOGGED IN -->
  <header>
    <div class="logo">SkillBridge</div>
    <nav>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Opportunities</a>
      <a href="./skill.php">Skills</a>
      <a href="#">Resources</a>
    </nav>
    <div class="user">
      <img src="How to watch all the Marvel movies and TV shows in chronological order.jpg" alt="User" />
      <span>Devesh</span>
      <a href="logout.php" style="margin-left: 15px;">Logout</a>
    </div>
  </header>

  <main>
    <section class="welcome">
      <h1>Welcome back, Siddhu!</h1>
      <p>Continue your journey toward career success with personalized recommendations and skill development.</p>
      <div class="stats">
        <div class="stat-box">
          <h2>12</h2>
          <p>Skills Completed</p>
        </div>
        <div class="stat-box">
          <h2>8</h2>
          <p>Applications Sent</p>
        </div>
        <div class="stat-box">
          <h2>85%</h2>
          <p>Profile Complete</p>
        </div>
      </div>
    </section>

    <section class="complete-profile">
      <h3>🔔 Complete <strong>Your Profile</strong></h3>
      <p>Add your skills and preferences to get better internship recommendations.</p>
      <div class="buttons">
        <button onclick="alert('Add Skills Clicked')">Add Skills</button>
        <button onclick="alert('Set Preferences Clicked')">Set Preferences</button>
      </div>
    </section>

    <section class="profile-form">
      <h3>📝 Update Profile</h3>
      <form id="profileForm">
        <label for="skill">Skill:</label>
        <input type="text" id="skill" name="skill" placeholder="e.g., JavaScript" required />

        <label for="preference">Internship Preference:</label>
        <input type="text" id="preference" name="preference" placeholder="e.g., Web Development" required />

        <button type="submit">Submit</button>
      </form>
    </section>
  </main>

  <footer>
    <p>© 2025 SkillBridge. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>

<?php else: ?>
  <!-- ❌ SHOW THIS IF NOT LOGGED IN -->
  <main style="padding: 40px;">
    <h2>Welcome to <strong>SkillBridge</strong></h2>

    <div class="auth-box">
      <h3>Login</h3>
      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div>

    <div class="auth-box">
      <h3>Register</h3>
      <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
      </form>
    </div>
  </main>
<?php endif; ?>

</body>
</html>
