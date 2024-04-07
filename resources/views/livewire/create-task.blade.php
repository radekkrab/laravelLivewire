<div class="mx-auto w-[400px]">
    <button wire:click="openModal" class="p-2 border border-black">Создать новую задачу</button>

    @if($showModal)
        <div class="absolute mx-auto my-auto bg-white p-6 border border-black">
            <form wire:submit="save"> 
                <label for="title">Наименование задачи:</label>
                <input type="text" id="title" wire:model="name">
                <label for="desc">Описание задачи:</label>
                <input type="text" id="desc" wire:model="description">
                <button type="submit" class="p-2 border border-black">Создать</button>
            </form>
            <button wire:click="closeModal" class="p-2 border border-black">Закрыть окно</button>
        </div>
    @endif
</div>
