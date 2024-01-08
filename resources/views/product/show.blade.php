@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Visualizar Produto') }}
                <form id="delete-form-{{ $produto->id }}" action="{{ route('product.delete', ['id' => $produto->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a class="badge text-bg-danger" style="float: right; font-size: 15px; margin-top: -15px" 
                    href="{{ route('product.delete', $produto->id) }}" onclick="event.preventDefault();
                        if (confirm('Tem certeza que deseja excluir?')) {document.getElementById('delete-form-{{ $produto->id }}').submit();}" title="Deletar">
                    <i class="bi bi-trash3"></i>
                  </a>
                  <a class="badge text-bg-primary" style="float: right; font-size: 15px; margin-top: -15px; margin-right: 10px;" href="{{ route('product.edit', ['id' => $produto->id]) }}" title="Editar">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                </form>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Tipo</label>
                    <input type="text" name="tipo" class="form-control" id="validationCustom01" value="{{ $produto->tipo }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" id="validationCustom02" value="{{ $produto->marca }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="validationCustom03" value="{{ $produto->name }}" disabled>
                    <div class="invalid-feedback">
                      Por favor informe o nome.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Fornecedor</label>
                    <input type="text" name="fornecedor" class="form-control" id="validationCustom04" value="{{ $produto->fornecedor }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Tamanho</label>
                    <input type="text" name="tamanho" class="form-control" id="validationCustom05" value="{{ $produto->tamanho }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Condição</label>
                    <input type="text" name="condicao" class="form-control" id="validationCustom06" value="{{ $produto->condicao }}" disabled>
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
                      <input class="form-check-input" type="radio" name="patrimonio" id="inlineRadio1" value="1" {{isset($produto->patrimonio) && $produto->patrimonio == 1 ? 'checked' : '' }} disabled>
                      <label class="form-check-label" for="inlineRadio1">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="patrimonio" id="inlineRadio2" value="0" {{isset($produto->patrimonio) && $produto->patrimonio == 0 ? 'checked' : '' }} disabled>
                      <label class="form-check-label" for="inlineRadio2">Não</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom10" class="form-label">Número do Patrimônio</label>
                    <input type="text" name="numero_patrimonial" class="form-control" id="num_pat" value="{{ $produto->numero_patrimonial }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom11" class="form-label">Número de Controle</label>
                    <input type="text" name="numero_controle" class="form-control" id="num_control" value="{{ $produto->numero_controle }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Foto</label>
                    {{-- <input type="text" name="foto" class="form-control" id="validationCustom08" value="{{ $produto->foto }}" disabled> --}}
                    <div class="input-group">
                    <img src="{{ asset('storage/'.$produto->foto) }}" alt="Imagem do Produto" width="100" height="100">
                    </div>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  {{-- <div class="col-md-4">
                    <label for="validationCustom08" class="form-label">Foto</label>
                    <div class="input-group">
                      <input type="file" name="foto" class="form-control-file" id="validationCustom08" value="{{ $produto->foto }}">
                      <img src="{{ asset('storage/'.$produto->foto) }}" alt="Imagem do Produto" width="100" height="100">
                    </div>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div> --}}
                  <div class="col-md-4">
                    <label for="validationCustom09" class="form-label">Descrição</label>
                    <input type="text" name="descricao" class="form-control" id="validationCustom09" value="{{ $produto->descricao }}" disabled>
                    <div class="invalid-feedback">
                      Por favor informe a descrição.
                    </div>
                  </div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md-12">
                    <label for="validationCustom12" class="form-label">Observação</label>
                    <textarea type="text" name="observacao" class="form-control" placeholder="" rows="10" disabled>{{ $produto->observacao }}</textarea>
                    <div class="invalid-feedback">
                      Por favor informe a observação.
                    </div>
                  </div>
                  <div class="col-12 col text-center mt-5">
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

