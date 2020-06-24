<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Структура директорий
-------------------

      assets/             ассеты
      commands/           консольные комманды
      config/             конфигурация приложения
      models/             модели приложения
      
      modules/
        /api              модуль взаимодействия через rest api
        /telemetry        модуль отображения телеметрии
        /websocket        модуль взаимодействия через websocket
      
      runtime/            файлы, генерируемые runtime
      tests/              тесты
      vendor/             поставщики пакетов
      views/              основные view
      web/                web ресурсы



Требования
------------

Минимальная версия PHP - 5.6.0.


Установка
------------

### Установка через docker

Обновление подключенных библиотек

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install    
    
Запуск контейнера

    docker-compose up -d
    
Запуск websocket'а

    docker-compose exec php bash
    ./yii /websocket/ws/run

Доступ к приложению осуществляется по ссылке:

    http://localhost:8500/

### Реолизованные возможности

Добавление записей телеметрии:

rest api : http://localhost:8500/api/telemetry/add. Отправка json вида {"data" : "Значение телеметрии"} через метод post;

websocket: http://localhost:8500/websocket/ws-telemetry/add;
    


Просмотр записей телеметрии:

rest api     : http://localhost:8500/api/telemetry/.   Получение всего списка данных телеметрии.

rest api     : http://localhost:8500/api/telemetry/id. Получение информации по записи с id = Интересующий номер.

Веб-интерфейс: http://localhost:8500/telemetry/show/.  Вывод всего списка данных телеметрии. 

websocket: http://localhost:8500/websocket/ws-telemetry/get.  Вывод всего списка данных телеметрии. 
