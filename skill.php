<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skill Development</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    h1, h2 {
      text-align: center;
    }
    .section {
      margin: 30px 0;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .card h3 {
      margin-top: 0;
    }
    .button {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 16px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
    .button:hover {
      background-color: #0056b3;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <h1>Skill Development Portal</h1>

  <div class="section">
    <input type="text" placeholder="Search skills...">
  </div>

  <div class="section">
    <h2>Skill Categories</h2>
    <div class="grid">
      <div class="card"><h3>Programming</h3><p>Learn languages like Python, Java, C++</p></div>
      <div class="card"><h3>Web Development</h3><p>HTML, CSS, JavaScript, and frameworks</p></div>
      <div class="card"><h3>Communication</h3><p>Improve your speaking, writing, and body language</p></div>
      <div class="card"><h3>Data Science & AI</h3><p>ML, AI, and data analysis skills</p></div>
    </div>
  </div>

  <div class="section">
    <h2>Trending Skills</h2>
    <div class="grid">
      <div class="card">
        <h3>Python</h3>
        <p>Most in-demand programming language</p>
        <a class="button" href="#">Learn Now</a>
      </div>
      <div class="card">
        <h3>ReactJS</h3>
        <p>Build modern web apps with ease</p>
        <a class="button" href="#">Learn Now</a>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Skill Levels</h2>
    <div class="grid">
      <div class="card"><h3>Beginner</h3><p>Start from scratch</p></div>
      <div class="card"><h3>Intermediate</h3><p>Boost your current skills</p></div>
      <div class="card"><h3>Advanced</h3><p>Master your domain</p></div>
    </div>
  </div>

  <div class="section">
    <h2>Learning Paths</h2>
    <div class="card">
      <h3>Web Development Roadmap</h3>
      <p>HTML > CSS > JavaScript > React > Projects</p>
    </div>
  </div>

  <div class="section">
    <h2>Top Resources</h2>
    <div class="grid">
      <div class="card"><h3>FreeCodeCamp</h3><p>Learn web development for free</p></div>
      <div class="card"><h3>Coursera</h3><p>Courses with certificates</p></div>
    </div>
  </div>

  <div class="section">
    <h2>Projects & Certifications</h2>
    <div class="card">
      <p>Mini Projects: Portfolio website, Calculator App</p>
      <p>Certifications: Google Data Analytics, Python by IBM</p>
    </div>
  </div>

</body>
</html>
