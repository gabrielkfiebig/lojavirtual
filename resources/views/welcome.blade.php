<x-guest-layout>
  <div class="min-h-screen flex flex-col justify-center items-center bg-gray-50 dark:bg-gray-900 px-4">
    <h1 class="text-3xl font-semibold text-gray-900 dark:text-white mb-8">Bem vindo</h1>
    <br>
    <br>

    <a href="{{ route('login') }}"
       class="block mb-4 underline text-lg text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded transition w-48 text-center">
      {{ __('Login') }}
    </a>

    <a href="{{ route('register') }}"
       class="block underline text-lg text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded transition w-48 text-center">
      {{ __('Register') }}
    </a>
  </div>
</x-guest-layout>
