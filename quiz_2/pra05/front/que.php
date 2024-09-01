<fieldset>
    <legend>目前位置:首頁 > 最新文章區</legend>
    <table class="tab">
        <tr>
            <th>編號</tㄘ>
            <th width="60%">問卷題目</tㄘ>
            <th>投票總數</tㄘ>
            <th>結果</tㄘ>
            <th>狀態</tㄘ>
        </tr>
        <?php
        $ques=$Que->all(['subject_id'=>0]);
        foreach($ques as $idx=> $que){
        ?>
        <tr>
            <td class='ct'><?=$idx+1?></td>
            <td class='ct'><?=$que['text']?></td>
            <td class='ct'><?=$que['vote']?></td>
            <td class='ct'>
                <a href="?do=result&id=<?=$que['id']?>">結果</a>
            </td>
            <td class='ct'>
                <?php
                if(isset($_SESSION['user'])){
                    echo "<a href='?do=vote&id={$que['id']}'>我要投票<?a>";
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