@extends('layouts.app')

@section('content')

    <h1>タスクリスト新規作成ページ</h1>
    
    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
    
        {!! Form::label('content','タスクリスト:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}

@endsection