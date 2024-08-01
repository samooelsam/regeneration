<?php 

define('JFH_CHILD_THEME_URL', 'https://johnfhuntregeneration.co.uk/wp-content/themes/john-f-hunt-regeneration/');


function techvertu_js_hook() {
    if(is_category()) {
        $categories = get_the_category();
        $categoryName = $categories[0]->cat_name;
        
        if ( function_exists('yoast_breadcrumb') ) {
            ?>
            <script>
                jQuery(document).ready(function(){
                    jQuery('.category #content-area').prepend('<div class="breadcrumbs clearfix"><?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );?></div>');
                });
            </script>
            <?php 
            
          }
        ?>
<!--         <script>
            jQuery(document).ready(function(){
                jQuery('.category #content-area').prepend('<h1><?php echo($categoryName);?></h1>');
            });
        </script> -->
        
    <?php }
}
add_action('wp_head', 'techvertu_js_hook');



function techvertu_blog_headers() {
    $categories = get_the_category();
    $categoryName = $categories[0]->cat_name;
    if ( is_category()) {
        echo ('<h1>'.$categoryName.'</h1>');
    }
	
}
add_action('et_before_main_content', 'techvertu_blog_headers');



add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 
function my_enqueue_assets() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', '1.2.5', true ); 
	wp_enqueue_style( 'divi-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.2.9.2' );
    wp_enqueue_script( 'jquery-fast', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', '1.0.0', true );
    wp_enqueue_script('jfh-scripts-totals', get_stylesheet_directory_uri().'/js/scripts', '1.0.0', true);
} 



add_action('wp_footer', 'john_f_hunt_add_code_on_body_open');
function john_f_hunt_add_code_on_body_open() {
    echo '<script type="text/javascript"> _linkedin_partner_id = "5765353"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=5765353&fmt=gif" /> </noscript>';
        $categories = get_the_category();
        $category_id = $categories[0]->cat_ID;
        $categoryCount = $categories[0]->category_count - 6;
       if($categories[0]->category_count > 6) {?>
       <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
    <script type="text/javascript">
        
        jQuery(document).ready(function(){
            
            jQuery('.category #left-area').append('<div class="load-post-area clearfix"></div><div class="load-more-wrapper"><button data-counter="1" data-post-total="<?php echo($categoryCount);?>" id="techvertu-load-more-link">load more link</button><div class="loader"></div></div>');
            jQuery(document).on('click', '#techvertu-load-more-link', function(){
                var totalPostCount = <?php echo($categoryCount);?>;
                var counter = jQuery(this).attr('data-counter');
                jQuery('.loader').addClass('block');
                var dataTotalPosts = jQuery(this).attr('data-post-total');
                dataTotalPosts = dataTotalPosts - 3;
                jQuery(this).attr('data-post-total', dataTotalPosts);
                if(dataTotalPosts == 0){
                    jQuery(this).remove();
                }
                $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url('admin-ajax.php');?>',
                    dataType: "json",
                    data: { 
                        action : 'get_ajax_posts_data',
                        post_counter: +counter+1,
                        cat_id: <?php echo($category_id);?> 
                    },
                    success: function( response ) {
                        var data = Object.values(response);    
                        console.log(data);  
                        if(data.length > 0){
                            jQuery('#techvertu-load-more-link').attr('data-counter', +counter+1);
                            jQuery('.loader').removeClass('block');
                            $.each( response, function( key, value ) {
                                jQuery('.load-post-area').append('<article id="post-'+value['ID']+'" class="et_pb_post post-2029 post type-post status-publish format-standard has-post-thumbnail hentry category-case-studies"><a class="entry-featured-image-url" href="'+value['permalink']+'"><img src="'+value['image_url']+'" alt="" class="" width="1080" height="675"></a><h2 class="entry-title"><a href="'+value['permalink']+'">'+value['post_title']+'</a></h2><p class="post-meta block"><span class="published">'+value['post_excerpt']+'</span><a href="" rel="category tag"></a></p></article>');
                            } );
                        
                        } 
                        else{
                            jQuery('#techvertu-load-more-link').remove();
                            jQuery('.loader').remove();
                        }               
                    }
                });
            });
        });
    </script>
    <?php }?>
