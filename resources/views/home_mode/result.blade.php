<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
        <title>"{{$keyword}}"の結果</title>
        @vite([
            'resources/css/app.css',
            'resources/css/home_mode/home_mode.css',
            'resources/css/home_mode/result.css',
            'resources/css/home_mode/article_item.css',
            'resources/css/home_mode/pagination.css',
            'resources/css/home_mode/previous_page_link.css',
            'resources/js/home_mode/article_item.js',
            ])
    </head>

    <body>
        <main>
            <div class="head_container">
                <h2>「{{ $keyword }}」 ({{ $target }})</h2>
                <p> {{ $trivia->count() }}件ヒット </p>
            </div>
            @foreach($trivia as $trivium)
                @component('components.article_item', ['trivium' => $trivium])
                @endcomponent
            @endforeach
            {{ $trivia->links('vendor.pagination.bootstrap-4') }}

        @component('components.previous_page_link', ['previousPageUrl' => $previousPageUrl])

        @endcomponent
        </main>
</html>
