<div id="wceazy_modules">


    <div class="wceazy_modules_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <div class="wceazy_header_part_right">
                <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
            </div>
        </div>
    </div>



    <div class="wceazy_modules_page_title">
        <h2>Modules</h2>
    </div>


    <div class="wceazy_modules_breadcrumb">
        <div class="wceazy_modules_breadcrumb_filter">
            <ul>
                <li class="active" onclick="wceazy_module_show_all(this)">All</li>
                <li onclick="wceazy_module_show_active(this)">Active</li>
                <li onclick="wceazy_module_show_inactive(this)">Inactive</li>
            </ul>
        </div>
        <div class="wceazy_modules_breadcrumb_search">
            <div class="search_bar">
                <input type="text" class="module_search" onkeyup="wceazy_module_search(this)" placeholder="Search module, please type 3 or more characters">
            </div>
        </div>
    </div>



    <div class="wceazy_modules_list_items">


        <div class="wceazy_module_item" data-slug="auto_apply_coupon">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/auto_apply_coupon/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Auto Apply Coupon</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("auto_apply_coupon") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("auto_apply_coupon") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="bogo_deal">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/bogo_deal/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>BOGO Deal</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("bogo_deal") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("bogo_deal") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="coupon_generator">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/coupon_generator/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Coupon Generator</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("coupon_generator") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("coupon_generator") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="url_coupon">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/url_coupon/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>URL Coupon</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("url_coupon") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("url_coupon") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="product_sticky_bar">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/product_sticky_bar/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Product Sticky Bar</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("product_sticky_bar") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("product_sticky_bar") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="one_click_checkout">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/one_click_checkout/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>One Click Checkout</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("one_click_checkout") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("one_click_checkout") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="floating_cart">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/floating_cart/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Floating Cart</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("floating_cart") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("floating_cart") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="pdf_invoice">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/pdf_invoice/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>PDF Invoice & Packing Slips</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("pdf_invoice") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("pdf_invoice") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="shipping_bar">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/shipping_bar/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Free Shipping Bar</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("shipping_bar") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("shipping_bar") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="address_book">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/address_book/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Address Book</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("address_book") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("address_book") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


        <div class="wceazy_module_item" data-slug="product_filter">
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/product_filter/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Product Filter</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("product_filter") == 1 ? "checked" : ""); ?>>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("product_filter") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>
        
        <div class="wceazy_module_item" data-slug="order_cancel">
            <div class="wceazy-pro-module">
                <span class="pro-tag">Pro</span>
            </div>
            <div class="wceazy_module_logo">
                <img src="<?php echo esc_url( WCEAZY_IMG_DIR . 'modules/floating_cart/icon.svg');?>" height="100" />
            </div>
            <div class="wceazy_module_details">
                <h3>Order Cancel</h3>
                <div class="wceazy_module_action">
                    <label class="toggle_switch">
                        <input type="checkbox" onchange="wceazy_update_module_status(this)" <?php echo ($this->settings->getModuleStatus("order_cancel") == 1 ? "" : ""); ?> disabled>
                        <span class="slider round"></span>
                    </label>
                    <div class="settings_btn <?php echo ($this->settings->getModuleStatus("order_cancel") == 1 ? "active" : ""); ?>"
                         onclick="wceazy_start_module_settings(`<?php echo esc_url(WCEAZY_URL); ?>`, this)">
                        Settings
                    </div>
                    <a class="wceazy_module_docs" target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
                </div>
            </div>
        </div>


    </div>
</div>





<div class="wceazy_modules_popup">
    <div class="wceazy_modules_popup_inner">
        <img src="<?php echo WCEAZY_IMG_DIR . 'popup_spinner.svg' ?>" alt="">
    </div>
</div>