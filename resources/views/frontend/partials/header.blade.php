<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
    <a class="navbar-brand" href="index.html">Bengal Furniture<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('frontend.home')}}">Home</a>
            </li>


            <!-- category dropdown -->
           
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                      @foreach ($categories as $item)
                      
                      <li><a style="background-color:black" class="dropdown-item" href="{{route('product.show')}}">{{$item->name}}</a></li>

                      @endforeach
            
                    </ul>
                </li>

            <!-- category dropdown end -->









            <li><a class="nav-link" href="{{route('product.show')}}">Products</a></li>
            <li><a class="nav-link" href="about.html">Store Location</a></li>
            <li><a class="nav-link" href="services.html">News and Events</a></li>
            <li><a class="nav-link" href="blog.html">About Us</a></li>
            <li><a class="nav-link" href="contact.html">Contact us</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
        
        <li class="nav-item active">
            <a class="nav-link" href="{{route('customer.profile')}}"><img src="images/user.svg"></a>
        </li>
        
            <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
            <li class="nav-item"><a class="nav-link" href="#" id="categoryDropdown">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="#" id="" data-toggle="modal" data-target="#regModal">registration</a></li>
        </ul>
    </div>


    <!-- registration -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Customer Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('customer.registration')}}" method="post">
        @csrf
        <div class="modal-body">
          <div>
            <label for="">Enter your name:</label>
            <input value="{{old('customer_name')}}" required type="text" name="customer_name" placeholder="Enter your name" class="form-control">
          </div>

          <div>
            <label for="">Enter your email:</label>
            <input value="{{old('email')}}" required type="email" name="customer_email" placeholder="Enter your email" class="form-control">
          </div>

          <div>
            <label for="">Enter your password:</label>
            <input required type="password" name="customer_password" placeholder="Enter your password" class="form-control">
          </div>


          <!-- <div>
            <label for="">Retype your password:</label>
            <input required type="password" name="password_confirmation" placeholder="Retype your password" class="form-control">
          </div> -->

          <div>
            <label for="">Enter your Mobile Number:</label>
            <input value="{{old('mobile_number')}}" required type="text" name="customer_mobile" placeholder="Enter your Mobile number" class="form-control">
          </div>

          <div>
            <label for="">Enter your Address:</label>
            <input value="{{old('customer_address')}}" required type="text" name="customer_address" placeholder="Enter your Address" class="form-control">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Register Now</button>
        </div>
      </form>


    </div>
  </div>
</div>
    <!-- end registration -->
     


</div>
    
</nav>