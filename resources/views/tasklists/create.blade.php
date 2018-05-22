@extends('layouts.app')

@section('content')

<h1>作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('作成') !!}

    {!! Form::close() !!}
@endsection