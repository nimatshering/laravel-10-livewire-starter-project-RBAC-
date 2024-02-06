<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body class="text-gray-800 antialiased">
        <?php if (isset($component)) { $__componentOriginalb652bf8f2d446110fba046da7687a566 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb652bf8f2d446110fba046da7687a566 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.top-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.top-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb652bf8f2d446110fba046da7687a566)): ?>
<?php $attributes = $__attributesOriginalb652bf8f2d446110fba046da7687a566; ?>
<?php unset($__attributesOriginalb652bf8f2d446110fba046da7687a566); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb652bf8f2d446110fba046da7687a566)): ?>
<?php $component = $__componentOriginalb652bf8f2d446110fba046da7687a566; ?>
<?php unset($__componentOriginalb652bf8f2d446110fba046da7687a566); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalec85aa12e48a446c7e2a91fed40360f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec85aa12e48a446c7e2a91fed40360f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.business-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.business-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec85aa12e48a446c7e2a91fed40360f7)): ?>
<?php $attributes = $__attributesOriginalec85aa12e48a446c7e2a91fed40360f7; ?>
<?php unset($__attributesOriginalec85aa12e48a446c7e2a91fed40360f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec85aa12e48a446c7e2a91fed40360f7)): ?>
<?php $component = $__componentOriginalec85aa12e48a446c7e2a91fed40360f7; ?>
<?php unset($__componentOriginalec85aa12e48a446c7e2a91fed40360f7); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

      <?php echo $__env->make('layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
  
   <?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/layouts/business.blade.php ENDPATH**/ ?>