<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\File;

class ImageLists extends Component
{

    public $instance;
    public $files;
    public $idFile;
    public $titleFile;
    public $altFile;
    public $modalFormVisible = false;

    public $listeners = [
        'refreshFiles' => 'refreshFiles',
    ];

    
    public function resetInput()
    {
        $this->titleFile = "";
        $this->altFile = "";
    }

    public function update()
    {
            $validated = $this->validate([
                'titleFile' => 'required',
                'altFile' => 'required',
            ]);

            $file = File::find($this->idFile);
            $file->title =  $validated['titleFile'];
            $file->alt =  $validated['altFile'];
            $file->save();

            session()->flash('message','Student Updated Successfully');
            $this->resetInput();
            $this->emit('refreshFiles');
            $this->modalFormVisible = false;

    }


    public function edit($id)
    {
        $file = File::find($id);
        $this->idFile = $file->id;
        $this->altFile = $file->alt;
        $this->titleFile = $file->title;

        $this->modalFormVisible = true;

    }


    public function shut() 
    {
        $this->modalFormVisible = false;

    }

    public function delete($id)
    {
        $file = File::findOrFail($id);

        Storage::disk('managers')->delete('/files'.'/'.$file->file_path);

        $file->delete();

        $this->emit('refreshFiles');

        session()->flash('message', 'Company deleted successfully.');

    }

    public function likeFile($id)
    {
        
        $file = File::find($id);

        if ($file->favorite) {
            $file->favorite = 0;
        }else{
            $file->favorite = 1;
        }

        $file->save();
        
        $this->refreshFiles();

        session()->flash('message', 'Company deleted successfully.');

    }

    public function mount($instance)
    {  
        $this->instance = $instance;
        $this->refreshFiles();
    }

    public function refreshFiles(): void
    {
        $this->files = $this->instance->thumbnails();
    }

    public function render()
    {
        $this->files = $this->instance->thumbnails();

        return view('managers.livewire.image-lists', [
            'files' => $this->files,
        ]);


    }

}
