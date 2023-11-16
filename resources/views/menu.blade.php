<ul class="nav">
    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
    <li class="scroll-to-section"><a href="#about">About</a></li>                  
    <li class="scroll-to-section"><a href="#menu">Menu</a></li>
    <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
    <li class="scroll-to-section"><a href="#reservation">Contact Us</a>                             
    </li>
    @auth
         <li class="scroll-to-section {{ request()->routeIs('view.cart') ? ' active' : '' }} "><a href="{{route('view.cart',Auth::user()->id)}}">Cart's:[{{$count}}] </a></li> 
    @endauth                         
    <li>
        @if (Route::has('login'))            
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <x-app-layout>                                     
                </x-app-layout>                                        
                @else
                   <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    </li>
                 @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    </li>
                @endif
            @endauth
        </div>
    @endif
    </li>
</ul>