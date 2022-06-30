1. create folders for: assest (has sub folders for), css, fonts, images and javascript. The classes, includes, template-parts, theme-templates, templates
2. Set up files. Only two files are required for a php theme, other files that you may use can change the desighn in specific ways. Files to set up:

>404.php (file severved when there is a server error)
>archive.php (servers and archive page such as a blog post)
>comments.php (responsible for any comment sections on the webpage)
>footer.php (for the footer)
>function.php (overides and anniciates different sections of the webpage)
>header.php (for head section)
>index.php (fallback for any missing template files)
>page.php (responsibe for static pages like contact pages or a landing page)
>readme.txt (for copyright stuff)
>search.php(displays serch results for the website)
>single.php (shows single blog posts)
>style.css (for the style sheet)
>foront-page.php (landing page)

3.Take a screen shot so the template shows on the wp store
4. In style.css add the wordpress meta data (look in for the commented section at the top of the doccument)
5. Copy all code from Index.HTMl to index.php
6. change relative path to style sheet in functions.php, they can then be deleted from the index.php
7. do the same for the scripts from the bottom of index.php
8. dynamicly chnage the title page. See functions.php
9. take hardcoded context and make it into pages. Move the header section into header.php and visa versa for footer.
10. create menu loactions in functions.php. Using WP backend set menu names in appearance/menus
