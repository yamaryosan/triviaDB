<a href="{{ route('show', ['id' => $trivium->id]) }}" class="trivium_link">
    <div class="trivium_unit">
        <div class="item_title">
            <h3>{{ $trivium->title }}</h3>
        </div>
        <div class="item_summary">
            @if ($trivium->summary !== 'EMPTY')
                <p>{{ $trivium->summary }}</p>
            @endif
        </div>
        <div class="item_footer">
            <p>{{ $trivium->updated_at }}</p>
        </div>
    </div>
</a>