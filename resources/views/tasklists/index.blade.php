@extends('layouts.app')

@section('content')

  <h1>タスク一覧</h1>

    @if (count($tasklists) > 0)
         <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
              </tr>
            </thead>
            <tbody>
      
            @foreach ($tasklists as $tasklist)
             <tr>
                <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->status }} >  {{ $tasklist->content }}</td>
                <td>{{ $tasklist->title }}</td>
                        <td>{{ $tasklist->content }}</td>
             </tr>
            @endforeach
    @endif
    
       {!! link_to_route('tasklists.create', '作成ページ', null, ['class' => 'btn btn-primary']) !!}

@endsection