<?php

namespace App\Http\Controllers\Shop\Admin;

use App\Http\Controllers\Shop\Admin\AdminBaseController;
use App\Models\Admin\Currency;
use App\Repositories\Admin\CurrencyRepository;
use App\Http\Requests\AdminCurrencyAddRequest;
use Illuminate\Http\Request;
use MetaTag;

class CurrencyController extends AdminBaseController
{
    private $currencyRepository;
    public function __construct(CurrencyRepository $currencyRepository){
        parent::__construct();
        $this->currencyRepository = $currencyRepository;
    }
    public function index(){
        $currency = $this->currencyRepository->getAllCurrency();
        MetaTag::setTags(['title' => "Валюта магазина"]);
        return view('blog.admin.currency.index', compact('currency'));
    }
    public function add(AdminCurrencyAddRequest $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $currency = (new Currency())->create($data);
            if($request->base == 'on'){
                $this->currencyRepository->switchBaseCurr();
                $currency->base = '1';
            }
            $currency->save();
            if($currency){
                return redirect(url('/admin/currency/add'))
                    ->with(['success' => 'Успешно добавлена']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка добавления'])
                    ->withInput();
            }
        } else {
            if($request->isMethod('get')){
                MetaTag::setTags(['title' => "Добавление валюты"]);
                return view('blog.admin.currency.add');
            }
        }
    }
    public function edit(AdminCurrencyAddRequest $request, $id){
        if(empty($id)){
            return back()
                ->withErrors(['msg' => "Запись [{$id}] не найдена"]);
        }
        if($request->isMethod('post')){
            $currency = Currency::find($id);
            $currency->title = $request->title;
            $currency->code = $request->code;
            $currency->symbol_left = $request->symbol_left;
            $currency->symbol_right = $request->symbol_right;
            $currency->value = $request->value;
            $currency->base = $request->base ? '1' : '0';
            $currency->save();
            if($currency){
                return redirect( url('/admin/currency/edit', $id))
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохранения'])
                    ->withInput();
            }
        } else {
            if($request->isMethod('get')){
                $currency = $this->currencyRepository->getInfoCurrency($id);
                MetaTag::setTags(['title' => "Редактирование валюты"]);
                return view('blog.admin.currency.edit', compact('currency'));
            }
        }
    }
    public function delete($id){
        if(empty($id)){
            return back()
                ->withErrors(['msg' => "Запись [{$id}] не найдена"]);
        }
        $delete = $this->currencyRepository->deleteCurrency($id);
        if($delete){
            return back()
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
