@extends('backend.layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4 class="mb-0 card-title flex-grow-1">Create Community</h4>
            </div><!-- end card header -->
            <form action="{{ route('commandants-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row gy-4">
                            <div class="col-xxl-12 col-md-6">
                                <div>
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    @error('title')
                                        <span class="badge bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-6">
                                <div>
                                    <label for="body" class="form-label">Body</label>
                                    <textarea class="form-control" id="body" name="body" rows="12" required></textarea>
                                    @error('body')
                                        <span class="badge bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-6">
                                <div>
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                    @error('image')
                                        <span class="badge bg-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!--end col-->
</div>
@endsection