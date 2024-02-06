<div class="container p-4 mx-auto">
   <?php echo $__env->make('livewire.agency.products.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Session message -->
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
   <section class="mt-4 mb-10 shadow rounded py-4">
        <?php echo $__env->make('livewire.agency.products.partials._step2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('livewire.agency.products.partials._form2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section> 
</div><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/agency/products/additionaldetails.blade.php ENDPATH**/ ?>