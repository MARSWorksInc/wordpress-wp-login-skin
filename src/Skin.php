<?php
/*
 * @package marspress/wp-login-skin
 */

namespace MarsPress\LoginSkin;

if( ! class_exists( 'Skin' ) )
{

    final class Skin
    {

        private Skin_Theme $theme;

        private Skin_Logo $logo;

        public function __construct(
            Skin_Theme $_theme,
            Skin_Logo $_logo
        ){

            $this->theme = $_theme;
            $this->logo = $_logo;

            add_action( 'login_head', [ $this,'render_style_tag' ], 10, 0 );
            add_filter( 'login_headerurl', [ $this,'set_login_head_url' ], 10, 1 );

        }

        /**
         * @action login_head
         * @class \MarsPress\LoginSkin\Skin
         * @function render_style_tag
         * @priority 10
         * @return void
         */
        public function render_style_tag()
        {

            echo <<<HTML
            <style>
                body{
                    background-color: {$this->theme->backgroundColor} !important;
                    background-image: url("{$this->theme->backgroundImage}") !important;
                    background-size: cover !important;
                    background-repeat: no-repeat !important;
                    height: auto !important;
                    background-position: {$this->theme->backgroundPosition} !important;
                }
                #login{
                    padding: 0 !important;
                    margin-top: 35px !important;
                    box-shadow: 10px 10px 10px 10px {$this->theme->boxShadow} !important;
                }
                #login h1 a, .login h1 a {
                    background: {$this->theme->boxBackground} url("{$this->logo->imageURL}");
                    width: 320px;
                    height: {$this->logo->height}px;
                    background-size: {$this->logo->backgroundSize}px;
                    background-repeat: no-repeat;
                    background-position: center;
                    padding-bottom: 0;
                    padding-top: {$this->logo->paddingTop}px;
                    margin-bottom: 0;
                    transition-duration: 0.65s;
                }
                p.message{
                    margin-bottom: 0 !important;
                }
                #loginform, #resetpassform{
                    margin-top: 0;
                    padding-top: 10px !important;
                    padding-bottom: 26px !important;
                    border: none !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                #login_error{
                    margin-bottom: 0 !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                #nav{
                    margin: 0 !important;
                    background-color: white;
                    padding: 12px 24px !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                #backtoblog{
                    margin: 0 !important;
                    background-color: white;
                    padding: 12px 24px !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                .privacy-policy-page-link{
                    margin: 0 !important;
                    background-color: white;
                    padding: 12px 0 !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                #lostpasswordform{
                    border: none !important;
                    margin-top: 0 !important;
                    background-color: {$this->theme->boxBackground} !important;
                }
                .message{
                    background-color: #00a0d2 !important;
                    color: white !important;
                }
                .success{
                    background-color: #46b450 !important;
                    color: white !important;
                }
                #login_error{
                    background-color: #dc3232 !important;
                    color: white !important;
                }
                input{
                    border-radius: 0 !important;
                    border: none !important;
                }
                input[type="text"], input[type="email"], input[type="password"]{
                    border-bottom: 3px solid {$this->theme->primaryColor} !important;
                }
                input#wp-submit{
                    padding: 0.35rem 1.65rem;
                    transition-duration: 0.35s;
                    background-color: {$this->theme->primaryColor} !important;
                    border: 1px solid {$this->theme->primaryColor} !important;
                    color: {$this->theme->buttonColor} !important;
                }
                input#wp-submit:hover{
                    background-color: {$this->theme->buttonColor} !important;
                    border-color:  {$this->theme->primaryColor} !important;
                    color: {$this->theme->primaryColor} !important;
                }
                input#rememberme{
                    position: relative;
                    width: 16px;
                    height: 16px;
                    outline: 1px solid {$this->theme->buttonColor};
                }
                input#rememberme:checked{
                    outline-color: {$this->theme->primaryColor};
                }
                input#rememberme:checked::after{
                    position: absolute;
                    display: inline-block;
                    width: 14px;
                    height: 14px;
                    top: 1px;
                    left: 1px;
                    background-color: {$this->theme->primaryColor} !important;
                    content: '';
                }
                p, label, p#nav a, p#backtoblog a, p.message a{
                    color: {$this->theme->textColor} !important;
                    transition-duration: 0.325s !important;
                }
                p#nav a:hover, p#nav a:active, p#nav a:focus, p#backtoblog a:hover, p#backtoblog a:active, p#backtoblog a:focus, p.message a:hover, p.message a:active, p.message a:focus{
                    color: {$this->theme->primaryColor} !important;
                }
            </style>
            HTML;

            if( isset( $_GET['action'] ) && $_GET['action'] === 'confirm_admin_email' ){

                echo <<<HTML
                <style>
                    #login h1 a, .login h1 a {
                        width: 650px !important;
                    }
                    form.admin-email-confirm-form{
                        background: {$this->theme->boxBackground} !important;
                        margin: 0 !important;
                        border: none !important;
                    }
                    .admin-email__heading{
                        border: none !important;
                        color: {$this->theme->textColor} !important;
                    }
                    p{
                        color: {$this->theme->textColor} !important;
                    }
                    p a{
                        color: {$this->theme->textColor} !important;
                        transition-duration: 0.325s !important;
                    }
                    p a:hover, p a:focus, p a:active{
                        color: {$this->theme->primaryColor} !important;
                    }
                    a.button, input[type="submit"]{
                        padding: 0.35rem 1.65rem;
                        transition-duration: 0.35s;
                        background-color: {$this->theme->primaryColor} !important;
                        border: 1px solid {$this->theme->primaryColor} !important;
                        color: {$this->theme->buttonColor} !important;
                        border-radius: 0 !important;
                    }
                    a.button:hover, input[type="submit"]:hover{
                        background-color: {$this->theme->buttonColor} !important;
                        border-color:  {$this->theme->primaryColor} !important;
                        color: {$this->theme->primaryColor} !important;
                    }
                </style>
                HTML;

            }

            add_filter( 'gettext', [ $this,'do_text_changes' ], 20, 3 );

        }

        /**
         * @filter gettext
         * @class \MarsPress\LoginSkin\Skin
         * @function do_text_changes
         * @priority 20
         * @param string $_translatedText
         * @param string $_text
         * @param string $_textDomain
         * @return string
         */
        public function do_text_changes( string $_translatedText, string $_text, string $_textDomain ): string
        {

            if( $_text === 'Username or Email Address' ){

                return 'Email Address';

            }

            return $_translatedText;

        }

        /**
         * @filter login_headerurl
         * @class \MarsPress\LoginSkin\Skin
         * @function set_login_head_url
         * @priority 10
         * @param string $_loginHeaderURL
         * @return string
         */
        public function set_login_head_url( string $_loginHeaderURL ): string
        {

            return \home_url();

        }

    }

}