<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Formulario de cadastro
                </div>
                {{-- aqui vai ser o meu formulario --}}
                <div>
                    <form action="/cliente-store"  method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <input type="text" name="email" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="seuemail@example.com">
                          </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Celular</label>
                            <input type="text" name="celular" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="ex: 9999999999999">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome do Pet</label>
                            <input type="text" name="nome_pet" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Qual o nome do Seu Pet">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Raça</label>
                            <input type="text" name="raca" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Qual a raça do Seu Pet">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">tipo do pet</label>
                            <input type="text" name="tipo_pet" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Qual o tipo do Seu Pet">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Vacinas</label>
                            <input type="text" name="vacinas" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="Qual o tipo do Seu Pet">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Idade aproximada do pet</label>
                            <input type="text" name="idade_aprox" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="EX: 3">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                            <input type="text" name="sexo" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="EX: Masc. Fem">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Numero de Filhotes</label>
                            <input type="text" name="numero_filhotes" class="block mt-1 w-full" id="exampleFormControlInput1" placeholder="EX: 3">
                        </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">OBS</label>
                            <textarea name="obs" class="block mt-1 w-full" id="obs" rows="3"></textarea>
                        </div>

                        <x-button>
                           CADASTRAR
                        </x-button>
                            

                    </form>     
                </div>
            </div>
                
            

        </div>
    </div>
</x-app-layout>

