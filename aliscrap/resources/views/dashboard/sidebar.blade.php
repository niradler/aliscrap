<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
				<h1 class="site-title"><a href="{{ route('dashboard') }}"><em class="fa fa-rocket"></em> {{ config('app.name', 'Aliscrap') }}</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item">
                    <a class="nav-link {{ (request()->route()->getName() == 'dashboard') ? 'active' : ''}}" href="{{ route('dashboard') }}"><em class="fa fa-dashboard"></em> Dashboard 
                    <span class="sr-only">(current)</span></a>
                    </li>
					<li class="nav-item">
                    <a class="nav-link {{ (request()->route()->getName() == 'products') ? 'active' : ''}}" href="{{ route('products') }}"><em class="fa fa-calendar-o"></em> Products</a>
                    </li>
                    		<li class="nav-item">
                    <a class="nav-link {{ (request()->route()->getName() == 'exportImport') ? 'active' : ''}}" href="{{ route('exportImport') }}"><em class="fa fa-calendar-o"></em> Export / Import</a>
                    </li>
						{{--  <li class="nav-item">
                    <a class="nav-link {{ (request()->route()->getName() == 'databases') ? 'active' : ''}}" href="{{ route('databases') }}"><em class="fa fa-calendar-o"></em> Databases</a>
                    </li>  --}}

				</ul>
				 @if (Auth::guest() )
                     
                        @else
                     
                                        {{--  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                         	  <a href="{{ route('logout') }}" class="logout-button"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>  --}}
                        @endif
				
			
                </nav>
			
