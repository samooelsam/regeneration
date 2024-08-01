=== Divi Table Of Contents Maker ===
Tags: WordPress,Plugins,Divi
Requires at least: 5.4
Tested up to: 6.2
Requires PHP: 5.6
Stable tag: 5.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

If you are a blogger, content marketer, SEO professional, or anyone else who creates content and is using the Divi Theme/Builder, then this is the module for you! We know how important it is to give your readers easy navigation and readability and help improve your blog SEO. So we created this table of contents module for you!

== Description ==
Improve your blog post navigation, readability, and SEO with the first and only table of contents module for Divi! Includes hundreds of customization settings and design styling options.

== Installation ==
**1:** Go to your WordPress admin area to the Plugins » Add New page.
**2:** This will reveal the plugin upload form. Here you need to click on the ‘Choose File’ button and select the plugin file you downloaded earlier to your computer.
**3:** After you have selected the file, click on the ‘Install Now’ button. WordPress will now upload the plugin file from your computer and
install it for you. You will see a success message after the installation is finished.
**4:** Once installed, you need to click on the Activate Plugin link to start using the plugin.

== Frequently Asked Questions ==

= How does this plugin work? =

The plugin adds a new custom Divi module to the existing Divi Visual Builder. Simply go to your Divi Builder, add a new module, and select **Divi Table Of Contents Maker** to get started. The module automatically adds links to the headings in the post content based on the settings you choose.

= How to exclude headings from TOC? =

To keep unwanted headings such as the page title, headings in the sidebar, headings in the footer, etc. out of the table of contents, you can simply exclude other headings with our built-in feature.

**1: Enable the Setting In The Module**
The first step is to enable the Exclude Headings By Class setting in the module in the Content Settings toggle.
**2: Add Class To Other Elements**
The second step is to add the CSS class pac-dtocm-exclude to any section, row, or module that you want to exclude the headings from being added to the table of contents.

All Divi modules, rows, and sections have an input field for custom CSS Classes. To locate this, open the element and go to the Advanced tab, open the CSS ID & Classes toggle, and add the class pac-dtocm-exclude to the CSS class input field.

Now any headings that are within that module, row, or section with the CSS class will not be included in the table of contents.

= Can two TOC modules be used on the same page? =

Due to the nature of a table of contents and the code needed to make it work, it is not possible to have more than one Table Of Contents Maker module on the same page/post/template.

== Screenshots ==
1. The first and only Divi table of contents module on the market
2. Hundreds of functionality and design settings
3. Our products come with thorough and helpful documentation

== Changelog ==
= 1.3.1 =
* 06-02-2024
* Improved Code To Not Show Headings That Are Located Within Sections, Rows, Or Modules With The Visibility Hidden
* Improved Support For Finding Headings In Content Created With WordPress Patterns
* Fixed PHP Depreciated Notices
* Fixed An Issue With The TOC Hidden When Using A Fullwidth Post Content Module
* Resolved A Conflict With The Divi FilterGrid Plugin Causing Links Not To Show 

= 1.3.0 =
* 04-24-2024
* Added Setting To Include Content By Class Instead Of The Existing Exclude Content By class Option
* Added New Heading Level Marker Option For Decimal Numbers
* Added Settings To Hide The Entire Header
* Added Setting To Limit The Content Height With Options For Auto height Or Fixed Height With Scrollbar
* Added Decorative Icon
* Added Setting For Placing The Icon On The Left Or Right
* Added Setting To Show Or Hide The Icon (Either Decorative Or Functional)
* Added The Ability To Show The Icon Even When Not Collapsible
* Added Ability To Set Default State To Collapse To Icon Only
* Renamed The Included Headings Setting To Included Heading Levels
* Improved The Code To Exclude Headings From Sections, Rows, Or Modules That Have Their Visibility Hidden
* Improved The Code To Override The Default Top Padding Value For List Items
* Improved The Code To Keep The Heading Active Until The Next Heading Reached
* Improved The Code When Using Specialty Sections
* Improved The Code To Always Exclude The Email Optin Module Success Message
* Improved The Code To Work When Things Like 4×4 Used In The Heading Text
* Fixed Conflict With Divi FilterGrid
* Fixed An Issue With Sticky Settings And Cache
* Fixed An Issue Excluding Headings From WP Recipe Maker
* Fixed An Issue With Right Margin In Header
* Fixed An Issue With The TOC Not Opening On Mobile
* Fixed An Issue With The TOC Content Scrollbar not Showing On Mobile
* Fixed Some ARIA Accessibility Warnings

