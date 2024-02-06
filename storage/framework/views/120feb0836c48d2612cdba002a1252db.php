<nav class="relative bg-gray-50 shadow text-gray-900">
  <div class="container mx-auto flex justify-between">
    <ul class="flex mt-2 p-2">
      <h2 class="font-bold text-xl"> Department of Industry</h2>
    </ul>
    <ul class="flex mt-2">
      <li x-data="{ dropdownOpen: false }" class="relative pr-4 lg:pr-10 p-2">
        <button @click="dropdownOpen = ! dropdownOpen" class="flex items-center space-x-2 relative focus:outline-none">
          <h2 class="text-gray-700 text-sm hidden sm:block font-bold"><?php echo e(Auth::user()->name); ?></h2>
          <img class="object-cover w-8 h-8 rounded-full" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" />
        </button>

        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10" x-show="dropdownOpen"
          x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
          @click.away="dropdownOpen = false">
          <a href="<?php echo e(route('profile.show')); ?>"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-600 hover:text-white">Profile</a>
          <div class="border-t border-gray-100"></div>
            <!-- Authentication -->
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                this.closest(\'form\').submit();']); ?>
                    <?php echo e(__('Log Out')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </form>
        </div>
      </li>
    </ul>
  </div>
</nav><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/components/custom/admin-nav.blade.php ENDPATH**/ ?>