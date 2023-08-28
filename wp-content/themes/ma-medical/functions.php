<?php
global $theme_prefix, $theme_uri;
$theme_prefix = 'ma-medical';
$theme_uri = get_template_directory_uri() . '/assets';
$theme_dir = get_template_directory();
$theme_version = '1.0';
define('POSTS_PER_PAGE', 5);


// Đăng ký các thàh phần hỗ trợ cho theme;
add_action('after_setup_theme', 'ma_medical_theme_support');
function ma_medical_theme_support()
{
    // Đăng ký menu
    register_nav_menus([
        'primary' =>  'Primary Menu',
        'top-bar' =>  'Top Bar Menu',
        'footer_1' =>  'Footer 1 Menu',
        'footer_2' =>  'Footer 2 Menu',
        'footer_3' =>  'Footer 3 Menu',
    ]);
    //Đăng ký sử dụng hình ảnh cho bài viết
    add_theme_support('post-formats');
    add_theme_support('post-thumbnails');
}


// Đăng ký javascript
add_action('wp_enqueue_scripts', 'ma_medical_theme_register_scripts');
function ma_medical_theme_register_scripts()
{
    global $theme_prefix, $theme_uri, $theme_version;
    wp_enqueue_script($theme_prefix . '-jquery-js', $theme_uri . '/js/jquery-1.11.0.min.js', ['jquery'], '3.6.0', false);
    wp_enqueue_script('jquery-ui-script', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', [], '1.12.1', false);
    // wp_enqueue_script('datepicker-ja-script', 'https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js', [], '1.0.10', false);
    //wp_enqueue_script('datepicker-i18n-script', 'https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/i18n/datepicker.ja-JP.min.js', [], '1.0.10', false);
    wp_enqueue_script('jquery-ui-script', 'https://code.jquery.com/ui/1.13.1/jquery-ui.js', ['jquery'], '1.13.1', false);
    // wp_enqueue_script($theme_prefix.'-datepicker-ja-js', $theme_uri. '/libs/datepicker-ja.js',[], false);
    wp_enqueue_script($theme_prefix . '-script-js', $theme_uri . '/js/script.js', [], '', false);
    wp_enqueue_script($theme_prefix . '-contact-js', $theme_uri . '/js/contact.js', [], '', true);
    wp_enqueue_script($theme_prefix . '-custom-js', $theme_uri . '/custom.js', [], '6.2.2', false);
}

//Đăng ký style
add_action('wp_enqueue_scripts', 'ma_medical_theme_register_styles');
function ma_medical_theme_register_styles()
{
    global $theme_prefix, $theme_uri, $theme_version;
    wp_enqueue_style($theme_prefix . '-jqueryui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css');
    wp_enqueue_style($theme_prefix . '-themes-jquery', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    wp_enqueue_style($theme_prefix . '-style', $theme_uri, [], $theme_version, 'all');
    wp_enqueue_style($theme_prefix . '-common-css', $theme_uri . '/css/common.css');
    wp_enqueue_style($theme_prefix . '-contact-css', $theme_uri . '/css/contact.css');
    wp_enqueue_style($theme_prefix . '-index-css', $theme_uri . '/css/index.css');
    wp_enqueue_style($theme_prefix . '-faq-css', $theme_uri . '/css/faq.css');
    wp_enqueue_style($theme_prefix . '-privacy-css', $theme_uri . '/css/privacy.css');
    wp_enqueue_style($theme_prefix . '-doctor-list-css', $theme_uri . '/css/doctor-list.css');
    wp_enqueue_style($theme_prefix . '-doctor-detail-css', $theme_uri . '/css/doctor-detail.css');
    wp_enqueue_style($theme_prefix . '-company-css', $theme_uri . '/css/company.css');
    wp_enqueue_style($theme_prefix . '-custom-css', $theme_uri . '/custom.css');
}


// Đăng ký post type "doctor"
function create_doctor_post_type()
{
    $labels = array(
        'name' => 'Doctors',
        'singular_name' => 'Doctor', // Tên số ít của post type
    );

    $args = array(
        'labels' => $labels,
        'public' => true, // Cho phép truy cập công khai
        'has_archive' => true, // Cho phép tạo trang lưu trữ
    );

    register_post_type('doctor', $args);
}
// Thêm taxonomy "category" cho post type "doctor"
function add_category_to_doctor()
{
    register_taxonomy_for_object_type('category', 'doctor');
}
add_action('init', 'add_category_to_doctor');
//Đăng ký widgets
function ma_medical_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Widgets', 'ma-medical'),
        'id'            => 'widgets',
        'description'   => __('Widgets in this area will be shown under your single posts, before comments.', 'ma-medical'),
        'before_widget'    => '',
        'after_widget'    => '',
        'before_title'    => '',
        'after_title'    => '',
    ));
}
add_action('widgets_init', 'ma_medical_widgets_init');

// Gọi hàm tạo post type khi WordPress khởi tạo
add_action('init', 'create_doctor_post_type');