= 1.2.7 =
* 06-06-2023
* Added Support For HTML In Header Text
* Updated Support For Showing Content Headings That Are Modified With HTML Tags
* Added Support For Multiple Modules On Same Page
* Add A Notice Instead Of Error For Incompatible Older Versions Of Divi Below 4.13

= 1.2.6 =
* 05-24-2023
* Added Content Heading Underline Thickness Setting
* Added Active Content Heading Underline Thickness Setting
* Improved The Code For Accessibility By Adding The Roles Attributes Within Tags
* Fixed An Issue With Dynamic JavaScript Libraries Sticky Scroll Position
* Fixed An Issue With The Last Two Links Being Highlighted
* Fixed Issue With The WooCommerce Terms And Conditions Checkout Text When The Page Contains A TOC Module

= 1.2.5 =
* 03-31-2023
* Update Content Max Height Range

= 1.2.4 =
* 03-14-2023
* Added Compatibility Support For Global TOC Module With Recent Divi Updates
* Updated TOC Spacing (Padding Left)
* Updated Code to Make TOC Compatible with Blog Extra Module

= 1.2.3 =
* 02-17-2023
* Fixed Undefined PHP Variable Warnings

= 1.2.2 =
* 02-03-2023
* Improved Code Related To Data Href
* Active Links Stays Highlighted During Content
* Add New Setting to Show Alternative Content If Module Hidden

= 1.2.1 =
* 01-18-2023
* Improved SEO By Adding Href Tag In  Tag
* Improved Code Related To Scroll For Hidden Heading
* Improved Code Related To Assigning IDs To Headings

= 1.2.0 =
* 01-10-2023
* Added Input Field For Keyword Highlight Field Custom Text
* Added Design Settings For Headings
* Added Design Settings For Active Link
* Added Setting To Place Marker Position Inside Or Outside The Heading Design
* Improved Numbering Logic For Decimal Markers To Inherit Parent Level
* Improved Code Related To Highlight Active Link
* Improved Code Related To Assigning IDs To Headings
* Improved Code To Allow Headings To Be Shown Even If They are Out of Order In The Content
* Fixed Issue That Global Colors Not Recognizing
* Fixed Headings That Contain Superscripts In The Content
* Updated Some Toggle and Setting Terminology

= 1.1.4 =
* 11-30-2022
* Added New Setting To Set The Content Heading Anchor Top Offset Distance

= 1.1.3 =
* 11-23-2022
* Fixed The Module Not Showing When WordPress Builder Used On Posts With Theme Builder Template
* Removed Empty Heading From TOC

= 1.1.2 =
* 11-10-2022
* Removed warnings about empty heading tags
* Added a new setting to adjust the space between each of the content headings

= 1.1.1 =
* 11-01-2022
* Fix Module Hiding When Added In A Single Post When Also Using A Theme Builder Template

= 1.1.0 =
* 10-27-2022
* Added Responsive Options To Automatically Collapse When Sticky
* Added Option To Collapse To Icon Only
* Added Keyword Highlight Feature With Many Related Design Settings
* Added Setting To Show Or Hide Active Link Highlighting
* Fixed Error When Using Module As Global
* Fixed Error When Adding Module Into Post
* Fixed Scrolling Issue Caused By Rankmath Integration Adding  Tags
* Fixed CSS Issue

= 1.0.3 =
* 10-11-2022
* Fixed Save Not Working When Used Directly On Posts

= 1.0.2 =
* 10-06-2022
* Added Auto Collapse When Sticky On Mobile Setting
* Added Support For Rankmath SEO
* Added Content Max-Height Setting
* Added Scrollbar Width Setting
* Added Scrollbar Color Setting

= 1.0.1 =
* 09-29-2022
* Added Scroll Speed Setting
* Fixed Conflicts Caused By Jetpack Lazy Loading
* Fixed Links Not Going To The Correct Location
* Improved Table Of Contents Structure

= 1.0.0 =
* 9-21-2022
* Initial Release

== Upgrade Notice ==
= 1.2.5 =
* Now You Can Set Update Content Max Height Range Upto 5000px