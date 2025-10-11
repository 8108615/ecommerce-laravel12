<div class="card">
    <div class="mb-4">
        <x-label class="mb-1">
            Codigo
        </x-label>
        <x-input wire:model="product.sku" class="w-full" placeholder="Por favor Ingrese el Codigo del Producto"></x-input>
    </div>
    <div class="mb-4">
        <x-label>
            Nombre
        </x-label>

        <x-input wire:model="product.name" class="w-full" plceholder="Por favor Ingrese el Nombre del Producto"></x-input>
    </div>
    <div class="mb-4">
        <x-label>
            Descripcion
        </x-label>
        <x-textarea wire:model="product.description" class="w-full" placeholder="Por favor Ingrese la Descripcion del Producto">

        </x-textarea>
    </div>
</div>
