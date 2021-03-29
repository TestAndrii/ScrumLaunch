<x-guest-layout>
    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                Комментарии
            </h2>


        <div>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>Пост</th>
                    <th>Автор</th>
                    <th>Комментарий</th>
                </tr>
            @foreach ($comments as $comment)
            <tr>
                <td><a href="{{ route('post.show',$comment->post) }}">{{ $comment->post->title }}</a></td>
                <td>{{ $comment->user->name }}</td>
                <td><a href="{{ route('comment.show', $comment) }}">
                    {{ $comment->body }}
                    </a>
                </td>
            </tr>
            @endforeach
            </table>
            {{ $comments->links() }}
        </div>
    </div>
    </x-guest-layout>
