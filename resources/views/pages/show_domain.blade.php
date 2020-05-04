@extends('layouts.app')

@section('content')
    <div class="row my-3 justify-content-center">
        <div class="col text-center">
            <div class="card-group">
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        <h4 class="card-title my-0">ID</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-text">{{ $domain->id }}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        <h4 class="card-title my-0">Domain</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-text">{{ $domain->name }}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        <h4 class="card-title my-0">Created</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-text">{{ date('d M Y', strtotime($domain->created_at)) }}</h4>
                        <p>at {{ date('H:m:t', strtotime($domain->created_at)) }}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        <h4 class="card-title my-0">Updated</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-text">{{ date('d M Y', strtotime($domain->updated_at)) }}</h4>
                        <p>at {{ date('H:m:t', strtotime($domain->updated_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
