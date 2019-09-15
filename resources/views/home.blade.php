@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(!Auth::user()->email_verified_at)
                <div class="alert alert-warning pb-1 shadow-sm">
                    <div class="h5">Please verified your email <span><a href="{{ url('email/verify') }}">Here</a></span></div>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="text-center">Welcome Back <span style="color: blue;">{{ Auth::user()->name }}</span></h3>
                </div>
                <div class="card-body">
                    <div>Send Your money to?<span class="float-right">RP. {{ Auth::user()->modal }}</span></div>
                    <form class="mt-3" action="{{ url('/transaction') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="usr">
                                @foreach($all as $a)
                                <option value="{{ $a->id }}">{{ $a->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="nominal" placeholder="Nominal" class="form-control" required>
                        </div>
                        <div>
                            <button class="btn btn-success" style="width: 100%;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="text-center">Send Email</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('send.mail') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" name="email" placeholder="Send To:" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="msg" placeholder="Write Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" style="width: 100%;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <span class="h4">List Modul</span>
                </div>
                <div class="card-body">
                    <div class="text-center text-secondary h6">No Modul Created</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
