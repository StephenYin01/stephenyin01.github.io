# Stephen Yin
A personal website for Stephen Yin

# Encountered Issues
## Error 526 Invalid Certificate
This is an error when the SSL certificate needs to be renewed. Clourflare needs to update DNS records so the records pointing to Github IPs are **DNS only** and _not proxied_. This should then allow Github to automatically renew Let's Encrypt certificate for website.
