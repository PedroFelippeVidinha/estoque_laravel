@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Editar usuário') }}
                
              </div>
              <div class="card-body">
                <form action="{{ route('user.update', ['id' => $usuario->id]) }}" method="post">
                  @csrf
                  @method('PUT')
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{ $usuario->name }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="validationCustom02" value="{{ $usuario->last_name }}">
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationCustom03" value="{{ $usuario->email }}">
                    <div class="invalid-feedback">
                      Por favor informe seu email.
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
