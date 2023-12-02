<?php

require_once TEMPLATEPATH . '/inc/pluings/CMB2/init.php';
require_once TEMPLATEPATH . '/inc/pluings/cmb2-tabs.php';

// add metabox panel admin

function netelites_metaboxs(){

    $prefix = 'netelites';
    $domain = 'netelites.ir';

     // add meta box in setting page
      $setting_page = new_cmb2_box( array(
          'id'            => $prefix . '_setting_page',
          'title'         => __( 'تنظیمات صفحه ها', $domain ),
          'object_types'  => array( 'page','post','product'), // Post type
          'context'       => 'normal',
          'priority'      => 'high',
          'show_names'    => true, // Show field names on the left
          'tabs' => array(
            array(
                'id' => $prefix . '_header',
                'title' => 'هدر',
                'fields' => array(
                    $prefix . '_header_checkbox',
                    $prefix . '_header_select'
                )
            ),
            array(
                'id' => $prefix . '_map',
                'title' => 'راهنمایی صفحه',
                'fields' => array(
                    $prefix . '_map_checkbox'
                )
            ),
            array(
                'id' => $prefix . '_footer',
                'title' => 'فوتر',
                'fields' => array(
                    $prefix . '_footer_checkbox',
                    $prefix . '_footer_select'
                )
            ),  
          )
          // 'cmb_styles' => false, // false to disable the CMB stylesheet
          // 'closed'     => true, // Keep the metabox closed by default
      ) );
  
      // checkbox header field
      $setting_page->add_field( array(
          'name'       => __( 'هدر', $domain ),
          'desc'       => __( 'غیر فعال سازی هدر', $domain ),
          'id'         =>  $prefix . '_header_checkbox',
          'type'       => 'checkbox',
          'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
          // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
          // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
          // 'on_front'        => false, // Optionally designate a field to wp-admin only
          // 'repeatable'      => true,
      ) );
  
      // select header field
      $setting_page->add_field( array(
          'name' => __( 'منو سفارشی', $domain ),
          'desc' => __( 'انتخاب منو سفارشی', $domain),
          'id'   => $prefix . '_header_select',
          'type' => 'select',
          'default' => 'header_one',
          'options' => array(
            'header_one' => __( 'اول', $domain ),
            'header_two'   => __( 'دوم', $domain ),
            'header_tree'     => __( 'سوم', $domain )
           ),
          // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
          // 'repeatable' => true,
      ) );

    // checkbox map field
      $setting_page->add_field( array(
        'name'       => __( 'راهنمایی صفحه', $domain ),
        'desc'       => __( 'غیر فعال سازی راهنمای صفحه', $domain ),
        'id'         =>  $prefix . '_map_checkbox',
        'type'       => 'checkbox',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

          // checkbox footer field
          $setting_page->add_field( array(
            'name'       => __( 'فوتر', $domain ),
            'desc'       => __( 'غیر فعال سازی فوتر', $domain ),
            'id'         =>  $prefix . '_footer_checkbox',
            'type'       => 'checkbox',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ) );
    
        // select footer field
        $setting_page->add_field( array(
            'name' => __( 'فوتر سفارشی', $domain ),
            'desc' => __( 'انتخاب فوتر سفارشی', $domain),
            'id'   => $prefix . '_footer_select',
            'type' => 'select',
            'default' => 'footer_one',
            'options' => array(
              'footer_one' => __( 'فوتر اول', $domain ),
              'footer_two'   => __( 'فوتر دوم', $domain ),
              'footer_tree'     => __( 'فوتر سوم', $domain )
             ),
            // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
            // 'repeatable' => true,
        ) );

      // add meta box in setting post

      $setting_post =new_cmb2_box( array(
        'id'            => $prefix . '_setting_post',
        'title'         => __( 'تنظیمات نوشته ها', $domain ),
        'object_types'  => array( 'post'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'tabs' => array(
          array(
              'id' => $prefix . '_general',
              'title' => 'عمومی',
              'fields' => array(
                $prefix . '_author_post_checkbox'
              )
          ),
          array(
            'id' => $prefix . '_viedo',
            'title' => 'ویدیو',
            'fields' => array(
                $prefix . '_veideo_post_checkbox',
                $prefix . '_link_veideo_post_checkbox'
            )
        ),
          array(
              'id' =>  $prefix . '_sidbar',
              'title' => 'نوار کناری',
              'fields' => array(
                  $prefix . '_sidbar_post_checkbox',
                  $prefix . '_sidbar_post_select'
              )
          )
        )
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

              // text general field

              $setting_post->add_field(array(
                'name'       => __( 'نویسنده', $domain ),
                'desc'       => __(  'نام نویسنده', $domain ),
                'id'         =>  $prefix . '_author_post_checkbox',
                'type'       => 'text',
                'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
                // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
                // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
                // 'on_front'        => false, // Optionally designate a field to wp-admin only
                // 'repeatable'      => true,
              ));

              // checkbox veideo field
              $setting_post->add_field( array(
                'name'       => __( 'ویدیو', $domain ),
                'desc'       => __(  'فعال سازی ویدیو', $domain ),
                'id'         =>  $prefix . '_veideo_post_checkbox',
                'type'       => 'checkbox',
                'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
                // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
                // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
                // 'on_front'        => false, // Optionally designate a field to wp-admin only
                // 'repeatable'      => true,
               ) );

              // text url veideo field
              $setting_post->add_field( array(
                'name'       => __( 'لینک ویدیو', $domain ),
                'desc'       => __(  'لینک ویدیو', $domain ),
                'id'         =>  $prefix . '_link_veideo_post_checkbox',
                'type'       => 'text_url',
                'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
                // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
                // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
                // 'on_front'        => false, // Optionally designate a field to wp-admin only
                // 'repeatable'      => true,
               ) );

          // checkbox sidbar field
          $setting_post->add_field( array(
            'name'       => __( 'نوار کناری', $domain ),
            'desc'       => __(  'فعال سازی نوار کناری', $domain ),
            'id'         =>  $prefix . '_sidbar_post_checkbox',
            'type'       => 'checkbox',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
           ) );

            // select sidbar field
        $setting_post->add_field( array(
            'name' => __( 'نوار کناری', $domain ),
            'desc' => __( 'انتخاب نوار کناری سفارشی', $domain),
            'id'   => $prefix . '_sidbar_post_select',
            'type' => 'select',
            'default' => 'sidbar_one',
            'options' => array(
              'sidbar_one' => __( 'نوار کناری اول', $domain ),
              'sidbar_two'   => __( 'نوار کناری دوم', $domain ),
              'sidbar_tree'     => __( 'نوار کناری سوم', $domain )
             ),
            // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
            // 'repeatable' => true,
        ) );
}

add_action( 'cmb2_admin_init', 'netelites_metaboxs' );
