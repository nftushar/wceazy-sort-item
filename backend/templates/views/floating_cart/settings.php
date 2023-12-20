<?php

$wceazy_floating_cart_settings = get_option('wceazy_floating_cart_settings', False);
$wceazy_fc_settings = $wceazy_floating_cart_settings ? json_decode($wceazy_floating_cart_settings, true) : array();


$wceazy_fc_auto_open_cart = isset($wceazy_fc_settings["auto_open_cart"]) ? $wceazy_fc_settings["auto_open_cart"] : "no";
$wceazy_fc_bascket_count = isset($wceazy_fc_settings["bascket_count"]) ? $wceazy_fc_settings["bascket_count"] : "number_of_items";
$wceazy_fc_dont_show_cart_pages = isset($wceazy_fc_settings["dont_show_cart_pages"]) ? explode(",",$wceazy_fc_settings["dont_show_cart_pages"]) : array();

$wceazy_fc_show_header_basket_icon = isset($wceazy_fc_settings["show_header_basket_icon"]) ? $wceazy_fc_settings["show_header_basket_icon"] : "yes";
$wceazy_fc_show_header_close_icon = isset($wceazy_fc_settings["show_header_close_icon"]) ? $wceazy_fc_settings["show_header_close_icon"] : "yes";

$wceazy_fc_show_product_image = isset($wceazy_fc_settings["show_product_image"]) ? $wceazy_fc_settings["show_product_image"] : "yes";
$wceazy_fc_show_product_name = isset($wceazy_fc_settings["show_product_name"]) ? $wceazy_fc_settings["show_product_name"] : "yes";
$wceazy_fc_show_product_price = isset($wceazy_fc_settings["show_product_price"]) ? $wceazy_fc_settings["show_product_price"] : "yes";
$wceazy_fc_show_product_price_total = isset($wceazy_fc_settings["show_product_price_total"]) ? $wceazy_fc_settings["show_product_price_total"] : "yes";
$wceazy_fc_link_to_single_product = isset($wceazy_fc_settings["link_to_single_product"]) ? $wceazy_fc_settings["link_to_single_product"] : "yes";
$wceazy_fc_delete_item_form_cart = isset($wceazy_fc_settings["delete_item_form_cart"]) ? $wceazy_fc_settings["delete_item_form_cart"] : "yes";
$wceazy_fc_allowed_quantity_update = isset($wceazy_fc_settings["allowed_quantity_update"]) ? $wceazy_fc_settings["allowed_quantity_update"] : "yes";

$wceazy_fc_footer_position_fixed = isset($wceazy_fc_settings["footer_position_fixed"]) ? $wceazy_fc_settings["footer_position_fixed"] : "yes";
$wceazy_fc_show_subtotal = isset($wceazy_fc_settings["show_subtotal"]) ? $wceazy_fc_settings["show_subtotal"] : "yes";
$wceazy_fc_show_discount = isset($wceazy_fc_settings["show_discount"]) ? $wceazy_fc_settings["show_discount"] : "yes";
$wceazy_fc_show_shipping_amount = isset($wceazy_fc_settings["show_shipping_amount"]) ? $wceazy_fc_settings["show_shipping_amount"] : "yes";
$wceazy_fc_show_cart_total = isset($wceazy_fc_settings["show_cart_total"]) ? $wceazy_fc_settings["show_cart_total"] : "yes";
$wceazy_fc_show_coupon = isset($wceazy_fc_settings["show_coupon"]) ? $wceazy_fc_settings["show_coupon"] : "yes";

