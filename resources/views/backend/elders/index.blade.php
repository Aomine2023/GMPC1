@extends('backend.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Elders</h5>
                <a href="{{ route('elder-add') }}" class="btn btn-primary waves-effect waves-light" style="float: right;">
                    Add Elder
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Title</th>
                            <th>Designation</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($elders as $list)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $list->title ?? 'N/A' }}</td>
                                <td>{{ $list->designation ?? 'N/A' }}</td>
                                <td>{{ $list->elder_name ?? 'N/A' }}</td>
                                <td>
                                    @if ($list->image)
                                        <img src="{{ asset($list->image) }}" alt="Elder Image" style="max-width:200px; max-height: 80px;">
                                    @else
                                        No Image Available
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('elder-edit', $list->uuid) }}">Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('elder-delete', $list->uuid) }}">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
@endsection