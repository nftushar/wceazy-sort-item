<?php

$wceazy_product_filter_settings = get_option('wceazy_product_filter_settings', False);
$wceazy_pf_settings = $wceazy_product_filter_settings ? json_decode($wceazy_product_filter_settings, true) : array();



$wceazy_pf_show_search_filter = isset($wceazy_pf_settings["show_search_filter"]) ? $wceazy_pf_settings["show_search_filter"] : "yes";
$wceazy_pf_show_price_filter = isset($wceazy_pf_settings["show_price_filter"]) ? $wceazy_pf_settings["show_price_filter"] : "yes";
$wceazy_pf_show_rating_filter = isset($wceazy_pf_settings["show_rating_filter"]) ? $wceazy_pf_settings["show_rating_filter"] : "yes";
$wceazy_pf_show_category_filter = isset($wceazy_pf_settings["show_category_filter"]) ? $wceazy_pf_settings["show_category_filter"] : "yes";
$wceazy_pf_show_stock_filter = isset($wceazy_pf_settings["show_stock_filter"]) ? $wceazy_pf_settings["show_stock_filter"] : "yes";
$wceazy_pf_sidebar_position = isset($wceazy_pf_settings["sidebar_position"]) ? $wceazy_pf_settings["sidebar_position"] : "right";

$wceazy_pf_product_per_page = isset($wceazy_pf_settings["product_per_page"]) ? $wceazy_pf_settings["product_per_page"] : "15";
$wceazy_pf_add_to_cart_btn_text = isset($wceazy_pf_settings["add_to_cart_btn_text"]) ? $wceazy_pf_settings["add_to_cart_btn_text"] : "Add to Cart";
$wceazy_pf_select_options_btn_text = isset($wceazy_pf_settings["select_options_btn_text"]) ? $wceazy_pf_settings["select_options_btn_text"] : "Select Options";
$wceazy_pf_stock_out_btn_text = isset($wceazy_pf_settings["stock_out_btn_text"]) ? $wceazy_pf_settings["stock_out_btn_text"] : "Stock Out";
$wceazy_pf_prev_btn_text = isset($wceazy_pf_settings["prev_btn_text"]) ? $wceazy_pf_settings["prev_btn_text"] : "Previous";
$wceazy_pf_next_btn_text = isset($wceazy_pf_settings["next_btn_text"]) ? $wceazy_pf_settings["next_btn_text"] : "Next";
$wceazy_pf_action_btn_bg_color = isset($wceazy_pf_settings["action_btn_bg_color"]) ? $wceazy_pf_settings["action_btn_bg_color"] : "#6E32C9";
$wceazy_pf_action_btn_text_color = isset($wceazy_pf_settings["action_btn_text_color"]) ? $wceazy_pf_settings["action_btn_text_color"] : "#FFFFFF";
$wceazy_pf_pagination_btn_border_color = isset($wceazy_pf_settings["pagination_btn_border_color"]) ? $wceazy_pf_settings["pagination_btn_border_color"] : "#6E32C9";
$wceazy_pf_pagination_btn_text_color = isset($wceazy_pf_settings["pagination_btn_text_color"]) ? $wceazy_pf_settings["pagination_btn_text_color"] : "#6E32C9";
$wceazy_pf_loader_color = isset($wceazy_pf_settings["loader_color"]) ? $wceazy_pf_settings["loader_color"] : "#E0E1E3";


$wceazy_pf_search_filter_label_text = isset($wceazy_pf_settings["search_filter_label_text"]) ? $wceazy_pf_settings["search_filter_label_text"] : "Search Product";
$wceazy_pf_search_filter_placeholder_text = isset($wceazy_pf_settings["search_filter_placeholder_text"]) ? $wceazy_pf_settings["search_filter_placeholder_text"] : "Search by Product Name";
$wceazy_pf_search_filter_label_color = isset($wceazy_pf_settings["search_filter_label_color"]) ? $wceazy_pf_settings["search_filter_label_color"] : "#222222";
$wceazy_pf_search_filter_input_border_color = isset($wceazy_pf_settings["search_filter_input_border_color"]) ? $wceazy_pf_settings["search_filter_input_border_color"] : "#E4E4E6";
$wceazy_pf_search_filter_input_bg_color = isset($wceazy_pf_settings["search_filter_input_bg_color"]) ? $wceazy_pf_settings["search_filter_input_bg_color"] : "#F6F8FA";
$wceazy_pf_search_filter_input_text_color = isset($wceazy_pf_settings["search_filter_input_text_color"]) ? $wceazy_pf_settings["search_filter_input_text_color"] : "#43454B";

