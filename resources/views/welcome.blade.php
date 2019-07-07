@extends('layouts.app')

@section('content')

@if (Auth::check())
 
    <?php $user = Auth::user(); ?>
    <div class="text-center">
    <h3>ようこそ、{{ $user->name }} さん。</h3>
    {!! link_to_route('tasks.index', 'タスク一覧を表示する', null, ['class' => 'btn btn-lg btn-default']) !!}
    </div>



    
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>It's your Tasklist</h1>
            <p>{!! link_to_route('login.get', 'Login', null, ['class' => 'btn btn-lg btn-primary']) !!}
               {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}</p>
        </div>
    </div>
@endif

@endsection