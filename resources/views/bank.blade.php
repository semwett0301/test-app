<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @vite('resources/css/index.css')
    @vite('resources/css/comments/comments-by-bank.css')
    <title>{{$chosen_bank->name}}</title>
</head>
<body>

<div>
    @foreach($comments as $comment)
        <p class="bank-information">{{$comment->topic}}</p>
        <div class="bank-name-container">
            <h5 class="bank-name">{{$comment->content}}</h5>
        </div>
    @endforeach
</div>

<div class="list-group">
    <div>
        <button id="add_bank_form_open" type="button" class="btn btn-primary btn-lg">Добавить комментарий</button>
        <form id="add_bank_form">
            <div class="form-group">
                <label for="info">Содержание</label>
                <textarea name="common-information" class="form-control" id="info"
                          placeholder="Введите комментарий"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@vite('resources/js/comment/comment.js')
</body>
</html>
