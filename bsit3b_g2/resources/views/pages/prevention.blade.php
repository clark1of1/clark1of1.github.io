@extends('layouts.app')

@section('content')

<!-- MAIN SECTION -->
<section id="prevention" class="relative h-screen bg-cover bg-center" 
           style="background-image: url(https://caltechsites-prod-assets.s3.amazonaws.com/scienceexchange/images/wind-turbine-future-energy.2e16d0ba.fill-933x525-c100.jpg">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
        How to Prevent Climate Change
      </h1>
      <p class="text-lg md:text-xl text-gray-300 mb-6 max-w-2xl" data-aos="fade-up">
      Preventing climate change requires collective action — reducing emissions, conserving energy, and restoring nature.
      Every choice we make contributes to a cleaner, more sustainable future for our planet.
        </p>
    </div>
  </section>

<section id="actions" class="py-24 bg-gray-900">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-green-400 mb-16" data-aos="fade-up">
      Key Actions
    </h2>

    <ul class="space-y-6 text-gray-300 text-lg" data-aos="fade-up" data-aos-delay="200">
      <li>✅ Switch to renewable energy sources like solar, wind, and hydro power.</li>
      <li>✅ Reduce energy consumption and improve efficiency in homes and industries.</li>
      <li>✅ Reforest areas and protect existing forests to absorb CO₂ naturally.</li>
      <li>✅ Support sustainable agriculture and eco-friendly products.</li>
      <li>✅ Educate and advocate for environmental awareness and policy changes.</li>
    </ul>

      </a>
    </div>
  </div>
</section>

@endsection
