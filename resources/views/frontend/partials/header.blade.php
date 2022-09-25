<header class="wrapper bg-gray">
      <nav class="navbar fancy navbar-expand-lg navbar-light caret-none navbar-bg-light">
        <div class="container">
          <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100"><a href="{{route('home')}}"><img src="{{asset('img/nalar.png')}}" width="100px" alt="" /></a></div>
            <div class="navbar-collapse offcanvas-nav d-lg-flex mx-lg-auto">
              <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="{{route('home')}}"><img src="{{asset('img/nalar.png')}}" width="100px" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
              </div>
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item "><a class="nav-link" href="{{route('class.index')}}">Class</a>
                </li>
                <li class="nav-item "><a class="nav-link" href="{{route('program.index')}}">Program</a>
                </li>
                <li class="nav-item "><a class="nav-link" href="{{route('opini.index')}}">Opini</a>
                </li>
                <li class="nav-item "><a class="nav-link" href="{{route('corner.index')}}">Corner</a>
                </li>
                <!-- <li class="nav-item"><a class="nav-link" href="elements.html">Contact</a>
                </li> -->
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
              <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                <li class="nav-item d-lg-none">
                  <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>