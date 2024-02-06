  <div>
  <?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/css/pikaday.min.css" integrity="sha512-yFCbJ3qagxwPUSHYXjtyRbuo5Fhehd+MCLMALPAUar02PsqX3LVI5RlwXygrBTyIqizspUEMtp0XWEUwb/huUQ==" crossorigin="anonymous" /> 
    <?php $__env->stopPush(); ?>
    <div class="py-5 bg-white lg:p-6">
      
      <h1 class="my-2 lg:mt-6 font-bold">9. Top management</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.module2.products.topmanagements', ['appID' => $this->appID, 'review' => false])->html();
} elseif ($_instance->childHasBeenRendered('l243267996-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l243267996-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l243267996-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l243267996-0');
} else {
    $response = \Livewire\Livewire::mount('business.module2.products.topmanagements', ['appID' => $this->appID, 'review' => false]);
    $html = $response->html();
    $_instance->logRenderedChild('l243267996-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <h1 class="my-2 lg:mt-6 font-bold">10. Technical Management</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.module2.products.techmanagements', ['appID' => $this->appID, 'review' => false])->html();
} elseif ($_instance->childHasBeenRendered('l243267996-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l243267996-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l243267996-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l243267996-1');
} else {
    $response = \Livewire\Livewire::mount('business.module2.products.techmanagements', ['appID' => $this->appID, 'review' => false]);
    $html = $response->html();
    $_instance->logRenderedChild('l243267996-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          <h1 class="my-2 lg:mt-6 font-bold">11. Details of Product for Certification</h1>
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('business.module2.products.productcertdetails', ['appID' => $this->appID, 'review' => false])->html();
} elseif ($_instance->childHasBeenRendered('l243267996-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l243267996-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l243267996-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l243267996-2');
} else {
    $response = \Livewire\Livewire::mount('business.module2.products.productcertdetails', ['appID' => $this->appID, 'review' => false]);
    $html = $response->html();
    $_instance->logRenderedChild('l243267996-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        

        <h1 class="my-2 lg:mt-6 font-bold">12. Documentation</h1>

        <div class="mt-2 grid grid-cols-1 lg:grid-cols-2 gap-2">
          <div class="p-4 shadow bg-gray-100 rounded">
              <h1 class="font-bold text-sm">Documentation checklist for product certification for local manufacturers</h1>
              <p class="my-2 text-sm">Upload the following documents :</p>
              <ul class="list-decimal ml-6 text-sm">
                <li class="py-1">Valid trade licence issued by the Department of Trade</li>
                <li class="py-1">Trade mark registration issued by the Ministry of Industry Commerce and Employment</li>
                <li class="py-1">List of manufacturing equipment</li>
                <li class="py-1">List of testing equipment</li>
                <li class="py-1">Valid calibration certificates for testing/measuring instruments(valid within 12 months - calibrated by an accredited lab)</li>
                <li class="py-1">A flowchart indicating the sequence of production</li>
                <li class="py-1">Factory layout</li>
                <li class="py-1">Latest in-house test report(valid within 12 months)</li>
                <li class="py-1">Latest third party test report from an accredited laboratory(valid within 12 months)</li>
                <li class="py-1">Product catalogue</li>
                <li class="py-1">Sample</li>
              </ul>
          </div>
          <div class="p-4 shadow bg-gray-100 rounded">
              <h1 class="font-bold text-sm">Documentation checklist for product certification for manufacturers outside Bhutan</h1>
              <p class="my-2 text-sm">Upload the following documents :</p>
              <ul class="list-decimal ml-6 text-sm">
                <li class="py-1">Copy of national certification for the product (e.g. BIS, TISI, etc.)</li>
                <li class="py-1">Copy of international certification (e.g. ISO, IEC etc)</li>
                <li class="py-1">Valid test report from the company's laboratory (valid within 12 months)</li>
                <li class="py-1">Valid test reports from an accredited third party laboratory (valid within 12 months)</li>
                <li class="py-1">Valid calibration certificates for testing/measuring instruments(valid within 12 months - calibrated by an accredited lab)</li>
                <li class="py-1">Product catalogue and/specification</li>
                <li class="py-1">Product price structure</li>
                <li class="py-1">Company profile</li>
                <li class="py-1">Bhutanese wholesale dealership license issued by DoT, MoICE (your company name and product in it)</li>
                <li class="py-1">Product sample(s)</li>
              </ul>
          </div>
        </div>

        <!--  3.3 Document Upload   -->
        <div class="mt-6">
          <h1 class="font-bold text-sm"> 3.3 Upload all the required documents</h1>
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID])->html();
} elseif ($_instance->childHasBeenRendered('l243267996-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l243267996-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l243267996-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l243267996-3');
} else {
    $response = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID]);
    $html = $response->html();
    $_instance->logRenderedChild('l243267996-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <?php if(isset($this->productcert->remarks)): ?>
          <div class="mt-1 py-4">
            <h1 class="font-bold pb-4 uppercase">Remarks</h1>
            <?php echo $this->productcert->remarks; ?>

          </div>
        <?php endif; ?>


        <h1 class="font-bold my-4">Declaration:</h1>
        <p>I/we hereby declare that the information furnished above is true and complete. I understand that any false or inaccurate information shall render my application invalid, or shall result in cancellation of Certification if it is already granted.</p>

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
              <ol class="my-2 list-decimal ml-10">
                <li class="my-2">I hereby declare that all the information furnished by me in this application is true and correct. Should any false or misleading information be provided or this privilege be abused then the applicant is liable to be penalized. I also agree to abide by the following conditions for the issue of a “Business Guest Visa” for the above mentioned person.</li>
                <li class="my-2">The visiting guest is not a tourist and in the event, it is established that the guest is a tourist, I undertake to refund the entire tourist charges and bear the applicable fines as may be imposed by the relevant Agencies.</li>
                <li class="my-2">Be responsible for the cost of his/her stay in the kingdom and repatriation thereof, if necessary.</li>
                <li class="my-2">Comply with the provisions of the Immigration Act and any regulations made thereunder or any notification thereof for the time being in force in the Kingdom of Bhutan.</li>
                <li class="my-2">Not engage in any form of employment paid or unpaid unless he/she is holding a work permit or in any business, profession or occupation or any activity and does not engage in any activities detrimental to the security, reputation and well-being of the Kingdom.</li>
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
    <?php $__env->startPush('scripts'); ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js" integrity="sha512-AWC8WaJpos1L8xD++XDtqY3znmqhqDY/o4KZ3wo7kmt1Hx6YjP4ZqPnYDrLg1ymG6iidGzq/UKHS/MxBwVAlwQ==" crossorigin="anonymous"></script>
    <?php $__env->stopPush(); ?>
     </div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/business/module2/products/partials/_form2.blade.php ENDPATH**/ ?>