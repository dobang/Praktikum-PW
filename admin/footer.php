<div>
<?php 
//get current URL 
$url_share ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
?>
<style type="text/css">         
 .box->div{
  margin: 3px;
  margin-top: 0px;
  float: left;
 }         
</style>
<div class="box-">
 <div>
  <div>
 </div>
 </div>
 <div>
  <div class="fb-share-button" 
  data-href="<?php echo $url_share ?>" 
  data-layout="button_count">
 </div>
 </div>
 <div>
  <a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="nontonline"></a>
 </div>
 <div>          
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <div class="g-plus" data-action="share" data-annotation="bubble"></div>
 </div>
 <script>
 !function(d,s,id){
  var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
  if(!d.getElementById(id)){js=d.createElement(s);
   js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
   fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
 </script>
 
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=Hardiansyah17";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</div>

</div>
</body>
</html>