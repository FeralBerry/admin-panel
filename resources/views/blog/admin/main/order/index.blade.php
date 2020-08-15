@extends('layouts.app_admin')
@section('content')
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Панель управления @endslot
            @slot('parent') Главная @endslot
            @slot('active') Список заказов @endslot
        @endcomponent
    </section>
{{--    <section class="content-header">--}}
{{--        <h1>Список заказов</h1>--}}
{{--        <ol class="breadcrumb">--}}
{{--            <li><a href="/"><i class="fa fa-dashboard"></i>Главная</a></li>--}}
{{--            <li class="active">Список заказов</li>--}}
{{--        </ol>--}}
{{--    </section>--}}
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Покупатель</th>
                                        <th>Статус</th>
                                        <th>Сумма</th>
                                        <th>Дата создания</th>
                                        <th>Дата изменения</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($paginator as $order)
                                    @php $class = $order->status ? 'success' : ''@endphp
                                    <tr class="{{ $class }}">
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>
                                            @if($order->status == 0) Новый @endif
                                            @if($order->status == 1) Завершен @endif
                                            @if($order->status == 2)<b style="color: #cd1a0a"> Удален </b>@endif
                                        </td>
                                        <td>{{ $order->sum }} {{ $order->currency }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->updated_at }}</td>
                                        {{--<td><a href="/"><i class="fa fa-fv fa-eye"></i></a></td>--}}
                                        <td>
                                            <a href="{{ route('blog.admin.orders.edit', $order->id) }}" title="редактирование заказа"><i class="fa fa-fv fa-eye"></i></a>
                                            <a href="{{ route('blog.admin.orders.forcedestroy', $order->id) }}" title="удалить из БД"><i class="fa fa-fv fa-close text-danger deleted"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="3"><h2>Заказов нет</h2></td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p>{{ count($paginator) }} заказа(ов) из {{ $countOrders }}</p>
                        @if($paginator->total() >$paginator->count())
                            <br>
                            <div class="row justify-content-center">
                                <div class="vol-md-11">
                                    <div class="card">
                                        <div class="card-body">
                                            {{ $paginator->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
