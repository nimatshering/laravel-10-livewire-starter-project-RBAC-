<!-- Show delete Modal -->
      <x-confirmation-modal wire:model="confirmItemDeletion">
          <x-slot name="title">
              {{ __('Delete') }}
          </x-slot>

          <x-slot name="content">
              {{ __('Are you sure you want to delete the link?') }}
          </x-slot>

          <x-slot name="footer">
              <x-secondary-button wire:click="$set('confirmItemDeletion',false)" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
              </x-secondary-button>

              <x-danger-button class="ml-2" wire:click="destroy({{ $confirmItemDeletion }})" wire:loading.attr="disabled">
                  {{ __('Delete') }}
              </x-danger-button>
          </x-slot>
      </x-confirmation-modal>