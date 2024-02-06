<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['btntext','btncolor']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['btntext','btncolor']); ?>
<?php foreach (array_filter((['btntext','btncolor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
 <button class="px-2 py-2 text-white bg-<?php echo e($btncolor); ?>-600 font-bold rounded text-xs uppercase hover:bg-<?php echo e($btncolor); ?>-600 focus:no-outline" @click="open = true">
    <?php echo e($btntext); ?> 
</button><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/components/custom/utilities/modals/open-button.blade.php ENDPATH**/ ?>