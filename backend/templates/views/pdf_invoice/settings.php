<?php

$wceazy_pdf_invoice_settings = get_option('wceazy_pdf_invoice_settings', False);
$wceazy_pi_settings = $wceazy_pdf_invoice_settings ? json_decode($wceazy_pdf_invoice_settings, true) : array();


$wceazy_pi_deactivate_invoice = isset($wceazy_pi_settings["deactivate_invoice"]) ? $wceazy_pi_settings["deactivate_invoice"] : "yes";
$wceazy_pi_deactivate_shipping_label = isset($wceazy_pi_settings["deactivate_shipping_label"]) ? $wceazy_pi_settings["deactivate_shipping_label"] : "yes";

$wceazy_pi_shop_name = isset($wceazy_pi_settings["shop_name"]) ? $wceazy_pi_settings["shop_name"] : get_option( 'blogname' );
$wceazy_pi_shop_logo = isset($wceazy_pi_settings["shop_logo"]) ? $wceazy_pi_settings["shop_logo"] : WCEAZY_IMG_DIR."modules/pdf_invoice/no-image.jpg";
$wceazy_pi_footer_info = isset($wceazy_pi_settings["footer_info"]) ? $wceazy_pi_settings["footer_info"] : "";
$wceazy_pi_sender_name = isset($wceazy_pi_settings["sender_name"]) ? $wceazy_pi_settings["sender_name"] : get_option( 'blogname' );
$wceazy_pi_address_line_one = isset($wceazy_pi_settings["address_line_one"]) ? $wceazy_pi_settings["address_line_one"] : get_option('woocommerce_store_address');
$wceazy_pi_address_line_two = isset($wceazy_pi_settings["address_line_two"]) ? $wceazy_pi_settings["address_line_two"] : get_option('woocommerce_store_address_2');
$wceazy_pi_address_city = isset($wceazy_pi_settings["address_city"]) ? $wceazy_pi_settings["address_city"] : get_option('woocommerce_store_city');
$wceazy_pi_postal_code = isset($wceazy_pi_settings["postal_code"]) ? $wceazy_pi_settings["postal_code"] : get_option('woocommerce_store_postcode');
$wceazy_pi_country_state = isset($wceazy_pi_settings["country_state"]) ? explode(":", $wceazy_pi_settings["country_state"]) : "";
$wceazy_pi_contact_number = isset($wceazy_pi_settings["contact_number"]) ? $wceazy_pi_settings["contact_number"] : "";
$wceazy_pi_display_download = isset($wceazy_pi_settings["display_download"]) ? $wceazy_pi_settings["display_download"] : "display_new_window";

$wceazy_pi_disabled_status = isset($wceazy_pi_settings["disabled_status"]) ? explode(",",$wceazy_pi_settings["disabled_status"]) : array();
$wceazy_pi_enable_vat_ssn = isset($wceazy_pi_settings["enable_vat_ssn"]) ? $wceazy_pi_settings["enable_vat_ssn"] : "no";
$wceazy_pi_attach_to_email = isset($wceazy_pi_settings["attach_to_email"]) ? explode(",",$wceazy_pi_settings["attach_to_email"]) : array();
$wceazy_pi_ordernumber_as_invoice_number = isset($wceazy_pi_settings["ordernumber_as_invoice_number"]) ? $wceazy_pi_settings["ordernumber_as_invoice_number"] : "no";
$wceazy_pi_invoice_start_number = isset($wceazy_pi_settings["invoice_start_number"]) ? $wceazy_pi_settings["invoice_start_number"] : "1001";
$wceazy_pi_invoice_prefix = isset($wceazy_pi_settings["invoice_prefix"]) ? $wceazy_pi_settings["invoice_prefix"] : "";
$wceazy_pi_invoice_suffix = isset($wceazy_pi_settings["invoice_suffix"]) ? $wceazy_pi_settings["invoice_suffix"] : "";

