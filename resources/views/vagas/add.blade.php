<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Vagas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('vagas.store') }}" method="POST">
                        @csrf
                    <input type="text" name="nome" placeholder="Nome"></input>
                    <input type="text" name="desc" placeholder="Descrição"></input>
                    <input type="text" name="salario" placeholder="Salário"></input>
                    </br>
                    <button type="submit" style="background-color: red; color: white;">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
