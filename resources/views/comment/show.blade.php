<x-guest-layout>

    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                {{ $comment->body }}
            </h2>

            @include('comment.form')

            <br>
            <a href="{{ route('comment.edit',$comment) }}" class="btn btn-success">Редактировать</a>
            <form action="{{ route('comment.destroy',$comment) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">Удалить</button>
            </form>
            <br>

    </div>

</x-guest-layout>
