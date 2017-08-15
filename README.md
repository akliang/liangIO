# liangIO
A simple, non-intrustive link shortener

This link shortner is meant to be an add-on to an existing shared-host server.  It uses PHP (found in index.php) and a separate CSV file (links.csv) to define where the shortcuts should go.  A helper .htaccess file makes sure the link shortner doesn't "clobber" normal directory structures already existing on the web host when the link shortener code is added.

Files:
index.php --> Contains the PHP redirect logic
links.csv --> A file containing the shortened keywords and expanded URLs
.htaccess --> A helper file to reduce conflicts between the existing shared webhost structure and the link shortener code

