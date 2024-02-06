 <!-- Show add/Edit Modal -->
      <x-dialog-modal wire:model="confirmItemAdd">
          <x-slot name="title">
              {{ isset($this->user->id) ? 'Edit' : 'Add' }}
          </x-slot>

          <x-slot name="content">
              <!--  Name -->
              <div class="mt-4">
                  <x-label for="name" value="{{ __('Name') }}" />
                  <x-input type="text" class="mt-1 block w-full" wire:model.lazy="user.name" />
                  <x-input-error for="user.name" class="mt-2" />
              </div>

               <!-- Email -->
              <div class="mt-4">
                  <x-label for="email" value="{{ __('Email') }}" />
                  <x-input type="email" class="mt-1 block w-full" wire:model.lazy="user.email" />
                  <x-input-error for="user.email" class="mt-2" />
              </div>

                 <!-- Roles -->
              <div class="my-4">
                <x-label for="role" value="{{ __('Role') }}" />
                <select name="role" wire:model.defer="role" class="form-control" >
                  <option value="">Select Role</option>
                    @foreach($roles as $item)
                      <option value={{ $item->id }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="role" class="mt-2" />
              </div>

               <!-- Password -->
              <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="user.password" />
                <x-input-error for="user.password" class="mt-2" />
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