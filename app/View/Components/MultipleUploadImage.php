<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MultipleUploadImage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $hidden;
    public $formAction;
    public function __construct($hidden = false, $formAction = null)
    {
        $this->hidden = $hidden;
        $this->formAction = $formAction;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.multiple-upload-image');
    }
}
