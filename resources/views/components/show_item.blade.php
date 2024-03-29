<div class="trivium_unit">
    <div class="item_title">
        <h2>{{ $trivium->title }}</h2>
    </div>
    <div class="item_summary">
        <h3>総論</h3>
        <p>{!! nl2br(e($trivium->summary)) !!}</p>
    </div>
    <div class="item_detail">
        <h3>詳細</h3>
        <p>{!! nl2br(e($trivium->detail)) !!}</p>
    </div>
    <div class="item_footer">
        <p>{{ $trivium->updated_at }}</p>
    </div>
    <a href="{{ route('edit', ['id' => $trivium->id]) }}" class="edit_btn">編集</a>
</div>
