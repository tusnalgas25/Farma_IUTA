
<x-app-layout>
    <style>
        .swiper-container {
    max-width: 50%; /* o el ancho máximo que desees */
    margin-left: auto;
    margin-right: auto;
  }

    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <!-- Carrusel de fotos con Swiper -->

            <!-- Carrusel de fotos con Swiper -->
            <div class="swiper-container">
            <div class="swiper-wrapper">
            <!-- Slides dinámicos -->
                    @foreach ($images as $image)
            <div class="swiper-slide"><img src="{{ $image->url }}" alt="{{ $image->alt }}"></div>
                    @endforeach
    </div>
    <!-- Paginación -->
<div class="swiper-pagination"></div>

<!-- Navegación -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

<!-- Scrollbar -->
<div class="swiper-scrollbar"></div>
</div>


        </div>
    </div>
</x-app-layout>
