<?php
  

header('Content-Type: text/html; charset=UTF-8');
session_start();
$_SESSION['first_name'] = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$_SESSION['last_name'] = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$_SESSION['tel1'] = isset($_POST['tel1']) ? $_POST['tel1'] : '';
$_SESSION['district'] = isset($_POST['district']) ? $_POST['district'] : '';
$_SESSION['address'] = isset($_POST['address']) ? $_POST['address'] : '';
$_SESSION['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$_SESSION['inv'] = isset($_POST['inv']) ? $_POST['inv'] : '';
$_SESSION['products'][1]['category'] = isset($_POST['products'][1]['category']) ? $_POST['products'][1]['category'] : '';
$_SESSION['products'][1]['name'] = isset($_POST['products'][1]['name']) ? $_POST['products'][1]['name'] : '';
$_SESSION['products'][1]['price'] = isset($_POST['products'][1]['price']) ? $_POST['products'][1]['price'] : '';

// 初始化性别选项的值
$gender = '';

// 检查表单是否已提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 获取性别选项的值
  $gender = $_POST['gender'];

  // 将性别选项的值存储到会话中
  $_SESSION['gender'] = $gender;
} elseif (isset($_SESSION['gender'])) {
  // 如果会话中已经存在性别选项的值，则使用会话中的值
  $gender = $_SESSION['gender'];
}

// 初始化购买地点的值
$areacode = '';

// 检查会话中是否存在上次选择的购买地点
if (isset($_SESSION['last_areacode'])) {
  $buy = $_SESSION['last_areacode'];
}

// 检查表单是否已提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 获取购买地点的值
  $areacode = $_POST['areacode'];

  // 将购买地点的值存储到会话中
  $_SESSION['last_areacode'] = $areacode;
}

// 初始化购买地点的值
$buy = '';

// 检查会话中是否存在上次选择的购买地点
if (isset($_SESSION['last_buy'])) {
  $buy = $_SESSION['last_buy'];
}

// 检查表单是否已提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 获取购买地点的值
  $buy = $_POST['buy'];

  // 将购买地点的值存储到会话中
  $_SESSION['last_buy'] = $buy;
}

// 初始化购买日期的值
$wdate = '';

// 检查会话中是否存在上次选择的购买日期
if (isset($_SESSION['last_wdate'])) {
  $wdate = $_SESSION['last_wdate'];
}

// 检查表单是否已提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 获取购买日期的值
  $wdate = $_POST['wdate'];

  // 将购买日期的值存储到会话中
  $_SESSION['last_wdate'] = $wdate;
}

?>



<?php
  echo '
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>B&amp;H 用戶保用登記</title>
<style type="text/css">
.red {
	color: #F00;
}
  .preview {
  max-width: 200px;
  max-height: 200px;
  display: block;
  margin: 0 auto;
  width: auto;
  height: auto;
}
  img {
  display: block;
  margin: 0 auto;
  max-height: 100px;
}
</style>
</head>';
  ?>

<body>
  <table align="center">
  <tr>
    <td><img src="/bh_logo_10052023.png" alt="company logo"></td>
 
  </tr>
</table>
  <form id="myForm" method="post" action="sms_v_v5_20062023_php.php"  enctype="multipart/form-data">
  <table width="327" border="0" align="center">
    <tr>
      <td><div align="center">
        <h2><strong>B&amp;H 用戶保用登記</strong></h2>
      </div></td>
    </tr>
  </table>
  <table width="327" border="0" align="center">
    <tr>
      <td width="89">名字：</td>
      <td width="228"><label for="first_name"></label>
        <input type="text" name="first_name" id="first_name" value="<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''; ?>"/>
        <span class="red">*</span></td>
    </tr>
  </table>
     <table width="327" border="0" align="center">
    <tr>
      <td width="89">姓氏：</td>
      <td width="228"><label for="last_name"></label>
       <input type="text" name="last_name" id="last_name" value="<?php echo isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''; ?>"/>
        <span class="red">*</span></td>
    </tr>
  </table>
  <table width="327" border="0" align="center">
    <tr>
      <td width="89">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;別：</td>
      <td width="228"><label for="gender"></label>
        <input name="gender" type="radio" id="gender" value="M"<?php if ($gender === 'M') { echo ' checked'; } ?> />
        <label for="Gender"></label>
