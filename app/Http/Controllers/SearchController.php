<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Post::table('quotes')
            ->where('author', 'like=', "%" . $search . "%")
            ->paginate(6);
        return view('searchbar', compact('data'));
    }

//     public function search(Request $request){
//         $search = $request->search;
//         $data = Qoute::table('quotes')
//             ->where('quote_name', 'like=', "%" . $search . "%")
//             ->paginate(6);
//         return view('searchbar', compact('data'));
//     }
}
