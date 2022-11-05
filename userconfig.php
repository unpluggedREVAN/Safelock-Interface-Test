<?php 
/*
*	SafeLock: Firewall and AdBlocker
*   Powered by OpenLock
*   https://openlocksecurity.com/
*
*  This file is copyright under the Costa Rica Intellectual Property office.
*/
    require "scripts/pi-hole/php/header.php";
?>

<div id="principalUC">
    
  <div class="bodyUserC">
    <form name="messageControl" id="messageControl" action="userconfig.php">
      Control de Mensajería: <select name="subject" id="subject">
          <option value="7" selected="selected">7 días</option>
          <option value="15" selected="selected">15 días</option>
          <option value="21" selected="selected">21 días</option>
          <option value="30" selected="selected">30 días</option>
          <option value="60" selected="selected">60 días</option>
          <option value="90" selected="selected">90 días</option>
          <option value="180" selected="selected">180 días</option>
      </select>
      <br> 
      <input type="submit" value = "Confirmar">
      </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "changeIPuc" id = "changeIPuc">
      <label for="newIP">Cambiar IP a:</label><br>
      <input type="text" id ="newIP" name = "newIP"><br> 
      <input type="submit" value = "Confirmar">
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <h1> Control Parental </h1>
    <button id="parentalControl"> Enabled</button> 
</div>

  <br>

  <div class="bodyUserC">
    <form name = "changeTheme" id = "changeTheme">
    <h2>Cambiar Tema</h2>
        <input type="radio" id="default" name="changeTheme" value="default">
        <label for="default">Default</label><br>
        <input type="radio" id="modoClaro" name="changeTheme" value="modoClaro">
        <label for="modoClaro">Modo Claro</label><br>
        <input type="radio" id="modoOscuro" name="changeTheme" value="modoOscuro">
        <label for="modoOscuro">Modo Oscuro</label>
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "changeBackGround" id = "changeBackGround">
    <h2>Cambiar Fondo</h2>
        <input type="radio" id="logos" name="changeBackGround" value="logos">
        <label for="Logos">Logos</label><br>
        <input type="radio" id="cuadrosR" name="changeBackGround" value="cuadrosR">
        <label for="cuadrosR">Cuadros</label><br>
        <input type="radio" id="cuadrosDel" name="changeBackGround" value="cuadrosDel">
        <label for="cuadrosDel">Cuadros Delineados</label>
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "ChangeTemper" id = "ChangeTemper">
    <h2>Cambiar Unidad de Temperatura</h2>
        <input type="radio" id="celc" name="ChangeTemper" value="celc">
        <label for="celc">Celcious</label><br>
        <input type="radio" id="farh" name="ChangeTemper" value="farh">
        <label for="farh">Farenheit</label><br>
    </form>
  </div>

  <br>

</div>


<?php
    require "scripts/pi-hole/php/footer.php";
?>