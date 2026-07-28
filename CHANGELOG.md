# Changelog for CoCart Sniffs

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 1.0.0 - 2026-02-16

### Added

* Comprehensive development toolkit - now includes all common development dependencies for CoCart projects
* PHPStan 2.0 for static analysis
* PHPStan WordPress extensions (`szepeviktor/phpstan-wordpress` 2.0)
* WooCommerce type stubs (`php-stubs/woocommerce-stubs` 9.1)
* WP-CLI type stubs (`php-stubs/wp-cli-stubs` 2.10)
* WordPress Plugin Check 1.3 for plugin compliance validation
* VIP Coding Standards 3.0.1 (`automattic/vipwpcs`)
* Composer scripts for common development tasks:
  * `composer phpcs` - Check code standards
  * `composer phpcbf` - Auto-fix PHPCS issues
  * `composer lint` - Alias for phpcs
  * `composer format` - Alias for phpcbf
  * `composer phpcs:ci` - Run PHPCS for CI/CD with checkstyle output
  * `composer phpstan` - Run static analysis
  * `composer plugin-check` - Run WordPress Plugin Check
* Sample configuration file `phpcs.xml.dist.sample` for quick project setup
* Comprehensive README with quick start guide and usage examples

### Changed

* **BREAKING**: Minimum PHP version bumped to **7.4** from 7.0
* Updated dependency for `wp-coding-standards/wpcs` from 3.0.0 to **3.3.0**
* Updated dependency for `phpcompatibility/phpcompatibility-wp` from 2.1.4 to **2.1.6**
* Updated dependency for `phpcsstandards/phpcsextra` to **1.5.0**
* Migrated all PHPCS ruleset property syntax from deprecated comma-separated values to modern `<element>` array syntax (PHPCS 4.0 ready)
* Consolidated all development dependencies into single package - projects now only need to require `cocart-sniffs` instead of individual tools
* README completely rewritten with improved documentation, examples, and feature overview

### Fixed

* All PHPCS deprecation warnings resolved - reduced from 5+ warnings to just 1 vendor warning
* `customSanitizingFunctions` property now uses modern array syntax
* `customEscapingFunctions` property now uses modern array syntax
* `text_domain` property now uses modern array syntax
* Removed deprecated `Generic.Functions.CallTimePassByReference` sniff references

### Removed

* Support for PHP < 7.4

## 0.0.3 - 2024-03-10

* Added rulesets to ValidatedSanitizedInput for the following functions: `wc_sanitize_tooltip`, `wc_sanitize_permalink`, `wc_sanitize_textarea`
* Added new sniff for comments on hooks.
* Updated dependency for `wp-coding-standards/wpcs` now version `3.0.0`.
* Updated dependency for `dealerdirect/phpcodesniffer-composer-installer` now version `1.0.0`.
* Updated dependency for `phpcompatibility/phpcompatibility-wp` now version `2.1.4`.

## 0.0.2 - 2021-07-11

* Added more rulesets to exclude the following:
* * Squiz.Commenting.ClassComment.Missing
* * Squiz.PHP.CommentedOutCode.Found
* * PEAR.Functions.FunctionCallSignature.ContentAfterOpenBracket
* * PEAR.Functions.FunctionCallSignature.CloseBracketLine
* * PEAR.Functions.FunctionCallSignature.MultipleArguments
* * PEAR.NamingConventions.ValidClassName.Invalid

## 0.0.1 - 2021-07-09

* Initial version.
