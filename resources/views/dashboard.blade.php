<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <div class="max-w-4xl mx-auto space-y-4">
            <br>
            @if(isset($products) && $products->count() > 0)
                @foreach($products as $product)
                    <br>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                        {{-- Nome do produto --}}
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-1">
                            {{ $product->name }}
                        </h3>

                        {{-- Tipo do produto --}}
                        <p class="text-gray-600 dark:text-gray-400 mb-1">
                            Tipo: {{ $product->type->name }}
                        </p>

                        {{-- Valor do produto --}}
                        <p class="text-gray-600 dark:text-gray-400 mb-1">
                            Valor: R$ {{ number_format($product->price, 2, ',', '.') }}
                        </p>

                        {{-- Quantidade em estoque --}}
                        <p class="text-gray-600 dark:text-gray-400">
                            Quantidade: {{ $product->quantity }}
                        </p>
                    </div>
                @endforeach
            @else
                <p class="text-gray-700 dark:text-gray-300">Nenhum produto cadastrado.</p>
            @endif
        </div>
    </div>
</x-app-layout>
