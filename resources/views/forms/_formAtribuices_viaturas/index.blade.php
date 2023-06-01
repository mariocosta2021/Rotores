
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="equipmentName">Número da matricula <small class="text-danger">*</small></label>
            <select  class="form-control border rounded"
            required name="fk_viaturas" class="form-select" id="validationCustom03" required>

                @if (isset($atribuicoes->id))
                    <option selected value="{{ $atribuicoes->viaturas->id }}">{{ $atribuicoes->viaturas->matricula }}
                    </option>
                @endif

                @foreach ($viaturas as $item)
                    <option value="{{ $item->id }}">{{ $item->matricula }}</option>
                @endforeach


            </select>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="fk_Employees_id">Motoristas <small class="text-danger">*</small></label>



            <select class="form-control border rounded"
            required name="fk_user" class="form-select" id="validationCustom03" required>

                @if (isset($atribuicoes->id))
                    <option selected value="{{ $atribuicoes->usuarios->id }}">{{ $atribuicoes->usuarios->name }}
                    </option>
                @endif

                @foreach ($motoristas as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>

        </div>
    </div>

</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="detalhes">Detalhes <small
                class="text-danger">*</small></label>
        <textarea id="editor1" name="detalhes" rows="4"  class="form-control border-secondary no-resize"
            placeholder="Descrição do curso"> {{ isset($atribuicoes->detalhes) ? $atribuicoes->detalhes : old('detalhes') }}
        </textarea>
    </div>
</div>
