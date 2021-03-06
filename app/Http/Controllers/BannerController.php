<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url     = Storage::url('banners');
        $banners = Banner::all();
        return view('listar-banner', compact('banners','url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cadastrar-banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fileimag_principal       = $request->file('imagem');
        $img_file                 = $fileimag_principal->getClientOriginalName();

        if ($request->hasFile('imagem')) {
            if (Storage::disk('public')->exists('banners/'.$img_file)) {

                $request->session()->flash('message','Esse arquivo de imagemjá foi cadastrado!');
                return view('cadastrar-banner');
            
            } 
        }
        
            // Insere esta imagem dentro da pasta do Storage e verifica se é uma imagem valida

                if ($request->file('imagem')->isValid()) {
                
                    $fileimag_principal      = request('imagem');
                    $img_file                = $fileimag_principal->getClientOriginalName();
                    $request->file('imagem')->storeAs('public/banners', $img_file);
             }

        

        $banner = new Banner;

        $user                       = Auth::user()->name;

        $banner->user               = $user;
        $banner->nome               = $request->input('nome');
        $banner->imagem             = $img_file;

        $banner->save();

        $request->session()->flash('message','Banner Inserido com sucesso');
        return Redirect::to('/listar-banner');

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
