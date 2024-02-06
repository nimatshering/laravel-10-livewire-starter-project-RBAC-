<div class="container py-4 mx-auto lg:pb-20">
    <nav class="bg-stone-100 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('doi.dashboard')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <span class="font-bold ml-4">Home</span>
          </a>
        </li>

          <li class="inline-flex items-center">
          <div class="text-gray-700 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class="font-bold ml-4">Business Guest Visa/Permit</span>
          </div>
        </li>
      </ol>
    </nav>
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
        <div class="flex w-full justify-between items-center bg-gray-100 p-2">
          <h1 class="py-4 font-semibold uppercase">Review Application</h1>
          <!-- buttons -->
          <div class="flex flex-col lg:flex-row gap-2 justify-end">
            <div class="flex flex-row gap-2 justify-evenly">
               <?php if($application->status != 'Reviewing'): ?>
              <dt class="text-sm font-semibold text-gray-500">
                <a href="<?php echo e(route('doi.edit.guestvisa', $application->id)); ?>"
                  class="btn-outline">
                  Edit
                </a>
              </dt>

              <?php if($application->status != 'Approved'): ?>
                <?php if($application->status != 'Rejected'): ?>
                  <dt class="text-sm font-semibold text-gray-500 text-right">
                    <button class="btn-green" wire:click="resubmitShow(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                        <?php echo e(__('Resubmit')); ?> 
                    <button>
                </dt>
                 <?php endif; ?>   

                <dt class="text-sm font-semibold text-gray-500 text-right">
                  <button class="btn-blue" wire:click="$toggle('confirmApprove')" wire:loading.attr="disabled">
                      <?php echo e(__('Approve')); ?>

                  </button>
                </dt>

                <?php if($application->status != 'Rejected'): ?>
                  <dt class="text-sm font-semibold text-gray-500 text-right">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                  </dt>
                  <?php endif; ?> 
                <?php endif; ?> 
              <?php endif; ?> 

              <dt class="text-sm font-semibold text-gray-500 text-right">
                <a href="<?php echo e(route('doi.guest.visa.pdf', $application->app_id)); ?>"
                    class="btn-gray"
                    target="_blank">
                    Download Application
                </a>
              </dt>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-200">
          <div class="flex p-2 gap-2 justify-end">
              <div class="text-sm font-semibold text-gray-500">
                <a href="<?php echo e(route('doi.guestvisa.verification.note', $application->app_id)); ?>"
                  class="btn-outline">
                  Verification Note
                </a>
              </div>  

              <div class="text-sm font-semibold text-gray-500">
                <a href="<?php echo e(route('doi.guestvisa.approval.letter', $application->app_id)); ?>"
                  class="btn-outline">
                  Approval Letter
                </a>
              </div>

                <div class="text-sm font-semibold text-gray-500 text-right">
                  <button class="btn-outline px-10 rounded-full" wire:click="forwardShow(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                      <?php echo e(__('Forward')); ?>

                       <i class="ml-2 fa fa-angle-double-right fa-lg"></i>
                  </button>
                </div>

                <div class="text-sm font-semibold text-gray-500 text-right">
                  <button class="btn-outline px-10 rounded-full" wire:click="showActivityLog(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                      <?php echo e(__('Activity Log')); ?>

                        <i class="ml-2 fa fa-history fa-lg"></i>
                  </button>
                </div>
          </div>

          <dl>
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application ID 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->app_id); ?>

              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application Status
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->status); ?>

              </dd>
            </div>


            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application for 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->appname); ?>

              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Business Type 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <?php echo e($application->business_type); ?> - <?php echo e($application->business_type=='Other'?$application->business_type_other:''); ?>

              </dd>
            </div>

            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Business Scale 
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2 capitalize">
              <?php echo e($application->business_scale); ?>

              </dd>
            </div>

            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Applicant Name
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->applicant_name); ?>

              </dd>
            </div>
            
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Citizenship ID
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->cidnumber); ?>

              </dd>
            </div>

            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Designation
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->designation); ?>

              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Address
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo $application->address; ?>

              </dd>
            </div>

            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Phone
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo $application->phone; ?>

              </dd>
            </div>

            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Email
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo e($application->email); ?>

              </dd>
            </div>

            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Reason For Visit
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                  <?php echo $application->visitreason; ?>

              </dd>
            </div>


              <!-- Attachments -->
            <div class="px-4 py-5 grid grid-cols-3 gap-4">
              <dt class="text-sm font-medium text-gray-500">Attachments</dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
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
      
            <!--Remarks -->
            <?php if(isset($application->status)): ?>
              <?php if($application->status != 'Approved'): ?>
                <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
                  <dt class="text-sm font-semibold text-gray-500">
                    Remarks
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900 col-span-2">
                      <?php echo $application->remarks; ?>

                  </dd>
                </div>
              <?php endif; ?>
            <?php endif; ?>

            <div class="p-2">
               <!-- Guest Details -->
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guestlists', ['appID' => $appID, 'reviewFlag'=>false])->html();
} elseif ($_instance->childHasBeenRendered('l1505630335-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1505630335-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1505630335-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1505630335-0');
} else {
    $response = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guestlists', ['appID' => $appID, 'reviewFlag'=>false]);
    $html = $response->html();
    $_instance->logRenderedChild('l1505630335-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
                <!-- Guest visits -->
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guest-visits', ['appID' => $appID, 'reviewFlag'=>false])->html();
} elseif ($_instance->childHasBeenRendered('l1505630335-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1505630335-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1505630335-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1505630335-1');
} else {
    $response = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guest-visits', ['appID' => $appID, 'reviewFlag'=>false]);
    $html = $response->html();
    $_instance->logRenderedChild('l1505630335-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
            </div>
           


            <!--Declaration  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
               <p> Declaration</p>
              </dt>
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
              <ol class="my-2 list-decimal ml-10 text-sm">
                <li class="my-2 text-gray-600">I hereby declare that all the information furnished by me in this application is true and correct. Should any false or misleading information be provided or this privilege be abused then the applicant is liable to be penalized. I also agree to abide by the following conditions for the issue of a “Business Guest Visa” for the above mentioned person.</li>
                <li class="my-2 text-gray-600">The visiting guest is not a tourist and in the event, it is established that the guest is a tourist, I undertake to refund the entire tourist charges and bear the applicable fines as may be imposed by the relevant Agencies.</li>
                <li class="my-2 text-gray-600">Be responsible for the cost of his/her stay in the kingdom and repatriation thereof, if necessary.</li>
                <li class="my-2 text-gray-600">Comply with the provisions of the Immigration Act and any regulations made thereunder or any notification thereof for the time being in force in the Kingdom of Bhutan.</li>
                <li class="my-2 text-gray-600">Not engage in any form of employment paid or unpaid unless he/she is holding a work permit or in any business, profession or occupation or any activity and does not engage in any activities detrimental to the security, reputation and well-being of the Kingdom.</li>
              </ol>
                <div class="font-bold flex flex-row gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                  </svg>
                  <?php echo e($application->declaration == 1 ? 'I Agree': 'I do not Agree'); ?>

                </div>
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._resubmit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._reject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._forward', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._activityLog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section> 
</div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/guest-visa/review-application.blade.php ENDPATH**/ ?>