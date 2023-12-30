@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Editar Produto') }}
                
              </div>
              <div class="card-body">
                <form action="{{ route('product.update', 'id' => $produto->id) }}" method="post">
                  @csrf
                  @method('PUT')
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" id="validationCustom01" value="{{ $produto->tipo }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" id="validationCustom02" value="{{ $produto->marca }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="validationCustom03" value="{{ $produto->name }}">
                    <div class="invalid-feedback">
                      Por favor informe o nome.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Fornecedor</label>
                    <input type="text" name="fornecedor" class="form-control" id="validationCustom04" value="{{ $produto->fornecedor }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Tamanho</label>
                    <input type="text" name="tamanho" class="form-control" id="validationCustom05" value="{{ $produto->tamanho }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Condição</label>
                    <input type="text" name="condicao" class="form-control" id="validationCustom06" value="{{ $produto->condicao }}">
                    <div class="invalid-feedback">
                      Por favor informe a condição.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom07" class="form-label">Patrimônio</label>
                    <input type="text" name="patrimonio" class="form-control" id="validationCustom07" value="{{ $produto->patrimonio }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Foto</label>
                    <input type="text" name="foto" class="form-control" id="validationCustom08" value="{{ $produto->foto }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom09" class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="form-control" id="validationCustom09" value="{{ $produto->descricao }}">
                    <div class="invalid-feedback">
                      Por favor informe a descrição.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom10" class="form-label">Número do Patrimônio</label>
                    <input type="text" name="numero_patrimonial" class="form-control" id="validationCustom10" value="{{ $produto->numero_patrimonial }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom11" class="form-label">Número de Controle</label>
                    <input type="text" name="numero_controle" class="form-control" id="validationCustom11" value="{{ $produto->numero_controle }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-12">
                    <label for="validationCustom12" class="form-label">Observação</label>
                    {{-- <input type="text" name="observacao" class="form-control" id="validationCustom12" value=""> --}}
                    <textarea type="text" name="observacao" class="form-control" placeholder="" rows="10">{{ $produto->observacao }}</textarea>
                    <div class="invalid-feedback">
                      Por favor informe a observação.
                    </div>
                  </div>
                  <div class="col-12 col text-center mt-5">
                    <button type="submit" class="btn btn-success m-2" style="float: center;" title="Salvar">
                      Salvar
                    </button>
                    <a class="btn btn-primary m-2" style="float: center;" href="{{ url()->previous() }}" type="button">
                      Voltar
                    </a>
                  </div>
                </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <script>
  $(function() {
    $("#customSwitch1").click(function(){
      if($(this).prop("checked")){
        $("#input1").show()
        $(this).val('Sim')
      } else {
        $("#input1").hide()
        $(this).val('')
      }
    })

    var coletivo = {!! json_encode($coletivo) !!}

    if(coletivo.ativo){
      $("#customSwitch1").prop('checked', 'Sim')
      $("#input1").show();
    } else {
      $("#customSwitch1").prop('checked', '')
      $("#input1").hide();
    }
  });
</script>
 --}}