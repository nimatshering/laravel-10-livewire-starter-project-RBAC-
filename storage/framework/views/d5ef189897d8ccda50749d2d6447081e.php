<!-- Footer -->
  <footer id="footer" class="bg-stone-600 text-white">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row  justify-between p-6 gap-4">
        <?php $address = \App\Models\Address::first() ?>
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

        <div class="lg:w-2/12 flex flex-col gap-2">
          <h4 class="font-bold text-2xl">Follow Us</h4>
            <div class="text-sm">
              <a href="<?php echo $address->facebook; ?> " class="facebook">
                <i class="bi bi-facebook text-3xl"></i>
              </a>
            </div>
        </div>
      <?php endif; ?>  
      </div>
    </div>
    
     <div class="container mx-auto p-6">
      <span class="text-gray-100 text-lg font-bold mb-2">Useful Links</span>
      <hr class="mt-2 mb-6 border border-gray-400 "/>
      <div class="flex flex-wrap items-center justify-evenly">
        <?php $links = \App\Models\Link::all() ?>
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
       <div class="container mx-auto px-6 py-10" data-aos="fade-up">
      <div class="flex justify-center gap-10">
        <a href="<?php echo e(route('product.directory')); ?>" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 95% 0, 100% 50%, 93% 100%, 0 100%);">
              Product Directory
          </a> 
          <a href="<?php echo e(route('technology.database')); ?>" class="secondary-nav-item group" style="clip-path: polygon(4% 0, 99% 0, 100% 50%, 95% 100%, 0 100%);">
              Technology Request Database
          </a>
      </div>
    </div>
      <hr class="my-4 border border-gray-400"/>
    </div>

    <div class="container mx-auto px-2 pb-2 pt-1 w-40 bg-gray-100 text-center text-gray-900 rounded">
      <div class="font-bold text-xs uppercase pb-1">Visitor Counter</div>
        
    </div> 

    <div class="container mx-auto text-center pb-10">
       <div class="text-gray-100">
          © <?php echo e(date('Y')); ?> Department of Industry. <?php echo app('translator')->get('All rights reserved.'); ?>
        </div>
      <div class="text-sm text-gray-100">
          <a href="<?php echo e(route('landing')); ?>">Ministry of Industry Commerce and Employment, Thimphu, Bhutan</a>.
      </div>
    </div>
  </footer>
<?php /**PATH /Users/nimatshering/Sites/bds-v1.3/resources/views/components/custom/footer.blade.php ENDPATH**/ ?>