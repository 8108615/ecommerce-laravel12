<div>
    <section class="rounded-lg bg-white border border-gray-100 shadow-lg">

        <header clas="border-b border-gray-200 px-6 py-2">
            <div class="flex justify-between">
                <h1 class="text-lg font-semibold text-gray-700">
                    Opciones
                </h1>
                <x-button wire:click="$set('openModal', true)">
                    Nuevo
                </x-button>
            </div>
        </header>

        <div class="p-6">

        </div>

    </section>

    <x-dialog-modal wire:model="openModal">
        <x-slot name="title">
            Agregar Nueva Opcion
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label>
                    Opcion
                </x-label>

                <x-select class="w-full" wire:model="variant.option_id">
                    <option value="" disabled>
                        Seleccione una Opcion
                    </option>
                    @foreach ($options as $option)

                        <option value="{{ $option->id }}">
                            {{ $option->name }}
                        </option>

                    @endforeach
                </x-select>

            </div>
        </x-slot>

        <x-slot name="footer">

        </x-slot>
    </x-dialog-modal>


</div>
