@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-6">
                            <h4>Halo, {{ auth()->user()->name }}!</h4>
                            <p class="m-0">Emailmu {{ auth()->user()->email }}</p>
                            <p class="m-0">Rolemu {{ auth()->user()->roles->first()->display_name }}</p>
                        </div>
                        <div class="col-6 text-center align-items-center">
                            <h5>Halaman ini hanya bisa diakses sesuai role</h5>
                                <a href="{{ route('admin') }}" class="btn btn-primary">Home Admin</a>
                                <a href="{{ route('teller') }}" class="btn btn-primary">Home Teller</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
