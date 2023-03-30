<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    public function index(){
        $quote = Post::latest()->paginate(5);

        return view('quote.index', compact('quote'));
    }

    public function create(){
        return view('quote.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'quote'     => 'required',
            'author'     => 'required',
            'kategori'   => 'required'
        ]);

        //create post
        Post::create([
            'quote'     => $request->quote,
            'author'    => $request->author,
            'kategori'  => $request->kategori
        ]);

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Post $quote){

        return view('quote.edit', compact('quote'));
    }

    public function update(Request $request, Post $quote){

        //validate form
        $this->validate($request, [
            'quote'     => 'required',
            'author'     => 'required',
            'kategori'   => 'required'
        ]);

        $quote->update([
            'quote'     => $request->quote,
            'author'    => $request->author,
            'kategori'  => $request->kategori
        ]);

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    public function destroy(Post $quote)
    {
        //delete post
        $quote->delete();

        //redirect to index
        return redirect()->route('index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function search(Request $request)
    {
        if ($request->search)
        {
        // $keyword = $request->search;
        $quote = Post::where('quote', 'like', '%' . $request->search . '%')
        ->orWhere('author', 'like', '%' . $request->search . '%')
        ->orWhere('kategori', 'like', '%' . $request->search . '%')
        ->paginate(5);
        } else {
            $quote = Post::all();
        }
        return view('view', compact('quote'));
                // $search = $request->search;
        // $quote = Post::table('quotes')
        //     ->where('quote', 'like=', "%" . $search . "%")
        //     ->paginate(6);
        // return view('quote.index', compact('quote'));
    }
}
