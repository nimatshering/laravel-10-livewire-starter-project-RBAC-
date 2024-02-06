<!-- Header -->
<header class="header transition-all duration-300 z-50  bg-orange-400 shadow">
  <div class="container-full lg:container mx-auto z-50 p-2" data-wow-delay="0.1s">
    <div x-data="{ open: false }" class="flex flex-col lg:flex-row lg:items-center lg:justify-between lg:gap-4">
      <div class="flex flex-row items-center justify-between">
        <a href="<?php echo e(route('landing')); ?>" class="group relative primary-nav-menu">Home
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>
        <button class="rounded-lg lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- navbar -->
      <nav :class="{'flex': open, 'hidden': !open}" class="lg:flex flex-col lg:flex-row flex-grow hidden pb-4 lg:pb-0  lg:justify-evenly lg:gap-4 items-center text-gray-50">
        <!-- about -->
        <div x-data="{ open: false }" class="w-full lg:w-24 text-center lg:text-right relative group">
          <button @mouseover="open = true" @mouseleave="open = false" @click="open = !open" class="whitespace-nowrap group relative primary-nav-menu">
            About us
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 lg:w-6 lg:h-6 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
          </button>
          <div x-cloak x-show="open" @mouseover="open = true" @mouseleave="open = false" 
               x-transition:enter="transition ease-in-out duration-500" 
               x-transition:enter-start="transform opacity-0 translate-y-5" 
               x-transition:enter-end="transform opacity-100 translate-y-0" 
               x-transition:leave="transition ease-in duration-100" 
               x-transition:leave-start="transform opacity-100" 
               x-transition:leave-end="transform opacity-0" 
               class="absolute xl:left-0 w-full lg:w-[calc(20vw)] mt-2 origin-left z-50 bg-gray-100 rounded">
            <div class="p-4 bg-white rounded-md shadow-lg w-full">
              <div class="w-10 h-10 hidden lg:block -left-40 bg-gray-100 transform rotate-45 absolute top-0 -z-10 translate-x-0 transition-transform group-hover:translate-x-[12rem] duration-500 ease-in-out rounded-sm">
            </div>
              <div class="grid grid-cols-1 lg:grid-cols-1 gap-2 bg-white">
                <a class="flex row items-start rounded-lg p-2 hover:bg-orange-200" href="<?php echo e(route('missionvision',1)); ?>">
                  <div class="bg-orange-400 rounded-lg p-3 text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                    </svg>
                  </div>
                  <div class="ml-3 text-gray-700">
                    <p class="font-semibold text-left">Vision/Mission</p>
                    <p class="text-sm">Our Vision and Mission</p>
                  </div>
                </a>

                <a class="flex row items-start rounded-lg p-2 hover:bg-orange-200" href="<?php echo e(route('mandates',2)); ?>">
                  <div class="bg-orange-400 rounded-lg p-3 text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                  </div>
                  <div class="ml-3 text-gray-700">
                    <p class="font-semibold text-left">Mandates </p>
                    <p class="text-sm">Our Mandates</p>
                  </div>
                </a>

                <a class="flex row items-start rounded-lg p-2 hover:bg-orange-200" href="<?php echo e(route('ourteam',1)); ?>">
                  <div class="bg-orange-400 rounded-lg p-3 text-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                  </div>
                  <div class="ml-3 text-gray-700">
                    <p class="font-semibold text-left">Team </p>
                    <p class="text-sm">Our Team</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Announcements -->
        <a href="<?php echo e(route('all.announcements')); ?>" class="group relative primary-nav-menu">Announcements
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Notification -->
        <a href="<?php echo e(route('all.notifications')); ?>" class="group relative primary-nav-menu">Notifications
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Legislation -->
        <a href="<?php echo e(route('legislations')); ?>" class="group relative primary-nav-menu">Legislations
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Publications -->
        <a href="<?php echo e(route('publications')); ?>" class="group relative primary-nav-menu">Publications
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Downloads -->
        <a href="<?php echo e(route('downloads')); ?>" class="group relative primary-nav-menu">Downloads
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- FAQs -->
        <a href="<?php echo e(route('faqs')); ?>" class="group relative primary-nav-menu">FAQs
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Archives -->
        <a href="<?php echo e(route('archives')); ?>" class="group relative primary-nav-menu">Archives
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Track Application -->
        <a href="<?php echo e(route('track.application')); ?>" class="group relative primary-nav-menu whitespace-nowrap">Track Application
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

        <!-- Manual -->
        <a href="<?php echo e(route('user.guide')); ?>" class="group relative primary-nav-menu whitespace-nowrap">User Guide
          <div class="absolute inset-0 h-full w-full scale-0 rounded transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30"></div>
        </a>

      </nav>
    </div>
  </div>
</header><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/components/custom/main-navigation.blade.php ENDPATH**/ ?>