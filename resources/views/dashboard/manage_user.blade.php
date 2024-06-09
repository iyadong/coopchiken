@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Manage Users</h5>
                    <button class="btn btn-light" data-toggle="modal" data-target="#addUserModal"><i class="ri-add-line"></i> Add User</button>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateUserModal{{ $user->id }}"><i class="ri-edit-line"></i> Update</button>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Update User Modal -->
                                <div class="modal fade" id="updateUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="updateUserModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateUserModalLabel{{ $user->id }}">Update User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('users.update', $user) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="updateUserName{{ $user->id }}">Name</label>
                                                        <input type="text" class="form-control" id="updateUserName{{ $user->id }}" name="name" value="{{ $user->name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="updateUserEmail{{ $user->id }}">Email</label>
                                                        <input type="email" class="form-control" id="updateUserEmail{{ $user->id }}" name="email" value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="updateUserRole{{ $user->id }}">Role</label>
                                                        <select class="form-control" id="updateUserRole{{ $user->id }}" name="role">
                                                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                                            <option value="User" {{ $user->role == 'User' ? 'selected' : '' }}>User</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Update User</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="userName" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="userPassword">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="userRole">Role</label>
                        <select class="form-control" id="userRole" name="role">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .card {
        border-radius: 12px;
    }

    .card-header {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-light {
        color: #495057;
    }

    .modal-content {
        border-radius: 12px;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle Add User Form submission
        $('#addUserModal form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('users.store') }}',
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success
                    window.location.reload();
                },
                error: function(response) {
                    // Handle error
                    console.log(response);
                }
            });
        });

        // Handle Update User Form submission
        $('.modal form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                success: function(response) {
                    // Handle success
                    window.location.reload();
                },
                error: function(response) {
                    // Handle error
                    console.log(response);
                }
            });
        });

        // Handle Delete User action
        $('form button[type="submit"]').click(function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            $.ajax({
                type: 'DELETE',
                url: form.attr('action'),
                data: form.serialize(),
                success: function(response) {
                    // Handle success
                    window.location.reload();
                },
                error: function(response) {
                    // Handle error
                    console.log(response);
                }
            });
        });
    });
</script>
@endpush
