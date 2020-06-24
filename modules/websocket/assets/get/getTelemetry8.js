var ws = new WebSocket("ws://localhost:1337/ws");

/**
 * Получение метрики телеметрии из input'а, добавление к нему метки времени, и отправка на обработку в websocket
 */
(function() {
  document.querySelector('input').addEventListener('keydown', function(e) {
    if (e.keyCode === 13) {
      date = new Date();

      let telemetryData = {
        action : 'Get',
        id : e.target.value
      };

      let json = JSON.stringify(telemetryData);

      ws.send(json);

      e.target.value = "";
    }
  });
})();

ws.onmessage = function (event) {
    data = JSON.parse(event.data);

    document.querySelector('p').innerHTML = data["data"];
  }