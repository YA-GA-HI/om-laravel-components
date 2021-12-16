<!--container-->
<nav  id="navbar">
  <div class="nav-top">
  <!--logo-->
    <a class="nav-logo" a="{{ route('index') }}">
      <img src="{{isset($_COOKIE['mode']) && $_COOKIE['mode'] == 'dark' ? '/images/logo-dark.png' : '/images/logo.png'  }}" alt="Zen-show logo">
    </a>

    <!--lang-->
    <div class="change-lang btn-primary" onclick="changeLang('ar')">ar</div>
  </div>
    <!--bar-->
    <section class="nav-bar">
        <!--mobile nav icon-->
        <button onfocus="showNav()" onblur="hideNav()" class="mobile-nav-icon btn">
        <svg xmlns="http://www.w3.org/2000/svg"   width="80%" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="18" x2="20" y2="18" />
          </svg>
        </button>
        <!--link-->
        <a href="{{ route('index') }}">Principle</a>

        <!--link-->
        @if(Auth::user() !== null)
        <a href="{{ route('home') }}">Home</a>
        @else
        <!--link-->
        <a href="{{ route('register') }}">Register</a>
        @endif

        <!--link-->
        <a href="{{ route('quiz') }}">Quiz</a>

        <!--link-->
        <a href="/">Contact</a>

        <!--link-->
        <a href="{{ route('about') }}">About</a>

        <!--search form-->
        <form action="" method="GET" class="search-form">
          <input placeholder="Search">
          <button type="submit" class="btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="80%" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <circle cx="10" cy="10" r="7" />
              <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
          </button>
        </form>

        <!--dark mode btn-->
        <button onclick="changeMode()" class="nav-btn btn">
        <svg xmlns="http://www.w3.org/2000/svg"  width="80%" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
        </svg>
        </button>

        <!--login btn-->
        <button class="nav-btn btn" onclick="auth()">
        <svg xmlns="http://www.w3.org/2000/svg"  width="80%" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
          <path d="M20 12h-13l3 -3m0 6l-3 -3" />
        </svg>
        </button>
    </section>

    <!--mobile links-->
    <section class="mobile-links hide-mobile-links">
      <!--link-->
      <a href="/">Principle</a>

      <!--link-->
      @if(Auth::user() !== null)
      <a href="{{ route('home') }}">Home</a>
      @else
      <!--link-->
      <a href="{{ route('register') }}">Register</a>
      @endif

      <!--link-->
      <a href="{{ route('quiz') }}">Quiz</a>

      <!--link-->
      <a href="/">Contact</a>

      <!--link-->
      <a href="{{ route('about') }}">About</a>
    </section>
    <!--panel-->
    <div class="panel">
      <!--sentence-->
      Join Us In Instagram To Be The Largest Account For Anime Lovers
      <!--link-->
        <a href="#" class="btn-light">more</a>
    </div>

    <script>
    function showNav()
    {
      let nav = document.getElementsByClassName('mobile-links')[0];
      nav.classList.add('show-mobile-links')
      nav.classList.remove('hide-mobile-links')
    }

    function hideNav()
    {
      let nav = document.getElementsByClassName('mobile-links')[0];
      nav.classList.add('hide-mobile-links')
      nav.classList.remove('show-mobile-links')
    }

    function changeMode()
    {
      let cookies = document.cookie.split(";");
      for(let i=0 ; i<cookies.length ; i++)
      {
          let cookie = cookies[i].split("=");
          cookie[0] = cookie[0].trim()
          if(cookie[0] == "mode" )
          {
            if(cookie[1] == "dark" )
            {
              document.cookie = "mode=light;"
            }
            else
            {
              document.cookie = "mode=dark;"
            }
            window.location.reload();
            break;
          }
          else{
            document.cookie = "mode=dark;"
            window.location.reload();
          }
      }
    }
    function auth()
    {
      window.location.href="{{ Auth::user() !== null ? route('logout') : route('login') }}"
    }
    function changeLang(el)
    {
      document.cookie = "lang="+el+";";
      window.location.reload();
    }
    </script>
</nav>
