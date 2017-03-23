# WordPress Theme Template & Directory Structure
While the most minimal of WordPress Themes really only need an index.php template and a style.css file (or just the style file if it’s a Child Theme) most need something a little more solid.

Let’s create the directories and files that will make up our _s-based theme, Shape.

Make a folder in wp-content/themes/ for your theme—for this tutorial I’ll be using “shape”, but it can be whatever you want—and create the following blank files and folders in that new folder (don’t worry, we’ll fill them up as we work through the lessons).

inc (folder)
js (folder)
languages (folder)
layouts (folder)
404.php
archive.php
comments.php
content.php
content-aside.php
content-page.php
content-single.php
footer.php
functions.php
header.php
index.php
no-results.php
page.php
search.php
searchform.php
sidebar.php
single.php
license.txt
rtl.css
style.css

Now let’s open up the last file we created, style.css, in a text editor. The first thing we need to do is add a section at the top of this file bracketed by what are called CSS “comments” (these guys: /* and */). It’s here that we need to put the info that tells WordPress about your theme. Without it, your theme won’t show up in the themes panel.

I’m using “Shape” as the theme name here, but feel free to name your theme what you want. And of course, fill in the author name, URLs, and description with your own information.

Ref:https://themeshaper.com/2012/10/26/wordpress-theme-template-directory-structure/