<!-- Hotjar Tracking Code for https://www.johnfhuntregeneration.co.uk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3772734,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <?php 
}

function get_ajax_posts_data() {
    
    $postCountGet = $_POST['post_counter'];
    $categoryID = $_POST['cat_id'];
    $args = array(
        'post_type' => array('post'),
        'post_status' => array('publish'),
        'posts_per_page' => 3,
        'offset' => $postCountGet * 3,
        'order' => 'DESC',
        'orderby' => 'date',
        'tax_query' => array(
            array(
                'taxonomy' => 'category', 
                'field'    => 'id',
                'terms'    => array($categoryID),
            ),
        ),
    );
    $ajaxposts = get_posts( $args );
    foreach($ajaxposts as $p){
        $thumb_id = get_post_thumbnail_id($p->ID);
        $permalink = get_permalink($p->ID);
        $src = wp_get_attachment_image_src($thumb_id, 'image_size');
        $url = $src ? $src[0] : false;
        $p->image_url = $url;
        $p->permalink = $permalink;
    }
    
    echo json_encode( $ajaxposts );
    wp_reset_query();
    die();
}

add_action('wp_ajax_get_ajax_posts_data', 'get_ajax_posts_data');
add_action('wp_ajax_nopriv_get_ajax_posts_data', 'get_ajax_posts_data');




