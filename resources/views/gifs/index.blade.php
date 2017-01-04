@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <router-link to="/" class="list-group-item ">Home</router-link>
                <router-link to="/foo" class="list-group-item ">Foo</router-link>
                <router-link to="/bar" class="list-group-item ">Bar</router-link>
                <router-link to="/rooms" class="list-group-item ">Rooms</router-link>
            </div>
        </div>

        <router-view class="view"></router-view>
    </div>
@endsection