<?php
if (empty($_SESSION)) {
    header("location:?v=login");
}
include 'controllers/chatController.php'?>


<section class="sect2">
    <div class="">
<?php 
if(isset($receiver_arr['fname'])){?>
 <div class="marquee-div">
            <marquee behavior="" direction="right">
                You can start chatting with <strong> <?= $receiver_arr['fname'] ?></strong>
            </marquee>
        </div>
<?php } ?>

        <div id="allmessage" class="allmessage"> </div>
        <div class="textbox">

            <form action="" method="POST" id="msgform">
                <label class="textlabel">
                    <i class="fa-regular fa-face-smile"></i>

                    <input class="msgbox" type="text" name="message" placeholder="Message" id="message" value="">

                    <input type="text" name="receiver" id="receiver" hidden value="<?php if(isset($_GET['id'])){
                        echo $_GET['id'];
                    } ?>">

                    <button id="submit_message" type="submit" name="submit_message" value="submit_message"> <i class="fa-regular fa-paper-plane"></i>

                    </button>

                </label>
            </form>
        </div>
        <div class="getbox">

        </div>

    </div>
</section>
<?php include 'includes/script.js.php' ?>
</main>