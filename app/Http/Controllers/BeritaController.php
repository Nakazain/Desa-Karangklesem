<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function home(){
        $posts = Berita::latest()->paginate('6');
        return view('index', compact('posts'));
    }

    public function tambah(){
        return view('berita.tambah-form');
    }

    public function index(){
        $userId = Auth::id();
        $posts = Berita::where('user_id', $userId)->latest()->get();
        return view('dashboard', compact('posts'));
    }

    public function tambahdata(Request $request){
        $request->validate([
            'username'=>('required'),
            'judul'=>('required'),
            'deskripsi'=>('required'),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);   
        $imagePath = '';
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('berita', 'public');
        }
            Berita::create([
                'user_id'=> Auth::id(),
                'username' => $request->username,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imagePath
            ]);
            return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $diskusi = Berita::findOrFail($id);
        if (Auth::id() === $diskusi->user_id) {
            if ($diskusi->image) {
                Storage::delete('public/' . $diskusi->image);
            }
            $diskusi->delete();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    } 

    public function masuk($id){   
        $post = Berita::findOrFail($id);
        return view('berita.detail', compact('post'));
        }

}
