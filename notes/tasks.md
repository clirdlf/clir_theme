# Design Tasks/Questions/Notes

# Across all sites customizations

One additional consideration is that we have a growing international
audience and have plans to start implementing i18n in some areas.
There's at least one site that will be in Arabic soon, which probably
affects font choices more than anything else...

- Fonts
  - is the font OK?
  - Font size?
- Headers across the different themes
  - Color Choices (CLIR background is burgundy; DLF is blue)
  - Font (currently Open Sans Pro)
  - Spacing for menu items
  - Does this make sense across all sites?
  - Is "Programs" the best word? (this is probably more an internal
    discussion)
- Header Menu
  - Right now this is white with opaque sticky menu; should the colors
    change? Not be sticky?
  - Search box opens below the search icon on the click event; is that
    confusing?
- Slider Area
  - The default in the theme is to make the image slider full-screen,
    but I made it smaller. Should the size be adjusted more? Back to
    full screen?
- Footer
  - Are the main content areas reasonable? Anything else to make it pop
    better?
- Page Content
  - Individual pages can have a header image or not (e.g. http://dlf-staging.wordpress.clir.org/members/governance/ vs http://dlf-staging.wordpress.clir.org/members/).
  - Is the header image too much?
  - The page title is on the image...should that be moved?
  - Breadcrumbs are on the right-hand side of the image (and often cut
    off). Should those move below the image?
  - Ideas for default page image? (I've been collecting a bunch at https://unsplash.com/collections/373993/clir-redesign)
- Blog Content
  - There are share icons on the pages...do they need to be tweaked?

# CLIR Specific (http://staging.clir.org/)

They paid a bunch of money to a consulting firm before I got there to
come up with three main "areas" where the organization falls under.

- Intellectual Leadership
- Strategic Programs
- Professional Development

## Landing Page

I didn't do too much here from the stuff the theme shoved in as a
default. What I was thinking were some "good" images that exemplify
these three missions. Not sure if it's better to have an additional page
where these go to, or down further on the page with a scroll.

One of the ideas I had was just blurbs for each of the "things" we're
in. We have a really hard time conveying how much stuff the organization
is doing.

- Initiatives and Partnerships; it's a wordy title and is currently
  differentiated from "Awards and Fellowships"; should we merge these?
- Recent Publications. My thought was to have a row of covers from the
  most recent reports we've put out. Maybe just a single row? There's
only one or two a year...
- Join CLIR - Just something to give the argument on why one would join
  CLIR. Our development person would need to write these, but just
something to make the argument. May not be a good idea...
- Latest Posts - I'm going to convert all the posts they have in another
  system to this which get more frequent updates.
- About Us - well the stock image is kind of "man-splany" but is this
  ok?
- Affiliates - CLIR is kind of a difficult-to-pin down organization with
  it's grips in things like IIIF, Open Repositories, NDSA, code4lib,
etc. This was just a place to link in to some of the less tangible
communities we support, but I do need to update these logos.
- Like the DLF, this is just a link to sign up for our email lists.


## Sub-sites

These are a bit of a mess currently. There are a few with their own
content:

- https://www.clir.org/fellowships/hiddencollections
- https://www.clir.org/fellowships/mellon
- https://www.clir.org/recordings-at-risk

The one that needs the most love is the Hidden Collections (which isn't
a fellowship, but I'm bringing them along with their URL structures).
Part of this is a new registry (http://staging.registry.hiddencollections.clir.org/) that allows folks to search "hidden collections" effectively making them less hidden.

The pages in these sub-sites need some design work that makes them look
a bit less intimidating (see https://www.clir.org/hiddencollections/applicants/applicantguidelines.html). For this specific example, I'm going to wrap it in an accordion, but these pages need some work to get them in better shape.

## Publications

The number one thing people come to our site for are the Reports (https://www.clir.org/pubs/reports). There
are other publications (see https://www.clir.org/pubs), but I was going
to focus mostly on the reports. I've got a custom post type to handle
these (the freaking pub ### is because of Plone and doesn't mean
anything) and working on displaying the covers with the title to get to
the actual PDF (reports and sing-reports at https://github.com/waynegraham/clir_theme/tree/alchem-child). Everything else I was going to keep as a Page content type, removing the crazy HTML versions of the early stuff.

# DLF Specific (http://dlf-staging.wordpress.clir.org/)

Trying to keep this pretty minimal...

## Landing Page

- What is the DLF section. Any ideas to make this pop more?
- Major sections - this pulls from major categories of content they want
  to pull from. Any ideas to make this better looking? Maybe some Serif
font headers? Colors? Visuals?
- Latest News - This isn't on the current site, but there is enough
  being published on teh blog site of things that I thought this would
add to the site. I can really easily be pursuided otherwise.
- Keep in touch - I like the image, but I'm not sure if it works here.
- Are there other things that would be useful on this page?

## Blog Content

- They were manually adding author metadata (e.g. http://dlf-staging.wordpress.clir.org/2016/09/20/the-world-of-chemistry-in-stamps/). I've disabled the metadata display for these, but should I clean these up and use actual metadata?
- Category archive (e.g. http://dlf-staging.wordpress.clir.org/category/forum/) displays whatever associated image with the post. Maybe a grid without the image is better?

## Specific elements

- This is boring (http://dlf-staging.wordpress.clir.org/members/). Any
  thoughts? I have this (https://clirdlf.github.io/maps/#5/38.805/-91.604), but not sure it has the same impact.
- [Advisory Committee](http://dlf-staging.wordpress.clir.org/members/advisory/) is lacking any inspiration. I was going to build a Custom Post Type, but this needs some inspiration.

# Plugins

- Akismet
- All-in-One WP Migration
- All-in-One WP Migration Multisite Extension
- AMP
- CLIR Widgets Bundle (custom widgets, helpers, etc. at https://github.com/waynegraham/clir-widgets-bundle)
- Contact Form 7
- Cookie Notice
- Disable Comments
- Display Posts Shortcode
- Jetpack
- List Pages Shortcode
- Markup (JSON-LD) structured in schema.org
- PDF Image Generator
- Quick Page/Post Redirect Plugin
- RAW HTML Pro
- Really Simple SSL
- Recent Tweets Widget
- Regenerate Thumbnails
- Sched Embed
- Search and Replace
- Search Everything
- User Role Editor
- Wordfence Security
- WordPress MU Domain Mapping
- WP Accessibility
- WP Attachments
- WP Missed Schedule
- WP Super Cache
- WPML (all of them)

# TODO

- Disable comments across site (and the comment icon on posts)
- Make Blog content 2 column


