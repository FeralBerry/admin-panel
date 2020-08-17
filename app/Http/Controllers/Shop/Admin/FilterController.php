<?php

namespace App\Http\Controllers\Shop\Admin;
use App\Http\Requests\BlogGroupFilterAddRequest;
use App\Http\Requests\BlogAttrsFilterAddRequest;
use App\Http\Controllers\Shop\Admin\AdminBaseController;
use App\Repositories\Admin\FilterAttrsRepository;
use App\Repositories\Admin\FilterGroupRepository;
use App\Models\Admin\AttributeGroup;
use App\Models\Admin\AttributeValue;
use Illuminate\Http\Request;
use MetaTag;

class FilterController extends AdminBaseController
{
    private $filterGroupRepository;
    private $filterAttrsRepository;
    public function __construct(FilterGroupRepository $filterGroupRepository, FilterAttrsRepository $filterAttrsRepository){
        parent::__construct();
        $this->filterGroupRepository = $filterGroupRepository;
        $this->filterAttrsRepository = $filterAttrsRepository;

    }
    /** Все группы фильтров **/
    public function attributeGroup(){
        $attrs_group = $this->filterGroupRepository->getAllGroupsFilter();
        MetaTag::setTags(['title' => "Группы фильтров"]);
        return view('blog.admin.filter.attribute-group', compact('attrs_group'));
    }
    /** Добавление группы фильтров **/
    public function groupAdd(BlogGroupFilterAddRequest $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $group = (new AttributeGroup())->create($data);
            $group->save();
            if($group){
                return redirect('/admin/filter/group-add-group')
                    ->with(['success' => 'Добавлена новая группа']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка добавления новой группы'])
                    ->withInput();
            }
        } else {
            if($request->isMethod('get')){
                MetaTag::setTags(['title' => "Новая группа фильтров"]);
                return view('blog.admin.filter.group-add-group');
            }
        }
    }
    /** Редактирование фильтра **/
    public  function groupEdit(BlogGroupFilterAddRequest $request, $id){
        if(empty($id)){
            return back()->withErrors(['msg' => "Запись = [{$id}]не найдена"]);
        }
        if($request->isMethod('post')){
            $group = AttributeGroup::find($id);
            $group->title = $request->title;
            $group->save();
            if($group){
                return redirect('/admin/filter/group-filter')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка изменения группы'])
                    ->withInput();
            }
        } else {
            if($request->isMethod('get')){
                $group = $this->filterGroupRepository->getInfoProduct($id);
                MetaTag::setTags(['title' => "Редактирование группы"]);
                return view('blog.admin.filter.group-edit', compact('group'));
            }
        }
    }
    /** удаление фильтра **/
    public function groupDelete($id){
        if(empty($id)){
            return back()->withErrors(['msg' => "Запись = [{$id}]не найдена"]);
        }
        $count = $this->filterAttrsRepository->getCountFilterAttsById($id);
        if($count){
            return back()->withErrors(['msg' => "Удаление не возможно в группе есть атрибуты"]);
        }
        $delete = $this->filterGroupRepository->deleteGroupFilter($id);
        if($delete){
            return back()
                ->with(['success' => 'Успешно удалено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
    public function attributeFilter(){
        $attrs = $this->filterAttrsRepository->getAllAttrsFilter();
        $count = $this->filterGroupRepository->getCountGroupFilter();
        MetaTag::setTags(['title' => "Фильтры"]);
        return view('blog.admin.filter.attribute', compact('attrs', 'count'));
    }
    /** добавление атрибута фильтров **/
    public function attributeAdd(BlogAttrsFilterAddRequest $request){
        if($request->isMethod('post')){
            $uniqueName = $this->filterAttrsRepository->checkUnique($request->value);
            if($uniqueName){
                return redirect('/admin/filter/attrs-add')
                    ->withErrors(['msg' => 'Такой атрибут уже существует'])
                    ->withInput();
            }
            $data = $request->input();
            $attr = (new AttributeValue())->create($data);
            $attr->save();
            if($attr){
                return redirect('/admin/filter/attrs-add')
                    ->with(['success' => 'Добавлен новый атрибут']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохраниния'])
                    ->withInput();
            }
        } else {
            if($request->isMethod('get')) {
                $group = $this->filterGroupRepository->getAllGroupsFilter();
                MetaTag::setTags(['title' => "Новый атрибут для фильтра"]);
                return view('blog.admin.filter.attrs-add', compact('group'));
            }
        }
    }
    /** редактирование атрибута фильтров **/
    public function attrEdit(BlogAttrsFilterAddRequest $request, $id){
        if(empty($id)){
            return back()
                ->withErrors(['msg' => "Запись [{$id}] не найдена"]);
        }
        /** Сохранение изменений редактирования **/
        if($request->isMethod('post')){
            $attr = AttributeValue::find($id);
            $attr->value = $request->value;
            $attr->attr_group_id = $request->attr_group_id;
            $attr->save();
            if($attr){
                return redirect('/admin/filter/attributes-filter')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохраниния'])
                    ->withInput();
            }
        } else {
            /** вывод данных фильтра **/
            if($request->isMethod('get')) {
                $attr = $this->filterAttrsRepository->getInfoProduct($id);
                $group = $this->filterGroupRepository->getAllGroupsFilter();
                MetaTag::setTags(['title' => "Редактирование атрибута фильтров"]);
                return view('blog.admin.filter.attr-edit', compact('group', 'attr'));
            }
        }
    }
    /** удаление атрибута фильтров **/
    public function attrDelete($id){
        if(empty($id)){
            return back()
                ->withErrors(['msg' => "Запись [{$id}] не найдена"]);
        }
        $delete = $this->filterAttrsRepository->deleteAttrFilter($id);
        if($delete){
            return back()
                ->with(['success' => "Удалено"]);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
