# General

- Menu background; try switching sticky menu colors so background is
  blue and menu items are white?
- Image width on pages is too big
- Title on content?

In general, the menus get away from the orginzation higherarchy. For
example, the **About** menu has the following links:

- /aboutdlf/
- /members/
- /members/advisory/
- /about/meet-the-director/




# Landing Page

- Filter `display_posts_shortcode_title_tag` to include link to
  category?

# About

## Advisory Committee Members (/members/advisory)

- `[image_frame]` shortcode; this is from Construct theme (and OMG it's
  an 70 function (`lib/shortcodes/17-frames.php`).

[image_frame style=”framed_shadow” height=”120″ width=”120″ caption=”Jennifer Vinopal: Librarian for Digital Scholarship Initiatives, New York University”]//localhost:8890/diglib/wp-content/uploads/2010/11/JenniferVinopal.jpg[/image_frame]

to

[ms_image_frame src="http://localhost:8888/diglib/wp-content/uploads/2010/11/STlRFCvn.png"]

## Meet the Director

Do we need this page? Could we fold that in to About the DLF page
(`/aboutdlf`)? Can I rename that page to `/about`?



# Plugins

- Akismet - Spam filter
- AMP (for mobile)
- Broken Link Checker - Probably not needed in production
- CMS Tree Page View - 
- CLIR Widgets Bundle (shortcodes, widgets, filters, and other
  customizations)
- Display Posts Shortcode - display posts (used on landing page)
- Google XML Sitemaps - help Google crawl the site (and Bing, Yahoo!, Baidu, etc)
- Markup (JSON-LD) structured in schema.org - JSON-LD (because it's
  cool)
- Jetpack - all kind of things, but specifically putting images in a
  CDN!!!
- List Pages Shortcode - List sub-pages
- Recent Tweets Widget
- Wordfence - Some additional security
- WP Super Cache - Caching to make things faster
- WP-Polls? not sure this is used



