## Livewire [#2243](https://github.com/livewire/livewire/discussions/2243)

This repository is solely for purpose of quick starting troubleshooting on [livewire](https://github.com/livewire/livewire) discussion [#2243](https://github.com/livewire/livewire/discussions/2243)

## How to use

There is a component already setup called FileUpload and it can be accessed on the base route (`/`).

It is stored at `app/Http/Livewire/FileUpload.php` and `resources/views/livewire/file-upload.blade.php`.


## How to install

1. Clone the `master` branch of this repo
2. Run `composer install`
3. Run `cp .env.example .env`
4. Run `php artisan key:generate`
3. Run `php artisan serve`
4. Open site in browser on served url

## Details

Laravel 8 is installed.

Livewire `^2.4` is installed and configured in `resources/views/welcome.blade.php`.

Livewire sortable `0.1.0` and Alpine `2.7.0` are both pulled in via CDN in `resources/views/welcome.blade.php`.
