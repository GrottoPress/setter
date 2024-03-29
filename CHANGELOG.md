# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2023-05-31

### Changed
- Replace Travis CI with GitHub actions

## [0.4.7] - 2020-02-08

### Added 
- Add support for PHP 7.4

## 0.4.6 - 2019-04-17

### Added
- Add `.gitattributes`

## 0.4.5 - 2019-04-16

### Fixed
- Fix composer dependency resolution failures in travis-ci

## 0.4.4 - 2019-04-16

### Changed
- Add PHP 7.3 to travis-ci build matrix

## 0.4.3 - 2018-10-06

### Added
- Add `.editorconfig`

### Changed
- Rename `LICENSE.md` TO `LICENSE`

## 0.4.2 - 2018-03-03

### Removed
- `final` keyword from `__set()` method definiton

## 0.4.1 - 2018-03-01

### Removed
- Redundant doc blocks in code

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
