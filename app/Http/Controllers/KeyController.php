<?php

namespace App\Http\Controllers;


use App\Models\Key;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class KeyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:key-list|key-create|key-edit|key-delete', ['only' => ['index','show']]);
        $this->middleware('permission:key-create', ['only' => ['create','store']]);
        $this->middleware('permission:key-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:key-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $products = Key::latest()->paginate(5);
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('keys.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'key' => 'key',
        ]);

        Key::create($request->all());

        return redirect()->route('keys.index')
                        ->with('success','key created successfully.');
    }

    public function show(string $id)
    {
        return view('keys.show',compact('key'));
    }

    public function edit(string $id)
    {
        return view('keys.edit',compact('keys'));
    }

    public function update(Request $request, Key $key)
    {
        request()->validate([
            'name' => 'required',
            'key' => 'required',
        ]);

        $key->update($request->all());

        return redirect()->route('keys.index')
                        ->with('success','Keys updated successfully');
    }

    public function destroy(Key $key)
    {
        $key->delete();

        return redirect()->route('keys.index')
                        ->with('success','Key deleted successfully');
    }
}