先生
<input type="radio" name="gender" id="Gender" value="F"<?php if ($gender === 'F') { echo ' checked'; } ?> />
小姐
<label for="Gender"></label>
<span class="red">*</span></td>
    </tr>
  </table>
  <table width="327" border="0" align="center">
    <tr>
      <td width="89">區&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;號：</td>
      <td width="228"><label for="areacode"></label>
        <select name="areacode" id="areacode">
          <option value="" selected="selected" <?php echo !isset($_SESSION["last_area_code"]) ? 'selected' : ''; ?>>請選擇</option>
          <option value="852" <?php if ($areacode === '852') { echo ' selected'; } ?>>香港+852</option>
          <option value="853" <?php if ($areacode === '853') { echo ' selected'; } ?>>澳門+853</option>
          <option value="86"  <?php if ($areacode === '86') { echo ' selected'; } ?>>中國+86</option>
        </select>
        <span class="red">*</span></td>
    </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td width="89">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;話：</td>
      <td width="228"><label for="tel1"></label>
        <input type="text" name="tel1" id="tel1" placeholder="請填寫手提電話號碼" value="<?php echo isset($_SESSION['tel1']) ? $_SESSION['tel1'] : ''; ?>"/>
        <span class="red">*</span></td>
    </tr>
  </table>
   <table width="327" border="0" align="center">
    <tr>
    <td width="89">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;區：</td>
      <td width="228"><label for="district"></label>
        <input type="text" name="district" id="district" placeholder="例如：上環、沙田" value="<?php echo isset($_SESSION['district']) ? $_SESSION['district'] : ''; ?>"/>
      <span class="red">*</span></td>
      
    </tr>
  </table>
  <table width="327" border="0" align="center">
    <tr>
    <td width="89">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
      <td width="228"><label for="address"></label>
        <input type="text" name="address" id="address" value="<?php echo isset($_SESSION['address']) ? $_SESSION['address'] : ''; ?>"/></td>
    </tr>
  </table>
  <table width="327" border="0" align="center">
    <tr>
      <td width="89">電&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;郵：</td>
      <td width="228"><label for="email"></label>
        <input type="text" name="email" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"/>
      <span class="red">*</span></td>
      </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td height="29" colspan="4" align="center"><hr align="center" style="width:321px; background:#999; height:1px" /></td>
    </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td><div align="center">
        <h2><strong>產品資料</strong></h2>
      </div></td>
    </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td width="89">購買地點：</td>
      <td width="228">
        <select name="buy" id="buy" required>
          <option value="" selected disabled>請選擇購買地點</option>
          <option value="上環永安"<?php if ($buy === '上環永安') { echo ' selected'; } ?>>上環永安</option>
          <option value="油麻地永安"<?php if ($buy === '油麻地永安') { echo ' selected'; } ?>>油麻地永安</option>
          <option value="尖沙咀永安"<?php if ($buy === '尖沙咀永安') { echo ' selected'; } ?>>尖沙咀永安</option>
          <option value="沙田一田"<?php if ($buy === '沙田一田') { echo ' selected'; } ?>>沙田一田</option>
          <option value="大埔一田"<?php if ($buy === '大埔一田') { echo ' selected'; } ?>>大埔一田</option>
          <option value="荃灣一田"<?php if ($buy === '荃灣一田') { echo ' selected'; } ?>>荃灣一田</option>
          <option value="葵芳一田"<?php if ($buy === '葵芳一田') { echo ' selected'; } ?>>葵芳一田</option>
          <option value="屯門一田"<?php if ($buy === '屯門一田') { echo ' selected'; } ?>>屯門一田</option>
          <option value="將軍澳一田"<?php if ($buy === '將軍澳一田') { echo ' selected'; } ?>>將軍澳一田</option>
          <option value="HKTV"<?php if ($buy === 'HKTV') { echo ' selected'; } ?>>HKTV</option>
          <option value="展覽會"<?php if ($buy === '展覽會') { echo ' selected'; } ?>>展覽會</option>
        </select>
        <span class="red">*</span>
      </td>
    </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td width="89">購買日期：</td>
      <td width="227"><label for="wdate"></label>
         <input type="date" name='wdate' id="wdate" value="<?php echo $wdate; ?>"> 
        <span class="red">*</span></td>
    </tr>
  </table>
    <table width="327" border="0" align="center">
    <tr>
      <td width="89">發票編號：</td>
      <td width="228"><label for="inv"></label>
        <input type="text" name="inv" id="inv" value="<?php echo isset($_SESSION['inv']) ? $_SESSION['inv'] : ''; ?>"/>
        <span class="red">*</span></td>
    </tr>
  </table>
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
    <table width="327" border="0" align="center">
    <tr>
      <td><div align="center">
        <h2><strong>上傳發票相片</strong></h2>
      </div></td>
    </tr>
  </table>
     
   <table align="center">
     <tr>
       <td>
    <div>

     <div id="image-container">
    <div class="image">
      <input type="file" name="images[]" onchange="previewImage(event)">
      <button type="button" onclick="removeImage(event)">刪除相片</button>
      <img class="preview">
    </div>
  </div>
  <button type="button" onclick="addImage()">添加相片</button>
