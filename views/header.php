<div class="menu">
  <div class="container">
    <div style="float:left">
      <a href="/"><img src="/img/logo-wit.png" alt="Logo Reinier"></a>
    </div>
    <div style="float:right">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/projects">Projects</a></li>
      <li><a href="/contact">Contact</a></li>
    </div>
  </div>
</div>
<!-- Responive menu-->
<div class="menuMobile">
  <div class="pull-left">
    <a href="index.php"><img src="/img/logo-wit.png" alt="Logo Reinier"></a>
  </div>
  <div class="pull-right">
    <i class="fas fa-bars" id="mobileMenuBtnOpen"></i>
  </div>
  <div class="overlayMenu">
    <div class="pull-right">
      <i class="far fa-times-circle" id="mobileMenuBtnClose"></i>
    </div><br><br>
    <div style="margin-top:15vh;">
  <a href="/"><img src="./img/logo-wit.png" alt="logo wit reinier" style=""></a>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="/contact">Contact</a></li>
  </div>
  <span class="overlay-footer-text">Reinier</span>
  </div>
</div>
<script type="text/javascript">
$('#mobileMenuBtnOpen, #mobileMenuBtnClose').on('click', function() {
  $(".overlayMenu").slideToggle("300");
});
</script>
