<input type="hidden" name="origin" value="Fábrica de Software">
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="modelo">Modelo <small class="text-danger">*</small></label>
            <input type="text" name="modelo" id="modelo"
                value="{{ isset($viatura->modelo) ? $viatura->modelo : old('modelo') }}"
                class="form-control border rounded"  required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="matricula">Matricula <small class="text-danger">*</small></label>
            <input type="text" name="matricula" id="matricula"
                value="{{ isset($viatura->matricula) ? $viatura->matricula : old('matricula') }}"
                class="form-control border rounded"  required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="quantidade">Quanto de carga (KG) <small class="text-danger">*</small></label>
            <input type="text" name="quantidade" id="quantidade"
                value="{{ isset($viatura->quantidade) ? $viatura->quantidade : old('quantidade') }}"
                class="form-control border rounded"  required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="file">Fotografia da viatura</label>
            <input type="file" name="imagem_viatura"
                id="file" class="form-control border">
            <small class="text-danger">Extensões permitidas: jpg,gif,</small>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <label for="file">Descrição <small class="text-danger">*</small></label>
            <textarea name="descricao" class="form-control rounded"  style="min-height:100px; min-width:100%"
                required>  {{ isset($viatura->descricao) ? $viatura->descricao : old('quantidade') }}</textarea>
        </div>
    </div>

</div>
<!-- /.col -->
