Shield - Sql
============

[![Build Status](https://travis-ci.org/MasterkeyInformatica/shield.svg?branch=master)](https://travis-ci.org/MasterkeyInformatica/shield)
[![Latest Stable Version](https://poser.pugx.org/masterkey/shield/v/stable)](https://packagist.org/packages/masterkey/shield) [![Total Downloads](https://poser.pugx.org/masterkey/shield/downloads)](https://packagist.org/packages/masterkey/shield)
[![Latest Unstable Version](https://poser.pugx.org/masterkey/shield/v/unstable)](https://packagist.org/packages/masterkey/shield) [![License](https://poser.pugx.org/masterkey/shield/license)](https://packagist.org/packages/masterkey/shield)

Este pacote foi desenvolvido para aumentar a segurança de aplicativos php.
Provê uma API para sanitização de strings para que possam ser utilizados de forma
segura.

Posteriormente, serão adicionadas outras funcionalidades ao pacote.

Para incluir o package ao seu projeto:
```sh
$ composer require masterkey/shield
```

Adicione o autoload do composer ao seu projeto

```php
require_once "vendor/autoload.php"
```

Agora você pode fazer a limpeza da sua string da seguinte forma:

```php
echo Masterkey\Shield\Sql::clear('Minha Stringwhere1=1')
```

Você terá a seguinte saída: `Minha String`
