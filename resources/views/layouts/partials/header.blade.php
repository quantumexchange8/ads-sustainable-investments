<header id="nav" class="header header-1 black-header mobile-no-transparent">
    <div class="header-wrapper">
      <div class="container-m-30 clearfix">
        <div class="logo-row">
        
          <!-- LOGO --> 
          <div class="logo-container-2">
  <div class="logo-2">
    <a href="{{ url('') }}" class="clearfix">
      <img src="images/logo-white.png" class="logo-img" alt="Logo">
    </a>
  </div>
</div>
          <!-- BUTTON --> 
          <div class="menu-btn-respons-container">
              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                  <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
          </div>
       </div>
      </div>

      <!-- MAIN MENU CONTAINER -->
      <div class="main-menu-container">
          
            <div class="container-m-30 clearfix">	
            
                  <!-- MAIN MENU -->
                  <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                      <!-- MAIN MENU LIST -->
                      <nav class="collapse collapsing navbar-collapse right-1024">
                        <ul class="nav navbar-nav">
        
                        <!-- MENU ITEM -->
                        <li>
                            {{-- <a href="{{ url('case') }}"><div class="main-menu-title">CASE STUDIES</div></a> --}}
                        </li>
                        <li>
                            {{-- <a href="{{ url('stories') }}"><div class="main-menu-title">STORIES</div></a> --}}
                        </li>
                        <li>
                            {{-- <a href="{{ url('contact') }}"><div class="main-menu-title">CONTACT</div></a> --}}
                        </li>
      
                        </ul>
            
                      </nav>

                    </div>
                  </div>
                  <!-- END main-menu -->
                  
            </div>
            <!-- END container-m-30 -->
          
      </div>
      <!-- END main-menu-container -->
      
      <!-- SEARCH READ DOCUMENTATION -->
      <ul class="cd-header-buttons">
          {{-- <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li> --}}
      </ul> <!-- cd-header-buttons -->
      <div id="cd-search" class="cd-search">
          <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <input type="text" value="" name="q" id="q" placeholder="Search...">
          </form>
      </div>
      
    </div>
    <!-- END header-wrapper -->
    
  </header>