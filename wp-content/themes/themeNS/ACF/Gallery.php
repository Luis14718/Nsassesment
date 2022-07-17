<?php
 acf_add_local_field_group(array(
    'key' => 'group_62d3753fe6970',
    'title' => 'Gallery',
    'fields' => array(
        array(
            'key' => 'field_62d3756f30d28',
            'label' => 'Gallery',
            'name' => 'gallery',
            'type' => 'photo_gallery',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'fields[gallery' => array(
                'edit_modal' => 'Default',
                'images_limit' => '',
                'remove_edit_button' => 'No',
                'remove_delete_button' => 'No',
            ),
            'edit_modal' => 'Default',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 1,
));