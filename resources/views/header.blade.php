<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
        <div class="m-header">
        <h1 style="color: #f9fdff;">eCourier</h1>
        <!-- <img src="{{asset('images/ecourier.jpg')}}"  class="img-radius" alt="User-Profile-Image" style="width: 236px;border-radius: 0;height: 61px;"> -->

        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
                
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li style="margin-left: 515px;">
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('images/icons8-money-bag-50 (2).png')}}" style="width: 33px;padding-right: 8px;" alt="User-Profile-Image">30000
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <span>{{ auth()->user()->name }}</span>
                            </div>
                            <ul class="pro-body">
                                <li><a href="{{route('Withdraw')}}" class="dropdown-item"><img src="{{asset('images/icons8-withdraw-64.png')}}" style="width: 33px;"class="img-radius" alt="User-Profile-Image"> Withdraw</a></li>
                                <li><a href="{{route('WithdrawList')}}" class="dropdown-item"><img src="{{asset('images/icons8-list-64.png')}}" style="width: 33px;" alt="User-Profile-Image"> Withdraw List</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li >
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user" style="padding-right: 8px;"> </i> Profile
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{asset('images/avatar-2.jpg')}}"  class="img-radius" alt="User-Profile-Image">
                                <span>{{ auth()->user()->name }}</span>
                                <a href="{{route('logout')}}" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i> 
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="{{route('viewProfile')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="{{route('logout')}}" class="dropdown-item"><i class="feather icon-log-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
       
    
</header>

<!-- [ Header ] end -->