function modify_breadcrumb_types($types)
{
    // Xóa "Doctors" khỏi danh sách types
    if (($key = array_search('Doctors', $types)) !== false) {
        unset($types[$key]);
    }

    // Chỉ hiển thị post types
    $types = array('post');

    return $types;
}
add_filter('bcn_breadcrumb_types', 'modify_breadcrumb_types');
//Đăng ký Tax Specialized Fields
function create_specialized_field_taxonomy()
{
    $labels = array(
        'name'                       => 'Specialized Fields',
        'singular_name'              => 'Specialized Field',
        'menu_name'                  => 'Specialized Fields',
        'all_items'                  => 'All Specialized Fields',
        'parent_item'                => 'Parent Specialized Field',
        'parent_item_colon'          => 'Parent Specialized Field:',
        'new_item_name'              => 'New Specialized Field Name',
        'add_new_item'               => 'Add New Specialized Field',
        'edit_item'                  => 'Edit Specialized Field',
        'update_item'                => 'Update Specialized Field',
        'separate_items_with_commas' => 'Separate Specialized Fields with commas',
        'search_items'               => 'Search Specialized Fields',
        'add_or_remove_items'        => 'Add or remove Specialized Fields',
        'choose_from_most_used'      => 'Choose from the most used Specialized Fields',
        'not_found'                  => 'No Specialized Fields found',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'specialized-field'),
    );

    register_taxonomy('specialized-field', 'doctor', $args);
}
add_action('init', 'create_specialized_field_taxonomy', 0);
// Đăng ký shortcode 
function select_services_shortcode()
{
    ob_start(); ?>
    <div class="selectServices">
        <div class="formField">
            <div class="formLabel">ご相談したい医師名<p id="note1" class="note">※3名まで選択可</p>
            </div>
            <div class="formInput">
                <div class="toggleSection">
                    <p class="togglebutton"><a href="javascript:;" class="hover">一覧から医師を選択</a></p>
                    <div class="toggleContent" style="display: none;">
                        <span class="inputCheckbox">
                            <?php
                            $args = array(
                                'post_type' => 'doctor',
                                'posts_per_page' => -1,
                                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                                'orderby' => 'date',
                                'order' => 'ASC',
                            );
                            $loop = new WP_Query($args);
                            if ($loop->have_posts()) {
                                while ($loop->have_posts()) {
                                    $loop->the_post();
                                    $field_value = get_field('doctor_name');
                                    $display_value = '';
                                    switch ($field_value) {
                                        case 'S':
                                            $display_value = 'S';
                                            break;
                                        case 'T':
                                            $display_value = 'T';
                                            break;
                                        case 'Y':
                                            $display_value = 'Y';
                                            break;
                                        default:
                                            $display_value = $field_value;
                                    }
                            ?>
                                    <span class="wpcf7-list-item first">
                                        <label>
                                            <input type="checkbox" name="your-doctor[]" value="医師No.<?php the_field('numerical_order') ?> <?= $display_value; ?> <?php the_field('name'); ?>" onchange="limitSelection(this, 3)">
                                            <span class="wpcf7-list-item-label">医師No.<?php the_field('numerical_order') ?> <?= $display_value; ?> <?php the_field('name'); ?></span>
                                        </label>
                                        <p class="linkDetail"><a href="#" class="hover"><?= $display_value; ?>医師のプロフィール</a></p>
                                    </span>
                            <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </span>
                    </div>
                </div>
                <p class="labelOr">または</p>
                <span class="inputCheckbox inputCheckboxBg">
                    <span class="wpcf7-list-item first last">
                        <label>
                            <input id="radio96" type="radio" name="your-recommend-doctor" value="コーディネーターに医師の選択を依頼をする">
                            <span class="wpcf7-list-item-label">コーディネーターに医師の選択を依頼をする</span>
                        </label>
                    </span>
                </span>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('doctor_list', 'select_services_shortcode');

add_filter('wpcf7_form_elements', 'mycustom_wpcf7_form_elements');
function mycustom_wpcf7_form_elements($form)
{
    $form = do_shortcode($form);
    return $form;
}

// Post content pagination function
function custom_pagination($post_query = null)
{
    global $wp_query;
    if (isset($post_querys) && $post_query) {
        $post_query = $wp_query;
    }
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $max_pages = $post_query->max_num_pages;
    if ($max_pages > 1) {
    ?>
        <div class="pagingNav hira">
            <ul class="pagi_nav_list">
                <?php
                if ($paged > 1) {
                    echo '<li class="p-control"><a href="' . get_pagenum_link(1) . '">表紙></li>';
                }
                if ($paged > 1) {
                    echo '<li class="p-control prev"><a href="' . get_pagenum_link($paged - 1) . '">前</a></li>';
                }
                for ($i = 1; $i <= $max_pages; $i++) {
                    if ($i == $paged) {
                        echo '<li class="active"><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                    } else {
                        echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
                    }
                }
                if ($paged < $max_pages) {
                    echo '<li class="p-control prev"><a href="' . get_pagenum_link($paged + 1) . '">次へ</a></li>';
                }
                if ($paged < $max_pages) {
                    echo '<li class="p-control next"><a href="' . get_pagenum_link($max_pages) . '">最後</a></li>';
                }
                ?>
            </ul>
        </div>
    <?php } ?>
<?php
}

//Search function by taxonomy and keywords of fields
function search_doctors($searchKey, $searchTax)
{
    $args = array(
        'post_type'      => 'doctor',
        'posts_per_page' => POSTS_PER_PAGE,
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        'post_status'    => 'publish',
        'order'          => 'DESC',
    );

    if ($searchTax) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'specialized-field',
                'field'    => 'slug',
                'terms'    => $searchTax,
            ),
        );
    }

    if ($searchKey) {
        $args['meta_query'] = array(
            'relation' => 'OR',
            array(
                'key'     => 'numerical_order',
                'value'   => $searchKey,
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'organization',
                'value'   => $searchKey,
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'qualifications_awards',
                'value'   => $searchKey,
                'compare' => 'LIKE',
            ),
            array(
                'key'     => 'self-introduce',
                'value'   => $searchKey,
                'compare' => 'LIKE',
            ),
        );
    }
    $search_query = new WP_Query($args);
    return $search_query;
}
