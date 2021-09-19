<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use Illuminate\Http\Request;

class ClipController extends Controller
{

    public function index()
    {
        $clip=Clip::latest()->paginate(6);
        return view('Admin.Clip.index',compact('clip'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Clip $clip)
    {
        //
    }

    public function edit(Clip $clip)
    {
        //
    }

    public function update(Request $request, Clip $clip)
    {
        //
    }

    public function destroy(Clip $clip)
    {
        //
    }
}
