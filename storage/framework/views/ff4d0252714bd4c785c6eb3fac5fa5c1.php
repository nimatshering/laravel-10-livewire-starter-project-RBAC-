<?php if (isset($component)) { $__componentOriginal9d1113b397ede1516744d5c8e22e7a09 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1113b397ede1516744d5c8e22e7a09 = $attributes; } ?>
<?php $component = App\View\Components\BusinessLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BusinessLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <section class="container mx-auto p-4 pb-20">
    <nav class="flex bg-stone-300 text-gray-700 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <div class="text-gray-700 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <span class="font-bold ml-4">Draft Application</span>
          </div>
        </li>
      </ol>
    </nav>

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

    <div class="flex flex-col lg:flex-row mt-6 gap-2">
      <div class="w-full lg:flex-grow mx-4 -my-2 overflow-x-auto lg:-mx-6">
        <div class="inline-block min-w-full py-2 align-middle lg:px-6">
          <div class="overflow-hidden border border-gray-200 lg:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-100">
                <tr>
                  <th class="p-3 text-sm text-left text-gray-700">
                      Application ID
                  </th>

                  <th class="p-3 text-sm text-left text-gray-700">
                      Application Name
                  </th>
                  <th class="py-3 text-sm text-left text-gray-700">
                      Status
                  </th>
                  <th class="pr-7 py-2 text-sm text-right text-gray-700">View
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <?php if(isset($applications)): ?>
                <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 text-sm font-medium whitespace-nowrap"><?php echo e($item->app_id); ?>

                    </td>
                    <td class="px-4 py-2 flex-grow text-sm font-medium whitespace-nowrap"> <?php echo e($item->application_name); ?></td>
                      <?php if($item->status=='Approved'): ?>
                        <?php $textColor = 'text-green-600';  ?>
                      <?php elseif($item->status=='Resubmit'): ?>   
                        <?php $textColor = 'text-green-700';  ?>
                      <?php elseif($item->status=='Rejected'): ?>   
                        <?php $textColor = 'text-red-500';  ?>
                      <?php else: ?>
                        <?php $textColor = 'text-gray-700';  ?>
                      <?php endif; ?>
                    <td class="px-2 py-2 text-sm font-bold whitespace-nowrap <?php echo e($textColor); ?> capitalize"><?php echo e($item->status); ?></td>
                    <td class="px-4 py-2 text-sm whitespace-nowrap flex justify-end">
                      <a href="<?php echo e(route('business.'.$item->route, $item->app_id)); ?>" class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1113b397ede1516744d5c8e22e7a09)): ?>
<?php $attributes = $__attributesOriginal9d1113b397ede1516744d5c8e22e7a09; ?>
<?php unset($__attributesOriginal9d1113b397ede1516744d5c8e22e7a09); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1113b397ede1516744d5c8e22e7a09)): ?>
<?php $component = $__componentOriginal9d1113b397ede1516744d5c8e22e7a09; ?>
<?php unset($__componentOriginal9d1113b397ede1516744d5c8e22e7a09); ?>
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/business/business-dashboard.blade.php ENDPATH**/ ?>