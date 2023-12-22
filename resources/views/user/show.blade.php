@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Usuário') }}
                <form action="{{ route('user.delete', ['id' => $usuario->id]) }}" method="POST">
                  {{-- <form id="delete-form-{{ $usuario->id }}" action="{{ route('user.delete', ['id' => $usuario->id]) }}" method="POST"> --}}
                  @csrf
                  @method('DELETE')
              
                  {{-- <button type="submit" class="badge text-bg-danger" style="float: right" onclick="return confirm('Tem certeza que deseja apagar o usuário?')" style="display:{{ auth()->user()->perfil == 'coordenacao' ? '' : 'none' }}" title="Deletar"> --}}
                  <a class="badge text-bg-danger" style="float: right; font-size: 15px; margin-top: -15px" 
                      onclick="event.preventDefault();
                        if (confirm('Tem certeza que deseja excluir?')) {document.getElementById('delete-form-{{ $usuario->id }}').submit();}" title="Deletar">
                    <i class="bi bi-trash3"></i>
                  </a>
                  <a class="badge text-bg-primary" style="float: right; font-size: 15px; margin-top: -15px; margin-right: 10px;" href="{{ route('user.edit', ['id' => $usuario->id]) }}" title="Editar">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                </form>
              </div>

              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" value="{{ $usuario->name }}" style="cursor: not-allowed" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Sobrenome</label>
                    <input type="text" name="last_name" class="form-control" id="validationCustom02" value="{{ $usuario->last_name }}" disabled>
                    <div class="valid-feedback">
                      Tudo ok!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="validationCustom03" value="{{ $usuario->email }}" disabled>
                    <div class="invalid-feedback">
                      Por favor informe seu email.
                    </div>
                  </div>
                  {{-- <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">E-mail</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-12 col text-center mt-5">
                    <a class="btn btn-primary" href="{{ route('user.index') }}" type="button">Voltar</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
