 <!-- Show add/Edit Modal -->
      <x-dialog-modal wire:model="confirmItemAdd">
          <x-slot name="title">
              {{ isset( $this->link->id) ? 'Edit Link' : 'Add Link' }}
          </x-slot>

          <x-slot name="content">
              <!-- Name -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-label for="name" value="{{ __('Link Name') }}" />
                      <x-input type="text" class="mt-1 block w-full" wire:model.lazy="link.name" />
                      <x-input-error for="link.name" class="mt-2" />
                  </div>
              </div>

               <!-- Name -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-label for="url" value="{{ __('Link Url') }}" />
                      <x-input type="text" class="mt-1 block w-full" wire:model.lazy="link.url" />
                      <x-input-error for="link.url" class="mt-2" />
                  </div>
              </div>
          </x-slot>

          <x-slot name="footer">
              <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
              </x-secondary-button>

              <x-button class="ml-2 bg-blue-400 hover:bg-blue-300 hover:text-gray-700" wire:click="store" wire:loading.attr="disabled">
                  {{ __('Save') }}
              </x-button>
          </x-slot>
      </x-dialog-modal>