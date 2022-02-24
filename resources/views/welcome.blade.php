@extends('layouts.app')
@section('content')
    <section class="banner-block" style="background-image: url({{ mix('img/banner.png') }});">
        <div class="container">
            <div class="banner-subblock">
                <div class="row">
                    <div class="col-md-7">
                        <h6>#1 MOST TRUSTED CASINO IN INDIA</h6>
                        <h4>DISCOVER A NEW WORLD OF CASINO</h4>
                        <h1><span>100%</span> DEPOSIT BONUS</h1>
                        <h1>UPTO <span>₹20000</span></h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <div class="button-block montserrat">
                            <a href="javascript:void(0);" class="btn btn-red" data-toggle="modal" data-target="#registerModal">Signup Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-tab-block">
        <div class="container">
        <ul>
            <li>
            <a href="#popular-games">
                <img src="{{ asset('/img/custom-icon1.png') }}" class="img-fluid" />
                <h6>Popular Games</h6>
            </a>
            </li>
            <li>
            <a href="#indian-games">
                <img src="{{ asset('/img/custom-icon2.png') }}" class="img-fluid" />
                <h6>Indian Games</h6>
            </a>
            </li>
            <li>
            <a href="#roulette">
                <img src="{{ asset('/img/custom-icon3.png') }}" class="img-fluid" />
                <h6>Roulette</h6>
            </a>
            </li>
            <li>
            <a href="#blackjack">
                <img src="{{ asset('/img/custom-icon4.png') }}" class="img-fluid" />
                <h6>Blackjack</h6>
            </a>
            </li>
            <li>
            <a href="#poker">
                <img src="{{ asset('/img/custom-icon5.png') }}" class="img-fluid" />
                <h6>Poker</h6>
            </a>
            </li>
            <li>
            <a href="#baccarat">
                <img src="{{ asset('/img/custom-icon6.png') }}" class="img-fluid" />
                <h6>Baccarat</h6>
            </a>
            </li>
            <li>
            <a href="#game-shows">
                <img src="{{ asset('/img/custom-icon7.png') }}" class="img-fluid" />
                <h6>Game Shows</h6>
            </a>
            </li>
            <li>
            <a href="#slots">
                <img src="{{ asset('/img/custom-icon8.png') }}" class="img-fluid" />
                <h6>Slots</h6>
            </a>
            </li>
            <li>
            <a href="#others">
                <img src="{{ asset('/img/custom-icon9.png') }}" class="img-fluid" />
                <h6>Others</h6>
            </a>
            </li>
            <li>
            <a href="#all">
                <img src="{{ asset('/img/custom-icon9.png') }}" class="img-fluid" />
                <h6>All</h6>
            </a>
            </li>
        </ul>
        </div>
    </section>

    
    <section class="slider-wrapper" id="popular-games">
        <div class="container">
        <div class="heading-block">
        <div class="row">
          <div class="col-8 col-md-4">
            <h1>Popular Games</h1>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              diam nonumy eirmod tempor invidun.
            </p>
          </div>
          <div class="col-3 d-none d-md-block">
            <form class="search-form">
              <i class="fa fa-search" aria-hidden="true"></i>
              <input type="search" class="slidename" data-slick-id="1" data-slick-id="1" placeholder="Search" />
            </form>
          </div>
          <div class="col-4 col-md-5">
            <div class="button-block">
              <a href="javascript:void(0);" class="btn btn-link">See more</a>
            </div>
          </div>
          <div class="col-12 d-md-none">
            <form class="search-form">
              <i class="fa fa-search" aria-hidden="true"></i>
              <input type="search" class="slidename" data-slick-id="1" data-slick-id="1" placeholder="Search" />
            </form>
          </div>
        </div>
      </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-1 slider-back">
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                           <a href ="javascript:void(0);" class="check-login">
                              <img src="{{asset('/img/slide1.png')}}">
                             </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide2.png')}}">
                          </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide3.png')}}">
                        </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                           <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide4.png')}}">
                        </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide1.png')}}">
                        </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide2.png')}}">
                        </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide3.png')}}">
                        </a>
                        </div>
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <a href="javascript:void(0);"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="javascript:void(0);" class="selected"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                               <img src="{{asset('/img/slide4.png')}}">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="indian-games">
        <div class="container">
            <div class="heading-block">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <h1>Indian Games</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidun.
                        </p>
                    </div>
                    <div class="col-3 d-none d-md-block">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,2)" data-slick-id="2" placeholder="Search" />
                        </form>
                    </div>
                    <div class="col-4 col-md-5">
                        <div class="button-block">
                        @if(count($indian_games) > 10)
                            <a href="{{ url('list-games/indian_games') }}" class="btn btn-link">See more</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,2)" data-slick-id="2" placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-2 slider-back">
                    @foreach($indian_games as $key=>$indGame)
                    <a @if (Auth::check()) href="{{ url('play-casino/'.$indGame->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                      <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <h1>{{$indGame->name}}</h1>
                        <div class="fav-icon">
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <img src="{{ $indGame->gamesImage !=null ? $indGame->gamesImage->filepath : '/img/slide1.png' }}">
                        </div>
                      </div>
                    </a>
                    @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="roulette">
        <div class="container">
            <div class="heading-block">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <h1>Roulette</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidun.
                        </p>
                    </div>
                    <div class="col-3 d-none d-md-block">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,3)" data-slick-id="3" placeholder="Search" />
                        </form>
                    </div>
                    <div class="col-4 col-md-5">
                        <div class="button-block">
                        @if(count($roulette) > 10)    
                            <a href="{{ url('list-games/roulette') }}" class="btn btn-link">See more</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,3)" data-slick-id="3" placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-3 slider-back">
                    @foreach($roulette as $key=>$val)
                    <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                        <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                            <div class="text-center white"><h1>{{$val->name}}</h1></div>
                            <div class="fav-icon">
                                <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                            </div>
                            <div class="slider-pic">
                                <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                            </div>
                        </div>
                    </a>
                    @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="blackjack">
        <div class="container">
            <div class="heading-block">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <h1>Blackjack</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidun.
                        </p>
                    </div>
                    <div class="col-3 d-none d-md-block">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,4)" data-slick-id="4" placeholder="Search" />
                        </form>
                    </div>
                    <div class="col-4 col-md-5">
                        <div class="button-block">
                        @if(count($blackjack) > 10) 
                            <a href="{{ url('list-games/blackjack') }}" class="btn btn-link">See more</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,4)" data-slick-id="4" placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-4 slider-back">
                    @foreach($blackjack as $key=>$val)
                    <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                        <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                            <div class="text-center white"><h1>{{$val->name}}</h1></div>
                            <div class="fav-icon">
                                
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                            </div>
                            <div class="slider-pic">
                                <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                            </div>
                        </div>
                        
                    </a>
                    @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="poker">
        <div class="container">
            <div class="heading-block">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <h1>Poker</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidun.
                        </p>
                    </div>
                    <div class="col-3 d-none d-md-block">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,5)" data-slick-id="5" placeholder="Search" />
                        </form>
                    </div>
                    <div class="col-4 col-md-5">
                        <div class="button-block">
                        @if(count($poker) > 10) 
                            <a href="{{ url('list-games/poker') }}" class="btn btn-link">See more</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,5)" data-slick-id="5" placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-5 slider-back">
                    @foreach($poker as $key=>$val)
                    <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                        <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                            <div class="text-center white"><h1>{{$val->name}}</h1></div>
                            <div class="fav-icon">
                               
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                            </div>
                            <div class="slider-pic">
                                <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                            </div>
                        </div>
                    </a>
                    @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="baccarat">
        <div class="container">
        <div class="heading-block">
            <div class="row">
                <div class="col-8 col-md-4">
                    <h1>Baccarat</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidun.
                    </p>
                </div>
                <div class="col-3 d-none d-md-block">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,6)" data-slick-id="6" placeholder="Search" />
                    </form>
                </div>
                <div class="col-4 col-md-5">
                    <div class="button-block">
                    @if(count($baccarat) > 10) 
                        <a href="{{ url('list-games/baccarat') }}" class="btn btn-link">See more</a>
                    @endif
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,6)" data-slick-id="6" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-6 slider-back">
                    @foreach($baccarat as $key=>$val)
                        <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                            <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                                <div class="text-center white"><h1>{{$val->name}}</h1></div>
                                <div class="fav-icon">
                                   
                                <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                </div>
                                <div class="slider-pic">
                                    <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                                </div>
                            </div>
                        </a>
                        @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="game-shows">
        <div class="container">
        <div class="heading-block">
            <div class="row">
                <div class="col-8 col-md-4">
                    <h1>Game Shows</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidun.
                    </p>
                </div>
                <div class="col-3 d-none d-md-block">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,7)" data-slick-id="7" placeholder="Search" />
                    </form>
                </div>
                <div class="col-4 col-md-5">
                    <div class="button-block">
                    <a href="javascript:void(0);" class="btn btn-link">See more</a>
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,7)" data-slick-id="7" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-7 slider-back">
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                              <img src="{{asset('/img/slide1.png')}}">
                            </a>
                        </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                        <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                             <img src="{{asset('/img/slide2.png')}}">
                           </a>
                        </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                               <img src="{{asset('/img/slide3.png')}}">
                            </a>
                          </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                        <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                              <img src="{{asset('/img/slide4.png')}}">
                            </a>
                        </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                        <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                              <img src="{{asset('/img/slide1.png')}}">
                            </a>
                        </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                             <img src="{{asset('/img/slide2.png')}}">
                           </a>
                        </div>
                        
                    </div>
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="fav-icon">
                            <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <a href ="javascript:void(0);" class="check-login">
                            <img src="{{asset('/img/slide3.png')}}">
                           </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="slots">
        <div class="container">
            <div class="heading-block">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <h1>Slots</h1>
                        <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidun.
                        </p>
                    </div>
                    <div class="col-3 d-none d-md-block">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                          <input type="search" class="slidename" onkeyup="searchbyname(this,8)" data-slick-id="8" placeholder="Search" />
                        </form>
                    </div>
                    <div class="col-4 col-md-5">
                        <div class="button-block">
                        @if(count($slots) > 0) 
                            <a href="{{ url('list-games/slots') }}" class="btn btn-link">See more</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <form class="search-form">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="search" class="slidename" onkeyup="searchbyname(this,8)" data-slick-id="8" placeholder="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="slider-block">
                <div class="custom-slider slots-slider slick-search slick-search-8 slider-back">
                    @foreach($initial_slots as $key=>$slot)
                    <a @if (Auth::check()) href="{{ url('play-casino/'.$slot->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                    <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                        <div class="text-center white"><h1>{{$val->name}}</h1></div>
                        <div class="fav-icon">
                            
                        <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                        </div>
                        <div class="slider-pic">
                            <img src="{{ $slot->gamesImage !=null ? $slot->gamesImage->filepath : '/img/slide1.png' }}">
                        </div>
                    </div>
                    </a>
                    
                   @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="others">
        <div class="container">
        <div class="heading-block">
            <div class="row">
                <div class="col-8 col-md-4">
                    <h1>Others</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidun.
                    </p>
                </div>
                <div class="col-3 d-none d-md-block">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,9)" data-slick-id="9" placeholder="Search" />
                    </form>
                </div>
                <div class="col-4 col-md-5">
                    <div class="button-block">
                    @if(count($other) > 0) 
                        <a href="{{ url('list-games/other') }}" class="btn btn-link">See more</a>
                    @endif
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,9)" data-slick-id="9" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-9 slider-back">
                    @foreach($other as $key=>$val)
                        <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                            <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                                <div class="text-center white"><h1 hidden>{{$val->name}}</h1></div>
                                <div class="fav-icon">                                   
                                <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                </div>
                                <div class="slider-pic">
                                    <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                                </div>
                            </div>
                        </a>
                        @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="slider-wrapper" id="all">
        <div class="container">
        <div class="heading-block">
            <div class="row">
                <div class="col-8 col-md-4">
                    <h1>All</h1>
                    <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    diam nonumy eirmod tempor invidun.
                    </p>
                </div>
                <div class="col-3 d-none d-md-block">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,10)" data-slick-id="10" placeholder="Search" />
                    </form>
                </div>
                <div class="col-4 col-md-5">
                    <div class="button-block">
                    @if(count($other) > 0) 
                        <a href="{{ url('list-games/all') }}" class="btn btn-link">See more</a>
                    @endif
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <form class="search-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" class="slidename" onkeyup="searchbyname(this,10)" data-slick-id="10" placeholder="Search" />
                    </form>
                </div>
            </div>
        </div>
            <div class="slider-block">
                <div class="custom-slider slick-search slick-search-10 slider-back">
                    @foreach($all as $key=>$val)
                        <a @if (Auth::check()) href="{{ url('play-casino/'.$val->openTableId) }}" @else href ="javascript:void(0);" @endif class="check-login">
                            <div class="slide-item active" style="" data-toggle="modal" data-target="#gameModal">
                                <div class="text-center white"><h1 hidden>{{$val->name}}</h1></div>
                                <div class="fav-icon">
                                    
                                <span class="selected"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                </div>
                                <div class="slider-pic">
                                    <img src="{{ $val->gamesImage !=null ? $val->gamesImage->filepath : '/img/slide1.png' }}">
                                </div>
                            </div>
                        </a>
                        @if ($key >= 9) @break @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section> 
 


  <div class="modal fade custom-modal checkUserLogin" id="checkUserLogin" tabindex="-1" role="dialog" aria-labelledby="useramountModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="{{asset('img/cancel.png')}}" class="img-fluid" />
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-block">
                    <div class="right-block">
                        <h1 class="form_title">Please login to use this services</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>


@endsection

