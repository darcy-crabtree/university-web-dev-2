<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body class="bg-light-blue font-mono">

  <div class="flex">
    <!--Navigation bar-->
    <nav class="bg-grey text-white">
      <ul id="navList" class="tablet:flex hidden tablet:block">
      <!-- justify-content:space-between -->
        @auth
        <!--Home Nav-->
        <li id="navList" class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3" href="/medications">
            Home
          </a>
        </li>

        <!--Add new medication Nav-->
        @can('edit')
        <li class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3" href="/medications/create">
            Add
          </a>
        </li>
        @endcan

        <!--About Nav-->
        <li class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3" href="/medications/about">
            About
          </a>
        </li>

        <!--Effects Nav-->
        <li class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3" href="/effects">
            Effects
          </a>
        </li>

        <!--Logout Nav-->
        <li class = "hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3"> 
            <form method='POST' action='/logout'>
              @csrf
              <button type='submit'>Logout</button>
            </form> 
          </a>
        </li>
        @endauth

        <!--Sign in Nav-->
        @guest
        <li class="hover:bg-dark-grey">
          <a class="block pt-1 pr-3 pb-1 pl-3 text-white" href="/login">
            Sign in
          </a>
        </li>
        @endguest

        @auth
        <!--Search Bar-->
        <li class="block pt-1 pr-3 pb-1 pl-3">
          <input type="search" class="rounded-l placeholder-white bg-light-grey focus:outline-none" placeholder="Search Medications">
          <button type="submit" class="text-white hover:bg-dark-grey bg-light-grey rounded-r px-1">Search</button>
        </li>
        @endauth
      
      </ul>
    </nav>
    <!--Open Icon-->
    <li onclick="toggleNav()" id="openIcon" 
        class="block pt-1 pr-3 pb-1 tablet:hidden bg-grey hover:bg-dark-grey cursor-pointer text-red
        sm:hidden
        ">
          <svg width="30px" viewBox="0 0 10 10" fill="none">
            <path d="M1 1h8M1 4h 8M1 7h8" stroke="#fff" stroke-width="1" />
          </svg>
        </li>
        <!-- Close Icon-->
        <li onclick="toggleNav()" id="closeIcon" 
        class="block pt-1 pr-3 pb-1 pl-3 bg-grey hover:bg-dark-grey cursor-pointer text-white hidden
        
        ">
          X
        </li>
        <li class="block pt-1 pr-3 pb-1 pl-3 bg-grey text-white flex-auto"> </li>
    
  </div>
    <!--Login Name-->
    @auth
    <div class="bg-grey text-white p-2">
        Logged in as {{Auth::user()->name}}
    </div>
    @endauth

    {{$slot}}
    <script src="{{asset('js/app.js')}}"></script>
    <!--<script src="resources/css/app.js"></script>-->
  </body>
</html>