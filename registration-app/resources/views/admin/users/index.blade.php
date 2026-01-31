@extends('layout.app')

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
                </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-info">No users registered yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection
