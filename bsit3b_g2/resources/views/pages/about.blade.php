@extends('layouts.app')

@section('content')

<!-- MAIN SECTION -->
<section id="about" class="relative pt-32 pb-24 bg-transparent text-white">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-8" data-aos="fade-down">
          About Us
        </h1>

        <p class="text-lg md:text-xl text-white max-w-3xl mx-auto leading-relaxed" 
           data-aos="fade-up" data-aos-delay="200">
            We are a team dedicated to educating communities about climate change —
            its causes, effects, and what we can do together to protect our planet.
            Our goal is to inspire awareness, responsibility, and meaningful action.
        </p>
    </div>
</section>

<!-- ABOUT CARDS -->
<section class="py-24 bg-transparent">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-white mb-16" data-aos="fade-up">
            What We Stand For
        </h2>

        <div class="grid md:grid-cols-3 gap-10">
            <!-- Mission -->
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg hover:scale-105 transform transition duration-300"
                 data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-bold mb-4 text-white">Mission</h3>
                <p class="text-white">
                    To provide clear, accessible information on climate science and motivate individuals to take part in sustainable action.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg hover:scale-105 transform transition duration-300"
                 data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-bold mb-4 text-white">Vision</h3>
                <p class="text-white">
                    A world where people are informed, empowered, and united in combating environmental challenges for a better future.
                </p>
            </div>

            <!-- Team -->
            <div class="bg-gray-800 rounded-2xl p-8 shadow-lg hover:scale-105 transform transition duration-300"
                 data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-2xl font-bold mb-4 text-white">Team</h3>
                <p class="text-white">
                    Developed by passionate students committed to raising climate awareness and promoting sustainability through education.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