$wceazy_fc_heading_title = isset($wceazy_fc_settings["heading_title"]) ? $wceazy_fc_settings["heading_title"] : "Your Shopping Cart";
$wceazy_fc_continue_btn_text = isset($wceazy_fc_settings["continue_btn_text"]) ? $wceazy_fc_settings["continue_btn_text"] : "Continue Shopping";
$wceazy_fc_view_cart_text = isset($wceazy_fc_settings["view_cart_text"]) ? $wceazy_fc_settings["view_cart_text"] : "View Cart";
$wceazy_fc_checkout_btn_text = isset($wceazy_fc_settings["checkout_btn_text"]) ? $wceazy_fc_settings["checkout_btn_text"] : "Checkout";
$wceazy_fc_empty_cart_message = isset($wceazy_fc_settings["empty_cart_message"]) ? $wceazy_fc_settings["empty_cart_message"] : "No items in cart";
$wceazy_fc_subtotal_text = isset($wceazy_fc_settings["subtotal_text"]) ? $wceazy_fc_settings["subtotal_text"] : "Subtotal";
$wceazy_fc_total_amount_text = isset($wceazy_fc_settings["total_amount_text"]) ? $wceazy_fc_settings["total_amount_text"] : "Total Amount";

$wceazy_fc_continue_btn_url = isset($wceazy_fc_settings["continue_btn_url"]) ? $wceazy_fc_settings["continue_btn_url"] : home_url()."/shop";
$wceazy_fc_view_cart_btn_url = isset($wceazy_fc_settings["view_cart_btn_url"]) ? $wceazy_fc_settings["view_cart_btn_url"] : home_url()."/cart";
$wceazy_fc_checkout_btn_url = isset($wceazy_fc_settings["checkout_btn_url"]) ? $wceazy_fc_settings["checkout_btn_url"] : home_url()."/checkout";

$wceazy_fc_width = isset($wceazy_fc_settings["width"]) ? $wceazy_fc_settings["width"] : "460";
$wceazy_fc_open_from = isset($wceazy_fc_settings["open_from"]) ? $wceazy_fc_settings["open_from"] : "right";
$wceazy_fc_btn_font_size = isset($wceazy_fc_settings["btn_font_size"]) ? $wceazy_fc_settings["btn_font_size"] : "16";
$wceazy_fc_btn_font_color = isset($wceazy_fc_settings["btn_font_color"]) ? $wceazy_fc_settings["btn_font_color"] : "#ffffff";
$wceazy_fc_btn_bg_color = isset($wceazy_fc_settings["btn_bg_color"]) ? $wceazy_fc_settings["btn_bg_color"] : "#6E32C9";
$wceazy_fc_btn_hover_font_color = isset($wceazy_fc_settings["btn_hover_font_color"]) ? $wceazy_fc_settings["btn_hover_font_color"] : "#ffffff";
$wceazy_fc_btn_hover_bg_color = isset($wceazy_fc_settings["btn_hover_bg_color"]) ? $wceazy_fc_settings["btn_hover_bg_color"] : "#510bbb";
$wceazy_fc_btn_border_color = isset($wceazy_fc_settings["btn_border_color"]) ? $wceazy_fc_settings["btn_border_color"] : "#6E32C9";
$wceazy_fc_btn_border_hover_color = isset($wceazy_fc_settings["btn_border_hover_color"]) ? $wceazy_fc_settings["btn_border_hover_color"] : "#510bbb";
$wceazy_fc_btn_border_radius = isset($wceazy_fc_settings["btn_border_radius"]) ? $wceazy_fc_settings["btn_border_radius"] : "4";

$wceazy_fc_cross_icon_size = isset($wceazy_fc_settings["cross_icon_size"]) ? $wceazy_fc_settings["cross_icon_size"] : "30";
$wceazy_fc_header_basket_icon_size = isset($wceazy_fc_settings["header_basket_icon_size"]) ? $wceazy_fc_settings["header_basket_icon_size"] : "30";
$wceazy_fc_heading_font_size = isset($wceazy_fc_settings["heading_font_size"]) ? $wceazy_fc_settings["heading_font_size"] : "24";
$wceazy_fc_heading_font_color = isset($wceazy_fc_settings["heading_font_color"]) ? $wceazy_fc_settings["heading_font_color"] : "#3a3a3a";
$wceazy_fc_heading_border_bottom_color = isset($wceazy_fc_settings["heading_border_bottom_color"]) ? $wceazy_fc_settings["heading_border_bottom_color"] : "#cccccc";

