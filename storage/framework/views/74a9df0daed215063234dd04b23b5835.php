<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <body class="text-gray-800 antialiased">
  <section class="bg-white">
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
      <?php if (isset($component)) { $__componentOriginalda122c38146ce98432a8bd6f8c3fdb59 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda122c38146ce98432a8bd6f8c3fdb59 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.bsb-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.bsb-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda122c38146ce98432a8bd6f8c3fdb59)): ?>
<?php $attributes = $__attributesOriginalda122c38146ce98432a8bd6f8c3fdb59; ?>
<?php unset($__attributesOriginalda122c38146ce98432a8bd6f8c3fdb59); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda122c38146ce98432a8bd6f8c3fdb59)): ?>
<?php $component = $__componentOriginalda122c38146ce98432a8bd6f8c3fdb59; ?>
<?php unset($__componentOriginalda122c38146ce98432a8bd6f8c3fdb59); ?>
<?php endif; ?>

      <div class="container mx-auto">
        <?php echo e($slot); ?>

      </div>
     
    
  </section>
        <?php echo $__env->make('layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/layouts/bsb.blade.php ENDPATH**/ ?>