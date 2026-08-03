<?php if (!isset($_GET['ajax'])): ?>
<!DOCTYPE html>
<html>
<body>
<?php endif; ?>

<table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top" style="color: #FFFFFF; text-shadow: #434343 1px 0 10px;"><h1>Сколько часов и минут</h1></td>
    </tr>
    <tr>
      <td class="middel">
        <div class="box">
          <div class="boxtitle">Введите количество минут</div>
		  <p align="center">Минуты: <input type="number" id="time1"> <input type="submit" value="Посчитать" id="calcBtn"></p>	  
        </div>
      </td>
    </tr>
	<tr>
      <td class="middel">
        <div class="box">
          <div class="boxtitle">Результат:</div> 
          <p align="center" style="font-size: 18px;">Итого: 660 часов, 0 минут</p>
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