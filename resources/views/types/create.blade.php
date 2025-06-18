<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Cadastro de Tipo') }}
        </h3>
        <br>
    </x-slot>
    <br>
    <div class="py-6 px-4 max-w-lg mx-auto">
        <form action="{{ url('types/new') }}" method="POST" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md space-y-6">
            @csrf
            
            <div>
                <x-input-label for="name" value="Nome:" />
                <x-text-input
                    id="name"
                    name="name"
                    type="text"
                    class="mt-1 block w-full"
                    value="{{ old('name') }}"
                    required
                    autofocus
                />
            </div>

            <div>
                <x-secondary-button type="submit">
                    Salvar
                </x-secondary-button>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-md">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</x-app-layout>
