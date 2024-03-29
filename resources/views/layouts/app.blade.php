<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
        @section('title')
        <title>日進月報</title>
        @show
        @vite([
            'resources/css/app.css',
            'resources/css/header.css',
            'resources/css/footer.css',
            'resources/css/content.css',
            'resources/css/sidebar.css',
            'resources/css/pseudo/form.css',
            'resources/css/home_mode/import_succeed.css',
            'resources/css/workspace_mode/article_item.css',
            'resources/css/workspace_mode/show_item.css',
            'resources/css/home_mode/pagination.css',
            'resources/js/home_mode/import_succeed_message_hide.js',
            ])
    </head>
    <body>
        @include('layouts.header')
        <main>
            <div class="content">
                @yield('content')
            </div>
            @section('sidebar')
            @show
        </main>
        @include('layouts.footer')
    </body>
</html>
