<!-- Footer -->
  <footer id="footer" class="bg-sky-800 text-white">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row  justify-between p-6 gap-4">
        @php $address = \App\Models\Admin\Address::first() @endphp
        @isset($address)
        <div class="lg:w-3/12 flex flex-col">
          <div class="flex items-center gap-2">
            <i class="bi bi-geo-alt icon text-2xl font-bold"></i>
            <h4 class="font-bold text-2xl">Address</h4>
          </div>
          <div class="text-sm mt-4">
            {!! $address->location !!}
          </div>
        </div>

        <div class="lg:w-3/12 flex flex-col">
          <div class="flex items-center gap-2">
            <i class="bi bi-telephone icon text-2xl"></i>
            <h4 class="font-bold text-2xl">Contact</h4>
          </div> 
          <div class="text-sm mt-4">
            <strong>Phone:</strong> {!! $address->telephone !!}<br>
            <strong>Email:</strong> {!! $address->email !!}<br>
          </div>
        </div>

        <div class="lg:w-3/12 flex flex-col gap-2">
          <div class="flex items-center gap-2">
            <i class="bi bi-clock icon text-2xl"></i>
            <h4 class="font-bold text-2xl">Opening Hours</h4>
          </div>
          <div class="text-sm">
            <div>Mon - Friday : </div>{!! $address->opening_hrs !!}<br>
            <div> Saturday - Sunday : Closed</div>
          </div>
        </div>
      @endisset  
      </div>
    </div>
    
     <div class="container mx-auto p-6">
      <span class="text-gray-100 text-lg font-bold mb-2">Useful Links</span>
      <hr class="mt-2 mb-6 border border-gray-400 "/>
      <div class="flex flex-wrap items-center justify-evenly">
        @php $links = \App\Models\Admin\Link::all() @endphp
        @foreach ($links as $item)
          <div class="w-full lg:w-6/12">
            <ul class="list-unstyled">
              <li>
                <a class="text-gray-100 hover:text-gray-300 hover:underline block pb-2 text-sm" href="{!! $item->url !!}" target="_blank">
                 <i class="fa fa-angle-right mr-2"></i> {!! $item->name!!}</a>
              </li>
            </ul>
          </div>
        @endforeach
      </div>
      
      <hr class="my-4 border border-gray-400"/>
    </div>

    <div class="container mx-auto text-center pb-10">
       <div class="text-gray-100">
          © {{ date('Y') }} Zhibsel Consulting,Thimphu, Bhutan 
        </div>
      <div class="text-sm text-gray-100">
          <a href="{{ route('landing')}}">www.zca-lab.com </a>.
      </div>
    </div>
  </footer>
