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
                   <h1>Listar Banner</h1>
                </div>
                <hr>
                 @if(Session::has('message'))
                <div class="alert alert-primary" role="alert">
                
                  <h5><strong>Parabéns!</strong> {!! Session::get('message') !!}</h5>

                </div>

             @endif
                <hr>
                {{-- dados  --}}
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cadastrado Por</th>
                        <th scope="col">Nome do Banner</th>
                        <th scope="col">Imagem</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($banners as $banner)    
                      <tr>
                        <th scope="row"> {{ $banner->id }} </th>
                        <td> {{ $banner->user }} </td>
                        <td> {{ $banner->nome }} </td>
                        <td> <img src=" {{ $url.'/'.$banner->imagem }} " alt="Imagem" width="90" height="90" > </td>
                      </tr>
                     @endforeach

                    </tbody>
                  </table>
                
            </div>

        </div>
    </div>
</x-app-layout>
