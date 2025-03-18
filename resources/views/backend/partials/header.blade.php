<div class="header-sec" style="width:100%">
 <span style="float:right;">
    @auth    
    <form action="{{  route('logout') }}" method="post">
        @csrf
        <button type="submit" class="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
        </button>
    </form>
    @endauth
    {{-- @guest
        for not authenticated users
    @endguest --}}
    </span>   
</div>