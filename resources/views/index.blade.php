@extends('layouts.layout')
@section('content')
    <div>
      @forelse ($tasks as $task )
     <div class="container offset-3">
      <li class="list-group-item"> <a href="{{route('tasks.show',['id'=>$task->id])}}"><strong>{{$task->title}}</strong></a></li>
    </div>
    @empty
    <div class="container"> Nema zadataka</div>
      @endforelse
    </div>
@endsection
