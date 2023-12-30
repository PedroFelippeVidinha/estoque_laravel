@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Categoria') }}
              <form id="delete-form-{{ $categoria->id }}" action="{{ route('category.delete', ['id' => $categoria->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="badge text-bg-danger" style="float: right; font-size: 15px; margin-top: -15px" 
                  href="{{ route('category.delete', $categoria->id) }}" onclick="event.preventDefault();
                        if (confirm('Tem certeza que deseja excluir?')) {document.getElementById('delete-form-{{ $categoria->id }}').submit();}" title="Deletar">
                    <i class="bi bi-trash3"></i>
                  </a>
                  <a class="badge text-bg-primary" style="float: right; font-size: 15px; margin-top: -15px; margin-right: 10px;" href="{{ route('category.edit', ['id' => $categoria->id]) }}" title="Editar">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                </form>
              </div>
              <div class="card-body">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Categoria</label>
                    <input type="text" name="category" class="form-control" id="validationCustom01" value="{{ $categoria->category }}" disabled>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-12 col text-center mt-5">
                    <a class="btn btn-primary" href="{{ route('category.index') }}" type="button">Voltar</a>
                  </div>
              </div>
          </div>
    </div>
</div>
@endsection

<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>