

<div >
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6">
            @foreach($files as $file)
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl ">
                    <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl relative">
                        <img class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset('/managers/images/files/'.$file->file_path) }}" />
                        <button class="absolute top-2 right-2 mt-2 mr-2">
                            <div wire:click="likeFile({{ $file->id }})" class="rounded-full {{ $file->favorite ? 'bg-blue-700 hover:bg-blue-700 fill-white hover:fill-white' : 'bg-gray-800 hover:bg-gray-800 fill-white hover:fill-white' }}">
                                <svg class="w-9 h-9" viewBox="0 0 32 32">
                                    <path d="M22.682 11.318A4.485 4.485 0 0019.5 10a4.377 4.377 0 00-3.5 1.707A4.383 4.383 0 0012.5 10a4.5 4.5 0 00-3.182 7.682L16 24l6.682-6.318a4.5 4.5 0 000-6.364zm-1.4 4.933L16 21.247l-5.285-5A2.5 2.5 0 0112.5 12c1.437 0 2.312.681 3.5 2.625C17.187 12.681 18.062 12 19.5 12a2.5 2.5 0 011.785 4.251h-.003z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-700 ">
                        File
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 ">
                        {{ $file->file_path }}
                    </h3>
                    </div>
                    <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 ">
                        <a 
    
                        wire:click="edit({{ $file->id }})"
                        
                       // x-data={}
                        //x-on:click="window.livewire.emitUp('image-modal', 'editFile', '{{ $file->id }}')"
                        //wire:click="$emitTo('image-modal', 'editFile', '{{ $file->id }}')"
    
                        class="w-full py-3 select-none cursor-pointer px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl font-medium bg-white text-black shadow-sm align-middle hover:bg-blue-700  hover:text-white focus:outline-none  transition-all text-sm sm:p-4 " >
                            Manage
                        </a>
                        <a wire:click="delete({{ $file->id }})" class="w-full select-none cursor-pointer py-3 px-4 inline-flex justify-center items-center gap-2 rounded-br-xl font-medium bg-white text-black shadow-sm align-middle hover:bg-blue-700 hover:text-white  focus:outline-none  transition-all text-sm sm:p-4 " >
                            Delete
                        </a>
                    </div>
                </div>
            @endforeach
    
    
    
        </div>
      </div>
    
      
    
    
      
      
      <!-- Modal window  -->
      <div  class="fixed inset-0 z-50 overflow-y-auto {{ $modalFormVisible ? 'visib' : 'hidden'  }}" >
          <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="overflow-hidden transition-all transform  sm:max-w-lg sm:w-full">
              
    
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm ">
                  <div class="p-4 sm:p-7">
                    <div class="text-center">
                      <h2 class="block text-2xl font-bold text-gray-800 ">Image: {{ $idFile }}</h2>
                      <p class="mt-2 text-sm text-gray-600 ">
                        Can you edit some information of the image
                        
                      </p>
                    </div>
    
                    <div class="mt-5">
                      
    
                      <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6 ">Or</div>
    
    
                      <form wire:submit.prevent="update" enctype="multipart/form-data" class="" >
                        <div class="grid gap-y-4">
                          <!-- Form Group -->
                          <div>
                            <label for="titleFile" class="block text-sm mb-2 ">Title</label>
                            <div class="relative">
                              <input type="text" id="titleFile" placeholder="Enter title" wire:model="titleFile" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-700 focus:ring-blue-700  " required="" aria-describedby="email-error">
                            </div>
                          </div>
                          <!-- End Form Group -->
    
                          <!-- Form Group -->
                          <div>
                            <label for="altFile" class="block text-sm mb-2 ">Alt</label>
                            <div class="relative">
                              <input type="text" id="altFile" placeholder="Enter title" wire:model="altFile" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-700 focus:ring-blue-700  " required="" aria-describedby="email-error">
                            </div>
                          </div>
                          <!-- End Form Group -->
    
                        
    
                          @error('titleFile') 
                          <div class="alert alert-success">
                             <div class="text-sm text-gray-500">
                                {{ $message }}
                             </div>
                          </div>
                       @enderror
    
                       @error('altFile') 
                          <div class="alert alert-success">
                             <div class="text-sm text-gray-500">
                                {{ $message }}
                             </div>
                          </div>
                       @enderror
    
    
                       @if(session()->has('message'))
                          <div class="alert alert-success">
                             <div class="text-sm text-gray-500">
                                {{ session('message') }}
                             </div>
                          </div>
                       @endif
                     
    
    
                          <button type="submit"  class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-700 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 transition-all text-sm ">Update</button>
                                      
                          <a wire:click="shut()" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-gray-400 text-white hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2 transition-all text-sm ">Close</a>
                        </div>
                      </form>
                      <!-- End Form -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            </div>
          </div>
        </div>
        <!-- -->
      </div>
    </div>
    
        
    