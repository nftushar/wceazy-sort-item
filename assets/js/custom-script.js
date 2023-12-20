jQuery(document).ready(function ($) {
    $("#sortable-wrapper").sortable({
        update: function (event, ui) {
            updateSequenceOrder();
        }
    });


    $("#save-sequence-order").click(function () {
        updateSequenceOrder();

        const widgetOrder = [];
        const widgetsEls = document.querySelectorAll('#sortable-wrapper .wceazy_product_filter_field_group');
        widgetsEls.forEach((el, index) => {
            if(el.dataset.widget){
                widgetOrder[index] = el.dataset.widget;
            }
        });

        $.ajax({
            type: "POST",
            url: plugin_script_object.plugin_script_ajax_url,
            data: {
                action: 'widgets_order', widgets_order: widgetOrder,
            },
            success: function (response) {
                console.log(response);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error: " + textStatus, errorThrown);
                alert('Failed to save sequence order. Please check the console for details.');
            }
        });
    });

    function updateSequenceOrder() {
        var formData = $("#sortable-wrapper .wceazy_product_filter_field_group").map(function () {
            return $(this).find('.sequence-item').data("sequence-id");
        }).get();

        $("#sequence_order").val(JSON.stringify(formData));
    }
});