# MarsPress LoginSkin
### Installation
Require the composer package in your composer.json with `marspress/wp-login-skin` with minimum `dev-main` OR run `composer require marspress/wp-login-skin`

### Usage
`new \MarsPress\LoginSkin\Skin()` takes 2 parameters, both required.
* Theme (required)(\MarsPress\LoginSkin\Skin_Theme)
  * Controls the colors.
* Logo (required)(\MarsPress\LoginSkin\Skin_Logo)
  * Controls the logo and its sizing and positioning.

`new \MarsPress\LoginSkin\Skin_Theme` takes 8 parameters, all of them are optional
* Primary Color (optional)(string)
  * Primary accent color. This color is used for various elements such as field borders, checkbox styles, button colors, and anchor hover colors.
  * This can be a hex string or a rgb(a) string.
  * Defaults to `#32373E`.
* Text Color (optional)(string)
  * Text color.
  * This can be a hex string or a rgb(a) string.
  * Defaults to `#000000`.
* Button Color (optional)(string)
  * Button hover color.
  * This can be a hex string or a rgb(a) string.
  * Defaults to `#FFFFFF`.
* Box Shadow (optional)(string)
  * Box shadow color for the main Login box.
  * This can be a hex string or a rgb(a) string.
  * Defaults to `rgba(0,0,0,0.5)`.
* Box Color (optional)(string)
  * Background color for the main Login box.
  * This can be a hex string or a rgb(a) string.
  * Defaults to `rgba(255,255,255,0.9)`.
* Background Color (optional)(string)
  * Background color for the body of the wp-login.php
  * This can be a hex string or a rgb(a) string.
  * Defaults to `#39414d`.
* Background Image (optional)(string)
  * Background image for the body of the wp-login.php
  * This can absolute or relative URL.
  * Defaults to `null`.
  * The size is always set to `cover`.
* Background Position (optional)(string)
  * Background image position for the body of the wp-login.php
  * Defaults to `50% 50%`.

`new \MarsPress\LoginSkin\Skin_Logo` takes 5 parameters, all of them are optional
* Image URL (optional)(string)
  * Image for the logo.
  * This can absolute or relative URL.
  * Defaults to `\admin_url('images/wordpress-logo.svg')`.
* Width (optional)(int)
  * Width of the image container. Although this is not used that much and has little affect. Recommend to leave as default.
  * This is in pixel values.
  * Defaults to `84`.
* Height (optional)(int)
  * Height of the image container.
  * This is in pixel values.
  * Defaults to `84`.
* Background Size (optional)(int)
  * Size of the image. Use this to make the logo larger or smaller within the container.
  * This is in pixel values.
  * Defaults to `84`.
* Padding Top (optional)(int)
  * Top padding of the image container. As the image is actually a background image, this can be considered the aspect ratio.
  * This is in pixel values.
  * Defaults to `30`.

#### Example
The most basic usage is to just initialize the `Skin_Theme` and `Skin_Logo` with their default values:
```php
new \MarsPress\LoginSkin\Skin(
    new \MarsPress\LoginSkin\Skin_Theme(),
    new \MarsPress\LoginSkin\Skin_Logo()
);
```