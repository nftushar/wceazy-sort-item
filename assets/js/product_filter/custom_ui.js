jQuery(document).ready(function ($) {
    $("#sortable-wrapper").sortable({
        update: function (event, ui) {
            updateSequenceOrder();
        }
    });
  
    function updateSequenceOrder() {
        var formData = $("#sortable-wrapper .wceazy_product_filter_field_group").map(function () {
            return $(this).find('.sequence-item').data("sequence-id");
        }).get();

        $("#sequence_order").val(JSON.stringify(formData));
    }
});