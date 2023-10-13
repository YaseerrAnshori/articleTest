<?php

namespace App\Http\Controllers;

use App\DataTables\ArticleDataTable;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ArticleDataTable $dataTable)
    {
        return $dataTable->render('artikel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_artikel' => 'required|string',
            'isi_artikel' => 'required|string',
            'thumbnail_artikel' => 'image|mimes:jpeg,png,jpg,gif',
            'tag_artikel' => 'string',
            'kategori_artikel' => 'string',
        ]);

        $thumbnailPath = $request->file('thumbnail_artikel')->store('thumbnails', 'public');

        Article::create([
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'thumbnail_artikel' => $thumbnailPath,
            'tag_artikel' => $request->tag_artikel,
            'kategori_artikel' => $request->kategori_artikel,
        ]);

        return redirect()->route('article.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articles = Article::find($id);
        return view('artikel_detail', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        return view('artikel_edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_artikel' => 'required|string',
            'isi_artikel' => 'required|string',
            'thumbnail_artikel' => 'image|mimes:jpeg,png,jpg,gif',
            'tag_artikel' => 'string',
            'kategori_artikel' => 'string',
        ]);

        $article = Article::find($id);

        $article->judul_artikel = $request->judul_artikel;
        $article->isi_artikel = $request->isi_artikel;
        $article->tag_artikel = $request->tag_artikel;
        $article->kategori_artikel = $request->kategori_artikel;

        // Jika ada gambar thumbnail yang diunggah
        if ($request->hasFile('thumbnail_artikel')) {
            $thumbnailPath = $request->file('thumbnail_artikel')->store('thumbnails', 'public');
            $article->thumbnail_artikel = $thumbnailPath;
        }

        $article->save();

        return redirect()->route('article.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        // Redirect ke halaman produk atau halaman lain yang sesuai
        return redirect()->route('article.index')->with('success', 'Produk berhasil dihapus.');
    }
}
