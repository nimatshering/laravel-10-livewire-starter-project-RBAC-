<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

      <title>Laravel 10 (Livewire) Starter Project </title>
      <!-- icon -->
      <link rel="shortcut icon" href="assets/img/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

        <?php echo htmlScriptTagJsApi(); ?>


      <!-- Scripts -->
      <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

            
      <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
          crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous" />
      <link rel="stylesheet" href="<?php echo e(asset('css/ckeditor.css')); ?>">
      
        <?php echo $__env->yieldPushContent('styles'); ?> 
    </head>

    <body class="text-gray-800 font-sans">
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
        <?php if (isset($component)) { $__componentOriginalb9b9072f9a374970efad744389fbc7cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9b9072f9a374970efad744389fbc7cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.main-navigation','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.main-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9b9072f9a374970efad744389fbc7cb)): ?>
<?php $attributes = $__attributesOriginalb9b9072f9a374970efad744389fbc7cb; ?>
<?php unset($__attributesOriginalb9b9072f9a374970efad744389fbc7cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9b9072f9a374970efad744389fbc7cb)): ?>
<?php $component = $__componentOriginalb9b9072f9a374970efad744389fbc7cb; ?>
<?php unset($__componentOriginalb9b9072f9a374970efad744389fbc7cb); ?>
<?php endif; ?>
            <div class="font-sans">
                <?php echo e($slot); ?>

            </div>
        <?php if (isset($component)) { $__componentOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c)): ?>
<?php $attributes = $__attributesOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c; ?>
<?php unset($__attributesOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c)): ?>
<?php $component = $__componentOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c; ?>
<?php unset($__componentOriginal1ad1a4e0ba19ad91e0736dcb9b7ed10c); ?>
<?php endif; ?> 
     <!-- scroll to top -->
      <button id="to-top-button" onclick="goToTop()" title="croll to to"
        class="hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-orange-400 hover:bg-orange-600 text-white text-lg font-semibold transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
        </svg>
        <span class="sr-only">Go to top</span>
      </button>

      
      <?php echo $__env->make('layouts.partials._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     </body>    
</html>
<?php /**PATH /Users/nimatshering/Sites/laravel-10-starter-project/resources/views/layouts/guest.blade.php ENDPATH**/ ?>