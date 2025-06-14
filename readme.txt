=== Enable Media Replace ===
Contributors: ShortPixel
Donate link: https://www.paypal.me/resizeImage
Tags: replace, replace image, remove background, replace jpg, change media
Requires at least: 4.9.7
Tested up to: 6.7
Requires PHP: 5.6
Stable tag: 4.1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily replace any attached image/file by simply uploading a new file in the Media Library edit view - a real time saver!

== Description ==

**A free, lightweight and easy to use plugin that allows you to seamlessly replace an image or file in your Media Library by uploading a new file in its place. No more deleting, renaming and re-uploading files! Now fully compatible with <a href="https://wordpress.org/plugins/amazon-s3-and-cloudfront/" target="_blank">WP Offload Media!</a>
New beta feature! You can now remove the background of your images for better integration with eCommerce solutions!
Supported by the friendly team that created <a href="https://wordpress.org/plugins/shortpixel-image-optimiser/" target="_blank">ShortPixel</a>  :)**

#### A real timesaver

Don't you find it tedious and complicated to first delete a file and then upload another one with the exact same name every time you want to update an image or other uploaded file in the WordPress media library?

Well, no longer!

Now you can replace any uploaded file in the Edit Media view, where it should be. Replacing Media can be done in two ways:

#### It's simple to replace a file

1. Simply replace the file. This option requires you to upload a file of the same type as the file you want to replace. The attachment name remains the same regardless of what the file you upload is called.
2. Replace the file, use the new file name, and update all links. If you check this option, the old file will be replaced with the name and type of the file you are uploading. All links pointing to the current file will be updated to point to the new file name. Additional options for the folder to put the new file in or the date of the new file are also available on the replace screen.

This plugin is very powerful and a must-have for all major websites built with WordPress. It also offers a preview of the replaced image!

#### New beta feature: You can now remove the background of any image!
Similar to replacing media, you can also remove the background of the images from the Media Library! The background removal feature sends the images to ShortPixel's API, removes the background and sends them back in a preview window. If everything looks good, just replace the image with the one that has the background removed! If the source image is a PNG file, you will get a transparent background, while the other images default to a solid white background. You also have the option to choose a different color with an embedded color picker.
The background removal feature is still in beta and will be free of charge for a reasonable usage.

If you don't want to use the background removal feature, add this line to your theme's functions.php file, or use a plugin like <a href="https://wordpress.org/plugins/code-snippets/" target="_blank">Code Snippets</a>:

```add_filter( 'emr/feature/background', '__return_false' );```

A similar filter, for the remote notification system is:

```add_filter( 'emr/feature/remote_notice', '__return_false' );```

To shorten the wait time before redirecting to the media editing screen, use the following filter and specify the wait time in seconds (0 means that redirection is immediate, but may cause problems in certain configurations):

```add_filter('emr/success/timeout', function () { return 3; });```

#### Show file modification time

There is a shortcode that takes the file modification date and displays it in a post or on a page. The code is:
`[file_modified id=XX format=XXXX]` where the "id" is required and the "format" is optional and defaults to your current WordPress settings for date and time format.

