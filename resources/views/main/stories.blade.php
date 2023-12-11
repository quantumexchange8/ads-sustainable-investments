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
                                    <a href="{{ url('stories') }}"><div class="main-menu-title">STORIES</div></a>
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
            
              <h2>SUSTAINABLE INVESTING STORIES</h2>
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
                    <h3><a>The Shift Toward Stakeholder Capitalism</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Sustainable investors can help bring about stakeholder capitalism. The world is shifting its thinking about the purpose of the corporation, as illustrated by the Business Roundtable's statement on corporate purpose released in August. A significant departure from the long-standing view that the primary purpose of a corporation is to maximize shareholder value, the Business Roundtable statement said the purpose of a corporation is to serve and create value for all stakeholders.
                    </div>
                    <div class="post-prev-text no-border">
                        While sustainable investment strategies vary in their particular investment approaches, at some level most of them are trying to identify companies that are pursuing stakeholder value, avoid those that aren't, and engage as shareholders with the ones they own to urge them in that direction.
                    </div>
                
                </div>
                
                <!-- Post Item 3 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Proxy Voting and Shareholder Engagement Take Center Stage</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Active ownership is central to sustainable investing. Investors continued the trend of greater support for ESG-related shareholder resolutions in the 2019 proxy season. ESG resolutions drew the support, on average, of nearly 30% of the shares voted at the annual general meetings of U.S. companies. That's the highest level of support over the 16 years for which Morningstar has proxy voting data.
                    </div>
                
                    <div class="post-prev-text no-border">
                        Sustainable investors have also ramped up their direct engagements with companies, taking on ESG-related issues like guns, opioids, gender equity, and climate change in 2019. The Climate Action 100+, for example, is a group of global investors who engage with systemically important greenhouse-gas-emitting companies about aligning their business strategies with the goals of the Paris Agreement. The group's progress report for 2019 outlines its progress in urging companies to set emissions-reductions targets and to implement concrete strategies to achieve them.
                    </div>

                </div>
                
                </div>
                
            </div>
            </div>
            
        
            <!-- COTENT CONTAINER -->
        
            <div class="container p-10-cont">
            <div class="row">
  
            </div>
          </div><BR>

        <!-- BLOG 2 -->
        <div class="page-section pt-110-b-30-cont">
            <div class="container">
                
                <div class="row">
                
                <!-- Post Item 1 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories2.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Turning Back the Clock at the SEC</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        A partisan SEC seeks to limit shareholder proposals and change the proxy voting process. Shareholder 
                        proposals are a critical means of communications between companies and their shareholders--especially individual 
                        shareholders who are able to propose resolutions alongside big institutional shareholders. Over the years, shareholder 
                        resolutions have helped put ESG issues front-and-center on many companies' radars, helping them attend to issues before
                         they suffer the financial consequences of ignoring them.
                    </div>

                    <div class="post-prev-text no-border">
                        At a time when proxy voting and shareholder engagement are becoming more central to corporate governance, the U.S. Securities
                         and Exchange Commission is moving to limit these activities. During this year's proxy season, the SEC was more willing to allow 
                         companies to leave shareholder resolutions off the proxy ballot because they were deemed to be about ordinary business and beyond
                          the scope of shareholder oversight.
                    </div>
                
                </div>
                
                <!-- Post Item 2 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories4.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Interest in Sustainable Investing Continues to Rise Among Individual Investors</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        A tsunami of assets to follow? Every other year since 2015, Morgan Stanley has surveyed individual investors about their interest in sustainable investing. In 2015, 71% indicated an interest. This year, 85% indicated an interest (and 95% of millennials). And perhaps more tellingly, a much greater proportion in 2019 said they were "very" interested in sustainable investing. In 2015 only 19% said they were "very" interested, but this year 49% said so.
                    </div>
                    <div class="post-prev-text no-border">
                        So why hasn't that interest translated into invested assets? Being interested in sustainable investing doesn't speed up someone's investing activities. Most individuals change their investments only on occasion, and often only when a new occasion presents itself (an inheritance, for example, or a large bonus). In the case of millennials, many are still in the early stages of their personal investing. Interest in sustainable investing doesn't suddenly turn people into investors. But when they are ready to invest, they're going to do so sustainably. That's why I believe we're still in the early days of sustainable investment asset growth. A September Bank of America report concluded that a "tsunami of assets is poised to invest" sustainably over the next two decades.
                    </div>
                
                </div>
                
                <!-- Post Item 3 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories3.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Flows Into U.S. Sustainable Funds More Than Tripled in 2019</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Fourth year in a row of record flows. If not exactly a tsunami, a big wave of flows came into sustainable funds this year. Estimated net flows into open-end and exchange-traded sustainable funds available to U.S. investors reached $17.7 billion through November. That's more than triple the record for an entire calendar year, set in 2018.
                    </div>

                </div>
                
                </div>
                
            </div>
            </div>

                    <!-- BLOG 3 -->
        <div class="page-section pt-110-b-30-cont">
            <div class="container">
                
                <div class="row">
                
                <!-- Post Item 1 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories2.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a> A Strong Year for U.S. Sustainable Fund Performance</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Sustainable funds top performers across a range of categories. Through November, the returns of nearly two thirds (65%) 
                        of open-end and exchange-traded sustainable funds ranked in the best half of their respective Morningstar Categories. The
                         returns of 37% placed in the best quartile, while those of only 15% placed in the worst quartile. The returns of sustainable funds placed in the best quartile of 27 different categories.
                    </div>

                    <div class="post-prev-text no-border">
                        Among large-cap blend funds, the returns of nearly half (48%) of sustainable funds are ahead of the S&P 500 for the year to date, compared with 
                        only 22% of large-blend funds overall.
                    </div>
                
                </div>
                
                <!-- Post Item 2 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories4.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Many More Funds "Considering" ESG</a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        Does it make any difference in how they're run? Over the past year, many conventional funds in the U.S. have added ESG criteria to their prospectus, bringing the total to about 500. This trend reflects the realization on the part of many asset managers that consideration of material ESG issues results in a more complete investment analysis. Yet there is little evidence thus far of whether ESG "consideration" is actually having an impact on these funds.
                    </div>
                    <div class="post-prev-text no-border">
                        I expect this trend to continue, but fund managers will need to do a better job showing what difference ESG consideration makes in order to be credible with sustainable investors.
                    </div>
                
                </div>
                
                <!-- Post Item 3 -->
                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                    
                    <div class="post-prev-img">
                    <a><img src="images/stories5.png" alt="img"></a>
                    </div>
                    
                    <div class="post-prev-title">
                    <h3><a>Enhancement to Morningstar Sustainability Rating </a></h3>
                    </div>
                    
                    <div class="post-prev-info">
                    
                    </div>
                    
                    <div class="post-prev-text no-border">
                        A more robust assessment of the ESG risk embedded in a portfolio. The enhanced Morningstar Sustainability
                         Rating was released in November, with a greater focus on the financial materiality of ESG issues. It now
                          reflects both within-industry and across-industry assessments of ESG risk.
                    </div>

                    <div class="post-prev-text no-border">
                        An overwhelming majority of diversified sustainable funds receive 4 or 5 globes, far more than the percentage 
                        of ESG consideration funds or conventional funds that receive 4 or 5 globes.
                    </div>

                </div>
                
                </div>
                
            </div>
            </div>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>

        @endsection
			