@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="margin-top: -90px ;background-color: #0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>{{ $categoryName }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad" style="background-color: #0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>{{ $categoryName }}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            @foreach($shows as $show)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/img/' . $show->image) }}">
{{--                                            <div class="ep">18 / 18</div>--}}
{{--                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>--}}
{{--                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>--}}
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li>Active</li>
                                                <li>TV Show</li>
                                            </ul>
                                            <h5><a href="{{ route('show.details', ['show' => $show->id]) }}">{{ $show->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                        </div>
                        <!-- </div>
                    </div>         -->
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>FOR YOU</h5>
                        </div>
                        @foreach($forYouShows as $forYouShow)
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img width="90" height="70" src="{{ asset('assets/img/' . $forYouShow->image) }}" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>TV Show</li>
                                    </ul>
                                    <h5><a href="{{ route('show.details', ['show' => $forYouShow->id]) }}">{{ $forYouShow->name }}</a></h5>
{{--                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>--}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
