  <div class="container py-4 mx-auto mb-20">
       <?php echo $__env->make('livewire.agency.products.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--Session message -->
   <div class="py-2">
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
   </div>

    <section class="my-4">
      <div class="py-2">
          <dt class="text-sm font-semibold text-gray-500 text-right">
            <a href="<?php echo e(route('bsb.product.certification.pdf', $application->app_id)); ?>"
                class="btn-gray"
                target="_blank">
                <i class="fa fa-download"></i> Download Application
            </a>
          </dt>
        </div>
      <div class="flex w-full bg-gray-100 justify-between items-center rounded p-2">
          <h1 class="p-2 font-semibold uppercase">Review Application</h1>
          <!-- buttons -->
            <div class="flex flex-row gap-2 justify-evenly">
              <?php if($application->status != 'Approved'): ?>
                <dt class="text-sm font-semibold text-gray-500">
                  <a href="<?php echo e(route('bsb.edit.product.certification', $application->id)); ?>"
                    class="btn-outline">
                    Edit
                  </a>
                </dt>

                <dt class="text-sm font-semibold text-gray-500 text-right">
                  <button class="px-10 rounded-full btn-blue" wire:click="statusUpdateShow(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                      <?php echo e(__('Status Update')); ?>

                  </button>
                </dt>

              <dt class="text-sm font-semibold text-gray-500 text-right">
                  <button class="btn-green" wire:click="resubmitShow(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                      <?php echo e(__('Resubmit')); ?>

                  <button>
                </dt>

                <dt class="text-sm font-semibold text-gray-500 text-right">
                  <?php if (isset($component)) { $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['class' => 'px-10 rounded-full','wire:click' => 'rejectShow('.e($application->id).')','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-10 rounded-full','wire:click' => 'rejectShow('.e($application->id).')','wire:loading.attr' => 'disabled']); ?>
                      <?php echo e(__('Reject')); ?>

                   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $attributes = $__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__attributesOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11)): ?>
<?php $component = $__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11; ?>
<?php unset($__componentOriginal656e8c5ea4d9a4fa173298297bfe3f11); ?>
<?php endif; ?>
                </dt>
               
              <?php endif; ?> 
               <?php if($application->status == 'Approved'): ?>
                <dt class="text-sm font-semibold text-gray-500">
                    <a href="<?php echo e(route('bsb.generate.certificate', $application->app_id)); ?>" target="_blank"
                      class="btn-green">
                      Certificate
                    </a>
                  </dt>
                <?php endif; ?> 
            </div>
      </div>
       <div class="border-t border-gray-200">
        <dl>

          <!-- inspection date -->
          <?php if(isset($application->inspection_at)): ?>
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Inspection Date</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->inspection_at); ?></dd>
          </div>
          <?php endif; ?>

          <!-- Application ID-->
          <div class="px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Application ID</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->app_id); ?> </dd>
          </div>

              <!-- Application Status-->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Application Status</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->status); ?></dd>
          </div>

                <!-- Country -->
          <div class="px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Country</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->country); ?></dd>
          </div>

              <!--Year Established -->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Year Established</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->year_established); ?></dd>
          </div>

            <!-- Sector -->
          <div class="px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Sector</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->sector); ?></dd>
          </div>

            <!-- Business Scale -->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Business Scale</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->business_scale); ?></dd>
          </div>

            <!-- Telephone -->
          <div class="px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Telephone</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo e($application->phone); ?></dd>
          </div>

            <!-- Office Address -->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Office Address</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo $application->ho_address; ?></dd>
          </div>

             <!-- Factory Address -->
          <div class="px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500">Factory Address</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo $application->factory_address; ?></dd>
          </div>

            <!-- website -->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500"> Website</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo $application->website; ?></dd>
          </div>

            <!-- website -->
          <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
            <dt class="text-sm font-semibold text-gray-500"> Remarks</dt>
            <dd class="mt-1 text-sm text-gray-900 col-span-2"><?php echo $application->remarks; ?></dd>
          </div>

          <h1 class="my-2 lg:mt-6 font-bold">Top management</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.products.topmanagements', ['appID' => $this->appID, 'review' => true])->html();
} elseif ($_instance->childHasBeenRendered('l71414044-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l71414044-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l71414044-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l71414044-0');
} else {
    $response = \Livewire\Livewire::mount('business.products.topmanagements', ['appID' => $this->appID, 'review' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l71414044-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <h1 class="my-2 lg:mt-6 font-bold">Technical Management</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.products.techmanagements', ['appID' => $this->appID, 'review' => true])->html();
} elseif ($_instance->childHasBeenRendered('l71414044-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l71414044-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l71414044-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l71414044-1');
} else {
    $response = \Livewire\Livewire::mount('business.products.techmanagements', ['appID' => $this->appID, 'review' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l71414044-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <h1 class="my-2 lg:mt-6 font-bold">Details of Product for Certification</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.products.productcertdetails', ['appID' => $this->appID, 'review' => true])->html();
} elseif ($_instance->childHasBeenRendered('l71414044-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l71414044-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l71414044-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l71414044-2');
} else {
    $response = \Livewire\Livewire::mount('business.products.productcertdetails', ['appID' => $this->appID, 'review' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l71414044-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <h1 class="my-2 lg:mt-6 font-bold">Documentation</h1>
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

          <div class="mt-6">
            <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'declaration','class' => 'font-bold py-2','value' => ''.e(__('Declaration')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'declaration','class' => 'font-bold py-2','value' => ''.e(__('Declaration')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
              <ol class="my-2 list-decimal ml-10">
                <li class="my-2">I hereby declare that all the information furnished by me in this application is true and correct. Should any false or misleading information be provided or this privilege be abused then the applicant is liable to be penalized. I also agree to abide by the following conditions for the issue of a “Business Guest Visa” for the above mentioned person.</li>
                <li class="my-2">The visiting guest is not a tourist and in the event, it is established that the guest is a tourist, I undertake to refund the entire tourist charges and bear the applicable fines as may be imposed by the relevant Agencies.</li>
                <li class="my-2">Be responsible for the cost of his/her stay in the kingdom and repatriation thereof, if necessary.</li>
                <li class="my-2">Comply with the provisions of the Immigration Act and any regulations made thereunder or any notification thereof for the time being in force in the Kingdom of Bhutan.</li>
                <li class="my-2">Not engage in any form of employment paid or unpaid unless he/she is holding a work permit or in any business, profession or occupation or any activity and does not engage in any activities detrimental to the security, reputation and well-being of the Kingdom.</li>
              </ol>
              <div class="m-4 font-bold">
                <?php if($application->declaration): ?>
                  <div class="flex flex-row gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    <span>I agree</span>
                  </div>
                <?php else: ?>
                  <span>I do not agree</span>
                <?php endif; ?>
              </div>
          </div> 
        </dl>
      </div>
      <?php echo $__env->make('livewire.agency.products.partials._approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('livewire.agency.products.partials._resubmit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('livewire.agency.products.partials._reject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('livewire.agency.products.partials._status-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>  
  </div>
<?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/agency/products/review-application.blade.php ENDPATH**/ ?>