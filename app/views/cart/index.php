<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Корзина товаров</title>
</head>
<body>
    <h1>Корзина товаров</h1>
<?php if(!empty($getProduct)): ?>

<?php foreach($product_session as $key=>$value): ?>
<?php $qty+=$value;?>
<?php endforeach ?>



  <table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Фото</th>
									<th class="column-2">Товар</th>
									<th class="column-3">Количество</th>
									<th class="column-4">Цена</th>
									<th class="column-5">Удалить</th>
								</tr>
					<?php foreach($getProduct as $key): ?>
									<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
									<?php echo $key['filename']."<br>";?>
										</div>
									</td>
									<td class="column-2"><?php echo $key['name']."<br>";?></td>
									<td class="column-3">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
									<?php echo $product_session[$key['id']] ?> 
										</div>
									</td>
									<td class="column-4"><?php echo $key['price']."<br>"." руб"?></td>
									<td class="column-5"><span style="cursor: pointer;" aria-hidden="true">Удалить</span></td>
								</tr>
<?php $summa = $product_session[$key['id']] * $key['price'] + $summa;
$_SESSION['summa'] = $summa;
 ?>
				    <?php endforeach ?>
					
 <p>Всего товаров: <?php echo $qty;
$_SESSION['sum'] = $qty;
 ?></p>
 
 </table>
 
 <hr>
 <?php print_r($getProduct) ?> <br>
 
 <?php print_r($product_session) ?> <br>
 <?php echo "Сумма ".$_SESSION['summa']." рублей"; ?> <br>
<h1 style="text-align:center">Оформление заказа </h1>



<form style="text-align:center" method="POST" action="/cart/index">
 <div class="form-group">
    <label for="">Введите имя</label>
    <input type="text" class="form-control" id="" placeholder="Введите имя" name="name">
  </div><br>
  <div class="form-group">
    <label for="">Введите номер телефона</label>
    <input type="text" class="form-control" id="" placeholder="Номер телефона" name="phone">
  </div><br>
  <div class="form-group">
    <label for="">Введите адрес</label>
    <input type="text" class="form-control" id="" placeholder="Адрес" name="address">
  </div>
  </div><br>
  <div class="form-group">
    <label for="">Способ доставки</label>
    <select class="form-control" id="" name="method_delivery">
      <option value="0">Самовывоз</option>
      <option value="1">Доставка</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="">Способ оплаты</label>
    <select class="form-control" id="" name="method_payment">
      <option value="0">Наличными</option>
      <option value="1">Картой</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="">Комментарий</label>
    <textarea class="form-control" id="" rows="3" name="comment"></textarea>
  </div><br>
  <input type="submit" value="Отправить" name="send">
</form>















 <?php else: ?>
 <p>Корзина пуста</p>
 <?php endif ?>
</body>
</html>