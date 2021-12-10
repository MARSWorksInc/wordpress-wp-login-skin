<?php
/*
 * @package marspress/wp-login-skin
 */

namespace MarsPress\LoginSkin;

if( ! class_exists( 'Skin_Logo' ) )
{

    final class Skin_Logo
    {

        public ?string $imageURL;
        public int $width;
        public int $height;
        public int $backgroundSize;
        public int $paddingTop;

        public function __construct(
            ?string $_imageURL = null,
            int $_width = 84,
            int $_height = 84,
            int $_backgroundSize = 84,
            int $_paddingTop = 30
        ){

            if( is_null( $_imageURL ) ){

                $_imageURL = \admin_url('images/wordpress-logo.svg');

            }

            $this->imageURL = $_imageURL;
            $this->width = $_width;
            $this->height = $_height;
            $this->backgroundSize = $_backgroundSize;
            $this->paddingTop = $_paddingTop;

        }

    }

}