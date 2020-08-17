<?php

namespace App\Http\Controllers\Shop\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminOrderSaveRequest;
use App\Models\Admin\Order;
use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\OrderRepository;
use Illuminate\Http\Request;
use MetaTag;

class OrderController extends AdminBaseController
{
    private $orderRepository;
    public function __construct(OrderRepository $orderRepository){
        parent::__construct();
        $this->orderRepository = $orderRepository;
    }
    public function index()
    {
        $perpage = 10;
        $countOrders = MainRepository::getCountOrders();
        $paginator = $this->orderRepository->getAllOrders($perpage);
        \MetaTag::setTags(['title' => 'Список заказов']);
        return view('blog.admin.main.order.index', compact('countOrders','paginator'));
    }

    public function edit($id){
        $item = $this->orderRepository->getId($id);
        if(empty($item)){
            abort(404);
        }
        $order = $this->orderRepository->getOneOrder($item->id);
        if(empty($order)){
            abort(404);
        }
        $order_products = $this->orderRepository->getAllOrderProductId($item->id);
        \MetaTag::setTags(['title' => "Заказ № {$item->id}"]);
        return view('blog.admin.main.order.edit', compact('item','order','order_products'));
    }
    public function change($id){
        $result = $this->orderRepository->changeStatusOrder($id);
        if($result){
            return redirect()
                ->route('blog.admin.orders.edit', $id)
                ->with(['success' => 'Успешно сохранен']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения']);
        }
    }
    public function destroy($id)
    {
        $st = $this->orderRepository->changeStatusOnDelete($id);
        if($st){
            $result = Order::destroy($id);
            if($result){
                return redirect()
                    ->route('blog.admin.orders.index')
                    ->with(['success' => "Запись id {$id} удалена"]);
            } else {
                return back()->withErrors(['msg' => "Ошибка удаления"]);
            }
        }else {
            return back()->withErrors(['msg' => "Статус не изменился"]);
        }
    }
    public function save(AdminOrderSaveRequest $request, $id){
        $result = $this->orderRepository->saveOrderComment($id);
        if($result){
            return redirect()
                ->route('blog.admin.orders.edit', $id)
                ->with(['success' => 'Успешно сохранен']);
        } else {
            return redirect()
                ->withErrors(['msg' => 'Ошибка сохранения']);
        }
    }
    public function forcedestroy($id){
        if(empty($id)){
            return back()->withErrors(['msg' => 'Запись не найдена']);
        }
        $res = \DB::table('orders')
            ->delete($id);
        if('result'){
            return redirect()
                ->route('blog.admin.orders.index', $id)
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
}
