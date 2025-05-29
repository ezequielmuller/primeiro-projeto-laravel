<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vagas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="{{ route('vagas.create') }}">Cadastrar Vagas</a>

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Usuário Cadastro</th>
                                <th>Salario R$</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vagas as $vaga)
                                <tr>
                                    <td>{{ $vaga->id }}</td>
                                    <td>{{ $vaga->nome }}</td>
                                    <td>{{ $vaga->desc }}</td>
                                    <td>{{ $vaga->user_id }}</td>
                                    <td>{{ $vaga->salario }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</x-app-layout>