$wceazy_fc_item_remove_icon = isset($wceazy_fc_settings["item_remove_icon"]) ? $wceazy_fc_settings["item_remove_icon"] : "icon_1";
$wceazy_fc_remove_icon_size = isset($wceazy_fc_settings["remove_icon_size"]) ? $wceazy_fc_settings["remove_icon_size"] : "16";
$wceazy_fc_product_img_width = isset($wceazy_fc_settings["product_img_width"]) ? $wceazy_fc_settings["product_img_width"] : "100";
$wceazy_fc_product_title_color = isset($wceazy_fc_settings["product_title_color"]) ? $wceazy_fc_settings["product_title_color"] : "#6E32C9";
$wceazy_fc_product_title_font_size = isset($wceazy_fc_settings["product_title_font_size"]) ? $wceazy_fc_settings["product_title_font_size"] : "16";
$wceazy_fc_quantity_box_width = isset($wceazy_fc_settings["quantity_box_width"]) ? $wceazy_fc_settings["quantity_box_width"] : "56";
$wceazy_fc_quantity_box_border_color = isset($wceazy_fc_settings["quantity_box_border_color"]) ? $wceazy_fc_settings["quantity_box_border_color"] : "#6E32C9";
$wceazy_fc_quantity_box_bg_color = isset($wceazy_fc_settings["quantity_box_bg_color"]) ? $wceazy_fc_settings["quantity_box_bg_color"] : "#ffffff";
$wceazy_fc_quantity_box_text_color = isset($wceazy_fc_settings["quantity_box_text_color"]) ? $wceazy_fc_settings["quantity_box_text_color"] : "#000000";

$wceazy_fc_basket_enable = isset($wceazy_fc_settings["basket_enable"]) ? $wceazy_fc_settings["basket_enable"] : "show_always";
$wceazy_fc_basket_shape = isset($wceazy_fc_settings["basket_shape"]) ? $wceazy_fc_settings["basket_shape"] : "round";
$wceazy_fc_basket_icon_size = isset($wceazy_fc_settings["basket_icon_size"]) ? $wceazy_fc_settings["basket_icon_size"] : "35";
$wceazy_fc_basket_show_count = isset($wceazy_fc_settings["basket_show_count"]) ? $wceazy_fc_settings["basket_show_count"] : "yes";
$wceazy_fc_basket_icon = isset($wceazy_fc_settings["basket_icon"]) ? $wceazy_fc_settings["basket_icon"] : "icon_1";
$wceazy_fc_basket_position = isset($wceazy_fc_settings["basket_position"]) ? $wceazy_fc_settings["basket_position"] : "bottom_right";
$wceazy_fc_basket_offset_vertical = isset($wceazy_fc_settings["basket_offset_vertical"]) ? $wceazy_fc_settings["basket_offset_vertical"] : "0";
$wceazy_fc_basket_offset_horizontal = isset($wceazy_fc_settings["basket_offset_horizontal"]) ? $wceazy_fc_settings["basket_offset_horizontal"] : "0";
$wceazy_fc_basket_count_position = isset($wceazy_fc_settings["basket_count_position"]) ? $wceazy_fc_settings["basket_count_position"] : "top_left";
$wceazy_fc_basket_icon_color = isset($wceazy_fc_settings["basket_icon_color"]) ? $wceazy_fc_settings["basket_icon_color"] : "#ffffff";
$wceazy_fc_basket_bg_color = isset($wceazy_fc_settings["basket_bg_color"]) ? $wceazy_fc_settings["basket_bg_color"] : "#000000";
$wceazy_fc_basket_count_color = isset($wceazy_fc_settings["basket_count_color"]) ? $wceazy_fc_settings["basket_count_color"] : "#ffffff";
$wceazy_fc_basket_count_bg_color = isset($wceazy_fc_settings["basket_count_bg_color"]) ? $wceazy_fc_settings["basket_count_bg_color"] : "#d00000";



?>


