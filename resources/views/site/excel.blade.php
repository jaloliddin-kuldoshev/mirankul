<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Export</title>
</head>
<body>
	<table>
		<tr>
			<td>№</td>
			<td>Наименование</td>
			<td>Единица измерения</td>
			<td>Количесвто</td>
			<td>Цена за единицу (сум)</td>
			<td>Общая сумма (сум)</td>
			<td>Общий вес (кг.)</td>
		</tr>
		@foreach ($products as $product)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$product['item']['title']}}</td>
			<td>Шт.</td>
			<td>{{$product['qty']}}</td>
			<td>{{$product['item']['price']}}</td>
			<td>{{$product['item']['price']*$product['qty']}}</td>
			<td>{{$product['item']['weight']*$product['qty']}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>