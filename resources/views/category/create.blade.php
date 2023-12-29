@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Nova Categoria') }}</div>
              <form action="{{ route('category.store') }}" method="post">
                @csrf
              <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Categoria</label>
                    <input type="text" name="category" class="form-control" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  
                  <div class="col-12 col text-center mt-5">
                    <button type="submit" class="btn btn-success m-2" style="float: center;" title="Criar">
                      Criar
                    </button>
                    <a class="btn btn-primary m-2" style="float: center;" href="{{ url()->previous() }}" type="button">
                    Voltar
                  </a>
                </div>
                </form>
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