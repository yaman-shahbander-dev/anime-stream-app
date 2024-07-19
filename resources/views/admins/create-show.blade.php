@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Shows</h5>
                    <form method="POST" action="{{ route('dashboard.admins.store.show') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="file" name="image" id="form2Example1" class="form-control"  />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <select name="type" class="form-select  form-control" aria-label="Default select example">
                                <option selected>Choose Type</option>
                                <option value="Tv Series">Tv Series</option>
                                <option value="Movie">Movie</option>
                            </select>
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="studios" id="form2Example1" class="form-control" placeholder="studios" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="date_aired" id="form2Example1" class="form-control" placeholder="date_aired" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="status" id="form2Example1" class="form-control" placeholder="status" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <select name="genre" class="form-select  form-control" aria-label="Default select example">
                                <option selected>Choose Genre</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="duration" id="form2Example1" class="form-control" placeholder="duration" />
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="quality" id="form2Example1" class="form-control" placeholder="quality" />
                        </div>
                        <br>
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
