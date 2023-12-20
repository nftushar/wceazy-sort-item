<?php


$wceazy_one_click_checkout_settings = get_option('wceazy_one_click_checkout_settings', False);
$wceazy_occ_settings = $wceazy_one_click_checkout_settings ? json_decode($wceazy_one_click_checkout_settings, true) : array();

$wceazy_occ_disable_cart = isset($wceazy_occ_settings["disable_cart"]) ? $wceazy_occ_settings["disable_cart"] : "yes";
$wceazy_occ_enable_single_page = isset($wceazy_occ_settings["enable_single_page"]) ? $wceazy_occ_settings["enable_single_page"] : "no";
$wceazy_occ_enable_redirect_to_cart = isset($wceazy_occ_settings["enable_redirect_to_cart"]) ? $wceazy_occ_settings["enable_redirect_to_cart"] : "yes";
$wceazy_occ_enable_custom_url = isset($wceazy_occ_settings["enable_custom_url"]) ? $wceazy_occ_settings["enable_custom_url"] : "no";
$wceazy_occ_redirect_to_page = isset($wceazy_occ_settings["redirect_to_page"]) ? $wceazy_occ_settings["redirect_to_page"] : wc_get_page_permalink( 'checkout' );
$wceazy_occ_redirect_to_custom_url = isset($wceazy_occ_settings["redirect_to_custom_url"]) ? $wceazy_occ_settings["redirect_to_custom_url"] : wc_get_page_permalink( 'checkout' );
$wceazy_occ_disable_continue_shopping_button = isset($wceazy_occ_settings["disable_continue_shopping_button"]) ? $wceazy_occ_settings["disable_continue_shopping_button"] : "no";

$wceazy_occ_enable_product_ajax_to_cart = isset($wceazy_occ_settings["enable_product_ajax_to_cart"]) ? $wceazy_occ_settings["enable_product_ajax_to_cart"] : "no";
$wceazy_occ_change_add_to_cart_button_text = isset($wceazy_occ_settings["change_add_to_cart_button_text"]) ? $wceazy_occ_settings["change_add_to_cart_button_text"] : "no";
$wceazy_occ_cart_button_text = isset($wceazy_occ_settings["cart_button_text"]) ? $wceazy_occ_settings["cart_button_text"] : "Add to cart";
$wceazy_occ_select_options_button_text = isset($wceazy_occ_settings["select_options_button_text"]) ? $wceazy_occ_settings["select_options_button_text"] : "Select Options";
$wceazy_occ_read_more_button_text = isset($wceazy_occ_settings["read_more_button_text"]) ? $wceazy_occ_settings["read_more_button_text"] : "Read More";

$wceazy_occ_enable_buy_now_button_on_product = isset($wceazy_occ_settings["enable_buy_now_button_on_product"]) ? $wceazy_occ_settings["enable_buy_now_button_on_product"] : "no";
$wceazy_occ_buy_btn_label_on_product = isset($wceazy_occ_settings["buy_btn_label_on_product"]) ? $wceazy_occ_settings["buy_btn_label_on_product"] : "Buy Now";
$wceazy_occ_buy_btn_redirect_on_product = isset($wceazy_occ_settings["buy_btn_redirect_on_product"]) ? $wceazy_occ_settings["buy_btn_redirect_on_product"] : wc_get_checkout_url();
$wceazy_occ_buy_btn_position_on_product = isset($wceazy_occ_settings["buy_btn_position_on_product"]) ? $wceazy_occ_settings["buy_btn_position_on_product"] : "";
$wceazy_occ_buy_btn_size_on_product = isset($wceazy_occ_settings["buy_btn_size_on_product"]) ? $wceazy_occ_settings["buy_btn_size_on_product"] : "";
$wceazy_occ_buy_now_btn_product_mt = isset($wceazy_occ_settings["buy_now_btn_product_mt"]) ? $wceazy_occ_settings["buy_now_btn_product_mt"] : "";
$wceazy_occ_buy_now_btn_product_mb = isset($wceazy_occ_settings["buy_now_btn_product_mb"]) ? $wceazy_occ_settings["buy_now_btn_product_mb"] : "";
$wceazy_occ_buy_now_btn_product_ml = isset($wceazy_occ_settings["buy_now_btn_product_ml"]) ? $wceazy_occ_settings["buy_now_btn_product_ml"] : "";
$wceazy_occ_buy_now_btn_product_mr = isset($wceazy_occ_settings["buy_now_btn_product_mr"]) ? $wceazy_occ_settings["buy_now_btn_product_mr"] : "";

