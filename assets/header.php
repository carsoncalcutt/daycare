<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='icon' href='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M256 224c-79.37 0-191.1 122.7-191.1 200.2C64.02 459.1 90.76 480 135.8 480C184.6 480 216.9 454.9 256 454.9C295.5 454.9 327.9 480 376.2 480c44.1 0 71.74-20.88 71.74-55.75C447.1 346.8 335.4 224 256 224zM108.8 211.4c-10.37-34.62-42.5-57.12-71.62-50.12S-7.104 202 3.27 236.6C13.64 271.3 45.77 293.8 74.89 286.8S119.1 246 108.8 211.4zM193.5 190.6c30.87-8.125 46.37-49.1 34.5-93.37s-46.5-71.1-77.49-63.87c-30.87 8.125-46.37 49.1-34.5 93.37C127.9 170.1 162.5 198.8 193.5 190.6zM474.9 161.3c-29.12-6.1-61.25 15.5-71.62 50.12c-10.37 34.63 4.75 68.37 33.87 75.37c29.12 6.1 61.12-15.5 71.62-50.12C519.1 202 503.1 168.3 474.9 161.3zM318.5 190.6c30.1 8.125 65.62-20.5 77.49-63.87c11.87-43.37-3.625-85.25-34.5-93.37c-30.1-8.125-65.62 20.5-77.49 63.87C272.1 140.6 287.6 182.5 318.5 190.6z"/></svg>'>
<link rel='stylesheet' href='/css/bootstrap.min.css'>
<script type='text/javascript' src='/js/jquery.min.js'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
<?php $mainStylesheetTimestamp=filemtime('css/main.css'); ?>
<link rel='stylesheet' href='<?php echo "/css/main.css?v=" . $mainStylesheetTimestamp; ?>'>
<script type='text/javascript'>
  function hideLoader() {
    $('#loading').hide();
  }
  function loadIncompleteFormAlert(id){
    $.ajax({
      url:'/assets/incomplete-form-alert.php',
      type:'POST',
      cache:false,
      data:{},
      success:function(data){
        if (data) {
          $(id+' .alert').remove();
          $(id).prepend(data);
        }
      }
    });
  }
  $(window).ready(hideLoader);
</script>
