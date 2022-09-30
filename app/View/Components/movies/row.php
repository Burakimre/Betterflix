<?php

namespace App\View\Components\movies;

use Illuminate\View\Component;

class row extends Component
{
    /**
     * The row title.
     *
     * @var string
     */
    public $title;

    /**
     * The row media.
     *
     * @var string
     */
    public $media;

    /**
     * Create a new component instance.
     *
     * @param $title
     * @param $media
     * @return void
     */
    public function __construct($title, $media)
    {
        $this->title = $title;
        $this->media = $media;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movies.row');
    }
}
