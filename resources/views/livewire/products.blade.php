<div>
    <div class="flex justify-end mb-4">
        <div class="flex items-center">
            <input type="search" wire:model.live="search" placeholder="Buscar..."
                class="w-full bg-transparent placeholder:text-slate-400 
      text-slate-700 text-sm border-neutral-200 px-3 py-2 
      focus:border-teal-600 focus:outline-none focus:ring 
      focus:ring-opacity-0 focus:ring-teal-600 shadow-sm dark:focus:ring-teal-600
      dark:border-neutral-700 rounded-l-md">
            <button type="button"
                class="flex items-center justify-center w-full px-4 py-2.5 text-sm font-medium text-white rounded-r-lg md:w-auto bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 focus:outline-none dark:focus:ring-teal-800">
                <svg class="h-3.5 w-3.5 mr-2 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                gregar
            </button>
        </div>
    </div>
    <x-bree.table.table :headers="['descripcion', 'codigo', 'precio', ['name' => 'accion', 'align' => 'left']]">
        @forelse ($products as $product)
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <x-bree.table.td>{{ $product->name }}</x-bree.table.td>
                <x-bree.table.td>{{ $product->code }}</x-bree.table.td>
                <x-bree.table.td>{{ $product->price }}</x-bree.table.td>
                <x-bree.table.td>
                    ver Editar Eliminar
                </x-bree.table.td>
            </tr>
        @empty
            <tr>
                <x-bree.table.td colspan="4">
                    Sin productos registrados
                </x-bree.table.td>
            </tr>
        @endforelse
    </x-bree.table.table>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
