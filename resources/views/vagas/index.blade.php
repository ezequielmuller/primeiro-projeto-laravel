<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </x-slot>

    <style scoped>
    .botao{
        background-color: blue;
    }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <b>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Vagas Cadastradas
                        </h2>
                    </b>
                    <br>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Usuário Cadastro</th>
                                <th>Salario R$</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vagas as $vaga)
                                <tr>
                                    <td>{{ $vaga->id }}</td>
                                    <td>{{ $vaga->nome }}</td>
                                    <td>{{ $vaga->desc }}</td>
                                    <td>{{ $vaga->usuario->name }}</td>
                                    <td>R$ {{ $vaga->salario }}</td>
                                    <td>
                                        <a href="{{ route('vagas.show', $vaga->id) }}"
                                            class="text-white bg-blue-600 px-3 py-1 rounded mr-2 botao">Ver Vaga</a>
                                    </td>


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
