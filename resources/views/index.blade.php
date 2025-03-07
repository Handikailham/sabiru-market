@extends('layouts.app')

@section('title', 'Sabiru Market')

@section('content')
    <!-- Hero / Jumbotron Section -->
    <section class="relative text-center flex items-center justify-center" style="min-height: 500px;">
        <!-- Background Image with low opacity and larger size -->
        <div class="absolute inset-0 bg-cover bg-center opacity-80" style="background-image: url('uploads/pp.jpg'); background-size: 100%;"></div>

        <div class="relative z-10 text-center">
            <h1 class="text-5xl font-bold text-white drop-shadow-lg">All Fast Food is Available at Sabiru</h1>
            <p class="text-gray-900 mt-4 drop-shadow-md">We are just a click away from your favorite delicious fast food.</p>
            <a href="{{ route('product.index') }}">
                <button
                    type="submit"
                    class="flex justify-center gap-2 items-center mx-auto shadow-xl text-lg bg-gray-50 backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-orange-500 hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group"
                >
                    Jelajahi Menu
                    <svg
                        class="w-8 h-8 justify-end group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                        viewBox="0 0 16 19"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                            class="fill-gray-800 group-hover:fill-gray-800"
                        ></path>
                    </svg>
                </button>
            </a>
        </div>
    </section>

        <section class="mt-12"> <div class="bg-white shadow-md rounded-lg p-6 flex justify-around"> 
            <div class="text-center"> 
                <i class="fas fa-truck text-4xl text-orange-500"></i> 
                <h3 class="text-lg font-bold mt-2">Fast Delivery</h3> 
                <p class="text-gray-600">Within 30 minutes</p> 
            </div> 
            <div class="text-center"> 
                <i class="fas fa-utensils text-4xl text-orange-500"></i> 
                <h3 class="text-lg font-bold mt-2">Fresh Food</h3> 
                <p class="text-gray-600">Made to order</p> 
            </div> 
            <div class="text-center"> 
                <i class="fas fa-shipping-fast text-4xl text-orange-500"></i> 
                <h3 class="text-lg font-bold mt-2">Free Delivery</h3> 
                <p class="text-gray-600">On orders over $50</p> 
            </div> 
        </div> 
    </section> 

    <!-- Section Informasi -->
    <section class="mt-12">
        <h2 class="text-3xl font-bold text-gray-800">
         Our
         <span class="text-orange-500">
          Regular
         </span>
         Menu
        </h2>
        <p class="text-gray-600 mt-2">
         These are our regular menus that our customers love.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Chicken Burger" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/o9Ee3Clxfb60TTyxYHzoMX47OHhSbcNXdKaNHJMLmK0.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Chicken Burger
          </h3>
          <p class="text-gray-600">
           $3.50
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Chicken Pizza" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/FVVD6QIybZC6ULAHzuQQvl95Dx9BqvXoFurVWzT5VKU.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Chicken Pizza
          </h3>
          <p class="text-gray-600">
           $4.20
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Chicken Fry" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/dhRd4o1BgkVezgU2vPttiAzq3tT7ZrMtsRsJq-zzVtY.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Chicken Fry
          </h3>
          <p class="text-gray-600">
           $5.00
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Grill Sandwich" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/pY8ijI8xU3Mrvt91Y27RNeBzefk0p5ZsWu1O25UTmlY.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Grill Sandwich
          </h3>
          <p class="text-gray-600">
           $4.80
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Taco Train" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/i0Ho3gDqFrTpuMo3Mh2Nr706gh6maDmyqObVj4jj1Bc.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Taco Train
          </h3>
          <p class="text-gray-600">
           $3.63
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
         <div class="bg-white shadow-md rounded-lg p-4 text-center">
          <img alt="Noodle's Ramen" class="mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/NlSSAcHSG68AN6TbInn5aest4BTY_BoZRR4nL2893Gg.jpg" width="100"/>
          <h3 class="text-lg font-bold mt-2">
           Noodle's Ramen
          </h3>
          <p class="text-gray-600">
           $6.00
          </p>
          <a href="{{ route('product.index') }}">
            <button
              class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter text-white bg-gray-800 rounded-md group"
            >
              <span
                class="absolute w-0 h-0 transition-all duration-500 ease-out bg-orange-600 rounded-full group-hover:w-56 group-hover:h-56"
              ></span>
              <span class="absolute bottom-0 left-0 h-full -ml-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="w-auto h-full opacity-100 object-stretch"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                  ></path>
                </svg>
              </span>
              <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="object-cover w-full h-full"
                  viewBox="0 0 487 487"
                >
                  <path
                    fill-opacity=".1"
                    fill-rule="nonzero"
                    fill="#FFF"
                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                  ></path>
                </svg>
              </span>
              <span
                class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"
              ></span>
              <span class="relative text-base font-semibold">Buy Now</span>
            </button>
          </a>
         </div>
        </div>
       </section>

       <section class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white shadow-md rounded-lg p-4 text-center relative">
         <img alt="25% Discount on Burger" class="w-full rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/drftrdfTp2JJRAGo6qPQr2shMX1-XbZJN7iZf78ORko.jpg" width="400"/>
         <div class="absolute top-4 left-4 bg-red-500 text-white px-2 py-1 rounded-full">
          25% Discount
         </div>
        </div>
        <div class="grid grid-cols-1 gap-4">
         <div class="bg-yellow-500 text-white p-4 rounded-lg text-center">
          <h3 class="text-lg font-bold">
           Save 20%
          </h3>
          <p>
           On your next order
          </p>
         </div>
         <div class="bg-green-500 text-white p-4 rounded-lg text-center">
          <h3 class="text-lg font-bold">
           15% Off
          </h3>
          <p>
           Tortilla Wrap Tacos
          </p>
         </div>
        </div>
       </section>
@endsection
