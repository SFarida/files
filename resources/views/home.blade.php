@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <form action="/postFile" method="post" enctype="multipart/form-data" class="card">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                                <input type="file" class="form-control-file" name="document" id="document" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid document. Size of document should not be more than 2MB.</small>
                                <input type="text" name="author" id="author" placeholder="Author's name">
                                <input type="text" name="description" id="description" placeholder="Description">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
        </div>
    </div>
</div>
@endsection
