@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{$user->get_sale_hotels}}

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    @isset($user->get_sale_hotels)
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Номер замовлення</th>
      <th scope="col">Назва готелю</th>
      <th scope="col">Дата заїзду</th>
      <th scope="col">Дата виїзду</th>
      <th scope="col">Кількість дорослих осіб</th>
      <th scope="col">Кількість дітей</th>
      <th scope="col">Статус</th>
    </tr>
  </thead>
    <tbody>
        @foreach ($user->get_sale_hotels as $users)
        <tr>
          <th scope="row">{{$users->id}}</th>
          <td>{{$users->get_hotels->name}}</td>
          <td>{{$users->date_from}}</td>
          <td>{{$users->date_to}}</td>
          <td>{{$users->guest}}</td>
          <td>{{$users->children}}</td>
          <td>{{$users->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    @endisset
</div>
@endsection
