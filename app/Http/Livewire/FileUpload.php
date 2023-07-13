<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\File;

class FileUpload extends Component
{
    use WithFileUploads;

    public $fileUpload;
    public $titleUpload;
    public $class;
    public $identifier;

    public function resetInput()
    {
        $this->titleUpload = "";
        $this->fileUpload = "";
    }

    public function mount($instance)
    {  
        $this->instance = $instance;
        $this->identifier = $instance->id;
        $this->class = get_class($instance);
    }

    public function submit()
    {

        $validatedData = $this->validate([
            'titleUpload' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2097152',
        ]);

  
        $path = $validatedData['titleUpload'].'.'.$this->fileUpload->extension();
        
        Storage::disk('managers')->put('/files'.'/'.$path,file_get_contents($this->fileUpload->getRealPath()));

        $file = new File();
        $file->title = $validatedData['titleUpload'];
        $file->alt = Str::slug($validatedData['titleUpload'], '-');
        $file->file_path = $path;
        $file->file_class = $this->class;
        $file->file_id = $this->identifier;
        $file->save();

        session()->flash('message', 'Image successfully Uploaded.');
        $this->emit('refreshFiles');
        $this->resetInput();

    }
    
    public function render()
    {
        return view('managers.livewire.file-upload')->with([
        ]);
    }



}
