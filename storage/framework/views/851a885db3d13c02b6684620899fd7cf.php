 <div>
  <div class="container py-4 mx-auto">
       <?php echo $__env->make('livewire.business.module1.fiscal-incentives.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Session message -->
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
    <section class="my-4">
      <div class="bg-white shadow overflow-hidden rounded-lg">
       <div class="flex w-full justify-between items-center p-2">
        <h1 class="py-4 font-semibold uppercase">Review Application</h1>
         <!-- buttons -->
          <?php if($application->status == 'Resubmit' || $application->status == 'Draft'): ?>
            <div class="flex flex-col lg:flex-row gap-2 justify-end">
              <dt class="text-sm font-semibold text-gray-500">
                <a href="<?php echo e(route('business.edit.fiscal.incentive', $application->id)); ?>"
                  class="btn-outline">
                  Edit
                </a>
              </dt>

              <dt class="text-sm font-semibold text-gray-500">
                <a href="<?php echo e(route('business.dashboard')); ?>"
                  class="btn-gray">
                  Submit Later
                </a>
              </dt>
             
              <?php if($application->status =='Resubmit'): ?>
                <dt class="text-sm font-semibold text-gray-500 text-right">
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'btn-blue','wire:click' => '$toggle(\'confirmSubmit\')','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-blue','wire:click' => '$toggle(\'confirmSubmit\')','wire:loading.attr' => 'disabled']); ?>
                      <?php echo e(__('Resubmit')); ?>

                   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </dt>
                <?php else: ?>
                    <dt class="text-sm font-semibold text-gray-500 text-right">
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'btn-blue','wire:click' => '$toggle(\'confirmSubmit\')','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-blue','wire:click' => '$toggle(\'confirmSubmit\')','wire:loading.attr' => 'disabled']); ?>
                      <?php echo e(__('Submit')); ?>

                   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </dt>
              <?php endif; ?>
            </div>
          <?php endif; ?>
      </div>
        <div class="border-t border-gray-200">
          <dl>
            <!--Application Id  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application ID 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->app_id); ?>

              </dd>
            </div>

            <!--Application for  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application for
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->appname); ?>

              </dd>
            </div>

            <!--Promoter Name -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Promoter Name
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->promoter); ?>

              </dd>
            </div>


            <!--CID -->
              <div class="px-4 py-3 grid grid-cols-3 gap-4">
                <dt class="text-sm font-semibold text-gray-500">
                  CID 
                </dt>
                <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e(isset($application->cid)?$application->cid:"N/A"); ?>

                </dd>
              </div>
            
            <!--businessname -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Business Name
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->businessname); ?>

              </dd>
            </div>

            <!--businessname -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Business Scale
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2 capitalize">
                  <?php echo e($application->business_scale); ?>

              </dd>
            </div>

            <!--Enter Business License/Registration Number -->
              <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
                <dt class="text-sm font-semibold text-gray-500">
                  Enter Business License/Registration Number
                </dt>
                <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e(isset($application->licenseno)? $application->licenseno: "N/A"); ?>

                </dd>
              </div>

            <!-- Contact Number  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Contact Number
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->phone); ?>

              </dd>
            </div>

            <!-- Email   -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Email
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->email); ?>

              </dd>
            </div>
    
            <!-- Business Licence Number  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Import Licence Number
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->importlicense); ?>

              </dd>
            </div>

            <!-- Issue Date  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Issue Date
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->issue_at); ?>

              </dd>
            </div>

            <h1 class="font-bold py-2 m-2">Business Location</h1>
            <!-- Dzongkhag -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Dzongkhag 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php if(isset($application->dzongkhag_id)): ?>
                    <?php echo e(\App\Models\Dzongkhag::find($application->dzongkhag_id)->name); ?>

                <?php endif; ?>
              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Gewog 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php if(isset($application->gewog_id)): ?>
                    <?php echo e(\App\Models\Gewog::find($application->gewog_id)->name); ?>

                <?php endif; ?>
              </dd>
            </div>

             <!-- Location  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Location
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->location); ?>

              </dd>
            </div>

                <!-- Attachments -->
            <div class="bg-gray-50 px-4 py-5 grid grid-cols-3 gap-4">
              <dt class="text-sm font-medium text-gray-500">Attachments</dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                      <!-- Heroicon name: solid/paper-clip -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 flex-1 w-0 truncate"> <?php echo e($item->title); ?> </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                      <button wire:click="downloadDocument(<?php echo e($item->id); ?>)" class="font-medium text-indigo-600 hover:text-indigo-500">
                          Download
                      </button>  
                    </div>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </dd>
            </div>

            <!-- Remarks  -->
            <div class="px-4 py-3">
              <dt class="font-bold text-gray-500 py-4">
                Remarks
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo $application->remarks; ?>

              </dd>
            </div>
          </dl>
        </div>
      </div>
    <?php echo $__env->make('livewire.business.module1.fiscal-incentives.partials._submit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>  
  </div>
</div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/business/module1/fiscal-incentives/review-application.blade.php ENDPATH**/ ?>