# Проект [Блог сайт]

Это мой первый пробный проект, здесь я познавал CRUD и ООП в целом. Здесь я, к сожалению, не реализовал фабрики с сидерами и консольные команды.

В следующем проекте проведу работу над ошибками

## Установка

Чтобы установить и запустить проект, выполните следующие шаги:

1. Склонируйте репозиторий.
2. Установите все необходимые зависимости, выполнив команду **composer install**.
3. Скопируйте файл `.env.example` и переименуйте его в `.env`. Откройте .env и настройте соответствующие параметры подключения к базе данных и другие настройки приложения.
4. Создайте новый ключ приложения, выполнив команду **php artisan key:generate**.
5. Выполните миграции базы данных, выполнив команду **php artisan migrate**.
6. Запустите локальный сервер для тестирования проекта, выполните команду **php artisan serve**. По умолчанию проект будет доступен по адресу http://localhost:8000.

## Технологии и зависимости

В проекте использовались следующие технологии и зависимости:

- Laravel 10
- PHP 8.2
- Фронт я не писал сам, поэтому использовал Bootsatrap, прошу понять и простить

## Дополнительная информация

Это мой самый первый проект, тут нет многого + здесь я писал однометодные контроллеры, так как в некоторых компаниях это принято, как стандарт.
Ну и повторюсь, здесь я не использовал сиды и фабрики + нет консольных команд, всё это сделал в проекте **интернет магазин**
