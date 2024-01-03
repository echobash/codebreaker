<div class="flex items-center justify-center h-screen">
    <button class="p-16 text-3xl border border-red-500 bg-red-500 m-2 rounded hover:scale-105 hover:border-transparent hover:border-2 duration-300 ease-in-out"   wire:click="decrement">-</button>
    <button class="p-16 text-3xl border border-gray-500 bg-gray-500 m-2 rounded" wire:model="count">{{$count}}</button>
    <button class="p-16 text-3xl border border-blue-500 bg-blue-500 m-2 rounded hover:scale-105 hover:border-transparent hover:border-2 duration-300 ease-in-out" wire:click="increment">+</button>
</div>
