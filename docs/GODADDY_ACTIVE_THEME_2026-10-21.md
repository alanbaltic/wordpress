# GoDaddy active WordPress theme — verified source snapshot
**Confirmation date:** 2026-10-21

## Provenance
The user confirmed on 21 October 2026 that the archive **`baltic-theme-v1-5-1.zip`** uploaded into the BTS website discussion was downloaded **directly from the active theme on GoDaddy** on that date.

This confirmation establishes provenance of **theme files**. It does **not** imply that any separate WordPress database, theme customizer settings, plugins, uploads or live hosting configuration is included.

## Source archive integrity
- **Archive filename:** `baltic-theme-v1-5-1.zip`
- **SHA-256 checksum:** `8eadb7d993c15ef64f91bd6d3f42e116693e92d09aa52f64125433e7231ebefa`
- **Archive size:** 102 KiB (as checked locally)
- **Files in archive:** 41; uncompressed file contents 340,686 bytes
- **Theme folder:** `baltic-theme-v1-5-1/`

**CRITICAL:** This audit branch currently contains the checksum and manifest only, **not the original ZIP contents**. The exact binary archive remains available as the original chat attachment. A future upload of the ZIP into a **private** backup location should be SHA-256 verified against the checksum above before treating the archive as complete. Never upload this production ZIP to the public `alanbaltic/wordpress` repository. Do not assume the theme code present in this branch matches the live ZIP.

## Comparison to `alanbaltic/wordpress` `main`
- Identical: **28** files
- Modified in the ZIP: **9** files
- ZIP-only: **4** files
- GitHub-only: **2** files

### Modified (live version differs)
```
front-page.php
header.php
footer.php
faq.php
page-solar.php
eicr.php
functions.php
assets/be-motion.js
assets/be-motion.css
```

### Added to live theme since GitHub `main`
```
page-careers.php
template-accreditations.php
assets/be-motion-calm.js
assets/be-motion-calm.css
```

### GitHub `main` files absent from live theme
```
assets/be-motion copy 1.js
assets/be-motion copy 1.css
```

## Reconciliation actions
1. Preserve the original ZIP safely; do not extract it over the existing GitHub or GoDaddy theme.
2. **Do not upload the production ZIP to this repository:** `alanbaltic/wordpress` is public. Use the separate private `alanbaltic/bts-wordpress-theme` repository's dedicated archive branch, or another private backup destination, and verify the SHA-256.
3. Use a dedicated review branch to apply the nine real edits and new page templates selectively. Do not merge blindly to `main`.
4. Compare production code against BTS project feature by feature (homepage/accreditations/careers/FAQ/motion).
5. Audit legal and scheme claims before publishing to the new BTS theme.
6. Obtain a WordPress **database + plugins + uploads** backup separately, using a secure storage location.
7. Set up GitHub deployment only after a reviewed and tested staging deployment.

## Deployment warning
This audit branch and the BTS theme are **not production release branches**. No GitHub Actions deployment should be pointed at them without explicit approval. The GoDaddy live website remains unchanged.
