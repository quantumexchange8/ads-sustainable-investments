@php
    $excludeHeader = true;
@endphp
@extends('layouts.main')
@section('title', 'Campaign')
				<!-- HEADER 1 NO-TRANSPARENT -->
				<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
          
                    <div class="header-wrapper">
                      <div class="container-m-30 clearfix">
                        <div class="logo-row">
                        
                          <!-- LOGO --> 
                          <div class="logo-container-2">
                  <div class="logo-2">
                    <a href="{{ url('') }}" class="clearfix">
                      <img src="images/logo.png" class="logo-img" alt="Logo">
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
                                    <a href="{{ url('case') }}"><div class="main-menu-title">CASE STUDIES</div></a>
                                </li>
                                <li>
                                    <a href="{{ url('stories') }}"><div class="main-menu-title">SUCCESS STORIES</div></a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}"><div class="main-menu-title">CONTACT</div></a>
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
                          <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
                      </ul> <!-- cd-header-buttons -->
                      <div id="cd-search" class="cd-search">
                          <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                              <input type="text" value="" name="q" id="q" placeholder="Search...">
                          </form>
                      </div>
                      
                    </div>
                    <!-- END header-wrapper -->
                    
                  </header>
@section('content')
		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->
				
        <!-- PAGE TITLE SMALL -->
        <div class="page-title-cont page-title-big grey-dark-bg">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title">STORIES</h1>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                    <a href="{{ url('') }}">Home</a><span class="slash-divider">/</span><span class="bread-current">STORIES</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <!-- COTENT CONTAINER -->
        <div class="container p-140-cont">
          <div class="row">
          
            <div class="col-md-12">
            
              <h2>STORIES</h2>
              <hr>
              {{-- <p>Environmental, Social, and Governance (ESG) factors have become increasingly important considerations in investment management. 
                Many investors are recognizing the potential benefits of integrating ESG considerations into their investment decisions. In this blog,
                 we will explore some case studies of successful ESG integration in investment management.</p> --}}
            </div>

          </div>
        </div> 

        <!-- BLOG 1 -->
        <div class="page-section pt-110-b-30-cont">
            <div class="container">
                
                <div class="row">
                
                <!-- Post Item 1 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/fes7-2.jpg" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>The Growing Immediacy of Climate Change</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Directly experiencing extreme and volatile weather events will spur increased investor concern about climate risk in their portfolios. Climate change is becoming a more immediate concern as people everywhere are directly experiencing extreme and uncommon weather events. The hottest July on record occurred this year, and 2019 is on track to be the second hottest year since modern temperature data collection began in 1880. These trends and events, as well as those beyond our direct experience, are constantly in the headlines, interpreted in the context of climate change and set alongside a steady stream of scientific reports all pointing to the same conclusion: that human-caused climate change is warming the earth and changing its climate, and the worst effects can still be avoided by drastically reducing greenhouse gas emissions over the next two decades.
                    </div>
                
                </div>
                
                <!-- Post Item 2 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/fes7-2.jpg" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Calvert Investments</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Calvert Investments is a US-based investment management firm that specializes in socially responsible investing. The firm was founded in 1976 and has been integrating ESG factors into its investment process for over 40 years.
                    </div>
                    <div class="post-prev-text no-border">
                        Calvert’s investment approach is focused on identifying companies that are leaders in sustainability and corporate responsibility. The firm uses a proprietary ESG scoring system to evaluate companies across multiple dimensions, including environmental management, social impact, and governance.
                    </div>
                
                </div>
                
                <!-- Post Item 3 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/fes7-2.jpg" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Impax Asset Management</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Impax Asset Management is a UK-based investment management firm that specializes in environmental markets. The firm was founded in 1998 and has been integrating ESG factors into its investment process since its founding.
                    </div>
                
                    <div class="post-prev-text no-border">
                        Impax’s investment approach is focused on identifying companies that are well-positioned to benefit from the transition to a more sustainable economy. The firm uses a proprietary framework to evaluate companies across multiple ESG dimensions, including resource efficiency, clean energy, and sustainable food and agriculture.
                    </div>

                </div>
                
                </div>
                
            </div>
            </div>
            
        <!-- COTENT CONTAINER -->
        <div class="container p-10-cont">
            <div class="row">
            
              <div class="col-md-12">
              
                <h2>IMPACT INVESTMENT</h2>
                <hr>
                <p>Investments made with the intention to generate positive, measurable social and environmental impact alongside a financial return. By generating profits from an innovative business model, a company can pay financial returns to investors alongside doing something good for the world.</p>
              </div>
  
            </div>
          </div><BR>

        <!-- COTENT CONTAINER -->
        <div class="container p-10-cont">
            <div class="row">
            
                <div class="col-md-6">
                
                {{-- <h2>Explore case studies:</h2>
                <hr>
                <p>The GIIN's Research Center provides investors with information and stories about impact investments in action. Below are case studies from the GIIN's various initiatives and reports. </p>
                <br> --}}
                <h4>Aegon Investment Management BV</h4>
                {{-- <hr> --}}
                <p>Aegon N.V. is a multinational life insurance, pensions, and asset management company headquartered in the Netherlands. Aegon Asset Management (AAM), the company’s investment arm, is their in-house asset manager.</p>
                <h4>Energy Access Debt Fund</h4>
                {{-- <hr> --}}
                <p>responsAbility Investments AG is an asset manager in the field of development investments and offers professionally-managed investment solutions to private, institutional, and public investors.</p>
                <h4>California FreshWorks Fund Term Debt Facility</h4>
                {{-- <hr> --}}
                <p>The California Endowment’s goal with the FreshWorks Fund is to increase the availability of healthy food options in areas where there is limited access, particularly low-income communities.</p>
                </div>
    
            </div>
            </div> 
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>

        @endsection
			