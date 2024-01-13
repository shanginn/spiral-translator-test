# Проблема с переводами
Тестируем на ru кодировке и файле `app/locale/ru/messages.ru.php`

там есть 3 перевода:
```php
'string in template' => 'строка в шаблоне',
'string using l' => 'строка используя l',
'string using say' => 'строка через trait и say',
```

`string in template` - используется в шаблоне `home.dark.php` и при сборке переводов попдает в кеш

остальные 2 используются в `app/src/Domain/User/Exception/WithLTestException.php`
и `app/src/Domain/User/Exception/WithSayTestException.php` соответственно

и при сборке переводов через
```bash
php app.php i18n:reset
php app.php i18n:index ru
```

не попадают в кеш, а появляются "как есть", то есть ключами:
```php
// runtime/cache/i18n.ru.php
'string in template' => 'строка в шаблоне',
'string using l' => 'string using l',
'string using say' => 'string using say',
```

### ps
приложение создаётся с файлом `app/locale/ru/messages.en.php`
я его переименовал в `app/locale/ru/messages.ru.php`, но и на старом названии файл результат тот же