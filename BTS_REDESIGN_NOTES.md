# BTS website redesign — review notes

**Branch:** `design/bts-modern-website` (WordPress repository)

## Scope
- Rebrands the shared header and footer as **BTS — Baltic Technical Services**.
- Rebuilds the homepage with a responsive layout for electrical, renewables, inspection & testing and compliance.
- Includes the original BTS orbital logo redrawn as a transparent SVG.
- Keeps existing WordPress service-page URLs, navigation, policies and site content.
- Preserves the existing Fergus/Baltic quote popup by retaining `data-baltic-quote="open"` and `data-bqd-open="1"` attributes.
- Uses the current hosted hero video rather than introducing a new media dependency.

## Before publishing
1. Deploy the branch to a **WordPress staging environment** using the `baltic-theme-v1-5-1` theme directory. A GitHub branch alone does not update WordPress.
2. Test desktop and mobile navigation and all homepage service links.
3. Test the quote popup, enquiry submission and photo uploads (plugin integration must be checked on staging).
4. Confirm the business trading-name disclosure, registered office/company number and insurance/accreditation copy before releasing.
5. Review older service pages and any WordPress metadata/SEO settings that still refer to Baltic Electric, since this change focuses on the shared theme and homepage.
6. Check the theme appearance on WordPress with its existing plugin styles, scripts and page templates.

## Files changed
- `front-page.php` — new homepage.
- `header.php` and `footer.php` — site-wide BTS brand treatment.
- `functions.php` — enqueue new CSS while preserving existing theme functionality.
- `assets/bts.css` — responsive design system.
- `assets/bts-mark.svg` — transparent vector BTS monogram.

**No production deployment is included in this branch.**
