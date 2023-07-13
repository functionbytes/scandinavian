<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageGallery extends Component
{

    public $instance;
    public $identifier;

    public function mount($instance)
    {  
        $this->instance = $instance;
        $this->identifier = $instance->id;
    }


    public function render()
    {
        return view('managers.livewire.image-gallery', [
            'instance' => $this->instance,
        ]);

    }

}
