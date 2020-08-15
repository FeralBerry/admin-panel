/** Подтверждение удаления **/
$('.delete').click(function () {
    var res = confirm('Подтвердите дейсвие');
    if(!res) return false;
});
/** Редактирование заказа **/
$('.redact').click(function () {
    var res = confirm('Вы можете изменить только коментарий');
    return false;
});
/** Подтверждение удаления заказа из БД **/
$('.deleted').click(function () {
    var res = confirm('Подтвердите действие');
    if(!res) {
        var ress = confirm('Вы удалите запись из БД');
        if (!ress) return false;
    }
    if (!res) return false;
});
/** Активное меню **/
$('.sidebar-menu a').each(function(){
    var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if(link === location ){
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }
});
/** KCEditor **/
$('#editor1').ckeditor();
/** reset-filter **/
$('#reset-filter').click(function(){
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});
/** Выбор категории **/
$('#add').on('submit', function () {
    if(!isNumber($('#parent_id').val())){
        alert('Выберите категорию');
        return false;
    }
});
function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

