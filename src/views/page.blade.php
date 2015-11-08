@extends($layout)

@section('content')
    <h1>{{ $page->title }}</h1>

    {{ $page->content }}
@endsection
