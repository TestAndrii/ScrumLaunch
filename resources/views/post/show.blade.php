<x-guest-layout>

    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                {{ $post->title }}
            </h2>

            @include('post.form')

            <br>
            <a href="{{ route('post.edit',$post) }}" class="btn btn-success">Редактировать</a>
            <form action="{{ route('post.destroy',$post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Удалить</button>
            </form>
            <br>

            <div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td>Автор</td>
                        <td class="text-center">Комментарии:</td>
                    </tr>
                @foreach($post->comments as $comment)
                <tr>
                    <td>{{  $comment->user->name }}</td>
                    <td><a href="{{ route('comment.show', $comment) }}">{{ $comment->body }}</a></td>
                </tr>
                @endforeach
                </table>

                <form action="{{ route('comment.create', $post) }}" method="POST" class="btn btn-success">
                    @csrf
                    <button type="submit" class="btn btn-success">Создать комментарий</button>
                </form>
            </div>
    </div>

</x-guest-layout>
