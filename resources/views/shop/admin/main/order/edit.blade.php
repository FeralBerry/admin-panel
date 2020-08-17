@extends('layouts.app_admin')
@section('content')
    <section class="content-header">
        <h1>
            Редактировать заказ № {{ $item->id }}
            @if(!$order->status)
                <a href="{{ route('shop.admin.orders.change', $item->id) }}/?status=1" class="btn btn-success btn-xs">Одобрить</a>
                <a href="#" class="btn btn-warning btn-xs redact">Редактировать</a>
            @else
                <a href="{{ route('shop.admin.orders.change', $item->id) }}/?status=0" class="btn btn-default btn-xs">Вернуть в работу</a>
            @endif
            <a class="btn btn-xs" href="">
                <form id="delform" method="post" action="{{ route('shop.admin.orders.destroy', $order->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-xs delete">Удалить</button>
                </form>
            </a>
        </h1>
        @component('shop.admin.components.breadcrumb')
            @slot('parent') Главная @endslot
            @slot('order') Заказы @endslot
            @slot('active') Заказ № {{ $item->id }} @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <form action="{{ route('shop.admin.orders.save', $item->id) }}" method="post">
                                @csrf
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Номер заказа</td>
                                            <td>{{ $order->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата заказа</td>
                                            <td>{{ $order->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата изменения</td>
                                            <td>{{ $order->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Количество позиций в заказе</td>
                                            <td>{{ count($order_products) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Сумма</td>
                                            <td>{{ $order->sum }} {{ $order->currency }}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя заказчика</td>
                                            <td>{{ $order->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Статус</td>
                                            <td>{{ $order->status ? "Завершен" : "Новый" }}</td>
                                        </tr>
                                        <tr>
                                            <td>Комментарий</td>
                                            <td><input type="text" value="@if(isset($order->note)){{ $order->note }}@endif" placeholder="@if(!isset($order->note))комментариев нет@endif" name="comment"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="submit" name="submit" class="btn btn-warning" value="Сохранить">
                            </form>
                        </div>
                    </div>
                </div>
                <h3>Детали заказа</h3>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Наименование</td>
                                        <td>Количество</td>
                                        <td>Цена</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $qty = 0 @endphp
                                    @foreach($order_products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->qty, $qty+=$product->qty }}</td>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                    @endforeach
                                        <tr class="active">
                                            <td colspan="1"><b>Итого</b></td>
                                            <td></td>
                                            <td><b>{{ $qty }}</b></td>
                                            <td><b>{{ $order->sum }} {{ $order->currency }}</b></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
