<div class="container mx-auto mt-4 px-4 min-h-[660px] mb-10 lg:mb-20">
    <!-- Breadcrumb -->
  <div class="mt-6 container mx-auto">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-4 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-2">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <span class="font-bold text-xl">Track Application</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

  <!-- Search-bar -->
  <div class="my-10 w-full lg:w-1/2">
    <div class="flex flex-col lg:flex-row items-center gap-2">
      <div class="w-full lg:w-10/12">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','class' => 'w-full form-control font-medium','placeholder' => 'Enter Application Number','wire:model' => 'searchkey']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full form-control font-medium','placeholder' => 'Enter Application Number','wire:model' => 'searchkey']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
      </div>

      <div class="text-center mt-2">
        <button class="btn-gray" wire:click="search" wire:loading.attr="disabled">
          <i class="fa fa-search fa-lg"></i> <?php echo e(__('Find')); ?>

        </button>
      </div>
    </div> 
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'searchkey','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'searchkey','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
  </div>
  
  <!-- seach result -->
  <?php if(!$applications->isEmpty()): ?>
  <div class="shadow overflow-hidden rounded">
    <table class="table-auto w-full">
      <thead class="text-xs font-semibold uppercase text-gray-100 bg-gray-500">
        <tr>
          <th class="px-2 py-4 whitespace-nowrap">
            <div class="font-semibold text-left">Application ID</div>
          </th>
          <th class="px-2 py-4 whitespace-nowrap">
            <div class="font-semibold text-left">Application for</div>
          </th>
          <th class="px-2 py-4 whitespace-nowrap">
            <div class="font-semibold text-left">Submit Date</div>
          </th>
           <th class="px-2 py-4 whitespace-nowrap">
            <div class="font-semibold text-left">Approval Date</div>
          </th>
          <th class="px-2 py-4 whitespace-nowrap">
            <div class="font-semibold text-right">Status</div>
          </th>
        </tr>
      </thead>
      <tbody class="text-sm divide-y divide-gray-100">
        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="p-2 whitespace-nowrap">
              <div class="flex items-center">
                <div class="font-medium text-gray-800"><?php echo e($application->app_id); ?></div>
              </div>
            </td>
            <td class="p-2 whitespace-nowrap">
              <div class="text-left"><?php echo e($application->application_name); ?></div>
            </td>

             <td class="p-2 whitespace-nowrap">
              <div class="flex items-center">
                <div class="font-medium text-gray-800">
                  <?php if(isset($application->submitted_at)): ?>
                      <?php echo e(date('d-M-Y', strtotime($application->submitted_at))); ?>

                  <?php endif; ?>
                </div>
              </div>
            </td>

            <td class="p-2 whitespace-nowrap">
              <div class="flex items-center">
                <div class="font-medium text-gray-800">
                  <?php if(isset($application->processed_at)): ?>
                  <?php echo e($application->processed_at->format('d-M-Y')); ?>

                  <?php endif; ?>
                </div>
              </div>
            </td>

              <?php if($application->status == 'Approved'): ?>
                  <?php $textColor = 'text-green-600';  ?>
              <?php elseif($application->status=='Rejected'): ?>   
                  <?php $textColor = 'text-red-500';  ?>
              <?php else: ?>
                    <?php $textColor = 'text-gray-700';  ?>
              <?php endif; ?>
          
            <td class="p-2 whitespace-nowrap">
                <div class="text-right uppercase text-xs font-bold <?php echo e($textColor); ?>"><?php echo e($application->status); ?></div>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
      </tbody>
    </table>
  </div>
  <?php else: ?>
    <div class="font-bold text-lg text-center bg-gray-100 rounded p-4">
      <?php if($search): ?>
          <p> Application not found . . .</p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/track-application.blade.php ENDPATH**/ ?>