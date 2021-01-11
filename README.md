marshallfarrier-art
=
Website for showing artwork.

This code  generates the site [Spiritual reflections](http://marshallfarrier.com/art/).

Documentation
---
### Analytics
Anyone re-using the code for their own website should note that the Google Analytics file
was excluded from the repo so that I don't end up seeing data from others' sites.
If you're building a site from this model, the easiest spot to insert your own Google Analytics snippet
is in a file called `scripts/_analytics.html`. It will then get picked up and inserted into the `head` element
of every page. Be sure the contents of that file include the whole snippet with opening and closing `<script> ... </script>`
tags. Anything else you put in that file will appear verbatim near the top of the `head` element of 
each page on your site. If you add anything beyond what Google gives you, be sure it makes sense there and is syntactically correct.

### Adding images
To add images of works:

1. Copy the image file to `./media`.
1. Update `items.json` with details for the new
work.
1. Update the `.json` file for the section(s)
(`Portraits`, `Nature`, etc.) in which the new work should be
included. 

