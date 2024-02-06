<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<body class="font-OpenSans">
 <!-- Hero Section -->
  <section class="hero bg-stone-100 py-2 mb-10 lg:mb-0 lg:h-[860px]">
    <div class="container mx-auto">
      <!-- secondary menu -->
      <div class="flex flex-col lg:flex-row gap-2 justify-evenly mx-4 lg:mx-0 mt-2 lg:my-6">
        <a href="http://investbhutan.gov.bt" target="_blank" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 95% 0, 100% 50%, 93% 100%, 0 100%);">
            Invest Bhutan
          </a>

          <a href="http://43.230.208.153/" target="_blank" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 95% 0, 100% 50%, 93% 100%, 0 100%);">
              Industry Information System
          </a>

         <a href="https://ibls.moea.gov.bt/" target="_blank" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 99% 0, 100% 50%, 95% 100%, 0 100%);">
              Apply for License/Registration
          </a>

          <a href="https://www.btfn.bt/BTFN/login/loginbtfn.jsp" target="_blank" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 95% 0, 100% 50%, 93% 100%, 0 100%);">
             Bhutan TradeFin Net 
          </a>
          
      </div>
      <!-- slider -->
      <div class="hidden lg:flex w-full">
          <?php if(!$slider->isEmpty()): ?>
          <div class="slides swiper hidden lg:block">
            <div class="swiper-wrapper ">
              <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide">
                <img src="<?php echo e(asset('uploads/sliders/'.$item->photo)); ?>" class="w-full h-[540px] object-cover rounded" alt="">
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Slide captions -->
            <div class="slide-captions">
              <!-- login -->
              <div class="w-full m-6 lg:m-0 lg:w-60">
                <div class="bg-gray-50 shadow rounded-lg px-4 py-2 w-full">
                  <h1 class="border-b py-2 text-sm font-bold text-gray-700">Online Business Services</h1>
                  <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mt-2">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'email','class' => 'text-xs','value' => ''.e(__('Email')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','class' => 'text-xs','value' => ''.e(__('Email')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                          <input id="email" class="form-control text-gray-700 mt-2 block w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                          <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'email','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>

                    <div class="mt-2">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'password','class' => 'text-xs text-gray-700','value' => ''.e(__('Password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','class' => 'text-xs text-gray-700','value' => ''.e(__('Password')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        <input id="password" class="form-control mt-2 block w-full text-gray-700" type="password" name="password" placeholder="Password" required autocomplete="off" />
                          <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'password','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                      </div>

                    <div class="block mt-2">
                        <label for="remember_me" class="flex items-center">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            <span class="ml-2 text-xs text-gray-700"><?php echo e(__('Remember me')); ?></span>
                        </label>
                    </div>

                    <div class="my-4 text-center">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'w-full flex justify-center px-10 py-2 text-center font-bold text-white bg-orange-400 rounded-full hover:bg-orange-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full flex justify-center px-10 py-2 text-center font-bold text-white bg-orange-400 rounded-full hover:bg-orange-500']); ?>
                            <?php echo e(__('Log in')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>

                    <div class="flex items-center justify-center">
                        <?php if(Route::has('password.request')): ?>
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('password.request')); ?>">
                              <?php echo e(__('Forgot your password?')); ?>

                          </a>
                      <?php endif; ?>
                    </div>
                  </form>

                  <div class="my-4 text-center text-gray-700">
                    <span class="text-xs font-bold py-2">New Entrepreneur?</span>
                      <div class="w-full my-2">
                        <a href="<?php echo e(route('register')); ?>"
                          class="w-full flex items-center justify-center px-4 py-1 font-bold uppercase text-xs text-white bg-orange-400 rounded hover:bg-orange-500 focus:outline-none focus:shadow-outline">
                          <div class="mr-4">Register</div>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                          </svg>
                        </a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <?php endif; ?> 
      </div>
      <!-- mobile login menu -->
        <div class="container lg:hidden mx-auto p-4">
          <div class="bg-gray-50 shadow rounded-lg px-4 py-2 w-full">
            <h1 class="border-b py-2 text-sm font-bold text-gray-700">Online Business Services</h1>
            <form method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo csrf_field(); ?>
              <div class="mt-2">
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'email','class' => 'text-xs','value' => ''.e(__('Email')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','class' => 'text-xs','value' => ''.e(__('Email')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <input id="email" class="form-control text-gray-700 mt-2 block w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'email','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                  </div>

              <div class="mt-2">
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'password','class' => 'text-xs text-gray-700','value' => ''.e(__('Password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','class' => 'text-xs text-gray-700','value' => ''.e(__('Password')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                  <input id="password" class="form-control mt-2 block w-full text-gray-700" type="password" name="password" placeholder="Password" required autocomplete="off" />
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'password','class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>

              <div class="block mt-2">
                  <label for="remember_me" class="flex items-center">
                      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                      <span class="ml-2 text-xs text-gray-700"><?php echo e(__('Remember me')); ?></span>
                  </label>
              </div>

              <div class="my-4 text-center">
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'w-full flex justify-center px-10 py-2 text-center font-bold text-white bg-orange-400 rounded-full hover:bg-orange-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full flex justify-center px-10 py-2 text-center font-bold text-white bg-orange-400 rounded-full hover:bg-orange-500']); ?>
                      <?php echo e(__('Log in')); ?>

                   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
              </div>

              <div class="flex items-center justify-center">
                  <?php if(Route::has('password.request')): ?>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot your password?')); ?>

                    </a>
                <?php endif; ?>
              </div>
            </form>

            <div class="my-4 text-center">
              <span class="text-xs font-bold py-2 text-gray-700">New Entrepreneur?</span>
                <div class="w-full my-2">
                  <a href="<?php echo e(route('register')); ?>"
                    class="w-full flex items-center justify-center px-4 py-1 font-bold uppercase text-xs bg-orange-400 rounded hover:bg-orange-500 focus:outline-none focus:shadow-outline">
                    <div class="mr-4">Register</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-bounce w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                    </svg>
                  </a>
                </div>
            </div>
          </div>
        </div>
    </div>
  </section>

    <!-- Services Section-->
  <section class="mx-4 lg:-mt-40">
    <div class="container mx-auto px-6">
      <!-- Services-->
      <div class="w-full flex-grow">
        <h1 class="heading1 text-center pb-10">Our Services</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 justify-center gap-6 lg:gap-8">
        <?php if(isset($services)): ?>
          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="text-center" data-aos="fade-up">
            <div class="card">
              <div class="p-2 flex-auto">
                <div
                  class="text-white p-3 text-center inline-flex items-center justify-center shadow-lg rounded-full bg-orange-400">
                  <i class="<?php echo e($item->icon); ?> text-4xl"></i>
                </div>
                <h6 class="py-2 heading2"><?php echo e($item->name); ?></h6>
                <div class="my-2 h-[300px] lg:h-[200px] text-gray-600"><?php echo $item->description; ?> </div>
                <div class="flex items-center justify-center py-3 mt-2">
                  <a href="<?php echo e(route('service.list',$item->slug )); ?>" class="group relative bg-orange-400 py-2 px-4 rounded text-white">
                    Read More <i class="fa fa-long-arrow-alt-right ml-2"></i>
                    <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
                  </a>
                </div>
                 
              </div>
            </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!--News & Updates-->
  <section class="bg-stone-100 my-6 lg:my-10">
    <div class="container mx-auto px-6 pt-6 pb-20" data-aos="fade-up">
        <!--tab-->
        <div x-data="setup()">
          <div class="flex flex-col lg:flex-row justify-center items-center my-4 gap-6 px-6">
            <template x-for="(tab, index) in tabs" :key="index">
              <div class="cursor-pointer py-2 text-gray-600 border-b-4 heading1 tracking-wide"
                :class="activeTab===index ? 'text-gray-600 border-orange-400' : ''" @click="activeTab = index"
                x-text="tab">
              </div>
            </template>
          </div>
  
          <div class="mt-1">
            <!-- News and Updates -->
            <div x-show="activeTab===0" data-aos="fade-up" data-aos-delay="100">
              <div class="tab-pane fade active show" id="news-updates">
                <div class="container mx-auto rounded-xl">
                  <div class="text-center pt-2 pb-10">
                    <div class="flex justify-center my-2">
                      <a href="<?php echo e(route('all.posts')); ?>" class="group relative bg-orange-400 py-2 px-4 rounded">
                        <div class="absolute inset-0 w-0 bg-orange-500 rounded-md transition-all duration-300 ease-in group-hover:w-full"></div>
                        <span class="relative text-white text-right">
                          Read Older Post <i class="fa fa-long-arrow-alt-right ml-2"></i>
                        </span>
                      </a>
                    </div>
                  </div>
                 <div class="container mx-auto">
                   <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                    <?php if(isset($news)): ?>
                     <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="relative mx-4 -mt-6 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                          <img src="<?php echo e(asset('/uploads/posts/'.$item->photo)); ?>"
                            alt="img-blur-shadow"
                            layout="fill"
                            class="h-56 w-full object-cover"
                          />
                        </div>

                         <div class="rounded m-4 py-2 px-4 text-right bg-stone-700">
                            <p class = "text-xs text-white font-bold uppercase"><?php echo $item->created_at->format('d-M-Y'); ?></p>
                        </div>

                        <div class="px-6 pb-6">
                          <h5 class="mb-2 font-bold antialiased">
                           <?php echo e($item->title); ?>

                          </h5>
                          <p class="text-base antialiased text-gray-600">
                            <?php echo substr($item->content, 0, 240); ?> <?php echo e(strlen($item->content) > 240 ? "..." : ""); ?>

                          </p>
                        </div>

                        <div class="flex flex-col mt-auto m-4">
                          <a href="<?php echo e(route('view.post',$item->id)); ?>" class="group relative bg-orange-400 py-2 px-4 rounded">
                            <div class="absolute inset-0 w-0 bg-orange-500 rounded-md transition-all duration-300 ease-in group-hover:w-full"></div>
                            <span class="relative text-white text-right">
                              Read More <i class="fa fa-long-arrow-alt-right ml-2"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                     <?php endif; ?>
                  </div>
                 </div>
                </div>
              </div>
            </div>
  
            <!-- Notifications -->
             <div x-show="activeTab===1" data-aos="fade-up" data-aos-delay="100">
              <div class="tab-pane fade active show" id="notifications">
                <div class="container mx-auto pb-20 rounded-xl">
                  <div class="text-center pt-4 pb-10">
                    <div class="flex justify-center my-2">
                      <a href="<?php echo e(route('all.notifications')); ?>" class="group relative bg-orange-400 py-2 px-4 rounded">
                        <div class="absolute inset-0 w-0 bg-orange-500 rounded-md transition-all duration-300 ease-in group-hover:w-full"></div>
                        <span class="relative text-white text-right">
                          Read Older Post <i class="fa fa-long-arrow-alt-right ml-2"></i>
                        </span>
                      </a>

                    </div>
                  </div>
                  <div class="container mx-auto">
                   <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                      <?php if(isset($notifications)): ?>
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="bg-white shadow rounded-lg">
                          <div class="rounded m-4 py-2 px-4 text-right bg-stone-700">
                            <p class = "text-xs text-white font-bold uppercase"><?php echo $item->created_at->format('d-M-Y'); ?></p>
                          </div>

                        <div class="p-6 h-60">
                          <h5 class="mb-2 font-bold antialiased">
                           <?php echo e($item->title); ?>

                          </h5>
                          <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                            <?php echo substr($item->content, 0, 240); ?> <?php echo e(strlen($item->content) > 240 ? "..." : ""); ?>

                          </p>
                        </div>

                        <div class="flex flex-col mt-auto m-2 text-right">
                          <a href="<?php echo e(route('view.post',$item->id)); ?>" class="group relative bg-orange-400 py-2 px-4 rounded">
                            <div class="absolute inset-0 w-0 bg-orange-500 rounded-md transition-all duration-300 ease-in group-hover:w-full"></div>
                            <span class="relative text-white">
                              Read More <i class="fa fa-long-arrow-alt-right ml-2"></i>
                            </span>
                          </a>
                        </div>
                         </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--tab end-->
    </div>
  </section>

  <!-- Stats Counter Section -->
  <section class="stats-counter lg:h-80 my-12"> 
   <div class="text-center mb-10">
      <h1 class="heading1">Industry at a Glance</h1>
    </div>
    <div class="bg-stone-600 grid grid-cols-1 lg:grid-cols-5 gap-2" data-aos="fade-up">

       <!--cottage-->
       <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="my-10 mx-4">
          <div class="flex flex-col min-w-0 break-words rounded mb-3 xl:mb-0">
            <div class="flex flex-col items-center justify-center p-4">
              <div class="w-auto pl-4 flex-initial">
                  <div class="text-orange-50 p-3 inline-flex items-center justify-center w-20 h-20 rounded-full bg-orange-400">
                    <i class="<?php echo e($item->icon); ?> text-4xl"></i>
                  </div>
                </div>
                <div class="text-center mt-2">
                  <h5 class="text-orange-50 uppercase font-bold"><?php echo e($item->name); ?></h5>
                  <div class="stats-item w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="<?php echo e($item->value); ?>" data-purecounter-duration="1"
                      class="purecounter text-orange-50"></span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
  </section>

  <!-- Charts Section -->
  <section class="container mx-auto py-10 my-20">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-4" data-aos="fade-up">
        <!-- Pie chart -->
        <div class="rounded-lg shadow-lg p-4" data-aos="fade-up" data-aos-delay="100">
          <div id="column"></div>
        </div>

        <!-- Pie chart 2 -->
        <div class=" rounded-lg shadow-lg p-4" data-aos="fade-up" data-aos-delay="200">
          <div id="pie"></div>
        </div>

        <!-- Pie chart 2 -->
        <div class=" rounded-lg shadow-lg p-4" data-aos="fade-up" data-aos-delay="200">
          <div id="line"></div>
        </div>
      </div>
  </section>

  <!-- About Section -->
  <section class="about my-6 lg:my-20">
    <div class="container mx-auto" data-aos="fade-up">
      <div class="text-center mb-10">
        <h1 class="heading1">About Us</h1>
      </div>

      <div class="container mx-auto">
        <?php if(isset($about)): ?>
          <div class="flex flex-col lg:flex-row gap-4 mx-4 lg:mx-20">
            <div class="w-full lg:w-7/12 relative" data-aos="fade-up" data-aos-delay="150">
                <img src="<?php echo e(asset("uploads/abouts/$about->photo")); ?>" class="object-cover h-full rounded" alt="">
            </div>

            <div class="w-full lg:w-5/12 flex justify-center lg:justify-end" data-aos="fade-up" data-aos-delay="300">
              <div class="content px-5 text-justify editor text-gray-500">
                <?php echo $about->content; ?>

                <div class="mt-4 lg:p-4 flex justify-center">
                  <div class="relative rounded-lg bg-orange-700">
                    <img src="<?php echo e(asset("uploads/abouts/$about->video_bg")); ?>" class="object-cover rounded" alt="">
                    <!-- Play Button -->
                    <div class="absolute top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2 transform cursor-pointer">
                      <a href="<?php echo e(asset("uploads/$about->video")); ?>" 
                          class="glightbox bg-orange-600 h-20 w-20 rounded-full flex items-center justify-center">
                          <span class="animate-ping duration-300 absolute inline-flex h-full w-full rounded-full bg-orange-600 opacity-75 delay-700"></span>
                        <i class="bi bi-play-circle text-5xl text-white"> </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>   
      </div>
    </div>
  </section>

  <!-- location map Section -->
  <section class="contact my-20">
    <div class="container mx-auto">
      <div class="text-center mb-10">
        <h2 class="heading1">Our Location</h2>
      </div>

      <div class="mb-3">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.903603045751!2d89.63132941157005!3d27.472260276219345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1941a1b18fb85%3A0x502230415ce0e727!2sDepartment%20of%20Industry!5e0!3m2!1sen!2sbt!4v1686560722251!5m2!1sen!2sbt"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->
    </div>
  </section>
</body>
<?php $__env->startPush('scripts'); ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <?php echo $__env->make('frontpages.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script>
    function setup() {
      return {
        activeTab: 0,
        tabs: [
          "Latest News",
          "Notifications",
        ]
      };
    };
  </script>
<?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/frontpages/landing.blade.php ENDPATH**/ ?>