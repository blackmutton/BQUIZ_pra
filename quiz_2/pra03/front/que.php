<fieldset>
    <legend>目前位置 : 首頁 > 問卷調查</legend>
        <tr>
            <th>編號</th>
            <th width="60%">問卷題目</th>
            <th>投票總數</th>
            <th>結果</th>
            <th>狀態</th>
        </tr>
        <?php
        $que=$Que->all(['subject_id'=>0]);
        foreach($que as $ids => $q){
        ?>
        <tr>
            <td><?=$ids+1?></td>
            <td><?=$q['text']?></td>
            <td><?=$q['vote']?></td>
            <td>
                <a href="?do=result&id=<?=$q['id']?>">結果</a>
            </td>
            <td>
                <?php
                if(isset($_SESSION['user'])){
                    echo "<a href='?do=vote&id={$q['id']}'>我要投票</a>";
                }else{
                    echo "請先登入";
                }
                ?>
            </td>
        </tr>
        <?php
        }
        ?>
</fieldset>