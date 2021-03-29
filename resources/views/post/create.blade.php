<x-guest-layout>
    <div class="container-fluid">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                Создать
            </h2>

        <form method="post" action="{{ route('post.store') }}">
            @include('post.form')
            <input type="hidden" name="user_id" value="{{ Auth()->id ?? 1 }}">
            <br>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>

</x-guest-layout>
