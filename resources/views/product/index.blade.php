@extends('home')


@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">{{ __('Produtos') }}</div>

              <div class="card-body">
                <table class="table table-striped table-hover">
                  <thead class="table-dark">
                    <tr class="text-center">
                      <th scope="col">#</th>
                      <th scope="col"></th>
                      <th scope="col">Nome</th>
                      <th scope="col">Sobrenome</th>
                      <th scope="col">Email</th>
                      <th scope="col">Visualizar</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    @foreach ($produtos as $produto)
                    <tbody class="text-center">
                      <tr class="text-center">
                        <td scope="col">{{ ++$i }}</td>
                        <td scope="col"></td>
                        <td scope="col">{{$produto->name}}</td>
                        <td scope="col">{{$produto->last_name}}</td>
                        <td scope="col">{{$produto->email}}</td>
                        {{-- <td>{{$usuario->perfil}}</td> --}}
                        <td>
                          {{-- <form action="{{ route('deleteusuario', $usuario->id) }}" method="POST"> --}}
              
                            <a class="badge text-bg-warning text-white" href="{{ route('product.show', ['id' => $product->id]) }}" title="Visualizar">
                              <i class="bi bi-eye" style="font-size: 15px; color: white;"></i>
                            </a> 
              
                            {{-- <a class="btn btn-primary btn-sm text-white" href="{{ route('user.edit', ['id' => $usuario->id]) }}" title="Editar">
                              <i class="bi bi-pencil-square" style="font-size: 18px; color: white;"></i>
                            </a>

                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Tem certeza que deseja apagar o usuário?')" style="display:{{ auth()->user()->perfil == 'coordenacao' ? '' : 'none' }}" title="Deletar">
                              <i class="fa fa-trash fa-16"></i>
                            </button>
                          </form> --}}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
