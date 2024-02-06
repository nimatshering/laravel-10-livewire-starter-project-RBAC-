<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <body class="font-sans text-gray-800 antialiased">
  <section>
     
    <div x-data="{ sidebarOpen: false}">
      <div class="flex min-h-screen bg-white">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
          class="fixed z-20 inset-0 opacity-50 transition-opacity lg:hidden">
        </div>
        <!-- sidebar -->
           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is-admin')): ?>
            <?php if (isset($component)) { $__componentOriginalc2b50bcea2f6b5a953738cb525437701 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2b50bcea2f6b5a953738cb525437701 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.sidebar.admin-sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.sidebar.admin-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2b50bcea2f6b5a953738cb525437701)): ?>
<?php $attributes = $__attributesOriginalc2b50bcea2f6b5a953738cb525437701; ?>
<?php unset($__attributesOriginalc2b50bcea2f6b5a953738cb525437701); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2b50bcea2f6b5a953738cb525437701)): ?>
<?php $component = $__componentOriginalc2b50bcea2f6b5a953738cb525437701; ?>
<?php unset($__componentOriginalc2b50bcea2f6b5a953738cb525437701); ?>
<?php endif; ?>
          <?php endif; ?>
        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('is-admin')): ?>
           <?php if (isset($component)) { $__componentOriginalb7397fcf14327c5b6fc00931dc85ac50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb7397fcf14327c5b6fc00931dc85ac50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.admin-top-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.admin-top-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb7397fcf14327c5b6fc00931dc85ac50)): ?>
<?php $attributes = $__attributesOriginalb7397fcf14327c5b6fc00931dc85ac50; ?>
<?php unset($__attributesOriginalb7397fcf14327c5b6fc00931dc85ac50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb7397fcf14327c5b6fc00931dc85ac50)): ?>
<?php $component = $__componentOriginalb7397fcf14327c5b6fc00931dc85ac50; ?>
<?php unset($__componentOriginalb7397fcf14327c5b6fc00931dc85ac50); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal916aa190fb00e4cbf9281b373ad43bbc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal916aa190fb00e4cbf9281b373ad43bbc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.admin-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.admin-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal916aa190fb00e4cbf9281b373ad43bbc)): ?>
<?php $attributes = $__attributesOriginal916aa190fb00e4cbf9281b373ad43bbc; ?>
<?php unset($__attributesOriginal916aa190fb00e4cbf9281b373ad43bbc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal916aa190fb00e4cbf9281b373ad43bbc)): ?>
<?php $component = $__componentOriginal916aa190fb00e4cbf9281b373ad43bbc; ?>
<?php unset($__componentOriginal916aa190fb00e4cbf9281b373ad43bbc); ?>
<?php endif; ?>
          <?php endif; ?>

          <div class="flex items-center space-x-4 lg:space-x-0">
            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden p-4">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

            <div class="container mx-auto px-2 mt-2">
              <?php echo e($slot); ?>

            </div>
        </div>
      </div>
    </div>
  </section>
        <?php echo $__env->make('layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
  
   <?php /**PATH /Users/nimatshering/Sites/laravel-10-starter-project/resources/views/layouts/app.blade.php ENDPATH**/ ?>