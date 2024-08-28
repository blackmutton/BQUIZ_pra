<fieldset>
    <legend>目前位置:首頁 > 最新文章區</legend>
        <table class="tab">
            <tr>
                <th>編號</th>
                <th width="60%">問卷題目</th>
                <th>投票總數</th>
                <th>結果</th>
                <th>狀態</th>
            </tr>
            <?php
            $ques=$Que->all(['subject_id'=>0]);
            foreach($ques as $idx=>$que){
            ?>
            <tr>
                <td><?=$idx+1?></td>
                <td><?=$que['text']?></td>
                <td><?=$que['vote']?></td>
                <td>
                    <a href="?do=result&id=<?=$que['id']?>"></a>
                </td>
                <td>
                    <?php
                    if(isset($_SESSION['user'])){
                        echo "<a href='?do=vote&id={$que['id']}'>我要投票</a>";
                    }else{
                        echo "請先登入";
                    }
                    ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
</fieldset>