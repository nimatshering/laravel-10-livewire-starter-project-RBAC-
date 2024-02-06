<div>
  <div class="container py-4 mx-auto">
     <?php echo $__env->make('livewire.business.module1.valueaddition-certificate.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      <!-- Stepper-->
      <div class="mt-4 py-6 w-full rounded bg-gray-50 text-gray-700 border border-gray-200">
        <div class="flex">
          <div class="w-4/12">
            <div class="relative mb-2">
              <div class="w-10 h-10 mx-auto border border-gray-300  rounded-full text-lg flex items-center">
                <span class="text-center text-gray-500 w-full">
                  <i class="fa fa-user-edit"></i>
                </span>
              </div>
            </div>
            <div class="text-xs text-center text-gray-500">Step 1: Busines Information</div>
          </div>

          <div class="w-4/12">
            <div class="relative mb-2 rounded">
              <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1 justify-end">
                  <div class="w-0 bg-gray-400 h-1 rounded" style="width: 33%;"></div>
                </div>
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </div>

              <div class="w-10 h-10 mx-auto bg-sky-600 rounded-full text-lg flex items-center">
                <span class="text-center text-white w-full">
                  <i class="fa fa-file-upload"></i>
                </span>
              </div>
            </div>
            
            <div class="text-sm text-center font-bold text-sky-800">Step 2: Upload supporting documents   </div>
          </div>

          <div class="w-4/12">
            <div class="relative mb-2">
              <div class="absolute flex align-center items-center align-middle" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                  <div class="w-0 bg-sky-600 h-1 rounded" style="width: 33%;"></div>
                </div>
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </div>

              <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                <span class="text-center text-gray-400 w-full">
                    <i class="fa fa-check-circle"></i>
                </span>
              </div>
            </div>
            <div class="text-xs text-center text-gray-500">Step 3: Submit </div>
          </div>
        </div>
      </div>

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
      <section class="mt-4 mb-10">
        <div class="flex flex-col">
            <div class="align-middle inline-block min-w-full">
              <div class="my-6 px-8 pb-6 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                
                
                
                  
                
                
                

                
                

                
                 
                <h1 class="my-4 font-bold p-2 bg-gray-500  border rounded text-white">Upload Supporting Documents</h1>
                  <div class="my-6">
                    <p class="px-2">1. Copy of invoice & Copy of Import License under attachment</p>
                    <p class="px-2">2. Raw Material Requirement (RM Form 1) </p>
                    <p class="px-2">3. Raw Material Utilization Form (RM Form 2)</p>
                    <p class="px-2">4. Undertaking form</p>
                  </div> 

                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID])->html();
} elseif ($_instance->childHasBeenRendered('l458538354-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l458538354-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l458538354-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l458538354-0');
} else {
    $response = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID]);
    $html = $response->html();
    $_instance->logRenderedChild('l458538354-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                   <!--declaration -->
                    

                    <div class="pt-4 flex items-center justify-end gap-4">
                        <a href="<?php echo e(route('business.review.value.added.certificate', $appID)); ?>" class="btn-blue">
                              <?php echo e(__('SAVE & NEXT')); ?><i class="fa fa-long-arrow-alt-right"></i>
                        </a>
                      </div>

                    
              </div>
            </div>
        </div>
      </section>  
  </div>
</div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/business/module1/valueaddition-certificate/additional-details.blade.php ENDPATH**/ ?>