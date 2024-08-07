<fieldset>
    <legend>問卷名稱</legend>
    <div style="display:flex">
        <div class="clo" style="width:50%">問卷名稱</div>
        <div>
            <input type="text" name="subject" id="subject">
        </div>
    </div>
    <div id="options" class="clo">
        <div>
            選項 <input type="text" name="option">
            <button onclick="more()">更多</button>
        </div>
    </div>
    <div>
        <button onclick="send()">新增</button>
        <button onclick="clean()">清空</button>
    </div>
</fieldset>
<script>
    function more() {
        let opt = `
        選項 <input type="text" name="option">
        `
        $('#options').prepend(opt)
    }

    function send() {
        let options = new Array()
        $("input[name='option']").each((index, value) => {
            // console.log(index)
            // 0
            // console.log(value)
            // <input type="text" name="option">
            options.push($(value).val())
        })

        let que = {
            subject: $("#subject").val(),
            options
        }
        $.post("./api/que.php", que, (res) => {
            // console.log(res)
            alert("問卷已新增完成")
        })
    }
</script>