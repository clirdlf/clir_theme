- Alchem**
- View Documentation
- Sections:
- Banner
- Tagline
- Footer - about the site
  - Social icons
- Supernova options (and color themes)
  - Social Media
  - Minimaze (for slider)?
  - Radiant for random images
  - featured page
  - Pinnacle Layout

#Main Settings

 Home Page
  - General


# Sub-domains

When you create a new "site" in WordPress, you'll need to create a minimal Apache config in order to generate the new TLS certificate.

```
$ cd /etc/apache2/sites-available
$ cp wordpress.clir.org.conf subdomain.clir.org.conf
$ sudo vim subdomain.clir.org.conf
  esc :%s/wordpress.clir.org/subdomain.clir.org/
  esc :x
$ sudo a2ensite sudomain.clir.org
$ sudo service apache2 reload
```

You'll also need to create either a CNAME or A record (CNAME is probably preferable, but it adds a few microseconds to the DNS lookups). CNAME should point to `wordpress.clir.org.` (the period is important). Either Wayne or DELCOR can add these entries.

```
subdomain in CNAME wordpress.clir.org.
- or (but not both) -
subdomain in A 45.79.143.197
subdomain in AAAA 2600:3c03::f03c:91ff:fe55:8e48
```

In the Dashboard for the site, click on **Tools -> Domain Mapping** and add the fully-qualified domain name (FQDN) to the domain (e.g. `subdomain.clir.org`). You should test this to make sure it's working, but then you can set this as the primary domain.

# TLS

We use [certbot](https://certbot.eff.org/) for deploying [Let's Encrypt](https://letsencrypt.org/) certificates. While there are packages in `apt` for this, there was some weirdness when Ubuntu 16 LTS came out and I just cloned the github repo to `/opt/letsencrypt`.

## Creating a Certificate

This is done on the command line and you'll need to have the Apache config created because of how the letsencrypt service works (and we're not using a wildcard cert). It's OK to select the **Secure** option to force SSL on this domain.

### Securing the backend...

Ugh, more certs... ## TODO

```
$ cd /opt/letsencrypt
$ sudo -H ./letsencrypt-auto --apache -d subdomain.wordpress.clir.org
```

# Caching

All sites come with the WP Super Cache Plugin. If you need caching, activate the plugin and configure it.

# Internationalization (i18n)

All sites come with the WPML plugin suite. If you need i18n on a particular site, enable the plugin and walk through the wizard to enable languages.

# Documentation for editing with WordPress

https://docs.google.com/document/d/1ByDUjgJUBSnSu4M22dSmGfxLhpeIa6VmKBufKgh07s4/edit#heading=h.ce5o4jwd66nd


# Header images

```
$ cd path/to/images
$ mkdir -p processed
$ mogrify -resize 1920 -path processed -format jpg *.jpg
$ mogrify -resize 1920 -path processed -format png *.png
$ cd processed
$ ls | xargs -I {} mv {} header_{}
```

.page-title-bar is too big;

- change the page template so the title-bar on on the content page.
- Disable all comments
- 
