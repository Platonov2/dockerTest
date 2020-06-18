var ws = new WebSocket("ws://localhost:1337/ws");
var d = new Date();
var n = d.toString();

/**
 * Получение метрики телеметрии из input'а, добавление к нему метки времени, и отправка на обработку в websocket
 */
(function() {
  document.querySelector('input').addEventListener('keydown', function(e) {
    if (e.keyCode === 13) {
      date = new Date();
      ws.send(date.getMonth().toString() + "_" + date.getDate().toString() + "_" + date.getHours().toString() + ":"
      + date.getMinutes().toString() + ":" + date.getSeconds().toString() + " " + e.target.value);

      e.target.value = "";
    }
  });
})();