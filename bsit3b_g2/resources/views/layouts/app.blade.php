<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSIT3B | GROUP2</title>

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- AOS Animation Library -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

  <style>
    html { scroll-behavior: smooth; }
    body { 
      font-family: 'Poppins', sans-serif;
      color: #f0fdf4;
      background-color: #0f172a;
      overflow-x: hidden;
    }

    h1, h2, h3, h4 {
      font-family: 'Playfair Display', serif;
      letter-spacing: 0.5px;
    }

    /* Dropdown animation */
    .dropdown-hidden { 
      max-height: 0; 
      opacity: 0; 
      transform: translateY(-10px);
      overflow: hidden; 
      transition: max-height 0.3s ease, opacity 0.3s ease, transform 0.3s ease; 
    }
    .dropdown-visible { 
      max-height: 500px; 
      opacity: 1; 
      transform: translateY(0);
      transition: max-height 0.3s ease, opacity 0.3s ease, transform 0.3s ease; 
    }

    /* Nav link underline */
    .nav-link { 
      position: relative; 
      padding-bottom: 2px; 
      transition: color 0.2s; 
      letter-spacing: 0.3px;
    }
    .nav-link::after { 
      content: ''; 
      position: absolute; 
      left: 0; 
      bottom: 0; 
      width: 0%; 
      height: 2px; 
      background-color: #979e9aff; 
      transition: width 0.3s ease; 
    }
    .nav-link:hover::after { width: 100%; }

    /* Rotate arrow */
    .rotate-0 { transform: rotate(0deg); transition: transform 0.3s ease; }
    .rotate-180 { transform: rotate(180deg); transition: transform 0.3s ease; }

    /* Footer links hover */
    .footer-link { position: relative; padding-bottom: 2px; transition: color 0.2s; }
    .footer-link::after { content: ''; position: absolute; left: 0; bottom: 0; width: 0%; height: 2px; background-color: #22c55e; transition: width 0.3s ease; }
    .footer-link:hover::after { width: 100%; }
  </style>
</head>

<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <header class="bg-gray-900 shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6 relative">
      <h1 class="text-2xl font-bold text-green-400"></h1>
      <nav class="relative">
        <ul class="flex space-x-6 text-lg text-gray-300 items-center">
          <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>

          <!-- Facts Dropdown -->
          <li class="relative">
            <button id="factsBtn" class="nav-link flex items-center focus:outline-none">
              Facts
              <svg id="factsArrow" class="ml-1 w-4 h-4 fill-current rotate-0 transition-transform" viewBox="0 0 20 20">
                <path d="M5.25 7.5l4.5 4.5 4.5-4.5H5.25z"/>
              </svg>
            </button>
            <ul id="factsDropdown" class="absolute left-0 mt-2 w-44 bg-gray-900 rounded-md shadow-lg dropdown-hidden z-50">
              <li><a href="{{ route('effects') }}" class="block px-4 py-2 text-gray-300 nav-link">Effects</a></li>
              <li><a href="{{ route('causes') }}" class="block px-4 py-2 text-gray-300 nav-link">Causes</a></li>
              <li><a href="{{ route('prevention') }}" class="block px-4 py-2 text-gray-300 nav-link">Prevention</a></li>
            </ul>
          </li>

          <!-- More Dropdown -->
          <li class="relative">
            <button id="moreBtn" class="nav-link flex items-center focus:outline-none">
              More
              <svg id="moreArrow" class="ml-1 w-4 h-4 fill-current rotate-0 transition-transform" viewBox="0 0 20 20">
                <path d="M5.25 7.5l4.5 4.5 4.5-4.5H5.25z"/>
              </svg>
            </button>
            <ul id="moreDropdown" class="absolute left-0 mt-2 w-44 bg-gray-900 rounded-md shadow-lg dropdown-hidden z-50">
              <li><a href="{{ route('about') }}" class="block px-4 py-2 text-gray-300 nav-link">About Us</a></li>
              <li><a href="{{ route('game') }}" class="block px-4 py-2 text-gray-300 nav-link">Game</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Home Hero Section -->
  @if (Request::routeIs('home'))
  <section id="home" class="relative h-screen bg-cover bg-center" 
           style="background-image: url('https://shorthand.com/the-craft/climate-change-stories/assets/UtL3Hbs4zx/marcus-kauffman-iretlqzeu4-unsplash-2560x1440.jpeg');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
        Learn About Climate Change
      </h1>
      <p class="text-lg md:text-xl text-gray-300 mb-6 max-w-2xl" data-aos="fade-up">
        Understand the causes, effects, and ways we can prevent climate change. Take action now for a sustainable future.
      </p>
      <div data-aos="fade-up" data-aos-delay="300">
        <a href="#effects" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg mr-4 transition transform hover:scale-105">
          See Effects
        </a>
        <a href="#causes" class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition transform hover:scale-105">
          Explore Causes
        </a>
      </div>
    </div>
  </section>
  @endif

  <!-- 🔧 FIXED MAIN: full-width support -->
  <main class="min-h-screen">
    @yield('content')
  </main>

  @yield('extra')

  <!-- Footer -->
  <footer class="bg-gray-950 text-center py-12 mt-12 text-gray-400">
    <p class="text-gray-400">&copy; 2025 BSIT3B Group2 | Advocates Against Climate Change</p>
  </footer>

  <!-- Scripts -->
  <script>
    AOS.init({ duration: 1000, once: true });

    const dropdowns = [
      {btn: document.getElementById('factsBtn'), menu: document.getElementById('factsDropdown'), arrow: document.getElementById('factsArrow')},
      {btn: document.getElementById('moreBtn'), menu: document.getElementById('moreDropdown'), arrow: document.getElementById('moreArrow')}
    ];

    dropdowns.forEach(d => {
      d.btn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdowns.forEach(other => {
          if(other.menu !== d.menu) {
            other.menu.classList.remove('dropdown-visible');
            other.menu.classList.add('dropdown-hidden');
            other.arrow.classList.remove('rotate-180');
            other.arrow.classList.add('rotate-0');
          }
        });
        d.menu.classList.toggle('dropdown-visible');
        d.menu.classList.toggle('dropdown-hidden');
        d.arrow.classList.toggle('rotate-180');
        d.arrow.classList.toggle('rotate-0');
      });
    });

    window.addEventListener('click', () => {
      dropdowns.forEach(d => {
        d.menu.classList.remove('dropdown-visible');
        d.menu.classList.add('dropdown-hidden');
        d.arrow.classList.remove('rotate-180');
        d.arrow.classList.add('rotate-0');
      });
    });
  </script>

</body>
</html>
