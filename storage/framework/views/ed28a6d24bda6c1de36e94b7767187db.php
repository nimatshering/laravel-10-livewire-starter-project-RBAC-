<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--  Notification-->
  <div class="mt-6 container mx-auto lg:px-10">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-4 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-2">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <span class="font-bold text-xl">Notifications</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

  <section class="relative pt-10 pb-20 min-h-screen">
    <div class="container px-2 mx-auto lg:px-10 lg:min-h-screen">
      <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col lg:flex-row w-full mx-auto bg-gray-50 mt-4">
           <div class="w-full p-4">
            <div class="flex items-center gap-2">
              <div>
                <div class="font-bold text-gray-700"><?php echo $post->title; ?></div>
                <div class="text-xs font-light text-gray-600"><?php echo $post->created_at->format('d-M-Y'); ?></div>
              </div>
            </div>
            <div class="ck-content mt-2">
                <div class="text-justify text-md"> 
                  <?php echo substr($post->content, 0, 500); ?> <?php echo e(strlen($post->content) > 500 ? "..." : ""); ?>

                </div>
            </div>

            <div class="my-6">
                <a href="<?php echo e(route('view.post',$post->id)); ?>" class="btn-orange">
                Read more <i class="fa fa-long-arrow-alt-right ml-2"></i>
              </a>
            </div>
          </div> 
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="my-2">
        <?php echo e($notifications->links()); ?>

      </div>
  </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/notifications.blade.php ENDPATH**/ ?>