$wceazy_occ_enable_buy_now_button_on_product_archive = isset($wceazy_occ_settings["enable_buy_now_button_on_product_archive"]) ? $wceazy_occ_settings["enable_buy_now_button_on_product_archive"] : "no";
$wceazy_occ_buy_btn_label_on_product_archive = isset($wceazy_occ_settings["buy_btn_label_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_label_on_product_archive"] : "Buy Now";
$wceazy_occ_buy_btn_redirect_on_product_archive = isset($wceazy_occ_settings["buy_btn_redirect_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_redirect_on_product_archive"] : wc_get_checkout_url();
$wceazy_occ_buy_btn_position_on_product_archive = isset($wceazy_occ_settings["buy_btn_position_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_position_on_product_archive"] : "";
$wceazy_occ_buy_btn_size_on_product_archive = isset($wceazy_occ_settings["buy_btn_size_on_product_archive"]) ? $wceazy_occ_settings["buy_btn_size_on_product_archive"] : "";
$wceazy_occ_buy_now_btn_product_archive_mt = isset($wceazy_occ_settings["buy_now_btn_product_archive_mt"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mt"] : "";
$wceazy_occ_buy_now_btn_product_archive_mb = isset($wceazy_occ_settings["buy_now_btn_product_archive_mb"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mb"] : "";
$wceazy_occ_buy_now_btn_product_archive_ml = isset($wceazy_occ_settings["buy_now_btn_product_archive_ml"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_ml"] : "";
$wceazy_occ_buy_now_btn_product_archive_mr = isset($wceazy_occ_settings["buy_now_btn_product_archive_mr"]) ? $wceazy_occ_settings["buy_now_btn_product_archive_mr"] : "";

$wceazy_occ_buy_now_btn_color = isset($wceazy_occ_settings["buy_now_btn_color"]) ? $wceazy_occ_settings["buy_now_btn_color"] : "#ffffff";
$wceazy_occ_buy_now_btn_bg_color = isset($wceazy_occ_settings["buy_now_btn_bg_color"]) ? $wceazy_occ_settings["buy_now_btn_bg_color"] : "#0170B9";
$wceazy_occ_buy_now_btn_hover_color = isset($wceazy_occ_settings["buy_now_btn_hover_color"]) ? $wceazy_occ_settings["buy_now_btn_hover_color"] : "#ffffff";
$wceazy_occ_buy_now_btn_hover_bg_color = isset($wceazy_occ_settings["buy_now_btn_hover_bg_color"]) ? $wceazy_occ_settings["buy_now_btn_hover_bg_color"] : "#000000";
$wceazy_occ_buy_now_btn_ptpb = isset($wceazy_occ_settings["buy_now_btn_ptpb"]) ? $wceazy_occ_settings["buy_now_btn_ptpb"] : "";
$wceazy_occ_buy_now_btn_plpr = isset($wceazy_occ_settings["buy_now_btn_plpr"]) ? $wceazy_occ_settings["buy_now_btn_plpr"] : "";
$wceazy_occ_buy_now_btn_border_radius = isset($wceazy_occ_settings["buy_now_btn_border_radius"]) ? $wceazy_occ_settings["buy_now_btn_border_radius"] : "";

$wceazy_occ_remove_order_comment = isset($wceazy_occ_settings["remove_order_comment"]) ? $wceazy_occ_settings["remove_order_comment"] : "no";
$wceazy_occ_remove_coupon_form = isset($wceazy_occ_settings["remove_coupon_form"]) ? $wceazy_occ_settings["remove_coupon_form"] : "no";
$wceazy_occ_remove_policy_text = isset($wceazy_occ_settings["remove_policy_text"]) ? $wceazy_occ_settings["remove_policy_text"] : "no";
$wceazy_occ_remove_terms_condition = isset($wceazy_occ_settings["remove_terms_condition"]) ? $wceazy_occ_settings["remove_terms_condition"] : "no";
$wceazy_occ_remove_billing_fields = isset($wceazy_occ_settings["remove_billing_fields"]) ? explode(",",$wceazy_occ_settings["remove_billing_fields"]) : array();
$wceazy_occ_remove_shipping_fields = isset($wceazy_occ_settings["remove_shipping_fields"]) ? explode(",",$wceazy_occ_settings["remove_shipping_fields"]) : array();


?>



<div id="wceazy_one_click_checkout">


    <div class="wceazy_one_click_checkout_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_one_click_checkout_page_title">
        <div class="page_title_part_left">
            <h2>One Click Checkout</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_one_click_checkout_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_one_click_checkout_container">


        <div class="wceazy_one_click_checkout_tab">
            <div class="wceazy_one_click_checkout_tab_part_left">
                <div class="coupon_data_tabs">
                    <div class="tab_item tab_item_active" data-target="tab_general"><h1>General</h1></div>
                    <div class="tab_item" data-target="tab_add_to_cart"><h1>Add To Cart</h1></div>
                    <div class="tab_item" data-target="tab_buy_now_button"><h1>Buy Now Button</h1></div>
                    <div class="tab_item" data-target="tab_checkout"><h1>Checkout</h1></div>
                </div>
            </div>

            <div class="wceazy_one_click_checkout_tab_part_right">

                <div class="coupon_tab_body" data-id="tab_general">
                    <div class="tab_body_title"><h1>General Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_disable_cart">
                            <label for="coupon_generator_coupon_amount">Disable cart page?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_disable_cart == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on to disable cart page, so that cart page will be redirected to checkout page.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_single_page">
                            <label for="coupon_generator_coupon_amount">Enable single page checkout?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_single_page == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on to enable single page checkout, so checkout page will show the cart as well.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_redirect_to_cart">
                            <label for="coupon_generator_coupon_amount">Enable redirect on Add to Cart</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_redirect_to_cart == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                                <small>Once enabled, after clicking add to cart button customer will be directly redirected to Checkout page.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_custom_url">
                            <label for="coupon_generator_coupon_amount">Redirect to custom url?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_custom_url == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                                <small>Redirect to custom url instead of page, so using this you can redirect to any page.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_redirect_to_page">
                            <label for="coupon_generator_coupon_amount">Redirect to page</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_one_click_checkout_select_field">
                                    <option value=""> Please select</option>
                                    <?php foreach (get_pages() as $single_page) { ?>
                                        <option value="<?php echo esc_attr(get_permalink( $single_page->ID )); ?>" <?php echo esc_attr(get_permalink( $single_page->ID ) == $wceazy_occ_redirect_to_page ? "selected" : ""); ?>> <?php echo esc_attr($single_page->post_title); ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_redirect_to_custom_url">
                            <label for="coupon_generator_coupon_amount">Redirect to custom url</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_redirect_to_custom_url); ?>">
                                <small>Redirect to this any custom url of your website e.g.: http://yourwebsite.com</small>
                            </div>
                        </div>


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_disable_continue_shopping_button">
                            <label for="coupon_generator_coupon_amount">Disable continue shopping button</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_disable_continue_shopping_button == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>WooCommerce shows a continue shopping button after a product is added to cart, with this option you can disable that link so user remain on checkout page.</small>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_add_to_cart">
                    <div class="tab_body_title"><h1>Add to Cart Button Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_product_ajax_to_cart">
                            <label for="coupon_generator_coupon_amount">Ajax add to cart on single product <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_enable_product_ajax_to_cart == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on to enable ajax add to cart on single product.</small>
                            </div>
                        </div>


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_change_add_to_cart_button_text">
                            <label for="coupon_generator_coupon_amount">Change Add to cart button text</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_change_add_to_cart_button_text == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                                <small>Turn on to change the button text of add to cart button.</small>
                            </div>
                        </div>


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_cart_button_text">
                            <label for="coupon_generator_coupon_amount">Add to cart button text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_cart_button_text); ?>">
                                <small>This text will be shown inside add to cart button.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_select_options_button_text">
                            <label for="coupon_generator_coupon_amount">Select options button text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_select_options_button_text); ?>">
                                <small>This text will be shown on the archive page for the variable product, leave blank if you want to use default text.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_read_more_button_text">
                            <label for="coupon_generator_coupon_amount">Read more button text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_read_more_button_text); ?>">
                                <small>This text will be shown on archive page for the product when the product is out of stock, leave blank if you want to use default text.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_buy_now_button">
                    <div class="tab_body_title"><h1>Buy Now Button Settings</h1></div>
                    <div class="tab_body_form">



                        <h4>On product page</h4>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_buy_now_button_on_product">
                            <label for="coupon_generator_coupon_amount">Buy now button ?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_buy_now_button_on_product == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                                <small>Turn on if you want Buy Now button on product page.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_label_on_product">
                            <label for="coupon_generator_coupon_amount">Buy now button label <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_label_on_product); ?>">
                                <small>Buy now button label</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_redirect_on_product">
                            <label for="coupon_generator_coupon_amount">Redirect to page <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field">
                                    <option value=""> Please select</option>
                                    <?php foreach (get_pages() as $single_page) { ?>
                                        <option value="<?php echo esc_attr(get_permalink( $single_page->ID )); ?>" <?php echo esc_attr(get_permalink( $single_page->ID ) == $wceazy_occ_buy_btn_redirect_on_product ? "selected" : ""); ?>> <?php echo esc_attr($single_page->post_title); ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_position_on_product">
                            <label for="coupon_generator_coupon_amount">Position Of the Button <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field">
                                    <option value=""> Please select</option>
                                    <option value="before_form" <?php echo esc_attr("before_form" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>> Before add to cart form </option>
                                    <option value="after_form" <?php echo esc_attr("after_form" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>> After add to cart form </option>
                                    <option value="before_button" <?php echo esc_attr("before_button" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>> Before add to cart button </option>
                                    <option value="after_button" <?php echo esc_attr("after_button" == $wceazy_occ_buy_btn_position_on_product ? "selected" : ""); ?>> After add to cart button </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_size_on_product">
                            <label for="coupon_generator_coupon_amount">Buy now button width</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_size_on_product); ?>">
                                <small>Buy now button width on product page (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mt">
                            <label for="coupon_generator_coupon_amount">Buy now button margin top</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mt); ?>">
                                <small>Buy now button margin top (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mb">
                            <label for="coupon_generator_coupon_amount">Buy now button margin bottom</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mb); ?>">
                                <small>Buy now button margin bottom (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_ml">
                            <label for="coupon_generator_coupon_amount">Buy now button margin left</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_ml); ?>">
                                <small>Buy now button margin left (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_mr">
                            <label for="coupon_generator_coupon_amount">Buy now button margin right</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_mr); ?>">
                                <small>Buy now button margin right (PX).</small>
                            </div>
                        </div>






                        <h4>On product archive page</h4>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_enable_buy_now_button_on_product_archive">
                            <label for="coupon_generator_coupon_amount">Buy now button ?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_enable_buy_now_button_on_product_archive == "yes" ? "checked" : ""); ?> onchange="wceazy_one_click_checkout_selection_changed()"><span class="slider round"></span></label>
                                <small>Turn on if you want Buy Now button on product archive page.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_label_on_product_archive">
                            <label for="coupon_generator_coupon_amount">Buy now button label <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_label_on_product_archive); ?>">
                                <small>Buy now button label</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_redirect_on_product_archive">
                            <label for="coupon_generator_coupon_amount">Redirect to page <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field">
                                    <option value=""> Please select</option>
                                    <?php foreach (get_pages() as $single_page) { ?>
                                        <option value="<?php echo esc_attr(get_permalink( $single_page->ID )); ?>" <?php echo esc_attr(get_permalink( $single_page->ID ) == $wceazy_occ_buy_btn_redirect_on_product_archive ? "selected" : ""); ?>> <?php echo esc_attr($single_page->post_title); ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_position_on_product_archive">
                            <label for="coupon_generator_coupon_amount">Position Of the Button <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field">
                                    <option value=""> Please select</option>
                                    <option value="before_button" <?php echo esc_attr("before_button" == $wceazy_occ_buy_btn_position_on_product_archive ? "selected" : ""); ?>> Before add to cart button </option>
                                    <option value="after_button" <?php echo esc_attr("after_button" == $wceazy_occ_buy_btn_position_on_product_archive ? "selected" : ""); ?>> After add to cart button </option>
                                </select>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_btn_size_on_product_archive">
                            <label for="coupon_generator_coupon_amount">Buy now button width</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_btn_size_on_product_archive); ?>">
                                <small>Buy now button width on product archive page (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_archive_mt">
                            <label for="coupon_generator_coupon_amount">Buy now button margin top</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_archive_mt); ?>">
                                <small>Buy now button margin top (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_archive_mb">
                            <label for="coupon_generator_coupon_amount">Buy now button margin bottom</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_archive_mb); ?>">
                                <small>Buy now button margin bottom (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_archive_ml">
                            <label for="coupon_generator_coupon_amount">Buy now button margin left</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_archive_ml); ?>">
                                <small>Buy now button margin left (PX).</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_product_archive_mr">
                            <label for="coupon_generator_coupon_amount">Buy now button margin right</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_one_click_checkout_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_product_archive_mr); ?>">
                                <small>Buy now button margin right (PX).</small>
                            </div>
                        </div>



                        <h4>Buy Now Button design</h4>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_color">
                            <label for="coupon_generator_coupon_amount">Font Color</label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input type="color" id="wceazy_one_click_checkout_buy_now_btn_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_color); ?>">
                                    <label for="wceazy_one_click_checkout_buy_now_btn_color">Select Color</label>
                                </div>
                                <small>Set button font color</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_bg_color">
                            <label for="coupon_generator_coupon_amount">Background Color</label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input type="color" id="wceazy_one_click_checkout_buy_now_btn_bg_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_bg_color); ?>">
                                    <label for="wceazy_one_click_checkout_buy_now_btn_bg_color">Select Color</label>
                                </div>
                                <small>Set button background color</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_hover_color">
                            <label for="coupon_generator_coupon_amount">Hover Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_one_click_checkout_buy_now_btn_hover_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_hover_color); ?>">
                                    <label for="wceazy_one_click_checkout_buy_now_btn_hover_color">Select Color</label>
                                </div>
                                <small>Set button font color on hover</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_hover_bg_color">
                            <label for="coupon_generator_coupon_amount">Hover Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_one_click_checkout_buy_now_btn_hover_bg_color" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_hover_bg_color); ?>">
                                    <label for="wceazy_one_click_checkout_buy_now_btn_hover_bg_color">Select Color</label>
                                </div>
                                <small>Set button background color on hover</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_ptpb">
                            <label for="coupon_generator_coupon_amount">Padding Top-Bottom <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_ptpb); ?>">
                                <small>Buy now button padding top & bottom (PX)</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_plpr">
                            <label for="coupon_generator_coupon_amount">Padding Left-Right <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_plpr); ?>">
                                <small>Buy now button padding left & right (PX)</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_buy_now_btn_border_radius">
                            <label for="coupon_generator_coupon_amount">Border Radius <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <input disabled class="wceazy_one_click_checkout_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_occ_buy_now_btn_border_radius); ?>">
                                <small>Buy now button border radius (PX)</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_checkout">
                    <div class="tab_body_title"><h1>Checkout Settings</h1></div>
                    <div class="tab_body_form">


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_order_comment">
                            <label for="coupon_generator_coupon_amount">Remove order comment?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_remove_order_comment == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on if you want to remove ‘Order Comment’.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_coupon_form">
                            <label for="coupon_generator_coupon_amount">Remove coupon form?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_occ_remove_coupon_form == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on if you want to remove ‘Coupon Form’.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_policy_text">
                            <label for="coupon_generator_coupon_amount">Remove policy text? <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_remove_policy_text == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on if you want to remove ‘Policy Text’.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_terms_condition">
                            <label for="coupon_generator_coupon_amount">Remove terms & condition? <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input disabled type="checkbox" <?php echo esc_attr($wceazy_occ_remove_terms_condition == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Turn on if you want to remove ‘Terms & Condition’.</small>
                            </div>
                        </div>


                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_billing_fields">
                            <label for="coupon_generator_coupon_amount">Remove billing fields? <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <option value="billing_first_name" <?php echo esc_attr(in_array("billing_first_name", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing First Name </option>
                                    <option value="billing_last_name" <?php echo esc_attr(in_array("billing_last_name", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Last Name </option>
                                    <option value="billing_address_1" <?php echo esc_attr(in_array("billing_address_1", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Address 1 </option>
                                    <option value="billing_address_2" <?php echo esc_attr(in_array("billing_address_2", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Address 2 </option>
                                    <option value="billing_country" <?php echo esc_attr(in_array("billing_country", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Country </option>
                                    <option value="billing_city" <?php echo esc_attr(in_array("billing_city", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing City </option>
                                    <option value="billing_state" <?php echo esc_attr(in_array("billing_state", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing State </option>
                                    <option value="billing_postcode" <?php echo esc_attr(in_array("billing_postcode", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Postcode </option>
                                    <option value="billing_company" <?php echo esc_attr(in_array("billing_company", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Company </option>
                                    <option value="billing_phone" <?php echo esc_attr(in_array("billing_phone", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Phone </option>
                                    <option value="billing_email" <?php echo esc_attr(in_array("billing_email", $wceazy_occ_remove_billing_fields) ? "selected" : ""); ?>> Billing Email </option>
                                </select>
                                <small>Select the fields that you want to remove from ‘Billing Section’.</small>
                            </div>
                        </div>

                        <div class="wceazy_one_click_checkout_field_group wceazy_one_click_checkout_remove_shipping_fields">
                            <label for="coupon_generator_coupon_amount">Remove shipping fields? <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <select disabled class="wceazy_one_click_checkout_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <option value="shipping_first_name" <?php echo esc_attr(in_array("shipping_first_name", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping First Name </option>
                                    <option value="shipping_last_name" <?php echo esc_attr(in_array("shipping_last_name", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Last Name </option>
                                    <option value="shipping_address_1" <?php echo esc_attr(in_array("shipping_address_1", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Address 1 </option>
                                    <option value="shipping_address_2" <?php echo esc_attr(in_array("shipping_address_2", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Address 2 </option>
                                    <option value="shipping_country" <?php echo esc_attr(in_array("shipping_country", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Country </option>
                                    <option value="shipping_city" <?php echo esc_attr(in_array("shipping_city", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping City </option>
                                    <option value="shipping_state" <?php echo esc_attr(in_array("shipping_state", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping State </option>
                                    <option value="shipping_postcode" <?php echo esc_attr(in_array("shipping_postcode", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Postcode </option>
                                    <option value="shipping_company" <?php echo esc_attr(in_array("shipping_company", $wceazy_occ_remove_shipping_fields) ? "selected" : ""); ?>> Shipping Company </option>
                                </select>
                                <small>Select the fields that you want to remove from ‘Shipping Section’.</small>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>


        <div class="wceazy_one_click_checkout_bottom_button_section">
            <button onclick="wceazy_one_click_checkout_save();">Save Settings</button>
        </div>



    </div>

</div>