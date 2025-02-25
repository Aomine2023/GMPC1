@extends('website.layouts.master')
@section('title')
    Articles
@endsection
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Article</a></li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <?php
                    use App\Models\Article;
                    $articles = Article::latest()->get();
                    $articles_details = Article::latest()->take(5)->get();
                    ?>
                    @foreach ($articles as $list)
                        <div class="mb-4">
                            <h3 style="font-weight: bold;">{{ $list->title }}</h3>
                        </div>
                        <div class="position-relative rounded overflow-hidden mb-3">
                            <img src="{{ asset($list->image) }}" class="img-zoomin img-fluid rounded w-100" alt="">
                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                style="top: 20px; right: 20px;">
                                Article
                            </div>
                        </div>
                        <p class="my-4" style="text-align: justify;">
                            {{ substr($list->body, 0, 200) }}
                            @if (strlen($list->body) > 200)
                                <a href="{{ route('article-detail', $list->uuid) }}">Read more</a>
                            @endif
                        </p>
                    @endforeach
                    <div class="bg-light rounded my-4 p-4">
                        <h4 class="mb-4">Other Articles</h4>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                @foreach ($articles_details as $list)
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="{{ asset($list->image) }}" class="img-fluid rounded" alt=""
                                            style="height: 100; width:100px">
                                        <div class="ms-3">
                                            <a href="{{ route('article-detail', $list->uuid) }}">{{ $list->title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                {{-- <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="keywords"
                                        aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i
                                            class="fa fa-search text-white"></i></span>
                                </div> --}}
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        @foreach ($articles_details as $list)
                                            <div class="d-flex align-items-center p-3 bg-white rounded">
                                                <img src="{{ asset($list->image) }}" class="img-fluid rounded"
                                                    alt="" style="height: 100; width:100px">
                                                <div class="ms-3">
                                                    <a
                                                        href="{{ route('article-detail', $list->uuid) }}">{{ $list->title }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
