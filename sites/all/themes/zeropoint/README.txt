README.TXT // 0 Point theme for Drupal 6.

Thank you for downloading this theme!


ABOUT THE 0 POINT THEME:
-------------------------------------------------------------------------+
0 Point is an advanced theme, with layout and style configuration options built 
in that you can control through Drupal's UI, to be ideal for a wide range of sites. 

The theme validates XHTML Strict, CSS 2/CSS 3, and it is cross-browser compatible.

Layout features
===============
- 1, 2, or 3 column layout with adaptive width (min. 1040px max.1200px at 1440px 
	disply width) based on "The Jello Mold Piefecta Layout" 
	(http://www.positioniseverything.net/articles/jello.html); 
- 16+1 collapsible block regions; 
- 9 colour styles; 
- Advanced SEO optimization; 
- built-in IE transparent PNG fix; 
- jQuery CSS image preload (optional) 
	(http://www.filamentgroup.com/lab/update_automatically_preload_images_from_css_with_jquery/); 
- Fixed / Variable width sidebars (optional); 
- Round corners for page elements and primary menu (optional); 
- Block icons (optional); 
- Page icons (optional); 
- SuckerFish Drop-down primary links menu (optional); 
- Primary links menu position (center, left, right); 
- Helpful body classes (unique classes for each page, term, website section, 
	browser, etc.). Everything can be controlled via CSS, including each menu
	item (for static menu), how colours and other items will be displayed in
	different browsers, or by terms, sections, etc.; 
- Full breadcrumb; 
- Bi-directional right to left (RTL) theming; 
- Works perfect in Multilanguage installations. 

Advanced theme settings features
===============================
Layout settings
- Style - Choose a colour palette from 9 options: 0 Point (Grey), Sky, Nature, 
  Ivy, Ink, Orange, Sangue, Lime and Themer. More colour options to come.
- Layout width - adaptive, fluid and fixed width;
- Sidebars layout - Fixed width sidebars or variable width sidebars;
- Themed blocks;
- Block icons - Choose between none, 32x32 pixel icons and 48x48 pixels icons;
- Page icons - Choose a layout with or without page icons;
- Menu type - Two-level Static or SuckerFish drop-down menu;
- Menu position - Left, center or right;
- Rounded corners - Option to have rounded corners in all browsers but IE;
- Header image rotator;
- jQuery CSS image preload;
- No-followed login/register links.

General settings
- Mission statement - Display mission statement only on front page or on all pages; 
- Display Breadcrumb; 
- Username - Display "not verified" for unregistered usernames; 
- Search results - Customize what should be displayed on the search results page. 

Node settings
- Author & date - display author's username and/or date posted; 
- Taxonomy terms - How to display (or not) vocabularies and category terms. 

Search engine optimization (SEO) settings
- Page titles - Format the title that displays in the browser's title bar; 
- Meta tags. 

Theme development settings
- Site ID bodyclass - usefull in a multisite environment;
- Fix IE stylesheet limit - useful when you cannot use aggregation (e.g., when 
  developing or using private file downloads), especially for RTL sites;
- Rebuild theme registry on every page.

To know more, read Zero Point handbook (http://drupal.org/node/507792).

 

MODULE SUPPORT
-------------------------------------------------------------------------+
This theme can support virtualy any module.
It has been heavily tested with:
  - AdSense;
  - Advanced Forum;
  - Blockquotes;
  - CAPTCHA;
  - CCK;
  - Fivestar;
  - Gallerix;
  - Gallery Assist;
  - Google_cse;
  - Google_groups;
  - Gmaplocation;
  - i18n;
  - Image;
  - ImageCache;
  - Panels;
  - Pathauto;
  - Lightbox2;
  - Logintoboggan;
  - Print;
  - Simplenews;
  - Thickbox;
  - �BERCART;
  - Views;
  - Wysiwyg (TinyMCE and FCKeditor);
  - Weather;


  
THEME MODIFICATION
-------------------------------------------------------------------------+
If you feel like giving the theme a look of your own, I recommend to play
with /_custom/custom-style.css; please read the comments in this file.



SIDEBARS DIMMENSIONS
-------------------------------------------------------------------------+
The maximum with available for sidebars is as follow:

                                         | left | right | both
-----------------------------------------------------------------
Variable asyimmetrical sidebars (wide)   | 250  |  300  | 160-234
-----------------------------------------------------------------
Fixed asyimmetrical sidebars (wide)      | 160  |  234  | 160-234
-----------------------------------------------------------------
Variable asyimmetrical sidebars (narrow) | 230  |  280  | 140-214
-----------------------------------------------------------------
Fixed asyimmetrical sidebars (narrow)    | 140  |  214  | 140-214
-----------------------------------------------------------------
Equal width sidebars (narrow)            | 155  |  155  | 155-155
-----------------------------------------------------------------

NOTE: Do not exceed the available width (especially with images) or IE will 
not behave so the sidebars may drop. 



USING THE SuckerFish DROP-DOWN MENU
-------------------------------------------------------------------------+
The menu can either be a two-level static menu or a suckerfish drop-down menu.

Out of the box the theme will show the primary and secondary menu. If you select 
(/admin/build/menu/settings) the same menu as primary links then secondary 
links will display the appropriate second level of your navigation hierarchy.

Choose "Suckerfish" to enable support for Suckerfish drop menus. 
NOTE: Go to /admin/build/menu and expand all parents in your primary menu.



INSTALLATION INSTRUCTIONS
-------------------------------------------------------------------------+

1) Place the zeropoint directory into your themes directory (sites/all/themes/zeropoint).

2) Enable the 0 Point theme (/admin/build/themes).

3) You can configure settings for the 0 Point theme at /admin/build/themes/settings/zeropoint. 

If you place the theme in a location other than /sites/all/themes/zeropoint you should 
modify the path in /zeropoint/css/iepngfix.htc and /zeropoint/css/ie.6, accordingly.



UPGRADING to a new version of 0 Point
-------------------------------------------------------------------------+

1) If possible, log on as the user with user ID 1. 

2) Put the site in "Off-line" mode.

3) Go to admin/build/themes/settings/zeropoint and change the theme development
   settings to "rebuild theme registry on every page". 

4) Place the zeropoint directory into your themes directory (sites/all/themes/zeropoint).
   In case you have done customization to 0 Point theme, remember to overwrite theme
   custom-style.css with your custom-style.css file.

5) Configure the new settings for the 0 Point theme at /admin/build/themes/settings/zeropoint. 

6) Clear the Drupal cache and deactivate the "rebuild theme registry on every page"
   option and put the site in "On-line" mode. It is always a good idea to refresh 
   the browser's cache (CTRL+F5).

NOTE: In rare cases, if after upgrading the theme can not be configured you should delete 
all the zeropoint records in the data base.



SITES USING "ZERO POINT" THEME
-------------------------------------------------------------------------+
Various implementations of Zero Point theme can be found here:
http://www.radut.net/
http://www.eucopyright.com/
http://www.301.ro/
http://www.mlnar.ro/
http://www.parmena.com/

If you look for a dark version of "Zero Point", then "Black Hole". Check the theme's
project at http://drupal.org/project/black_hole.


CONTACT
-------------------------------------------------------------------------+
My drupal nick is florian <http://drupal.org/user/35316> � and I can be reached 
at florian@radut.net (http://www.radut.net).

I can also be contacted for paid customizations of 0 Point theme as well as
Drupal consulting, installation and customizations.

