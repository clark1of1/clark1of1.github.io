@extends('layouts.app')

@section('content')

<!-- HERO -->
<section id="causes" class="relative h-screen bg-cover bg-center" 
    style="background-image: url('https://cdn.prod.website-files.com/67857cc07ed4a73e28affa82/6806778623571cadedfcc3b2_Climate101.jpg')">
    
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-5xl md:text-6xl text-white font-bold mb-6" data-aos="fade-down">
            Causes of Climate Change
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-6 max-w-2xl" data-aos="fade-up">
            Climate change is driven by both human and natural factors — from fossil fuels and deforestation to volcanic activity and ocean circulation.
        </p>
    </div>
</section>


<!-- ============================= -->
<!-- HUMAN CAUSES – Alternating -->
<!-- ============================= -->

<section class="py-20">
    <h2 class="text-4xl font-bold text-center text-white mb-16" data-aos="fade-up">
        Major Human Causes
    </h2>

    <div class="space-y-24">

        <!-- FOSSIL FUELS (Left text / Right image) -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold text-white mb-4">Fossil Fuels</h3>
                <p class="text-gray-300 leading-relaxed">
                    Burning coal, oil, and natural gas releases large amounts of CO₂ — the main driver of global warming.
                </p>
            </div>

            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1600"
                 class="rounded-xl shadow-lg" data-aos="fade-left">
        </div>

        <!-- DEFORESTATION (Right text / Left image) -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?q=80&w=1600"
                 class="rounded-xl shadow-lg order-1 md:order-none" data-aos="fade-right">

            <div data-aos="fade-left">
                <h3 class="text-3xl font-bold text-white mb-4">Deforestation</h3>
                <p class="text-gray-300 leading-relaxed">
                    Cutting down forests reduces Earth’s ability to absorb carbon dioxide, speeding up global warming.
                </p>
            </div>
        </div>

        <!-- AGRICULTURE (Left text / Right image) -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold text-white mb-4">Agriculture & Industry</h3>
                <p class="text-gray-300 leading-relaxed">
                    Livestock farming releases methane, while factories emit nitrous oxide — both far more potent than CO₂.
                </p>
            </div>

            <img src="https://images.unsplash.com/photo-1581091012184-5c7da0c7e326?q=80&w=1600"
                 class="rounded-xl shadow-lg" data-aos="fade-left">
        </div>

    </div>
</section>


<!-- ============================= -->
<!-- NATURAL CAUSES – Alternating -->
<!-- ============================= -->

<section class="py-20">
    <h2 class="text-4xl font-bold text-center text-white mb-16" data-aos="fade-up">
        Natural Factors
    </h2>

    <div class="space-y-24">

        <!-- VOLCANIC ACTIVITY -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold text-white mb-4">Volcanic Activity</h3>
                <p class="text-gray-300 leading-relaxed">
                    Volcanoes release ash and gases that can temporarily warm or cool the planet.
                </p>
            </div>

            <img src="https://images.unsplash.com/photo-1502786129293-79981df4e689?q=80&w=1600"
                 class="rounded-xl shadow-lg" data-aos="fade-left">
        </div>

        <!-- SOLAR VARIATIONS -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <img src="https://images.unsplash.com/photo-1470115636492-6d2b56f9146e?q=80&w=1600"
                 class="rounded-xl shadow-lg order-1 md:order-none" data-aos="fade-right">

            <div data-aos="fade-left">
                <h3 class="text-3xl font-bold text-white mb-4">Solar Variations</h3>
                <p class="text-gray-300 leading-relaxed">
                    Fluctuations in the Sun’s energy slightly affect Earth’s climate — but far less than human activity.
                </p>
            </div>
        </div>

        <!-- OCEAN CURRENTS -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold text-white mb-4">Ocean Currents</h3>
                <p class="text-gray-300 leading-relaxed">
                    Changes in how oceans move heat around the globe influence temperature patterns.
                </p>
            </div>

            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1600"
                 class="rounded-xl shadow-lg" data-aos="fade-left">
        </div>

    </div>
</section>

@endsection
