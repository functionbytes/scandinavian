@extends('layouts.app')

@section('content')


<div class="max-w-[85rem] mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
            
            <div class="px-6 py-4 grid md:flex md:justify-between md:items-center border-b border-gray-200 ">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 ">
                  Cars
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                  Add cars, edit and more.
                </p>
              </div>
  
            </div>
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 table-auto">
  
              <thead class="bg-gray-50 ">
                <tr>
                  <th scope="col" class="pl-6 py-3 text-left">
                    
                  </th>
  
                  <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                    <div class="flex items-center ">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                        title
                      </span>
                    </div>
                  </th>
  
  
                  <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                    <div class="flex items-center ">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                        date
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-right"></th>
                </tr>
              </thead>
  
              <tbody class="divide-y divide-gray-200 ">
                @foreach ($items as $item)
                <tr>
                  <td class="h-px w-px whitespace-nowrap">
                   
                  </td>
                  <td class="h-px w-px whitespace-nowrap">
                    <div class="pl-3 pr-2  text-left">
                      <span class="text-sm text-gray-600 ">{{ $item->title }}</span>
                    </div>
                  </td>
                  
                  <td class="h-px w-72 whitespace-nowrap">
                    <div class="pl-3 pr-2  text-left">
                      <span class="text-sm text-gray-600 ">{{ $item->created_at }}</span>
                    </div>
                  </td>
  
                  <td class="h-px w-px whitespace-nowrap">
                    <div class="px-6 py-2">
                      <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                        <a href="{{ route('posts.galery', $item->id ) }}" class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm ">
                          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
  
            </table>
  
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
              <div>
                <p class="text-sm text-gray-600 ">
                  <span class="font-semibold text-gray-800 ">{{ count($items) }}</span> results
                </p>
              </div>
              <div>
                <div class="inline-flex gap-x-2">
                  <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm  ">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Prev
                  </button>
                  <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm ">
                    Next
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
  
  
          </div>
        </div>
      </div>
    </div>
  
  </div>

  
@endsection
