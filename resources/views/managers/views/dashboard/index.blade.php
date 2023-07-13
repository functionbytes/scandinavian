@extends('layouts.app')

@section('content')
<!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">Dashboard</h2>
    <p class="mt-1 text-gray-600 ">Whatever your status, our offers evolve according to your needs.</p>
  </div>

  <!-- Grid -->
  <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
    
    
    <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 ">
        <h4 class="font-medium text-lg text-gray-800 ">Locations</h4>
        <span class="mt-7 font-bold text-5xl text-gray-800 ">{{ count($locations) }}</span>
        <p class="mt-2 text-sm text-gray-500">count</p>
  
      </div>
      <!-- End Card -->
      
    <!-- Card -->
    <div class="flex flex-col border-2 border-blue-700 text-center shadow-xl rounded-xl p-8 ">
      <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs uppercase font-semibold bg-blue-100 text-blue-800 ">Most popular</span></p>
      <h4 class="font-medium text-lg text-gray-800 ">Posts</h4>
      <span class="mt-7 font-bold text-5xl text-gray-800 ">{{ count($posts) }}</span>
      <p class="mt-2 text-sm text-gray-500">count</p>
      
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col border-2 border-blue-700 text-center shadow-xl rounded-xl p-8 ">
      <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs uppercase font-semibold bg-blue-100 text-blue-800 ">Most popular</span></p>
      
      <h4 class="font-medium text-lg text-gray-800 ">Cars</h4>
      <span class="mt-7 font-bold text-5xl text-gray-800 ">{{ count($cars) }}</span>
      <p class="mt-2 text-sm text-gray-500">count</p>
    </div>
    <!-- End Card -->

    

      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8 ">
        <h4 class="font-medium text-lg text-gray-800 ">Authors</h4>
        <span class="mt-7 font-bold text-5xl text-gray-800 ">{{ count($authors) }}</span>
        <p class="mt-2 text-sm text-gray-500">count</p>
  
      </div>
      <!-- End Card -->

      
      
  </div>
  <!-- End Grid -->

</div>
<!-- End Pricing -->    

@endsection
