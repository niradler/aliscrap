<header class="page-header row justify-center">
	<div class="col-md-6 col-lg-8">
		<h1 class="float-left text-center text-md-left">
		<?php 
		$titleArr = preg_split('/(?=[A-Z])/', ucfirst(request()->route()->getName()), -1, PREG_SPLIT_NO_EMPTY);
		?>
		@foreach ($titleArr as $title)
		{{   $title }}
		@endforeach
		</h1>
	</div>

	<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
		    aria-expanded="false">
						<img src="images/user.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						
						<div class="username mt-1">
							<h4 class="mb-1">
							  @if(Auth::user()!==null){{Auth::user()->name}}@endif
							</h4>
							
							<h6 class="text-muted">
							 @if(Auth::user()!==null){{Auth::user()->email}}@endif
							</h6>
						</div>
						</a>

		 @if (Auth::guest())
		 <div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                           <a  class="dropdown-item" href="{{ route('register') }}">Register</a>
						   <div>
                        @else
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
		<a class="dropdown-item" href="{{ route('profile') }}"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
			<a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="fa fa-power-off mr-1"></em> Logout</a>
			</div>
			   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            
                        @endif
	</div>

	<div class="clear"></div>
</header>
  