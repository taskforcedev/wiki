@extends($layout)

@section('content')
    <h1>{{ $sitename }} - Create Wiki Page - {{ $page }}</h1>

    <form action="{{ route('wiki.page.create') }}" method="post">
        <label>Title</label>
        <input type="text" name="title" />

        <label>URL</label>
        <input type="text" name="url" value="{{ $page }}" />

        <label>Content</label>
        <textarea name="content">
        </textarea>
    </form>
@endsection
