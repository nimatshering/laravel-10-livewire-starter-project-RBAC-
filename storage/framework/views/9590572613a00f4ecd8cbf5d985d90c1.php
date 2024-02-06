 <div>
  <div class="container py-4 mx-auto">
       <?php echo $__env->make('livewire.agency.module1.brand-bhutan.madeinbhutan.partials._breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Session message -->
   <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.custom.utilities.messages','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('custom.utilities.messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <section class="my-4">
      <div class="bg-white shadow overflow-hidden rounded-lg">
       <div class="flex w-full justify-between items-center p-2">
        <h1 class="py-4 font-semibold uppercase">Review Application</h1>
         <!-- buttons -->
          <div class="flex flex-row gap-2 justify-evenly">
                <dt class="text-sm font-semibold text-gray-500">
                  <a href="<?php echo e(route('dot.edit.made.in.bhutan', $application->id)); ?>"
                    class="btn-outline">
                    Edit
                  </a>
                </dt>

                <?php if($application->status != 'Approved'): ?>
                  <?php if($application->status != 'Rejected'): ?>
                    <dt class="text-sm font-semibold text-gray-500 text-right">
                      <button class="btn-green" wire:click="resubmitShow(<?php echo e($application->id); ?>)" wire:loading.attr="disabled">
                          <?php echo e(__('Resubmit')); ?>

                      <button>
                    </dt>
                  <?php endif; ?> 
                
                  <dt class="text-sm font-semibold text-gray-500 text-right">
                    <button class="btn-blue" wire:click="$toggle('confirmApprove')" wire:loading.attr="disabled">
                        <?php echo e(__('Approve')); ?>

                    </button>
                  </dt>

                  <?php if($application->status != 'Rejected'): ?>
                    <dt class="text-sm font-semibold text-gray-500 text-right">
                      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['class' => 'px-10 rounded-full','wire:click' => 'rejectShow('.e($application->id).')','wire:loading.attr' => 'disabled']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'px-10 rounded-full','wire:click' => 'rejectShow('.e($application->id).')','wire:loading.attr' => 'disabled']); ?>
                          <?php echo e(__('Reject')); ?>

                       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </dt>
                  <?php endif; ?> 
                <?php endif; ?> 
              
              <dt class="text-sm font-semibold text-gray-500 text-right">
                <a href="<?php echo e(route('dot.made.in.bhutan.pdf', $application->app_id)); ?>"
                    class="btn-gray"
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                    </svg><span class="ml-2">Download Application</span>
                </a>
              </dt>

               <dt class="text-sm font-semibold text-gray-500 text-right">
                  <a href="<?php echo e(route('dot.made.in.bhutan.certificate', $application->app_id)); ?>" class="btn-green">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                    </svg>
                      <span class="ml-2">Certificate</span>
                  </a>
                </dt>

             
          </div>
         
      </div>
      <div class="border-t border-gray-200">
          <dl>
             <!--Application for  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
               Application Name
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e($application->appname); ?>

              </dd>
            </div>

            <!--Application Id  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application ID 
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e($application->app_id); ?>

              </dd>
            </div>

            <!--Application Status  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Application Status 
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e($application->status); ?>

              </dd>
            </div>

            <!--Date of application  -->
            <div class="bg-gray-50 px-4 py-2 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Date of application
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e(date('d-m-Y', strtotime($application->submitted_at))); ?>

              </dd>
            </div>

            <!--Entity Name -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Entity Name
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e($application->entity_name); ?>

              </dd>
            </div>

            <!--Contact Person -->
            <div class="bg-gray-50 px-4 py-2 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Contact Person
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <?php echo e($application->contact_person); ?>

              </dd>
            </div>

            <!--contact_address -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Address 
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
              <?php echo e($application->contact_address); ?>

              </dd>
            </div>
            
            <!--contact_details -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                Telephone, e-mail, website
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->contact_details); ?>

              </dd>
            </div>

            <!-- product_name  -->
            <div class="px-4 py-3 grid grid-cols-3 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                We hereby apply for the following products
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo $application->product_name; ?>

              </dd>
            </div>

            <!-- final_product_done_bhutan   -->
            <div class="bg-gray-50 px-4 py-3 ">
              <dt class="text-sm font-semibold text-gray-500">
                1. Is the last substantial production or processing of the final product done in a production facility in Bhutan?
              </dt>
              <dd class="py-3 text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->final_product_done_bhutan?'Yes': 'No'); ?>

              </dd>
            </div>
    
            <!-- Business yes_final_product_done_bhutan Number  -->
            <?php if(isset($application->final_product_done_bhutan)): ?>
              <div class="bg-gray-50 px-4 py-3">
                <dt class="text-sm font-semibold text-gray-500">
                  If yes, please indicate the production and processing steps that take place in Bhutan:
                </dt>
                <dd class="py-3 text-sm text-gray-900 mt-0 col-span-2">
                    <?php echo e($application->yes_final_product_done_bhutan); ?>

                </dd>
              </div>
            <?php endif; ?>

            <!-- product_100percent_made_bhutan  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
               2. Is the product wholly produced in Bhutan(100%)?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->product_100percent_made_bhutan?'Yes': 'No'); ?>

              </dd>
            </div>

            <!-- cultural_heritage  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
               3. Is your product produced using authentic cultural heritage production techniques/patterns? Or is it a innovative product inspired by cultural heritage? Please briefly describe'
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->yes_cultural_heritage); ?>

              </dd>
            </div>
            
             <!-- product_of_superior_quality  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                4. If the design, artisanship, materials used and finishing of your product are of superior quality? Please briefly describe the particular quality features of your product and/or indicate any awards, prizes or recognitions obtained from relevant authorities
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->yes_product_of_superior_quality); ?>

              </dd>
            </div>

             <!-- fair_payment_workers_suppliers  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                5. Do you provide a fair payment (National Minimum Wage) to the workers ?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->fair_payment_workers_suppliers?'Yes': 'No'); ?>

              </dd>
            </div>

               <!-- yes_fair_payment_workers_suppliers  -->
            <?php if(isset($application->fair_payment_workers_suppliers)): ?>
              <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
                <dt class="text-sm font-semibold text-gray-500">
                  If yes, please indicate a typical average monthly income of your workers and/or indicate how much a homeworker can earn per month, if working fulltime and being paid by piece
                </dt>
                <dd class="text-sm text-gray-900 mt-0 col-span-2">
                    <?php echo e($application->yes_fair_payment_workers_suppliers); ?>

                </dd>
              </div>
            <?php endif; ?>

               <!-- osh_child_labor_free  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                6. Do you provide workers with proper facilities (spacious room, appropriate lighting, heating or cooling installations, etc) ?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->provide_room_facilities?'Yes': 'No'); ?>

              </dd>
            </div>

              <!-- provide_room_facilities  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                7. Do you provide workers with protective equipment and gears where necessary?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->provide_protective_equipment?'Yes': 'No'); ?>

              </dd>
            </div>

              <!-- provide_protective_equipment  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
               8. Do you provide favorable work conditions for women?'
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->women_work_conditions?'Yes': 'No'); ?>

              </dd>
            </div>

              <!--women_work_conditions   -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                 9. If the answer is YES in question 6,7 and 8, please explain'
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->yes_women_work_conditions); ?>

              </dd>
            </div>

             <!-- employ_youth  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                 10. Do you employ youth under 15 years?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->employ_youth?'Yes': 'No'); ?>

              </dd>
            </div>

             <!-- natural raw materials from Bhutan  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                11. If the natural raw materials used in the production come from sustainable sources, please briefly describe the raw materials and their source (Example - Farming or Sustainable Harvesting)
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->yes_materials_sustainable_sources); ?>

              </dd>
            </div>

            <!-- cleaner_production_techniques  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                12. Do you apply cleaner production techniques, such as eco-optimized production processes, waste management and use of recyclable material?'
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->cleaner_production_techniques?'Yes': 'No'); ?>

              </dd>
            </div>

            <!-- cleaner_production_techniques  -->
            <?php if(isset($application->cleaner_production_techniques)): ?>
              <div class="px-4 py-3 grid grid-cols-2 gap-4">
                <dt class="text-sm font-semibold text-gray-500">
                  Please briefly describe any cleaner production techniques
                </dt>
                <dd class="text-sm text-gray-900 mt-0 col-span-2">
                    <?php echo e($application->yes_cleaner_production_techniques); ?>

                </dd>
              </div>
            <?php endif; ?>
          
            <!-- business_activities_registered  -->
            <div class="bg-gray-50 px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
              13. Is your business registered/licensed?  
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->business_activities_registered?'Yes': 'No'); ?>

              </dd>
            </div>

            <!-- record_any_major_complaints  -->
            <div class="px-4 py-3 grid grid-cols-2 gap-4">
              <dt class="text-sm font-semibold text-gray-500">
                14. Do you have any adverse record or any major complaints reported against your business in the last three years?
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo e($application->record_any_major_complaints?'Yes': 'No'); ?>

              </dd>
            </div>


            <!-- Attachments -->
            <div class="px-4 py-5 grid grid-cols-2 gap-4">
              <dt class="text-sm font-medium text-gray-500">Attachments</dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                  <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                    <div class="w-0 flex-1 flex items-center">
                      <!-- Heroicon name: solid/paper-clip -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 flex-1 w-0 truncate"> <?php echo e($item->title); ?> </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                      <button wire:click="downloadDocument(<?php echo e($item->id); ?>)" class="font-medium text-indigo-600 hover:text-indigo-500">
                          Download
                      </button>  
                    </div>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </dd>
            </div>

            <!-- Remarks  -->
            <div class="bg-gray-50 px-4 py-3">
              <dt class="font-bold text-gray-500 py-4">
                Remarks
              </dt>
              <dd class="text-sm text-gray-900 mt-0 col-span-2">
                  <?php echo $application->remarks; ?>

              </dd>
            </div>
          </dl>
        </div>
      </div>
    <?php echo $__env->make('livewire.agency.module1.brand-bhutan.madeinbhutan.partials._approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.agency.module1.brand-bhutan.madeinbhutan.partials._reject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('livewire.agency.module1.brand-bhutan.madeinbhutan.partials._resubmit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>  
  </div>
</div>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/livewire/agency/module1/brand-bhutan/madeinbhutan/review-application.blade.php ENDPATH**/ ?>