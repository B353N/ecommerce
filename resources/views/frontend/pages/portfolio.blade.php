   @extends('frontend.layouts.master')

   @section('content')
       <!-- protfolio-area start-->
       <div class="amazing-portfolio-area portfolio-page-middle">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <div class="section-title title-head text-center">
                           <h3>{{ __('lang.treatments') }}</h3>
                           <img src="images/icons/icon-title.png" alt="" />
                       </div>
                       <div class="mixitup-button-wrapper text-center">
                           <ul class="mixit-button text-center">
                               <li class="filter active" data-filter="all">Filter all(12)</li>
                               <li class="filter" data-filter=".fashion">Fashion(6)</li>
                               <li class="filter" data-filter=".general">General(9)</li>
                               <li class="filter" data-filter=".company">Company(5)</li>
                               <li class="filter" data-filter=".men">Men(9)</li>
                               <li class="filter" data-filter=".cetagory">Category(07)</li>
                           </ul>
                       </div>
                   </div>
                   <div id="mix-fil" class="portfolio-page-top text-center row g-0">
                       <div class="col-lg-4 col-md-6 col-sm-12 mix fashion men">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf1-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix general men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf12-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix fashion general company">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf3-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix general men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf4-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12  mix fashion company men">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf5-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix general men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf7-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12  mix fashion general company">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf8-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix general men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf3-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix fashion general company men">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf11-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix general men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf10-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix company men cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf13-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-12 mix fashion general cetagory">
                           <div class="mixit-signle prot-style1">
                               <div class="mixit-image-wrap overlay-margin-0 posr">
                                   <div class="mixit-img">
                                       <a href="#"><img src="images/portfolio/pf9-1024x613.jpg" alt="" />
                                       </a>
                                   </div>
                                   <div class="text-wrapper-mixit">
                                       <div class="mixit-icon">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-search"></i></a>
                                               </li>
                                               <li><a href="#"><i class="fa fa-link"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <div class="mixit-box-text">
                                           <p>Augue lorem lacinia</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- portfolio-area end-->

       <!--Brand slider area css start-->
       <div class="brand-area hp1-brand-area portfolio-brand">
           <div class="container">
               <div class="row">
                   <div class="brand-slider-wrapper">
                       <div class="active-brand-owl def-owl">
                           @foreach ($brands as $brand)
                               <div class="col-md-2">
                                   <div class="brand-image">
                                       <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}" />
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--Brand slider area css end-->
   @endsection
