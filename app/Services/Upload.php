<?php

namespace App\Services;

use Illuminate\Http\Request;
use Image;
use File;

trait Upload
{
    private $path = 'images/';
    private $pathStorageDoc = 'storage/documentos/';

    public function put($file, $name=false)
    {
        $fileName = $this->createName($file, $name);

        $path = public_path($this->pathStorageDoc);
        $retorno = $file->move($path, $fileName);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    public function putImagem($file, $name=false)
    {
        $fileName = $this->createName($file, $name);

        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    public function putResize($file, $w, $h, $name=false)
    {
        $fileName = $this->createName($file, $name);

        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->resize($w, $h)->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    public function putCrop($file, $w, $h, $x, $y, $name=false)
    {
        $fileName = $this->createName($file, $name);

        $path = public_path($this->path . $fileName);
        $retorno = Image::make($file->getRealPath())->crop($w, $h, $x, $y)->save($path);

        if ($retorno) {
            return $fileName;
        }

        return false;
    }

    /**
     * Cria o nome do arquivo
     * @param  [type] $file [Arquivo file]
     * @param  [type] $name [Nome do arquivo (não obrigatório)]
     * @return [type]       [Nome do arquivo com sua extensão]
     */
    public function createName($file, $name)
    {
        if ($name){
            $fileName = $name . '.' . $file->extension();
        }
        else{
            $fileName  = time() . '_' . $file->hashName();
        }

        return $fileName;
    }

/*
    public function validaExtImagem($extensao){
        return  in_array(strtolower($extensao), $this->extencoesImagem);
    }

    public function deleteImagemProduto($nomeImagem)
    {
        $filename200 = $this->pathProduto . $nomeImagem;
        $filename900 = $this->pathProdutoGG . $nomeImagem;
        return $this->deleteImagem([$filename200, $filename900]);
    }

    public function deleteImagemPerfil($nomeImagem)
    {
        $filename = $this->pathPerfil . $nomeImagem;
        return $this->deleteImagem($filename);
    }

    private function deleteImagem($fileName)
    {
        if (is_array($fileName)) {
            foreach ($fileName as $file) {
                $retorno = File::delete($file);
            }
            return $retorno;
        }

        return File::delete($fileName);
    }
*/
}
