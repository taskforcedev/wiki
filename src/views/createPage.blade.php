@extends($layout)

@section('content')
    <h1>{{ $sitename }} - Create Wiki Page - {{ $page }}</h1>

    <form action="{{ route('wiki.page.create') }}" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $page }}" />
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input class="form-control" type="text" name="url" value="{{ $page }}" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" rows="20"></textarea>
        </div>

        {{ csrf_field() }}

        <input type="submit" value="Create Page" />
    </form>
@endsection
