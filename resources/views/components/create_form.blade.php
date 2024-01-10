<!-- 雑学項目新規追加フォーム -->

<form class="submit_form" method="POST" data-save-route="{{ route('temp_store') }}" data-submit-route="{{ route('preview') }}">
    @csrf
    <div class="title_container">
        <p>タイトル</p>
        <input type="text" class="title_input" name="title" value="{{ $title }}" required>
    </div>
    <div class="summary_container">
        <p>概要</p>
        <textarea name="summary" class="summary_input" cols="20" rows="5" required>{{ $summary }}</textarea>
    </div>
    <div class="detail_container">
        <p>詳細</p>
        <textarea name="detail" class="detail_input" cols="20" rows="5" required>{{ $detail }}</textarea>
    </div>
    @component('components.button')
        @slot('name', 'save_btn')
        @slot('image', 'paper_and_pen')
        @slot('color', 'green')
    @endcomponent
    @component('components.button')
        @slot('name', 'submit_btn')
        @slot('image', 'plus')
        @slot('color', 'blue')
    @endcomponent
</form>

<!-- 追加失敗時のエラーメッセージ -->
@component('components.error_message')

@endcomponent

<!-- スマホ用エラーメッセージ -->
@component('components.pc_only_message')

@endcomponent
