<div id="wceazy_coupon_generator">


    <div class="wceazy_coupon_generator_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_coupon_generator_page_title">
        <div class="page_title_part_left">
            <h2>Coupon Generator</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_coupon_generator_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_coupon_generator_container">


        <form class="wceazy_coupon_generator_form_for_reset_purpose">

            <div class="wceazy_coupon_generator_top_action">


                <div class="wceazy_coupon_generator_field_group_flex wceazy_coupon_generator_prefix">
                    <label>Prefix <span style="color: #FF521D;">(Pro)</span></label>
                    <input class="wceazy_coupon_generator_text_field" type="text" placeholder="Coupon prefix" disabled>
                </div>

                <div class="wceazy_coupon_generator_field_group_flex wceazy_coupon_generator_number_of_coupon">
                    <label>Number of Coupons</label>
                    <input onkeyup="wceazy_coupon_generator_removeChar(this);" class="wceazy_coupon_generator_text_field" type="text" placeholder="Total number of coupons">
                </div>


                <div class="wceazy_coupon_generator_field_group_flex wceazy_coupon_generator_coupon_type">
                    <label class="wceazy_coupon_generator_select2_label">Coupon Type <span style="color: #FF521D;">(Pro)</span></label>
                    <select class="wceazy_coupon_generator_select_field">
                        <option value=""> Please select</option>
                        <option value="char">Characters</option>
                        <option value="num" disabled>Numbers (Available in Pro)</option>
                        <option value="charNum" disabled>Characters & Numbers (Available in Pro)</option>
                    </select>
                </div>


                <div class="wceazy_coupon_generator_field_group_flex wceazy_coupon_generator_coupon_length">
                    <label class="wceazy_coupon_generator_select2_label">Coupons Character Length</label>
                    <select class="wceazy_coupon_generator_select_field">
                        <option value=""> Please select</option>
                        <?php for ($i = 4; $i <= 20; $i++) { ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>


            </div>

            <div class="wceazy_coupon_generator_tab">
                <div class="wceazy_coupon_generator_tab_part_left">
                    <div class="coupon_data_tabs">
                        <div class="tab_item tab_item_active" data-target="coupon_tab_general"><h1>General</h1></div>
                        <div class="tab_item" data-target="coupon_tab_usage_restriction"><h1>Usage Restriction</h1></div>
                        <div class="tab_item" data-target="coupon_tab_usage_limits"><h1>Usage Limits</h1></div>
                    </div>
                </div>

                <div class="wceazy_coupon_generator_tab_part_right">
                    <div class="coupon_tab_body" data-id="coupon_tab_general">
                        <div class="tab_body_title"><h1>General</h1></div>
                        <div class="tab_body_form" id="tab_body_form">
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_discount_type">
                                <label for="coupon_generator_discount_type" style="margin-bottom: 20px;">Discount type</label>
                                <select class="wceazy_coupon_generator_select_field">
                                    <option value=""> Please select</option>
                                    <option value="percent">Percentage discount</option>
                                    <option value="fixed_cart">Fixed cart discount</option>
                                    <option value="fixed_product">Fixed product discount</option>
                                </select>
                                <small>The kind of discount to apply for this discount.</small>
                            </div>

                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_coupon_amount">
                                <label for="coupon_generator_coupon_amount">Coupon amount</label>
                                <input class="wceazy_coupon_generator_text_field" type="text" placeholder="0">
                                <small class="wceazy_coupon_amount_notice d-block"></small>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_free_shipping">
                                <label for="coupon_generator_free_shipping">Allow free shipping</label>
                                <div class="wceazy_coupon_checkbox">
                                    <input type="checkbox">
                                    <span class="description">Check this box if the coupon grants free shipping. A
                                    <a href="https://docs.woocommerce.com/document/free-shipping/" target="_blank">free shipping method</a>
                                    must be enabled in your shipping zone and be set to require "a valid free shipping coupon" (see the "Free Shipping Requires" setting).</span>
                                </div>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_expiry_date">
                                <label for="coupon_generator_expiry_date">Coupon expiry date</label>
                                <input type="date" class="wceazy_coupon_generator_text_field" placeholder="YYY-MM-DD" min="1997-01-01">
                            </div>
                        </div>
                    </div>
                    <div class="coupon_tab_body" data-id="coupon_tab_usage_restriction">
                        <div class="tab_body_title"><h1>Usage restriction</h1></div>
                        <div class="tab_body_form" id="tab_body_form">
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_minimum_amount">
                                <label for="coupon_generator_minimum_amount">Minimum spend</label>
                                <input class="wceazy_coupon_generator_text_field" type="text" placeholder="No minimum">
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_maximum_amount">
                                <label for="coupon_generator_maximum_amount">Maximum spend</label>
                                <input class="wceazy_coupon_generator_text_field" type="text" placeholder="No maximum">
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_individual_use">
                                <label for="coupon_generator_individual_use">Individual use only</label>
                                <div class="wceazy_coupon_checkbox">
                                    <input type="checkbox">
                                    <span class="description">Check this box if the coupon cannot be used in conjunction with other coupons.</span>
                                </div>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_exclude_sale_items">
                                <label for="coupon_generator_exclude_sale_items">Exclude sale items</label>
                                <div class="wceazy_coupon_checkbox">
                                    <input type="checkbox">
                                    <span class="description">Check this box if the coupon should not apply to items on sale. Per-item coupons will only work if the item is not on sale. Per-cart coupons will only work if there are items in the cart that are not on sale.</span>
                                </div>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_product_ids">
                                <label for="coupon_generator_product_ids">Products</label>
                                <select class="wceazy_coupon_generator_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php
                                    foreach ($this->coupon_generator->utils->getWooProducts () as $product) {
                                        echo '<option value="' . $product["id"] . '">' . $product["text"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_exclude_product_ids">
                                <label for="coupon_generator_exclude_product_ids">Exclude products</label>
                                <select class="wceazy_coupon_generator_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php
                                    foreach ($this->coupon_generator->utils->getWooProducts () as $product) {
                                        echo '<option value="' . $product["id"] . '">' . $product["text"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_product_categories">
                                <label for="coupon_generator_product_categories">Product categories</label>
                                <select class="wceazy_coupon_generator_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php
                                    foreach ($this->coupon_generator->utils->getWooCategories () as $product) {
                                        echo '<option value="' . $product["id"] . '">' . $product["text"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_exclude_product_categories">
                                <label for="coupon_generator_exclude_product_categories">Exclude categories</label>
                                <select class="wceazy_coupon_generator_select_field" multiple="multiple">
                                    <option value=""> Please select</option>
                                    <?php
                                    foreach ($this->coupon_generator->utils->getWooCategories () as $product) {
                                        echo '<option value="' . $product["id"] . '">' . $product["text"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_customer_email">
                                <label for="coupon_generator_customer_email">Allowed emails</label>
                                <input class="wceazy_coupon_generator_text_field" type="text" placeholder="No restrictions">
                            </div>
                        </div>
                    </div>
                    <div class="coupon_tab_body" data-id="coupon_tab_usage_limits">
                        <div class="tab_body_title"><h1>Usage limits</h1></div>
                        <div class="tab_body_form" id="tab_body_form">
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_usage_limit">
                                <label for="coupon_generator_usage_limit">Usage limit per coupon</label>
                                <input class="wceazy_coupon_generator_text_field" type="number" placeholder="0" step="1" min="0">
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_limit_usage_to_x_items">
                                <label for="coupon_generator_limit_usage_to_x_items">Limit usage to X items</label>
                                <input class="wceazy_coupon_generator_text_field" type="number" placeholder="0" step="1" min="0">
                            </div>
                            <div class="wceazy_coupon_generator_field_group wceazy_coupon_generator_usage_limit_per_user">
                                <label for="coupon_generator_usage_limit_per_user">Usage limit per user</label>
                                <input class="wceazy_coupon_generator_text_field" type="number" placeholder="0" step="1" min="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>




        <div class="wceazy_coupon_generator_bottom_button_section">
            <button onclick="wceazy_submit_coupon_generator();">Generate Coupons</button>
        </div>


    </div>

</div>



<div class="wceazy_coupon_generator_popup">
    <div class="wceazy_coupon_generator_popup_inner">
        <div class="generating_coupon">
            <p>Generating Coupons</p>
            <img src="<?php echo WCEAZY_IMG_DIR . 'modules/coupon_generator/popup_spinner.svg' ?>" alt="">
        </div>
        <div class="successes_message">
            <p><span class="coupon_count"></span> Coupons Generated <br/>Successfully!</p>
            <button class="wceazy_coupon_generator_popup_export_btn">Export as CSV</button>
            <button class="wceazy_close_popup" onclick="wceazy_coupon_generator_close_popup();"></button>
        </div>

    </div>
</div>