function my_added_social_icons($kkoptions) {
	global $themename, $shortname;
	
	$open_social_new_tab = array( "name" =>esc_html__( "Open Social URLs in New Tab", $themename ),
                   "id" => $shortname . "_show_in_newtab",
                   "type" => "checkbox",
                   "std" => "off",
                   "desc" =>esc_html__( "Set to ON to have social URLs open in new tab. ", $themename ) );
				   
	$replace_array_newtab = array ( $open_social_new_tab );
	
	$show_instagram_icon = array( "name" =>esc_html__( "Show Instagram Icon", $themename ),
                   "id" => $shortname . "_show_instagram_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Instagram Icon on your header or footer. ", $themename ) );
	$show_pinterest_icon = array( "name" =>esc_html__( "Show Pinterest Icon", $themename ),
                   "id" => $shortname . "_show_pinterest_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Pinterest Icon on your header or footer. ", $themename ) );
	$show_tumblr_icon = array( "name" =>esc_html__( "Show Tumblr Icon", $themename ),
                   "id" => $shortname . "_show_tumblr_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Tumblr Icon on your header or footer. ", $themename ) );
	$show_dribbble_icon = array( "name" =>esc_html__( "Show Dribbble Icon", $themename ),
                   "id" => $shortname . "_show_dribbble_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Dribbble Icon on your header or footer. ", $themename ) );
	$show_vimeo_icon = array( "name" =>esc_html__( "Show Vimeo Icon", $themename ),
                   "id" => $shortname . "_show_vimeo_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Vimeo Icon on your header or footer. ", $themename ) );
	$show_linkedin_icon = array( "name" =>esc_html__( "Show LinkedIn Icon", $themename ),
                   "id" => $shortname . "_show_linkedin_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the LinkedIn Icon on your header or footer. ", $themename ) );
	$show_myspace_icon = array( "name" =>esc_html__( "Show MySpace Icon", $themename ),
                   "id" => $shortname . "_show_myspace_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the MySpace Icon on your header or footer. ", $themename ) );
	$show_skype_icon = array( "name" =>esc_html__( "Show Skype Icon", $themename ),
                   "id" => $shortname . "_show_skype_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Skype Icon on your header or footer. ", $themename ) );
	$show_youtube_icon = array( "name" =>esc_html__( "Show Youtube Icon", $themename ),
                   "id" => $shortname . "_show_youtube_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Youtube Icon on your header or footer. ", $themename ) );
	$show_flickr_icon = array( "name" =>esc_html__( "Show Flickr Icon", $themename ),
                   "id" => $shortname . "_show_flickr_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Flickr Icon on your header or footer. ", $themename ) );
				   
	$repl_array_opt = array( $show_instagram_icon,
							$show_pinterest_icon,
							$show_tumblr_icon,
							$show_dribbble_icon,
							$show_vimeo_icon,
							$show_linkedin_icon,
							$show_myspace_icon,
							$show_skype_icon,
							$show_youtube_icon,
							$show_flickr_icon,
							);
	
	$show_instagram_url =array( "name" =>esc_html__( "Instagram Profile Url", $themename ),
                   "id" => $shortname . "_instagram_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Instagram Profile. ", $themename ) );
	$show_pinterest_url =array( "name" =>esc_html__( "Pinterest Profile Url", $themename ),
                   "id" => $shortname . "_pinterest_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Pinterest Profile. ", $themename ) );
	$show_tumblr_url =array( "name" =>esc_html__( "Tumblr Profile Url", $themename ),
                   "id" => $shortname . "_tumblr_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Tumblr Profile. ", $themename ) );
	$show_dribble_url =array( "name" =>esc_html__( "Dribbble Profile Url", $themename ),
                   "id" => $shortname . "_dribble_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Dribbble Profile. ", $themename ) );
	$show_vimeo_url =array( "name" =>esc_html__( "Vimeo Profile Url", $themename ),
                   "id" => $shortname . "_vimeo_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Vimeo Profile. ", $themename ) );
	$show_linkedin_url =array( "name" =>esc_html__( "LinkedIn Profile Url", $themename ),
                   "id" => $shortname . "_linkedin_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your LinkedIn Profile. ", $themename ) );
	$show_myspace_url =array( "name" =>esc_html__( "MySpace Profile Url", $themename ),
                   "id" => $shortname . "_mysapce_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your MySpace Profile. ", $themename ) );
	$show_skype_url =array( "name" =>esc_html__( "Skype Profile Url", $themename ),
                   "id" => $shortname . "_skype_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Skype Profile. ", $themename ) );
	$show_youtube_url =array( "name" =>esc_html__( "Youtube Profile Url", $themename ),
                   "id" => $shortname . "_youtube_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Youtube Profile. ", $themename ) );
	$show_flickr_url =array( "name" =>esc_html__( "Flickr Profile Url", $themename ),
                   "id" => $shortname . "_flickr_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Flickr Profile. ", $themename ) );
				   
	$repl_array_url = array( $show_instagram_url,
							$show_pinterest_url,
							$show_tumblr_url,
							$show_dribble_url,
							$show_vimeo_url,
							$show_linkedin_url,
							$show_myspace_url,
							$show_skype_url,
							$show_youtube_url,
							$show_flickr_url,
							);


	$srch_key = array_column($kkoptions, 'id');
	
	$key = array_search('divi_show_facebook_icon', $srch_key);
	array_splice($kkoptions, $key + 6, 0, $replace_array_newtab);
	
	$key = array_search('divi_show_google_icon', $srch_key);
	array_splice($kkoptions, $key + 8, 0, $repl_array_opt);

	$key = array_search('divi_rss_url', $srch_key);
	array_splice($kkoptions, $key + 17, 0, $repl_array_url);
	
	//print_r($kkoptions);

	return $kkoptions;
}
add_filter('et_epanel_layout_data', 'my_added_social_icons', 99);

define( 'DDPL_DOMAIN', 'my-domain' ); // translation domain
require_once( 'vendor/divi-disable-premade-layouts/divi-disable-premade-layouts.php' );

