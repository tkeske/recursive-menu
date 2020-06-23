<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{

    public function index() {

        $allMenus = Menu::pluck('name','menu_ID')->all();

        return view('index', ["allMenus" => $allMenus]);
    }

    public function addMenuItem(Request $request) {

        $request->validate([
            'name' => 'required',
         ]);

        $data = $request->all();
        $data['parent_ID'] = empty($data['parent_ID']) ? 0 : $data['parent_ID'];
        Menu::create($data);

        return redirect("/");
    }
}
