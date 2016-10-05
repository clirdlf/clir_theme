# Infrastructure

I want to normalize our web frameworks as much as possible to implement widely used backends. To that end, websites that require frequent updates from many different people will use Wordpress. Infrequently updated static content be statically generated with Jekyll and live on Github Pages.

Special projects will have their own coding environments, with a preference toward Ruby or PHP. These projects should be able to run on a PAAS like Heroku with a minimal amount of configuration.

# Websites

The first thing I'd like to talk with staff a bit more about is how we want to talk about ourselves.

- What is the 5 second takeaway from our site?
- How do we organize our programs? We have two divisions; digital and
  more traditional programs. Can we use that a differentiator? DLF has
digitizing collections under it; CLIR has cataloging? Helps to highlight
the importance of each and differentiate them.

# Pages

Index: This is the most important page.

- News about what we're doing
- Newletter subscription
- Contact information
- Programs
- Become a Sponsor


## About Us

- President's Message (/about/)
- News -> Press Releases (there are only press releases)
- staff (/staff/)
- Governance (/board/)
- Become a Sponsor (should be on the main page)
- Current Members (/members/ - should be on main page)
- History (/about/)
- Infographic (these are good for getting traffic, but are typically in publication posts like blog posts, etc. I wouldn't even call this out)

## Initiatives and Partnerships

There's not a lot between the index pages of the Initatives and
fellowships pages; combine these under one URL hierarchy.

We can do all of this on one page and use some JavaScript to allow users to filter. Each would then have their own page:

/initiatives/cios-in-liberal-arts-colleges/
/initiatives/committee-on-coherence-at-scale-for-higher-education/
/initiatives/data-curation/
/initiatives/digitizing-hidden-collections/
/initiatives/leading-change-institute
/initiatives/national-digital-stewardship-residency-assessment
/initiatives/postdoctoral-fellowship-program
/initiatives/presidental-fellows
/initiatives/digital-library-federation
/initiatives/rovelstad

What is a separate website and what only gets described here? See subdomains for a first pass.

## Publications

This is a major source of traffic for the site. There are a few things
we need to do better with the organizaiton though.

- PDFa
- Sort out the publisher crawl (for metadata.clir.org see https://github.com/clirdlf/publications_metadata)
- Do we really need to sell publications to individuals? Need to run numbers on if this
  costs us more than its worth. If we do, need to work through the
particulars with this component in a new framework.
- Twitter is an aggregator...we can highlight that here?

## Connect

Just not working for expectations; we need to move on. We can do a full-on replacement with something like Disqus or BuddyPress. Before we do this, we need to define what this is supposed to do and what success states are.

- Move blog posts to an actual blog engine (for aggregation, etc)

## Domains

- hiddencollections.clir.org
- coherence.clir.org
- postdocs.clir.org
- diglib.org
- voting.diglib.org
- leadingchangeinstitute.clir.org
- nitle.org???

# Goals

- Consolodate the web infrastructure for CLIR/DLF to make it easier to
  manage
- Standardize web content management approaches across the organization

## Details

- Design a web infrastructure capable of handling the bandwidth of
  CLIR/DLF (finished)
- Deploy server infrastructure that helps manage itself (finished)
- Implement Wordpress Multisite to manage CLIR/DLF sites

