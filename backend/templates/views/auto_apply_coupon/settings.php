<div id="wceazy_auto_apply_coupon">


    <div class="wceazy_auto_apply_coupon_header">
        <div class="wceazy_header_part_left">
            <p>wcEazy <span><?php echo esc_attr(WCEAZY_VERSION); ?></span></p>
        </div>
        <div class="wceazy_header_part_right">
            <a class="wceazy_get_pro" target="_blank" href="<?php echo WCEAZY_GET_PRO_URL; ?>">GET PRO</a>
        </div>
    </div>



    <div class="wceazy_auto_apply_coupon_page_title">
        <div class="page_title_part_left">
            <h2>Auto Apply Coupon</h2>
            <a target="_blank" href="<?php echo WCEAZY_DOCS_PAGE; ?>">Documentation</a>
        </div>
        <div class="page_title_part_right">
            <button class="wceazy_auto_apply_coupon_back_to_dashboard_btn" onclick="wceazy_modules_page_init(`<?php echo esc_url(WCEAZY_URL); ?>`)">Back to all Modules</button>
        </div>
    </div>



    <div class="wceazy_auto_apply_coupon_container">
        <form action="#" id="posts-filter" method="get">


            <div class="wceazy_auto_apply_coupon_table_top_actions">
                <div class="wceazy_auto_apply_coupon_top_actions_part_left">
                    <p>Per page view</p>
                    <select class="wceazy_auto_apply_coupon_items_per_page">
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
                    <select class="wceazy_auto_apply_coupon_bulk_action_type" onchange="wceazy_auto_apply_coupon_bulk_edit_check_ability()">
                        <option value="">Bulk actions</option>
                        <option value="add">Add to auto apply</option>
                        <option value="remove">Remove from auto apply</option>
                    </select>
                    <input type="button" class="wceazy_auto_apply_coupon_bulk_edit_btn" value="Apply (PRO)" onclick="wceazy_auto_apply_coupon_bulk_edit()" disabled>
                    <select class="wceazy_auto_apply_coupon_filter_discount_type">
                        <option value="">Show all types</option>
                        <option value="percentage discount">Percentage discount</option>
                        <option value="fixed cart discount">Fixed cart discount</option>
                        <option value="fixed product discount">Fixed product discount</option>
                    </select>
                </div>
                <div class="wceazy_auto_apply_coupon_top_actions_part_right">
                    <input type="text" placeholder="Search">
                </div>
            </div>



        </form>
        <table class="wceazy_auto_apply_coupon_table">
            <thead>
            <tr>
                <td class="no-sort">
                    <input type="checkbox" onchange="wceazy_auto_apply_coupon_checkbox_select_all(this)">
                </td>
                <th>Code</th>
                <th>Coupon Type</th>
                <th>Coupon Amount</th>
                <th>Description</th>
                <th>Product IDs</th>
                <th>Usage/Limit</th>
                <th>Expiry Date</th>
                <th>Is Auto Coupon</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="wceazy_auto_apply_coupon_table_body"></tbody>
        </table>
    </div>

</div>



<div class="wceazy_auto_apply_coupon_popup">
    <div class="wceazy_popup_inar">
        <div class="successes_message">
            <p class="wceazy-popup-content">Are you sure? </p>
            <div class="wceazy-btn-wrapper">
                <button type="button" class="wceazy-btn-danger" onclick="wceazy_auto_apply_coupon_close_popup();">No</button>
                <button type="button" class="wceazy-btn-success">Yes</button>
            </div>
            <button class="wceazy_close_popup" onclick="wceazy_auto_apply_coupon_close_popup();"></button>
        </div>
    </div>
</div>