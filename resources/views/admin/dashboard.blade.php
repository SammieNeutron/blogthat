@extends('layouts.app')

@section('content')


        @if(Auth::user()->admin)
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        POSTED
                    </div>
                    <div class="panel-body">
                        {{ $post_count }}
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        TRASHED POST
                    </div>
                    <div class="panel-body">
                        {{ $trashed_count }}
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        USERS
                    </div>
                    <div class="panel-body">
                        {{ $users_count }}
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        CATEGORIES
                    </div>
                    <div class="panel-body">
                        {{ $categories_count }}
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        TRASHED USERS
                    </div>
                    <div class="panel-body">
                        {{ $trashed_users }}
                    </div>
                </div>
            </div>
        @endif
@endsection
