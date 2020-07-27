<form method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="input_div">
        <div class="input">
            <input type="text" name="postTitle">
            <textarea name="postText" rows="10" cols="45"></textarea>
        </div>
        <div class="input_btn">
            <input type="submit" value="Add">
        </div>
    </div>
</form>
