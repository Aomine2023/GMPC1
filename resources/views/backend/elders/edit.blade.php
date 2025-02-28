@extends('backend.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Elder</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('elder-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{ $elder->uuid }}">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $elder->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="elder_name" class="form-label">Elder Name</label>
                        <input type="text" class="form-control" id="elder_name" name="elder_name" value="{{ $elder->elder_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value="{{ $elder->designation }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <img src="{{ asset($elder->image) }}" alt="Current Image" style="max-width:200px; max-height: 80px;">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection