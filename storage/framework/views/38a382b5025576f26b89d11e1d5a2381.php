<div class="" x-data="{ open: false }">
  <?php if (isset($component)) { $__componentOriginalfba0a6cecb252155cdb4ee09b6082559 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfba0a6cecb252155cdb4ee09b6082559 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.utilities.modals.open-button','data' => ['btntext' => 'Delete','btncolor' => 'red']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.utilities.modals.open-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['btntext' => 'Delete','btncolor' => 'red']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfba0a6cecb252155cdb4ee09b6082559)): ?>
<?php $attributes = $__attributesOriginalfba0a6cecb252155cdb4ee09b6082559; ?>
<?php unset($__attributesOriginalfba0a6cecb252155cdb4ee09b6082559); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfba0a6cecb252155cdb4ee09b6082559)): ?>
<?php $component = $__componentOriginalfba0a6cecb252155cdb4ee09b6082559; ?>
<?php unset($__componentOriginalfba0a6cecb252155cdb4ee09b6082559); ?>
<?php endif; ?>
      <!-- Modal Dialog  -->
  <div class="flex flex-wrap mx-auto">
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);" x-show="open"  >
      <div class="h-auto w-full mx-2 text-left bg-white rounded-lg shadow-xl lg:max-w-2xl lg:mx-0" @click.away="open = false">
        <div class="flex justify-between bg-gray-50 rounded-lg">
          <div class="flex justify-between items-center px-6 py-4">
            <p class="text-xl font-bold">Delete - Registered User</p>
          </div>
            <!-- Modal close button  -->
          <?php if (isset($component)) { $__componentOriginal71651bcb2f21b786b4ed54e6593367e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71651bcb2f21b786b4ed54e6593367e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.utilities.modals.close-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.utilities.modals.close-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71651bcb2f21b786b4ed54e6593367e1)): ?>
<?php $attributes = $__attributesOriginal71651bcb2f21b786b4ed54e6593367e1; ?>
<?php unset($__attributesOriginal71651bcb2f21b786b4ed54e6593367e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71651bcb2f21b786b4ed54e6593367e1)): ?>
<?php $component = $__componentOriginal71651bcb2f21b786b4ed54e6593367e1; ?>
<?php unset($__componentOriginal71651bcb2f21b786b4ed54e6593367e1); ?>
<?php endif; ?>
        </div>
        <div class="px-6 py-4">
          <h1 class="py-2">Are you sure you want to delete the user?</h1>
          <h1 class="py-2"><?php echo e($user->name); ?></h1>
          <form action="<?php echo e(route('admin.registered.user.delete', $user->id)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <span class="flex justify-end">
                <button type="submit" class="px-10 py-2 rounded text-gray-50 uppercase text-xs font-bold focus:border-gray-200 bg-red-500 hover:text-gray-200">
                  Yes
              </button> 
              </span>
            </form>
        </div>
      </div>
    </div>
  </div>
</div><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/livewire/admin/registered-users/partials/_delete-modal-dialog.blade.php ENDPATH**/ ?>