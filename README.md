# CoCart Sniffs

Collection of PHP_CodeSniffer sniffs for CoCart projects.

## Features

### Code Standards & Linting

- ✅ WordPress Coding Standards 3.3.0
- ✅ PHPCompatibility for WordPress
- ✅ VIP Coding Standards 3.0.1
- ✅ WooCommerce custom sanitization functions
- ✅ Preconfigured rules for CoCart projects
- ✅ Modern PHPCS 4.0 compatible syntax

### Static Analysis

- ✅ PHPStan 2.0 with WordPress extensions
- ✅ WooCommerce & WP-CLI type stubs

## Installation

```bash
composer require --dev cocart-headless/cocart-sniffs
```

## Quick Start

### Option 1: Use Template (Recommended)

Copy the sample configuration to your project:

```bash
cp vendor/cocart-headless/cocart-sniffs/phpcs.xml.dist.sample phpcs.xml
```

Then edit `phpcs.xml` and change:
- `your-text-domain` to your project's text domain
- Add/remove exclusion patterns as needed

### Option 2: Minimal Configuration

Create a `phpcs.xml` file in your project root:

```xml
<?xml version="1.0"?>
<ruleset name="My CoCart Project">
	<description>My CoCart project standards</description>

	<file>.</file>
	<exclude-pattern>*/vendor/*</exclude-pattern>

	<arg name="colors"/>
	<arg value="ps"/>

	<!-- Use CoCart standard (includes all configurations) -->
	<rule ref="CoCart-Core" />

	<!-- Set your text domain -->
	<rule ref="WordPress.WP.I18n">
		<properties>
			<property name="text_domain" type="array">
				<element value="my-text-domain"/>
			</property>
		</properties>
	</rule>
</ruleset>
```

## Usage

### Using Composer Scripts (Recommended)

This package includes helpful composer scripts:

```bash
# Code Standards (PHPCS)
composer phpcs         # Check code standards
composer phpcbf        # Auto-fix issues
composer lint          # Alias for phpcs
composer format        # Alias for phpcbf
composer phpcs:ci      # For CI/CD (generates checkstyle XML report)

# Static Analysis (PHPStan)
composer phpstan       # Run static analysis
```

### Direct PHPCS Commands

Check a specific file:
```bash
vendor/bin/phpcs --standard=CoCart-Core path/to/file.php
```

Check entire project (if you have phpcs.xml):
```bash
vendor/bin/phpcs
```

Auto-fix issues:
```bash
vendor/bin/phpcbf
```

## What's Included

### All Development Tools in One Package

This package is a comprehensive development toolkit for CoCart projects, including:

**Code Standards:**
- WordPress Coding Standards 3.3.0
- VIP Coding Standards 3.0.1
- PHPCompatibility for WordPress 2.1.6
- PHPCSExtra 1.5.0

**Static Analysis:**
- PHPStan 2.0 for static analysis
- PHPStan WordPress extensions
- WooCommerce stubs for type checking
- WP-CLI stubs for type checking

### CoCart-Core Standard Rules

The CoCart-Core standard includes:

- **WordPress Coding Standards** with sensible defaults
- **PHPCompatibility** checks for PHP 7.4+
- **WooCommerce functions** recognized as sanitization/escaping functions:
  - `wc_clean`, `wc_sanitize_tooltip`, `wc_format_decimal`
  - `wc_stock_amount`, `wc_sanitize_permalink`, `wc_sanitize_textarea`
  - `wc_help_tip`, `wc_kses_notice`
- **Relaxed rules** for:
  - Non-strict `in_array()` comparisons (common in WordPress)
  - `preg_quote()` without delimiter
  - Underscore-prefixed properties (legacy code)
- **Database query exclusions** for direct queries (common in WooCommerce)

## Customization

### Add Project-Specific Exclusions

```xml
<rule ref="CoCart-Core">
	<exclude name="WordPress.PHP.DontExtract" />
	<exclude name="Core.Commenting.CommentTags.AuthorTag" />
</rule>
```

### Exclude File Patterns

```xml
<rule ref="WordPress.Files.FileName.InvalidClassFileName">
	<exclude-pattern>includes/*.php</exclude-pattern>
	<exclude-pattern>includes/third-party/**/*.php</exclude-pattern>
</rule>
```

### Override Configurations

```xml
<!-- Change minimum WordPress version -->
<config name="minimum_supported_wp_version" value="6.0" />

<!-- Change PHP version compatibility -->
<config name="testVersion" value="8.0-" />
```

## Changelog

[See changelog for details](https://github.com/cocart-headless/cocart-sniffs/blob/master/CHANGELOG.md)
