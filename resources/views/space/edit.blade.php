@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Editar Espaço') }}</div>
              <form action="{{ route('space.update', ['id' => $espaco->id]) }}" method="post">
                @csrf
                @method('PUT')
              <div class="card-body">
              <div class="row g-3">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Espaço</label>
                    <input type="text" name="space" class="form-control" id="validationCustom01" value="{{ $espaco->space }}">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Complexo</label>
                    <input type="text" name="complexo" class="form-control" id="validationCustom01" value="{{ $espaco->complexo }}">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">UF</label>
                    <input type="text" name="uf" class="form-control" id="validationCustom01" value="{{ $espaco->uf }}">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-success m-2" style="float: center;" title="Salvar">
                      Salvar
                    </button>
                  </div>
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