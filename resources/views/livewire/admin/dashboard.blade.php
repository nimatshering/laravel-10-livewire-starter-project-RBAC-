<x-app-layout>
   <!-- Header -->
   <div class="mb-20">
    <div class="mt-10 mb-4 text-center">
      <h1 class="text-lg font-bold text-sky-700">
        <i class="m-2 fa fa-cog fa-lg"></i>  System Administration
      </h1>
    </div>
    <div class="relative py-10 shadow rounded bg-slate-100">
      <div class="w-full mx-auto">
        <!-- Card -->
        <div class="container mx-auto">
          <div class="grid grid-cols-1 gap-6 px-2 sm:grid-cols-3 lg:grid-cols-3  lg:px-10">

              <!-- Address-->
            <a href="{{ route('admin.address')}}" class="dashboard-button">
              <div class="p-2 text-white bg-sky-600 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
              </div>
              <span class="text-cyan-800  font-bold"> Address</span>
            </a>

             <!-- Manage Useful Links-->
            <a href="{{ route('admin.usefullinks')}}" class="dashboard-button">
              <div class="p-2 text-white bg-sky-600 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                </svg>
              </div>
              <span class="text-cyan-800  font-bold"> Useful Links</span>
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
