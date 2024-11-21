<div style="text-align: center">
    <button class="bg-gray-50 rounded-sm w-10 border p-2" wire:click="increment">+</button>
    <h1 class="mb-8">{{ $count }}</h1>
    <input type="text" wire:model="name" class="rounded">
    <p wire:mouseover="mouseOver">こんにちは、{{ $name }}さん</p>
</div>
