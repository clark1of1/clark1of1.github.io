@extends('layouts.app')

@section('content')

<!-- MAIN SECTION -->
<section id="effects" class="relative h-screen bg-cover bg-center" 
           style="background-image: url(https://cdn.mos.cms.futurecdn.net/MHrHHVELvZuFzvPiYKT6SB.jpg);">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
        Effects of Climate Change
      </h1>
      <p class="text-lg md:text-xl text-gray-300 mb-6 max-w-2xl" data-aos="fade-up">
Climate change brings widespread consequences — from rising temperatures and melting ice caps to stronger storms and ecosystem disruptions.
      Understanding these effects helps us prepare and take action for a sustainable future.      </p>
    </div>
  </section>

<!-- MAJOR EFFECTS -->
<section id="major-effects" class="py-24 bg-transparent">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-green-400 mb-16" data-aos="fade-up">
      Major Effects
    </h2>

    <div class="grid md:grid-cols-3 gap-10">
      <!-- Rising Temperatures -->
      <div class="bg-gray-800 rounded-2xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-2xl font-bold mb-4 text-green-400">Rising Temperatures</h3>
        <p class="text-gray-300">
          Global heat levels are increasing, leading to droughts, wildfires, and heatwaves that affect ecosystems and human health.
        </p>
      </div>

      <!-- Melting Ice Caps -->
      <div class="bg-gray-800 rounded-2xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-2xl font-bold mb-4 text-green-400">Melting Ice Caps</h3>
        <p class="text-gray-300">
          Ice sheets in the Arctic and Antarctic are melting rapidly, causing rising sea levels and threatening coastal communities.
        </p>
      </div>

      <!-- Extreme Weather -->
      <div class="bg-gray-800 rounded-2xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-2xl font-bold mb-4 text-green-400">Extreme Weather</h3>
        <p class="text-gray-300">
          Climate change intensifies storms, floods, and hurricanes — resulting in loss of life and massive economic damage worldwide.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection
