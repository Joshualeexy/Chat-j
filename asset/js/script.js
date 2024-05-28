// toogle sidebar jquery code
$('#showhidesidebar').click(function () {
  $('#sidebar').slideToggle(500);
});



// open and close profile update modal //

        let openbtn = document.getElementById('openprofilemodal');
        let closebtn = document.getElementById('closeprofilemodal');
        let modal = document.getElementById('profile_modal');

        function openmodal() {
          modal.setAttribute('open','true');
          openbtn.style.display='none';
          closebtn.style.display='flex';
        }   
        
        function closemodal() {
          modal.removeAttribute('open');
          openbtn.style.display='flex';
          closebtn.style.display='none';
        }

        openbtn.addEventListener('click',openmodal);
        closebtn.addEventListener('click',closemodal);


        // previewing user profile picture brfore upload//;
        let userpicpreview = document.getElementById('userpicpreview');

        function previewprofilepic(event) {
          let src = URL.createObjectURL(event.target.files[0]);
          userpicpreview.src = src;

        }
       