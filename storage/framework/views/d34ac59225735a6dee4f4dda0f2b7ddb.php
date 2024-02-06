<?php if (isset($component)) { $__componentOriginal1d0952a29fce3e011700838bdc93c1ed = $component; } ?>
<?php $component = App\View\Components\DotLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dot-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DotLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <section class="container mx-auto px-2 pt-6 pb-20">
    <nav class="flex bg-gray-200 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('dot.dashboard')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
           </svg>
            <span class="font-bold ml-4">Applications for Approval</span>
          </a>
        </li>
      </ol>
    </nav>

      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="flex flex-col mt-6">
      <div class="-mx-4 -my-2 overflow-x-auto lg:-mx-8">
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
                    <a href="<?php echo e(route('dot.'.$item->route, $item->app_id)); ?>" class="mr-4">
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
<?php if (isset($__componentOriginal1d0952a29fce3e011700838bdc93c1ed)): ?>
<?php $component = $__componentOriginal1d0952a29fce3e011700838bdc93c1ed; ?>
<?php unset($__componentOriginal1d0952a29fce3e011700838bdc93c1ed); ?>
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/dot-dashboard.blade.php ENDPATH**/ ?>