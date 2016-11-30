jQuery(document).ready(function($){
    console.log("floatingLabel charged");
    if( $('.floatingLabels').length > 0 ) floatLabels();

    function floatLabels() {
        var inputFields = $('.forFloat');
        inputFields.each(function(){
            var singleInput = $(this);
            //check if user is filling one of the form fields
            checkVal(singleInput);
            singleInput.on('change keyup', function(){
                checkVal(singleInput);
            });
        });
    }

    function checkVal(inputField) {
        ( inputField.val() == '' ) ? inputField.parent().prev('.fLabel').removeClass('float') : inputField.parent().prev('.fLabel').addClass('float');
    }
});
