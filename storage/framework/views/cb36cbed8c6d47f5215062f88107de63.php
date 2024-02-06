<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--  post section-->
   <div class="mt-6 container mx-auto lg:px-10">
    <nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-4 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-2">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('landing')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <span class="font-bold text-xl">Archives</span>
          </a>
        </li>
      </ol>
    </nav>
  </div>

 <div class="container px-2 mx-auto lg:px-10 mt-6">
  <form action="<?php echo e(route('archives.search')); ?>" method="POST">
        <?php echo csrf_field(); ?>    
   <div class="flex flex-cols lg:flex-row gap-2 justify-evenly items-center">
      <!-- Category -->
        <div class="my-1 w-full">
          <select name="type" class="form-control text-xs">
            <option value=''> Select Category </option>
                <option value="news"  <?php if( $type  == 'news'): ?> selected="selected" <?php endif; ?>>News</option>
                <option value="announcement"  <?php if( $type  == 'announcement'): ?> selected="selected" <?php endif; ?>>Announcement</option>
                <option value="notification"  <?php if( $type  == 'notification'): ?> selected="selected" <?php endif; ?>>Notification</option>
          </select>
        </div>

        <!--year' -->
      <div class="my-1 w-full">
          <select name="year" class="form-control text-xs" required>
            <option value=''> Select Year </option>
            <?php for($year = date('Y')-1; $year > date('Y') - 10; $year--): ?>
                <option value="<?php echo e($year); ?>" <?php echo e($year == $sel_year ? 'selected': ''); ?>><?php echo e($year); ?></option>
            <?php endfor; ?>
          </select>
      </div>

       <!--search Key' -->
        <div class="my-1 w-full">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','class' => 'w-full text-xs form-control','placeholder' => 'Search Key','name' => 'search_key','value' => ''.e(request('search_key')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full text-xs form-control','placeholder' => 'Search Key','name' => 'search_key','value' => ''.e(request('search_key')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'search_key','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'search_key','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>

          <!--Submit' -->
      <div class="my-1">
        <button type="submit" class="mt-2 text-xs uppercase font-bold px-6 rounded py-3  bg-gray-700 text-white">
          Search
        </button>
      </div>
  </div>
  </form>
 </div>

  <section class="relative pt-10 pb-20">
    <div class="container px-2 mx-auto lg:px-10 lg:min-h-screen">
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col lg:flex-row w-full mx-auto bg-gray-50 mt-4">
            <div class="w-full lg:w-4/12 p-2">
              <?php if($post->photo): ?>
              <img src="<?php echo e(asset('/uploads/posts/'.$post->photo)); ?>" alt="" class="object-center rounded-t-lg p-2 rounded h-60 w-96 object-cover">
              <?php endif; ?>
            </div>
           <div class="w-full lg:w-8/12 p-2">
            <div class="flex items-center gap-2">
              <div>
                <div class="font-bold text-gray-700"><?php echo $post->title; ?></div>
                <div class="text-xs font-light text-gray-600"><?php echo $post->created_at->format('d-M-Y'); ?></div>
              </div>
            </div>
            <div class="editor mt-2">
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
        <?php echo e($posts->links()); ?>

      </div>
  </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/archives.blade.php ENDPATH**/ ?>