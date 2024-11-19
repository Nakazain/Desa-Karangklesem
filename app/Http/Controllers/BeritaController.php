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

    public function profil(){
        $posts = Berita::latest()->paginate('6');
        return view('profil', compact('posts'));
    }

        public function berita(Request $request)
        {
            $query = Berita::query();

            if ($request->has('search') && $request->search) {
                $query->where('judul', 'like', '%' . $request->search . '%');
            }

            $posts = $query->latest()->paginate(6);

            return view('berita.daftar', compact('posts'));
        }   


    public function struktur(){
        $posts = Berita::all();  
        return view('admin.struktur', compact('posts'));
    }

    public function tambah(){
        return view('berita.tambah-form');
    }

    public function index(){
        $userId = Auth::id();
        $posts = Berita::where('user_id', $userId)->latest()->get();
        return view('admin.dashboard', compact('posts'));
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
        $visited = session()->get("visited_posts", []);
        
        if (!in_array($id, $visited)) {
            $post->increment('views'); 
            session()->push("visited_posts", $id); 
        }
        return view('berita.detail', compact('post'));
        }

    public function edit($id)
        {
            $post = Berita::findOrFail($id);
            if (Auth::id() !== $post->user_id) {
                return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses untuk mengedit berita ini.');
            }

            return view('berita.edit', compact('post'));
        }

        public function update(Request $request, $id)
        {
            $post = Berita::findOrFail($id);

            if (Auth::id() !== $post->user_id) {
                return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses untuk mengedit berita ini.');
            }

            $request->validate([
                'username' => 'required',
                'judul' => 'required',
                'deskripsi' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imagePath = $post->image;

            // Jika ada file gambar baru, hapus gambar lama, dan simpan gambar baru
            if ($request->file('image')) {
                if ($post->image) {
                    Storage::delete('public/' . $post->image);
                }
                $imagePath = $request->file('image')->store('berita', 'public');
            }

            // Update data
            $post->update([
                'username' => $request->username,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imagePath,
            ]);

            return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui.');
        }
    

}
