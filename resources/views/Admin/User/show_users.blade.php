@extends('layouts.master')

@section('title')

@stop

@section('css')


    @include('layouts.bootstrab')
@endsection

@section('title_page1')
    Users
@endsection

@section('title_page2')
    Dashboard
@endsection


@section('content')


    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $user->first_name }} {{ $user->last_name }}</p>
                                <p class="text-muted mb-0">{{ $user->email }}</p>
                            </div>
                        </div>
                    </td>

                    <td>{{ $user->role->name }}</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#Edit_User{{ $user->id }}"><i class="fa fa-edit"></i></button>

                        @if ($user->is_available == 1)
                            <a href="{{ route('block', $user->id) }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-lock"></i></a>
                        @else
                            <a href="{{ route('unBlock', $user->id) }}" class="btn btn-primary btn-sm btn-rounded">
                                <i class="fa fa-unlock"></i></a>
                        @endif

                    </td>
                </tr>

                @include('Admin.User.edit')
            @endforeach


        </tbody>
    </table>

@endsection

@section('scripts')


@endsection
