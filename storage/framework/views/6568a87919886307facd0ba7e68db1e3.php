<div class="container py-4 mx-auto">
     <?php echo $__env->make('livewire.admin.division.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Session message -->
    <?php if (isset($component)) { $__componentOriginal8bb10bafc9b6d409fc42802619175924 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8bb10bafc9b6d409fc42802619175924 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.utilities.messages','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.utilities.messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8bb10bafc9b6d409fc42802619175924)): ?>
<?php $attributes = $__attributesOriginal8bb10bafc9b6d409fc42802619175924; ?>
<?php unset($__attributesOriginal8bb10bafc9b6d409fc42802619175924); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8bb10bafc9b6d409fc42802619175924)): ?>
<?php $component = $__componentOriginal8bb10bafc9b6d409fc42802619175924; ?>
<?php unset($__componentOriginal8bb10bafc9b6d409fc42802619175924); ?>
<?php endif; ?>

    <div class="mx-auto mt-6">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:mx-6 lg:mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 table-auto">
              <thead class="bg-gray-100">
                <tr class="text-gray-800 text-xs font-semibold uppercase">
                  <th scope="col" class="px-6 py-2 text-left tracking-wider">Sl#
                  </th>
                  <th scope="col" class="px-6 py-2 text-left tracking-wider">
                     Division Name
                  </th>
                   <th scope="col" class="px-6 py-4 text-center tracking-wider ">
                     Applications
                  </th>
                  <th scope="col" class="px-6 py-2 text-right tracking-wider">
                  <button wire:click="$toggle('confirmItemAdd')" class="btn-gray-sm">
                      Add New 
                  </button>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
              <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap">
                  <?php echo e($index+1); ?>

                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">
                    <?php echo $item->name; ?>

                  </div>
                </td>

                <td class="px-6 py-1">
                  <div class="flex text-sm text-gray-900 justify-center">
                    <a href="<?php echo e(route('admin.modelnames', $item->id)); ?>" class="btn-outline-sm">
                      <i class="fa fa-file-signature mr-2"></i>
                        <?php echo $item->applications->count(); ?>

                      </a>
                  </div>
              </td>

                <td class="flex flex-row justify-end gap-2 px-4 py-2 items-center">
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
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          </div>
           <div class="my-4">
            <?php echo e($divisions->links()); ?>

          </div>
        </div>
      </div>
    </div>
        <!-- Add/Edit Modal -->
        <?php echo $__env->make('livewire.admin.division.partials._add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!--Delete Modal -->
        <?php echo $__env->make('livewire.admin.division.partials._delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/admin/division/index.blade.php ENDPATH**/ ?>