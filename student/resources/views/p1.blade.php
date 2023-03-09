@extends('layouts.app')

@section('title', 'Page 1')

@section('sidebar')
@parent
<div style="color:blue">
    This is the appended to the master sidebar.
    <br>
    這是p1 . app
    <div>
        <pre>
            @ section('sidebar')
            @ parent

            @ endsection
        </pre>
    </div>
</div>
@endsection

@show

@section('content')
    <p>This is extends('layouts.app'). page 1</p>
@endsection