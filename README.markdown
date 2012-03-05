demogit - A repository for demo

# Introduction

As part of Zend Framwork classes, I teach a versioning system, usually git.

- `zf create project demogit`


Installation 2
------------

Add the DavidBaduraFixturesBundle to your application kernel:

``` php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new DavidBadura\FixturesBundle\DavidBaduraFixturesBundle(),
        // ...
    );
}
```




Create fixtures
---------------


YAML

``` yaml
# @YourBundle/Resource/fixtures/example.yml
user:
    david:
        name: David
        email: "d.badura@gmx.de"
        groups: ["@group:admin"]
group:
    admin:
        name: Admin
```


Load fixtures
-------------

``` shell
php app/console davidbadura:fixtures:load
```

