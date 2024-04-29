@extends('backpage.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.admin.users') }}">Data Admin</a></li>
                            <li class="breadcrumb-item active">User List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left"></div>
                                <div class="float-right">
                                    <a href="{{ route('admin.admin.users.create') }}" class="btn btn-success">
                                        <i class="fas fa-plus"></i> Add New User
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="text-center">Status</th>
                                            <th width="80">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td class="text-center">
                                                    <span
                                                        class="badge {{ $user->status === 'active' ? 'badge-success' : 'badge-danger' }}">{{ ucfirst($user->status) }}</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group dropleft">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item btn-edit-user"
                                                                data-id="{{ $user->id }}"
                                                                href="{{ route('admin.admin.users.edit', ['user' => $user->id]) }}">
                                                                Edit
                                                            </a>
                                                            <form
                                                                action="{{ route('admin.admin.users.delete', ['user' => $user->id]) }}"
                                                                method="post" id="delete-form">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="button" class="dropdown-item">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