function bhc_customize_register($wp_customize)
{
    $wp_customize->add_setting("bhc_hamburger_color",[
        'default' => et_builder_accent_color(),
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bhc_hamburger_color', array(
        'label' => __('Hamburger Color', 'bloody-hamburger-color'),
        'section' => 'et_divi_mobile_menu',
        'settings' => 'bhc_hamburger_color',
    )));
}
add_action('customize_register', 'bhc_customize_register');
function bhc_customize_css()
{
    ?>
         <style type="text/css" id="bloody-hamburger-color">
             .mobile_menu_bar:before { color: <?php echo get_theme_mod('bhc_hamburger_color', et_builder_accent_color()); ?> !important; }
         </style>
    <?php
}
add_action('wp_head', 'bhc_customize_css');


add_action( 'http_api_curl', function( $curl_handle ) {
    curl_setopt( $curl_handle, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
});


/* Automatically set the image Title & Alt-Text upon upload*/
add_action( 'add_attachment', 'techvertu_set_image_meta_upon_image_upload' );
function techvertu_set_image_meta_upon_image_upload( $post_ID ) {
    // Check if uploaded file is an image, else do nothing
    if ( wp_attachment_is_image( $post_ID ) ) {
        $my_image_title = get_post( $post_ID )->post_title;
        // Sanitize the title:  remove hyphens, underscores & extra spaces:
        $my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );
        // Sanitize the title:  capitalize first letter of every word (other letters lower case):
        $my_image_title = ucwords( strtolower( $my_image_title ) );
        // Create an array with the image meta (Title, Caption, Description) to be updated
        $my_image_meta = array(
            'ID'        => $post_ID,            // Specify the image (ID) to be updated
            'post_title'    => $my_image_title,     // Set image Title to sanitized title
        );
        // Set the image Alt-Text
        update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );
        // Set the image meta (e.g. Title, Excerpt, Content)
        wp_update_post( $my_image_meta );
    }
}
/* Fetch image alt text from media library */
function techvertu_get_image_alt_text($image_url) {
    if ( ! $image_url ) return '';
    if ( '/' === $image_url[0] )
    $post_id = attachment_url_to_postid(home_url() . $image_url);
    else
    $post_id = attachment_url_to_postid($image_url);
    $alt_text = get_post_meta($post_id, '_wp_attachment_image_alt', true);
    if ( '' === $alt_text )
    $alt_text = get_the_title($post_id);
    return $alt_text;
}
/* Update image alt text in module properties */
function techvertu_update_module_alt_text( $attrs, $unprocessed_attrs, $slug ) {
    if ( ( $slug === 'et_pb_image' || $slug === 'et_pb_fullwidth_image' ) && '' === $attrs['alt'] )
        $attrs['alt'] = techvertu_get_image_alt_text($attrs['src']);
    elseif ( $slug === 'et_pb_blurb' && 'off' === $attrs['use_icon'] && '' === $attrs['alt'] )
        $attrs['alt'] = techvertu_get_image_alt_text($attrs['image']);
    elseif ( $slug === 'et_pb_slide' && '' !== $attrs['image'] && '' === $attrs['image_alt'] )
        $attrs['image_alt'] = techvertu_get_image_alt_text($attrs['image']);
    elseif ( $slug === 'et_pb_fullwidth_header' ) {
        if ( '' !== $attrs['logo_image_url'] && '' === $attrs['logo_alt_text'] )
            $attrs['logo_alt_text'] = techvertu_get_image_alt_text($attrs['logo_image_url']);
        if ( '' !== $attrs['header_image_url'] && '' === $attrs['image_alt_text'] )
            $attrs['image_alt_text'] = techvertu_get_image_alt_text($attrs['header_image_url']);
    }
    return $attrs;
}
add_filter( 'et_pb_module_shortcode_attributes', 'techvertu_update_module_alt_text', 20, 3 );




add_action ('widgets_init', 'iw_modify_footer', 100);

