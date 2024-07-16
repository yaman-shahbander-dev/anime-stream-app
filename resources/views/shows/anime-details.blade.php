@extends('layouts.app')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option" style="margin-top: -90px ;background-color: #0b0c2a">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>{{ $show->genre }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container">
        @if(session()->has('follow'))
            <div class="alert alert-success">
                {{ session()->get('follow') }}
            </div>
        @endif
    </div>

    <!-- Anime Section Begin -->
    <section class="anime-details spad" style="background-color: #0b0c2a">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ asset('assets/img/' . $show->image) }}">
                            <div class="comment"><i class="fa fa-comments"></i> {{ $commentsCount }}</div>
                            <div class="view"><i class="fa fa-eye"></i> {{ $viewsCount }}</div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $show->name }}</h3>
                            </div>

                            <p>{{ $show->description }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> TV Show</li>
                                            <li><span>Studios:</span> {{ $show->studios }}</li>
                                            <li><span>Date aired:</span> {{ $show->date_aired }}</li>
                                            <li><span>Status:</span> {{ $show->status }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre:</span> {{ $show->genre }}</li>

                                            <li><span>Duration:</span> {{ $show->duration }}</li>
                                            <li><span>Quality:</span> {{ $show->quality }}</li>
                                            <li><span>Views:</span> {{ $viewsCount }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                @if($favorite)
                                    <button disabled type="submit" class="follow-btn"><i class="fa fa-heart-o"></i> Followed</button>
                                @else
                                <form method="POST" action="{{ route("show.follow", ['show' => $show->id]) }}">
                                    @csrf
                                    <button type="submit" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</button>
                                </form>
                                @endif
                                    <a href="{{ route('show.watching', ['show' => $show->id, 'episode' => $episode->id]) }}" class="watch-btn"><span>Watch Now</span> <i
                                            class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        @foreach($comments as $comment)
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="{{ asset('assets/user_images/' . $comment->image) }}" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>{{ $comment->user_name }} - <span>{{ $comment->created_at }}</span></h6>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="anime__details__form">
                        @if(isset(auth()->user()->id))
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                            <form action="{{ route('show.create.comments', ['show' => $show->id]) }}" method="POST">
                                @csrf
                                <textarea name="comment" placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        @else
                            <p class="alert alert-success">Login to be able to comment!</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>you might like...</h5>
                        </div>
                        @foreach($randomShows as $randomShow)
                            <div class="product__sidebar__view__item set-bg" data-setbg="{{ asset('assets/img/' . $randomShow->image) }}">
{{--                                <div class="ep">18 / ?</div>--}}
{{--                                <div class="view"><i class="fa fa-eye"></i> 9141</div>--}}
                                <h5><a href="{{ route('show.details', ['show' => $randomShow->id]) }}">{{ $randomShow->name }}</a></h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
@endsection
