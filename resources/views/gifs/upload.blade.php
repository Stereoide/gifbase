@extends('layouts.default')

@section('content')
    <form method="post" action="{{ route('gif.store') }}" class="dropzone" id="gifbase-upload" style="border: solid 1px #000; min-height: 400px;"></form>
@endsection