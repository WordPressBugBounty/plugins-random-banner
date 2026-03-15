=== Random Banner ===
Contributors: vinoth06, buffercode
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7DHAEMST475BY
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: banner, advertisement, banner ads, random banner, ads campaign
Requires at least: 5.3
Tested up to: 6.9.4
Stable tag: 4.2.12
Requires PHP: 7.0

Display random image, SWF, or script ads across your WordPress site with this powerful, customizable, and user-friendly Random Banner plugin.

== Description ==
Random Banner is a flexible WordPress plugin that enables you to display various types of banner ads (Image, SWF, or Script) randomly throughout your website. Whether you're running ad campaigns or promoting content, this plugin offers powerful placement and control options.

= Features =

* Supports banner types: Image, SWF, and Script.
* Assign individual links to Image and SWF banners.
* Display banners randomly from the list uploaded on the settings page.
* Use shortcodes or widgets to place banners anywhere.
* Set custom titles via widget settings.
* Organize banners using categories.
* Display banners as sliders via widgets or shortcodes.
* Enable/disable banners on individual posts.
* Global enable/disable settings under Settings → Others.
* Option to hide banners for logged-in users.
* Show banner ads as popups (Settings → Popup).
* Filter ads by category when assigning banner locations.

= Scripts and Styles used =

* Bootstrap
* SweetAlert
* Moment.js
* Owl Carousel

= Demo =
[View Demo](https://www.randombanners.com)

= Free Vs Pro =
[Compare Free vs Pro Versions](https://buffercode.com/plugin/random-banner-pro#free_vs_pro)

== Shortcode Usage ==

= In PHP =
`
<?php echo do_shortcode('[bc_random_banner]'); ?>
`
= Inside Posts or Pages =
`
[bc_random_banner]
`
= Available Shortcode Attributes =

`[bc_random_banner category=category_name slider=no autoplay=true delay=3000 loop=false dots=false]`

* category: default or any custom category slug.
* slider: yes / no
* autoplay: true / false
* delay: e.g., 3000 (milliseconds)
* loop: true / false
* dots: true / false

For Pro Version  : [Random Banner Pro Support](https://buffercode.com/plugin/random-banner-pro)

== Installation ==

1. Upload the "random-banner" directory to your `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Navigate to "Random Banner" in your dashboard.
4. Upload banner images, SWFs, or scripts and assign links.
5. Go to Appearance → Widgets and drag the Random Banner widget to your desired sidebar or area.
6. Customize the title and save.

== Frequently Asked Questions ==

= Where can I find detailed documentation? =
Visit: [Random Banner FAQ](https://buffercode.com/plugin/random-banner-pro#faq)

= I’m using a version below 1.3. How do I update? =
Yes, you can update. Please ensure you back up your existing banners before upgrading.

= What if I forgot to back up my old banners? =
Images remain in your media library. However, click URLs may need to be re-added manually. It's recommended to back up link data.

= What happens after purchasing the Pro version? =
You’ll receive full access to premium features and updates. Login details will be sent after successful payment.

= I’ve already purchased. How do I access newer versions? =
Log in to your plugin page at https://buffercode.com, complete any pending payments, and download updates using your existing login.

= How do I verify my Pro version license? =
You can verify your license on the support page using your Activation Code.

More info : [Random Banner Support](https://buffercode.com/plugin/random-banner-pro)

== Changelog ==

= v 4.2.12 (20260315) =
* Name Change

= v 4.2.11 (20250406) =
* Documentation update

= v 4.2.10 (20250227) =
* Code Refactor.

See changelog.txt in the plugin directory for full changelog history.

== Screenshots ==
1. Add New Banner
2. Widget Page
3. Admin Category Page
4. Insert ads inside the Post
5. Admin Popup Settings
6. Other settings
7. Disable banner for particular page
8. Banner view on frontend pages
