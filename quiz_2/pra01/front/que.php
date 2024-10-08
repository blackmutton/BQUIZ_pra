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
        $ques = $Que->all(['subject_id' => 0]);
        foreach ($ques as $idx => $que) {
        ?>
            <tr>
                <!-- 不直接用$row['id']的原因是資料可能會被刪減 -->
                <td class='ct'><?= $idx + 1 ?></td>
                <td><?= $que['text'] ?></td>
                <td class="ct"><?= $que['vote'] ?></td>
                <td class="ct">
                    <a href="?do=result&id=<?= $que['id'] ?>">結果</a>
                </td>
                <td class='ct'>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<a href='?do=vote&id={$que['id']}'>我要投票</a>";
                    } else {
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