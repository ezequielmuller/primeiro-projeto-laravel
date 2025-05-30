<x-app-layout>

  <style scoped>
    .botaoDeletar{
        background-color: red;
    }
    .botaoAlterar{
        background-color: orange;
    }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('vagas.index') }}">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> <span style="margin-left: 10px;">Voltar</span>
                    </a>

                    <br>
                    <br>
                    <b>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ ($vaga->id . " - " . $vaga->nome) }}
                        </h2>
                    </b>
                    <hr>
                    <div>

                        <b>Descrição:</b> {{ $vaga->desc }} <br>
                        <b>Recrutador:</b> {{ $vaga->usuario->name }} <br>
                        <b>Salário:</b> R$ {{ $vaga->salario }} <br>
                        <b>Categoria:</b>Programador/Desenvolvedor<br>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div>
                        <a href="{{ route('vagas.deletar', $vaga->id) }}"
                            class="text-white bg-red-600 px-3 py-1 rounded botaoDeletar">Deletar</a>
                        <a href="{{ route('vagas.edit', $vaga->id) }}"
                        class="text-white bg-yellow-600 px-3 py-1 rounded mr-2 botaoAlterar">Alterar</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
