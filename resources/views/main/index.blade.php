@extends('layouts.main')
@section('title', 'Campaign')
@section('content')
	
		<!-- LOADER -->	
		{{-- <div id="loader-overflow">
      <div id="loader3">Please enable JS</div>
    </div>	 --}}

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->		
				<!-- REVO SLIDER FULLSCREEN 1 -->
				<div class="relative">
					<div class="rs-fullscr-container">
						
						<div id="rs-fullwidth" class="tp-banner dark-bg" >
							<ul>	
								<!-- SLIDE 1 -->

								<!-- SLIDE 2 -->
								<li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="images/revo-slider/face-side-thumb.jpg"  data-saveperformance="on"  data-title="IMAGINATION">
									
                  <!-- MAIN IMAGE -->
                  <img src="images/revo-slider/dummy.png"  alt="slidebg2" data-lazyload="images/footer-intro-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
									
									<!-- LAYERS -->

									<!--PARALLAX & OPACITY container -->
									<div class="rs-parallaxlevel-4 opacity-scroll2">
										
										<!-- LAYER NR. 1 -->
										<div class="tp-caption font-white light-70-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      data-y="center" 
                      data-voffset="-85" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Impact Investing:
										</div>
										
										<!-- LAYER NR. 2 -->
										<div class="tp-caption font-white light-56-wide sfb tp-resizeme"
											data-x="center"
											data-y="center" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">//
										</div>
										
										<!-- LAYER NR. 3 -->
										<div class="tp-caption font-white light-73-wide sfb tp-resizeme"
											data-x="center"
											data-hoffset="0" 
                      data-y="center" 
                      data-voffset="87" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span class="bold">Building Sustainable Tomorrow</span>
										</div>
									</div>
								</li>
								
								<!-- SLIDE 3 -->
							</ul>
					
						</div>
						
					</div>	
					
				</div>
 
        <!-- FEATURES 5 & TESTIMONIALS 1 -->
        <div class="page-section p-110-cont">
					<div class="container">

            <div class="row">
              <!-- TESTIMONIALS -->
              <div class="col-md-5 pb-40">
                <blockquote class="quote mb-0 pr-50-min-1169">
                  <p>Sustainable investing is focused on integrating ESG factors into financial decision-making processes, while impact investing is focused on making investments specifically aimed at generating positive social and environmental impact.</p>
                  {{-- <footer>John Doe, Google Inc.</footer> --}}
                 </blockquote>
							</div>
              
              <!-- FEATURES -->
							<div class="col-md-7">
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" >
                      <h3>SUSTAINABLE INVESTING</h3>
                      <p>The integration of environmental, social, and governance (#ESG) factors into financial decision-making and investment processes.</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                      <h3>IMPACT INVESTMENT</h3>
                      <p>Investments made with the intention of generating positive social or environmental impact alongside financial returns.</p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                      {{-- <h3>UNIQUE DESIGN</h3> --}}
                      <p>Reduces risks from ESG considerations, and possibly enhances returns on a risk-adjusted basis. It aligns investment with long-term stability and growth by addressing social and environmental issues. </p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6 pb-10">
                    <div class="fes5-box wow fadeIn"  data-wow-delay="600ms">
                      {{-- <h3>EASY TO CUSTOMIZE</h3> --}}
                      <p>Seeks to address global challenges, such as poverty, access to education, and environmental degradation, by investing in companies, organizations, and funds that are working to solve these problems.</p>
                    </div>
                  </div>
                  
                </div>                    
                    
							</div>
              
						</div>
					</div>
				</div>
        
        <!-- FEATURES 7 -->
        <div class="page-section grey-light-bg clearfix">
          <div class="fes7-img-cont col-md-5">
            <div class="fes7-img" style="background-image: url(images/revo-slider/forest1.jpg)"></div>
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                <h1><span class="font-light">Why IMPACT INVESTING?</span></h1>
                <p class="mb-60">
                  Many investors would like to align their investments with their values and to use their wealth to bring about positive change. 
                  Impact investing strategies allow an investor to focus on areas where their capital can make a difference. They can also help an investor identify innovative companies that have potential to grow through addressing global sustainability challenges at scale.
                </p>
              
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" >
                      <div class="fes7-box-icon">
                        <div class="icon icon-ecommerce-graph-increase"></div>
                      </div>
                      <h3>Zero Hunger</h3>
                      <p>Increase agricultural productivity, improve food distribution systems, and address malnutrition.</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-software-font-smallcaps"></div>
                      </div>
                      <h3>Quality Education</h3>
                      <p>Enhance educational infrastructure, teacher training, and access to education in underserved communities. </p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-mixer2"></div>
                      </div>
                      <h3>Clean Water And Sanitation</h3>
                      <p>Improve access to safe drinking water, sanitation facilities, and hygiene practices.</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-bolt"></div>
                      </div>
                      <h3>Climate Action</h3>
                      <p>Mitigate greenhouse gas emissions, adapt to climate change, and promote sustainable practices.</p>
                    </div>
                  </div>
                  
                </div> 
                <div class="mt-30">
                  <a class="button medium thin hover-dark" href="#contact-section" style="margin-left:50px;">GET STARTED NOW</a>
                </div>
            
              </div>
            </div><!--end of row-->
          </div>
        </div>        
 
				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	

				<!-- FEATURES 4 -->
				<div class="page-section fes4-cont">
					<div class="container">
            <div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn">
								  <h2 class="section-title">How does <span class="bold">impact investing</span> work?</h2>
								</div>
							</div>            
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-settings"></div>
								  	</div>
								  	<h3><span class="bold">Invest in Companies</span></h3>
								  	{{-- <p>LOREM IPSUM DOLOR</p> --}}
								  </div>
								  <div>
                    investing in companies, funds and projects that deliver both financial returns and environmental and social returns.
								  </div>
								</div>
							</div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="400ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-share"></div>
								  	</div>
								  	<h3><span class="bold">Economic Development</span></h3>
								  	{{-- <p>LOREM IPSUM DOLOR</p> --}}
								  </div>
								  <div>
                    approaches can contribute to more sustainable economic development by attracting capital and entrepreneurial talent to companies that create positive change.
								  </div>
								</div>
							</div>
              
						</div>
						<div class="row">
            
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-target"></div>
								  	</div>
								  	<h3><span class="bold">Shareholder Engagement</span></h3>
								  	{{-- <p>LOREM IPSUM DOLOR</p> --}}
								  </div>
								  <div>
								    can also be achieved through robust shareholder engagement in public markets.
								  </div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="800ms" >
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-globe"></div>
								  	</div>
								  	<h3><span class="bold">Companies Funding</span></h3>
								  	{{-- <p>LOREM IPSUM DOLOR</p> --}}
								  </div>
								  <div>
								    investors may have the greatest impact when they help fund early-stage companies to get truly innovative ideas 
                    off the ground, or by choosing companies and projects in developing countries (where capital is scarce and expensive).
								  </div>
								</div>
							</div>
              <div class="col-md-12">
            
                {{-- <div class="heading-underline"> --}}
                  <h2>Who are making impact investments?</h2>
                {{-- </div> --}}
                <hr>
                <p>Impact investment has attracted a wide variety of investors, both individual and institutional. </p>
                <ul>
                  <li>Fund Managers</li>
                  <li>Development finance institutions</li>
                  <li>Diversified financial institutions/banks</li>
                  <li>Private foundations</li>
                  <li>Pension funds and insurance companies</li>
                  <li>Family Offices</li>
                  <li>Individual investors</li>
                  <li>NGOs</li>
                  <li>Religious institutions</li>
                  <li>Corporates</li>
                </ul>     
              </div>
              <div class="col-md-12">
                    
                <h2>How do impact investments perform financially?</h2>
                <hr>
                <p>Impact investors have diverse financial return expectations. Some intentionally invest for below-market-rate returns, in line with their strategic objectives. Others pursue market-competitive and market-beating returns, sometimes required by fiduciary responsibility. Most investors surveyed in the GIIN's 2020 Annual Impact Investor Survey pursue competitive, market-rate returns.
                </p>
                <img src="images/impact.png">
              </div>
              {{-- <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
								  <div class="fes4-title-cont" >
								  	<div class="fes4-box-icon">
								  		<div class="icon icon-basic-picture"></div>
								  	</div>
								  	<h3><span class="bold">PHOTOGRAPHY</span></h3>
								  	<p>LOREM IPSUM DOLOR</p>
								  </div>
								  <div>
								    Fermentum nisi in sem fertum blat. In elit soldin, elemtum, arenam pur quam volutpat suscipit dictum pur quam.
								  </div>
								</div>
							</div>               --}}
						
            </div>
					</div>
				</div>
        

        				<!-- WORK PROCESS 1 -->
				<div class="page-section work-proc-1-bg" >
					<div class="container fes4-cont">
						<div class="row">
							<div class="col-md-4 ">
								<div class="mb-50">
								  <h2 class="section-title">The key distinction between impact investing and sustainable investing can be summarised as follows: <span class="bold"></span></h2>
								</div>
                {{-- <p class="mb-50 " >Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p> --}}
							</div>
							<div class="col-md-7 col-lg-offset-1">
                <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box">
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-lightbulb"></div>
                        </div>
                        <h3><span class="bold">OBJECTIVES</span></h3>
                        <p>Impact investing focuses on achieving measurable and positive social or environmental outcomes, whereas ESG investing emphasises incorporating ESG factors into investment decision-making and risk management. </p>
                      </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-gear"></div>
                        </div>
                        <h3><span class="bold">MEASUREMENT</span></h3>
                        <p>Impact investing requires investors to measure and report the social or environmental impact of their investments. Sustainable investing, on the other hand, focuses on evaluating a company's ESG performance and practices through data analysis and reporting. </p>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="mt-30">
                  <a class="button medium gray" href="#contact-section">START INVESTING NOW</a>
                </div>
                
                {{-- <div class="row">
                
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-laptop"></div>
                        </div>
                        <h3><span class="bold">DESIGNING</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="fes4-box" >
                      <div class="fes4-title-cont" >
                        <div class="fes4-box-icon">
                          <div class="icon icon-basic-paperplane"></div>
                        </div>
                        <h3><span class="bold">LAUNCH</span></h3>
                        <p>LOREM IPSUM DOLOR</p>
                      </div>
                    </div>
                  </div>

                </div> --}}

							</div>
						</div>
					</div>
				</div>

        <!-- PORTFOLIO SECTION 1 GALLERY -->
        {{-- <div class="page-section">
          <div class="relative">

            <!-- ITEMS GRID -->
            <ul class="port-grid display-hover-on-mobile clearfix masonry" id="items-grid">
                
              <!-- Item 1 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-1.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">

                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">MINIMALISM BOOKS</a></h3>
                      <span><a href="#">ui elements</a> / <a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-1.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
                      	<a href="images/blog/post-wide-3.jpg"></a>
                      	<a href="images/blog/post-wide-4.jpg"></a>
                      	<a href="images/blog/post-wide-5.jpg"></a>
											</span>
											<a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>

                </div>
              </li>

              <!-- Item 2 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-3-big.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
                 
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">CALENDAR</a></h3>
                      <span><a href="#">photography</a> / <a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
                      <span class="popup-multi-gallery">
												<a href="images/portfolio/projects-3-big.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/blog/post-prev-1.jpg"></a>
                      	<a href="images/blog/post-prev-2.jpg"></a>
                      	<a href="images/blog/post-prev-3.jpg"></a>
											</span>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
              
                </div>
              </li>
              
              <!-- Item 3 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-5-very-big.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
              
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                      <span><a href="#">branding</a> / <a href="#">marketing</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-5-very-big.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/portfolio/car-2.jpg"></a>
                      	<a href="images/portfolio/car-3.jpg"></a>
                      	<a href="images/portfolio/car-4.jpg"></a>
											</span>	
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
              
                </div>
              </li>
              
              <!-- Item 4 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-6-big.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
                 
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">NOW IS NOW</a></h3>
                      <span><a href="#">design</a> / <a href="#">photography</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-6-big.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/portfolio/projects-6.jpg"></a>
												<a href="images/portfolio/projects-6-box.jpg"></a>
												<a href="images/portfolio/projects-8.jpg"></a>
											</span>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
              
                </div>
              </li>
              
              <!-- Item 5 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-2-big.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
            
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">EYES OF THE CAR</a></h3>
                      <span><a href="#">ui elements</a> / <a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-2-big.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/portfolio/projects-9.jpg"></a>
                      	<a href="images/portfolio/projects-10.jpg"></a>
                      	<a href="images/portfolio/projects-11.jpg"></a>
											</span>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
            
                </div>
              </li>
              
              <!-- Item 6 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-4.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
               
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">LOVE</a></h3>
                      <span><a href="#">branding</a> / <a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-4.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/blog/post-prev-4.jpg"></a>
                      	<a href="images/blog/post-prev-5.jpg"></a>
                      	<a href="images/blog/post-prev-6.jpg"></a>
											</span>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
             
                </div>
              </li>
              
              <!-- Item 7 -->
              <li role="button" class="port-item mix">
                <a href="portfolio-single1.html">
                  <div class="port-img-overlay"><img class="port-main-img" src="images/portfolio/projects-7.jpg" alt="img" ></div>
                </a>
                <div class="port-overlay-cont">
               
                    <div class="port-title-cont">
                      <h3><a href="portfolio-single1.html">YELLOW BOOK</a></h3>
                      <span><a href="#">design</a> / <a href="#">media</a></span>
                    </div>
                    <div class="port-btn-cont">
											<span class="popup-multi-gallery">
												<a href="images/portfolio/projects-7.jpg" class="lightbox-item mr-20" ><div aria-hidden="true" class="icon_search"></div></a>
												<a href="images/portfolio/projects-12.jpg"></a>
                      	<a href="images/portfolio/projects-13.jpg"></a>
                      	<a href="images/portfolio/projects-14.jpg"></a>
											</span>
                      <a href="portfolio-single1.html"><div aria-hidden="true" class="icon_link"></div></a>
                    </div>
          
                </div>
              </li>
               
            </ul>
          </div>
        </div> --}}
        
        <!-- VIEW MORE PROJECTS  -->

        {{-- <div class="port-view-more-cont">
          <a class="port-view-more" href="portfolio-boxed-gut-3col.html">VIEW MORE PROJECTS</a>
        </div> --}}

        <!-- END PORTFOLIO SECTION 1 -->

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
        
        <!-- CLIENTS 1 & TESTIMONIALS 1 -->
        <div class="page-section p-110-cont">
					<div class="container">
            <div class="row">
            
              <div class="col-md-12">
                <div class="mb-50">
								  <h2 class="section-title"> <span class="bold">SUSTAINABLE INVESTING</span></h2>
								</div>
							</div>
              
						</div>
            <div class="row">
              <!-- CLIENTS 1 -->
              {{-- <div class="col-md-7">
                <div class="row client-row border-bot">

                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/1.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/2.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/3.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/4.png">
                    </div>

                </div>
                
                <div class="row client-row">

                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/5.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/6.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/7.png">
                    </div>
                  
                    <div class="col-xs-6 col-sm-3 text-center">
                      <img alt="client" src="images/clients/8.png">
                    </div>

                </div>
                
                
							</div> --}}
              <!-- TESTIMONIALS 1 -->
              <div class="col-md-10">
                <blockquote class="quote mb-0 m-p-0">
                  <p>Sustainable investing directs investment capital to companies that seek to combat climate change, environmental destruction, while promoting corporate responsibility. 
                    ESG refers to the environmental, social, and governance criteria for evaluating corporate behavior
                     and screening potential investments. The ESG evaluation supplements traditional financial analysis
                      by identifying a company's ESG risks and opportunities, which is to say the money they stand to 
                      lose by not acting on ESG risks and the money they stand to gain from seizing ESG opportunities.
                       Financial returns remain the primary objective of ESG investing.</p>
                  {{-- <footer>John Doe, Google Inc.</footer> --}}
                 </blockquote>
							</div>
              
						</div>
					</div>
				</div>     
                <!-- COTENT CONTAINER -->
                <div class="container p-40-cont">
                  <div class="row">
                    <div class="col-md-12">
                    
                      <h2>Why ESG Is Important?</h2>
                      <hr>
                      <p>For many people, ESG investing is more than a three-letter acronym. It is a practical, real-world process for addressing how a company serves its stakeholders: workers, managers, communities, customers, shareholders. Many ESG advocates consider the environment a stakeholder too.
                        “Identifying the impact, positive or negative, on these … stakeholders is what should become the measuring stick for quality ESG investing,” says Mike Walters, CEO of USA Financial. “This is important for the obvious impactful reasons relating to each stakeholder, but it also can be used to identify the strength and sustainability of the company itself.”
                        Walters says that companies that put in the work to pursue ESG goals for each of their stakeholders become well-run companies. And well-run companies become good stocks to own.
                      </p> 
                    </div>
                    <div class="col-md-12">
                    
                      <h2>How Does ESG Investing Work?</h2>
                      <hr>
                      <p>Environment. What kind of impact does a company have on the environment? This can include a company’s carbon footprint, its abstinence from or mitigation of toxic chemicals involved in its manufacturing and other processes and its pursuit of sustainability throughout its supply chain.
                        Social. How does the company improve its social impact, both within the company and in the broader community? Social factors include everything from LGBTQ+ equality to racial diversity in both the executive suite and staff overall, and inclusion programs and hiring practices. It even looks at how a company advocates for social good in the wider world, beyond its own limited sphere of business.
                        Governance. How does the company’s board and management drive positive change? Governance includes everything from issues surrounding executive pay to diversity in leadership as well as how well that leadership responds to and interacts with shareholders.
                      </p><br>
                      <div id="tables" class="mb-50 bs-docs-section">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                          <thead>
                            <tr>
                            <th><b>Year</b></th>
                            <th><b>Vanguard ESG U.S. Stock ETF (ESGV)</b></th>
                            <th><b>S&P 500 Index</b></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>2019</td>
                              <td>33.4%</td>
                              <td>31.5%</td>
                            </tr>
                            <tr>
                              <td>2020</td>
                              <td>25.7%</td>
                              <td>18.4%</td>
                            </tr>
                            <tr>
                              <td>2021</td>
                              <td>26.4%</td>
                              <td>28.7%</td>
                            </tr>
                            <tr>
                              <td>2022</td>
                              <td>-24.0%</td>
                              <td>-18.1%</td>
                            </tr>
                            <tr>
                              <td>2023 YTD</td>
                              <td>24.8%</td>
                              <td>21.4%</td>
                            </tr>
                          </tbody>
                          </table>
                        </div>
                        <h4 style="font-style: italic; font-size: 13px; text-align: center;">Source: Morningstar Direct, data through December 4, 2023.</h4>
                        <p>Look at the Vanguard ESG U.S. Stock ETF (ESGV). It’s popular, having garnered $7 billion in total net assets. Over the past five years, 
                          including 2023 through December 4, ESGV has outperformed the broad U.S. stock market embodied by the diverse S&P 500 Index three of those five years.
                        </p>
                        <p> It should be noted, though, that while many ESG indexes and index funds have recently outperformed broad indexes, like the Russell 1000 or S&P 500, they’ve done this in part because of the greater percentage of tech companies they contain.
                        </p>
                      </div>	
                    </div>
                    <div class="col-md-12">
            
                      {{-- <div class="heading-underline"> --}}
                        <h2>Environmental, Social, and Governance (ESG) Factors</h2>
                      {{-- </div> --}}
                      <hr>
                      <p>ESG factors are the primary criteria used to evaluate the sustainability and ethical impact of an investment. They encompass a wide range of issues, such as:</p>
                      <h4><strong>Environmental</strong></h4>
                      <ul>
                        <li>Climate change, pollution, waste management, water scarcity, and biodiversity</li>
                      </ul>  
                      <h4><strong>Social</strong></h4>
                      <ul>
                        <li>Human rights, labor standards, diversity and inclusion, and community relations</li>
                      </ul>  
                      <h4><strong>Governance</strong></h4>
                      <ul>
                        <li>Corporate governance, executive compensation, board diversity, and transparency
                        </li>
                      </ul>    
                    </div>
                    {{-- <div class="col-md-12">
                    
                      <h2>Types of Sustainable Investments</h2>
                      <hr>
                      <h4>Green Bonds and Sustainable Bonds</h4>
                      <p>Green bonds are debt securities issued by companies, governments, or financial institutions to finance environmentally friendly projects, such as renewable energy, energy efficiency, or pollution control. 
                        Similarly, sustainable bonds are issued to finance projects that have both environmental and social benefits. These bonds provide investors with an opportunity to support sustainable initiatives while earning a fixed income.
                      <h4>Impact Investing and Social Impact Bonds                        </h4>
                      <p>Impact investing refers to investments made in companies, organizations, or funds with the explicit intention of generating measurable social and environmental impact alongside financial returns. 
                        Social impact bonds are a type of impact investment where private investors fund social programs, and the government repays the investors based on the achievement of predetermined social outcomes</h4>
                        <h4>Sustainable Exchange-Traded Funds (ETFs) and Mutual Funds</h4>
                      <p>Sustainable ETFs and mutual funds are investment vehicles that pool investor capital to invest in a diversified portfolio of sustainable stocks or bonds. 
                        These funds can be passive, tracking a specific sustainable index, or active, managed by a portfolio manager who selects securities based on ESG criteria and other sustainability factors.
                        <h4>Community Investing and Microfinance</h4>
                      <p>Community investing involves providing capital to underserved communities or low-income individuals to promote economic development, create jobs, and improve living standards. 
                        Microfinance is a form of community investing that provides small loans, savings accounts, and other financial services to low-income entrepreneurs and individuals who lack access to traditional banking services.
                    </div> --}}

                    {{-- <div class="col-md-12">
                    
                      <h2>Sustainable Invesment Projects</h2>
                      <hr>
                      <p>Following the environmental, social, and corporate governance (ESG) framework, there are a wide variety of investments that can be considered “sustainable.” Industries that promote good environmental practices, via more renewable energy sources or by combating air and water pollution, are perhaps the first things that come to mind for most people. However, sustainable investing can also include investing in companies that support human rights initiatives or a more ethical corporate culture.
                      </p> 
                      <p>For instance, investments in renewable energy projects, such as solar and wind farms, have contributed to the reduction of greenhouse gas emissions and the creation of new jobs in the clean energy sector. 
                        Additionally, impact investments in affordable housing or healthcare initiatives have improved living conditions and access to essential services for underserved communities.
                      </p>
                    </div> --}}
                    
                    </div>
                </div><br>
                    <div class="page-section grey-light-bg pt-80-b-50-cont"> 
                      <div class="container">
                        <div class="row">
                        
                          <div class="col-md-9 pb-30 text-center-sm">
                            <h4 class="mt-0 mb-5 "><span class="bold">START PLANNING ALL YOU NEED FOR CONSTRUCTION AND RENOVATION</span></h4>
                            <span>Don't hesitate.</span>
                          </div>
                          
                          <div class="col-md-3 text-center pb-30">
                            <a class="button medium gray" href="#contact-section">START NOW</a>
                          </div>
                          
                        </div>    
                      </div>    
                    </div><br>
                    <div class="container p-40-cont">
                    <div id="dropcaps" class="bs-docs-section mb-40">
                      <div class="heading-underline h3-line">
                        <h3 class="mb-40">Types of Sustainable Investments</h3>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <p class="mb-30"><span class="dropcap1">G</span><b>reen bonds</b> are debt securities issued by companies, governments, or financial institutions to finance environmentally friendly projects, such as renewable energy, energy efficiency, or pollution control. 
                            Similarly, <b>sustainable bonds </b> are issued to finance projects that have both environmental and social benefits. These bonds provide investors with an opportunity to support sustainable initiatives while earning a fixed income.</p>
                          <p class="mb-30"><span class="dropcap2">I</span><b>mpact investing </b> refers to investments made in companies, organizations, or funds with the explicit intention of generating measurable social and environmental impact alongside financial returns. 
                            <b>Social impact </b> bonds are a type of impact investment where private investors fund social programs, and the government repays the investors based on the achievement of predetermined social outcomes</p>
                        </div>	
                        <div class="col-md-6">
                          <p class="mb-30"><span class="dropcap3">S</span><b>ustainable ETFs</b> and <b> mutual funds </b>are investment vehicles that pool investor capital to invest in a diversified portfolio of sustainable stocks or bonds. 
                            These funds can be passive, tracking a specific sustainable index, or active, managed by a portfolio manager who selects securities based on ESG criteria and other sustainability factors.</p>
                          <p class="mb-30"><span class="dropcap4">C</span><b>ommunity investing </b> involves providing capital to underserved communities or low-income individuals to promote economic development, create jobs, and improve living standards. 
                            <b> Microfinance </b> is a form of community investing that provides small loans, savings accounts, and other financial services to low-income entrepreneurs and individuals who lack access to traditional banking services.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                    
                      <h2>Future of Sustainable Investment</h2>
                      <hr>
                    </div>
                    				<!-- FEATURES 8 -->
                  <div class="page-section">
                    <div class="container">
                      <div class="row">
                    
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="fes8-box wow fadeIn">
                            <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                <div class="icon icon-basic-smartphone"></div>
                              </div>
                              <h3>Technological Advancements and Innovations</h3>
                            </div>
                            <div>
                              Emerging technologies like AI, big data, and blockchain can revolutionize sustainable investment by 
                              refining ESG data, optimizing risk assessment and portfolios, and increasing transparency and traceability throughout the investment process.
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
                            <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                <div class="icon icon-basic-mixer2"></div>
                              </div>
                              <h3>Expanding Sustainable Investment Opportunities</h3>
                            </div>
                            <div>
                              As more companies and sectors adopt sustainable business practices, the range of sustainable investment opportunities is expected to expand. 
                              This will provide investors with a broader array of investment options and enable them to further diversify their portfolios while maintaining alignment with their sustainability objectives.
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
                            <div class="fes8-title-cont" >
                              <div class="fes8-box-icon">
                                <div class="icon icon-basic-share"></div>
                              </div>
                              <h3>The Role of Sustainable Investment in Addressing Global Challenges</h3>
                            </div>
                            <div>
                              Sustainable investment will play a critical role in addressing pressing global challenges, such as climate change, social inequality, and resource scarcity. 
                              By directing capital towards sustainable projects and companies, investors can contribute to the transition to a low-carbon, inclusive, and resource-efficient global economy, and help create a more sustainable future for all.
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  </div><br><br>
                  

                        <!-- FEATURES 7 -->
        <div class="page-section grey-light-bg clearfix">
          <div class="fes7-img-cont col-md-5">
            <div class="fes7-img" style="background-image: url(images/revo-slider/citybg.jpg)"></div>
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
                <h1><span class="font-light">ESG Investing & Impact Investing Similarities</span></h1>
                <p class="mb-60">
                  While impact investing and ESG investing have distinct differences, they also share some commonalities: 
                </p>
              
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" >
                      <div class="fes7-box-icon">
                        <div class="icon icon-ecommerce-graph-increase"></div>
                      </div>
                      <h3>Values-Driven Approach  </h3>
                      <p>Both approaches recognise the importance of incorporating ethical and sustainability considerations into investment decisions. They reflect investors' desire to support companies that align with their values and contribute to positive societal and environmental outcomes. 
                      </p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-software-font-smallcaps"></div>
                      </div>
                      <h3>Long-Term Perspective  </h3>
                      <p>Impact investing and ESG investing encourage a long-term perspective, considering the potential risks and opportunities associated with environmental and social factors. Both strategies recognise that sustainable practices can lead to more resilient and successful businesses in the long run.</p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn" data-wow-delay="400ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-mixer2"></div>
                      </div>
                      <h3>Collaboration</h3>
                      <p>Impact investing and ESG investing often require collaboration among various stakeholders, including investors, companies, nonprofits, and government entities. They foster dialogue and engagement to drive positive change and promote responsible business practices.</p>
                    </div>
                  </div>
                      
                  {{-- <div class="col-md-6 col-sm-6">
                    <div class="fes7-box wow fadeIn"  data-wow-delay="600ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-bolt"></div>
                      </div>
                      <h3>Climate Action</h3>
                      <p>Mitigate greenhouse gas emissions, adapt to climate change, and promote sustainable practices.</p>
                    </div>
                  </div> --}}
                  
                </div> 
                <div class="mt-30">
                  <a class="button medium thin hover-dark" href="#contact-section" style="margin-left:50px;">INVEST NOW</a>
                </div>
              </div>
            </div><!--end of row-->
          </div>
        </div>
        <div class="container p-110-cont">
          <div class="row">
            <div class="col-md-12">
                    
                <h2>FAQs</h2>
                <hr>
              <!-- Accordion -->
               <dl class="accordion">
                 <dt>
                   <a href="#">Is ESG investing profitable?</a>
                 </dt>
                 <dd>
                  A 2019 study of 11,000 mutual funds conducted by the Morgan Stanley Institute for Sustainable Investing found that there was no financial 
                  trade-off in the returns of sustainable funds compared to their more traditional counterparts. Additionally, regardless of the asset class held, sustainable funds also showed a significantly lower downside risk. Finally, during periods of high market volatility, sustainable funds generally proved to be more stable investments.
                 </dd>
                 <dt>
                   <a href="#">Is there such a thing as ethical investing?</a>
                 </dt>
                 <dd>
                  For someone to invest ethically, they must use their ethical principles as the primary filter when selecting companies to invest in. What makes this different from green or ESG investing, each of which typically have an overarching set of guidelines, is that the criteria that make a company “ethical” can differ from one investor to 
                  another. For example, two investors who both value clean energy companies may disagree on whether or not nuclear energy qualifies as a “clean” source.
                 </dd>
                 <dt>
                   <a href="#">What are examples of sustainable investments?</a>
                 </dt>
                 <dd>
                  Following the environmental, social, and corporate governance (ESG) framework, there are a wide variety of investments that can be considered “sustainable.” Industries that promote good environmental practices, via more renewable energy sources or by combating air and water pollution, are perhaps the first things that come to mind for 
                  most people. However, sustainable investing can also include investing in companies that support human rights initiatives or a more ethical corporate culture.
                 </dd>
                 {{-- <dt>
                   <a href="#">HOW DO I BECOME AN AUTHOR?</a>
                 </dt>
                 <dd>
                   CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.
                 </dd>
                 <dt>
                   <a href="#">WHAT CONTENT CAN I USE IN MY ITEMS?</a>
                 </dt>
                 <dd>
                   CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.
                 </dd>
                 <dt>
                   <a href="#">HOW DO I PAY FOR ITEMS?</a>
                 </dt>
                 <dd>
                   CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.
                 </dd> --}}
               </dl>
               <!-- End Accordion -->
            </div>          
          </div>          
        </div>    

                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="page-section" id="contact-section">
                      <div class="container-fluid">
                        <div class="row">
                        
                          <div class="col-md-6">
                            <div class="row">
                              <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.8738357257325!2d-122.40630728431469!3d37.79299637975601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a52e9373d%3A0x9c2dff1cdf2bd440!2s580+California+Street%2C+580+California+St%2C+San+Francisco%2C+CA+94104%2C+%D0%A1%D0%A8%D0%90!5e0!3m2!1sru!2sby!4v1549462634166" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
          
                          <div class="col-md-6">
                            <div class="contact-form-cont">
                              <!-- TITLE -->
                              <div class="mb-40">
                                <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                              </div>
                                            
                              <!-- CONTACT FORM -->
                              <div>
                                <form id="contact-form" name="contact-form" action="https://script.google.com/macros/s/AKfycbyKz7xcJXqg7L_U37ydei-3FAMVvuSTqhw56E2aS7QQp6-RgHs5pFNJ_FFGvLqCJqHj/exec" method="POST">
                                
                                  <div class="row">
                                    <div class="col-md-12 mb-30">
                                      <!-- <label>Your name *</label> -->
                                      <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                                    </div>
                                  </div>
                                  
                                  <div class="row">    
                                    <div class="col-md-12 mb-30">
                                      <!-- <label>Your email address *</label> -->
                                      <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                                      </div>
                                  </div>
                              
                                  <div class="row">
                                    <div class="col-md-12 mb-40">
                                      <!-- <label>Message *</label> -->
                                      <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                                    </div>
                                  </div>
                                  
                                  <div class="row">
                                    <div class="col-md-12 text-center-xxs">
                                      <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                                    </div>
                                  </div>
                                  {{-- <div class="row">
                                    <div class="col-md-12">
                                      <div class="checkbox small">
                                        <label><input type="checkbox" value="privacy" data-msg-required="Please accept the terms" id="agree" name="agree" class="checkbox" required>I agree to the terms of service</label>
                                      </div>
                                    </div>
                                  </div> --}}
                                </form>	
                                <script src="public/js/googlesheet.js"></script>
                                {{-- <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                                  Thanks, your message has been sent to us.
                                </div>
                              
                                <div class="alert alert-danger hidden animated shake" id="contactError">
                                  <strong>Error!</strong> There was an error sending your message.
                                </div> --}}
                              </div>
                            </div>
                          </div>
                            
                        </div>
                      </div>
                    </div>
                    
                    <!-- DIVIDER -->
                    <hr class="mt-0 mb-0">          
                    
                    <!-- CONTACT INFO SECTION 1 -->
                    {{-- <div id="contact-link" class="page-section p-110-cont grey-light-bg">
                      <div class="container">
                        <div class="row">
                        
                          <div class="col-md-4 col-sm-6">
                            <div class="cis-cont">
                              <div class="cis-icon">
                                <div class="icon icon-basic-map"></div>
                              </div>
                              <div class="cis-text">
                                <h3><span class="bold">ADDRESS</span></h3>
                                <p>790 FOLSOM AVE, SAN FRANCISCO</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="cis-cont">
                              <div class="cis-icon">
                                <div class="icon icon-basic-mail"></div>
                              </div>
                              <div class="cis-text">
                                <h3><span class="bold">EMAIL</span></h3>
                                <p><a href="mailto:info@haswell.com">INFO@HASWELL.COM</a></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="cis-cont">
                              <div class="cis-icon">
                                <div class="icon icon-basic-smartphone"></div>
                              </div>
                              <div class="cis-text">
                                <h3><span class="bold">CALL US</span></h3>
                                <p>1-800-312-212, 1-800-311-101</p>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>        
                    </div>  --}}
        
        <!-- BLOG 1 -->
        {{-- <div class="page-section pt-110-b-30-cont">
          <div class="container">
                
            <div class="mb-50">
              <h2 class="section-title pr-0">LATEST <span class="bold">NEWS</span><a href="blog-right-sidebar.html" class="section-more right">OUR BLOG</a>
                  </h2>
            </div>
            
            <div class="row">
              
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-1.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">TIME FOR MINIMALISM</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-2.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">NEW TRENDS IN WEB DESIGN</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  MAY 11<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-3.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">THE SOUND OF LIFE</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  DECEMBER 21<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
            </div>
            
          </div>
        </div> --}}
        
        <!-- NEWS LETTER -->
        {{-- <div class="page-section nl-cont">
          <div class="container">
            <div class="relative" >
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
          
                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"  ></div>
              </div>
            </div>
          </div>
        </div> --}}

        <!-- CONTACT INFO SECTION 1 -->
        {{-- <div class="page-section p-110-cont">
          <div class="container">
            <div class="row">
            
              <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                  <div class="cis-icon">
                    <div class="icon icon-basic-map"></div>
                  </div>
                  <div class="cis-text">
                    <h3><span class="bold">ADDRESS</span></h3>
                    <p>790 FOLSOM AVE, SAN FRANCISCO</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                  <div class="cis-icon">
                    <div class="icon icon-basic-mail"></div>
                  </div>
                  <div class="cis-text">
                    <h3><span class="bold">EMAIL</span></h3>
                    <p><a href="mailto:info@haswell.com">INFO@HASWELL.COM</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="cis-cont">
                  <div class="cis-icon">
                    <div class="icon icon-basic-smartphone"></div>
                  </div>
                  <div class="cis-text">
                    <h3><span class="bold">CALL US</span></h3>
                    <p>1-800-312-212, 1-800-311-101</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>        
        </div>         --}}
       
				<!-- GOOGLE MAP & CONTACT FORM -->
        {{-- <div class="page-section gray-bg">
					<div class="container-fluid">
						<div class="row">
            
							<div class="col-md-6">
                <div class="row">
                  <!-- <div data-address="580 California Street, San Francisco, CA" id="google-map"></div> -->
                
                <!-- *This is an example of using latitude and longitude if you need to use them instead of an address. Read more in the documentation.* -->
                <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="contact-form-cont">
                  <!-- TITLE -->
                  <div class="mb-40">
                    <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                  </div>
                                
                  <!-- CONTACT FORM -->
                  <div class="">
                    <form id="contact-form" action="php/contact-form.php" method="POST">
                    
                      <div class="row">
                        <div class="col-md-12 mb-30">
                          <!-- <label>Your name *</label> -->
                          <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="NAME" required>
                        </div>
                      </div>
                      
                      <div class="row">    
                        <div class="col-md-12 mb-30">
                          <!-- <label>Your email address *</label> -->
                          <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                          </div>
                      </div>
                  
                      <div class="row">
                        <div class="col-md-12 mb-40">
                          <!-- <label>Message *</label> -->
                          <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-12 text-center-xxs">
                          <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                        </div>
                      </div>
                      
                    </form>	
                    <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                      <strong>Success!</strong> Your message has been sent to us.
                    </div>
                  
                    <div class="alert alert-danger hidden animated shake" id="contactError">
                      <strong>Error!</strong> There was an error sending your message.
                    </div>
                  </div>
                </div>
              </div>
					      
            </div>
          </div>
        </div> --}}
  
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
@endsection
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  });
</script>
