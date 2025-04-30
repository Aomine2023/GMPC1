@extends('backend.layouts.master')

@section('title')
    Edit User
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="mb-0 card-title flex-grow-1">Edit User - {{ $user->name }}</h4>
                    <div class="flex-shrink-0">
                        <!-- Redirect Button -->
                        <a href="{{ route('users.index') }}" class="btn btn-success btn-sm">Back to Users</a>
                    </div>
                </div><!-- end card header -->
                

                <div class="card-body">
                    @include('backend.settings.users.part.message')

                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        
                        <!-- User Information Group -->
                       <div class="row">
                        <div class="col-md-6">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name', $user->name) }}">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class=" col-md-6">
                            <label for="email">User Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email', $user->email) }}">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                       </div>
                        <!-- Roles Assignment Group -->
                        <div class="form-group">
                            <h5>Assign Roles</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="roles">Roles</label>
                                      <select name="roles[]" id="roles" class="form-control select2" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}"
                                            {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                    @error('roles') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-row">
                            <div class="text-right col-md-12">
                                <button type="submit" class="pl-4 pr-4 mt-4 btn btn-primary">Save User</button>
                            </div>
                        </div>

                    </form>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
