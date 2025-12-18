<?php
session_start();
include 'db.php';

$login_error = '';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin_artist.php");
        exit;
    } else {
        $login_error = "Invalid login! Try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to FestVerse</title>
  <link rel="icon" href="img/fvpics/festverselogo.png" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-[#fff8f5] font-sans scroll-smooth">

<!-- Login Modal -->
<div id="loginOverlay" class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm flex justify-center items-center z-50">
  <div id="loginBox" class="bg-white w-80 p-6 rounded-xl shadow-lg text-center animate-[fadeIn_0.25s_ease]">
    <span class="text-gray-500 text-xl float-right cursor-pointer" onclick="document.getElementById('loginOverlay').style.display='none'">×</span>
    <h2 class="text-2xl font-bold mb-4">Admin Login</h2>
    <?php if ($login_error): ?>
        <p class="text-red-500 text-sm mb-2"><?= $login_error ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" class="w-full p-2 mb-3 border rounded-md" required>
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-3 border rounded-md" required>
        <button type="submit" name="login" class="w-full py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition">Login</button>
    </form>
  </div>
</div>

<!-- Navigation Bar -->
<header class="fixed top-0 w-full bg-[#302046] z-30 shadow">
  <div class="flex justify-between items-center px-6 md:px-12 py-4">
    
    <!-- Logo -->
    <h1 class="text-[#ffdfd6] text-2xl font-bold font-[Merienda]">FestVerse</h1>

    <!-- Hamburger button (mobile only) -->
    <button 
      onclick="toggleMenu()" 
      class="text-[#ffdfd6] text-3xl md:hidden focus:outline-none">
      ☰
    </button>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex items-center gap-4">
      <a href="#home"><button class="text-[#ffdfd6] px-4 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">Home</button></a>
      <a href="#about"><button class="text-[#ffdfd6] px-4 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">About</button></a>
      <a href="#festivals"><button class="text-[#ffdfd6] px-4 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">Festivals</button></a>
      <a href="#contact"><button class="text-[#ffdfd6] px-4 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">Contact</button></a>
      <button onclick="openLogin()" class="text-[#ffdfd6] px-4 py-2 rounded-lg hover:bg-pink-600 hover:text-white transition">
        Admin's Dashboard
      </button>
    </nav>
  </div>

  <!-- Mobile Dropdown Menu -->
  <nav id="mobileMenu" class="hidden flex overflow-x-auto gap-10 bg-[#302046] px-6 pb-4 w-auto md:hidden">
    <a href="#home" class="py-2 text-[#ffdfd6] hover:text-white">Home</a>
    <a href="#about" class="py-2 text-[#ffdfd6] hover:text-white">About</a>
    <a href="#festivals" class="py-2 text-[#ffdfd6] hover:text-white">Festivals</a>
    <a href="#contact" class="py-2 text-[#ffdfd6] hover:text-white">Contact</a>
    <button onclick="openLogin()" class=" w-auto flex py-2 text-[#ffdfd6] hover:text-white text-left">
      Admin's Dashboard
    </button>
  </nav>
</header>

<!-- Home Section -->
<section id="home" class="relative flex justify-center items-center h-screen pt-15">
  <img src="img/fvpics/festivalv3.jpg" alt="festival picture" class="w-full h-full object-cover">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center text-white px-4">
    <h1 class="text-5xl md:text-6xl font-bold drop-shadow-lg mb-4">Welcome to FestVerse!</h1>
    <p class="text-lg md:text-2xl mb-6 drop-shadow-md">At FestVerse, we bring your events to life! With expertise in organizing and handling a diverse range of events, we ensure every moment is unforgettable.</p>
    <a href="#about"><button class="bg-yellow-300 px-6 py-3 rounded-lg font-bold hover:bg-yellow-400 transition">Learn more</button></a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bg-[#ffdfd6] text-[#553b79] py-24 px-4 md:px-24 flex flex-col items-center">
  <h2 class="text-4xl md:text-5xl font-bold mb-6 text-center">About Us</h2>
  <p class="text-center max-w-4xl mb-4 text-lg md:text-xl">FestVerse is a leading event management company specializing in promoting unique and unforgettable experiences. From music festivals to corporate events, we handle it all with creativity and precision.</p>
  <p class="text-center max-w-4xl mb-4 text-lg md:text-xl">Our mission is to connect people through the power of extraordinary events. With a passionate team of professionals, we deliver tailored experiences that leave lasting impressions.</p>
  <p class="text-center max-w-4xl mb-4 text-lg md:text-xl">Over the years, we’ve successfully promoted renowned events such as Coachella, Heads in the Clouds, and Lollapalooza, earning a reputation as industry pioneers. Our commitment to excellence ensures that every event we undertake is memorable, innovative, and perfectly executed.</p>

  <!-- Image Slider -->
  <div class="relative w-full max-w-4xl mt-8">
    <div class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory shadow-lg rounded-lg">
      <img id="slide-1" src="img/fvpics/hitc2021.jpg" alt="hitc202" class="flex-shrink-0 w-full snap-start object-cover rounded-lg">
      <img id="slide-2" src="img/fvpics/coachella2021.jpg" alt="coachella 2021" class="flex-shrink-0 w-full snap-start object-cover rounded-lg">
      <img id="slide-3" src="img/fvpics/lollapalooza2023.png" alt="lollapalooza 2023" class="flex-shrink-0 w-full snap-start object-cover rounded-lg">
    </div>
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
      <a href="#slide-1" class="w-2 h-2 rounded-full bg-white/75 hover:bg-white"></a>
      <a href="#slide-2" class="w-2 h-2 rounded-full bg-white/75 hover:bg-white"></a>
      <a href="#slide-3" class="w-2 h-2 rounded-full bg-white/75 hover:bg-white"></a>
    </div>
  </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-[#ffdfd6] text-[#553b79] py-24 px-4 place-items-center">
  <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">Meet our Team.</h2>
 <div class="flex overflow-x-auto gap-6 py-6 snap-x w-[90%] place-self-center snap-mandatory">
  <!-- Team Card Example -->
  <div class="w-80 h-[28rem] bg-[#73559c] rounded-2xl p-5 flex-shrink-0 snap-center text-white flex flex-col justify-start
              shadow-inner shadow-[inset_5px_5px_10px_rgba(0,0,0,0.5),inset_-5px_-5px_10px_rgba(165,149,149,0.1)]
              hover:shadow-[inset_5px_5px_15px_rgba(0,0,0,0.6),inset_-5px_-5px_15px_rgba(165,149,149,0.2)] transition-shadow duration-300">
    <img src="img/profiles/Allen.webp" alt="Allen's Picture" class="w-60 h-60 object-cover rounded-xl mb-4 mx-auto">
    <h3 class="text-xl font-semibold text-center mb-1">Allen Icee Dequiros</h3>
    <p class="text-center mb-2">Arts Department</p>
    <h5 class="text-sm text-center font-light">"I'll be the villain in their stories, as long as I remain the devil in my own."</h5>
  </div>

  <div class="w-80 h-[28rem] bg-[#73559c] rounded-2xl p-5 flex-shrink-0 snap-center text-white flex flex-col justify-start
              shadow-inner shadow-[inset_5px_5px_10px_rgba(0,0,0,0.5),inset_-5px_-5px_10px_rgba(165,149,149,0.1)]
              hover:shadow-[inset_5px_5px_15px_rgba(0,0,0,0.6),inset_-5px_-5px_15px_rgba(165,149,149,0.2)] transition-shadow duration-300">
    <img src="img/profiles/marianneRil.jpg" alt="Marianne's Picture" class="w-60 h-60 object-cover rounded-xl mb-4 mx-auto">
    <h3 class="text-xl font-semibold text-center mb-1">Marianne Balen</h3>
    <p class="text-center mb-2">Web Developer</p>
    <h5 class="text-sm text-center font-light">"You mustn't be afraid to try new things. If you never try, you'll never know" -Madame Ping</h5>
  </div>

  <div class="w-80 h-[28rem] bg-[#73559c] rounded-2xl p-5 flex-shrink-0 snap-center text-white flex flex-col justify-start
              shadow-inner shadow-[inset_5px_5px_10px_rgba(0,0,0,0.5),inset_-5px_-5px_10px_rgba(165,149,149,0.1)]
              hover:shadow-[inset_5px_5px_15px_rgba(0,0,0,0.6),inset_-5px_-5px_15px_rgba(165,149,149,0.2)] transition-shadow duration-300">
    <img src="img/profiles/FilsonRil.jpg" alt="Filson's Picture" class="w-60 h-60 object-cover rounded-xl mb-4 mx-auto">
    <h3 class="text-xl font-semibold text-center mb-1">Filson John Bequibel</h3>
    <p class="text-center mb-2">Mabait</p>
    <h5 class="text-sm text-center font-light">"Wooohoooo! Babum Babumm"</h5>
  </div>

  <div class="w-80 h-[28rem] bg-[#73559c] rounded-2xl p-5 flex-shrink-0 snap-center text-white flex flex-col justify-start
              shadow-inner shadow-[inset_5px_5px_10px_rgba(0,0,0,0.5),inset_-5px_-5px_10px_rgba(165,149,149,0.1)]
              hover:shadow-[inset_5px_5px_15px_rgba(0,0,0,0.6),inset_-5px_-5px_15px_rgba(165,149,149,0.2)] transition-shadow duration-300">
    <img src="img/profiles/anRil.jpg" alt="Anthony's Picture" class="w-60 h-60 object-cover rounded-xl mb-4 mx-auto">
    <h3 class="text-xl font-semibold text-center mb-1">Anthony Aguiflor</h3>
    <p class="text-center mb-2">Macho Man</p>
    <h5 class="text-sm text-center font-light">"Sabi nang dili ako mag napkin wanhandred parsent"</h5>
  </div>

  <div class="w-80 h-[28rem] bg-[#73559c] rounded-2xl p-5 flex-shrink-0 snap-center text-white flex flex-col justify-start
              shadow-inner shadow-[inset_5px_5px_10px_rgba(0,0,0,0.5),inset_-5px_-5px_10px_rgba(165,149,149,0.1)]
              hover:shadow-[inset_5px_5px_15px_rgba(0,0,0,0.6),inset_-5px_-5px_15px_rgba(165,149,149,0.2)] transition-shadow duration-300">
    <img src="img/profiles/Ynangas.jpg" alt="Yna's Picture" class="w-60 h-60 object-cover rounded-xl mb-4 mx-auto">
    <h3 class="text-xl font-semibold text-center mb-1">Yna Grace Cayme</h3>
    <p class="text-center mb-2">Paper Man</p>
    <h5 class="text-sm text-center font-light">"Yes Boss!"</h5>
  </div>
</div>


</section>

<!-- Festivals Section -->
<section id="festivals" class="bg-[#ffdfd6] text-[#553b79] py-24 px-4 flex flex-col items-center">
  <h2 class="text-4xl md:text-5xl font-bold mb-4 text-center">Festivals</h2>
  <p class="text-lg md:text-xl text-center max-w-3xl mb-8">Explore our lineup of exciting festivals happening across the globe. Join us to experience music, culture, and joy!</p>
  <div class="flex flex-wrap justify-center items-center gap-8">
    <a href="indexCoach.php"><img src="img/fvpics/coachellalogo.png" alt="coachella logo" class="w-40 rounded-lg shadow-lg hover:scale-105 transition"></a>
    <img src="img/fvpics/HITC_Logo.png" alt="hitc logo" class="w-40 rounded-lg shadow-lg hover:scale-105 transition">
    <img src="img/fvpics/lollapalozalogo.png" alt="lollapalooza logo" class="w-40 rounded-lg shadow-lg hover:scale-105 transition">
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-[#b8a1d8] text-[#694f8e] py-16 px-4 flex flex-col items-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center">Contact Us</h2>
  <p class="text-lg md:text-xl mb-6 text-center">Have questions? Reach out to us via email or phone. We’d love to hear from you!</p>
  <div class="flex flex-col items-start gap-2 text-lg md:text-xl">
    <p><i class="fas fa-envelope"></i> : <a href="mailto:contact@festverse.com" class="font-bold hover:text-[#ffdfd6] transition">contact@festverse.com</a></p>
    <p><i class="fas fa-phone"></i> : <a href="tel:+18001234567" class="font-bold hover:text-[#ffdfd6] transition">+6393647228</a></p>
  </div>
</section>

<!-- Footer -->
<footer class="bg-[#302046] py-4 text-center text-[#ffdfd6cb]">
  <p>© 2024 FestVerse. All rights reserved.</p>
</footer>

<script>
 
      function openLogin() {
            document.getElementById("loginOverlay").style.display = "flex";
        }

      
        function closeLogin() {
            document.getElementById("loginOverlay").style.display = "none";
            document.getElementById("errorMsg").style.display = "none";
        }



   function toggleMenu() {
  const menu = document.getElementById("mobileMenu");
  menu.classList.toggle("hidden");
}

</script>
</body>
</html>
