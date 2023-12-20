<?php

$wceazy_product_sticky_bar_settings = get_option('wceazy_product_sticky_bar_settings', False);
$wceazy_psb_settings = $wceazy_product_sticky_bar_settings ? json_decode($wceazy_product_sticky_bar_settings, true) : array();

$wceazy_psb_is_enable = isset($wceazy_psb_settings["is_enable"]) ? $wceazy_psb_settings["is_enable"] : "yes";
$wceazy_psb_show_on_desktop = isset($wceazy_psb_settings["show_on_desktop"]) ? $wceazy_psb_settings["show_on_desktop"] : "yes";
$wceazy_psb_show_on_mobile = isset($wceazy_psb_settings["show_on_mobile"]) ? $wceazy_psb_settings["show_on_mobile"] : "yes";
$wceazy_psb_show_in = isset($wceazy_psb_settings["show_in"]) ? $wceazy_psb_settings["show_in"] : "top";
$wceazy_psb_show_only_scroll = isset($wceazy_psb_settings["show_only_scroll"]) ? $wceazy_psb_settings["show_only_scroll"] : "yes";
$wceazy_psb_scroll_pixels = isset($wceazy_psb_settings["scroll_pixels"]) ? $wceazy_psb_settings["scroll_pixels"] : "180";
$wceazy_psb_product_review = isset($wceazy_psb_settings["product_review"]) ? $wceazy_psb_settings["product_review"] : "yes";
$wceazy_psb_product_review_count = isset($wceazy_psb_settings["product_review_count"]) ? $wceazy_psb_settings["product_review_count"] : "yes";
$wceazy_psb_disabled_products = isset($wceazy_psb_settings["disabled_products"]) ? explode(",",$wceazy_psb_settings["disabled_products"]) : array();
$wceazy_psb_enable_qty_input = isset($wceazy_psb_settings["enable_qty_input"]) ? $wceazy_psb_settings["enable_qty_input"] : "yes";
$wceazy_psb_enable_variable_product = isset($wceazy_psb_settings["enable_variable_product"]) ? $wceazy_psb_settings["enable_variable_product"] : "yes";
$wceazy_psb_show_product_image = isset($wceazy_psb_settings["show_product_image"]) ? $wceazy_psb_settings["show_product_image"] : "yes";
$wceazy_psb_show_stock = isset($wceazy_psb_settings["show_stock"]) ? $wceazy_psb_settings["show_stock"] : "yes";
$wceazy_psb_hidebar_outofstock = isset($wceazy_psb_settings["hidebar_outofstock"]) ? $wceazy_psb_settings["hidebar_outofstock"] : "no";

$wceazy_psb_height = isset($wceazy_psb_settings["height"]) ? $wceazy_psb_settings["height"] : "100";
$wceazy_psb_product_image_shape = isset($wceazy_psb_settings["product_image_shape"]) ? $wceazy_psb_settings["product_image_shape"] : "square";
$wceazy_psb_product_title_color = isset($wceazy_psb_settings["product_title_color"]) ? $wceazy_psb_settings["product_title_color"] : "#3a3a3a";
$wceazy_psb_product_rating_color = isset($wceazy_psb_settings["product_rating_color"]) ? $wceazy_psb_settings["product_rating_color"] : "#0170b9";
$wceazy_psb_product_rating_count_color = isset($wceazy_psb_settings["product_rating_count_color"]) ? $wceazy_psb_settings["product_rating_count_color"] : "#3a3a3a";
$wceazy_psb_product_price_color = isset($wceazy_psb_settings["product_price_color"]) ? $wceazy_psb_settings["product_price_color"] : "#ca0815";
$wceazy_psb_product_price_font_size = isset($wceazy_psb_settings["product_price_font_size"]) ? $wceazy_psb_settings["product_price_font_size"] : "17";
$wceazy_psb_btn_bg_color = isset($wceazy_psb_settings["btn_bg_color"]) ? $wceazy_psb_settings["btn_bg_color"] : "#ca0815";
$wceazy_psb_btn_font_color = isset($wceazy_psb_settings["btn_font_color"]) ? $wceazy_psb_settings["btn_font_color"] : "#ffffff";
$wceazy_psb_btn_font_size = isset($wceazy_psb_settings["btn_font_size"]) ? $wceazy_psb_settings["btn_font_size"] : "14";
$wceazy_psb_btn_border_color = isset($wceazy_psb_settings["btn_border_color"]) ? $wceazy_psb_settings["btn_border_color"] : "#ca0815";
$wceazy_psb_btn_border_width = isset($wceazy_psb_settings["btn_border_width"]) ? $wceazy_psb_settings["btn_border_width"] : "1";
$wceazy_psb_btn_bg_hover_color = isset($wceazy_psb_settings["btn_bg_hover_color"]) ? $wceazy_psb_settings["btn_bg_hover_color"] : "#ffffff";
$wceazy_psb_btn_border_hover_color = isset($wceazy_psb_settings["btn_border_hover_color"]) ? $wceazy_psb_settings["btn_border_hover_color"] : "#000000";
$wceazy_psb_btn_font_hover_color = isset($wceazy_psb_settings["btn_font_hover_color"]) ? $wceazy_psb_settings["btn_font_hover_color"] : "#000000";
$wceazy_psb_btn_padding_left_right = isset($wceazy_psb_settings["btn_padding_left_right"]) ? $wceazy_psb_settings["btn_padding_left_right"] : "30";
$wceazy_psb_btn_padding_top_bottom = isset($wceazy_psb_settings["btn_padding_top_bottom"]) ? $wceazy_psb_settings["btn_padding_top_bottom"] : "10";

