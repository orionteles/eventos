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
                <label for="causa_id" class="col-sm-3 control-label">Causas: </label>
                <div class="col-sm-9">
                    <select name="causa_id[]" data-evento_id="" class="form-control chosen" data-placeholder="Selecione">
                        <option value=""></option>
                        @foreach([] as $eventoCausa)
                            <option value="">Opção</option>
                        @endforeach
                    </select>
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

<script>
    $(function(){
        $('.chosen').chosen({allow_single_deselect: true});
    })
</script>
