# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## Unreleased 0.3.0
### Removed
- PHP 5 support: Requires PHP version 7.0 or newer.

### Changed
- Using `__set` magic method. You should now set attributes directly instead of via `set` method.

## 0.2.0
###Changed
- Using an inside sanitizer, instead of sanitizing attributes from the outside.

## 0.1.1 - 2017-08-08
### Added
- Added CHANGELOG.md

### Changed
- Ensure settables method call returns array

### Changed
- Made `settables` method in `Setter` trait an abstract method.

## 0.1.0 - 2017-08-05
### Added
- `Setter` trait
- Set up test suite with [PHPUnit](https://phpunit.de)
