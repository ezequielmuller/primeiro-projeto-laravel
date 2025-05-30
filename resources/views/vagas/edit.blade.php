<x-app-layout>

    <style scoped>
        .botaoAlterar {
            background-color: orange;
        }
        .botaoVoltar {
            background-color: blue;
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
                            {{ ("Alterar Vaga - ID = " . $vaga->id) }}
                        </h2>
                    </b>
                    <br>

                    <form action="{{ route('vagas.update', [$vaga->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" value="{{ $vaga->nome }}" name="nome" placeholder="Nome"></input><br>
                        <br>
                        <input type="text" value="{{ $vaga->desc }}" name="desc" placeholder="Descrição"></input><br>
                        <br>
                        <input type="text" value="{{ $vaga->salario }}" name="salario"
                            placeholder="Salário"></input><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <button type="submit"
                            class="text-white bg-yellow-600 px-3 py-1 rounded mr-2 botaoAlterar">Alterar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
