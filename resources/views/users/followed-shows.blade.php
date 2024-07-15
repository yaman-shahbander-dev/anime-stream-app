@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="margin-top: -90px ;background-color: #0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Followed Shows</span>
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
                                        <h4>Your Followed Shows</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            @if($shows->count() > 0)
                                @foreach($shows as $show)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{ asset('assets/img/' . $show->show_image) }}">
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Active</li>
                                                    <li>TV Show</li>
                                                </ul>
                                                <h5><a href="{{ route('show.details', ['show' => $show->show_id]) }}">{{ $show->show_name }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="alert alert-success">You have not followed any show yet!</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
