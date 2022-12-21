<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tareas.update', $tarea) }}">
            @csrf
            @method('patch')
            <textarea
                name="tarea"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('tarea', $tarea->tarea) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                <a href="{{ route('index') }}">{{ __('Cancelar') }}</a>
            </div>
        </form>
        @if(session()->has('message'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="bg-blue-100 border border-blue-400 text-blue-700 px-8 py-3 rounded relative m-4" role="alert">
            <span class="block sm:inline">{{ session()->get('message') }}</span>
        </div>
        @endif
    </div>
</x-app-layout>