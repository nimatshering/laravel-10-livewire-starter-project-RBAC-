<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/css/pikaday.min.css" integrity="sha512-yFCbJ3qagxwPUSHYXjtyRbuo5Fhehd+MCLMALPAUar02PsqX3LVI5RlwXygrBTyIqizspUEMtp0XWEUwb/huUQ==" crossorigin="anonymous" /> 
 <?php $__env->stopPush(); ?>
<div class="my-2">
    <section class="mt-10">
      <h1 class="mt-10 font-bold my-2 py-2 text-sm">Guest List</h1>
      <div class="overflow-hidden rounded">
        <table class="min-w-full divide-y divide-gray-200 table-auto">
          <thead class="bg-gray-100 rounded">
            <tr class="text-sm font-semibold">
              <th scope="col" class="text-left tracking-wider py-4 px-2">
              Sl#
              </th>
              <th scope="col" class="text-left tracking-wider py-4 px-2">
                Name of the guest
              </th>
              
              <th scope="col" class="text-left tracking-wider py-4 px-2">
                Country
              </th>

              <th scope="col" class="text-left tracking-wider py-4 px-2">
                Passport/Voter card Number
              </th>

              <th scope="col" class="text-left tracking-wider py-4 px-2">
                  Date of arrival
              </th>

              <th scope="col" class="text-left tracking-wider py-4 px-2">
                 Date of departure
              </th>

              <th scope="col" class="text-left tracking-wider py-4 px-2">
              Duration
              </th>

              <th scope="col" class="text-left tracking-wider py-4 px-2">
               Name of the hotel the guest is staying
              </th>
            <?php if($reviewFlag == true): ?>
              <th scope="col" class="text-right tracking-wider py-4 px-2">
                  <button wire:click="$toggle('confirmItemAdd')" class="btn-gray">
                    <i class="fa fa-plus-circle text-white"></i> ADD GUEST
                  </button>
              </th>
             <?php endif; ?> 
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <?php $__currentLoopData = $guestlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="hover:bg-gray-50">
              <td class="p-2">
                <div class="text-sm"><?php echo e($index+1); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->name); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->nationality); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->passport_number); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->start_at); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->end_at); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo e($item->duration); ?></div>
              </td>

              <td class="p-2">
                <div class="text-sm"><?php echo $item->accomodation; ?></div>
              </td>

             
              <?php if($reviewFlag !=false): ?>
              <td class="flex justify-end gap-2 p-2">
                <button wire:click="showEditModal(<?php echo e($item->id); ?>)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>
                </button>                                    

                <button wire:click="showDeleteModal(<?php echo e($item->id); ?>)" wire:loading.attr="disabled">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                </button>  
              </td>
              <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <!-- Add/Edit Modal -->
      <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._addguest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--Delete Modal -->
      <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section> 
</div>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js" integrity="sha512-AWC8WaJpos1L8xD++XDtqY3znmqhqDY/o4KZ3wo7kmt1Hx6YjP4ZqPnYDrLg1ymG6iidGzq/UKHS/MxBwVAlwQ==" crossorigin="anonymous"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/guest-visa/doi-guestlists.blade.php ENDPATH**/ ?>