<div>
    目前位置: 首頁 > 最新文章區
</div>

<table class="tab">
    <tr>
        <td width="30%">標題</td>
        <td width="50%">內容</td>
        <td></td>
    </tr>
    <?php
    $total=$News->count(['sh'=>1]);
    $div=5;
    $pages=ceil($total/$div);
    $now=$_GET['p']??1;
    $start=($now-1)*$div;
    $rows=$News->all(['sh'=>1]," limit $start,$div");
    foreach($rows as $row){
    ?>
    <tr>
        <td class="title"><?=$row['title']?></td>
        <td class="short"><?=mb_substr($row['article'],0,30)?></td>
        <td class="all" style="display:none"><?=nl2br($row['article'])?></td>
    </tr>
    <?php
    }
    ?>
</table>
<div>
<?php
if($now-1>0){
    $prev=$now-1;
    echo "<a href='?do=news&p=$prev'> < </a>";
}
for($i=1;$i<=$pages;$i++){
    $font=($_GET['p']==$i)??1;
    echo "<a href='?do=news&p=$i'style='font-size:$font'>$i</a>";
}
if($now+1<=$pages){
    $next=$now+1;
    echo "<a href='?do=news&p=$next'> > </a>";
}
?>
</div>
<script>
    $(".title").on("click",function(){
        $(this).next().children(".short,.all").toggle()
    })
</script>