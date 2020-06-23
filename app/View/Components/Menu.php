<?php

namespace App\View\Components;

use App\Menu as Model;
use Illuminate\View\Component;

class Menu extends Component
{

    public $menus;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $menus = Model::where('parent_ID', '=', 0)->get();
        $this->menus = $menus;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.menu.menu', ["menus" => $this->menus]);
    }
}
