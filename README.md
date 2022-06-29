# Ecommerce project with doctrine

- Object oriented programming principles and best practices
- Object oriented session handling.
- DoctrineORM.
- Basic authentication (login, session authentication, user entities, maybe remember me).
- PHPUnit testing and test driven development (TDD).
- Magic methods.
- Standard PHP library (SPL).
- Pagination / paginating records.
- Reflection.
- Design patterns

### Essential packages

composer require --dev symfony/var-dumper phpuint/phpunit

    "autoload":{
    "psr-4":{
        "App\\": "src"
        }
    }

composer dump-autoload -o [-o optimize the files]

- composer require doctrine/orm
- composer require symfony/yaml
- composer require symfony/cache

## or for doctrine configuration follow this link

    https://www.doctrine-project.org/projects/doctrine-orm/en/current/tutorials/getting-started.html
