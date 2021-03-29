<x-guest-layout>
    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                Создать комментарий к посту: "{{ $post->title }}"
            </h2>

        <form method="post" action="{{ route('comment.store') }}">
            @include('comment.form')
            <input type="hidden" name="user_id" value="{{ $post->user->id }}">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <br>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>

</x-guest-layout>
