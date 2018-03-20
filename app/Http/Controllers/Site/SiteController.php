<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Upload;

class SiteController extends Controller
{
    use Upload;

    public function index()
    {
        return view('site/index',[]);
        // return view('site/home',[]);
    }

    public function getdataPets()
    {
      $data = [];

      return view('site/listPets',[]);
    }

    /**
     * Upload de Documentos (Storage)
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function upload(Request $request)
    {
        $retorno = $this->put($request->arquivo);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','OK');
        }

        return redirect()->route('site.home')->with('erro','ERRO');
    }

    /**
     * Upload de imaame
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function uploadImagem(Request $request)
    {
        $retorno = $this->putImagem($request->imagem);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','OK');
        }

        return redirect()->route('site.home')->with('erro','ERRO');
    }

    /**
     * Upload de imagem resize
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function uploadResize(Request $request)
    {
        $retorno = $this->putResize($request->imagem, $request->w, $request->h);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','Resize OK');
        }

        return redirect()->route('site.home')->with('erro','Resize ERRO');
    }

    /**
     * Uploa de imagem CROP
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function uploadCrop(Request $request)
    {
        $retorno = $this->putCrop($request->imagem, $request->w, $request->h, $request->x, $request->y);

        if($retorno){
            return redirect()->route('site.home')->with('sucesso','Crop OK');
        }

        return redirect()->route('site.home')->with('erro','Crop ERRO');
    }

    public function geraPdf()
    {

        // $mpdf = new \Mpdf\Mpdf();
        // dd($mpdf);
        return view('site/pdf',[]);
    }
}
