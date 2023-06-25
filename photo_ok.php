<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <style>
    select option[data-image] {
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      padding-left: 40px; /* 調整圖像和文字之間的距離 */
    }

    /* 調整圖像大小 */
    #product-image img {
      max-width: 200px;
      max-height: 200px;
    }
    
  </style>
<title>B&amp;H 用戶保用登記</title>
	<script type="text/javascript">
		function updateProductOptions(select) {
			var selectedOption = select.options[select.selectedIndex];
			var imageSrc = selectedOption.getAttribute('data-image');
			var imageContainer = document.getElementById('product-image');
			if (imageSrc) {
				imageContainer.innerHTML = '<img src="' + imageSrc + '">';
			} else {
				imageContainer.innerHTML = '';
			}
			var productNameSelect = select.parentNode.nextElementSibling.querySelector('select');
			productNameSelect.innerHTML = '<option value="">請先選擇型號</option>';
			if (selectedOption.value === 'Water Filter') {
				productNameSelect.innerHTML += '<option value="Model A" data-image="uksspf_052023.jpg" >Model A</option>';
				productNameSelect.innerHTML += '<option value="Model B" data-image="ukssdf_052023.jpg" >Model B</option>';
			} else if (selectedOption.value === 'Water Dispenser') {
				productNameSelect.innerHTML += '<option value="Model C" data-image="uksspf_052023.jpg">Model C</option>';
				productNameSelect.innerHTML += '<option value="Model D" data-image="uksspf_052023.jpg">Model D</option>';
			}
		}
      
      function deleteProduct(button) {
  var row = button.parentNode.parentNode;
  var select = row.getElementsByTagName('select')[0];
  var option = select.options[select.selectedIndex];
  var imageSrc = option.getAttribute('data-image');
  if (imageSrc) {
    var images = document.querySelectorAll('img[src="' + imageSrc + '"]');
    for (var i = 0; i < images.length; i++) {
      images[i].parentNode.removeChild(images[i]);
    }
  }
  row.parentNode.removeChild(row);
}
     
	</script>
</head>
<body>
	<table>
		<tbody>
			<tr class="product">
				<td>
					<select name="products[1][category]" onchange="updateProductOptions(this)" required>
						<option value="">請選擇分類</option>
						<option value="Water Filter" >濾水器</option>
						<option value="Water Dispenser" >即熱水機</option>
						
					</select>
				</td>
				<td>
					<select name="products[1][name]" onchange="updateProductOptions(this)" required>
						<option value="">請先選擇型號</option>
					</select>
				</td>
				<td>
					<input type="number" name="products[1][price]" style="width: 30px;" required>
				</td>
				<td>
					<button type="button" onclick="deleteProduct(this)">刪除</button><span class="red">*</span>
				</td>
			</tr>
		</tbody>
	</table>
	<div id="product-image"></div>
</body>
</html>
