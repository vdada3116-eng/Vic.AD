<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Victor Dada - Pictures</title>
  <link rel="stylesheet" href="work.css">
  <style>
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin: 20px;
    }

    .gallery img {
      max-width: 200px;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: transform 0.2s;
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    body.dark-mode .gallery img {
      box-shadow: 0 4px 8px rgba(255,255,255,0.2);
    }

    h2 {
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <!-- Navbar (same as your other pages) -->
  <header>
    <nav class="navbar">
      <a href="home.html">Home</a>
      <a href="biography.html">Biography</a>
      <div class="dropdown">
        <button class="dropbtn">Media ⬇</button>
        <div class="dropdown-content">
          <a href="FirstPage.html">2023</a>
          <a href="FavoriteFood.html">2024</a>
          <a href="LinksAssignment.html">2025</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Pictures ⬇</button>
        <div class="dropdown-content">
          <a href="FirstPage.html">2023</a>
          <a href="FavoriteFood.html">2024</a>
          <a href="LinksAssignment.html">2025</a>
        </div>
      </div>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <h2>Pictures</h2>
  <div class="gallery">
    <?php
      $dir = "images/"; // folder with your pictures
      $files = array_diff(scandir($dir), array('.', '..'));

      foreach($files as $file){
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if(in_array($ext, array('jpg','jpeg','png','gif'))){
          echo "<img src='$dir$file' alt='Victor Dada Picture'>";
        }
      }
    ?>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Victor Dada</p>
  </footer>

</body>
</html>
