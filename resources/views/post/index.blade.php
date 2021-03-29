<x-guest-layout>
<div class="container-fluid">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Посты
        </h2>


    <div>
        <a href="{{ route('post.create') }}" class="btn btn-success">Создать пост</a>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Автор</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Комментарии</th>
            </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->title }}</td>
            <td><a href="{{ route('post.show', $post) }}">
                {{ $post->description }}
                </a>
            </td>
            <td>{{ count($post->comments) }}</td>
        </tr>
        @endforeach
        </table>
        {{ $posts->links() }}
    </div>
</div>
</x-guest-layout>
