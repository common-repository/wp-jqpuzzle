=== WP-jqPuzzle ===
Contributors: jtoth
Donate link: http://www.relijoc.ro/descarca/wp-jqpuzzle
Tags: images, jquery, puzzle
Requires at least: 2.7
Tested up to: 2.9.1
Stable tag: 1.1

Create sliding puzzles for your web page. WP-jqPuzzle will automatically turn your images into a full-blown sliding puzzle.


== Description ==

Create sliding puzzles for your web page. WP-jqPuzzle will automatically turn your images into a full-blown sliding puzzle.
To use it, just put [jqpuzzle img=http://www.mysite.com/mypicture.jpg] in a post, updating the path for the image, of course. 
Other options are available. This WordPress plugin is based on the [jqPuzzle script](http://www.2meter3.de/jqPuzzle/ "jqPuzzle script") by Ralf Stoltze.

= Localizations =
* Thanks to me for romanian language file
* Thanks to me for german language file
* Thanks to [tolingo.de](http://www.tolingo.de/ "tolingo.de") for spanish language file


== Installation ==

= Requirements =
* WordPress version 2.7 and later (tested at 2.9.1)

= Installation =
1. Download the plugin and unpack the download-package
2. Upload `wp-jqpuzzle` to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Place [jqpuzzle img=http://www.mysite.com/mypicture.jpg] in your templates, see more options at Usage

= Usage =

With the right using of shortcodes you have many options:
[jqpuzzle] shows default image with default values
[jqpuzzle img=http://.............] shows your image
[jqpuzzle img=http://............. cols=3 rows=3] shows your image an your numbers of cols and rows
[jqpuzzle img=http://............. mix='Mix!' image='Image' message='Hey! You are cool, man! You did the puzzle in || clicks, in just || seconds!'] shows your image with settings in your languages, only when localisation not supported
You must know that the two vertical lines || mean the number of clicks or of the seconds.

Here are the default values:
extract(shortcode_atts(array(
'img'=>'http://www.mysite.com/.../plugins/wp-jqpuzzle/img/default-picture.jpg',
'cols'=>4,'rows'=>4,'mix'=>'Mix!','image'=>'Image','numbers'=>'Numbers',
'reallymix'=>'Really mix?','moves'=>'moves','seconds'=>'seconds',
'message'=>'Great! You resolved the puzzle with || moves, in || seconds.'), 
$atts));

For a live demo go on [this](http://www.relijoc.ro/testplugin/?p=3/ "Demo jqPuzzle") page.

== Frequently Asked Questions ==

= What image sizes do you recommend? =
It depends of your theme. I recommended image sizes between 350 and 600 pixels.

= Does the plugin only support .jpg files? =
No, you can use .png and .gif images too. Just change the image url to the appropriate extension.

= Why isn't this or that implemented to improve the plugin interface? =
If you have any suggestions please let me know via e-mail.

= Where can I get more information? =
Please visit the [plugin page](http://www.relijoc.ro/descarca/wp-jqpuzzle/ "www.relijoc.ro") for the latest information. You can visit the [jqPuzzle script website](http://www.2meter3.de/jqPuzzle/ "jqPuzzle") too.

= I love this plugin! How can I show the developer how much I appreciate his work? =
Please visit the [plugin page](http://www.relijoc.ro/descarca/wp-jqpuzzle/ "www.relijoc.ro") and let me know your care and leave a comment or use the donate form. The donations are not for me, i will give it to [Caritas Lipova](http://www.caritas-lipova.ro/ "Caritas Lipova").


== Screenshots ==

1. Image wait for mixing
2. Image mixing
3. Image as sliding-puzzle
4. Done good job: Winner-message


== Other Notes ==

= Acknowledgements/Credits =
* Thanks to [Ralf Stoltze](http://www.2meter3.de/jqPuzzle/ "Ralf Stoltze") for the script and the very useful tips
* Thanks for the help at adding shortcode options to [Radu Capan](http://www.cnet.ro/ "Radu Capan")
* Thanks to [Frank Bueltge](http://www.bueltge.de/ "Frank Bueltge") for the useful tips

= Licence =
This plugin is free for everyone! Since it's released under the GPL, you can use it free of charge on your personal or commercial blog. 
If you enjoy this plugin, you can thank me and leave a [small donation](http://www.relijoc.ro/descarca/wp-jqpuzzle/ "Donate") for the time I've spent writing this plugin. 
The donations are not for me, i will give it to [Caritas Lipova](http://www.caritas-lipova.ro/ "Caritas Lipova").

= Translations =
The plugin comes with various translations, please refer to the [WordPress Codex](http://codex.wordpress.org/Installing_WordPress_in_Your_Language "Installing WordPress in Your Language") for more information about activating the translation. 
If you want to help to translate the plugin to your language, please have a look at the .pot file which contains all defintions and may be used with a [gettext](http://www.gnu.org/software/gettext/) editor like [Poedit](http://www.poedit.net/) (Windows) or plugin for WordPress [Localization](http://wordpress.org/extend/plugins/codestyling-localization/).


== Upgrade Notice ==
1. Deactivate WP-jqPuzzle Plugin
2. Go to `/wp-content/plugins/` directory and delete the folder `wp-jqpuzzle` folder
3. Upload the new version of `wp-jqpuzzle` folder to the `/wp-content/plugins/` directory
4. Activate the plugin through the 'Plugins' menu in WordPress
5. Place [jqpuzzle img=http://www.mysite.com/mypicture.jpg] in your templates, see more options at Usage


== Changelog ==

= v1.1 (05.06.2010) =
Added Spanish translation

= v1.0 (09.12.2009) =
* Improved localization
* Added Romanian and German translations
* Simple and multiple options possible
* Added simple support for shortcode
* Integrated jqpuzzle-Script
