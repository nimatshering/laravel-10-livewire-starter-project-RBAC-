<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--  Faq Section-->
  <div class="mt-6 container mx-auto lg:px-10">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            
            <span class="font-bold text-xl">FAQs</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

  <section class="relative pt-4 lg:pt-10 pb-20 min-h-screen">
    <div class="container px-2 mx-auto lg:px-10">
      <div class="overflow-hidden">
        <div class="bg-white py-2">
           <div class="flex flex-wrap mx-auto mb-2">
            <div class="w-full">
              <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <details class="m-2 lg:mx-0">
                <summary class="font-semibold  bg-gray-100 rounded-md p-3 cursor-pointer">
                  <?php echo $item->question; ?>

                </summary>
                <div class="text-justify p-4 transition-all duration-500">
                  <?php echo $item->answer; ?>

                </div>
              </details>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="my-2 flex justify-between">
              <?php echo e($faqs->links()); ?>

            </div>
          </div>
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
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/faqs.blade.php ENDPATH**/ ?>