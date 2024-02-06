<div class="pb-4 mx-4">
    <nav class="flex justify-between bg-gray-100 p-3 rounded font-sans w-full my-4">
      <ol class="list-reset flex text-grey-dark">
        <li><a href="{{ route('admin.dashboard') }}" class="text-blue font-bold">Home</a></li>
        <li><span class="mx-2">/</span></li>
        <li>Useful Links</li>
      </ol>
    </nav>
    <!--Session message -->
    <x-custom.utilities.messages />
    <div class="container mx-auto ">
      <div class="flex flex-col mb-10 ">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-gray-100">
                <tr class="text-gray-800 text-xs font-semibold uppercase">
                  <th scope="col" class="px-6 py-2 text-left tracking-wider">Sl#
                  </th>
                  <th scope="col" class="px-6 py-4 text-left tracking-wider">
                      Links
                  </th>
                  <th scope="col" class="px-6 py-4 text-right tracking-wider">
                    <button wire:click="$toggle('confirmItemAdd')" class="btn-gray">
                        Add New 
                    </button>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
              @foreach($links as $index => $item)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-1 whitespace-nowrap">
                  <div class="flex items-center">
                    {{ $index+1 }}
                  </div>
                </td>
                <td class="px-6 py-1 whitespace-nowrap">
                  <div class="text-sm text-gray-900">
                    {!! $item->name !!}
                  </div>
                </td>

                <td class="flex flex-row justify-end gap-2 px-4 py-2 items-center">
                  <button wire:click="showEditModal({{ $item->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                  </button>                                    

                  <button wire:click="showDeleteModal({{ $item->id }})" wire:loading.attr="disabled">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                  </button>  
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          <div class="my-4">
            {{ $links->links() }}
          </div>
        </div>
      </div>
    </div>
        <!-- Add/Edit Modal -->
        @include('livewire.admin.links.partials._add')
         <!--Delete Modal -->
        @include('livewire.admin.links.partials._delete')
    </div>
</div>

