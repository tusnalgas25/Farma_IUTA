<?php

namespace App\Http\Controllers;

use App\Models\CarouselImage;

class DashboardController extends Controller
{
    public function index()
    {

         $images = [
          (object) ['url' => 'img/pastillas.jpeg', 'alt' => 'Imagen 1'],
             (object) ['url' => 'img/pastillas3.jpg', 'alt' => 'Imagen 2'],
                (object) ['url' => 'img/pastillas2.jpg', 'alt' => 'Imagen 3'],
                    (object) ['url' => 'img/pastillas4.jpg', 'alt' => 'Imagen 4'],
                        (object) ['url' => 'img/pastillas5.png', 'alt' => 'Imagen 5'],
                            (object) ['url' => 'img/pastillas6.jpg', 'alt' => 'Imagen 6'],
                                (object) ['url' => 'img/refresco.png', 'alt' => 'Imagen 7'],
             // ... más imágenes
         ];

        return view('dashboard', compact('images')); // Pasar las imágenes a la vista
    }
}

