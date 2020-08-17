<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Последние записи</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widger="collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widger="remove">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Покупатель</th>
                        <th>Статус</th>
                        <th>Сумма</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($last_orders as $order)
                    <tr>
                        <td><a href="{{ route('shop.admin.orders.edit', $order->id) }}">{{ $order->id }}</a></td>
                        <td><a href="{{ route('shop.admin.orders.edit', $order->id) }}">{{ ucfirst($order->name) }}</a></td>
                        <td><span class="label label-success">
                                @if($order->status == 0)Новый@endif
                                @if($order->status == 1)Завершен@endif
                                @if($order->status == 2)<b style="color: red">Удален</b>@endif
                            </span>
                        </td>
                        <td>
                            <div class="sparkbar" data-color="#10a65a" data-height="10">{{ $order->sum }}</div>
                        </td>
                    </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="box-footer clearfix">
        <a href="{{ route('shop.admin.orders.index') }}" class="btn btn-sm btn-info btn-flat pull-left">Все заказы</a>
    </div>
</div>
</div>
