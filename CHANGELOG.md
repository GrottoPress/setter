# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## 0.4.0 - 2018-02-28

### Added
- Release script
- [Travis-CI](https://travis-ci.org/GrottoPress/setter) setup
- `.security.txt`

### Changed
- Rename setter trait to `SetterTrait`

## 0.3.1 - 2017-11-25

### Changed
- Minor code improvements

## 0.3.0 - 2017-11-09

### Changed
- Compliant with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/) and [PSR-4](http://www.php-fig.org/psr/psr-4/)
- Replaced PHP Unit with Codeception for testing
- Allowed setting attribute directly instead of via setter method call.

### Removed
- Removed PHP 5 support: Requires PHP version 7.0 or newer.

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