$wceazy_pi_enable_invoice_title = isset($wceazy_pi_settings["enable_invoice_title"]) ? $wceazy_pi_settings["enable_invoice_title"] : "yes";
$wceazy_pi_enable_shop_logo = isset($wceazy_pi_settings["enable_shop_logo"]) ? $wceazy_pi_settings["enable_shop_logo"] : "yes";
$wceazy_pi_enable_invoice_number = isset($wceazy_pi_settings["enable_invoice_number"]) ? $wceazy_pi_settings["enable_invoice_number"] : "yes";
$wceazy_pi_enable_order_number = isset($wceazy_pi_settings["enable_order_number"]) ? $wceazy_pi_settings["enable_order_number"] : "yes";
$wceazy_pi_enable_invoice_date = isset($wceazy_pi_settings["enable_invoice_date"]) ? $wceazy_pi_settings["enable_invoice_date"] : "yes";
$wceazy_pi_enable_order_date = isset($wceazy_pi_settings["enable_order_date"]) ? $wceazy_pi_settings["enable_order_date"] : "yes";
$wceazy_pi_enable_ssn_id = isset($wceazy_pi_settings["enable_ssn_id"]) ? $wceazy_pi_settings["enable_ssn_id"] : "no";
$wceazy_pi_enable_vat_id = isset($wceazy_pi_settings["enable_vat_id"]) ? $wceazy_pi_settings["enable_vat_id"] : "no";
$wceazy_pi_enable_from_address = isset($wceazy_pi_settings["enable_from_address"]) ? $wceazy_pi_settings["enable_from_address"] : "yes";
$wceazy_pi_enable_billing_address = isset($wceazy_pi_settings["enable_billing_address"]) ? $wceazy_pi_settings["enable_billing_address"] : "yes";
$wceazy_pi_enable_shipping_address = isset($wceazy_pi_settings["enable_shipping_address"]) ? $wceazy_pi_settings["enable_shipping_address"] : "yes";
$wceazy_pi_enable_email = isset($wceazy_pi_settings["enable_email"]) ? $wceazy_pi_settings["enable_email"] : "yes";
$wceazy_pi_enable_phone = isset($wceazy_pi_settings["enable_phone"]) ? $wceazy_pi_settings["enable_phone"] : "yes";
$wceazy_pi_enable_payment_method = isset($wceazy_pi_settings["enable_payment_method"]) ? $wceazy_pi_settings["enable_payment_method"] : "yes";
$wceazy_pi_enable_customer_note = isset($wceazy_pi_settings["enable_customer_note"]) ? $wceazy_pi_settings["enable_customer_note"] : "yes";
$wceazy_pi_enable_footer = isset($wceazy_pi_settings["enable_footer"]) ? $wceazy_pi_settings["enable_footer"] : "yes";

$wceazy_pi_enable_shipping_shop_logo = isset($wceazy_pi_settings["enable_shipping_shop_logo"]) ? $wceazy_pi_settings["enable_shipping_shop_logo"] : "yes";
$wceazy_pi_enable_shipping_from_address = isset($wceazy_pi_settings["enable_shipping_from_address"]) ? $wceazy_pi_settings["enable_shipping_from_address"] : "yes";
$wceazy_pi_enable_shipping_to_address = isset($wceazy_pi_settings["enable_shipping_to_address"]) ? $wceazy_pi_settings["enable_shipping_to_address"] : "yes";
$wceazy_pi_enable_shipping_order_number = isset($wceazy_pi_settings["enable_shipping_order_number"]) ? $wceazy_pi_settings["enable_shipping_order_number"] : "yes";
$wceazy_pi_enable_shipping_weight = isset($wceazy_pi_settings["enable_shipping_weight"]) ? $wceazy_pi_settings["enable_shipping_weight"] : "yes";
$wceazy_pi_enable_shipping_date = isset($wceazy_pi_settings["enable_shipping_date"]) ? $wceazy_pi_settings["enable_shipping_date"] : "yes";
$wceazy_pi_enable_shipping_email = isset($wceazy_pi_settings["enable_shipping_email"]) ? $wceazy_pi_settings["enable_shipping_email"] : "yes";
$wceazy_pi_enable_shipping_phone = isset($wceazy_pi_settings["enable_shipping_phone"]) ? $wceazy_pi_settings["enable_shipping_phone"] : "yes";

