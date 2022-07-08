<x-filament::page>
    <form wire:submit.prevent="submit" class="space-y-6">
        {{ $this->form }}

        <div class="flex flex-wrap items-center gap-4 justify-start">
            <x-filament::button wire:loading.attr="disabled" wire:loading.class="opacity-70 cursor-wait" type="submit">
                <svg wire:loading="" wire:target="submit" class="filament-button-icon w-6 h-6 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2 animate-spin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"></path>
                </svg>
                <span>Save</span>
            </x-filament::button>

            <x-filament::button type="button" color="secondary" tag="a" :href="$this->cancel_button_url">
                Cancel
            </x-filament::button>
        </div>
    </form>
</x-filament::page>
