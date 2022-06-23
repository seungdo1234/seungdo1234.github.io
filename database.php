<?php
$conn = mysqli_connet(
    'localhost',
    'root',
    'gh145236@@',
    'db',
    3331
);
$sql = "
INSERT INTO 과목
    (과목번호, 이름, 강의실)
    VALUES(
        'MYSQL','MYSQL is ..', NOW()
        )
";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
}

?>