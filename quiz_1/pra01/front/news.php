<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
                    	                    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <h3>最多最新消息顯示區</h3>
	<hr>
	<div>
		<?php
		$total=${ucfirst($do)}->count();
		$now=$_GET['p']??1;
		$div=5;
		$pages=ceil($total/$div);
		$start=($now-1)*$div;
		$rows=${ucfirst($do)}->all(" limit $start,$div");
		
		?>
		<ol start="<?=$start+1?>">
			<?php
			foreach($rows as $row){
				echo "<li class='ssww'>";
				echo mb_substr($row['text'],0,25);
				echo "<span class='all' style='display:none'>{$row['text']}</span>";
				echo "<li>";
			?>
			<?php
			}
			?>
		</ol>
	</div>
	<div class="cent">
		<?php
		if($now-1>=1){
			$prev=$now-1;
			echo "<a href='?do=$do&p=$prev'><</a>";
		}
		for($i=1;$i<=$pages;$i++){
			$font=($i==$now)?"20px":"18px";
			echo "<a href='?do=$do&p=$i' style='font-size:$font'>$i</a>";
		}
		if($now+1<=$pages){
			$next=$now+1;
			echo "<a href='?do=$do&p=$next'>></a>";
		}
		?>
	</div>
</div>

<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
                    	<script>
						$(".sswww").hover(
							function ()
							{
								$("#alt").html("<pre>"+$(this).children(".all").html()+"</pre>").css({"top":$(this).offset().top-50})
								$("#alt").show()
							}
						)
						$(".sswww").mouseout(
							function()
							{
								$("#alt").hide()
							}
						)
                        </script>