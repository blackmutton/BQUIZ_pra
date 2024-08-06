<fieldset>
    <legend>最新文章管理</legend>
    <form action="./api/edit_news.php" method="post">
        <table class="tab">
            <tr>
                <th>編號</th>
                <th width="60%">標題</th>
                <th>顯示</th>
                <th>刪除</th>
            </tr>
            <?php
            $total=$News->count();
            $div=3;
            $pages=ceil($total/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;
            $rows=$News->all(" limit $start,$div");
            foreach($rows as $idx=>$row){
            // dd($rows);
//                 Array
// (
//     [0] => Array
//         (
//             [id] => 1
//             [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
//             [article] => ""
//             [type] => 1
//             [sh] => 1
//             [good] => 10
//         )

//     [1] => Array
//         (
//             [id] => 2
//             [title] => 菸害防治法規
//             [article] => ""

//             [type] => 2
//             [sh] => 1
//             [good] => 10
//         )

//     [2] => Array
//         (
//             [id] => 3
//             [title] => 降低罹癌風險 建構健康生活型態
//             [article] => ""
//             [type] => 3
//             [sh] => 1
//             [good] => 10
//         )

// )
// Array
// (
//     [0] => Array
//         (
//             [id] => 4
//             [title] => 長期憋尿 泌尿系統問題多
//             [article] => ""
//             [type] => 4
//             [sh] => 1
//             [good] => 5
//         )

//     [1] => Array
//         (
//             [id] => 5
//             [title] => 缺乏運動已成為影響全球死亡率的第四大危險因子
//             [article] => ""
//             [type] => 1
//             [sh] => 1
//             [good] => 10
//         )

//     [2] => Array
//         (
//             [id] => 6
//             [title] => 菸害防治法規
//             [article] => ""
//             [type] => 2
//             [sh] => 1
//             [good] => 10
//         )

// )

            ?>
            <tr>
                <!-- 不直接用$row['id']的原因是資料可能會被刪減 -->
                <td><?=$start+$idx+1?></td>
                <td><?=$row['title']?></td>
                <td><input type="checkbox" name="sh[]" value="<?=$row['id']?>"<?=($row['sh']==1)?"checked":"";?>></td>
                <td><input type="checkbox" name="del[]" value="<?=$row['id']?>"></td>
                <td><input type="hidden" name="id[]" value="<?=$row['id']?>"></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div class="ct">
            <?php
            if($now-1>0){
                $prev=$now-1;
                echo "<a href='?do=news&p=$prev'>< </a>";

            }
            for($i=1;$i<=$pages;$i++){
                $font=($i==$now)?'20px':'16px';
                echo "<a href=?do=news&p=$i style='font-size:$font'>$i</a>";
            }
            if($now+1<=$pages){
                $next=$now+1;
                echo "<a href='?do=news&p=$next'>></a>";

            }
            ?>
        </div>
        <div class="ct"><input type="submit" value="確定修改"></div>
    </form>
</fieldset>