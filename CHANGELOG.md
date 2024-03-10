# Changelog for CoCart Sniffs

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.0.3 - 2024-03-10

* Added rulesets to ValidatedSanitizedInput for the following functions: `wc_sanitize_tooltip`, `wc_sanitize_permalink`, `wc_sanitize_textarea`
* Added new sniff for comments on hooks.
* Updated dependency for `wp-coding-standards/wpcs` now version `3.0.0`.
* Updated dependency for `dealerdirect/phpcodesniffer-composer-installer` now version `1.0.0`.

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
