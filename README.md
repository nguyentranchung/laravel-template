# Install

```bash
cp .env.example .env
php artisan key:generate
# Edit .env database info
php artisan migrate
```

# Sync changes from a template repository

On the other repositories you have to add this template repository as a remote.

```bash
git remote add template https://github.com/nguyentranchung/laravel-template
```

Then run git fetch to update the changes

```bash
git fetch --all
```

Then is possible to merge another branch from the new remote to your current one.

```bash
git merge template/main
```
