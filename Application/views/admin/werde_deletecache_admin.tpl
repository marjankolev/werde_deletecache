<p>To Delete Cache from the shop and empty the '/tmp' folder, click on the 'Delete Cache' button</p>
<form action="[{$oViewConf->getSelfLink()}]" method="post" enctype="multipart/form-data">
	<input type="hidden" name="fnc" value="clearShopTmp"/>
	<input type="hidden" name="cl" value="werde_deletecache"/> 
	Delete Cache: <input type="submit" value="Delete Cache" name="submit"><br>
</form>
