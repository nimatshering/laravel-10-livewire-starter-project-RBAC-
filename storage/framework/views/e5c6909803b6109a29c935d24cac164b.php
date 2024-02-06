
<div class="pb-10 mb-10">
    <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.agency.module1.guest-visa.partials._step2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      

     <!-- Guest Details -->
     <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guestlists', ['appID' => $appID, 'reviewFlag' => true])->html();
} elseif ($_instance->childHasBeenRendered('l3057566390-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3057566390-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3057566390-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3057566390-0');
} else {
    $response = \Livewire\Livewire::mount('agency.module1.guest-visa.doi-guestlists', ['appID' => $appID, 'reviewFlag' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l3057566390-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 

    <!-- Previous Visit -->
     

    <div class="my-2 rounded p-4 bg-gray-100">
      <h1 class="font-bold pb-2">Please upload the following documents</h1>
      <ol class="list-decimal">
          <li class="ml-4 pb-2">Duly completed Business Guest application form.</li>
          <li class="ml-4 pb-2">Authorization letter from the company/employer of the guest/contractual agreement.</li>  
          <li class="ml-4 pb-2">Credentials of the guest(s) - Curriculum vitae/academic & training certificate/work experience certificate.</li> 
          <li class="ml-4 pb-2">Report of the previous visit (if applicable).</li>
          <li class="ml-4 pb-2">Duly completed visa/entry permit application form signed by the guest</li>
          <li class="ml-4 pb-2">A copy of Passport/Work Permit of the guest [ The passport must be valid for at least six months from the intended date of departure from Bhutan ] </li>
          <li class="ml-4 pb-2">Detailed day wise program of the visit</li>
          <li class="ml-4 pb-2"> ECPF shall furnish a recommendation letter from the Bhutan Qualification and Professionals Certification Authority, MoESD with the application to MoICE</li>
          
      </ol>
    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID])->html();
} elseif ($_instance->childHasBeenRendered('l3057566390-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3057566390-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3057566390-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3057566390-1');
} else {
    $response = \Livewire\Livewire::mount('filemanagers', ['appID' => $appID]);
    $html = $response->html();
    $_instance->logRenderedChild('l3057566390-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- decleration-->
      <div class="mt-1">
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
          <span>I agree</span>
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

<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/guest-visa/doi-guest-details.blade.php ENDPATH**/ ?>