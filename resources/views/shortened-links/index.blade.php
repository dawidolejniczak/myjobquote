@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create shortened link</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('shortened-links.store') }}">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <label for="original_url">Url</label>
                                <input type="url" class="form-control" id="original_url" name="original_url" placeholder="Enter url">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
