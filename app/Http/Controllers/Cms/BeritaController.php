<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Berita,
    KategoriBerita as Kategori,
    User
};
use App\Http\Requests\Cms\BeritaFormRequest as FormRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::with('author', 'kategori')->paginate(10);
        return view('cms.berita.index', compact('berita'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::select('id', 'kategori')->get();
        return view('cms.berita.add', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequest $request)
    {
        // dd($request->all);
        if($request->file('gambar_berita')){
            $gambar_berita = $request->file('gambar_berita')->store('images/berita');
        }else{
            $gambar_berita = '';
        }

        $berita = Berita::create([
            'judul'              => $request->judul,
            'kategori_berita_id' => $request->kategori,
            'user_id'            => 1,
            'slug'               => \Str::slug($request->judul),
            'gambar_berita'      => $gambar_berita,
            'berita'             => $request->berita,
            'publikasi'          => 1,
        ]);

        return redirect()
                ->route('cms.berita.index')
                ->with('sukses', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
