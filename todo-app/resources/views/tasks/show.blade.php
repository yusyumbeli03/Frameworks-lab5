@extends('layouts.app')

@section('title', $task['title'])

@section('content')
    <x-task :task="$task" />
@endsection