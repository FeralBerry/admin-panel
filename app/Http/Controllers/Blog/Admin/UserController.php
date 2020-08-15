<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserEditRequest;
use App\Models\UserRole;
use App\Models\Admin\User;
use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use MetaTag;
use Validator;

class UserController extends AdminBaseController
{
    private $userRepository;
    public function __construct(UserRepository $userRepository) {
        parent::__construct();
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        $perpage = 8;
        $countUsers = MainRepository::getCountUsers();
        $paginator = $this->userRepository->getAllUsers($perpage);
        \MetaTag::setTags(['title' => "Список пользователей"]);
        return view('blog.admin.user.index', compact('countUsers','paginator'));
    }
    public function create()
    {
        \MetaTag::setTags(['title' => "Добавление пользователей"]);
        return view('blog.admin.user.add');
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        if(!$user){
            return back()
                ->withErrors(['msg' => 'Ошибка создания'])
                ->withInput();
        } else {
            $role = UserRole::create([
                'user_id' => $user->id,
                'role_id' => (int)$request['role'],
            ]);
            if(!$role){
                return back()
                    ->withErrors(['msg' => 'Ошибка создания'])
                    ->withInput();
            } else {
                return redirect()
                    ->route('blog.admin.users.index')
                    ->with(['success' => 'Успешно сохранено']);
            }
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $perpage =10;
        $item = $this->userRepository->getId($id);
        if(empty($item)){
            abort(404);
        }
        $orders = $this->userRepository->getUserOrders($id, $perpage);
        $role = $this->userRepository->getUserRole($id);
        $count = $this->userRepository->getCountOrdersBag($id);
        $count_orders = $this->userRepository->getCountOrder($id, $perpage);
        MetaTag::setTags(['title' => "Редактирование пользователя №{$item->id}"]);
        return view('blog.admin.user.edit', compact('item','orders','role','count','count_orders'));
    }
    public function update(AdminUserEditRequest $request, User $user, UserRole $role)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];
        $request['password'] == null ?: $user->password = bcrypt($requust['password']);
        $save = $user->save();
        if(!$save){
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        } else {
            $role->where('user_id',$user->id)
                ->update([
                    'role_id' => (int)$request['role']
                ]);
            return redirect()
                ->route('blog.admin.users.edit', $user->id)
                ->with(['success' => 'Успешно сохранено']);
        }
    }
    public function destroy(User $user)
    {
        $result = $user->forceDelete();
        if($result){
            return redirect()
                ->route('blog.admin.users.index')
                ->with(['success' => "Успешно ".ucfirst($user->name)." удален"]);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
