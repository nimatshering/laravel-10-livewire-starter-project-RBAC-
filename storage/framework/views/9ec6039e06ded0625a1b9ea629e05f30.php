<!-- nav -->
<div class="w-full text-gray-100 bg-sky-700 shadow py-2">
  <div class="container mx-auto">
  <div x-data="{ open: false }" class="flex flex-col mx-auto lg:items-center lg:justify-between lg:flex-row">
    <div class="flex flex-row items-center justify-between">
      <span class="flex text-white rounded lg:mr-4">
        <a href="<?php echo e(route('bsb.dashboard')); ?>" class="w-full font-bold items-center px-4 py-2 hover:bg-gray-100 hover:text-gray-700 rounded">
            <i class="fa fa-home mr-2"></i>Home
        </a>
      </span>
      <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>

      <nav :class="{'flex': open, 'hidden': !open}" class="lg:flex lg:flex-grow flex-col lg:flex-row pb-4 lg:pb-0">
        <ul class="w-full flex flex-col lg:flex-row lg:items-center justify-end gap-4">
        <li>
          <a href="<?php echo e(route('bsb.track.application')); ?>" class="w-full font-bold items-center px-4 py-2 hover:bg-gray-100 hover:text-gray-700 rounded">
            Track Application
          </a>
        </li>

        <!--Feedback-->
        

        <!--Dropdown Menu :    Profile-->
        <li x-data="{ open: false }" class="relative group">
          <button @mouseover="open = true" @mouseleave="open = false" @click="open = !open"
            class="flex flex-row text-medium group-hover:bg-gray-50 group-hover:text-gray-700 items-center w-full px-4 py-1 font-semibold text-left rounded">
            <div class="flex items-center justify-center w-full space-x-2">
                <?php if(isset(Auth::user()->name)): ?>
                <h2 class="text-sm sm:block"><?php echo e(__(Auth::user()->name)); ?></h2>
                <img class="object-cover w-8 h-8 rounded-full" src="<?php echo e(Auth::user()->profile_photo_url); ?>" alt="<?php echo e(Auth::user()->name); ?>" />
              <?php endif; ?>
              </div>
          </button>
  
          <div x-cloak x-show="open" @mouseover="open = true" @mouseleave="open = false"
            x-transition:enter="transition ease-in-out duration-500 delay-150" 
            x-transition:enter-start="transform opacity-0"
            x-transition:enter-end="transform opacity-100" 
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100"
            x-transition:leave-end="transform opacity-0"
            class="absolute right-0 lg:-right-6 w-full lg:max-w-screen-sm lg:w-80 mt-2 origin-top-right z-50">
            <div class="w-10 h-10 bg-white transform rotate-45 absolute top-0 -z-10 translate-x-0 transition-transform 
                        group-hover:translate-x-[12rem] duration-500 ease-in-out rounded-sm"></div>
            <div class="p-4 bg-gray-50 border rounded-b shadow-lg w-full">
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-2">
                <a href="<?php echo e(route('profile.show')); ?>" class="flex row items-start w-full rounded-lg p-2 bg-gray-100 hover:bg-gray-200 text-gray-700">
                  <div class="bg-gray-500 text-white rounded-lg px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div class="flex flex-col">
                    <div class="ml-3">Profile</div>
                    <small class="ml-3">Your Profile</small>
                  </div>
                </a>
  
                <div>
                  <!-- Authentication -->
                  <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(route('logout')); ?>"  class="flex row items-center rounded p-2 bg-gray-100 hover:bg-gray-200"
                      onclick="event.preventDefault();
                      this.closest('form').submit();">
                        <div class="bg-gray-500  rounded-lg px-3 py-2">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                          </svg>
                      </div>
                      <span class="ml-2 text-gray-700">Log Out</span>
                    </a>
                  </form>
                </div>
              </div>
            </div>
        </li>
      </ul>
    </nav>
  </div>
  </div>
</div><?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/components/custom/bsb-nav.blade.php ENDPATH**/ ?>