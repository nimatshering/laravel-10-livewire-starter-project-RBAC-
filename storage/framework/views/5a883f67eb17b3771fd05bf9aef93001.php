<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/css/pikaday.min.css" integrity="sha512-yFCbJ3qagxwPUSHYXjtyRbuo5Fhehd+MCLMALPAUar02PsqX3LVI5RlwXygrBTyIqizspUEMtp0XWEUwb/huUQ==" crossorigin="anonymous" /> 
 <?php $__env->stopPush(); ?>
<div class="pb-10 mb-10">
    <?php echo $__env->make('livewire.business.module1.locallymanufacturedmaterial.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Session message -->
    <section class="my-10">
        <?php echo $__env->make('livewire.business.module1.locallymanufacturedmaterial.partials._step2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
        <div class="mt-10 py-4">
          <h1 class="font-bold pb-2">Please upload any supporting documents (optional)</h1>
        </div>

      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID])->html();
} elseif ($_instance->childHasBeenRendered('l619234086-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l619234086-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l619234086-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l619234086-0');
} else {
    $response = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID]);
    $html = $response->html();
    $_instance->logRenderedChild('l619234086-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- decleration-->
      <div class="mt-6">
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
              <ol class="my-2 text-gray-600">
                <li class="py-2">
                  I/we hereby confirm that the information provided on this application is true to the best of my /our knowledge and belief. 
                  In case the Declaration is proved false; I/we shall be liable for any fine, penalties or be prosecuted
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
  </section> 
</div>
 
<?php $__env->startPush('scripts'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js" integrity="sha512-AWC8WaJpos1L8xD++XDtqY3znmqhqDY/o4KZ3wo7kmt1Hx6YjP4ZqPnYDrLg1ymG6iidGzq/UKHS/MxBwVAlwQ==" crossorigin="anonymous"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/business/module1/locallymanufacturedmaterial/supporting-doc.blade.php ENDPATH**/ ?>