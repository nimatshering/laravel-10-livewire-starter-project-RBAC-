<nav class="flex bg-stone-100 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 lg:space-x-3">
        <li class="inline-flex items-center">
          <a href="<?php echo e(route('dot.dashboard')); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <span class="font-bold ml-4">Home</span>
          </a>
        </li>

        <li class="inline-flex items-center">
          <a href="<?php echo e(route('doi.review.guestvisa', $appID)); ?>" class="text-gray-700 hover:underline inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class="font-bold ml-4"> Review Application for Business Guest Visa</span>
          </a>
        </li>

        <li class="inline-flex items-center">
          <div class="text-gray-700 inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class="ml-4">Verification Note</span>
          </div>
        </li>
      </ol>
    </nav><?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/guest-visa/verification-note/partials/_breadcrumbs.blade.php ENDPATH**/ ?>