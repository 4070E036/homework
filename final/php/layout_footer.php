<!-- 版尾開始 -->
<div class="footerArea">
	<div class="footer">
		<li class="footer-L">
			TOYOTA汽車公司台南永康營業所 南都豐田 北台南營業所 © 2014 All Rights Reserved.<br>
			地址：台南市永康區中正南路２１４號<br>
			電話：06-2537866<br>
			營業時間：08:30~21:00<br>
			客服專線 0800221345、(02)5599-7299
		</li><!-- footer-L End -->
		<li class="footer-R">
			<a title="PHP全能網頁設計師" href="./"><img src="images/8.PNG"></a>
		</li><!-- footer-R End -->
	</div><!-- footer End -->
</div><!-- footerArea End -->
<!-- 版尾結束 -->

<!-- 置頂圖片開始 -->
<div id="totop">
	<img title="To Top" src="images/totop.png">
</div><!-- totop End -->
<!-- 置頂圖片結束 -->

<!-- 全屏背景 -->
<div id="MsgBg"></div>

<!-- 訊息視窗 -->
<div id="MsgAlert">
	<div class="MsgArea">
		<li class="tit">系統訊息確認視窗</li><img src="images/alert.png" class="imgs">
		<li class="msg"><span class="MsgTxt"></span></li>
		<li class="btn">
			<a class="btnYes" onclick="MsgAlertOff();">確定<span class="MsgTxtBtn"></span></a>
		</li>
	</div>
</div>

<div id="MsgYesNo">
	<div class="MsgArea">
		<li class="tit">系統訊息確認視窗</li><img src="images/alert.png" class="imgs">
		<li class="msg"><span class="MsgTxt"></span></li>
		<li class="btn">
			<a class="btnYes" onclick="MsgYesNoOff();">確定<span class="MsgTxtBtnY"></span></a>
			<a class="btnNo" onclick="MsgYesNoOff();">取消<span class="MsgTxtBtnN"></span></a>
		</li>
	</div>
</div>

</body>

<script>
function alertDel(id) {
    $('.MsgTxt').text('您確定要刪除？');
    $('.btnYes').click(function(){ location.href='delete_product.php?id='+id; }); 
}

/* 詢問視窗開啟 */
function MsgYesNoOn() { 
	$('#MsgBg').fadeIn(500);  //背景淡入
	$("#MsgYesNo").show(500); //詢問視窗展開
};

/* 詢問視窗關閉 */
function MsgYesNoOff() { 
	$('#MsgBg').fadeOut(500);  //背景淡出
	$("#MsgYesNo").hide(500); //詢問視窗收回
};
</script>

</html>