<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neauron_work_meta',
  'title'     => 'Work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'sub title',
          'desc' => 'Type work sub title/category.',
        ),
        array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => 'Big Preview image',
          'desc' => 'Upload portfolio big preview image.',
        ),
        array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'link text',
          'desc' => 'Type work sub title/category.',
          'default' => 'Visit Website',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'link',
        ),

        array(
          'id'     => 'informations',
          'type'   => 'group',
          'title'  => 'work informations',
          'button_title' => 'Add New',
          'accordion_title' => 'Add New Information',
          'fields' => array(
            array(
              'id'    => 'title',
              'type'  => 'text',
              'title' => 'information title',
            ),
            array(
              'id'    => 'value',
              'type'  => 'text',
              'title' => 'information value',
            )
          ),
        ),

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
