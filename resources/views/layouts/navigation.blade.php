 <div align="right">
     <div class="font-medium text-base text-gray-800">Username: {{ Auth::user()->name }}</div>
     <div class="mt-3 space-y-1">
         <!-- Authentication -->
         <form method="POST" action="{{ route('logout') }}">
             @csrf

             <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                 {{ __('Log Out') }}
             </x-responsive-nav-link>
         </form>
     </div>
 </div>

