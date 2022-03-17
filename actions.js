$('document').ready(function(){
    $('.option-size').hide();
    $('.option-dimensions').hide();
    $('.option-weight').hide();
    $('#size').prop("required", true);
    $('#height').prop("required", true);
    $('#width').prop("required", true);
    $('#length').prop("required", true);
    $('#weight').prop("required", true);


 $('#productType').change(function(){
     if($('#productType').val()===''){
        $('#size').prop("required", true);
        $('#height').prop("required", true);
        $('#width').prop("required", true);
        $('#length').prop("required", true);
        $('#weight').prop("required", true);

        $('.option-size').hide();
        $('.option-dimensions').hide();
        $('.option-weight').hide();


     }
     if($('#productType').val()==='DVD'){
        $('.option-size').show();
        $('.option-dimensions').hide();
        $('.option-weight').hide();

        $('#size').prop("required", true);
        $('#height').prop("required", false);
        $('#width').prop("required", false);
        $('#length').prop("required", false);
        $('#weight').prop("required", false);
     }
     if($('#productType').val()==='Book'){
        $('.option-size').hide();
        $('.option-dimensions').hide();
        $('.option-weight').show();

        $('#size').prop("required", false);
        $('#height').prop("required", false);
        $('#width').prop("required", false);
        $('#length').prop("required", false);
        $('#weight').prop("required", true);
     }
     if($('#productType').val()==='Furniture'){
        $('.option-size').hide();
        $('.option-dimensions').show();
        $('.option-weight').hide();

        $('#size').prop("required", false);
        $('#height').prop("required", true);
        $('#width').prop("required", true);
        $('#length').prop("required", true);
        $('#weight').prop("required", false);
     }
 })
});