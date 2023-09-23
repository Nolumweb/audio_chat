@extends('admin.dashboard')
@section('admin')

<div class="container">
    <h1>Admin Users</h1>
    <ul>
        @foreach ($adminUsers as $adminUser)
                <a href="" class="btn btn-primary">Start Conversation</a>

            {{-- {{ $adminUser->name }}  --}}

        @endforeach
    </ul>
</div>
@endsection


        
