@csrf
<div class="<div class="form-group">
    <label for="my-input">Заголовок:</label>
    <input class="form-control" type="text" name="title" value="{{ $post->title ?? '' }}" request>
</div>

<div class="<div class="form-group">
    <label for="my-input">Описание:</label>
    <input class="form-control" type="text" name="description" value="{{ $post->description ?? '' }}" request>
</div>

</div>
