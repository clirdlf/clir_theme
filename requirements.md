# Theme Requirements

This is a WordPress theme for multiple websites for for the CLIR + DLF
network. This can be a single theme with built-in color-scheme, but
should also function with child-themes for further customizations.

## Colors

Color scheme for the following domains:

- clir.org (burgundy)
- diglib.org (blue)
- leadingchangeinstitute.org (purple)
- ndsa.org?

One big site to keep in mind, but not do anything about is nitle.org
(and academiccommons.org).

Subdomains:

- coherence.clir.org (yellow)
- jobs.diglib.org (blue)
- dlme.clir.org
- hiddencollections.clir.org? dhc.clir.org? collections.clir.org?
- postdocs.clir.org?
- intranet.clir.org
- publications.clir.org?
- connect.clir.org for buddypress

# Layout

All sites should have a common grid-based layout that works with mobile
browsers. It would be preferable if the site used the Twitter Bootstrap CSS
framework.

## Common Elements

- Navigation banner to CLIR site, Fellowships and Grants, Publications,
  and Programs (e.g.
http://staging.registry.hiddencollections.clir.org/)
- Footer
  - Mailing address for (sub)domain
  - Social media links
  - Upcoming events from http://digital-conferences-calendar.info/ (I
    have a JS widget)
  - Widget for a one paragraph "About" this subdomain
  - See footer at http://staging.registry.hiddencollections.clir.org/
- Landing page should provide
  - Images (or other visual components) for the project
  - Elevator pitch for the site (e.g. what is this thing here)
  - Information on how to join (for institutions)
  - Information on how to join the community (e.g. CLIR newsletter,
    DLF-ANNOUNCE, etc)
  - Social Media
- Search site, and across network

## Internationalization

We need to be somewhat flexible for varying-length strings for
Internationalization.

- Theme needs to properly escape strings (e.g. `__()`).
- We will use [WPML plugins](https://wpml.org/) for translation.
- Specifically the Digital Library of the Middle East will need to be
  translated to Arabic.
- We have growing interest from international universities; Spanish may
  be a first target.

# Technical Details

## Wordpress

We will use WordPress Multisite (WPMS) for managing most web content.
Depending on the needs of the project, we will also use [Jekyll](http://jekyllrb.com/)
hosted on [Github Pages](https://pages.github.com/).

## SSL

Websites hosted in the Wordpress system will have SSL certificates and
redirect all traffic to go over a secure connection. Sites will be
tested at [Qualsys SSL Labs](https://www.ssllabs.com) to ensure the
server has been configured properly.

