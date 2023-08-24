<div>
    <button wire:click.prevent="getDelete" class='w-36 font-extrabold
            bg-red-600 hover:bg-red-500  border-b-4 border-red-700 hover:border-red-700
            focus:outline-none text-white  uppercase font-bold shadow-md rounded-lg p-2'>
        <div class="flex gap-4 justify-center">
            <x-icons.icon icon="trash" class="h-7 w-auto block"/>
            <div class="pt-1.5">
                Delete
            </div>
        </div>
    </button>
</div>
