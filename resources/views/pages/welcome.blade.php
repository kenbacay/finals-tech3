@extends('layouts.app')

@section('content')
    <p class="date">{{ now()->format('F d, Y') }}</p>
    <h1>Welcome back</h1>
    <p class="muted">Here are your tasks for today.</p>
    <section class="card"><h2>Today's Tasks</h2>
        @forelse ($todayTasks as $task)
            <div class="task"><span>{{ $task->title }}</span><span class="badge">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</span></div>
        @empty
            <p class="muted">You have no tasks scheduled for today.</p>
        @endforelse
    </section>
@endsection
