<section class="sect2">
    <div class="">
        <?php
        $receiver = $_GET['id'];
        $_SESSION['receiver'] = $receiver;
        $select_user = "SELECT * FROM tbl_users WHERE id = '$receiver'";

        $receiver_info = mysqli_query($con, $select_user);
        $receiver_arr = mysqli_fetch_assoc($receiver_info);

        ?>

        <div class="marquee-div">
            <marquee behavior="" direction="right">
                You can start chatting with <strong> <?= $receiver_arr['fname'] ?></strong>
            </marquee>
        </div>


        <div id="allmessage" class="allmessage"> </div>
        <div class="textbox">

            <form action="" method="post" id="msgform">
                <label class="textlabel">
                    <i class="fa-regular fa-face-smile"></i>

                    <input class="msgbox" type="text" name="message" placeholder="Message" id="message" value="">

                    <input type="text" name="receiver" id="receiver" hidden value="<?= $_GET['id']?>">

                    <button id="submit_message" type="submit" name="submit_message" value="submit_message"> <i class="fa-regular fa-paper-plane"></i>

                    </button>

                </label>
            </form>
        </div>
        <div class="getbox">

        </div>

    </div>
</section>
</main>