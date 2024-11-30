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
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                      
                      
                      <li><a style="background-color:black" class="dropdown-item" href="#">Registration</a></li>

                    
            
                </ul>
            </li>
        </ul>
    </div>


    <!-- registration -->
     


</div>
    
</nav>