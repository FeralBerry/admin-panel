@extends('layouts.app_admin')
@section('content')
    <section class="content-header">
        @component('shop.admin.components.breadcrumb')
            @slot('title') Список товаров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Список товаров @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Категория</td>
                                        <td>Наименование</td>
                                        <td>Цена</td>
                                        <td>Статус</td>
                                        <td>Действия</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($getAllProducts as $product)
                                    <tr @if($product->status == 0) style="color: red"; @endif>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->cat }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->status ? 'On' : 'Off' }}</td>
                                        <td>
                                            <a href="{{ route('shop.admin.products.edit', $product->id) }}" title="Редактировать">
                                                <i class="fa fa-fw fa-eye"></i>
                                            </a>
                                            @if($product->status == 0)
                                                <a class="delete" href="{{ route('shop.admin.products.returnstatus', $product->id) }}" title="Перевести статус в On">
                                                    <i class="fa fa-fw fa-refresh"></i>
                                                </a>
                                            @else
                                                <a class="delete" href="{{ route('shop.admin.products.deletestatus', $product->id) }}" title="Перевести статус в Off">
                                                    <i class="fa fa-fw fa-close"></i>
                                                </a>
                                            @endif
                                            @if($product)
                                                <a class="delete" href="{{ route('shop.admin.products.deleteproduct', $product->id) }}" title="Удалить из БД">
                                                    <i class="fa fa-fw fa-close text-danger"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p>{{ count($getAllProducts) }} продуктов из {{ $count }}</p>
                            @if($getAllProducts->total() > $getAllProducts->count())
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                {{ $getAllProducts->links() }}
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
