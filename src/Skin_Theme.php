<?php
/*
 * @package marspress/wp-login-skin
 */

namespace MarsPress\LoginSkin;

if( ! class_exists( 'Skin_Theme' ) )
{

    final class Skin_Theme
    {

        public string $primaryColor;
        public string $textColor;
        public string $buttonColor;
        public string $boxShadow;
        public string $boxBackground;
        public string $backgroundColor;
        public ?string $backgroundImage;
        public string $backgroundPosition;

        public function __construct(
            string $_primaryColor = '#32373E',
            string $_textColor = '#000000',
            string $_buttonColor = '#FFFFFF',
            string $_boxShadow = 'rgba(0,0,0,0.5)',
            string $_boxBackground = 'rgba(255,255,255,0.9)',
            string $_backgroundColor = '#39414d',
            ?string $_backgroundImage = null,
            string $_backgroundPosition = '50% 50%'
        ){

            $this->primaryColor = $_primaryColor;
            $this->textColor = $_textColor;
            $this->buttonColor = $_buttonColor;
            $this->boxShadow = $_boxShadow;
            $this->boxBackground = $_boxBackground;
            $this->backgroundColor = $_backgroundColor;
            $this->backgroundImage = $_backgroundImage;
            $this->backgroundPosition = $_backgroundPosition;

        }

    }

}