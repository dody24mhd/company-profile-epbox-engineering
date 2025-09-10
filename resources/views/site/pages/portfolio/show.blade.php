@extends('site.layouts.app')
@section('title', $project->title)
@section('content')
<section class="container" style="padding:60px 0">
  <h1>{{ $project->title }}</h1>
  <p style="color:#cbd6ff">{{ $project->categories }}</p>
  <article>{!! nl2br(e($project->description)) !!}</article>
</section>
@endsection