function iw_modify_footer() {
  global $wp_registered_sidebars;
  $before = "<p class='widgettitle'>";
  $after = "</p>";

  $wp_registered_sidebars['sidebar-2']['before_title'] = $before;
  $wp_registered_sidebars['sidebar-3']['before_title'] = $before;
  $wp_registered_sidebars['sidebar-4']['before_title'] = $before;
  $wp_registered_sidebars['sidebar-5']['before_title'] = $before;
  $wp_registered_sidebars['sidebar-6']['before_title'] = $before;

  $wp_registered_sidebars['sidebar-2']['after_title'] = $after;
  $wp_registered_sidebars['sidebar-3']['after_title'] = $after;
  $wp_registered_sidebars['sidebar-4']['after_title'] = $after;
  $wp_registered_sidebars['sidebar-5']['after_title'] = $after;
  $wp_registered_sidebars['sidebar-6']['after_title'] = $after;

  return true;
}

add_filter('wpseo_sitemap_index', 'regenration_new_sitemaps');
function regenration_new_sitemaps() {
    // links can be seperated by , inorder to multiply sitemap urls
    $links = [
        'https://www.johnfhuntregeneration.co.uk/pdf-sitemap.xml',
    ];
 
    //also you can generate links by your own business logic
 
    $appended_text = '';
 
    foreach ($links as $l) {
        $appended_text .= "<sitemap><loc>{$l}</loc></sitemap>";
    }
 
    return $appended_text;
}

add_shortcode( 'techvertu-get-projects', 'techvertu_projects_query' );
function techvertu_projects_query( $atts ) {
	
    $output .= '<div class="project-wrapper clearfix">';
    $output .=  techvertu_load_project_items();  
    // $output .= '<a href="" class="load-more-projects">Load More</a>';
    $output .= '</div>';
    return $output;
}


