<?php


namespace App\Repositories\Admin;

use App\Models\Admin\Currency;
use App\Models\Admin\Currency as Model;
use App\Repositories\CoreRepository;

class CurrencyRepository extends CoreRepository
{
    public function __construct(){
        parent::__construct();
    }

    protected function getModelClass(){
        return Model::class;
    }
    public function getAllCurrency(){
        $curr = $this->startConditions()
            ->all();
        return $curr;
    }
    /** Смена базовой валюты **/
    public function switchBaseCurr(){
        $id = \DB::table('currencies')
            ->where('base', '=', '1')
            ->get()
            ->first();
        if($id){
            $id = $id->id;
            $new = Currency::find($id);
            $new->base = '0';
            $new->save();
        } else {
            return back()
                ->withErrors(['msg' => "Ошибка базовой валюты еще нет"])
                ->withInput();
        }
    }
    /** получение информации для редактирования валюты **/
    public function getInfoCurrency($id){
        $cur = $this->startConditions()
            ->find($id);
        return $cur;
    }
    /** Удаление валюты **/
    public function deleteCurrency($id){
        $delete = $this->startConditions()
            ->where('id', $id)
            ->forceDelete();
        return $delete;
    }
}
