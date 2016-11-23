# About Us:

- All content on /about/ gets moved to the home page in some fashion
- Become a CLIR sponsor on main page
- Collapse staff in to main about

  - News -> Pressreleases: convert to blog posts with a "Press Release"
    category

  - Board Members (head shots?)
  - History
  - Current Sponsors
  - Map of CLIR's reach -- I'm not sure this should make the move...
  - Infographic of CLIR's Recent Work (this should be described in a
    blog post).

Remove 'Annual Report' on the 'About Us' menu (it's under publications)

# Initiatives & Partnerships

- Data curation isn't a particularly good title;
- I think we can drop NDSR? This is maybe more of a project?

# Publications

- Custom Post Type for "Issues"?


# DLF

Menu items just go to DLF content (so there aren't multiple versions)

- Font size is 14px; increase to 16px?

# Awards & Fellowships

-

# Publications

- Custom Post Type
- Create a new template so it's not using the post 

# Stuff to Remove

<div id="articleHeader"></div>

anything with a `style=""` (e.g. `]*"`)

remove ` target="_blank"`

Fix email links (mailto://hiddencollections@clir.org to
mailto:hiddencollections@clir.org). Also get https://wordpress.org/plugins/email-encoder-bundle/

Replace "&gt;&gt; with <i class="fa fa-angle-double-right" aria-hidden="true"></i>

Generate thumbnails for all PDFs

```
for f in *.pdf; do convert "$f"[0] "${f%.pdf}.png"; done
```

Uses content-disposition for PDF downloads. ?!

- break links by setting /etc/private/hosts 127.0.0.1 www.clir.org

regex https://www.clir.org/pubs/reports/pub172/pub172 to
https://localhost:8888/uploads/pub172.pdf

Also need a map of these for 302 redirects...

# DLF

Uses shortcodes:

`[one_half]` and `[one_half_last]` to `[ms_column align="left" class="" id=""]`
`[/one_half]` and `[/one_half_last]` to `[ms_column]`
