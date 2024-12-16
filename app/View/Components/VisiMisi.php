<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VisiMisi extends Component
{
    public $title;    // Judul bagian
    public $content;  // Konten visi dan misi

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $content
     */
    public function __construct()
    {
        $this->title = '$title';
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.visi-misi', [
            'Response' => $this->title

        ]);
    }
}
