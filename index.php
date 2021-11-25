<?php
if(!file_exists('./data/profile.csv')){
    header('Location: ./page_initialize.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="css/common.css" type="text/css" charset="utf-8" rel="stylesheet"/>
<link href="css/list_page.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <div id="topbar">
        <div id="logo"><img src="img/toplogo.png" alt="Logo"/></div>
    </div>
</header>
<main>
    <ul>
        <li>
            <div class="basic_name">
                <a href="page_html_list.php">HTMLリスト</a>
            </div>
        </li>
        <li>
            <div class="basic_name">
                <a href="page_img_list.php?pattern=img_edit">画像リスト</a>
            </div>
        </li>
    </ul>
</main>
</body>
</html>