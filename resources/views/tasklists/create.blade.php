@extends('layouts.app')

@section('content')

<h1>作成ページ</h1>
  <div class="row">
        <div class="col-xs-12">
        <div class="col-sm-offset-2 col-sm-8">
        <div class="col-md-offset-2 col-sm-8">
        <div class="col-lg-offset-2 col-sm-6">

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

    <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
     </div>
        {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div></div></div></div>
</div>
@endsection