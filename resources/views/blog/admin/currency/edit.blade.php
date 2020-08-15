@extends('layouts.app_admin')
@section('content')
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Редактирование валюты @endslot
            @slot('parent') Главная @endslot
            @slot('currency') Список валют @endslot
            @slot('active') Редактирование валюты @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form action="{{ url('/admin/currency/edit', $currency->id) }}" method="post" data-toggle="validator">
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование валюты</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование валюты" value="{{ $currency->title, old('title') }}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="code">Код ватюты</label>
                                <input type="text" name="code" class="form-control" id="code" value="{{ $currency->code, old('code') }}" placeholder="Код ватюты" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="symbol_left">Символ слева</label>
                                <input type="text" name="symbol_left" class="form-control" id="symbol_left" value="{{ $currency->symbol_left, old('symbol_left') }}" placeholder="Символ слева">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="symbol_right">Символ справа</label>
                                <input type="text" name="symbol_right" class="form-control" id="symbol_right" value="{{ $currency->symbol_right, old('symbol_right') }}" placeholder="Символ справа">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="value">Значение</label>
                                <input type="text" name="value" class="form-control" id="value" value="{{ $currency->value, old('value') }}" placeholder="Значение" title="если это базовая валюта поставте 1, по курс к базовой валюте" required data-error="Допускаются цифры и десятичная точка" pattern="^(0-9.){1.}">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="value">
                                    <input type="checkbox" name="true" @if($currency->base) checked @endif>
                                    Базовая валюта
                                </label>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
