=== Custom Global Variables ===
Contributors: abdullahkhalfan
Tags: custom global variables, variables, options, settings, shortcodes, shortcode, global variables, global options, global settings, custom variables, custom options, custom settings, custom shortcodes, custom shortcode, php variables
Author URI: https://robust.systems
Plugin URI: https://robust.systems
Requires at least: 3.0.1
Tested up to: 5.1
Stable tag: 1.0.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily create custom variables that can be accessed globally in Wordpress and PHP. Retrieval of information is extremely fast, with no database calls.

== Description ==

Create your own custom variables to manage information on your website such as:

* Phone numbers
* Addresses
* Social media links
* HTML snippets
* And anything else

Easily access them globally in Wordpress and PHP.

= Why you need it =

Rather than having to change something like an email address across multiple pages, you can do it in one place. Avoid the pitfalls of hard coding information in your Wordpress theme that is likely to change.

= Why it's better =

* Your variables are stored and retrieved locally without any calls to the database. That means faster load times for your pages!
* Variables can be accessed easily in PHP from the global scope.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the `Settings -> Custom Global Variables` screen to define your variables

== Usage ==

Display your variables using the shortcode syntax:

`[cgv variable-name]`

Or using the superglobal in PHP:

`<?php echo $GLOBALS['cgv']['variable-name'] ?>`

== Screenshots ==

1. Settings -> Custom Global Variables

== Changelog ==

= 1.0.5 =

* Updated accreditation
* Updated stylesheet
* Tested up to Wordpress 5.1

= 1.0.4 =

* Fixed folder path in error message

= 1.0.3 =

* Changed file path to where variables are stored

= 1.0.2 =

* Support for older versions of PHP that handle object referencing differently

= 1.0.1 =

* Support for older versions of PHP (< 5.4) that do not allow the short array syntax
