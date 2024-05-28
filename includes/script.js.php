<script>
    // toogle sidebar jquery code
    $('#showhidesidebar').click(function() {
        $('#sidebar').slideToggle(500);
    });
</script>

<script>
    // asychronously send message to database ajax/jquery code //
    $(document).ready(function() {
        $('#msgform').submit(function(event) {
            event.preventDefault();
            let message = $('#message').val();
            let receiver = $('#receiver').val();
            document.getElementById('message').value = '';
            let submit_message = $('#submit_message').val();
            $(document).load('includes/asych-insert-message.php', {
                message: message,
                submit_message: submit_message,
                receiver: receiver,
            });
            document.getElementById("allmessage").scrollTo(0, document.getElementById("allmessage").scrollHeight);
        });
    });
</script>

<script>
    //asychronously  retrieve all sent message from database ajax/jquery code //
    $(document).ready(function() {
        setInterval(() => {
            document.getElementById("allmessage").scrollTo(0, document.getElementById("allmessage").scrollHeight);
            let receiver = $('#receiver').val();
            $('#allmessage').load('includes/asych-reload-message.php', {
                receiver: receiver,
            });

        }, 1000);
        

    });
</script>

<script>
    // asychronously reload the sidebar jquery/ajax code //
    setInterval(() => {
        let receiver = $('#receiver').val();

        $('#users').load('includes/reloadside.php', {
            receiver: receiver,
        });
    }, 1000);
</script>

<script>
    // asychronously reload the navbar jquery/ajax code //
    setInterval(() => {
        $('#activeusers').load('includes/reloadnav.php');
    }, 1000);
</script>

<script>
    // open and close profile update modal //

    let openbtn = document.getElementById('openprofilemodal');
    let closebtn = document.getElementById('closeprofilemodal');
    let modal = document.getElementById('profile_modal');

    function openmodal() {
        modal.setAttribute('open', 'true');
        openbtn.style.display = 'none';
        closebtn.style.display = 'flex';
    }

    function closemodal() {
        modal.removeAttribute('open');
        openbtn.style.display = 'flex';
        closebtn.style.display = 'none';
    }

    openbtn.addEventListener('click', openmodal);
    closebtn.addEventListener('click', closemodal);
</script>

<script>
    // previewing user profile picture brfore upload//;
    let userpicpreview = document.getElementById('userpicpreview');

    function previewprofilepic(event) {
        let src = URL.createObjectURL(event.target.files[0]);
        userpicpreview.src = src;
    }
</script>