<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Manutenção de produtos') }}
        <br>
    </x-slot>
    <br>

    <div class="py-6 px-4">
        <div class="max-w-7xl mx-auto space-y-8">

            {{-- Ações principais --}}
            <div class="flex justify-between items-center">
                                {{-- Botão Adicionar --}}
                <a href="{{ url('/products/new') }}">
                    <x-secondary-button>Adicionar Produtos</x-secondary-button>
                </a>
                {{-- Botão Voltar --}}
                <a href="{{ url('/') }}">
                    <x-secondary-button>Voltar</x-secondary-button>
                </a>

            </div>
            <br>

            {{-- Mensagem de sucesso --}}
            @if ($message = Session::get('success'))
                <div class="p-4 bg-green-100 dark:bg-green-700 text-green-900 dark:text-green-100 rounded shadow">
                    {{ $message }}
                </div>
            @endif

            {{-- Formulário de busca --}}
            <form action="{{ url('/products') }}" method="GET" class="flex flex-wrap gap-4 items-end bg-white dark:bg-gray-800 p-4 rounded shadow">
                <div class="w-full sm:w-auto flex-1">
                    <x-input-label for="search" value="Pesquisar produto" />
                    <x-text-input id="search" name="search" type="text" value="{{ $filter ?? '' }}"
                        class="mt-1 w-full" />
                </div>
                <div class="flex gap-2">
                    <a>
                        <x-primary-button type="submit">Pesquisar</x-primary-button>
                    </a>
                    <a href="{{ url('/products') }}">
                        <x-primary-button>Limpar</x-primary-button>
                    </a>
                </div>
                
            </form>
            <br>
            {{-- Tabela de produtos --}}
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Nome
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($products as $product)
                        
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                                    {{ $product->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                                    {{ $product->type->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100 space-x-2">
                                    <a href="{{ url('/products/update', ['id' => $product->id]) }}">
                                        <x-secondary-button class="bg-indigo-600 hover:bg-indigo-700">
                                            Editar
                                        </x-secondary-button>
                                    </a>
                                    <a href="{{ url('/products/delete', ['id' => $product->id]) }}">
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
