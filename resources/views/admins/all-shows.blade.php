@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <h5 class="card-title mb-4 d-inline">Shows</h5>
                <a  href="{{ route('dashboard.admins.create.show') }}" class="btn btn-primary mb-4 text-center float-right">Create Shows</a>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">image</th>
                        <th scope="col">type</th>
                        <th scope="col">date_aired</th>
                        <th scope="col">status</th>
                        <th scope="col">genre</th>
                        <th scope="col">created_at</th>
                        <th scope="col">delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($shows as $show)
                            <tr>
                                <th scope="row">{{ $show->id }}</th>
                                <td>{{ $show->name }}</td>
                                <td><img width="100" height="80" src="{{ asset('assets/img/' .$show->image) }}" /></td>
                                <td>{{ $show->type }}</td>
                                <td>{{ $show->date_aired }}</td>
                                <td>{{ $show->status }}</td>
                                <td>{{ $show->genre }}</td>
                                <td>{{ $show->created_at }}</td>
                                <td>
                                    <form method="POST" action="{{ route('dashboard.admins.delete.show', ['show' => $show->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" name="submit" class="btn btn-danger  mb-4 text-center">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
