<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Банки</title>
</head>
<body>
    <div>
        @foreach($banks as $bank)
            <div>{{$bank->id}}</div>
            <div>{{$bank->name}}</div>
            <div>{{$bank->inn}}</div>
            <div>{{$bank->common_information}}</div>
            <div>{{$bank->address}}</div>
            <div>{{$bank->mobile_number}}</div>
        @endforeach
    </div>
</body>
</html>