</div>
  </td>
      </tr>
  </table>
   <table width="327" border="0" align="center">
    <tr>
      <td width="89">驗認碼：</td>
        <td><input type="text" name="code" id="code" size="10"/>
          <span class="red">*</span>
       
      </td>
      <td><button type="button" id="sendCodeBtn" onclick="sendVerificationCode()">發送驗證碼</button></td>
     </tr>
  </table>
<table width="327" border="0" align="center">
  <tr>
     <td> 
     <?php if (isset($error_message)) { ?>
      <p style="color: red; display: inline;"><?php echo $error_message; ?></p>
    <?php } ?>
     </td>
    </tr>
    </table>
    <table width="327" border="0" align="center">
  <tr>
    <td>
      <label>
        <input type="checkbox" name="agree" value="1" required>
        我已閱讀並同意<a href="privacy_policy.html" target="_blank">隱私政策</a>
      </label>
    </td>
  </tr>
</table>
     <table width="327" border="0" align="center">
    <tr>
     <td colspan="3" style="text-align:center;"><button type="button" onclick="validateForm()">提交保養</button></td>
    </tr>
  </table>
 </form>
  
    

 <script>
   

function validateForm() {
  

  var first_name = document.getElementById("first_name").value;
  var last_name = document.getElementById("last_name").value;
  var gender = document.getElementsByName("gender");
  var areacode = document.getElementById("areacode").value;
  var tel1 = document.getElementById("tel1").value;
  var district = document.getElementById("district").value;
  var email = document.getElementById("email").value;
  var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var inv = document.getElementById("inv").value;
  var wdate = document.getElementById("wdate").value;
  var buy = document.getElementById("buy").value;
  var code = document.getElementById("code").value;
  
  if (first_name == "") {
    alert("請填寫名字！");
    return false;
  }
   if (last_name == "") {
    alert("請填寫姓氏！");
    return false;
  }
  if (!gender[0].checked && !gender[1].checked) {
    alert("請填寫性別！");
    return false;
  }
  if (areacode == "") {
    alert("請填寫區號！");
    return false;
  }
  if (tel1 == "") {
    alert("請填寫手提電話號碼！");
    return false;
  }
  if (district == "") {
    alert("請填寫地區！");
    return false;
  }
  if (email == "") {
    alert("請填寫電郵！");
    return false;
  }
  if (!email.match(emailFormat)) {
    alert("填寫電郵格式無效！");
    return false;
  }
  if (buy == "") {
    alert("請填寫購買地點！");
    return false;
  }
  if (wdate == "") {
    alert("請填寫日期！");
    return false;
  }
  if (inv == "") {
    alert("請填寫發票編號！");
    return false;
  }
     
    var isValid = true;
  var selectList = document.querySelectorAll("select");
  var inputList = document.querySelectorAll("input[type=number]");

  // 检查下拉式选单是否都有选择
  for (var i = 0; i < selectList.length; i++) {
    if (selectList[i].value === "") {
      isValid = false;
      break;
    }
  }

  // 检查数量输入框是否都有填写
  for (var j = 0; j < inputList.length; j++) {
    if (inputList[j].value === "") {
      isValid = false;
      break;
    }
  }

  if (!isValid) {
    alert("請選擇產品分類，再選擇產品及填寫數量！\n如新增了未被使用的產品分類，請刪除！");
    return false;
  }
  
  if (code == "") {
    alert("請填寫驗證碼！");
    return false;
  }
 
  if (!document.querySelector('input[name="agree"]:checked')) {
  alert("請先同意隱私政策！");
  return false;
}
  


  // 验证表单完整性通过后，提交表单
  document.getElementById("myForm").submit();

  return true;
}
   
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
   
  function previewImage(event) {
  var input = event.target;
  var file = input.files[0];
  
  // 檢查檔案格式是否為 JPG、PNG、或 BMP
  if (!/^image\/(jpeg|png|bmp)$/.test(file.type)) {
    alert('只支援 JPG、PNG、或 BMP 格式的圖片檔案');
    return;
  }
    
    // 檢查圖片大小是否超過 2 MB
  if (file.size > 2097152) {
    alert('所選圖片太大，請選擇小於 2 MB 的圖片');
    input.value = ''; // 清空輸入框的內容，防止用戶繼續選擇過大的圖片
    return;
  }
  
  var reader = new FileReader();
  reader.onload = function() {
    var img = input.parentNode.querySelector('.preview');
    img.src = reader.result;
  };
  reader.readAsDataURL(file);
}

    function addImage() {
      var container = document.getElementById('image-container');
      var imageCount = container.querySelectorAll('.image').length;
  if (imageCount >= 2) {
    alert('最多只能上传 2 张图片');
    return;
  }
      
      
      var div = document.createElement('div');
      div.classList.add('image');

      var input = document.createElement('input');
      input.type = 'file';
      input.name = 'images[]';
      input.onchange = function(event) {
        var file = event.target.files[0];
        // 檢查檔案格式是否為 JPG、PNG 或 BMP
        if (!/^image\/(jpeg|png|bmp)$/.test(file.type)) {
          alert('只支援 JPG、PNG、或 BMP 格式的圖片檔案');
          input.value = ''; // 清空輸入框的內容，防止用戶繼續上傳不合法的檔案
          return;
        }
        previewImage(event);
      };
      div.appendChild(input);

      var button = document.createElement('button');
      button.type = 'button';
      button.textContent = '刪除相片';
      button.onclick = function(event) {
        var div = event.target.parentNode;
        div.parentNode.removeChild(div);
      };
      div.appendChild(button);

      var img = document.createElement('img');
      img.classList.add('preview');
      div.appendChild(img);

      container.appendChild(div);
    }


  function removeImage(event) {
    var div = event.target.parentNode;
    div.parentNode.removeChild(div);
  }
   
    function sendVerificationCode() {
      // 獲取用戶填寫的手機號碼
      var areacode = document.getElementById("areacode").value;
      var tel1 = document.getElementById("tel1").value;
      var phone = areacode + tel1;

      // 檢查手機號碼是否合法
      if (!phone.match(/^\d{11}$/)) {
        alert("手機號碼格式不正確");
        return;
      }

      // 發送請求
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
          if (xhr.status=== 200) {
            if (xhr.responseText === "success") {
              alert("驗證碼已發送，請注意查收");
            } else {
              alert("發送驗證碼失敗，請稍後再試");
            }
          } else {
            alert("網絡錯誤，請稍後再試");
          }
        }
      };
      xhr.open("GET", "send_code_v3.php?phone=" + phone, true);
      xhr.send();
    }
</script>
</body>

