var checkboxAll = $('#checkbox-all');
var checkSubmitButton = $('.btn-check-submit');
checkboxAll.change(function () {
    var isCheckAll = $(this).prop('checked');
    $('input[name="objectIDs[]"]').prop('checked',isCheckAll);
    renderSubmitButton();
});

function checkboxCheck(){
    var isCheckAll = $('input[name="objectIDs[]"]').length === $('input[name="objectIDs[]"]:checked').length;
    checkboxAll.prop('checked',isCheckAll);
    renderSubmitButton();
}

function renderSubmitButton(){
    var checkedCount = $('input[name="objectIDs[]"]:checked').length;
    if(checkedCount > 0){
        checkSubmitButton.attr('disabled',false);//set attribute
    }
    else{
        checkSubmitButton.attr('disabled',true);
    }
}