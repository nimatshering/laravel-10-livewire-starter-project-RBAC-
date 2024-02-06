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
  <div class="mt-6 container mx-auto lg:px-10">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-4 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-2">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <span class="font-bold text-xl">Publications</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

  <section class="relative pt-4 pb-20 min-h-screen">
    <div class="container mx-auto lg:px-10">
      <div class="overflow-hidden mx-auto">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1 class="font-bold text-lg py-4"><?php echo e($category->name); ?></h1>
          <dl class="py-2">
            <?php $__currentLoopData = $category->publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white py-1 grid grid-cols-2 gap-4">
              <dd class="mt-1 text-sm text-gray-900 col-span-2">
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <li class="pl-3 pr-4 py-2 flex  text-sm hover:bg-gray-100">
                    <div class="w-0 flex-1 flex items-center">
                     <?php echo e($index+1); ?>.
                      <span class="ml-2 flex-1 w-0">
                          <?php echo e($item->title); ?>

                      </span>
                    </div>
                    <div class="ml-4 ">
                      <a href="<?php echo e(route('download.publications',  $item->slug)); ?>"  class="flex items-center text-gray-700">
                              <span class="text-xs font-bold uppercase"> <i class="fa fa-cloud-download-alt fa-lg mr-2"></i> Download</span>
                            </a>
                    </div>
                  </li>
                </ul>
              </dd>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </dl>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="my-2">
                  
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


<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/publications.blade.php ENDPATH**/ ?>