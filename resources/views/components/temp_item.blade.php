<div class="article_item_container">
    <a href="{{ route('temp_edit', ['id' => $trivium->id]) }}" class="trivium_link">
        <div class="trivium_unit">
            <div class="item_title">
                @if (empty(trim($trivium->title)))
                    <h3>タイトルなし</h3>
                @else
                    <h3>{{ $trivium->title }}</h3>
                @endif
            </div>
            <div class="item_summary">
                @if (empty(trim($trivium->summary)))
                    <p>{{ Str::limit($trivium->detail, 300) }}</p>
                @else
                    <p>{{ Str::limit($trivium->summary, 300) }}</p>
                @endif
            </div>
            <div class="item_footer">
                <p>{{ $trivium->updated_at }}</p>
            </div>
        </div>
    </a>
    @component('components.delete_button')
        @slot('route', 'temp_delete')
        @slot('id', $trivium->id)
    @endcomponent
</div>
