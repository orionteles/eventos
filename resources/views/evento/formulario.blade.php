@extends('layouts.default')

@section('titulo')
    Evento
@endsection

@section('conteudo')

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Dados Gerais</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="/evento" method="post" class="form-horizontal">
                                @csrf

                                <input type="hidden" name="id" id="id" value="{{base64_encode($model->id)}}">

                                <div class="form-group">
                                    <label for="nome" class="col-sm-3 control-label">Nome: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nome" id="nome" value="{{$model->nome}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="data" class="col-sm-3 control-label">Data: </label>
                                    <div class="col-md-9">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control data" name="data" id="data"  value="{{\App\Classes\Util::formatarData($model->data)}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit"><span class="fa fa-check"></span> Salvar</button>
                                        <a href="/evento" class="btn btn-danger"><span class="fa fa-arrow-circle-left"></span> Voltar</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Causas</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" id="div-causas">
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script>
        $(function(){

            $('#div-causas').load('/causa/create')

            // $('.enviar-edicao-equipe').change(function(){
            //
            //     var obj = $(this)
            //     var ordem = $(this).val();
            //     var tipo = $(this).data('tipo');
            //     var edicao_id = $('#edicao_id').val();
            //     var _token = $('[name="_token"]').val();
            //     var equipe_id = $(this).data('equipe-id');
            //     var edicao_equipe_id = $(this).data('edicao-equipe-id');
            //
            //     $.ajax({
            //         type: "POST",
            //         url: '/edicao-equipe',
            //         data: {edicao_id, equipe_id, edicao_equipe_id, ordem, tipo, _token},
            //         success: function(response){
            //             obj.data('edicao-equipe-id', response);
            //         }
            //     });
            // });
        })
    </script>
@endsection
