<input type="hidden" name="origin" value="Startup">
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Número da matricula <small class="text-danger">*</small></label>
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

    <div class="col-md-4">
        <div class="form-group">
            <label for="gastos">Quanto Gastou ? <small class="text-danger">*</small></label>
            <input type="text" name="gastos" id="gastos" value="{{ isset($startup->gastos) ? $startup->gastos : old('gastos') }}"
                class="form-control border rounded" placeholder="Digite o valor Gasto" required>
        </div>
    </div>



</div>


<!-- /.col -->
