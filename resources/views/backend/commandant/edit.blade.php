@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                </div>
                <form action="{{ route('commandants-update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" value="{{ $commandants->uuid }}">
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="rank" class="form-label">Rank</label>
                                        <select name="rank_name" id="rank_name" class="form-control" required>
                                            <option value="">select rank</option>
                                            @foreach ($ranks as $list)
                                                <option
                                                    value="{{ $list->rank_name }}"{{ $list->rank_name == $commandants->rank_name ? 'selected' : '' }}>
                                                    {{ $list->rank_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="rank_star" class="form-label">Rank Star</label>
                                        <input type="text" class="form-control" id="rank_star" name="rank_star"
                                            value="{{ $commandants->rank_star }}">
                                        @error('rank_star')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="commandant_name" class="form-label">Commandant Name</label>
                                        <input type="text" class="form-control" id="commandant_name"
                                            name="commandant_name" value="{{ $commandants->commandant_name }}">
                                        @error('commandant_name')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="about_commandant" class="form-label">About</label>
                                        <textarea class="form-control" id="about_commandant" name="about_commandant" rows="12">{{ $commandants->about_commandant }}</textarea>
                                        @error('about_commandant')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ asset($commandants->image) }}" alt="IMAGE"
                                            style="width:350px; border: 1px solid #000000;height:246px;">
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

                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
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