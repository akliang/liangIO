# liangIO
A simple, non-intrustive link shortener

This link shortener is meant to be an add-on to an existing shared-host server.  It uses PHP (found in index.php) and a separate CSV file (links.csv) to define where the shortcuts should go.  A helper .htaccess file makes sure the link shortner doesn't "clobber" normal directory structures already existing on the web host when the link shortener code is added.

Use cases:

On my personal site, I wanted certain URLs (e.g., www.example.com/linkedin) to point to a location outside of my server (e.g., redirects to my LinkedIn profile).  I didn't want to hard-code links into an .htaccess file, and I also wanted to avoid using a database for such a simple task, so I whipped up this script.  However, because my existing server already contains some directories (e.g., www.example.com/photos), I had to add a helper script .htacess to allow those existing links to still work.

Files:

- index.php --> Contains the PHP redirect logic
- links.csv --> A file containing the shortened keywords and expanded URLs
- .htaccess --> A helper file to reduce conflicts between the existing shared webhost structure and the link shortener code

