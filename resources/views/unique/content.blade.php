@if(isset($pages) && is_object($pages))
    @foreach($pages as $key => $page)
        @if($key % 2 == 0)
            <section id="home" class="top_cont_outer">
                <div class="hero_wrapper">
                    <div class="container">
                        <div class="hero_section">
                            <div class="row">
                                <div class="col-lg-5 col-sm-7">
                                    <div class="top_left_cont zoomIn wow animated">
                                        <h2>{!!  $page->text !!}</h2>
                                        <a href="{{ route('page', array('alias'=>$page->alias)) }}" class="read_more2">Read more</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-5">
                                    {!! Html::image('unique/img/'.$page->images) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="aboutUs">
                <div class="inner_wrapper">
                    <div class="container">
                        <h2>{{ $page->name  }}</h2>
                        <div class="inner_section">
                            <div class="row">
                                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                    {!! Html::image('unique/img/'.$page->images, '', array('class'=>'img-circle delay-03s animated wow zoomIn')) !!}
                                </div>
                                <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                                    <div class=" delay-01s animated fadeInDown wow animated">
                                        <p>{!! $page->text !!}</p><br/>
                                    </div>
                                    <div class="work_bottom">
                                        <span>Want to know more...</span>
                                        <a href="{{ route('page',array('alias'=>$page->alias)) }}" class="contact_btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@endif

@if(isset($services) && is_object($services))
    <section  id="service">
        <div class="container">
            <h2>Services</h2>
            <div class="service_wrapper">
                @foreach($services as $key => $service)
                    @if($key == 0 || $key % 3 == 0)
                       <div class="row {{ ($key != 0) ? 'borderTop' : '' }}">
                    @endif
                    <div class="col-lg-4 {{ ($key % 3 > 0) ? 'borderLeft' : '' }} {{ ($key > 2) ? 'mrgTop' : '' }}">
                        <div class="service_block">
                            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $service->icon }}"></i></span> </div>
                            <h3 class="animated fadeInUp wow">{{ $service->name  }}</h3>
                            <p class="animated fadeInDown wow">{{ $service->text }}</p>
                        </div>
                    </div>
                    @if(($key + 1) % 3 == 0)
                        </div>
                    @endif
                @endforeach
            </div>
		</div>
    </section>
@endif

@if(isset($portfolios) && is_object($portfolios))
    <section id="Portfolio" class="content">
        <div class="container portfolio_title">
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="portfolio-top"></div>
        <div class="portfolio">
            @if(isset($tags) && is_object($tags))
                <div id="filters" class="sixteen columns">
                    <ul class="clearfix">
                        <li><a id="all" href="#" data-filter="*" class="active"><h5>Все</h5>
							@foreach($tags as $tag)
                                <li><a class="" href="#" data-filter=".{{ $tag }}">
                                    <h5>{{ $tag }}</h5></a>
                                </li>
                            @endforeach
                        </a></li>
                    </ul>
                </div>
            @endif
            <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
				@foreach($portfolios as $portfolio)
                    <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  {{ $portfolio->filter }} isotope-item">
                        <div class="portfolio_img">
                            {!! Html::image('unique/img/'.$portfolio->images, $portfolio->name) !!}

                        </div>
                        <div class="item_overlay">
                            <div class="item_info">
                                <h4 class="project_name">{{ $portfolio->name  }}</h4>
                            </div>
                        </div>
                    </div>
				@endforeach
			</div>
		</div>
		<div class="portfolio_btm"></div>
		<div id="project_container">
			<div class="clear"></div>
			<div id="project_data"></div>
		</div>
	</section>
@endif