?>


<div id="wceazy_pdf_invoice">


    <div class="wceazy_pdf_invoice_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_pdf_invoice_page_title">
        <div class="page_title_part_left">
            <h2>PDF Invoice & Packing Slips</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_pdf_invoice_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_pdf_invoice_container">


        <div class="wceazy_pdf_invoice_tab">
            <div class="wceazy_pdf_invoice_tab_part_left">
                <div class="coupon_data_tabs">
                    <div class="tab_item tab_item_active" data-target="tab_pdf_document"><h1>PDF Document</h1></div>
                    <div class="tab_item" data-target="tab_general"><h1>General</h1></div>
                    <div class="tab_item" data-target="tab_invoice"><h1>Invoice</h1></div>
                    <div class="tab_item" data-target="tab_customize_invoice"><h1>Customize Invoice</h1></div>
                    <div class="tab_item" data-target="tab_customize_shipping_label"><h1>Customize Shipping Label</h1></div>
                </div>
            </div>

            <div class="wceazy_pdf_invoice_tab_part_right">

                <div class="coupon_tab_body" data-id="tab_pdf_document">
                    <div class="tab_body_title"><h1>PDF Document</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_deactivate_invoice">
                            <label for="coupon_generator_coupon_amount">Deactivate Invoice?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_deactivate_invoice == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you want to deactivate invoice.</small>
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_deactivate_shipping_label">
                            <label for="coupon_generator_coupon_amount">Deactivate Shipping Label?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_deactivate_shipping_label == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you want to deactivate shipping label. It is also allowed to turn ON where shipping label is needed instead of packing slip.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_general">
                    <div class="tab_body_title"><h1>General Settings</h1></div>
                    <div class="tab_body_form">


                        <h4>Shop Info</h4>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_shop_name">
                            <label for="coupon_generator_coupon_amount">Shop Name</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" value="<?php echo esc_attr($wceazy_pi_shop_name); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_shop_logo">
                            <label for="coupon_generator_coupon_amount">Shop Logo</label>
                            <div class="field_with_msg_container">
                                <div class="image_upload_area">
                                    <input class="wceazy_pdf_invoice_text_field" type="text" value="<?php echo esc_attr($wceazy_pi_shop_logo); ?>">
                                    <button onclick="wceazy_pdf_invoice_image_chooser(this)">Upload</button>
                                    <img src="<?php echo $wceazy_pi_shop_logo; ?>"/>
                                </div>
                                <small>Recommended image size 150px X 60px</small>
                            </div>
                        </div>


                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_footer_info">
                            <label for="coupon_generator_coupon_amount">Footer Info</label>
                            <div class="field_with_msg_container">
                                <textarea class="wceazy_pdf_invoice_textarea_field" rows="3"><?php echo esc_attr($wceazy_pi_footer_info); ?></textarea>
                                <small>Enter invoice footer info</small>
                            </div>
                        </div>





                        <h4>Shop Address (Sender Details)</h4>


                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_sender_name">
                            <label for="coupon_generator_coupon_amount">Sender Name</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_sender_name); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_address_line_one">
                            <label for="coupon_generator_coupon_amount">Address Line 1</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_address_line_one); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_address_line_two">
                            <label for="coupon_generator_coupon_amount">Address Line 2</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_address_line_two); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_address_city">
                            <label for="coupon_generator_coupon_amount">City</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_address_city); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_postal_code">
                            <label for="coupon_generator_coupon_amount">Postal Code</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_postal_code); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_country_state">
                            <label for="coupon_generator_coupon_amount">Country/State</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_pdf_invoice_select_field">
                                    <option value=""> Please select</option>
                                    <?php
                                    $country = isset($wceazy_pi_country_state[0]) ? $wceazy_pi_country_state[0] : array_search(WC()->countries->countries[WC()->countries->get_base_country()], WC()->countries->countries);
                                    $state = isset($wceazy_pi_country_state[1]) ? $wceazy_pi_country_state[1] : WC()->countries->get_base_state();
                                    ?>
                                    <?php !empty($country) && !empty($state) ? WC ()->countries->country_dropdown_options ($country, $state) : ""; ?>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_contact_number">
                            <label for="coupon_generator_coupon_amount">Contact Number</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_contact_number); ?>">
                            </div>
                        </div>


                        <h4>Other Settings</h4>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_display_download">
                            <label for="coupon_generator_coupon_amount">How do you want to view the PDF?</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_pdf_invoice_select_field">
                                    <option value=""> Please select</option>
                                    <option value="display_new_window" <?php echo esc_attr("display_new_window" == $wceazy_pi_display_download ? "selected" : ""); ?>> Open The PDF in a New Window </option>
                                    <option value="direct_download" <?php echo esc_attr("direct_download" == $wceazy_pi_display_download ? "selected" : ""); ?>> Direct Download </option>
                                </select>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_invoice">
                    <div class="tab_body_title"><h1>Invoice Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_disabled_status">
                            <label for="coupon_generator_coupon_amount">Disable for</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_pdf_invoice_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php foreach (wc_get_order_statuses() as $key => $val) { ?>
                                        <option value="<?php echo esc_attr($key); ?>" <?php echo esc_attr(in_array($key, $wceazy_pi_disabled_status) ? "selected" : ""); ?>> <?php echo esc_attr($val); ?> </option>
                                    <?php } ?>
                                </select>
                                <small>Please select Order statuses which an invoice should not be generated.</small>
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_enable_vat_ssn">
                            <label for="coupon_generator_coupon_amount">Enable VAT & SSN on Checkout <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_pi_enable_vat_ssn == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on if you want to show VAT & SSN option on Checkout page.</small>
                            </div>
                        </div>


                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_attach_to_email">
                            <label for="coupon_generator_coupon_amount">Attach to Email <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_pdf_invoice_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <option value="new_order" <?php echo esc_attr(in_array("new_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> New Order(Admin Email) </option>
                                    <option value="cancelled_order" <?php echo esc_attr(in_array("cancelled_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Cancelled Order </option>
                                    <option value="failed_order" <?php echo esc_attr(in_array("failed_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Failed Order </option>
                                    <option value="customer_on_hold_order" <?php echo esc_attr(in_array("customer_on_hold_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> On-Hold Order </option>
                                    <option value="customer_processing_order" <?php echo esc_attr(in_array("customer_processing_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Processing Order </option>
                                    <option value="customer_completed_order" <?php echo esc_attr(in_array("customer_completed_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Complete Order </option>
                                    <option value="customer_refunded_order" <?php echo esc_attr(in_array("customer_refunded_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Refunded Order </option>
                                    <option value="customer_partially_refunded_order" <?php echo esc_attr(in_array("customer_partially_refunded_order", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Partially Refunded Order </option>
                                    <option value="customer_invoice" <?php echo esc_attr(in_array("customer_invoice", $wceazy_pi_attach_to_email) ? "selected" : ""); ?>> Customer Invoice </option>
                                </select>
                                <small>Please choose when you want the invoice to be emailed.</small>
                            </div>
                        </div>


                        <h4>Invoice Number</h4>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_ordernumber_as_invoice_number">
                            <label for="coupon_generator_coupon_amount">Order Number as Invoice Number?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_ordernumber_as_invoice_number == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                <small>Please turn on if you want to order number as invoice number.</small>
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_invoice_start_number">
                            <label for="coupon_generator_coupon_amount">Invoice Start Number</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_pdf_invoice_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_pi_invoice_start_number); ?>">
                                <small>Set your cart heading title.</small>
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_invoice_prefix">
                            <label for="coupon_generator_coupon_amount">Prefix <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_invoice_prefix); ?>">
                            </div>
                        </div>

                        <div class="wceazy_pdf_invoice_field_group wceazy_pdf_invoice_invoice_suffix">
                            <label for="coupon_generator_coupon_amount">Suffix <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_pdf_invoice_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pi_invoice_suffix); ?>">
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_customize_invoice">
                    <div class="tab_body_title"><h1>Invoice Customization</h1></div>
                    <div class="tab_body_form">



                        <div class="wceazy_pdf_invoice_live_customizer_container">
                            <div class="wceazy_pdf_invoice_live_customizer_body">
                                <div class="wceazy_pdf_invoice_live_customizer_body_paper">



                                    <?php include WCEAZY_PATH . "backend/templates/views/pdf_invoice/invoice.php"; ?>
                                </div>
                            </div>
                            <div class="wceazy_pdf_invoice_live_customizer_action">
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_invoice_title">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Document Title</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_invoice_title == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shop_logo">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Shop Logo</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shop_logo == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_invoice_number">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Invoice Number</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_invoice_number == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_order_number">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Order Number</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_order_number == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_invoice_date">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Invoice Date</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_invoice_date == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_order_date">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Order Date</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_order_date == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_ssn_id">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">SSN <span style="color: #FF521D;">(Pro)</span></div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_pi_enable_ssn_id == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_vat_id">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">VAT <span style="color: #FF521D;">(Pro)</span></div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_pi_enable_vat_id == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_from_address">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">From Address</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_from_address == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_billing_address">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Billing Address</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_billing_address == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_address">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Shipping Address</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_address == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_email">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Email</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_email == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_phone">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Phone Number</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_phone == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_payment_method">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Payment Method</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_payment_method == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_customer_note">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Customer Note</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_customer_note == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_footer">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Footer</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_footer == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>



                            </div>
                        </div>





                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_customize_shipping_label">
                    <div class="tab_body_title"><h1>Shipping Label Customization</h1></div>
                    <div class="tab_body_form">



                        <div class="wceazy_pdf_invoice_live_customizer_container">
                            <div class="wceazy_pdf_invoice_live_customizer_body">
                                <div class="wceazy_pdf_invoice_live_customizer_body_paper shipping_label">

                                    <?php include WCEAZY_PATH . "backend/templates/views/pdf_invoice/shipping_label.php"; ?>
                                </div>
                            </div>
                            <div class="wceazy_pdf_invoice_live_customizer_action">

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_shop_logo">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Shop Logo</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_shop_logo == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_from_address">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">From Address</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_from_address == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_to_address">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">To Address</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_to_address == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_order_number">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Order Number</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_order_number == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_weight">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Weight</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_weight == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_date">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Shipping Date</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_date == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_email">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Email</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_email == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>

                                <div class="wceazy_pdf_invoice_live_customizer_action_item wceazy_pdf_invoice_enable_shipping_phone">
                                    <div class="wceazy_pdf_invoice_live_customizer_action_item_title">Email</div>
                                    <div class="wceazy_pdf_invoice_field_group">
                                        <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pi_enable_shipping_phone == "yes" ? "checked" : ""); ?> onchange="wceazy_pdf_invoice_selection_changed()"><span class="slider round"></span></label>
                                    </div>
                                </div>


                            </div>
                        </div>





                    </div>
                </div>




            </div>
        </div>


        <div class="wceazy_pdf_invoice_bottom_button_section">
            <button onclick="wceazy_pdf_invoice_save();">Save Settings</button>
        </div>



    </div>

</div>