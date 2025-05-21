<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Advanced 3D Roll Navbar - School System</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #75cbf6, #81c3ed);
      height: 100vh;
    }

    .navbar {
      background: linear-gradient(145deg, #0fe66f, #800303);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 8px 20px rgba(203, 36, 36, 0.2);
      border-bottom: 2px solid #730606;
    }

    .navbar h1 {
      color: #26d426;
      margin: 0;
      font-size: 1.6rem;
      letter-spacing: 1px;
      text-shadow: 0 1px 1px #fff;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 2rem;
      margin: 0;
      padding: 0;
    }

    .nav-links li {
      perspective: 1000px;
    }

    .nav-links li a {
      color: #444;
      text-decoration: none;
      font-weight: 600;
      padding: 10px 16px;
      display: inline-block;
      background: linear-gradient(145deg, #f0f0f0, #dcdcdc);
      border-radius: 8px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
      transform-style: preserve-3d;
      transition: all 0.6s ease;
    }

    .nav-links li a:hover {
      animation: rollFlip 1.2s forwards;
    }

    @keyframes rollFlip {
      0% {
        transform: rotateY(0deg);
        opacity: 1;
      }
      50% {
        transform: rotateY(180deg);
        opacity: 0;
      }
      100% {
        transform: rotateY(360deg);
        opacity: 1;
      }
    }

    /* Optional responsive tweak */
    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
        margin-top: 1rem;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <h1>School Portal</h1>
    <ul class="nav-links">
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Students</a></li>
      <li><a href="#">Teachers</a></li>
      <li><a href="#">Subjects</a></li>
      <li><a href="#">Exams</a></li>
    </ul>
  </nav>

</body>
</html>
