@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Criar Produto') }}
                
              </div>
              <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" id="validationCustom01" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" id="validationCustom02" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="validationCustom03" value="">
                    <div class="invalid-feedback">
                      Por favor informe o nome.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Fornecedor</label>
                    <input type="text" name="fornecedor" class="form-control" id="validationCustom04" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Tamanho</label>
                    <input type="text" name="tamanho" class="form-control" id="validationCustom05" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Condição</label>
                    <input type="text" name="condicao" class="form-control" id="validationCustom06" value="">
                    <div class="invalid-feedback">
                      Por favor informe a condição.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <div class="col">
                    <label for="validationCustom07" class="form-label">Patrimônio</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="patrimonio" id="inlineRadio1" value="1">
                      <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="patrimonio" id="inlineRadio2" value="0">
                      <label class="form-check-label" for="inlineRadio2">Não</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom10" class="form-label">Número do Patrimônio</label>
                    <input type="text" name="numero_patrimonial" class="form-control" id="num_pat" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom11" class="form-label">Número de Controle</label>
                    <input type="text" name="numero_controle" class="form-control" id="num_control" value="">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Foto</label>
                    <div class="input-group">
                      <input type="file" name="foto" class="form-control-file" id="validationCustom08" value="">
                    </div>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom09" class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="form-control" id="validationCustom09" value="">
                    <div class="invalid-feedback">
                      Por favor informe a descrição.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-12">
                    <label for="validationCustom12" class="form-label">Observação</label>
                    <textarea type="text" name="observacao" class="form-control" placeholder="" rows="10"></textarea>
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
<script async>
  
  const radioInputs = document.getElementsByName("patrimonio")
  for(let i = 0; i < radioInputs.length; i++) {
    radioInputs[i].addEventListener('change', () => {
      if(radioInputs[i].value === '0'){
        document.getElementById("num_pat").disabled = true
        document.getElementById("num_control").disabled = false
        return
      }
      document.getElementById("num_pat").disabled = false
      document.getElementById("num_control").disabled = true
      return
    
    })
  }
  
</script>

@endsection

