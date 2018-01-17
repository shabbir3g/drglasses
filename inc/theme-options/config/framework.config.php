<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'drglass-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Theme options <small>by Mostafiz Shabbir</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------

$options[] = array(
    'name'    => 'header-opt',
    'title'    => 'Header Options',
    'icon'    => 'fa fa-home',
    'sections'  => array(
      array(
            'name'    => 'logo-uploader',
            'title' => 'Logo',
            'icon'  => 'fa fa-check',
            'fields' => array(
                array(
                  'id'    => 'logo-uploa',
                  'type'  => 'image',
                  'title' => 'Logo Uploader',
                  ),
                 
              ),
          ),
        array(
            'name'    => 'mobile-number',
            'title' => 'Mobile',
            'icon'  => 'fa fa-check',
            'fields' => array(
                array(
                  'id'    => 'mobile-num',
                  'type'  => 'text',
                  'title' => 'Mobile Number',
                  'default'=> 'Numero Verde <b>800.10.10.10</b>'
                  ),
                 
              ),
          ),

        array(
            'name'    => 'certificato-number',
            'title' => 'Certificato',
            'icon'  => 'fa fa-check',
            'fields' => array(
                array(
                  'id'    => 'certificato-img1',
                  'type'  => 'upload',
                  'title' => 'First Certificato Image',
                  ),
                array(
                  'id'    => 'certificato-text1',
                  'type'  => 'text',
                  'title' => 'First Certificato link',
                  ),
                array(
                  'id'    => 'certificato-img2',
                  'type'  => 'upload',
                  'title' => 'Second Certificato Image',
                  ),
                array(
                  'id'    => 'certificato-text2',
                  'type'  => 'text',
                  'title' => 'Second Certificato link',
                  ),
                 
              ),
          ),
      ),
  );


$options[] = array(
    'name'    => 'footer-opt',
    'title'    => 'Footer Options',
    'icon'    => 'fa fa-anchor',
    'sections'  => array(
      array(
            'name'    => 'copy-right',
            'title' => 'Copy Right',
            'icon'  => 'fa fa-check',
            'fields' => array(
                array(
                  'id'    => 'copy-text-copy',
                  'type'  => 'textarea',
                  'title' => 'Copy Right Text',
                  ),

                 
              ),
          ),
      array(
            'name'    => 'social-url',
            'title' => 'Social URL',
            'icon'  => 'fa fa-check',
            'fields' => array(
                array(
                  'id'    => 'fac-url',
                  'type'  => 'text',
                  'title' => 'Facebook URL',
                  ),
                 array(
                  'id'    => 'youtube-url',
                  'type'  => 'text',
                  'title' => 'Youtube URL',
                  ),

                 
              ),
          ),
        
      ),
  );




CSFramework::instance( $settings, $options );
