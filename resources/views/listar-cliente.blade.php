<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('listar Cliente') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                 <h1>Listar Cliente</h1>
              </div>
              <hr>
                @if(Session::has('message'))
                
              <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <h5 style="color: #343a40;"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h5> </div>                
              @endif
              <hr>
              {{-- dados  --}}
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">nome</th>
                      <th scope="col">Email</th>
                      <th scope="col">Celular</th>
                      <th scope="col">Nome do Pet</th>
                      <th scope="col">Raça</th>
                      <th scope="col">Tipo do Pet</th>
                      <th scope="col">Vacinas</th>
                      <th scope="col">Idade do Pet</th>
                      <th scope="col">Sexo</th>
                      <th scope="col">Numero de Filhotes</th>
                      <th scope="col">OBS</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($clientes as $cliente)    
                    <tr>
                      <th scope="row"> {{ $servico->id }} </th>
                      <td> {{ $cliente->nome }} </td>
                      <td> {{ $cliente->email }} </td>
                      <td> {{ $cliente->celular }} </td>
                      <td> {{ $cliente->nome_pet }} </td>
                      <td> {{ $cliente->raca }} </td>
                      <td> {{ $cliente->tipo_pet }} </td>
                      <td> {{ $cliente->vacinas }} </td>
                      <td> {{ $cliente->idade_aprox }} </td>
                      <td> {{ $cliente->sexo }} </td>
                      <td> {{ $cliente->numero_filhotes }} </td>
                      <td> {{ $cliente->obs }} </td>

                    </tr>
                   @endforeach

                  </tbody>
                </table>
                
              <hr>
             
          </div>

      </div>
  </div>
</x-app-layout>