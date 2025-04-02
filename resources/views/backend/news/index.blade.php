@extends('backend.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 card-title">News Datatables</h5>
                    <a href="{{ route('news-add') }}" type="button" class="btn btn-primary waves-effect waves-light" style="float: right;">Add News</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false" width="60%">News</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $list->body ?? '' }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="align-middle ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item edit-item-btn" href="{{ route('news-edit', $list->uuid) }}">
                                                        <i class="align-bottom ri-pencil-fill me-2 text-muted"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn" href="{{ route('news-delete', $list->uuid) }}">
                                                        <i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i> Delete
                                                    </a>
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
        </div><!--end col-->

       
    </div><!--end row-->
@endsection