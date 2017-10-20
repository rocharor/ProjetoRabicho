@extends('template')

@section('content')
    <link rel="stylesheet" href="/node_modules/jquery-jcrop/css/jquery.Jcrop.min.css" type="text/css" />

    <style media="screen">
        fieldset {
            border: solid 1px #ddd;
            padding: 10px;
        }
        legend {
            width: auto;
            padding: 4px 12px;
            margin: 0;
            border: 0;
        }
    </style>

    @can('AdmMaster')
        <p>Administrador master</p>
    @endcan

    @can('Adm')
        <p>Administrador</p>
    @endcan

    @can('user')
        <p>Usuario</p>
    @endcan
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Upload</h4>
        </div>
        <div class="panel-body">
            <fieldset>
                <legend>Upload Documento Storage</legend>
                <form action="{{Route('site.upload')}}" method="post" enctype="multipart/form-data" name='form1'>
                    {{ csrf_field() }}
                    <input type="file" name="arquivo" >
                    <br>
                    <input type="submit" name="btn" value="Enviar">
                </form>
            </fieldset>

            <hr>

            <fieldset>
                <legend>Upload Imagem Comum</legend>
                <form action="{{Route('site.upload-imagem')}}" method="post" enctype="multipart/form-data" name='form2'>
                    {{ csrf_field() }}
                    <input type="file" name="imagem" >
                    <br>
                    <input type="submit" name="btn" value="Enviar">
                </form>
            </fieldset>

            <hr>

            <fieldset>
                <legend>Upload Imagem Resize</legend>
                <form action="{{Route('site.upload-resize')}}" method="post" enctype="multipart/form-data" name='form3'>
                    {{ csrf_field() }}
                    <label>W</label><input type="text" name="w"><br>
                    <label>H</label><input type="text" name="h"><br>
                    <input type="file" name="imagem" >
                    <br>
                    <input type="submit" name="btn" value="Enviar">
                </form>
            </fieldset>

            <hr>

            <fieldset>
                <legend>Upload Imagens Crop</legend>
                <form action="{{Route('site.upload-crop')}}" method="post" enctype="multipart/form-data" name='form4'>
                    {{ csrf_field() }}
                    <input type="hidden" name="x" id="x">
                    <input type="hidden" name="y" id="y">
                    <input type="hidden" name="w" id="w">
                    <input type="hidden" name="h" id="h">

                    <input type="file" id='select_image' name='imagem'>
                    <br>
                    {{-- <input type="submit" name="btn" value="Enviar"> --}}

                    <div class="div_visualizacao hide">
                        <div id="div_imagem_alteracao">{{-- IMAGEM GRANDE --}}</div>
                        <div class="preview">{{-- IMAGEM PREVIEW --}}</div>
                        <br>
                        <input type="submit" class='btn btn-success' value="Recortar Imagem">
                        <input type='button' class="btn btn-danger act-cancelar" value='Cancelar'>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>PDF</h4>
        </div>
        <div class="panel-body">
            <fieldset>
                <legend>Gerar PDF</legend>

                <a href='{{Route('site.pdf')}}' class='btn btn-primary' name="pdf" target="_blank">Gerar PDF</a>
            </fieldset>
        </div>
    </div>


    <script type="text/javascript" src="/node_modules/jquery-jcrop/js/jquery.Jcrop.min.js"></script>

    <script>
        $("#select_image").on('change',function(e){
            e.preventDefault();
            var $file = $(this)[0];
            self.altera_imagem_perfil($file);
        });

        $('.act-cancelar').on('click', function(e){
            e.preventDefault();
            $('.div_visualizacao').addClass('hide');
            $(".div_imagem").removeClass('hide');
        });

        function altera_imagem_perfil($file){
            $("#select_image").next().html('');
            var reader = new FileReader;
            reader.onload = function() {
                var img = new Image;
                img.src = reader.result;
                img.onload = function() {
                    var html = '<img src="'+reader.result+'" id="target" alt="Foto perfil" />'
                    $('#div_imagem_alteracao').html(html);
                    var html_preview = '<div id="preview-pane" class="hide"><div class="preview-container"><img src="'+reader.result+'" class="jcrop-preview" alt="Foto perfil Preview" /></div></div>'
                    $('.preview').html(html_preview);
                    $('.div_visualizacao').removeClass('hide');
                    $('.div_imagem').addClass('hide');

                    $('#x').val(0);
                    $('#y').val(0);
                    $('#w').val(img.width);
                    $('#h').val(img.height);

                    var jcrop_api,
                        boundx,
                        boundy,
                        $preview = $('#preview-pane'),
                        $pcnt = $('#preview-pane .preview-container'),
                        $pimg = $('#preview-pane .preview-container img'),
                        xsize = $pcnt.width(),
                        ysize = $pcnt.height();

                    $('#target').Jcrop({
                        onChange: updatePreview,
                        onSelect: updatePreview,
                        aspectRatio: 0,
                        bgOpacity: .2,
                        // setSelect: [ 0, 0, 0, 0 ],
                        // maxSize: [ 600, 400 ],
                        // minSize: [ 100, 100 ],
                        // bgFade:     true,
                        // bgColor:'#F0B207'
                    //   aspectRatio: xsize / ysize
                    },function(){
                        var bounds = this.getBounds();
                        boundx = bounds[0];
                        boundy = bounds[1];
                        jcrop_api = this;
                        $preview.appendTo(jcrop_api.ui.holder);
                    });

                    function updatePreview(c){
                        if (parseInt(c.w) > 0) {
                            var rx = xsize / c.w;
                            var ry = ysize / c.h;

                            $pimg.css({
                                width: Math.round(rx * boundx) + 'px',
                                height: Math.round(ry * boundy) + 'px',
                                marginLeft: '-' + Math.round(rx * c.x) + 'px',
                                marginTop: '-' + Math.round(ry * c.y) + 'px'
                            });

                            $('#preview-pane').removeClass('hide');
                        }
                        $('#x').val(c.x);
                        $('#y').val(c.y);
                        $('#w').val(c.w);
                        $('#h').val(c.h);
                    };
                }
            }
            reader.readAsDataURL($file.files[0]);

        }
    </script>
@endsection
