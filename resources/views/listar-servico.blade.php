<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Banner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1>Listar Serviços</h1>
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
                        <th scope="col">Cadastrado Por</th>
                        <th scope="col">Nome do Serviço</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($servicos as $servico)    
                      <tr>
                        <th scope="row"> {{ $servico->id }} </th>
                        <td> {{ $servico->user }} </td>
                        <td> {{ $servico->nome_servico }} </td>
                        <td> {{ $servico->descricao }} </td>
                        <td> {{ $servico->image }} </td>
                      </tr>
                     @endforeach

                    </tbody>
                  </table>

                <hr>
                @foreach ($servicos as $servico)

                    <h3> {{$servico->user}} </h3>
                    <h3> {{$servico->nome}} </h3>
                    <h3> {{$servico->nome_servico}} </h3>
                    <h3> {{$servico->descricao}} </h3>
                    <h3> {{$servico->image}} </h3>
 
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
