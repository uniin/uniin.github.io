<?php if (!isset($_GET['ajax'])): ?>
<!DOCTYPE html>
<html>
<body>
<?php endif; ?>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top" style="color: #FFFFFF; text-shadow: #434343 1px 0 10px;"><h1>Сколько прошло времени</h1></td>
    </tr>
    <tr>
      <td class="middel">
        <div class="box">
          <div class="boxtitle">Выберите дату, время начала и окончания</div>
		  <p align="center">Дата начала: <input type="date" id="date1" min="0000-01-01" max="9999-12-31"> Время начала: <input type="time" id="time1"> Дата окончания: <input type="date" id="date2" min="0000-01-01" max="9999-12-31"> Время окончания: <input type="time" id="time2"> <input type="submit" value="Посчитать" id="calcBtn"></p>	  
        </div>
      </td>
    </tr>
	<tr>
      <td class="middel">
        <div class="box">
          <div class="boxtitle">Результат:</div> 
          <p align="center"; style="font-size: 18px;">Прошло: 660 часов, 0 минут<br>39600 минут<br><input type="submit" value="Сбросить" id="calcReset"></p>
          <link><a href="https://t.me/uniin" target="_blank">Тех. администратор</a><link>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<?php if (!isset($_GET['ajax'])): ?>
</body>
</html>
<?php endif; ?>