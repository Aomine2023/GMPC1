@extends('backend.layouts.master')
@section('title')
   USERS
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 card-title">Users</h5>
                    <a href="{{ route('users.create') }}" type="button" class="btn btn-primary waves-effect waves-light"
                        style="float: right;">Add User</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table align-middle table-bordered dt-responsive nowrap table-striped"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Name</th>
                                <th data-ordering="false">Email</th>
                                <th data-ordering="false">Code</th>
                                <th data-ordering="false">Status</th>
                                <th data-ordering="false">Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name ?? '' }}</td>
                                    <td>{{ $user->email ?? ''}}</td>
                                    <td>{{ $user->code }}</td>
                                    <td>
                                        @if ($user->status == 0)
                                            <a href="{{ route('user.inactive', $user->id) }}" class="badge bg-danger sm"
                                                title="Inactive" id="InactiveBtn">-Inactive</a>
                                        @elseif ($user->status == 1)
                                            <a href="{{ route('user.active', $user->id) }}" class="badge bg-info sm"
                                                title="Active" id="ActiveBtn">
                                                - Active</a>
                                        @endif
                                    </td>
                                    <td>
                                        @isset($user->roles)
                                            @foreach ($user->roles as $role)
                                                <span class="badge bg-info">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        @endisset
                                    </td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="align-middle ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('users.create') }}"><i
                                                            class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                        Create</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('users.edit', $user->id) }}"><i
                                                            class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('users.destroy', $user->id) }}"
                                                        onclick="event.preventDefault(); confirmDelete('{{ $user->id }}');">
                                                        <i class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                    <form id="delete-form-{{ $user->id }}"
                                                        action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                    <script>
                                                        function confirmDelete(userId) {
                                                            if (confirm("Are you sure you want to delete this user?")) {
                                                                document.getElementById('delete-form-' + userId).submit();
                                                            }
                                                        }
                                                    </script>
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
