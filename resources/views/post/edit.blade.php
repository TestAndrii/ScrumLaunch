<x-guest-layout>
    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                Редактировать
            </h2>

        <form method="post" action="{{ route('post.update', ['post'=>$post]) }}">
            @method('PATCH')
            @include('post.form')
            <br>
            <div class="float-right form-group">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>

</x-guest-layout>
