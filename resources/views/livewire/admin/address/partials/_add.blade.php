 <!-- Show add/Edit Modal -->
      <x-dialog-modal wire:model="confirmItemAdd">
          <x-slot name="title">
              {{ isset( $this->address->id) ? 'Edit Address' : 'Add Address' }}
          </x-slot>

          <x-slot name="content">
              <!-- Location -->
              <div class="mt-2">
                <x-label for="location" value="{{ __('Location') }}" />
                <div class="rounded-md shadow-sm">
                  <div class="mt-1 bg-white">                      
                    <div class="body-content" wire:ignore>                            
                      <trix-editor
                        class="trix-content"
                        x-ref="trix"
                        x-data
                        x-on:trix-change="$dispatch('input', event.target.value)"
                        wire:model.defer="address.location"
                        wire:key="trix-location-unique-key">
                      </trix-editor>
                    </div>
                  </div>
                </div>
                <x-input-error for="address.location" class="mt-2" />
              </div> 
               <!-- Telephone -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-label for="telephone" value="{{ __('Telephone') }}" />
                      <x-input type="text" class="mt-1 block w-full" wire:model.lazy="address.telephone" />
                      <x-input-error for="address.telephone" class="mt-2" />
                  </div>
              </div>

                <!-- Email -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-label for="email" value="{{ __('Email') }}" />
                      <x-input type="text" class="mt-1 block w-full" wire:model.lazy="address.email" />
                      <x-input-error for="address.email" class="mt-2" />
                  </div>
              </div>

              <!-- opening_hrs -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-label for="opening_hrs" value="{{ __('Opening Hrs') }}" />
                      <x-input type="text" class="mt-1 block w-full" wire:model.lazy="address.opening_hrs" />
                      <x-input-error for="address.opening_hrs" class="mt-2" />
                  </div>
              </div>
          </x-slot>

          <x-slot name="footer">
              <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
              </x-secondary-button>

              <x-button class="ml-2 btn-blue" wire:click="store" wire:loading.attr="disabled">
                  {{ __('Save') }}
              </x-button>
          </x-slot>
      </x-dialog-modal>