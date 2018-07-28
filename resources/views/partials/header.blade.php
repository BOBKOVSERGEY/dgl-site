{{--
 * Copyright 2018 DAGAMELEAGUE
 ____    ___  __
(  _ \  / __)(  )
 )(_) )( (_-. )(__  / _/ _ \ '_/ -_)_/ _/ _ \ '  \
(____/  \___/(____) \__\___/_| \___(_)__\___/_|_|_|

  @author XEQTIONR

--}}
    <div id="preHeader" class="row dgl-nav-title bg-purple3 justify-content-center">
      <div class="title-right py-1 mw w-100">
        {{--<h1 class="d-inline-block font-white text-center">DGL</h1>--}}
        @if(Auth::guest())
         <span class="scroll-hide my-auto d-none d-lg-inline">
            <a href="{{  route('login')  }}" class="">
            {{--<i class="fas fa-sign-in-alt"></i>--}}
            sign in
            </a><span class="mx-3">/</span>
         </span>
          <span class="my-auto d-none d-lg-inline">
            <a href="{{  route('register')  }}" class="">
            {{--<i class="fas fa-user-plus"></i>--}}
            register
            </a>
          </span>
        @else
          <span class="my-auto d-none d-lg-inline">
            <a href="{{  route('settings')  }}" onclick="toastr.info('Loading your settings. Please Wait.')" class="">
              settings
            </a><span class="mx-3">/</span>
          </span>
          <span class="my-auto d-none d-lg-inline">
            <a href="{{ route('logout') }}" class=""
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               sign out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </span>
        @endif
      </div>
    </div>
    <div id="Header" class="row dgl-nav-title justify-content-center justify-content-md-start mw">
      <div class="w-25  d-none d-lg-block" style="height: 100px;">

        <img class="d-block mx-auto logo" src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="200" alt="">
        {{--<span class="logo d-block mt-3 pt-1 text-center font-white">DAGAMELEAGUE</span>--}}
      </div>
      <div class="ml-5 mt-4 mr-5 d-none d-md-block d-lg-none">
        <span class="logo d-block mt-3 pt-1 text-center font-white">DGL</span>
      </div>
      <div class="d-flex my-5">
          <div class=" my-auto mr-0 d-flex align-center">
            <img class="my-auto mr-2" src="{{URL::asset('storage/icons8-trophy-cup-100.png')}}" height="40px">
          </div>
          <div class="my-auto mr-sm-5 d-none d-sm-inline">
            <h6 class="font-white my-0">TOURNAMENTS</h6>
            <span class="font-gray">COMPETITIVE ESPORT</span>
          </div>
          <div class="my-auto mr-0 d-flex align-center">
            <img class="my-auto mr-3" src="{{URL::asset('storage/icons8-whistle-100.png')}}" height="40px">
          </div>
          <div class="my-auto mr-sm-5 d-none d-sm-inline">
            <h6 class="font-white my-0">MATCHES</h6>
            <span class="font-gray">PRO BATTLES</span>
          </div>
          <div class="my-auto mr-0 d-flex align-center">
            <img class="my-auto mr-2" src="{{URL::asset('storage/icons8-microphone-100.png')}}" height="40px">
          </div>
          <div class="my-auto d-none d-sm-inline">
            <h6 class="font-white my-0">BROADCASTS</h6>
            <span class="font-gray">REPLAYS AND VODS</span>
          </div>
      </div>

    </div>

    <nav class="navbar navbar-dgl navbar-expand-lg">
      <button class="navbar-toggler lightgray-border my-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="justify-content-center d-none d-lg-inline-block mx-auto">
      <a class=" small-logo px-5  my-0 py-0" href="/">
        <span class="logo text-center font-white">DAGAMELEAGUE</span>
        {{--<img class="mt-1 pb-0 py-xl-0" src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="100" alt="">--}}
        {{--<span class="logo small">DAGAMELEAGUE</span>--}}
        {{--<span class="d-none d-xl-inline-block navbar-text vertical-align-center dagameleague-small">ĐAGAMELEAGUE</span>--}}
      </a>
      </div>
      <a class="logo d-lg-none mx-auto pl-0 pr-6 " href="/">
        <span class="logo d-block pt-2 text-center font-white">DAGAMELEAGUE</span>
        {{--<img src="{{URL::asset('storage/DGLCrownWhite.svg')}}" height="100" class="mt-1 d-block d-md-inline-block align-text-bottom" alt="">--}}
        {{--<span class="logo small">DAGAMELEAGUE</span>--}}
      </a>
      <div class="collapse navbar-collapse mw" id="navbarSupportedContent">

        <!--DOUBLE NAVS -- for two screen sizes -->
        <ul class="navbar-nav mx-0 d-none d-lg-flex">
          <li class="nav-item lined active">
            <a href="/news" class="nav-link" href="#">news<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item lined dropdown">
            <a href="/tournaments" class="nav-link" href="#">tournaments</a>
          </li>
          <li class="nav-item lined">
            <a href="/matches" class="nav-link" href="#">matches</a>
          </li>
          <li class="nav-item lined">
            <a href="/teams" class="nav-link" href="#">teams</a>
          </li>
          <li class="nav-item lined">
            <a href="/players" class="nav-link" href="#">players</a>
          </li>
          <li class="nav-item lined">
            <a href="/media" class="nav-link" href="#">media</a>
          </li>
          <li class="nav-item lined dropdown last">
            <a href="/about" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
            <div class="dropdown-menu back-color-purple mx-md-1" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('about')}}">About DGL</a>
              {{--<div class="dropdown-divider"></div>--}}
              <a class="dropdown-item" href="{{route('about-dateam')}}">About DaTeaM</a>
            </div>
          </li>

          @if(Auth::guest())
          <li class="scroll-hide my-auto">
            <a href="{{  route('login')  }}" class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
              {{--sign indasd--}}
            </a>
          </li>
          <li class="scroll-hide my-auto">
            <span class="d-block px-2">/</span>
          </li>
          <li class="scroll-hide my-auto">
            <a href="{{  route('register')  }}" class="nav-link">
              <i class="fas fa-user-plus"></i>
              {{--register--}}
            </a>
          </li>
          @else
          <li class="scroll-hide my-auto">
            <a href="{{  route('settings')  }}" onclick="toastr.info('Loading your settings. Please Wait.')" class="nav-link">
              <i class="fas fa-cog"></i>
              {{--settings--}}
            </a>
          </li>
          <li class="scroll-hide my-auto">
            <span class="d-block px-2">/</span>
          </li>
          <li class="scroll-hide my-auto">
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-in-alt"></i>
              {{--sign out--}}
            </a>
          </li>
          @endif
        </ul>
        {{--for small screens --}}
        <ul class="navbar-nav mx-0 d-lg-none">
          <li class="nav-item active">
            <a href="/news" class="nav-link" href="#">news<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="/tournaments" class="nav-link" href="#">tournaments</a>
          </li>
          <li class="nav-item">
            <a href="/matches" class="nav-link" href="#">matches</a>
          </li>
          <li class="nav-item">
            <a href="/teams" class="nav-link" href="#">teams</a>
          </li>
          <li class="nav-item">
            <a href="/players" class="nav-link" href="#">players</a>
          </li>
          <li class="nav-item">
            <a href="/media" class="nav-link" href="#">media</a>
          </li>
          <li class="nav-item dropdown last">
            <a href="/about" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">about us</a>
            <div class="dropdown-menu back-color-purple mx-md-1" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('about')}}">About DGL</a>
              {{--<div class="dropdown-divider"></div>--}}
              <a class="dropdown-item" href="{{route('about-dateam')}}">About DaTeaM</a>
            </div>
          </li>
          @if(Auth::guest())
            <li class="nav-item">
              <a href="{{  route('login')  }}" class="nav-link">
                {{--<i class="fas fa-sign-in-alt"></i>--}}
                sign in
              </a>
            </li>
            <li class="nav-item">
              <a href="{{  route('register')  }}" class="nav-link">
                {{--<i class="fas fa-user-plus"></i>--}}
                register
              </a>
            </li>
          @else
            <li class="nav-item">
              <a href="{{  route('settings')  }}" class="nav-link" onclick="toastr.info('Loading your settings. Please Wait.')">
                {{--<i class="fas fa-user-plus"></i>--}}
                settings
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link"
                 onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                sign out
              </a>
            </li>
          @endif
        </ul>
      </div>
      <script>
        $(document).ready(function(){
            var margin = parseFloat($("#Header").height()) + parseFloat($("#preHeader").height());
            $(".navbar-dgl").css("margin-top", margin - $(window).scrollTop());
            $(".scroll-hide").hide();
            
            if($(window).scrollTop()<margin)
            {
                $(".small-logo .logo").css("display", "none");
                $(".user-control").hide();
            }
            $(window).scroll(function(){
              var scroll = $(window).scrollTop();

              if(scroll>=0 && scroll<200)
              {
                  $(".user-control").hide();
                  $(".navbar-dgl").css("margin-top", margin - scroll);
                  $(".scroll-hide").hide();
                  if($(".small-logo .logo").css("display") != "none")
                    $(".small-logo .logo").slideUp();
              }
              else {
                  $(".scroll-hide").show();
                  $(".user-control").show();
                  $(".navbar-dgl").css("margin-top", "0");
                  if($(".small-logo .logo").css("display") == "none")
                    $(".small-logo .logo").slideDown();
              }
            });
        });

      </script>
    </nav>