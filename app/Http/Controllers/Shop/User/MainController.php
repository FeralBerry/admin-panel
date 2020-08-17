<?php

namespace App\Http\Controllers\Shop\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MetaTag;

class MainController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        MetaTag::setTags(['title' => "Пользователь"]);
        return view('blog.user.index');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