So `[file_modified id=870]` would show the last time the file with ID 870 was updated on your site. To get the ID for a file, check the URL when editing a file in the media library (see screenshot #4)

If you want more control over the format in which the time is shown, you can use the format option. So `[file_modified id=870 format=Y-m-d]` would show the date the file was modified but not the time. The format string uses [the standard PHP date() formatting tags](http://php.net/manual/en/function.date.php).

**Other plugins by [ShortPixel](https://shortpixel.com):**

* [FastPixel Caching](https://wordpress.org/plugins/fastpixel-website-accelerator/) - WP Optimization made easy
* [ShortPixel Image Optimizer](https://wordpress.org/plugins/shortpixel-image-optimiser/) - Image optimization & compression for all the images on your website, including WebP & AVIF delivery
* [ShortPixel Adaptive Images](https://wordpress.org/plugins/shortpixel-adaptive-images/) - On-the-fly image optimization & CDN delivery
* [Resize Image After Upload](https://wordpress.org/plugins/resize-image-after-upload/) - Automatically resize each uploaded image
* [reGenerate Thumbnails Advanced](https://wordpress.org/plugins/regenerate-thumbnails-advanced/) - Easily regenerate thumbnails
* [WP SVG Images](https://wordpress.org/plugins/wp-svg-images/) - Secure upload of SVG files to Media Library
* [ShortPixel Critical CSS](https://wordpress.org/plugins/shortpixel-critical-css/) - Automatically generate above-the-fold CSS for faster loading times and better SEO scores

**Get in touch!**

* Email <a href="https://shortpixel.com/contact" target="_blank">https://shortpixel.com/contact</a>
* Twitter <a href="https://twitter.com/shortpixel" target="_blank">https://twitter.com/shortpixel</a>
* Facebook <a href="https://www.facebook.com/ShortPixel" target="_blank">https://www.facebook.com/ShortPixel</a>
* LinkedIn <a href="https://www.linkedin.com/company/shortpixel" target="_blank">https://www.linkedin.com/company/shortpixel</a>

== Frequently Asked Questions ==

= Where do I report security bugs found in this plugin? =
Please report security bugs found in the source code of the Enable Media Replace plugin through the [Patchstack Vulnerability Disclosure Program](https://patchstack.com/database/vdp/enable-media-replace). The Patchstack team will assist you with verification, CVE assignment, and notify the developers of this plugin.

== Changelog ==

= 9999999999999999 =

Release date: May 7, 2025
* Tweak: Zmiany wprowadzone pod wykorzystanie na witrynie polsl

= 4.1.5 =

Release date: December 14, 2023
* Tweak: Added a filter to disable the remote notification system added in version 4.1.0;
* Fix: A potential "Reflected Cross-Site Scripting" vulnerability has been patched, responsibly disclosed by the Wordfence team.

= 4.1.4 =

Release date: September 22, 2023
* Fix: The latest security fix was breaking the replacements made with Beaver Builder (and possibly other builders);

= 4.1.3 =

Release date: September 14, 2023
* Fix: A possible PHP Object Injection was patched, which could be exploited under certain conditions;
* Fix: ShortPixel Image Optimizer handles offloading when both plugins are used with WP Offload Media.

= 4.1.2 =

Release date: April 24, 2023
* Tweak: Reduced the wait time before redirecting to the media edit page to half (5s);
* Fix: If an item is not offloaded, no attempt is made to update its data;
* Fix: Removed some double spaces from the plugin strings (thanks to @Presskopp).

= 4.1.1 =

Release date: April 13, 2023
* Tweak: Added a filter to reduce or remove the wait time before redirecting to the media edit page;
* Fix: Replacement works again on multisite setups where the plugin reported the path outside the uploads folder;
* Fix: In some cases, replacement didn't work when images were offloaded;
* Fix: Some translation strings were corrected (thanks @alexclassroom !).

= 4.1.0 =

Release date: March 28, 2023
* New: Integration with WP Offload Media; items that are offloaded can now be replaced correctly;
* New: Switch to a Replacer module that improves the code and makes it more robust;
* New: Adding an intermediate confirmation page to solve possible redirection issues;
* Tweak: The new image can now be dragged and dropped directly into the preview area;
* Tweak: Improved the display of both the original image and the new image on the replacement screen;
* Tweak: Improved the notification system and added a mechanism for remote notifications;
* Tweak: Updated the texts and banners to look better on the replacement screen;
* Fix: Added documentation in the readme to disable the background removal feature (kudos to @jstask82);
* Fix: Increased the security of the plugin by adding checks for various AJAX calls;

= 4.0.3 =

Release date: February 21, 2023
* Fix: background removal notification is no longer displayed when this feature is disabled with the filter;
* Compat: improved compatibility with PHP 8.1 and 8.2
* Tweak: updated the banners on the replace page.

= 4.0.2 =

Release date: January 13, 2023
* Fix: patched a security vulnerability that could allow loading an unauthorized file during the replace operation;
* Fix: finish the replace operation even if the tmp file cannot be removed due to file permissions issues;
* Fix: when replacing a scaled file with a non-scaled file, some links were broken;
* Fix: under certain conditions a PHP warning about an undefined array key was displayed.

= 4.0.1 =

Release date: November 23, 2022
* Fix: files are now replaced correctly in environments running on Windows/IIC servers;
* Fix: the mime type is now correctly detected, so that a warning is no longer displayed when replacing PDFs;
* Fix: the plugin no longer tries to load its code for post IDs that are not attachments, like comments;
* Fix: some warnings were displayed when using the Members plugin;
* Compat: added integration for SiteOrigin Page Builder to correctly replace files in its widgets;
* Compat: added `emr_after_remove_current` action hook (thanks @luistar15);
* Tweak: added filter to disable the background replace functionality.

= 4.0.0 =

Release date: September 5th, 2022
* New: added the functionality to remove the background for any image;
* Fix: images added to the new block-style widgets were not replaced;
* Fix: the original file was not removed after replacement if a multilingual plugin was installed;
* Fix: additional checks were added to the new upload path for replacements, to avoid possible vulnerabilities, kudos to @soulseekah;
* Fix: an object cache flush was added after an image was replaced to prevent the content from still being cached in the post editor;
* Fix: if there was no `_wp_attached_file` in the postmeta table a fatal error was thrown;
* Fix: the time zone was not displayed correctly on the Replace Media screen;
* Fix: added some additional checks for file path to avoid `open_basedir` restrictions;
* Fix: added titles for the Replace Media and Remove Background screens;
* Fix: various small CSS/JS fixes, wording updates and code cleanups;

= 3.6.3 =

Release date: November 25th, 2021
* Fix: the shortcode `file-modified` works again for non-privileged visitors as well;
* Compat: if other plugins don't properly use WP Hooks, don't return errors;
* Tweak: updated banners list from the EMR screen.

= 3.6.2 =

Release date: November 8th, 2021
* Fix: there was an issue in file.php with checking mime-type, resulting in weird mime-type values in certain cases (thanks @dougaxe1 for the PR);
* Fix: if target mime type returns empty, don't store that;
* Tweak: removed old notification about SPIO.

= 3.6.1 =

Release date: October 27th, 2021
* Fix: there was a broken image in one of the plugin notices;
* Fix: added a check for the function `mime_content_type`, which doesn't seem to always be available on various hosts;
* Fix: the plugin checks if the current user has rights to install/activate plugins and only then displays the 1-click installers and also a filter is available now;

= 3.6.0 =

Release date: October 11th, 2021
* New: Constant EMR_CAPABILITY can define extra user roles to allow and deny replacements;
* New: Replacing an usual image with an SVG file will just replace all thumbnails by the main file;
* New: Also replaces caption when set in Exif data (when replacing with updating all links);
* Tweak: Added Now and Original options to Custom Date for usability;
* Tweak: changes/updates to the banners from the EMR screen;
* Fix: EMR now respects edit_other_posts permissions using default permissions;
* Fix: EMR with ALLOW_UNFILTERED_UPLOADS enabled (and allowed role) will not limit non-allowed uploads;
* Fix: some missing and wrong text-domains are now corrected (thanks @alexclassroom);
* Fix: a missing dot in the plugin description was preventing the transaltions to properly work;
* Fix: the plugin can now be uninstalled/deleted on PHP 8.

= 3.5.0 =

Release date: October 29th 2020
* New: EMR now replaces across all meta tables;
* New: the plugin remembers last used settings;
* New: integration with the LiteSpeed cache plugin and webserver;
* Tweak: manual Logging will no longer work if user is not logged as administrator;
* Tweak: added `post_id` to `enable-media-replace-upload-done` action args, props to @Jan Stiegler;
* Fix: fully works now with Elementor;
* Fix: the issue for WP-Bakery and URL-Encoded links is now fixed;
* Fix: the plugin should now work with images added through Visual Composer;
* Fix: EMR now uses queries instead of WordPress functions, correctly handling slashes and JSON formats;
* Fix: `-scaled` images generated by WordPress are now removed when replacing an image;

= 3.4.2 =

Release date: August 17th 2020
* New - Also display files size in the replacement windows;
* Fix - Replacing image with pdf file would cause noticesi;
* Fix - Compensation for faulty WordPress installation that return empty error string on wp_upload_dir and falsely return relative paths and urls on WP core functions;
* Fix - When choosing 'replace file and update names' and then uploading a file with identical name as source, it would postfix the duplicate name. This is no longer the case;
* Fix - Wording clarification for the situation when the filename is changed, which will lead to broken links from external sites;
* Fix - Added hard paths to require_once satements in order to prevent WP-CLI errrors;
* Fix - If source image doesn't exist or in error state, replacement would be prevented by Javascript issue.

= 3.4.1 =

Release date: June 18th 2020
* Fix - PHP Error when settings permissions failed.

= 3.4.0 =

Release date: June 9th 2020
* New - In edit media screen EMR notes user who replaced file if this was not uploader;
* New - Added Drag and Drop area for files;
* New - When replacing with new file name, now also possible to update upload path;
* Fix - Various minor CSS tweaks and fixes;
* Update of Underlying libraries

= 3.3.12 =

Release date: 27th April 2020
* Fixed - When trying to upload over-limit file would show too many error messages;
* Language – 2 new strings added, 0 updated, 0 fuzzied, and 0 obsoleted.

= 3.3.11 =

Release date: 10th March 2020
* Fix the crashing of certain frontend builders when the plugin is active.

= 3.3.10 =

Release date: 23rd February 2020
* Fix issue with JSON encoding which was interfering with Advanced Custom Fields and other plugins

= 3.3.9 =

Release date: 23rd February 2020
* Fix issue with JSON encoded strings
* Language – 0 new strings added, 2 updated, 0 fuzzied, and 0 obsoleted

Release date: 19th February 2020
* Fix issue with search/replacing non-image attachments and query
* Language – 0 new strings added, 2 updated, 0 fuzzied, and 0 obsoleted

= 3.3.8 =

Release date: 18th February 2020
* Fixes for WP 5.3+ -scaled images system. Will now replace those as well.
* Updating and replacing images and thumbnails should now work for serialized (and such) metadata.
  - For Beaver Builder
* Add extra warning if mimetype is not allowed by WordPress for upload
* Put Javascript version in wp_register_script
* Hidden double 'replace media'
* Replace Image label to Replace Media
* Removed constant S3_UPLOADS_AUTOENABLE
* Improved detection of SVG image sizes
* Fixed - Logger doesn't call wp_upload_dir when not debugging
* Extra - Javascript tries to resume after external errors.
* Language – 0 new strings added, 2 updated, 0 fuzzied, and 0 obsoleted

= 3.3.7 =

Release date: 13th November 2019
* call the hook enable-media-replace-upload-done on both modes
* fix JSON compatibility for hostings that don't have JSON module activated
* Language – 0 new strings added, 0 updated, 0 fuzzied, and 0 obsoleted

= 3.3.6 =

Release date: 5th September 2019
* fix JSON compatibility for hostings that don't have JSON module activated

= 3.3.5 =

Release date: 25th July 2019
* fix Replace button on the MediaLibrary image details popup

= 3.3.4 =

Release date: 23rd July 2019
* compatibility fixes for WP version 4.8 and below
* cache killer

= 3.3.3 =

Release date: 19th July 2019
* Fix error "using $this when not in object context" on some PHP versions

= 3.3.2 =

Release date: 17th July 2019
* Check if medium size !> 400px, display that one, otherwise smallest.
* Fixed: Links not updated when using Advanced Custom Fields
* Fixed: Fails silently when file is too big for upload
* When source file does not exist, show placeholder instead of failed image load
* Fixed: Fatal error when replacing images
* Fixed: Not the right time zone on replace
* Fixed Beaver Builder incompatibility by not allowing replace with rename.
* Fixed: Cannot replace non default Wordpress file types, even those allowed to upload [ Media Library Assistant compat ]
* Fixed: error when trying to remove a file that doesn't exist - because the files are actually on another server

= 3.3.1 =

Release date: 18th June 2019
* Fix error class not found on WPEngine

= 3.3.0 =
* When replacing an image and changing the name, Search / Replace is now also done on the meta_value of postmeta.
* Replace PDF thumbnails too
* Copy title from EXIF
* RTL View incorporated into the CSS
* ‘wp_handle_upload’ filter should be treated as such (and not as action)
* Use wp_attached_file instead of the GUID
* Fix: replace missing file
* Fix: aphostrophe breaking the upload
* Fix: broken "before" image
* Fix: update properly the date
* Fix: errors for non-image items in Media Library
* Fix: empty admin menu item created
* Refactored all the code

= 3.2.9 =
* properly replace thumbnails names in the content when the replaced image has a different aspect ratio, thus the new thumbnails have a different height in the name.

= 3.2.8 =
* fix for failures in link updating when replacing file because of addslashes - use prepared query instead
* replace basename with wp_basename because basename doesn't work well with UTF8

= 3.2.7 =
* Add minimum required php version to run the plugin.
* Security: Prevent direct access to php files.
* Security: Prevent direct access to directories.
* Security: Escape translation strings using `esc_attr__()` and `esc_html__()` functions.
* Fix RTL issues.

= 3.2.6 =
* no more 404 error if no image was selected when trying to replace it
* added preview so you can check the image being replaced and also the image that's being replaced with
* .dat files can be replaced (functionality accidentally removed in the previous version)
* added compatibility with S3 upload plugin
* when an image is replaced the date is also updated

= 3.2.5 =
* remove the leftover setcookie and the plugins recommendations.

= 3.2.4 =
* Fix PDF thumbnails not replaced when replacing a PDF
* Fix not replacing text files with .dat extension

= 3.2.3 =
* disable ShortPixel recommendation on secondary sites of a multisite install when it was network activated.

= 3.2.2 =
* Fixed compatibility with ShortPixel and Resize Image After Upload
* Added ShortPixel links and images, fixed the problem of ShortPixel recommendation not dismissing.

= 3.2.1 =
* Bugfix, typo made metadata changes (thanks GitHub user icecandy!)
* Removed Shortpixel links and images

= 3.2 =
* Tested with WP 4.9.4
* Added Shortpixel link in replace media screen

= 3.1.1 =
* Fixed bug introduced in an earlier version, preventing the updating of URLs on pages/posts if the link did not contain the domain name

= 3.1 =
* Got rid of some pesky old code, and added some better filtering options, thanks to GitHub users speerface, aaemnnosttv, and ururk
* Brand new, shiny code to replace other image sizes in embedded media, thanks to GitHub user ianmjones!
* Tested with WP 4.8

= 3.0.6 =
* Tested with WP 4.7.2
* New PT translations (thanks Pedro Mendonca! https://github.com/mansj/enable-media-replace/commit/b6e63b9a8a3ae46b3a6664bd5bbf19b2beaf9d3f)

= 3.0.5 =
* Tested with WP 4.6.1

= 3.0.4 =
* Fixed typo in .pt translations (https://github.com/mansj/enable-media-replace/pull/18)
* Fixed better error handling in modification date functions (https://github.com/mansj/enable-media-replace/pull/16)
* Tested with WP 4.4.1

= 3.0.3 =
* Scrapped old method of detecting media screen, button to replace media will now show up in more places, yay!
* Made sure the call to get_attached_file() no longer skips filters, in response to several users wishes.
* Suppressed error messages on chmod()
* Added Japanese translation (Thank you, chacomv!)

= 3.0.2 =
* Cleaned up language files
* Added Portuguese translation (Thanks pedro-mendonca!)
* Tested with WP 4.1
* Added missing Swedish translation strings

= 3.0.1 =
* Tiny fix to re-insert the EMR link in the media list view.

= 3.0 =
* Updated for WordPress 4.0
* Now inheriting permissions of the replaced files,  [Thank you Fiwad](https://github.com/fiwad)

= 2.9.7RC1 =
* Moved localization files into their own directory. [Thank you Michael](https://github.com/michael-cannon)
* Moved screenshots into their own directory. [Thank you Michael](https://github.com/michael-cannon)

= 2.9.6 =
* Added fix by Grant K Norwood to address a possible security problem in SQL statements. Thanks Grant!
* Created GitHub repo for this plugin, please feel free to contribute at github.com/mansj/enable-media-replace

= 2.9.5 =
* Bug fix for the short code displaying the modification date of a file
* Updated all database queries in preparation for WP 3.9

= 2.9.4 =
* Bug fix for timezone changes in WordPress
* Minor UI change to inform the user about what actually happens when replacing an image and using a new file name

= 2.9.3 =
* Added call to update_attached_file() which should purge changed files for various CDN and cache plugs. Thanks Dylan Barlett for the suggestion! (http://wordpress.org/support/topic/compatibility-with-w3-total-cache)
* Suppressed possible error in new hook added in 2.9.2

= 2.9.2 =
* Small bug fix
* Added hook for developers to enable purging possible CDN when updating files - thanks rubious for the suggestion!

= 2.9.1 =
* Added Brazilian Portuguese translation, thanks Roger Nobrega!
* Added filter hook for file name creation, thanks to Jonas Lundman for the code!
* Added modification date to the edit attachment screen, thanks to Jonas Lundman for the code!
* Enhanced the deletion method for old file/image thumbnails to never give unnecessary error messages and more accurately delete orphaned thumbs

= 2.9 =
* Added Portuguese translation, thanks Bruno Miguel Bras Silva!
* New edit link from media library
* After uploading, the plugin now takes you back to edit screen instead of library

= 2.8.2 =
* Made another change to the discovery of media context which will hopefully fix a bug in certain cases. Thanks to "Joolee" at the WordPress.org forums!
* Added a new, supposedly better Russian translation from "Vlad".

= 2.8.1 =
* Fixed a small bug which could create error messages on some systems when deleting old image files.

= 2.8 =
* New and safer method for deleting thumbnails when a new image file is uploaded.
* New translations for simplified Chinese (thanks Tunghsiao Liu) and Italian (grazie Marco Chiesi)
* Added method for detecting upload screen to ensure backward compatibility with versions pre 3.5

= 2.7 =
* A couple of changes made to ensure compatibility with WordPress 3.5. Thanks to Elizabeth Powell for the fixes!

= 2.6 =
* New and improved validation of uploaded files, now using WP's own functions for checking file type and extension. Thanks again to my old friend Ulf "Årsta" Härnhammar for keeping us all on our toes! :) This should also hopefully fix the problems people have been having with their installations claiming that perfectly good PDF files are not allowed file types.

= 2.5.2 =
* The "more reliable way" of determining MIME types turned out to be less reliable. Go figure. There seems to be no perfect way of performing a reliable check for MIME-types on an uploaded file that is also truly portable. I have now made checks for the availability of mime_content_type() before using it, using the old method as a fall-back. It is far from beautiful, so if anybody has a better way of doing it, please contact me!

= 2.5.1 =
* Bug fix - there is now a more reliable way of determining file type on your upload so you can upload PDF files without seeing that pesky "File type does not meet security guidelines" message.
* New translation to Danish - thanks to Michael Bering Petersen!

= 2.5 =
* Tested with WordPress 3.2.1
* New translation to German - thanks to Martin Lettner!
* New translation to French - thanks to François Collette!

= 2.4.1 =
* Bug fix for WordPress 3.1 RC. Now properly tested and should be working with 3.1 whenever it finally comes out. :)

= 2.4 =
* Bug fixes, security fixes. Thanks to my old pal Ulf "&Aring;rsta" H&auml;rnhammar for pointing them out!
* New method for uploading avoids going around WP, for greater security.

= 2.3 =
* Lots of code trimmed and enhanced, thanks to Ben ter Stal! Now working properly with Windows systems, better security, optimized loading, and much more.
* Added Dutch translation by Ben ter Stal.

= 2.2 =
* Bug fix, fixed typo in popup.php, thanks to Bill Dennen and others for pointing this out!

= 2.1 =
* New shortcode - display file modification date on your site (see description for more info)
* A couple of bug fixes for final release of 3.0 - Thanks to Jim Isaacs for pointing them out!

= 2.0.1 =
* Added support for SSL admin

= 2.0 =
* Replaced popup with inline navigation when replacing media
* Added instructions in admin link under Media

= 1.4.1 =
* Tested with WordPress 3.0 beta 2

= 1.4 =
* Removed short tags for better compatibility.

= 1.3 =
* Added support for wp_config setting "FORCE_SSL_ADMIN"

= 1.2 =
* Added Russian translation, thanks to Fat Cower.

= 1.1 =
* Minor bugfix, now working with IE8 too!

= 1.0 =
* First stable version of plugin.

== Installation ==

Quick and easy installation:

1. Upload the folder `enable-media-replace` to your plugin directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Done!

== Frequently Asked Questions ==

= What does this plugin actually do? =

This plugin makes it easy to update/replace files that have been uploaded to the WordPress Media Library.

= How does it work? =

A new option will be available in the Edit Media view, called "Replace Media". This is where you can upload a new file to replace the old one.

= I replaced a file, but it didn't change! =

There are two main reasons this would happen.

First, make sure you are not viewing a cached version of the file, especially if you replaced an image. Press "Refresh" in your browser to make sure.

Second, if the file really looks unchanged, make sure WordPress has write permissions to the files in your uploads folder. If you have ever moved your WP installation (maybe when you moved it to a new server), the permissions on your uploaded files are commonly reset so that WordPress no longer has permissions to change the files. If you don't know how to do this, contact your web server operator.

== Screenshots ==

1. The new link in the media library.
2. The replace media-button as seen in the "Edit media" view.
3. The upload options.
4. Get the file ID in the edit file URL

== Wishlist / Coming attractions ==

Do you have suggestions? Feel free to contact ShortPixel <a href="https://shortpixel.com/contact" target="_blank">here</a>


== Contribute ==

Want to help us improve the plugin feel free to submit PRs via GitHub <a href="https://github.com/short-pixel-optimizer/enable-media-replace" target="_blank">here</a>.
