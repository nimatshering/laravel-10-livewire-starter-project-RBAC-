<?php if (isset($component)) { $__componentOriginal35ed1310ef4010470a9eb2d924c2ebf9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35ed1310ef4010470a9eb2d924c2ebf9 = $attributes; } ?>
<?php $component = App\View\Components\BsbLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bsb-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\BsbLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <section class="container mx-auto px-2 pt-6 pb-20">
    <nav class="flex bg-gray-200 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center lg:space-x-1">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('bsb.dashboard')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
           </svg>
            <span class="font-bold ml-4">Applications</span>
          </a>
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
     
    <div class="flex flex-col mt-6">
      <div class="-mx-4 -my-2 overflow-x-auto lg:-mx-6">
        <div class="inline-block min-w-full py-2 align-middle lg:px-6">
          <div class="overflow-hidden border border-gray-200 lg:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="p-3 text-sm text-left text-gray-500">
                    Application ID
                </th>

                <th class="p-3 text-sm text-left text-gray-500">
                    Application Name
                </th>
                <th class="p-3 text-sm text-left text-gray-500">
                    Status
                </th>
                <th class="p-3 text-sm text-right text-gray-500">
                  Take Action
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php if(isset($applications)): ?>
                <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-100">
                  <td class="px-4 text-sm font-medium whitespace-nowrap"><?php echo e($item->app_id); ?>

                  </td>
                  <td class="p-2 text-sm font-medium whitespace-nowrap"> <?php echo e($item->application_name); ?></td>
                  <td class="p-2 text-sm whitespace-nowrap capitalize"><?php echo e($item->status); ?></td>
                  <td class="p-2 text-sm whitespace-nowrap flex justify-end text-blue-600">
                    <a href="<?php echo e(route('bsb.'.$item->route, $item->app_id)); ?>" class="mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
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
<?php if (isset($__attributesOriginal35ed1310ef4010470a9eb2d924c2ebf9)): ?>
<?php $attributes = $__attributesOriginal35ed1310ef4010470a9eb2d924c2ebf9; ?>
<?php unset($__attributesOriginal35ed1310ef4010470a9eb2d924c2ebf9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35ed1310ef4010470a9eb2d924c2ebf9)): ?>
<?php $component = $__componentOriginal35ed1310ef4010470a9eb2d924c2ebf9; ?>
<?php unset($__componentOriginal35ed1310ef4010470a9eb2d924c2ebf9); ?>
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/agency/bsb-dashboard.blade.php ENDPATH**/ ?>