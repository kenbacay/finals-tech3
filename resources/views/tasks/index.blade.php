@extends('layouts.app')

@section('content')
    <h1>Task List</h1><p class="muted">All tasks ordered by task date.</p>
    <section class="card">
        @foreach ($tasks as $task)
            <div class="task"><span><strong>{{ $task->title }}</strong><br><span class="date">{{ $task->task_date->format('F d, Y') }}</span></span><span class="badge">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</span></div>
        @endforeach
    </section>
@endsection
