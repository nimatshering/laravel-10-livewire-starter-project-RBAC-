  <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed z-30 inset-y-0 left-0 w-80 transition duration-300 shadow transform bg-sky-700 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
  <div class="flex flex-col sm:flex-row sm:justify-around">
    <div class="w-full mt-10 mx-2">
      <a href="<?php echo e(route('admin.dashboard')); ?>" class="flex px-4 py-2 items-center font-bold bg-gray-600 hover:bg-gray-500 text-white rounded w-full">
        <i class="fa fa-home mr-2"></i> Home
      </a>
      <nav class="flex flex-col overflow-hidden">
        <div x-data="{ open: true }" class="my-2">
          <button @click="open = !open" class="w-full font-bold flex bg-gray-100 rounded justify-between items-center px-2 py-1 focus:outline-none focus:text-gray-900 focus:bg-gray-100">
              <span> <i class="fa fa-cog text-lg mx-2"></i> System Settings</span>
            <span>
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </button>

          <div x-show="open" x-on:click.away="open = true" class="font-bold">
            <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.landingpage')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
                Mission/Vision
            </a>

            <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.about')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               About
            </a>

             <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.departments')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               Departments
            </a>
        
           <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.divisions')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               Divisions
            </a>

            <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.users.index')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               Division Users & Roles
            </a>

            <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.registered.users')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               Registered Users (Applicants)
            </a>

             <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.dzongkhags')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
              Dzongkhag & Gewogs
            </a>

            <a class="dropdown-menu-item"
              href="<?php echo e(route('admin.address')); ?>">
              <i class="fa fa-angle-right mx-2"></i>
               Address
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/components/custom/sidebar/admin-sidebar.blade.php ENDPATH**/ ?>