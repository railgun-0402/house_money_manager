@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">家計簿システムメニュー</div>

                <div class="card-body">                                    
                    <a href="{{ url('/useFunc/useInfo') }}" class="card-link">使ったお金を入力する</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
