
<div class="relative  py-12 px-4 ">


	         <div class="w-full p-10 bg-white z-10 rounded overflow-hidden shadow-lg">

                  <div class="text-center">
                     <h2 class="mt-5 text-3xl font-bold text-blue-700">
                        File Upload!
                     </h2>
                     <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
                  </div>

                  <form wire:submit.prevent="submit" enctype="multipart/form-data" class="mt-8 space-y-3" >

                           <div class="grid grid-cols-1 space-y-2">
                                 <label class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                                 <input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-700" type="text" id="titleUpload" placeholder="Enter title" wire:model="titleUpload">
                           </div>
                           <div class="grid grid-cols-1 space-y-2 mt-2">
                                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                                    <div class="flex items-center justify-center w-full">
                                       <label class="flex flex-col rounded-lg border border-double w-full h-60 p-10 group text-center">
                                          <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                                <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                </svg>-->
                                             
                                                <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <span  class="text-blue-700 hover:underline">select a file</span> from your computer</p>
                                          </div>
                                          <input type="file" class="hidden" wire:model="fileUpload" accept="image/gif, image/jpg, image/jpeg, image/png" >
                                       </label>
                                    </div>
                           </div>

                            <p class="text-sm text-gray-500">
                                <span>File type: jpeg,png,jpg,gif ,types of images</span>
                            </p>

                              @error('titleUpload') 
                                 <div class="alert alert-success">
                                    <div class="text-sm text-gray-500">
                                       {{ $message }}
                                    </div>
                                 </div>
                              @enderror

                              @error('fileUpload') 
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
                            
                              <button type="submit" class="my-5 w-full flex justify-center bg-blue-700 text-white p-4  rounded-full tracking-wide font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-700 shadow-lg cursor-pointer transition ease-in duration-300">
                                    Upload
                              </button>

                     </form>
	         </div>

</div>



