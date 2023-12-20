<div id="wceazy_url_coupon">


    <div class="wceazy_url_coupon_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_url_coupon_page_title">
        <div class="page_title_part_left">
            <h2>URL Coupon</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_url_coupon_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_url_coupon_container">
        <form action="#" id="posts-filter" method="get">


            <div class="wceazy_url_coupon_table_top_actions">
                <div class="wceazy_url_coupon_top_actions_part_left">
                    <p>Per page view</p>
                    <select class="wceazy_url_coupon_items_per_page">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                        <option value="100">100</option>
                    </select>


                    <select class="wceazy_url_coupon_filter_discount_type">
                        <option value="">Show all types</option>
                        <option value="percentage discount">Percentage discount</option>
                        <option value="fixed cart discount">Fixed cart discount</option>
                        <option value="fixed product discount">Fixed product discount</option>
                    </select>
                </div>
                <div class="wceazy_url_coupon_top_actions_part_right">
                    <input type="text" placeholder="Search">
                </div>
            </div>



        </form>
        <table class="wceazy_url_coupon_table">
            <thead>
            <tr>
                <th>Code</th>
                <th>Coupon Type</th>
                <th>Coupon Amount</th>
                <th>Description</th>
                <th>Product IDs</th>
                <th>Usage/Limit</th>
                <th>Expiry Date</th>
                <th>Is URL Coupon</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="wceazy_url_coupon_table_body"></tbody>
        </table>
    </div>

</div>