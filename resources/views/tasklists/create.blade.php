@extends('layouts.app')

@section('content')
@if (Auth::id() == $tasklist->user_id)
    <h1>タスクリスト新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" >
            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
                
                <div class="form-group">
                    {!! Form::label('status','状況:') !!}
                    {!! Form::text('status', null, ['class' =>'form-control']) !!}
                    
                </div>
                
                <div class="form-group">
                    {!! Form::label('content','タスクリスト:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    
                    
                </div>
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}


        </div>
        

        
        
        
    </div>
@else
{!! redirect('/'); !!}
@endif    
    
        
        
        
       
        
        

@endsection