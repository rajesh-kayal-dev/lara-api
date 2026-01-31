@extends('layouts.app')

@section('content')
    <h3 class="mb-4">Register users</h3>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile->phone ?? '_' }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span class="badge bg-secondary">{{ $role->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ $user->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="d-inline"
                            onsubmit="return confirm('Are you sure want to delete this user');">
                            @csrf
                            {{-- CSRF is an attack where a malicious site tricks a logged-in user’s browser into sending unauthorized requests.
Laravel prevents this by validating CSRF tokens stored in session using middleware. --}}
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-info">No users registered yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
