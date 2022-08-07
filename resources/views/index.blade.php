<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @vite('resources/css/index.css')
    @vite('resources/css/banks/bank-all.css')
    <title>Банки</title>
</head>
<body>

<div class="bank-grid">
    @foreach($banks as $bank)
        <a href="{{route('banks.comments.show', $bank->id)}}" class="banks-card">
            <div class="bank-name-container">
                <h5 class="bank-name">{{$bank->name}}</h5>
            </div>
            <p class="bank-information">{{$bank->common_information}}</p>
            <p class="phone-number">{{$bank->mobile_number}}</p>
        </a>
    @endforeach
</div>

<div class="list-group">
    <div>
        <button id="add_bank_form_open" type="button" class="btn btn-primary btn-lg">Добавить банк</button>
        <form id="add_bank_form">
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                       placeholder="Введите название">
            </div>
            <div class="form-group">
                <label for="inn">ИНН</label>
                <input type="number" class="form-control" id="inn" placeholder="NNNNXXXXXC">
            </div>
            <div class="form-group">
                <label for="info">Общая информация</label>
                <textarea name="common-information" class="form-control" id="info"
                          placeholder="Введите общую информацию о компании"></textarea>
            </div>
            <div class="form-group">
                <label for="address">Генеральный директор</label>
                <input type="text" class="form-control" id="general_director" placeholder="Введите имя">
            </div>
            <div class="form-group">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" id="address" placeholder="Введите адрес">
            </div>
            <div class="form-group">
                <label for="phone">Номер телефона</label>
                <input type="number" class="form-control" id="phone"
                       pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                       placeholder="+7(___)___-__-__"/>
            </div>
            <button type="button" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@vite('resources/js/bank/bank.js')
</body>
</html>
