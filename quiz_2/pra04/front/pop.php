<div>
    目前位置: 首頁 > 人氣文章區
</div>
<table class="tab">
    <tr>
        <td width="30%">標題</td>
        <td width="50%">內容</td>
        <td>人氣</td>
    </tr>
    <?php
            $total=$News->count(['sh'=>1]);
            $div=5;
            $pages=ceil($total/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;
            $rows=$News->all(['sh'=>1]," order by `good` desc limit $start,$div");
            foreach($rows as $row){
            ?>
    <tr>
        <td class="pop"><?=$row['title']?></td>
        <td class="pop">
            <div class="short">
                <?=mb_substr($row['article'],0,30)?>...
            </div>
            <div class="alert">
                <div>
                    <?php
                    $type=['','健康新知',
'菸害防治',
'癌症防治',
'慢性病防治'];
echo $type[$row['type']];
                    ?>
                </div>
                <?=nl2br($row['article'])?>
            </div>
        </td>
        <td>
            <span class="num"><?=$row['good']?></span>個人說
            <img src="./icon/02B03.jpg" style="width:20px">
            <?php
            if(isset($_SESSION['user'])){
                $chk=$Log->count(['user'=>$_SESSION['user'],'news'=>$row['id']]);
                if($chk>0){
                    echo "<a href='#' class='good'data-user='{$_SESSION['user']}'data-news='{$row['id']}'>收回讚</a>";
                }else{
                    echo "<a href='#' class='good'data-user='{$_SESSION['user']}'data-news='{$row['id']}'>讚</a>";
                }
            }
            ?>
        </td>
    </tr>
    <?php
            }
            ?>
        </table>
        <div>
            <?php
            if($now-1>=1){
                $prev=$now-1;
                echo "<a href='?do=pop&p=$prev'><</a>";
            }
            for($i=1;$i<=$pages;$i++){
                $font=($i==$now)?"20px":"18px";
                echo "<a href='?do=pop&p=$i'style='font-size:$font'>$i</a>";
            }
            if($now+1>=$pages){
                $next=$now+1;
                echo "<a href='?do=pop&p=$next'>></a>";
            }
            ?>
        </div>
</table>
<script>
    $(".good").on("click",function(){
        let data={user:$(this).data("user"),news:$(this).data("news")}
        let num=$(this).siblings('.num').text()*1
        $.post("./api/good.php",data,function(){
            switch($(this).text()){
                case "讚":
                    $(this).text("收回讚")
                    $(this).siblings('.num').text(num+1)
                    break;
                case "收回讚":
                    $(this).text("讚")
                    $(this).siblings('.num').text(num-1)
                    break;
            }
        })
    })
    $("pop").hover{
        function(){
            $(this).parent().find('.alert').show()
        },function(){
            $(this).parent().find('.alert').hide()
        }
    }
</script>