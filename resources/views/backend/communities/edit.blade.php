@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Edit </h4>
                </div>
                <form action="{{ route('commandants-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{ $community->uuid }}">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">Community</label>
                                        <textarea class="form-control" id="body" name="body" rows="12">{{ $community->body }}</textarea>
                                        @error('body')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $community->title }}">
                                        @error('title')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        @if ($community->image == null)
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ url('upload/no_image.jpg') }}" alt="IMAGE"
                                                style="width: 200px; border: 1px solid #000000;height:250px;">
                                        @else
                                            <img id="showImage" class="rounded avatar-lg" src="{{ asset($community->image) }}"
                                                alt="IMAGE"
                                                style="width: 200px; border: 1px solid #000000;height:250px;">
                                        @endif
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
                    <button type="submit" class="pl-4 pr-4 mt-4 btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
