 <table  width="350" border="0" align="center" id="products">
    <thead>
      <tr>
        <th>產品分類</th>
        <th>產品型號</th>
        <th>數量</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr class="product">
        <td>
          <select name="products[1][category]" onchange="updateProductOptions(this)" required>
            <option value="">請選擇分類</option>
            <option value="Water Filter" <?php if(isset($_POST['products'][1]['category']) && $_POST['products'][1]['category'] == 'Water Filter') echo 'selected'; ?>>濾水器</option>
            <option value="Water Dispenser" <?php if(isset($_POST['products'][1]['category']) && $_POST['products'][1]['category'] == 'Water Dispenser') echo 'selected'; ?>>即熱水機</option>
             <option value="Sterilizer" <?php if(isset($_POST['products'][1]['category']) && $_POST['products'][1]['category'] == 'Sterilizer') echo 'selected'; ?>>殺菌產品</option>
            <option value="Spa Filter" <?php if(isset($_POST['products'][1]['category']) && $_POST['products'][1]['category'] == 'Spa Filter') echo 'selected'; ?>>花灑沐浴</option>
            <option value="Ergonomics" <?php if(isset($_POST['products'][1]['category']) && $_POST['products'][1]['category'] == 'Ergonomics') echo 'selected'; ?>>人體工學</option>
          </select>
        </td>
        <td>
          <select name="products[1][name]" required>
            <option value="">請先選擇分類</option>
            <?php
        if(isset($_SESSION['products'][1]['category'])) {
            $category = $_SESSION['products'][1]['category'];
            // 根據分類顯示產品選項
            switch ($category) {
                case 'Water Filter':
                    echo '<option value="UKAB膠款" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKAB膠款' ? 'selected' : '') . '>UKAB膠款</option>';
                    echo '<option value="UKAD雙管膠款" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKAD雙管膠款' ? 'selected' : '') . '>UKAD雙管膠款</option>';
                    echo '<option value="UKAS膠款" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKAS膠款' ? 'selected' : '') . '>UKAS膠款</option>';
                    echo '<option value="UKSS磨沙鋼" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKSS磨沙鋼' ? 'selected' : '') . '>UKSS磨沙鋼</option>';
                    echo '<option value="UKSSB鋅底鋼" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKSSB鋅底鋼' ? 'selected' : '') . '>UKSSB鋅底鋼</option>';
                    echo '<option value="UKSSD雙管鋼" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKSSD雙管鋼' ? 'selected' : '') . '>UKSSD雙管鋼</option>';
                    echo '<option value="UKSSDF雙管磨沙鋼" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKSSDF雙管磨沙鋼' ? 'selected' : '') . '>UKSSDF雙管磨沙鋼</option>';
                    echo '<option value="UKSSPF磨沙鋼" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'UKSSPF磨沙鋼' ? 'selected' : '') . '>UKSSPF磨沙鋼</option>';
                    echo '<option value="EF100活水小天使" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'EF100活水小天使' ? 'selected' : '') . '>EF100活水小天使</option>';
                    echo '<option value="MW3活水健康師" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'MW3活水健康師' ? 'selected' : '') . '>MW3活水健康師</option>';
                break;
                case 'Water Dispenser':
                    echo '<option value="Maison 即熱水機" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Maison 即熱水機' ? 'selected' : '') . '>Maison 即熱水機</option>';
                    echo '<option value="Hydrogen+ 冷熱水機" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Hydrogen+ 冷熱水機' ? 'selected' : '') . '>Hydrogen+ 冷熱水機</option>';
                    break;
                case 'Sterilizer':
                    echo '<option value="智能活氧殺菌機" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == '智能活氧殺菌機' ? 'selected' : '') . '>智能活氧殺菌機</option>';
                    break;
                case 'Spa Filter':
                    echo '<option value="Crystal 香薰花灑" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Crystal 香薰花灑' ? 'selected' : '') . '>Crystal 香薰花灑</option>';
                    echo '<option value="美肌沐浴器" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == '美肌沐浴器' ? 'selected' : '') . '>美肌沐浴器</option>';
                    echo '<option value="美顏過濾器(第2代)" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == '美顏過濾器(第2代)' ? 'selected' : '') . '>美顏過濾器(第2代)</option>';
                break;
                case 'Ergonomics':
                    echo '<option value="Ergo 雙浮背墊(黑)" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Ergo 雙浮背墊(黑)' ? 'selected' : '') . '>Ergo 雙浮背墊(黑)</option>';
                    echo '<option value="Ergo 雙浮背墊(灰)" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Ergo 雙浮背墊(灰)' ? 'selected' : '') . '>Ergo 雙浮背墊(灰)</option>';
                    echo '<option value="Ergo 兒童背墊(粉紅)" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Ergo 兒童背墊(粉紅)' ? 'selected' : '') . '>Ergo 兒童背墊(粉紅)</option>';
                    echo '<option value="Ergo 兒童背墊(黑)" ' . (isset($_SESSION['products'][1]['name']) && $_SESSION['products'][1]['name'] == 'Ergo 兒童背墊(黑)' ? 'selected' : '') . '>Ergo 兒童背墊(黑)</option>';
                break;
                default:
                    // do nothing
            }
        }
    ?>
          </select>
        </td>
        <td>
          <input type="number" name="products[1][price]" style="width: 30px;" value="<?php echo isset($_SESSION['products'][1]['price']) ? $_SESSION['products'][1]['price'] : ''; ?>" required>
        </td>
        <td>
          <button type="button" onclick="deleteProduct(this)">刪除</button><span class="red">*</span>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4">
          <button type="button" onclick="addProduct()">添加產品</button>
        </td>
      </tr>
    </tfoot>
  </table>

