@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->
                <form action="{{ route('news-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{ $news->uuid }}">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">News</label>
                                        <textarea class="form-control" id="body" name="body" rows="12">{{ $news->body }}</textarea>
                                        @error('body')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="venue" class="form-label">Venue</label>
                                        <input type="text" class="form-control" id="venue" name="venue"
                                            value="{{ $news->venue }}">
                                        @error('venue')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="news_date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="news_date"
                                            value="{{ $news->news_date }}" name="news_date">
                                        @error('news_date')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <img id="showImage" class="rounded avatar-lg" src="{{ asset($news->image) }}"
                                            alt="IMAGE" style="width: 200px; border: 1px solid #000000;height:250px;">
                                        <hr>
                                        <input name="image" class="form-control" type="file" id="image">
                                        @error('image')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                </form>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
