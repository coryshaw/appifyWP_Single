# AppifyWP Single
AppifyWP Single is a premium WordPress theme designed for App developers to promote their apps online. 

Visit [appifywp.com](http://www.appifywp.com) for demos, info, and support forums.

If you'd like to contribute, feel free to send a pull request.
 
 
 
 
## Requirements

- Wordpress 3.2 or higher
- Self-hosted version of WordPress (wordpress.org not wordpress.com)
- PHP 5 or higher




## Installation Instructions

Here's a great writeup with screenshots on the installation process:
http://www.buildingiphoneapps.com/2011/02/build-simple-yet-beautiful-web-presence.html

1. Install WordPress
	* If you have a shared hosting plan, there's a good chance they offer a "one-click-install" script. This makes installing WordPress and getting things setup very easy.
	* If the above isn't an option and you'd like to go the manual route, this guide will help: http://codex.wordpress.org/Installing_WordPress
  
2. Login to your WordPress site (wp-admin)
	* yourdomain.com/wp-admin/
  
3. Go to Appearance > Themes > Install Themes > Upload

	* Select the appifyWP.zip from your hardDrive
  
4. Activate AppifyWP

5. Visit your site and follow the Getting Started guide





## Tips & Notes

- If you're adding AppifyWP to an existing site, it's highly recommended that you always backup your WordPress site (files and database) before activating a new theme or making updates.

- All data entered in the AppifyWP Settings page are stored in your local WordPress database, so when you upgrade to future versions of AppifyWP, you can do so non-destructively. 

- Read this post on keeping your WordPress installation secure: http://appifywp.com/keeping-your-wordpress-installation-secure/




## Upgrade Instructions

IMPORTANT UPGRADE NOTE: If you've made any customizations to the theme files (*.php, *.css, *.js), including custom_styles.css, your changes will not be in the upgraded version. You will have to fetch your changes from the old version and bring them into the new version.

ALSO: It's always a good idea to backup your site and theme files before an upgrade, just in case.

- If you are upgrading to a newer version of AppifyWP, you need to delete the old version, then re-install the update as stated in step 3 above.

- All of your AppifyWP settings will carry over to the new version.

- In some cases after upgrading, your custom menu and homepage content will go away and be replaced with the getting started guide. Don't fret, all you have to do is go back to the menus section and select the custom menu you created as your Primary Navigation under "theme locations", click save and you're back in business.



## bbPress Installation Instructions

The included bbpress folder is a child theme for adding a forum to your AppifyWP powered site.

1. Install and activate AppifyWP
2. Install the bbPress WordPress Plugin. Visit yoursite.com/forums and confirm they look like crap. Thats ok, proceed below...
3. Copy the appifyWP_bbpress folder out of the "!Extras" folder and into the themes directory on your server (/wp-content/themes/) Do not put it inside the AppifyWP folder.
4. Go to wp-admin > Appearance > Themes, you should see the AppifyWP bbPress child theme in your list of themes. Activate it.
5. now visit the forums section on your site and verify that the child theme styles have been applied and they no longer look like crap.
