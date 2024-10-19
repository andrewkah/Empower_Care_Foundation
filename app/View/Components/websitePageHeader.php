<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class websitePageHeader extends Component
{
    public $title;
    public $bgImage;
    public $homeLink;

    public function __construct($title, $bgImage, $homeLink = '/')
    {
        $this->title = $title;
        $this->bgImage = $bgImage;
        $this->homeLink = $homeLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website-page-header');
    }
}
