<style>
    .six-sec-ease-in-out {
    -webkit-transition: width 2s ease-in-out;
    -moz-transition: width 2s ease-in-out;
    -ms-transition: width 2s ease-in-out;
    -o-transition: width 2s ease-in-out;
    transition: width 2s ease-in-out;
}
    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap-progressbar.js"></script>
<meta http-equiv="refresh" content="2;url=index.php?action=viewDetail&id=<?php echo $_GET['id']; ?>" />
<script>
$(document).ready(function() {
    $('.progress .progress-bar').progressbar({display_text: 'fill'});
});
</script>

<div class="progress">
    <div class="progress-bar six-sec-ease-in-out" role="progressbar" data-transitiongoal="100"></div>
</div>