@extends('layouts.app')

@section('content')
<div class="col-md-4 ml-auto mr-auto">
    
        <div class="card card-login card-plain">
            <div class="card-header ">
                Login
            </div>

   
            <div class="card-body ">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ url("/users/{$user->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger action-link">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No user available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
            </div>

            
            
            
        </div>
    
</div>
@endsection