$wceazy_pf_price_filter_label_text = isset($wceazy_pf_settings["price_filter_label_text"]) ? $wceazy_pf_settings["price_filter_label_text"] : "Filter By Price";
$wceazy_pf_price_filter_min_placeholder_text = isset($wceazy_pf_settings["price_filter_min_placeholder_text"]) ? $wceazy_pf_settings["price_filter_min_placeholder_text"] : "Min";
$wceazy_pf_price_filter_max_placeholder_text = isset($wceazy_pf_settings["price_filter_max_placeholder_text"]) ? $wceazy_pf_settings["price_filter_max_placeholder_text"] : "Max";
$wceazy_pf_price_filter_label_color = isset($wceazy_pf_settings["price_filter_label_color"]) ? $wceazy_pf_settings["price_filter_label_color"] : "#222222";
$wceazy_pf_price_filter_input_border_color = isset($wceazy_pf_settings["price_filter_input_border_color"]) ? $wceazy_pf_settings["price_filter_input_border_color"] : "#E4E4E6";
$wceazy_pf_price_filter_input_bg_color = isset($wceazy_pf_settings["price_filter_input_bg_color"]) ? $wceazy_pf_settings["price_filter_input_bg_color"] : "#F6F8FA";
$wceazy_pf_price_filter_input_text_color = isset($wceazy_pf_settings["price_filter_input_text_color"]) ? $wceazy_pf_settings["price_filter_input_text_color"] : "#43454B";


