<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AlpineTest
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{open:true}">
                    <div x-show="open">OPENがtrue</div>
                    <div x-show="!open">OPENがfalse</div>
                    <button x-on:click="open = !open" class="px-4 py-2 my-4 bg-gray-100 border-gray-300 rounded hover:bg-gray-400">ボタン</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
