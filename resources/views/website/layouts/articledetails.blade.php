@extends('website.layouts.master')
@section('title')
    {{ $article_details->title }}
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Article</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $article_details->title }}</li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h3 style="font-weight: bold;">{{ $article_details->title }}</h3>
                    </div>
                    <div class="position-relative rounded overflow-hidden mb-3">
                        <img src="{{ asset($article_details->image) }}" class="img-zoomin img-fluid rounded w-100"
                            alt="">
                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                            style="top: 20px; right: 20px;">
                            Article
                        </div>
                    </div>
                    <p class="my-4" style="text-align: justify;">
                        {{ $article_details->body }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
