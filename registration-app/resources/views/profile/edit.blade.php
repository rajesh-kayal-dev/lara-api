@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h3 class="mb-4">Edit Profile</h3>
            <form action="{{route('admin.users.update', $user)  }}" method="post">
                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                {{-- Phone --}}
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->profile->phone ?? '') }}">
                </div>

                {{-- Bio --}}
                <div class="mb-3">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control">{{ old('bio', $user->profile->bio ?? '') }}</textarea>
                </div>

                <button class="btn btn-primary w-100">Update Profile</button>
            </form>
        </div>
    </div>
@endsection
