<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 13/04/2019
 * Time: 22:42
 */
use Carbon_Fields\Block;
use Carbon_Fields\Field;

    class blockGutenberg
{
    public function __construct()
    {
        Block::make( __( 'folio_image_left' ) )
            ->add_fields( array(
                Field::make( 'image', 'image', __( 'Block Image' ) ),
                Field::make( 'text', 'content', __( 'Block Content' ) ),
            ) )
            ->set_render_callback( function ( $block ) {
                ?>
                <div class="custom_gutemberg_folio_left">
                    <?php echo wp_get_attachment_image( $block['image'], 'full' ); ?>
                    <div class="content">
                        <p>
                            <?php echo apply_filters( 'the_content', $block['content'] ); ?>
                        </p>
                    </div>
                </div>
                <?php
            }
        );

        Block::make( __( 'folio_image_right' ) )
            ->add_fields( array(
                Field::make( 'image', 'image', __( 'Block Image' ) ),
                Field::make( 'text', 'content', __( 'Block Content' ) ),
            ) )
            ->set_render_callback( function ( $block ) {
                ?>
                <div class="custom_gutemberg_folio_left">
                    <div class="content">
                        <p>
                            <?php echo apply_filters( 'the_content', $block['content'] ); ?>
                        </p>
                    </div>
                    <?php echo wp_get_attachment_image( $block['image'], 'full' ); ?>
                </div>
                <?php
            }
            );
    }

}