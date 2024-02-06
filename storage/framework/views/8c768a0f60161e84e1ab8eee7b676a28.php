<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--  Downloads section-->
  <div class="mt-6 container mx-auto px-2 lg:px-10">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-4 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <span class="font-bold text-xl">User Guide</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

  <section class="relative pt-4 pb-20 min-h-screen">
    <div class="container mx-auto px-2 lg:px-10">
      <div class="overflow-hidden mx-auto">
          <dl class="py-2">
            <div class="bg-white py-1 grid grid-cols-2 gap-4">
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <li class="pl-3 pr-4 py-2 flex  text-sm hover:bg-gray-100">
                    <div class="w-0 flex-1 flex items-center">
                      <span class="ml-2 flex-1 w-0">
                          User Guide
                      </span>
                    </div>
                    <div class="ml-4">
                        <a href="<?php echo e(asset("uploads/$userguide->document")); ?>" target = class="flex items-center text-gray-700" target="_blank">
                              <span class="text-xs font-bold uppercase"> <i class="fa fa-cloud-download-alt fa-lg mr-2"></i> Download</span>
                        </a>
                    </div>
                  </li>
                </ul>
              </dd>
            </div>
          </dl>
      </div>
      <h1 class="font-bold mt-4 px-2">Video Guide </h1>
      <h5 class="px-2">(Click on play button to watch the guide)</h5>
      <div class="mt-2 lg:mt-4 rounded-md px-2">
        <div class="lg:w-1/2 pt-10 rounded-lg bg-orange-200 flex items-center">
          <!-- Play Button -->
          <div class="mt-10 relative top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2 transform cursor-pointer">
            <a href="<?php echo e(asset("uploads/$userguide->video")); ?>" 
                class="glightbox bg-orange-600 h-20 w-20 rounded-full flex items-center justify-center">
                <span class="absolute inline-flex h-full w-full rounded-full bg-orange-500 opacity-0"></span>
              <i class="bi bi-play-circle text-5xl text-white"> </i>
            </a>
          </div>
        </div>
      </div>
   </div> 
  </section>
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>


<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/user-guide.blade.php ENDPATH**/ ?>