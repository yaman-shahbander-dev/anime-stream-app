@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Create Genres</h5>
                <form method="POST" action="{{ route('dashboard.admins.store.genre') }}">
                    @csrf
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
