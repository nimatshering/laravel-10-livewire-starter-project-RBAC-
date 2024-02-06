<div>
  <div class="container py-4 mx-auto">
    <?php echo $__env->make('livewire.agency.module1.taxholiday.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Stepper-->
         <?php echo $__env->make('livewire.agency.module1.taxholiday.partials._step2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <section class="mt-4 mb-10">
        <div class="flex flex-col">
            <div class="align-middle inline-block min-w-full">
              <div class="my-6 px-8 pb-6 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <h1 class="bg-gray-500 font-bold p-2 rounded text-white mt-6">Upload the following Documents</h1>
                  <div class="m-6">
                    <ol class="list-decimal">
                      <li>Invoice (s)</li>
                      <li>Investment Allowance -   Any Supporting Documents</li>
                    </ol>
                  </div> 

                   <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID])->html();
} elseif ($_instance->childHasBeenRendered('l1031676535-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1031676535-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1031676535-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1031676535-0');
} else {
    $response = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID]);
    $html = $response->html();
    $_instance->logRenderedChild('l1031676535-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    <!-- decleration-->
                  <div class="mt-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                          <ol class="my-2 list-decimal ml-10">
                            <li class="py-2">
                              I/we hereby confirm that the information provided on this application is true to the best of my /our knowledge and belief. 
                              In case the Declaration is proved false; I/we shall be liable for any fine, penalties or be prosecuted.
                            </li>
                          </ol>
                      <div class="m-4">
                        <input type="checkbox" wire:model.lazy="declaration" <?php echo e($this->declaration == 1 ? 'checked': ''); ?>/>
                        <span class="ml-4">I Agree</span>
                      </div>
                  </div> 

                  <div class="bg-gray-100 rounded p-2">
                    <?php if($this->declaration): ?>
                    <div class="flex items-center justify-end gap-4">
                      <div>I agree</div>
                       <button class="btn-blue" wire:click="updateDecleration" wire:loading.attr="disabled">
                          <?php echo e(__('Save & Next')); ?>

                      </button>
                    </div>
                    <?php else: ?>
                      <div class="flex items-center py-3 justify-end gap-4">
                        <span>I do not agree</span>
                        <button class="btn-light-gray" wire:loading.attr="disabled">
                            <?php echo e(__('Save & Next')); ?>

                        </button>
                      </div>
                    <?php endif; ?>
                  </div>
              </div>
            </div>
        </div>
      </section>  
  </div>
</div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/taxholiday/supporting-doc.blade.php ENDPATH**/ ?>