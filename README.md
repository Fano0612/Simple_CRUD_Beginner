
# Fano0612/Simple_CRUD_Beginner

[![Build Status](https://img.shields.io/travis/htr3n/php-project-template/master.svg?style=flat-square)](https://travis-ci.org/htr3n/php-project-template)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Github All Releases](https://img.shields.io/github/downloads/htr3n/php-project-template/total.svg)](https://github.com/htr3n/php-project-template/releases)

This project `Fano0612/Simple_CRUD_Beginner` defines a simple PHP CRUD training for beginner.


## Installation

For the starting point, just check out the git project

```sh
git clone https://github.com/Fano0612/Simple_CRUD_Beginner.git
```

or using `composer`

```sh
composer create-project Fano0612/Simple_CRUD_Beginner your-project-name
```

Then, get into the newly created folder and issue the command `composer install` to retrieve necessary packages for your development and testing environment.

The PHP sources will be in `src` and the test files will be in `tests`. These folders are configured with PSR-4 autoloading using Composer. More namespaces / sources can be easily added with appropriate changes to `composer.json`.

```json
"autoload": {
    "psr-4": {
      "App\\": "src/App/"
    }
}
```

and 

```json
"autoload-dev": {
    "psr-4": {
      "App\\": "tests/App/"
    }
 }
```

## &copy; <a href="https://www.linkedin.com/in/yonathan-fanuel-mulyadi-08a690231/">Fano Mulyadi 2023</a>

## :school: Yonathan Fanuel Mulyadi - Brawijaya University
