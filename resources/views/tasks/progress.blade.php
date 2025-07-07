<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Progress Tugas</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      background-color: #e6f4ea;
      font-family: 'Nunito', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #ffffff;
      border-radius: 1rem;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      padding: 2rem;
      max-width: 400px;
      text-align: center;
    }
    .card img {
      width: 48px;
      height: 48px;
      margin-bottom: 1rem;
    }
    .card h2 {
      color: #386641;
      margin-bottom: 1rem;
    }
    .progress-bar-container {
      background: #d8f3dc;
      border-radius: 1rem;
      height: 20px;
      overflow: hidden;
      margin: 1rem 0;
    }
    .progress-bar {
      background: #74c69d;
      height: 100%;
      width: {{ $progress }}%;
      transition: width 0.4s ease;
    }
    .percentage {
      color: #386641;
      font-weight: 600;
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Progress Icon" />
    <h2>Progress Tugas</h2>
    <div class="progress-bar-container">
      <div class="progress-bar"></div>
    </div>
    <div class="percentage">{{ $progress }}% dari tugas selesai</div>
  </div>
</body>
</html>
