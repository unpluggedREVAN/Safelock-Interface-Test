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
    <form name="messageControl" id="messageControl" action="userconfig.php" >
      Time for Message Control: <select name="subject" id="subject">
          <option value="7" selected="selected">7 days</option>
          <option value="15" selected="selected">15 days</option>
          <option value="21" selected="selected">21 days</option>
          <option value="30" selected="selected">30 days</option>
          <option value="60" selected="selected">60 days</option>
          <option value="90" selected="selected">90 days</option>
          <option value="180" selected="selected">180 days</option>
      </select>
      <br> 
      <label for="emailMS">Write your e-mail so we can email you your SafeLock data:</label><br>
      <input type="text" id ="emailMS" name = "emailMS"><br> 
      <br>
      <input type="submit" value = "Submit">
      </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "changeIPuc" id = "changeIPuc">
      <label for="newIP">Change IP direction to:</label><br>
      <input type="text" id ="newIP" name = "newIP"><br> 
      <input type="submit" value = "Submit">
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <h1> Parental Control </h1>
    <button id="parentalControl"> Enabled</button> 
</div>

  <br>

  <div class="bodyUserC">
    <form name = "changeTheme" id = "changeTheme">
    <h2>Change Theme</h2>
        <input type="radio" id="default" name="changeTheme" value="default">
        <label for="default">Default</label><br>
        <input type="radio" id="lightMode" name="changeTheme" value="lightMode">
        <label for="lightMode">Light Mode</label><br>
        <input type="radio" id="darkMode" name="changeTheme" value="darkMode">
        <label for="darkMode">Dark Mode</label>
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "changeBackGround" id = "changeBackGround">
    <h2>Change BackGround</h2>
        <input type="radio" id="logos" name="changeBackGround" value="logos">
        <label for="Logos">Logos</label><br>
        <input type="radio" id="cuadrosR" name="changeBackGround" value="cuadrosR">
        <label for="cuadrosR">Squares</label><br>
        <input type="radio" id="cuadrosDel" name="changeBackGround" value="cuadrosDel">
        <label for="cuadrosDel">Squares and Lines</label>
    </form>
  </div>

  <br>

  <div class="bodyUserC">
    <form name = "ChangeTemper" id = "ChangeTemper">
    <h2>Change Temperature Unity</h2>
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