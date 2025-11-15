@extends('layouts.app')

@section('content')

<!-- UNDERSTANDING CLIMATE CHANGE -->
<section id="home" class="py-24 bg-transparent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center gap-12">

      <!-- Text -->
      <div class="md:w-1/2 text-white" data-aos="fade-right" data-aos-duration="1000">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
          Understanding<br>Climate Change
        </h1>
        <p class="text-lg md:text-xl mb-6 leading-relaxed">
          Climate change refers to long-term shifts in global temperatures and weather patterns.
          The rapid warming we see today is mainly due to human activities like burning fossil fuels,
          deforestation, and industrial emissions.
        </p>
        <p class="text-lg md:text-xl mb-8 leading-relaxed">
          Earth’s climate system involves the atmosphere, oceans, land, and ice. Human interference
          has disrupted this balance, causing extreme weather, rising sea levels, and biodiversity loss.
          Time to act is now.
        </p>
      </div>

      <!-- Image -->
      <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('images/understanding-climate.jpg') }}" alt="Understanding Climate Change" class="w-full h-auto rounded-none">
      </div>

    </div>
  </div>
</section>

<!-- EFFECTS -->
<section id="effects" class="py-24 bg-transparent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row-reverse items-center gap-12">
      
      <!-- Text -->
      <div class="md:w-1/2 text-white text-right md:text-right" data-aos="fade-left" data-aos-duration="1000">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">Effects of <br>Climate Change</h2>
        <p class="text-lg md:text-xl leading-relaxed mb-6">
          Climate change impacts our planet in many ways — from rising temperatures to extreme weather events. 
          These changes threaten ecosystems, human health, and food and water security.
        </p>
        <a href="{{ route('effects') }}" class="inline-block bg-white text-black px-6 py-3 font-semibold rounded-full hover:bg-gray-200 transition duration-300">
          Learn More →
        </a>
      </div>

      <!-- Image -->
      <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
        <img src="{{ asset('images/effects-placeholder.jpg') }}" alt="Effects of Climate Change" class="w-full h-auto rounded-none">
      </div>
    </div>
  </div>
</section>

<!-- CAUSES -->
<section id="causes" class="py-24 bg-transparent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center gap-12">
      
      <!-- Text -->
      <div class="md:w-1/2 text-white" data-aos="fade-right" data-aos-duration="1000">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">Causes of <br>Climate Change</h2>
        <p class="text-lg md:text-xl leading-relaxed mb-6">
          Human activities are the main drivers. Fossil fuel burning, deforestation, and industrial practices 
          have accelerated greenhouse gas accumulation, warming the planet.
        </p>
        <a href="{{ route('causes') }}" class="inline-block bg-white text-black px-6 py-3 font-semibold rounded-full hover:bg-gray-200 transition duration-300">
          Learn More →
        </a>
      </div>

      <!-- Image -->
      <div class="md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ asset('images/causes-placeholder.jpg') }}" alt="Causes of Climate Change" class="w-full h-auto rounded-none">
      </div>
    </div>
  </div>
</section>

<!-- PREVENTION -->
<section id="prevention" class="py-24 bg-transparent">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row-reverse items-center gap-12">
      
      <!-- Text -->
      <div class="md:w-1/2 text-white text-right md:text-right" data-aos="fade-left" data-aos-duration="1000">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">How We <br>Can Prevent Climate Change</h2>
        <p class="text-lg md:text-xl leading-relaxed mb-6">
          Tackling climate change requires global collaboration and individual action. Simple measures can make 
          a big difference — from switching to renewable energy to adopting sustainable habits.
        </p>
        <a href="{{ route('prevention') }}" class="inline-block bg-white text-black px-6 py-3 font-semibold rounded-full hover:bg-gray-200 transition duration-300">
          Learn More →
        </a>
      </div>

      <!-- Image -->
      <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{ asset('images/prevention-placeholder.jpg') }}" alt="Prevent Climate Change" class="w-full h-auto rounded-none">
      </div>
    </div>
  </div>
</section>

@endsection