?>



<div id="wceazy_product_sticky_bar">


    <div class="wceazy_product_sticky_bar_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_product_sticky_bar_page_title">
        <div class="page_title_part_left">
            <h2>Product Sticky Bar</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_product_sticky_bar_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_product_sticky_bar_container">


        <div class="wceazy_product_sticky_bar_tab">
            <div class="wceazy_product_sticky_bar_tab_part_left">
                <div class="coupon_data_tabs">
                    <div class="tab_item tab_item_active" data-target="tab_settings"><h1>Settings</h1></div>
                    <div class="tab_item" data-target="tab_style"><h1>Style</h1></div>
                </div>
            </div>

            <div class="wceazy_product_sticky_bar_tab_part_right">
                <div class="coupon_tab_body" data-id="tab_settings">
                    <div class="tab_body_title"><h1>Bar Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_is_enable">
                            <label for="coupon_generator_coupon_amount">Enable Sticky Bar</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_is_enable == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you want to disabled sticky bar</small>
                            </div>
                        </div>

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_on_desktop">
                            <label for="coupon_generator_coupon_amount">Show on Desktop</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_show_on_desktop == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show sticky bar on desktop</small>
                            </div>
                        </div>

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_on_mobile">
                            <label for="coupon_generator_coupon_amount">Show on Mobile</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_show_on_mobile == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show sticky bar on mobile</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_in">
                            <label for="coupon_generator_coupon_amount">Sticky Bar Position</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_product_sticky_bar_select_field">
                                    <option value=""> Please select</option>
                                    <option value="top" <?php echo esc_attr($wceazy_psb_show_in == "top" ? "selected" : ""); ?>>Top</option>
                                    <option value="bottom" <?php echo esc_attr($wceazy_psb_show_in == "bottom" ? "selected" : ""); ?>>Bottom</option>
                                </select>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_only_scroll">
                            <label for="coupon_generator_coupon_amount">Show Only After Scroll</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_show_only_scroll == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Show sticky bar only when user scrolls down in product page</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_scroll_pixels">
                            <label for="coupon_generator_coupon_amount">Scroll Pixels</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_sticky_bar_text_field" type="number" placeholder="180" value="<?php echo esc_attr($wceazy_psb_scroll_pixels); ?>">
                                <small>Show Bar after user scroll given pixels on the product page, Only work when "Scroll Pixels" option is enabled. Default 180px.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_review">
                            <label for="coupon_generator_coupon_amount">Show Product Review</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_product_review == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show product review</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_review_count">
                            <label for="coupon_generator_coupon_amount">Show Product Review Count</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_product_review_count == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show product review count</small>
                            </div>
                        </div>



                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_disabled_products">
                            <label for="coupon_generator_coupon_amount">Disable for Products <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_product_sticky_bar_select_field" multiple="multiple" disabled>
                                    <option value=""> Please select</option>
                                    <?php foreach ($this->product_sticky_bar->utils->getWooProducts () as $product) { ?>
                                        <option value="<?php echo esc_attr($product["id"]); ?>" <?php echo esc_attr(in_array($product["id"], $wceazy_psb_disabled_products) ? "selected" : ""); ?>> <?php echo esc_attr($product["text"]); ?> </option>
                                    <?php } ?>
                                </select>
                                <small>Select the products where you do not want to show the sticky bar</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_enable_qty_input">
                            <label for="coupon_generator_coupon_amount">Enable Update Product Qty</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_enable_qty_input == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show product quantity update option on sticky bar</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_enable_variable_product">
                            <label for="coupon_generator_coupon_amount">Enable Variable Product</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_enable_variable_product == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show variable product selection option on sticky bar</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_product_image">
                            <label for="coupon_generator_coupon_amount">Show Product Image</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_show_product_image == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show product image on sticky bar</small>
                            </div>
                        </div>



                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_show_stock">
                            <label for="coupon_generator_coupon_amount">Show Stock Status</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_show_stock == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you don't want to show stock quantity on sticky bar</small>
                            </div>
                        </div>

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_hidebar_outofstock">
                            <label for="coupon_generator_coupon_amount">Hide Sticky bar( Product Out of Stock )</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_psb_hidebar_outofstock == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn on if you don't want to show sticky bar when product is out of stock</small>
                            </div>
                        </div>






                    </div>
                </div>
                <div class="coupon_tab_body" data-id="tab_style">
                    <div class="tab_body_title"><h1>Bar Style</h1></div>
                    <div class="tab_body_form">

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_height">
                            <label for="coupon_generator_coupon_amount">Height</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_sticky_bar_text_field" type="number" placeholder="100" value="<?php echo esc_attr($wceazy_psb_height); ?>">
                                <small>Set sticky bar height in pixel(Ex.150) - Default 100px.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_image_shape">
                            <label for="coupon_generator_coupon_amount">Product Image Shape</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_product_sticky_bar_select_field">
                                    <option value=""> Please select</option>
                                    <option value="round" <?php echo esc_attr($wceazy_psb_product_image_shape == "round" ? "selected" : ""); ?>>Round</option>
                                    <option value="square" <?php echo esc_attr($wceazy_psb_product_image_shape == "square" ? "selected" : ""); ?>>Square</option>
                                </select>
                                <small>Select Product image shape. Default: Square</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_title_color">
                            <label for="coupon_generator_coupon_amount">Product Title Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_product_title_color" value="<?php echo esc_attr($wceazy_psb_product_title_color); ?>">
                                    <label for="wceazy_product_sticky_bar_product_title_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_rating_color">
                            <label for="coupon_generator_coupon_amount">Product Rating Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_product_rating_color" value="<?php echo esc_attr($wceazy_psb_product_rating_color); ?>">
                                    <label for="wceazy_product_sticky_bar_product_rating_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_rating_count_color">
                            <label for="coupon_generator_coupon_amount">Product Rating Count Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_product_rating_count_color" value="<?php echo esc_attr($wceazy_psb_product_rating_count_color); ?>">
                                    <label for="wceazy_product_sticky_bar_product_rating_count_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_price_color">
                            <label for="coupon_generator_coupon_amount">Product Price Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_product_price_color" value="<?php echo esc_attr($wceazy_psb_product_price_color); ?>">
                                    <label for="wceazy_product_sticky_bar_product_price_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_product_price_font_size">
                            <label for="coupon_generator_coupon_amount">Product Price Font Size</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_sticky_bar_text_field" type="number" placeholder="17" value="<?php echo esc_attr($wceazy_psb_product_price_font_size); ?>">
                                <small>Set sticky bar product price font size (Ex. 17)</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_bg_color">
                            <label for="coupon_generator_coupon_amount">Button Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_bg_color" value="<?php echo esc_attr($wceazy_psb_btn_bg_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_bg_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_font_color">
                            <label for="coupon_generator_coupon_amount">Button Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_font_color" value="<?php echo esc_attr($wceazy_psb_btn_font_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_font_color">Select Color</label>
                                </div>
                            </div>
                        </div>

                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_font_size">
                            <label for="coupon_generator_coupon_amount">Button Font Size</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_sticky_bar_text_field" type="number" placeholder="14" value="<?php echo esc_attr($wceazy_psb_btn_font_size); ?>">
                                <small>Set sticky bar add to cart button font size (Ex. 14)</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_border_color">
                            <label for="coupon_generator_coupon_amount">Button Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_border_color" value="<?php echo esc_attr($wceazy_psb_btn_border_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_border_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_border_width">
                            <label for="coupon_generator_coupon_amount">Button Border Width</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_sticky_bar_text_field" type="number" placeholder="1" value="<?php echo esc_attr($wceazy_psb_btn_border_width); ?>">
                                <small>Set sticky bar add to cart button border width (Ex. 1)</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_bg_hover_color">
                            <label for="coupon_generator_coupon_amount">Button Background Hover Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_bg_hover_color" value="<?php echo esc_attr($wceazy_psb_btn_bg_hover_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_bg_hover_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_border_hover_color">
                            <label for="coupon_generator_coupon_amount">Button Border Hover Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_border_hover_color" value="<?php echo esc_attr($wceazy_psb_btn_border_hover_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_border_hover_color">Select Color</label>
                                </div>
                            </div>
                        </div>



                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_font_hover_color">
                            <label for="coupon_generator_coupon_amount">Button Hover Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_sticky_bar_btn_font_hover_color" value="<?php echo esc_attr($wceazy_psb_btn_font_hover_color); ?>">
                                    <label for="wceazy_product_sticky_bar_btn_font_hover_color">Select Color</label>
                                </div>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_padding_left_right">
                            <label for="coupon_generator_coupon_amount">Button Padding Left-Right <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_product_sticky_bar_text_field" type="number" placeholder="30" value="<?php echo esc_attr($wceazy_psb_btn_padding_left_right); ?>">
                                <small>Set sticky bar add to cart button left-right padding (Default: 30)</small>
                            </div>
                        </div>


                        <div class="wceazy_product_sticky_bar_field_group wceazy_product_sticky_bar_btn_padding_top_bottom">
                            <label for="coupon_generator_coupon_amount">Button Padding Top-Bottom <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_product_sticky_bar_text_field" type="number" placeholder="10" value="<?php echo esc_attr($wceazy_psb_btn_padding_top_bottom); ?>">
                                <small>Set sticky bar add to cart button top-bottom padding (Default: 10)</small>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>


        <div class="wceazy_product_sticky_bar_bottom_button_section">
            <button onclick="wceazy_product_sticky_bar_save();">Save Settings</button>
        </div>



    </div>

</div>