$wceazy_pf_rating_filter_label_text = isset($wceazy_pf_settings["rating_filter_label_text"]) ? $wceazy_pf_settings["rating_filter_label_text"] : "Filter By Rating";
$wceazy_pf_rating_filter_and_up_text = isset($wceazy_pf_settings["rating_filter_and_up_text"]) ? $wceazy_pf_settings["rating_filter_and_up_text"] : "And Up";
$wceazy_pf_rating_filter_label_color = isset($wceazy_pf_settings["rating_filter_label_color"]) ? $wceazy_pf_settings["rating_filter_label_color"] : "#222222";
$wceazy_pf_rating_filter_and_up_color = isset($wceazy_pf_settings["rating_filter_and_up_color"]) ? $wceazy_pf_settings["rating_filter_and_up_color"] : "#555555";
$wceazy_pf_rating_filter_show_5_star_rating = isset($wceazy_pf_settings["rating_filter_show_5_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_5_star_rating"] : "yes";
$wceazy_pf_rating_filter_show_4_star_rating = isset($wceazy_pf_settings["rating_filter_show_4_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_4_star_rating"] : "yes";
$wceazy_pf_rating_filter_show_3_star_rating = isset($wceazy_pf_settings["rating_filter_show_3_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_3_star_rating"] : "yes";
$wceazy_pf_rating_filter_show_2_star_rating = isset($wceazy_pf_settings["rating_filter_show_2_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_2_star_rating"] : "yes";
$wceazy_pf_rating_filter_show_1_star_rating = isset($wceazy_pf_settings["rating_filter_show_1_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_1_star_rating"] : "yes";
$wceazy_pf_rating_filter_show_0_star_rating = isset($wceazy_pf_settings["rating_filter_show_0_star_rating"]) ? $wceazy_pf_settings["rating_filter_show_0_star_rating"] : "no";


$wceazy_pf_category_filter_label_text = isset($wceazy_pf_settings["category_filter_label_text"]) ? $wceazy_pf_settings["category_filter_label_text"] : "Filter By Category";
$wceazy_pf_category_filter_label_color = isset($wceazy_pf_settings["category_filter_label_color"]) ? $wceazy_pf_settings["category_filter_label_color"] : "#222222";
$wceazy_pf_category_filter_category_color = isset($wceazy_pf_settings["category_filter_category_color"]) ? $wceazy_pf_settings["category_filter_category_color"] : "#444444";
$wceazy_pf_category_filter_checkbox_unchecked_bg = isset($wceazy_pf_settings["category_filter_checkbox_unchecked_bg"]) ? $wceazy_pf_settings["category_filter_checkbox_unchecked_bg"] : "#F6F8FA";
$wceazy_pf_category_filter_checkbox_unchecked_border = isset($wceazy_pf_settings["category_filter_checkbox_unchecked_border"]) ? $wceazy_pf_settings["category_filter_checkbox_unchecked_border"] : "#E4E4E6";
$wceazy_pf_category_filter_checkbox_checked_bg = isset($wceazy_pf_settings["category_filter_checkbox_checked_bg"]) ? $wceazy_pf_settings["category_filter_checkbox_checked_bg"] : "#787B83";


$wceazy_pf_stock_filter_label_text = isset($wceazy_pf_settings["stock_filter_label_text"]) ? $wceazy_pf_settings["stock_filter_label_text"] : "Filter By Stock";
$wceazy_pf_stock_filter_in_stock_text = isset($wceazy_pf_settings["stock_filter_in_stock_text"]) ? $wceazy_pf_settings["stock_filter_in_stock_text"] : "In Stock";
$wceazy_pf_stock_filter_out_stock_text = isset($wceazy_pf_settings["stock_filter_out_stock_text"]) ? $wceazy_pf_settings["stock_filter_out_stock_text"] : "Out of Stock";
$wceazy_pf_stock_filter_label_color = isset($wceazy_pf_settings["stock_filter_label_color"]) ? $wceazy_pf_settings["stock_filter_label_color"] : "#222222";
$wceazy_pf_stock_filter_stock_color = isset($wceazy_pf_settings["stock_filter_stock_color"]) ? $wceazy_pf_settings["stock_filter_stock_color"] : "#444444";
$wceazy_pf_stock_filter_checkbox_unchecked_bg = isset($wceazy_pf_settings["stock_filter_checkbox_unchecked_bg"]) ? $wceazy_pf_settings["stock_filter_checkbox_unchecked_bg"] : "#F6F8FA";
$wceazy_pf_stock_filter_checkbox_unchecked_border = isset($wceazy_pf_settings["stock_filter_checkbox_unchecked_border"]) ? $wceazy_pf_settings["stock_filter_checkbox_unchecked_border"] : "#E4E4E6";
$wceazy_pf_stock_filter_checkbox_checked_bg = isset($wceazy_pf_settings["stock_filter_checkbox_checked_bg"]) ? $wceazy_pf_settings["stock_filter_checkbox_checked_bg"] : "#787B83";

?>


<div id="wceazy_product_filter">


    <div class="wceazy_product_filter_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_product_filter_page_title">
        <div class="page_title_part_left">
            <h2>Product Filter</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_product_filter_copy_shortcode" onclick="wceazy_product_filter_copy_shortcode()" style="display: inline-block;">[wceazy_product_filter]</button>
            <button class="wceazy_product_filter_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_product_filter_container">


        <div class="wceazy_product_filter_tab">
            <div class="wceazy_product_filter_tab_part_left">
                <div class="coupon_data_tabs">
                    <div class="tab_item tab_item_active" data-target="tab_general">
                        <h1>General</h1>
                    </div>
                    <div class="tab_item" data-target="tab_product">
                        <h1>Product Settings</h1>
                    </div>
                    <div class="tab_item" data-target="tab_search_filter">
                        <h1>Search Filter</h1>
                    </div>
                    <div class="tab_item" data-target="tab_price_filter">
                        <h1>Price Filter</h1>
                    </div>
                    <div class="tab_item" data-target="tab_rating_filter">
                        <h1>Rating Filter</h1>
                    </div>
                    <div class="tab_item" data-target="tab_category_filter">
                        <h1>Category Filter</h1>
                    </div>
                    <div class="tab_item" data-target="tab_stock_filter">
                        <h1>Stock Filter</h1>
                    </div>
                    <div class="tab_item" data-target="tab_sequence_filter">
                        <h1>Sequence Customizer</h1>
                    </div>
                </div>
            </div>

            <div class="wceazy_product_filter_tab_part_right">

                <div class="coupon_tab_body" data-id="tab_general">
                    <div class="tab_body_title">
                        <h1>General Settings</h1>
                    </div>
                    <div class="tab_body_form">


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_show_search_filter">
                            <label for="coupon_generator_coupon_amount">Show Search Filter?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_show_search_filter == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show search filter in sidebar.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_show_price_filter">
                            <label for="coupon_generator_coupon_amount">Show Price Filter?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_show_price_filter == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show price filter in sidebar.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_show_rating_filter">
                            <label for="coupon_generator_coupon_amount">Show Rating Filter?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_show_rating_filter == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show rating filter in sidebar.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_show_category_filter">
                            <label for="coupon_generator_coupon_amount">Show Category Filter?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_show_category_filter == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show category filter in sidebar.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_show_stock_filter">
                            <label for="coupon_generator_coupon_amount">Show Stock Status Filter?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_show_stock_filter == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show stock status filter in sidebar.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_sidebar_position">
                            <label for="coupon_generator_coupon_amount">Filter Sidebar Position</label>
                            <div class="field_with_msg_container">
                                <select class="wceazy_product_filter_select_field">
                                    <option value=""> Please select</option>
                                    <option value="right" <?php echo esc_attr("right" == $wceazy_pf_sidebar_position ? "selected" : ""); ?>> Right </option>
                                    <option value="left" <?php echo esc_attr("left" == $wceazy_pf_sidebar_position ? "selected" : ""); ?>> Left </option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_product">
                    <div class="tab_body_title">
                        <h1>Product Settings</h1>
                    </div>
                    <div class="tab_body_form">




                        <div class="wceazy_product_filter_field_group wceazy_product_filter_product_per_page">
                            <label for="coupon_generator_coupon_amount">Max Product Per Page</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="number" placeholder="" value="<?php echo esc_attr($wceazy_pf_product_per_page); ?>">
                                <small>Set maximum number of products can be showed in a page.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_add_to_cart_btn_text">
                            <label for="coupon_generator_coupon_amount">"Add to Cart" Button Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_add_to_cart_btn_text); ?>">
                                <small>Set the "Add to Cart" button text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_select_options_btn_text">
                            <label for="coupon_generator_coupon_amount">"Select Options" Button Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_select_options_btn_text); ?>">
                                <small>Set the "Select Options" button text for variable products.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_out_btn_text">
                            <label for="coupon_generator_coupon_amount">"Stock Out" Button Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_stock_out_btn_text); ?>">
                                <small>Set the "Stock Out" button text for stock out products.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_prev_btn_text">
                            <label for="coupon_generator_coupon_amount">"Previous Page" Button Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_prev_btn_text); ?>">
                                <small>Set the "Previous Page" button text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_next_btn_text">
                            <label for="coupon_generator_coupon_amount">"Next Page" Button Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_next_btn_text); ?>">
                                <small>Set the "Next Page" button text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_action_btn_bg_color">
                            <label for="coupon_generator_coupon_amount">Action Button Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_action_btn_bg_color" value="<?php echo esc_attr($wceazy_pf_action_btn_bg_color); ?>">
                                    <label for="wceazy_product_filter_action_btn_bg_color">Select Color</label>
                                </div>
                                <small>Set background color of Add to Cart, Select Option and Stock Out button.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_action_btn_text_color">
                            <label for="coupon_generator_coupon_amount">Action Button Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_action_btn_text_color" value="<?php echo esc_attr($wceazy_pf_action_btn_text_color); ?>">
                                    <label for="wceazy_product_filter_action_btn_text_color">Select Color</label>
                                </div>
                                <small>Set text color of Add to Cart, Select Option and Stock Out button.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_pagination_btn_border_color">
                            <label for="coupon_generator_coupon_amount">Pagination Button Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_pagination_btn_border_color" value="<?php echo esc_attr($wceazy_pf_pagination_btn_border_color); ?>">
                                    <label for="wceazy_product_filter_pagination_btn_border_color">Select Color</label>
                                </div>
                                <small>Set border color of Previous Page and Next Page buttons.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_pagination_btn_text_color">
                            <label for="coupon_generator_coupon_amount">Pagination Button Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_pagination_btn_text_color" value="<?php echo esc_attr($wceazy_pf_pagination_btn_text_color); ?>">
                                    <label for="wceazy_product_filter_pagination_btn_text_color">Select Color</label>
                                </div>
                                <small>Set text color of Previous Page and Next Page buttons.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_loader_color">
                            <label for="coupon_generator_coupon_amount">Product Loader Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_loader_color" value="<?php echo esc_attr($wceazy_pf_loader_color); ?>">
                                    <label for="wceazy_product_filter_loader_color">Select Color</label>
                                </div>
                                <small>Set the color of product loader animation.</small>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_search_filter">
                    <div class="tab_body_title">
                        <h1>Search Filter Settings</h1>
                    </div>
                    <div class="tab_body_form">



                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_label_text">
                            <label for="coupon_generator_coupon_amount">Label Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_search_filter_label_text); ?>">
                                <small>Set the Search Filter Label text.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_placeholder_text">
                            <label for="coupon_generator_coupon_amount">Placeholder Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_search_filter_placeholder_text); ?>">
                                <small>Set the Search Field input placeholder text.</small>
                            </div>
                        </div>



                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_label_color">
                            <label for="coupon_generator_coupon_amount">Label Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_search_filter_label_color" value="<?php echo esc_attr($wceazy_pf_search_filter_label_color); ?>">
                                    <label for="wceazy_product_filter_search_filter_label_color">Select Color</label>
                                </div>
                                <small>Set text color of label of the search filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_input_border_color">
                            <label for="coupon_generator_coupon_amount">Input Field Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_search_filter_input_border_color" value="<?php echo esc_attr($wceazy_pf_search_filter_input_border_color); ?>">
                                    <label for="wceazy_product_filter_search_filter_input_border_color">Select Color</label>
                                </div>
                                <small>Set border color of input field of the search filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_input_bg_color">
                            <label for="coupon_generator_coupon_amount">Input Field Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_search_filter_input_bg_color" value="<?php echo esc_attr($wceazy_pf_search_filter_input_bg_color); ?>">
                                    <label for="wceazy_product_filter_search_filter_input_bg_color">Select Color</label>
                                </div>
                                <small>Set background color of input field of the search filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_search_filter_input_text_color">
                            <label for="coupon_generator_coupon_amount">Input Field Text Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_search_filter_input_text_color" value="<?php echo esc_attr($wceazy_pf_search_filter_input_text_color); ?>">
                                    <label for="wceazy_product_filter_search_filter_input_text_color">Select Color</label>
                                </div>
                                <small>Set text color of input field of the search filter.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_price_filter">
                    <div class="tab_body_title">
                        <h1>Price Filter Settings</h1>
                    </div>
                    <div class="tab_body_form">



                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_label_text">
                            <label for="coupon_generator_coupon_amount">Label Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_price_filter_label_text); ?>">
                                <small>Set the Price Filter Label text.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_min_placeholder_text">
                            <label for="coupon_generator_coupon_amount">Min Placeholder Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_price_filter_min_placeholder_text); ?>">
                                <small>Set the Minimum Price Field input placeholder text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_max_placeholder_text">
                            <label for="coupon_generator_coupon_amount">Max Placeholder Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_price_filter_max_placeholder_text); ?>">
                                <small>Set the Maximum Price Field input placeholder text.</small>
                            </div>
                        </div>



                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_label_color">
                            <label for="coupon_generator_coupon_amount">Label Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_price_filter_label_color" value="<?php echo esc_attr($wceazy_pf_price_filter_label_color); ?>">
                                    <label for="wceazy_product_filter_price_filter_label_color">Select Color</label>
                                </div>
                                <small>Set text color of label of the price filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_input_border_color">
                            <label for="coupon_generator_coupon_amount">Input Field Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_price_filter_input_border_color" value="<?php echo esc_attr($wceazy_pf_price_filter_input_border_color); ?>">
                                    <label for="wceazy_product_filter_price_filter_input_border_color">Select Color</label>
                                </div>
                                <small>Set border color of input field of the price filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_input_bg_color">
                            <label for="coupon_generator_coupon_amount">Input Field Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_price_filter_input_bg_color" value="<?php echo esc_attr($wceazy_pf_price_filter_input_bg_color); ?>">
                                    <label for="wceazy_product_filter_price_filter_input_bg_color">Select Color</label>
                                </div>
                                <small>Set background color of input field of the price filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_price_filter_input_text_color">
                            <label for="coupon_generator_coupon_amount">Input Field Text Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_price_filter_input_text_color" value="<?php echo esc_attr($wceazy_pf_price_filter_input_text_color); ?>">
                                    <label for="wceazy_product_filter_price_filter_input_text_color">Select Color</label>
                                </div>
                                <small>Set text color of input field of the price filter.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_rating_filter">
                    <div class="tab_body_title">
                        <h1>Rating Filter Settings</h1>
                    </div>
                    <div class="tab_body_form">



                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_label_text">
                            <label for="coupon_generator_coupon_amount">Label Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_rating_filter_label_text); ?>">
                                <small>Set the Rating Filter Label text.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_and_up_text">
                            <label for="coupon_generator_coupon_amount">"And Up" Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_rating_filter_and_up_text); ?>">
                                <small>Set the "And Up" text shown beside ratings.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_label_color">
                            <label for="coupon_generator_coupon_amount">Label Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_rating_filter_label_color" value="<?php echo esc_attr($wceazy_pf_rating_filter_label_color); ?>">
                                    <label for="wceazy_product_filter_rating_filter_label_color">Select Color</label>
                                </div>
                                <small>Set text color of label of the rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_and_up_color">
                            <label for="coupon_generator_coupon_amount">"And Up" Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_rating_filter_and_up_color" value="<?php echo esc_attr($wceazy_pf_rating_filter_and_up_color); ?>">
                                    <label for="wceazy_product_filter_rating_filter_and_up_color">Select Color</label>
                                </div>
                                <small>Set text color of "And Up" text shown beside ratings.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_5_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 5 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_5_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 5 star rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_4_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 4 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_4_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 4 star rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_3_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 3 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_3_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 3 star rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_2_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 2 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_2_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 2 star rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_1_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 1 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_1_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 1 star rating filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_rating_filter_show_0_star_rating">
                            <label for="coupon_generator_coupon_amount">Show 0 Star Rating?</label>
                            <div class="field_with_msg_container">
                                <label class="toggle_switch"><input type="checkbox" <?php echo esc_attr($wceazy_pf_rating_filter_show_0_star_rating == "yes" ? "checked" : ""); ?>><span class="slider round"></span></label>
                                <small>Please turn off if you do not want to show the 0 star rating filter.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_category_filter">
                    <div class="tab_body_title">
                        <h1>Category Filter Settings</h1>
                    </div>
                    <div class="tab_body_form">


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_label_text">
                            <label for="coupon_generator_coupon_amount">Label Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_category_filter_label_text); ?>">
                                <small>Set the Category Filter Label text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_label_color">
                            <label for="coupon_generator_coupon_amount">Label Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_category_filter_label_color" value="<?php echo esc_attr($wceazy_pf_category_filter_label_color); ?>">
                                    <label for="wceazy_product_filter_category_filter_label_color">Select Color</label>
                                </div>
                                <small>Set text color of label of the category filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_category_color">
                            <label for="coupon_generator_coupon_amount">Category Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_category_filter_category_color" value="<?php echo esc_attr($wceazy_pf_category_filter_category_color); ?>">
                                    <label for="wceazy_product_filter_category_filter_category_color">Select Color</label>
                                </div>
                                <small>Set text color of category name.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_checkbox_unchecked_bg">
                            <label for="coupon_generator_coupon_amount">Checkbox Unchecked Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_category_filter_checkbox_unchecked_bg" value="<?php echo esc_attr($wceazy_pf_category_filter_checkbox_unchecked_bg); ?>">
                                    <label for="wceazy_product_filter_category_filter_checkbox_unchecked_bg">Select Color</label>
                                </div>
                                <small>Set the background color of checkbox on unchecked state.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_checkbox_unchecked_border">
                            <label for="coupon_generator_coupon_amount">Checkbox Unchecked Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_category_filter_checkbox_unchecked_border" value="<?php echo esc_attr($wceazy_pf_category_filter_checkbox_unchecked_border); ?>">
                                    <label for="wceazy_product_filter_category_filter_checkbox_unchecked_border">Select Color</label>
                                </div>
                                <small>Set the border color of checkbox on unchecked state.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_category_filter_checkbox_checked_bg">
                            <label for="coupon_generator_coupon_amount">Checkbox Checked Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_category_filter_checkbox_checked_bg" value="<?php echo esc_attr($wceazy_pf_category_filter_checkbox_checked_bg); ?>">
                                    <label for="wceazy_product_filter_category_filter_checkbox_checked_bg">Select Color</label>
                                </div>
                                <small>Set the background color of checkbox on checked state.</small>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="coupon_tab_body" data-id="tab_stock_filter">
                    <div class="tab_body_title">
                        <h1>Stock Filter Settings</h1>
                    </div>
                    <div class="tab_body_form">


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_label_text">
                            <label for="coupon_generator_coupon_amount">Label Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_stock_filter_label_text); ?>">
                                <small>Set the Stock Filter Label text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_in_stock_text">
                            <label for="coupon_generator_coupon_amount">"In Stock" Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_stock_filter_in_stock_text); ?>">
                                <small>Set the "In Stock" option text.</small>
                            </div>
                        </div>

                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_out_stock_text">
                            <label for="coupon_generator_coupon_amount">"Out of Stock" Text</label>
                            <div class="field_with_msg_container">
                                <input class="wceazy_product_filter_text_field" type="text" placeholder="" value="<?php echo esc_attr($wceazy_pf_stock_filter_out_stock_text); ?>">
                                <small>Set the "Out of Stock" option text.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_label_color">
                            <label for="coupon_generator_coupon_amount">Label Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_stock_filter_label_color" value="<?php echo esc_attr($wceazy_pf_stock_filter_label_color); ?>">
                                    <label for="wceazy_product_filter_stock_filter_label_color">Select Color</label>
                                </div>
                                <small>Set text color of label of the stock filter.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_stock_color">
                            <label for="coupon_generator_coupon_amount">Stock Status Font Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_stock_filter_stock_color" value="<?php echo esc_attr($wceazy_pf_stock_filter_stock_color); ?>">
                                    <label for="wceazy_product_filter_stock_filter_stock_color">Select Color</label>
                                </div>
                                <small>Set text color of stock status name.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_checkbox_unchecked_bg">
                            <label for="coupon_generator_coupon_amount">Checkbox Unchecked Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_stock_filter_checkbox_unchecked_bg" value="<?php echo esc_attr($wceazy_pf_stock_filter_checkbox_unchecked_bg); ?>">
                                    <label for="wceazy_product_filter_stock_filter_checkbox_unchecked_bg">Select Color</label>
                                </div>
                                <small>Set the background color of checkbox on unchecked state.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group wceazy_product_filter_stock_filter_checkbox_unchecked_border">
                            <label for="coupon_generator_coupon_amount">Checkbox Unchecked Border Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_stock_filter_checkbox_unchecked_border" value="<?php echo esc_attr($wceazy_pf_stock_filter_checkbox_unchecked_border); ?>">
                                    <label for="wceazy_product_filter_stock_filter_checkbox_unchecked_border">Select Color</label>
                                </div>
                                <small>Set the border color of checkbox on unchecked state.</small>
                            </div>
                        </div>


                        <div class="wceazy_product_filter_field_group  wceazy_product_filter_stock_filter_checkbox_checked_bg">
                            <label for="coupon_generator_coupon_amount">Checkbox Checked Background Color <span style="color: #FF521D;">(Pro)</span></label>
                            <div class="field_with_msg_container">
                                <div class="color_picker_area">
                                    <input disabled type="color" id="wceazy_product_filter_stock_filter_checkbox_checked_bg" value="<?php echo esc_attr($wceazy_pf_stock_filter_checkbox_checked_bg); ?>">
                                    <label for="wceazy_product_filter_stock_filter_checkbox_checked_bg">Select Color</label>
                                </div>
                                <small>Set the background color of checkbox on checked state.</small>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="coupon_tab_body" data-id="tab_sequence_filter">
                    <form method="post" action="">
                        <div class="tab_body_title">
                            <h1>Drag and Drop Sequence Customizer</h1>
                        </div>

                        <div class="tab_body_form" id="sequence-customizer">
                            <div id="sortable-wrapper" class="product_filter_sortable">
                                <?php 
                                $widgetsOrder = get_option('wceazy_product_filter_settings', json_encode(['stock_filter_sequence_test' => ['rating', 'search', 'category', 'stock', 'price']]));
                                $widgetsOrder = json_decode($widgetsOrder, true); 
                                $widgetList = [
                                    'rating'   => $wceazy_pf_rating_filter_label_text,
                                    'search'   => $wceazy_pf_search_filter_label_text,
                                    'category' => $wceazy_pf_category_filter_label_text,
                                    'stock'    => $wceazy_pf_stock_filter_label_text,
                                    'price'    => $wceazy_pf_price_filter_label_text
                                ];
 
                                foreach ($widgetsOrder['stock_filter_sequence_test'] as $widget) { 

                                    $label = $widgetList[$widget];

                                    echo "<div class='wceazy_product_filter_field_group' data-widget='$widget'>
                                        <div class='field_with_msg_container'>
                                            <label class='sequence-item wceazy_product_filter_text_field'>" . esc_html($label) . "</label>
                                        </div>
                                    </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>


        <div class="wceazy_product_filter_bottom_button_section">
            <button onclick="wceazy_product_filter_save();">Save Settings</button>
        </div>



    </div>

</div>

<?php