<div id="wceazy_floating_cart">


    <div class="wceazy_floating_cart_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_floating_cart_page_title">
        <div class="page_title_part_left">
            <h2>Floating Cart</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_floating_cart_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_floating_cart_container">


        <div class="wceazy_floating_cart_tab">
            <div class="wceazy_floating_cart_tab_part_left">
                <div class="coupon_data_tabs">
                    <div class="tab_item tab_item_active" data-target="tab_general"><h1>General</h1></div>
                    <div class="tab_item" data-target="tab_cart_header"><h1>Cart Header</h1></div>
                    <div class="tab_item" data-target="tab_cart_body"><h1>Cart Body</h1></div>
                    <div class="tab_item" data-target="tab_cart_footer"><h1>Cart Footer</h1></div>
                    <div class="tab_item" data-target="tab_typography"><h1>Typography</h1></div>
                    <div class="tab_item" data-target="tab_redirect_urls"><h1>Redirect URLs</h1></div>
                    <div class="tab_item" data-target="tab_general_style"><h1>General Style</h1></div>
                    <div class="tab_item" data-target="tab_header_style"><h1>Header Style</h1></div>
                    <div class="tab_item" data-target="tab_content_style"><h1>Content Style</h1></div>
                    <div class="tab_item" data-target="tab_basket_style"><h1>Basket Style</h1></div>
                </div>
            </div>

            <div class="wceazy_floating_cart_tab_part_right">

                <div class="coupon_tab_body" data-id="tab_general">
                    <div class="tab_body_title"><h1>General Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_auto_open_cart">
                            <label for="coupon_generator_coupon_amount">Is Auto Open Cart?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_auto_open_cart == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn on if you want to auto open floating cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_bascket_count">
                            <label for="coupon_generator_coupon_amount">Basket Count</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="number_of_products" <?php echo esc_attr("number_of_products" == $wceazy_fc_bascket_count ? "selected" : ""); ?>> Number Of Products </option>
                                    <option value="number_of_items" <?php echo esc_attr("number_of_items" == $wceazy_fc_bascket_count ? "selected" : ""); ?>> Total Number Of Items </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_dont_show_cart_pages">
                            <label for="coupon_generator_coupon_amount">Select Don't Show Pages</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php foreach (get_pages() as $single_page) { ?>
                                        <option value="<?php echo esc_attr($single_page->ID); ?>" <?php echo esc_attr(in_array($single_page->ID, $wceazy_fc_dont_show_cart_pages) ? "selected" : ""); ?>> <?php echo esc_attr($single_page->post_title); ?> </option>
                                    <?php } ?>
                                </select>
                                <small>Please select pages where you do not show floating cart.</small>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_cart_header">
                    <div class="tab_body_title"><h1>Header Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_header_basket_icon">
                            <label for="coupon_generator_coupon_amount">Show Basket Icon?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_header_basket_icon == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show basket icon in cart header.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_header_close_icon">
                            <label for="coupon_generator_coupon_amount">Show Close Icon?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_header_close_icon == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show close icon on cart header</small>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_cart_body">
                    <div class="tab_body_title"><h1>Body Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_product_image">
                            <label for="coupon_generator_coupon_amount">Show Product Image?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_product_image == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show product image.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_product_name">
                            <label for="coupon_generator_coupon_amount">Show Product Name?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_product_name == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show product name.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_product_price">
                            <label for="coupon_generator_coupon_amount">Show Product Unit Price?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_product_price == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show product price.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_product_price_total">
                            <label for="coupon_generator_coupon_amount">Show Product Price Total?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_product_price_total == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show product price total.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_delete_item_form_cart">
                            <label for="coupon_generator_coupon_amount">Allow Deleting Item From Cart?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_delete_item_form_cart == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to allow deleting item from cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_allowed_quantity_update">
                            <label for="coupon_generator_coupon_amount">Allow Quantity Update?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_allowed_quantity_update == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to allow quantity update on cart.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_cart_footer">
                    <div class="tab_body_title"><h1>Footer Settings</h1></div>
                    <div class="tab_body_form">

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_footer_position_fixed">
                            <label for="coupon_generator_coupon_amount">Footer Position Fixed?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_footer_position_fixed == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if do not want fixed footer.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_subtotal">
                            <label for="coupon_generator_coupon_amount">Show Subtotal?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_subtotal == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show subtotal on cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_discount">
                            <label for="coupon_generator_coupon_amount">Show Discount?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_discount == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show discount on cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_shipping_amount">
                            <label for="coupon_generator_coupon_amount">Show Shipping Amount?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_shipping_amount == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show shipping amount on cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_cart_total">
                            <label for="coupon_generator_coupon_amount">Show Cart Total?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_cart_total == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show cart total on cart.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_show_coupon">
                            <label for="coupon_generator_coupon_amount">Show Apply Coupon?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_show_coupon == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show apply coupon on cart.</small>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_typography">
                    <div class="tab_body_title"><h1>Typography Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_heading_title">
                            <label for="coupon_generator_coupon_amount">Heading Title</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_heading_title); ?>">
                                <small>Set your cart heading title.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_continue_btn_text">
                            <label for="coupon_generator_coupon_amount">Continue Shopping Button</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_continue_btn_text); ?>">
                                <small>Set your cart's continue shopping button text.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_view_cart_text">
                            <label for="coupon_generator_coupon_amount">View Cart Button</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_view_cart_text); ?>">
                                <small>Set your cart's view cart button text.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_checkout_btn_text">
                            <label for="coupon_generator_coupon_amount">Checkout Button</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_checkout_btn_text); ?>">
                                <small>Set your cart's checkout button text.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_empty_cart_message">
                            <label for="coupon_generator_coupon_amount">Empty Cart Message</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_empty_cart_message); ?>">
                                <small>Set your empty cart message.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_subtotal_text">
                            <label for="coupon_generator_coupon_amount">Subtotal Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_subtotal_text); ?>">
                                <small>Set your subtotal text.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_total_amount_text">
                            <label for="coupon_generator_coupon_amount">Total Amount Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_total_amount_text); ?>">
                                <small>Set your total amount text.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_redirect_urls">
                    <div class="tab_body_title"><h1>Redirect URLs Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_continue_btn_url">
                            <label for="coupon_generator_coupon_amount">Continue Shopping Button Url <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_continue_btn_url); ?>">
                                <small>Set continue shopping button url.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_view_cart_btn_url">
                            <label for="coupon_generator_coupon_amount">View Cart Button Url <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_view_cart_btn_url); ?>">
                                <small>Set view cart details button url.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_checkout_btn_url">
                            <label for="coupon_generator_coupon_amount">View Checkout Button Url <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_floating_cart_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_fc_checkout_btn_url); ?>">
                                <small>Set view checkout button url.</small>
                            </div>
                        </div>






                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_general_style">
                    <div class="tab_body_title"><h1>General Style</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_width">
                            <label for="coupon_generator_coupon_amount">Cart Width(px)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_width); ?>">
                                <small>Set your cart width in px (Ex. 460)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_open_from">
                            <label for="coupon_generator_coupon_amount">Cart Open From</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="left" <?php echo esc_attr("left" == $wceazy_fc_open_from ? "selected" : ""); ?>> Left </option>
                                    <option value="right" <?php echo esc_attr("right" == $wceazy_fc_open_from ? "selected" : ""); ?>> Right </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_font_size">
                            <label for="coupon_generator_coupon_amount">Button Font Size</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_btn_font_size); ?>">
                                <small>Set your all button font size in px (Ex. 16)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_font_color">
                            <label for="coupon_generator_coupon_amount">Button Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_font_color" value="<?php echo esc_attr($wceazy_fc_btn_font_color); ?>">
                                    <label for="wceazy_floating_cart_btn_font_color">Select Color</label>
                                </div>
                                <small>Set font color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_bg_color">
                            <label for="coupon_generator_coupon_amount">Button Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_bg_color" value="<?php echo esc_attr($wceazy_fc_btn_bg_color); ?>">
                                    <label for="wceazy_floating_cart_btn_bg_color">Select Color</label>
                                </div>
                                <small>Set background color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_hover_font_color">
                            <label for="coupon_generator_coupon_amount">Button Hover Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_hover_font_color" value="<?php echo esc_attr($wceazy_fc_btn_hover_font_color); ?>">
                                    <label for="wceazy_floating_cart_btn_hover_font_color">Select Color</label>
                                </div>
                                <small>Set hover font color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_hover_bg_color">
                            <label for="coupon_generator_coupon_amount">Button Hover Background <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_hover_bg_color" value="<?php echo esc_attr($wceazy_fc_btn_hover_bg_color); ?>">
                                    <label for="wceazy_floating_cart_btn_hover_bg_color">Select Color</label>
                                </div>
                                <small>Set hover background color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_border_color">
                            <label for="coupon_generator_coupon_amount">Button Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_border_color" value="<?php echo esc_attr($wceazy_fc_btn_border_color); ?>">
                                    <label for="wceazy_floating_cart_btn_border_color">Select Color</label>
                                </div>
                                <small>Set border color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_border_hover_color">
                            <label for="coupon_generator_coupon_amount">Button Border Hover Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_btn_border_hover_color" value="<?php echo esc_attr($wceazy_fc_btn_border_hover_color); ?>">
                                    <label for="wceazy_floating_cart_btn_border_hover_color">Select Color</label>
                                </div>
                                <small>Set border hover color of all buttons</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_btn_border_radius">
                            <label for="coupon_generator_coupon_amount">Button Border Radius <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_btn_border_radius); ?>">
                                <small>Set your all button border raduis (Ex. 4)</small>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_header_style">
                    <div class="tab_body_title"><h1>Header Style</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_cross_icon_size">
                            <label for="coupon_generator_coupon_amount">Cross Icon Size(px)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_cross_icon_size); ?>">
                                <small>Set your cart header cross icon in px (Ex. 30)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_header_basket_icon_size">
                            <label for="coupon_generator_coupon_amount">Heading Basket Icon Size(px)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_header_basket_icon_size); ?>">
                                <small>Set your cart header basket icon in px (Ex. 30)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_heading_font_size">
                            <label for="coupon_generator_coupon_amount">Heading Font Size(px)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_heading_font_size); ?>">
                                <small>Set your cart header font size in px (Ex. 24)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_heading_font_color">
                            <label for="coupon_generator_coupon_amount">Heading Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_heading_font_color" value="<?php echo esc_attr($wceazy_fc_heading_font_color); ?>">
                                    <label for="wceazy_floating_cart_heading_font_color">Select Color</label>
                                </div>
                                <small>Set your cart header font color.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_heading_border_bottom_color">
                            <label for="coupon_generator_coupon_amount">Heading Border Bottom Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_heading_border_bottom_color" value="<?php echo esc_attr($wceazy_fc_heading_border_bottom_color); ?>">
                                    <label for="wceazy_floating_cart_heading_border_bottom_color">Select Color</label>
                                </div>
                                <small>Set your cart header border bottom color.</small>
                            </div>
                        </div>






                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_content_style">
                    <div class="tab_body_title"><h1>Content Style</h1></div>
                    <div class="tab_body_form">



                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_item_remove_icon">
                            <label for="coupon_generator_coupon_amount">Product Remove Icon</label>
                            <div class="field_with_msg_container">
                                <div class="icon_selection_area">
                                    <div class="icon_field_item icon_1 <?php echo esc_attr("icon_1" == $wceazy_fc_item_remove_icon ? "active" : ""); ?>" data-value="icon_1"></div>
                                    <div class="icon_field_item icon_2 <?php echo esc_attr("icon_2" == $wceazy_fc_item_remove_icon ? "active" : ""); ?>" data-value="icon_2"></div>
                                    <div class="icon_field_item icon_3 <?php echo esc_attr("icon_3" == $wceazy_fc_item_remove_icon ? "active" : ""); ?>" data-value="icon_3"></div>
                                    <div class="icon_field_item icon_4 <?php echo esc_attr("icon_4" == $wceazy_fc_item_remove_icon ? "active" : ""); ?>" data-value="icon_4"></div>
                                    <div class="icon_field_item icon_5 <?php echo esc_attr("icon_5" == $wceazy_fc_item_remove_icon ? "active" : ""); ?>" data-value="icon_5"></div>
                                </div>
                                <small>Please select your delete icon.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_remove_icon_size">
                            <label for="coupon_generator_coupon_amount">Product Remove Icon Size(px)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_remove_icon_size); ?>">
                                <small>Set your cart content delete icon size in px (Ex. 16)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_product_img_width">
                            <label for="coupon_generator_coupon_amount">Product Image Width</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_product_img_width); ?>">
                                <small>Set your cart content product image width in percent(%) (Ex. 100)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_product_title_color">
                            <label for="coupon_generator_coupon_amount">Product Title Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_product_title_color" value="<?php echo esc_attr($wceazy_fc_product_title_color); ?>">
                                    <label for="wceazy_floating_cart_product_title_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_product_title_font_size">
                            <label for="coupon_generator_coupon_amount">Product Title Font Size</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_product_title_font_size); ?>">
                                <small>Set your cart content product title font size in px (Ex. 16)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_quantity_box_width">
                            <label for="coupon_generator_coupon_amount">Quantity Box Width</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_quantity_box_width); ?>">
                                <small>Set your cart content product quantity input box width in px (Ex. 56)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_quantity_box_border_color">
                            <label for="coupon_generator_coupon_amount">Quantity Box Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_quantity_box_border_color" value="<?php echo esc_attr($wceazy_fc_quantity_box_border_color); ?>">
                                    <label for="wceazy_floating_cart_quantity_box_border_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_quantity_box_bg_color">
                            <label for="coupon_generator_coupon_amount">Quantity Box Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_quantity_box_bg_color" value="<?php echo esc_attr($wceazy_fc_quantity_box_bg_color); ?>">
                                    <label for="wceazy_floating_cart_quantity_box_bg_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_quantity_box_text_color">
                            <label for="coupon_generator_coupon_amount">Quantity Box Text Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_quantity_box_text_color" value="<?php echo esc_attr($wceazy_fc_quantity_box_text_color); ?>">
                                    <label for="wceazy_floating_cart_quantity_box_text_color">Select Color</label>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>


                <div class="coupon_tab_body" data-id="tab_basket_style">
                    <div class="tab_body_title"><h1>Basket Style</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_enable">
                            <label for="coupon_generator_coupon_amount">Enable Basket</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="show_always" <?php echo esc_attr("show_always" == $wceazy_fc_basket_enable ? "selected" : ""); ?>> Always Show </option>
                                    <option value="hide_always" <?php echo esc_attr("hide_always" == $wceazy_fc_basket_enable ? "selected" : ""); ?>> Always Hide </option>
                                    <option value="hide_empty_cart" <?php echo esc_attr("hide_empty_cart" == $wceazy_fc_basket_enable ? "selected" : ""); ?>> Hide when cart is empty </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_shape">
                            <label for="coupon_generator_coupon_amount">Basket Shape</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="round" <?php echo esc_attr("round" == $wceazy_fc_basket_shape ? "selected" : ""); ?>> Round </option>
                                    <option value="square" <?php echo esc_attr("square" == $wceazy_fc_basket_shape ? "selected" : ""); ?>> Square </option>
                                </select>
                            </div>
                        </div>


                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon_size">
                            <label for="coupon_generator_coupon_amount">Basket Icon Size</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_icon_size); ?>">
                                <small>Set your basket icon size in px (Ex. 35)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_show_count">
                            <label for="coupon_generator_coupon_amount">Show Item Count?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_fc_basket_show_count == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show basket item count.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon">
                            <label for="coupon_generator_coupon_amount">Basket Icon</label>
                            <div class="field_with_msg_container">
                                <div class="icon_selection_area">
                                    <div class="icon_field_item icon_1 <?php echo esc_attr("icon_1" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_1"></div>
                                    <div class="icon_field_item icon_2 <?php echo esc_attr("icon_2" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_2"></div>
                                    <div class="icon_field_item icon_3 <?php echo esc_attr("icon_3" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_3"></div>
                                    <div class="icon_field_item icon_4 <?php echo esc_attr("icon_4" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_4"></div>
                                    <div class="icon_field_item icon_5 <?php echo esc_attr("icon_5" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_5"></div>
                                    <div class="icon_field_item icon_6 <?php echo esc_attr("icon_6" == $wceazy_fc_basket_icon ? "active" : ""); ?>" data-value="icon_6"></div>
                                </div>
                                <small>Please select your basket icon.</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_position">
                            <label for="coupon_generator_coupon_amount">Basket Position</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="top_left" <?php echo esc_attr("top_left" == $wceazy_fc_basket_position ? "selected" : ""); ?>> Top Left </option>
                                    <option value="top_right" <?php echo esc_attr("top_right" == $wceazy_fc_basket_position ? "selected" : ""); ?>> Top Right </option>
                                    <option value="bottom_left" <?php echo esc_attr("bottom_left" == $wceazy_fc_basket_position ? "selected" : ""); ?>> Bottom Left </option>
                                    <option value="bottom_right" <?php echo esc_attr("bottom_right" == $wceazy_fc_basket_position ? "selected" : ""); ?>> Bottom Right </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_offset_vertical">
                            <label for="coupon_generator_coupon_amount">Basket Offset (Vertical)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_offset_vertical); ?>">
                                <small>Set your basket vertical offset in px (Ex. 110)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_offset_horizontal">
                            <label for="coupon_generator_coupon_amount">Basket Offset (Horizontal)</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_floating_cart_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_fc_basket_offset_horizontal); ?>">
                                <small>Set your basket horizontal offset in px (Ex. 60)</small>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_position">
                            <label for="coupon_generator_coupon_amount">Basket Count Position</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_floating_cart_select_field">
                                    <option value=""> Please select</option>
                                    <option value="top_left" <?php echo esc_attr("top_left" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>> Top Left </option>
                                    <option value="top_right" <?php echo esc_attr("top_right" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>> Top Right </option>
                                    <option value="bottom_left" <?php echo esc_attr("bottom_left" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>> Bottom Left </option>
                                    <option value="bottom_right" <?php echo esc_attr("bottom_right" == $wceazy_fc_basket_count_position ? "selected" : ""); ?>> Bottom Right </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_icon_color">
                            <label for="coupon_generator_coupon_amount">Basket Icon Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_basket_icon_color" value="<?php echo esc_attr($wceazy_fc_basket_icon_color); ?>">
                                    <label for="wceazy_floating_cart_basket_icon_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_bg_color">
                            <label for="coupon_generator_coupon_amount">Basket Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_basket_bg_color" value="<?php echo esc_attr($wceazy_fc_basket_bg_color); ?>">
                                    <label for="wceazy_floating_cart_basket_bg_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_color">
                            <label for="coupon_generator_coupon_amount">Basket Count Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_basket_count_color" value="<?php echo esc_attr($wceazy_fc_basket_count_color); ?>">
                                    <label for="wceazy_floating_cart_basket_count_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_floating_cart_field_group wceazy_floating_cart_basket_count_bg_color">
                            <label for="coupon_generator_coupon_amount">Basket Count Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_floating_cart_basket_count_bg_color" value="<?php echo esc_attr($wceazy_fc_basket_count_bg_color); ?>">
                                    <label for="wceazy_floating_cart_basket_count_bg_color">Select Color</label>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>
        </div>


        <div class="wceazy_floating_cart_bottom_button_section">
            <button onclick="wceazy_floating_cart_save();">Save Settings</button>
        </div>



    </div>

</div>