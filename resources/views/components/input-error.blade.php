@props(['messages' => []])

@if (!empty($messages))
    <ul class="mt-1 mb-0 small text-danger">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
