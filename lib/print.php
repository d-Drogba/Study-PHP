<?php 
function print_title() {
    if (isset($_GET['id'])) {   // id 값이 있다면...
        echo htmlspecialchars($_GET['id']);
    } else {    // id 값이 없다면...
        echo "Welcome ^m^";
    }
}

function print_list() {
    $list = scandir('./data');
    $i = 0;
    
    while($i < count($list)) {
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != '.') {
            if($list[$i] != '..') {
                echo "<li><a
                href=\"index.php?id=$title\">$title
                </a></li>\n";    
            }
        }
        $i = $i + 1;
    }
}

function print_description() {
    if (isset($_GET['id'])){
        $basename = basename($_GET['id']);
        echo htmlspecialchars(file_get_contents("data/".$basename));
        // 보안에 있어서 문제가 상당히 많음...
        // 실제 애플리케이션에서는 절대 사용하면 안됨!
    } else {
        echo "PHP로 만든 웹페이지입니다.";
    }
}
?>
