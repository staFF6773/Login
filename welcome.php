<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Example</title>
  <link rel="stylesheet" type="text/css" href="/css/welcome.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="header">
    <h1>Mi Dashboard</h1>
  </div>
  <div class="menu">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Ventas</a></li>
      <li><a href="#">Inventario</a></li>
      <li><a href="#">Clientes</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="content">
      <h2>Resumen de Ventas</h2>
      <p>Aquí puedes mostrar un resumen de las ventas recientes y métricas clave relacionadas con las ventas.</p>
      <canvas id="myChart" width="400" height="200"></canvas>
    </div>
    <div class="content">
      <h2>Tabla de Datos</h2>
      <table>
        <thead>
          <tr>
            <th>Producto</th>
            <th>Ventas</th>
            <th>Inventario</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Producto A</td>
            <td>100</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Producto B</td>
            <td>80</td>
            <td>30</td>
          </tr>
          <tr>
            <td>Producto C</td>
            <td>120</td>
            <td>60</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="content">
      <h2>Resumen de Clientes</h2>
      <p>Muestra métricas clave relacionadas con tus clientes.</p>
    </div>
    <div class="content">
      <h2>Notificaciones</h2>
      <ul>
        <li>Nueva venta realizada.</li>
        <li>Inventario bajo para el Producto A.</li>
        <li>Recordatorio de reunión con un cliente.</li>
      </ul>
    </div>
  </div>
  <script src="/js/welcome.js"></script>
</body>
</html>
