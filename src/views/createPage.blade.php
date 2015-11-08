@extends($layout)

@section('content')
    <h1>{{ $sitename }} - Create Wiki Page - {{ $page }}</h1>

    <form action="{{ route('wiki.page.create') }}" method="post">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" />

        <label for="url">URL</label>
        <input class="form-control" type="text" name="url" value="{{ $page }}" />

        <label for="content">Content</label>
        <textarea class="form-control" name="content" rows="20">
        </textarea>
    </form>
@endsection
