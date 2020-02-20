<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Base extends WP_Widget
{

    public function __construct()
    {

        parent::__construct(
            'template',
            'Widget Modelo (Home)',
            array(
                'classname' => 'template',
                'description' => 'Mini apresentação da empresa.'
            )
        );

    }


    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);

        ?>
        <!-- Widget -->
        <section id="template" class="template">
          <div class="alert alert-success" role="alert">
            Aqui está seu <b>widget</b>!
            <i class="fab fa-font-awesome"></i>
          </div>
        </section>
        <!--/ Widget -->
        <?php
    }


}


/* Register the widget */
add_action('widgets_init', function(){return register_widget("Base");});
