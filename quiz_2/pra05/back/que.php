<fieldset>
    <legend>新增問卷</legend>
    <div>
        <div style="width:50%">問卷名稱</div>
        <div style="width:50%"><input type="text" name="subject" id="subject"></div>
    </div>
    <div id="options" class="clo">
        選項<input type="text" name="option">
        <button onclick="more()">更多</button>
    </div>
    <div>
        <button onclick="send()">新增</button>
        <button onclick="clean()">清空</button>
    </div>
</fieldset>
<script>
    function more(){
        let opt=`
        <div>
            選項<input type="text" name="option">
        </div>
        `

        $("#options").prepend(opt);
    }
    function send(){
        let options=new array();
        $("input[name='option']").each((i,o)=>{
            options.push($(o).val())
        })
        $.post("./api/que.php",{subject:$("#subject").val(),options},()=>{
            alert("問卷已新增完畢")
        })
    }

</script>