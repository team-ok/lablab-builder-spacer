<?php

/**
 * Field definitions for the lablab builder spacer module.
 *
 * @link       https://github.com/team-ok
 * @since      1.0.0
 * @author     Timo Klemm
 */

if( ! defined( 'ABSPATH' ) ) exit;

return array (
    array (
        'key' => 'field_58ca6bba1608d',
        'label' => __('Add vertical divider line?', 'lablab-spacer'),
        'name' => 'lablab-divider-line',
        'type' => 'radio',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
        ),
        'choices' => array (
            1 => __('Yes', 'lablab-spacer'),
            0 => __('No', 'lablab-spacer'),
        ),
        'allow_null' => 0,
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 0,
        'layout' => 'horizontal',
        'return_format' => 'value',
    ),
);