@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>おつかい一覧</h1>
            
            @include('otsukais.timeline', ['otsukais' => $otsukais])    
            
        </div>
    </div>
</div>
@endsection