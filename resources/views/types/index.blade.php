<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Lista de Tipos') }}
        </h3>
        <br>
    </x-slot>
    <br>

    <div class="py-6 px-4">
        <div class="max-w-7xl mx-auto space-y-8">

            {{-- Ações principais --}}
            <div class="flex justify-between items-center">
                {{-- Botão Adicionar --}}
                <a href="{{ url('/types/new') }}">
                    <x-secondary-button>Adicionar Tipo</x-secondary-button>
                </a>
                {{-- Botão Voltar --}}
                <a href="{{ url('/') }}">
                    <x-secondary-button>Voltar</x-secondary-button>
                </a>
            </div>
            <br>

            {{-- Mensagem de sucesso --}}
            @if (session('status'))
                <div class="p-4 bg-green-100 dark:bg-green-700 text-green-900 dark:text-green-100 rounded shadow">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Mensagem de erro --}}
            @if ($message = Session::get('error'))
                <div class="p-4 bg-red-100 dark:bg-red-700 text-red-900 dark:text-red-100 rounded shadow">
                    {{ $message }}
                </div>
            @endif

            {{-- Lista de tipos --}}
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Nome
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($types as $type)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                                    {{ $type->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100 space-x-2">
                                    <a href="{{ url('/types/update', ['id' => $type->id]) }}">
                                        <x-secondary-button class="bg-indigo-600 hover:bg-indigo-700">
                                            Editar
                                        </x-secondary-button>
                                    </a>
                                    <a href="{{ url('/types/delete', ['id' => $type->id]) }}">
                                        <x-secondary-button>Excluir</x-secondary-button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
