@extends('site.layouts.app')

@section('title', 'Blog - Epbox Engineering')

@section('content')
<div class="pt-32 pb-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Blog</h1>
            <p class="text-xl text-gray-300">Coming Soon - Blog content will be available here</p>
        </div>

        <div class="text-center">
            <a href="{{ route('site.home') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">
                Back to Home
            </a>
        </div>
    </div>
</div>
@endsection