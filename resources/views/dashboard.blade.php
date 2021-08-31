<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                <div class="container mt-2">
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-block">
                        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                      <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                          <h5 class="card-title mt-3 mb-3">Sierra Web Development • Owner</h5>
                          <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
                    </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-block">
                        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                      <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
                          <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                          <p class="card-text">This is a company that builds websites, web .</p> 
                    </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-block">
                        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                      <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
                          <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                          <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
                    </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="card card-block">
                        <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                      <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
                          <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                          <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p> 
                    </div>
                      </div>    
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
