<button wire:click="create"
        {{ $attributes->merge(['class' => 'md:flex hidden mt-4 md:mb-5 inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs text-white uppercase tracking-widest
                                    transition-all shadow-xs bg-gradient-to-r from-green-600 to-green-500 hover:bg-gradient-to-b dark:shadow-green-900
                                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500
                                    shadow-green-200 hover:shadow-2xl hover:shadow-green-300 hover:-tranneutral-y-px print:hidden'])}}>
    <x-aaranUI::icons.icon :icon="'plus-slim'" class="h-5 w-auto block px-1.5"/>
    NEW
</button>