function techvertu_load_project_items(){
    $args = array(
        'post_type' => 'page',
        'paged' => $paged,
		'post_parent' => 364425,
        'posts_per_page'    => 20,
        
    );
    $postslist = new WP_Query( $args );
    if ( $postslist->have_posts() ) :
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
            $location = get_post_meta(get_the_ID(), 'location', true);
            $client = get_post_meta(get_the_ID(), 'client', true);
            $start_date = get_post_meta(get_the_ID(), 'start_date', true);
            $status = get_post_meta(get_the_ID(), 'status', true);
            $thisPost = get_post(get_the_ID());          
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
            $output .= '<div class="post-item">';
            $output .= '<a href="'.get_permalink(get_the_ID()).'">';
            $output .= '<figure class="image-wrapper clearfix"><img src="'.$feat_image_url.'" /></figure>';
            $output .= '<div class="post-content-wrapper">';
            $output .= '<h3>' . get_the_title() . '</h3>';
            $output .= '<div class="short-desc">
            <ul>
                <li>
                    <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.7332 16.5178C17.3187 12.3434 16.9936 12.8642 17.0681 12.7553C18.0094 11.3892 18.5069 9.78135 18.5069 8.10547C18.5069 3.66113 15.002 0 10.6771 0C6.36629 0 2.84722 3.65391 2.84722 8.10547C2.84722 9.78027 3.35517 11.4302 4.3273 12.8147L6.62084 16.5179C4.16867 16.9056 0 18.0611 0 20.6055C0 21.533 0.588331 22.8547 3.39114 23.8847C5.34822 24.6039 7.93573 25 10.6771 25C15.8033 25 21.3542 23.5121 21.3542 20.6055C21.3542 18.0607 17.1904 16.9064 14.7332 16.5178ZM5.51645 12.009C5.50862 11.9964 5.50045 11.9841 5.49191 11.972C4.68297 10.8269 4.27083 9.46978 4.27083 8.10547C4.27083 4.44248 7.13732 1.46484 10.6771 1.46484C14.2095 1.46484 17.0833 4.4438 17.0833 8.10547C17.0833 9.47197 16.679 10.7831 15.9138 11.898C15.8452 11.9911 16.203 11.4192 10.6771 20.3413L5.51645 12.009ZM10.6771 23.5352C5.07783 23.5352 1.42361 21.8417 1.42361 20.6055C1.42361 19.7746 3.30126 18.4084 7.462 17.8759L10.0768 22.0978C10.2075 22.3088 10.4338 22.4365 10.677 22.4365C10.9202 22.4365 11.1466 22.3087 11.2773 22.0978L13.892 17.8759C18.0529 18.4084 19.9306 19.7746 19.9306 20.6055C19.9306 21.8312 16.3092 23.5352 10.6771 23.5352Z" fill="white"/>
                    <path d="M10.6771 4.44336C8.71464 4.44336 7.11806 6.08618 7.11806 8.10547C7.11806 10.1248 8.71464 11.7676 10.6771 11.7676C12.6395 11.7676 14.2361 10.1248 14.2361 8.10547C14.2361 6.08618 12.6395 4.44336 10.6771 4.44336ZM10.6771 10.3027C9.49962 10.3027 8.54167 9.31704 8.54167 8.10547C8.54167 6.8939 9.49962 5.9082 10.6771 5.9082C11.8546 5.9082 12.8125 6.8939 12.8125 8.10547C12.8125 9.31704 11.8546 10.3027 10.6771 10.3027Z" fill="white"/>
                    </svg>
                    Location: '.$location.'
                </li>
                <li>
                    <svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.3218 13.8165C16.372 12.4703 17.7316 10.1548 17.7316 7.52464C17.7307 3.37566 14.3551 0 10.2061 0C6.05712 0 2.68146 3.37566 2.68146 7.52464C2.68146 10.1548 4.04018 12.4712 6.09129 13.8165C2.56726 14.9099 0 18.1992 0 22.0784V22.359C0 23.8148 1.18517 25 2.6419 25H17.7721C19.2279 25 20.414 23.8157 20.414 22.359V22.0784C20.4131 18.1992 17.8458 14.909 14.3218 13.8165ZM4.30095 7.52464C4.30095 4.26768 6.95004 1.61859 10.2061 1.61859C13.4622 1.61859 16.1113 4.26768 16.1113 7.52464C16.1113 10.7816 13.4622 13.4298 10.2061 13.4298C6.95004 13.4298 4.30095 10.7807 4.30095 7.52464ZM18.7936 22.3581C18.7936 22.9219 18.335 23.3796 17.7712 23.3796H2.641C2.07719 23.3796 1.61859 22.9219 1.61859 22.3581V22.0775C1.61859 18.201 4.77124 15.0493 8.64686 15.0493H11.7644C15.641 15.0493 18.7927 18.2019 18.7927 22.0775L18.7936 22.3581Z" fill="white"/>
                    <path d="M13.1996 10.0613C13.4864 9.71962 13.4424 9.20887 13.1007 8.92112C12.759 8.63337 12.25 8.67743 11.9596 9.02003C11.0882 10.0577 9.32307 10.0577 8.45263 9.02003C8.16398 8.67563 7.65233 8.63247 7.31152 8.92112C6.96982 9.20797 6.92486 9.71872 7.21261 10.0613C7.95716 10.948 9.04791 11.456 10.2061 11.456C11.3643 11.456 12.455 10.9471 13.1996 10.0613Z" fill="white"/>
                    </svg>
                    Client: '.$client.'
                </li>
                <li>
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1368 24.9966C5.6167 24.9966 1.12578 20.5041 1.12578 14.9819C1.27307 3.6992 16.9476 1.14926 20.6591 11.7884C20.831 12.2997 20.5559 12.8537 20.0446 13.0257C19.5333 13.1977 18.9795 12.9224 18.8076 12.411C17.7039 9.12738 14.6212 6.92121 11.1368 6.92121C0.462368 7.32629 0.464272 22.6386 11.1369 23.0425C11.6057 23.0425 12.0755 23.0019 12.5332 22.922C13.815 22.745 14.1361 24.578 12.8692 24.847C12.3009 24.9463 11.718 24.9966 11.1368 24.9966ZM10.0805 2.912C10.128 1.62005 11.9834 1.61746 12.0338 2.90609C12.0818 4.20101 13.9397 4.20004 13.9872 2.90609C13.8383 -0.972007 8.27212 -0.967366 8.12708 2.91205C8.17533 4.20693 10.0326 4.20619 10.0805 2.912ZM23.6912 17.4161L19.3297 14.8273C17.5813 13.7468 15.2075 15.0692 15.2406 17.1318V22.3094C15.2082 24.3713 17.5801 25.6951 19.3298 24.6139L23.6912 22.0251C25.4357 21.0268 25.4368 18.4147 23.6912 17.4161ZM22.6945 20.3445L18.3329 22.9333C17.8254 23.2317 17.1974 22.8817 17.194 22.3094V17.1317C17.194 16.7534 17.4535 16.5648 17.5651 16.5012C17.7432 16.3866 18.0935 16.3471 18.333 16.5078L22.6945 19.0967C23.1791 19.3901 23.1748 20.0542 22.6945 20.3445ZM12.6524 15.0291C12.6524 15.8385 11.9965 16.4947 11.1873 16.4947C9.84352 16.4966 9.21844 14.815 10.2111 13.9365L10.2098 9.75503C10.2096 9.21531 10.6469 8.77765 11.1865 8.77769C11.7257 8.77769 12.163 9.21492 12.1632 9.75445L12.1645 13.9375C12.4639 14.2058 12.6524 14.5953 12.6524 15.0291ZM18.1637 5.31944C17.2829 4.37131 18.5954 3.05577 19.545 3.9377L21.9867 6.38032C22.3681 6.7619 22.3681 7.38052 21.9867 7.76206C21.6053 8.14364 20.9869 8.14364 20.6055 7.76206L18.1637 5.31944ZM4.11328 3.98655C4.49473 4.36814 4.49473 4.98675 4.11328 5.36829L1.67156 7.81091C0.729199 8.69811 -0.59148 7.37026 0.290324 6.42917L2.73205 3.98655C3.11344 3.60502 3.73188 3.60502 4.11328 3.98655Z" fill="white"/>
                    </svg>
                    Start Date: '.$start_date.'
                </li>
                <li>
                    <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.7332 16.5178C17.3187 12.3434 16.9936 12.8642 17.0681 12.7553C18.0094 11.3892 18.5069 9.78135 18.5069 8.10547C18.5069 3.66113 15.002 0 10.6771 0C6.36629 0 2.84722 3.65391 2.84722 8.10547C2.84722 9.78027 3.35517 11.4302 4.3273 12.8147L6.62084 16.5179C4.16867 16.9056 0 18.0611 0 20.6055C0 21.533 0.588331 22.8547 3.39114 23.8847C5.34822 24.6039 7.93573 25 10.6771 25C15.8033 25 21.3542 23.5121 21.3542 20.6055C21.3542 18.0607 17.1904 16.9064 14.7332 16.5178ZM5.51645 12.009C5.50862 11.9964 5.50045 11.9841 5.49191 11.972C4.68297 10.8269 4.27083 9.46978 4.27083 8.10547C4.27083 4.44248 7.13732 1.46484 10.6771 1.46484C14.2095 1.46484 17.0833 4.4438 17.0833 8.10547C17.0833 9.47197 16.679 10.7831 15.9138 11.898C15.8452 11.9911 16.203 11.4192 10.6771 20.3413L5.51645 12.009ZM10.6771 23.5352C5.07783 23.5352 1.42361 21.8417 1.42361 20.6055C1.42361 19.7746 3.30126 18.4084 7.462 17.8759L10.0768 22.0978C10.2075 22.3088 10.4338 22.4365 10.677 22.4365C10.9202 22.4365 11.1466 22.3087 11.2773 22.0978L13.892 17.8759C18.0529 18.4084 19.9306 19.7746 19.9306 20.6055C19.9306 21.8312 16.3092 23.5352 10.6771 23.5352Z" fill="white"/>
                    <path d="M10.6771 4.44336C8.71464 4.44336 7.11806 6.08618 7.11806 8.10547C7.11806 10.1248 8.71464 11.7676 10.6771 11.7676C12.6395 11.7676 14.2361 10.1248 14.2361 8.10547C14.2361 6.08618 12.6395 4.44336 10.6771 4.44336ZM10.6771 10.3027C9.49962 10.3027 8.54167 9.31704 8.54167 8.10547C8.54167 6.8939 9.49962 5.9082 10.6771 5.9082C11.8546 5.9082 12.8125 6.8939 12.8125 8.10547C12.8125 9.31704 11.8546 10.3027 10.6771 10.3027Z" fill="white"/>
                    </svg>
                    Status: '.$status.'
                </li>
            </ul>
            </div>';
            $output .= '</div></a></div>';
            endwhile;  
            $total_pages = $postslist->max_num_pages;
            $output .= '<div class="pagination clearfix">';
            $output.= paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $postslist->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i class="fi fi-rr-angle-small-left"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.20078 8.21031C3.10705 8.11734 3.03266 8.00674 2.98189 7.88488C2.93112 7.76302 2.90498 7.63232 2.90498 7.50031C2.90498 7.36829 2.93112 7.23759 2.98189 7.11573C3.03266 6.99387 3.10705 6.88327 3.20078 6.79031L7.79078 2.2103C7.88451 2.11734 7.95891 2.00674 8.00967 1.88488C8.06044 1.76302 8.08658 1.63232 8.08658 1.5003C8.08658 1.36829 8.06044 1.23759 8.00967 1.11573C7.95891 0.993868 7.88451 0.883267 7.79078 0.790304C7.60342 0.604053 7.34997 0.499512 7.08578 0.499512C6.8216 0.499512 6.56814 0.604053 6.38078 0.790304L1.79078 5.3803C1.22898 5.94281 0.913422 6.7053 0.913422 7.50031C0.913422 8.29531 1.22898 9.0578 1.79078 9.62031L6.38078 14.2103C6.56704 14.395 6.81844 14.4992 7.08078 14.5003C7.21239 14.5011 7.34285 14.4758 7.46469 14.4261C7.58653 14.3763 7.69734 14.303 7.79078 14.2103C7.88451 14.1173 7.95891 14.0067 8.00967 13.8849C8.06044 13.763 8.08658 13.6323 8.08658 13.5003C8.08658 13.3683 8.06044 13.2376 8.00967 13.1157C7.95891 12.9939 7.88451 12.8833 7.79078 12.7903L3.20078 8.21031Z" fill="#374957"/>
                </svg>
                </i> %1$s', __( '', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i class="fi fi-rr-angle-small-right"><svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.20922 5.38006L2.61922 0.79006C2.43186 0.603809 2.17841 0.499268 1.91422 0.499268C1.65003 0.499268 1.39658 0.603809 1.20922 0.79006C1.11549 0.883023 1.0411 0.993624 0.990329 1.11548C0.93956 1.23734 0.913422 1.36805 0.913422 1.50006C0.913422 1.63207 0.93956 1.76278 0.990329 1.88464C1.0411 2.0065 1.11549 2.1171 1.20922 2.21006L5.80922 6.79006C5.90295 6.88302 5.97734 6.99363 6.02811 7.11548C6.07888 7.23734 6.10502 7.36805 6.10502 7.50006C6.10502 7.63207 6.07888 7.76278 6.02811 7.88464C5.97734 8.0065 5.90295 8.1171 5.80922 8.21006L1.20922 12.7901C1.02092 12.977 0.914602 13.2312 0.913664 13.4965C0.912726 13.7619 1.01724 14.0168 1.20422 14.2051C1.3912 14.3934 1.64532 14.4997 1.91068 14.5006C2.17605 14.5016 2.43092 14.397 2.61922 14.2101L7.20922 9.62006C7.77102 9.05756 8.08658 8.29506 8.08658 7.50006C8.08658 6.70506 7.77102 5.94256 7.20922 5.38006Z" fill="#374957"/>
                </svg>
                </i> ', __( '', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) );
            $output .= '</div>';
            ?>
        </div>
        <?php 
        endif;
        wp_reset_postdata();
        return $output;
}


?>