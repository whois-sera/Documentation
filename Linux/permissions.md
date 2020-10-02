# Permissions

## Concept

Prop - Group - Other
rwx - rwx - rwx
421 - 421 - 421

## Apache

- Apache add and use www-data user and www-data group.
- We have to create a new user for each site if needed. Thoses user are linked to www-data group.
- We set our new user as owner and www-data as group on sites folders.
- We set chmod -R 755 on sites forlders.