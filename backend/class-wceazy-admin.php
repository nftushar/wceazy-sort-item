<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('WcEazyAdmin')) {
    class WcEazyAdmin
    {

        public $utils;
        public $settings;

        /* ======== Auto Apply Coupon ========== */
        public $auto_apply_coupon;
        /* ======== BOGO Deal ========== */
        public $bogo_deal;
        /* ======== Coupon Generator ========== */
        public $coupon_generator;
        /* ======== URL Coupon ========== */
        public $url_coupon;
        /* ======== Product Sticky Bar ========== */
        public $product_sticky_bar;
        /* ======== One Click Checkout ========== */
        public $one_click_checkout;
        /* ======== Floating Cart ========== */
        public $floating_cart;
        /* ======== PDF Invoice ========== */
        public $pdf_invoice;
        /* ======== Shipping Bar ========== */
        public $shipping_bar;
        /* ======== Address Book ========== */
        public $address_book;
        /* ======== Product Filter ========== */
        public $product_filter;

        public function __construct()
        {
            $this->utils = new WcEazyUtils($this);
            $this->settings = new WcEazySettings($this);
            new WcEazyAdminAjax($this);

            add_action("admin_menu", array($this, 'wceazy_admin_menu'));
            add_action('admin_enqueue_scripts', array($this, 'wceazy_admin_enqueue'));
            add_action( 'plugin_action_links_' . WCEAZY_BASE_PATH, array( $this, 'wceazy_action_links') );


            /* ======== Auto Apply Coupon ========== */
            if($this->settings->getModuleStatus("auto_apply_coupon")){
                include_once WCEAZY_PATH . "modules/auto_apply_coupon/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/auto_apply_coupon/ModuleUtils.php";
                $this->auto_apply_coupon = new WcEazyAutoApplyCouponAdmin($this);
            }
            /* ======== BOGO Deal ========== */
            if($this->settings->getModuleStatus("bogo_deal")){
                include_once WCEAZY_PATH . "modules/bogo_deal/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/bogo_deal/ModuleUtils.php";
                $this->bogo_deal = new WcEazyBogoDealAdmin($this);
            }
            /* ======== Coupon Generator ========== */
            if($this->settings->getModuleStatus("coupon_generator")){
                include_once WCEAZY_PATH . "modules/coupon_generator/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/coupon_generator/ModuleUtils.php";
                $this->coupon_generator = new WcEazyCouponGeneratorAdmin($this);
            }
            /* ======== URL Coupon ========== */
            if($this->settings->getModuleStatus("url_coupon")){
                include_once WCEAZY_PATH . "modules/url_coupon/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/url_coupon/ModuleUtils.php";
                $this->url_coupon = new WcEazyUrlCouponAdmin($this);
            }
            /* ======== Product Sticky Bar ========== */
            if($this->settings->getModuleStatus("product_sticky_bar")){
                include_once WCEAZY_PATH . "modules/product_sticky_bar/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/product_sticky_bar/ModuleUtils.php";
                $this->product_sticky_bar = new WcEazyProductStickyBarAdmin($this);
            }
            /* ======== One Click Checkout ========== */
            if($this->settings->getModuleStatus("one_click_checkout")){
                include_once WCEAZY_PATH . "modules/one_click_checkout/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/one_click_checkout/ModuleUtils.php";
                $this->one_click_checkout = new WcEazyOneClickCheckoutAdmin($this);
            }
            /* ======== Floating Cart ========== */
            if($this->settings->getModuleStatus("floating_cart")){
                include_once WCEAZY_PATH . "modules/floating_cart/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/floating_cart/ModuleUtils.php";
                $this->floating_cart = new WcEazyFloatingCartAdmin($this);
            }
            /* ======== PDF Invoice ========== */
            if($this->settings->getModuleStatus("pdf_invoice")){
                include_once WCEAZY_PATH . "modules/pdf_invoice/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/pdf_invoice/ModuleUtils.php";
                $this->pdf_invoice = new WcEazyPdfInvoiceAdmin($this);
            }
            /* ======== Shipping Bar ========== */
            if($this->settings->getModuleStatus("shipping_bar")){
                include_once WCEAZY_PATH . "modules/shipping_bar/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/shipping_bar/ModuleUtils.php";
                $this->shipping_bar = new WcEazyShippingBarAdmin($this);
            }
            /* ======== Address Book ========== */
            if($this->settings->getModuleStatus("address_book")){
                include_once WCEAZY_PATH . "modules/address_book/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/address_book/ModuleUtils.php";
                $this->address_book = new WcEazyAddressBookAdmin($this);
            }
            /* ======== Product Filter ========== */
            if($this->settings->getModuleStatus("product_filter")){
                include_once WCEAZY_PATH . "modules/product_filter/class-module-admin.php";
                include_once WCEAZY_PATH . "modules/product_filter/ModuleUtils.php";
                $this->product_filter = new WcEazyProductFilterAdmin($this);
            }


        }


        function wceazy_action_links($links) {
            $settings_url = add_query_arg( 'page', 'wceazy-dashboard', get_admin_url() . 'admin.php' );
            $setting_arr = array('<a href="' . esc_url( $settings_url ) . '">Dashboard</a>');
            $pro_arr = array('<a target="_blank" href="'.WCEAZY_GET_PRO_URL.'"><span style="color: #6E32C9; font-weight: bold;">Get Pro</span></a>');
            $links = array_merge($setting_arr, $links, $pro_arr);
            return $links;
        }

        function wceazy_admin_menu()
        {
            $icon_url = WCEAZY_IMG_DIR . "wceazy_icon.svg";
            add_menu_page("wcEazy", "wcEazy", 'manage_options', "wceazy-dashboard", array($this, 'wceazy_admin_dashboard'), $icon_url, 6);
        }



        function wceazy_admin_enqueue( $page )
        {
            if($page == "toplevel_page_wceazy-dashboard"){
                wp_enqueue_style('wceazy-admin-main', WCEAZY_CSS_DIR.'admin_main.css', array(), WCEAZY_VERSION);
                wp_enqueue_style('wceazy-admin-modules', WCEAZY_CSS_DIR.'admin_modules.css', array(), WCEAZY_VERSION);
                wp_enqueue_style('wceazy-admin-toastr', WCEAZY_CSS_DIR.'toastr.min.css', array(), WCEAZY_VERSION);
                wp_enqueue_style('wceazy-admin-datatable', WCEAZY_CSS_DIR.'dataTables.min.css', array(), WCEAZY_VERSION);
                wp_enqueue_style('wceazy-admin-select2', WCEAZY_CSS_DIR.'select2.min.css', array(), WCEAZY_VERSION);

                wp_enqueue_script( 'wceazy-admin-main', WCEAZY_JS_DIR.'admin_main.js', array('jquery'), WCEAZY_VERSION );
                wp_enqueue_script( 'wceazy-admin-toastr', WCEAZY_JS_DIR.'toastr.min.js', array('jquery'), WCEAZY_VERSION );
                wp_enqueue_script( 'wceazy-admin-datatable', WCEAZY_JS_DIR.'dataTables.min.js', array('jquery'), WCEAZY_VERSION );
                wp_enqueue_script( 'wceazy-admin-select2', WCEAZY_JS_DIR.'select2.min.js', array('jquery'), WCEAZY_VERSION );

                wp_enqueue_media();

                /* ======== Auto Apply Coupon ========== */
                if($this->settings->getModuleStatus("auto_apply_coupon")){
                    wp_enqueue_style('wceazy-admin-module-auto-apply-coupon', WCEAZY_CSS_DIR.'auto_apply_coupon/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-auto-apply-coupon', WCEAZY_JS_DIR.'auto_apply_coupon/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== BOGO Deal ========== */
                if($this->settings->getModuleStatus("bogo_deal")){
                    wp_enqueue_style('wceazy-admin-module-bogo-deal', WCEAZY_CSS_DIR.'bogo_deal/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-bogo-deal', WCEAZY_JS_DIR.'bogo_deal/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Coupon Generator ========== */
                if($this->settings->getModuleStatus("coupon_generator")){
                    wp_enqueue_style('wceazy-admin-module-coupon-generator', WCEAZY_CSS_DIR.'coupon_generator/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-coupon-generator', WCEAZY_JS_DIR.'coupon_generator/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== URL Coupon ========== */
                if($this->settings->getModuleStatus("url_coupon")){
                    wp_enqueue_style('wceazy-admin-module-url-coupon', WCEAZY_CSS_DIR.'url_coupon/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-url-coupon', WCEAZY_JS_DIR.'url_coupon/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Product Sticky Bar ========== */
                if($this->settings->getModuleStatus("product_sticky_bar")){
                    wp_enqueue_style('wceazy-admin-module-product-sticky-bar', WCEAZY_CSS_DIR.'product_sticky_bar/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-product-sticky-bar', WCEAZY_JS_DIR.'product_sticky_bar/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== One Click Checkout ========== */
                if($this->settings->getModuleStatus("one_click_checkout")){
                    wp_enqueue_style('wceazy-admin-module-one-click-checkout', WCEAZY_CSS_DIR.'one_click_checkout/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-one-click-checkout', WCEAZY_JS_DIR.'one_click_checkout/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Floating Cart ========== */
                if($this->settings->getModuleStatus("floating_cart")){
                    wp_enqueue_style('wceazy-admin-module-floating-cart', WCEAZY_CSS_DIR.'floating_cart/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-floating-cart', WCEAZY_JS_DIR.'floating_cart/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== PDF Invoice ========== */
                if($this->settings->getModuleStatus("pdf_invoice")){
                    wp_enqueue_style('wceazy-admin-module-pdf-invoice', WCEAZY_CSS_DIR.'pdf_invoice/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-pdf-invoice', WCEAZY_JS_DIR.'pdf_invoice/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Shipping Bar ========== */
                if($this->settings->getModuleStatus("shipping_bar")){
                    wp_enqueue_style('wceazy-admin-module-shipping-bar', WCEAZY_CSS_DIR.'shipping_bar/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-shipping-bar', WCEAZY_JS_DIR.'shipping_bar/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Address Book ========== */
                if($this->settings->getModuleStatus("address_book")){
                    wp_enqueue_style('wceazy-admin-module-address-book', WCEAZY_CSS_DIR.'address_book/admin_main.css', array(), WCEAZY_VERSION);
                    wp_enqueue_script( 'wceazy-admin-module-address-book', WCEAZY_JS_DIR.'address_book/admin_main.js', array('jquery'), WCEAZY_VERSION );
                }
                /* ======== Product Filter ========== */
                // if($this->settings->getModuleStatus("product_filter")){ 
                //     wp_enqueue_style('wceazy-admin-module-product-filter', WCEAZY_CSS_DIR.'product_filter/admin_main.css', array(), WCEAZY_VERSION);
                //     wp_enqueue_script( 'wceazy-admin-module-product-filter', WCEAZY_JS_DIR.'product_filter/admin_main.js', array('jquery'), WCEAZY_VERSION ); 

                // } 
                if ($this->settings->getModuleStatus("product_filter")) {
                    // Enqueue your custom script
                    wp_enqueue_script('custom-wceazy-script', WCEAZY_JS_DIR . 'custom-script.js', array('jquery'), '1.0', true); 
                    wp_enqueue_script( 'wceazy-admin-module-address-book', WCEAZY_JS_DIR.'product_filter/custom_ui.js', array('jquery'), WCEAZY_VERSION );
                    wp_enqueue_style('wceazy-admin-module-product-filter', WCEAZY_CSS_DIR . 'product_filter/admin_main.css', array(), WCEAZY_VERSION);
 
                    wp_enqueue_style('jquery-ui-style', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '1.12.1'); 
                    wp_enqueue_script('jquery');
                    wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true); 
                    wp_enqueue_script('wceazy-admin-module-product-filter', WCEAZY_JS_DIR . 'product_filter/admin_main.js', array('jquery', 'jquery-ui'), WCEAZY_VERSION);
                }
 



           


            }
        }

        function wceazy_admin_dashboard()
        {
            include_once WCEAZY_PATH . "backend/templates/dashboard.php";
        }

    }
}




if(is_admin()){
    new WcEazyAdmin();
}