<!-- Footer -->
  <footer id="footer" class="bg-sky-800 text-white">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row  justify-between p-6 gap-4">
        <?php $address = \App\Models\Admin\Address::first() ?>
        <?php if(isset($address)): ?>
        <div class="lg:w-3/12 flex flex-col">
          <div class="flex items-center gap-2">
            <i class="bi bi-geo-alt icon text-2xl font-bold"></i>
            <h4 class="font-bold text-2xl">Address</h4>
          </div>
          <div class="text-sm mt-4">
            <?php echo $address->location; ?>

          </div>
        </div>

        <div class="lg:w-3/12 flex flex-col">
          <div class="flex items-center gap-2">
            <i class="bi bi-telephone icon text-2xl"></i>
            <h4 class="font-bold text-2xl">Contact</h4>
          </div> 
          <div class="text-sm mt-4">
            <strong>Phone:</strong> <?php echo $address->telephone; ?><br>
            <strong>Email:</strong> <?php echo $address->email; ?><br>
          </div>
        </div>

        <div class="lg:w-3/12 flex flex-col gap-2">
          <div class="flex items-center gap-2">
            <i class="bi bi-clock icon text-2xl"></i>
            <h4 class="font-bold text-2xl">Opening Hours</h4>
          </div>
          <div class="text-sm">
            <div>Mon - Friday : </div><?php echo $address->opening_hrs; ?><br>
            <div> Saturday - Sunday : Closed</div>
          </div>
        </div>
      <?php endif; ?>  
      </div>
    </div>
    
     <div class="container mx-auto p-6">
      <span class="text-gray-100 text-lg font-bold mb-2">Useful Links</span>
      <hr class="mt-2 mb-6 border border-gray-400 "/>
      <div class="flex flex-wrap items-center justify-evenly">
        <?php $links = \App\Models\Admin\Link::all() ?>
        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="w-full lg:w-6/12">
            <ul class="list-unstyled">
              <li>
                <a class="text-gray-100 hover:text-gray-300 hover:underline block pb-2 text-sm" href="<?php echo $item->url; ?>" target="_blank">
                 <i class="fa fa-angle-right mr-2"></i> <?php echo $item->name; ?></a>
              </li>
            </ul>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      
      <hr class="my-4 border border-gray-400"/>
    </div>

    <div class="container mx-auto text-center pb-10">
       <div class="text-gray-100">
          © <?php echo e(date('Y')); ?> Bhutan Standards Bureau. <?php echo app('translator')->get('All rights reserved.'); ?>
        </div>
      <div class="text-sm text-gray-100">
          <a href="<?php echo e(route('landing')); ?>">The National Standard Body of Bhutan, Thimphu, Bhutan</a>.
      </div>
    </div>
  </footer>
<?php /**PATH /Users/nimatshering/Sites/pmas-v1.0/resources/views/components/custom/footer.blade.php ENDPATH**/ ?>