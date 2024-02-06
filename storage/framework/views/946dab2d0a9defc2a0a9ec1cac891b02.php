<div class="container mx-auto mt-4 px-4 min-h-[660px] mb-10 lg:mb-20">
    <!-- Breadcrumb -->
  <nav class="flex bg-stone-200 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 lg:space-x-3">
      <li class="inline-flex items-center">
        <a href="<?php echo e(route('doi.dashboard')); ?>" class="text-gray-700 font-bold hover:underline inline-flex items-center">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
          Home
        </a>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <span class="text-gray-600 ml-1 lg:ml-2 font-bold">Track application</span>
        </div>
      </li>
    </ol>
  </nav>

  <!-- Search-bar -->
  <div class="my-10  w-1/2">
    <div class="flex flex-col lg:flex-row items-center gap-2">
      <div class="w-10/12">
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
  <?php if(!is_null($this->myapplications)): ?>
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
          <?php if(auth()->check()): ?>
            <th class="px-2 py-4 whitespace-nowrap">
              <div class="font-semibold text-right">Action</div>
            </th>
          <?php endif; ?> 
        </tr>
      </thead>
      <tbody class="text-sm divide-y divide-gray-100">
        <?php $__currentLoopData = $this->myapplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                  <?php if($application->status == "Approved"): ?>
                    <?php if(isset($application->processed_at)): ?>
                    <?php echo e($application->processed_at->format('d-M-Y')); ?>

                    <?php endif; ?>
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
            <?php if(auth()->check()): ?>
            <td class="p-2 whitespace-nowrap">
              <div class="text-lg text-right">
                <a href="<?php echo e(route(auth()->user()->roles->first()->name.'.'.$application->route, $application->app_id)); ?>"
                  class="py-1 px-6 text-xs leading-5 font-semibold rounded-full border border-blue-500 hover:bg-blue-500 hover:text-gray-50">
                  VIEW
                </a>
              </div>
            </td>
            <?php endif; ?> 
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
      </tbody>
    </table>
  </div>
  <div class="my-2">
        <?php echo e($this->myapplications->links()); ?>

  </div>
  <?php else: ?>
    <div class="font-bold text-lg text-center bg-gray-100 rounded p-4">
      <?php if($searchresult): ?>
          <p> Application not found . . .</p>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/track-application.blade.php ENDPATH**/ ?>