var productOptions = {
  "Water Filter": ["UKAB膠款", "UKAD雙管膠款", "UKAS膠款","UKSS磨沙鋼",
                   "UKSSB鋅底鋼","UKSSD雙管鋼","UKSSDF雙管磨沙鋼","UKSSPF磨沙鋼",
                   "EF100活水小天使","MW3活水健康師"],
  "Water Dispenser": ["Maison 即熱水機", "Hydrogen+ 冷熱水機"],
  "Sterilizer": ["智能活氧殺菌機"],
  "Spa Filter": ["Crystal 香薰花灑","美肌沐浴器", "美顏過濾器(第2代)"],
  "Ergonomics": ["Ergo 雙浮背墊(黑)","Ergo 雙浮背墊(灰)", "Ergo 兒童背墊(粉紅)","Ergo 兒童背墊(黑)"],   
    
};

var productCount = 2;
var maxProductCount = 4;

function updateProductOptions(select) {
  var row = select.parentNode.parentNode;
  var categoryValue = select.value;
  var optionsSelect = row.querySelector("select[name$='[name]']");
  
  optionsSelect.innerHTML = "";
  
  if (categoryValue === "") {
    var defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = "請先選擇分類";
    optionsSelect.add(defaultOption);
  } else {
    var options = productOptions[categoryValue];
    for (var i = 0; i < options.length; i++) {
      var option = document.createElement("option");
      option.value = options[i];
      option.text = options[i];
      optionsSelect.add(option);
    }
  }
}

function addProduct() {
  if (productCount >= 4) {
    alert("客戶最多只能添加三項產品");
    return;
  }
  if (productCount >= maxProductCount) {
    return;
  }
  
  var tbody = document.querySelector("#products tbody");
  var newRow = tbody.insertRow();
  newRow.className = "product";
  
  var categoryCell = newRow.insertCell();
  var categorySelect = document.createElement("select");
  categorySelect.name = "products[" + productCount + "][category]";
  categorySelect.onchange = function() {
    updateProductOptions(categorySelect);
  };
  
  // 檢查第一行分類下拉式選單是否有選項
  var firstRowCategorySelect = document.querySelector("#products tbody tr:first-child select[name$='[category]']");
  if (firstRowCategorySelect.options.length > 0) {
    // 複製第一行分類下拉式選單的選項
    for (var i = 0; i < firstRowCategorySelect.options.length; i++) {
      var option = document.createElement("option");
      option.value = firstRowCategorySelect.options[i].value;
      option.text = firstRowCategorySelect.options[i].text;
      categorySelect.add(option);
    }
  } else {
    // 如果第一行分類下拉式選單沒有選項，顯示默認提示
    var defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = "請先選擇分類";
    categorySelect.add(defaultOption);
  }
  
  categoryCell.appendChild(categorySelect);
  
  var optionsCell = newRow.insertCell();
  var optionsSelect = document.createElement("select");
  optionsSelect.name = "products[" + productCount + "][name]";
  optionsSelect.required = true;
  optionsCell.appendChild(optionsSelect);
  
  var quantityCell = newRow.insertCell();
  var quantityInput = document.createElement("input");
  quantityInput.type = "number";
  quantityInput.name = "products[" + productCount + "][price]";
  quantityCell.appendChild(quantityInput);
  quantityInput.style.width = "30px";
  quantityInput.required = true;
  
  var deleteCell = newRow.insertCell();
  var deleteButton = document.createElement("button");
  deleteButton.type = "button";
  deleteButton.innerHTML = "刪除";
  deleteButton.onclick = function() {
    deleteProduct(deleteButton);
  };
  deleteCell.appendChild(deleteButton);
  
  updateProductOptions(categorySelect);
  
  productCount++;
}

function deleteProduct(button) {
  var row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
  productCount--;
}
