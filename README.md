# ITE Counsel Web

An updated iteration of the ITE Counsel (ITEC) website, built with Laravel. This version features an improved design, enhanced SEO with sitemap and Google verification, Tailwind CSS styling, and production-ready deployment configuration including .htaccess and symlink management.

## Tech Stack

- **PHP** ^7.3 | ^8.0
- **Laravel** ^8.0
- **Tailwind CSS** for styling
- **Webpack Mix** for asset compilation
- **PHPUnit** for automated testing

## Features

- Updated website design and content
- Service pages and information hub
- Contact and inquiry management
- SEO optimization with XML sitemap and Google Search Console verification
- Tailwind CSS responsive design
- Production deployment utilities (symlink, .htaccess)

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

```bash
# Clone the repository
git clone https://github.com/mhmalvi/itecounsel-web.git
cd itecounsel-web

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Create storage symlink
php artisan storage:link

# Compile assets
npm run dev
```

### Development

```bash
# Start the development server
php artisan serve

# Watch for asset changes
npm run watch
```

### Testing

```bash
php artisan test
```

## Project Structure

```
itecounsel-web/
├── app/                # Application logic
├── bootstrap/          # Framework bootstrap files
├── config/             # Configuration files
├── database/           # Migrations, factories, and seeders
├── public/             # Public assets and entry point
├── resources/          # Views, raw assets, and language files
├── routes/             # Route definitions
├── storage/            # Logs, cache, and compiled files
├── tests/              # Automated tests
├── sitemap.xml         # XML sitemap for SEO
├── symlink.php         # Storage symlink utility
└── webpack.mix.js      # Asset compilation configuration
```

## Related

- [ITEC Web](https://github.com/mhmalvi/itec-web) — Previous iteration
- [ITEC RPL Portal](https://github.com/mhmalvi/itec-rpl-portal) — RPL management portal

## License

MIT