; /* /bitrix/js/main/session.min.js?16856948222394*/

; /* Start:"a:4:{s:4:"full";s:45:"/bitrix/js/main/session.min.js?16856948222394";s:6:"source";s:26:"/bitrix/js/main/session.js";s:3:"min";s:30:"/bitrix/js/main/session.min.js";s:3:"map";s:30:"/bitrix/js/main/session.map.js";}"*/
function CBXSession(){var e=this;this.dateInput=new Date;this.dateCheck=new Date;this.dateHit=new Date;this.notifier=null;this.checkInterval=60;this.checkImmediately=false;this.Expand=function(t){this.key=t;BX.ready(function(){BX.bind(document,"keypress",e.OnUserInput);BX.bind(document.body,"mousemove",e.OnUserInput);BX.bind(document.body,"click",e.OnUserInput);setInterval(e.CheckSession,e.checkInterval*1e3)})};this.OnUserInput=function(){var t=new Date;e.dateInput.setTime(t.valueOf());if((t-e.dateHit)/1e3>e.checkInterval+5&&e.checkImmediately===false){e.checkImmediately=true;e.CheckSession()}};this.CheckSession=function(){var t=new Date;if((t-e.dateCheck)/1e3<e.checkInterval-1&&e.checkImmediately===false){return}e.dateCheck.setTime(t.valueOf());if(e.dateInput>e.dateHit){var i={method:"GET",headers:[{name:"X-Bitrix-Csrf-Token",value:BX.bitrix_sessid()}],dataType:"html",url:"/bitrix/tools/public_session.php?k="+e.key,data:"",onsuccess:function(t){e.CheckResult(t)},lsId:"sess_expand",lsTimeout:e.checkInterval-5};BX.ajax(i)}};this.CheckResult=function(t){var i=new Date;e.dateHit.setTime(i.valueOf());e.checkImmediately=false;if(t=="SESSION_EXPIRED"){if(BX.message("SessExpired")){if(!e.notifier){e.notifier=document.body.appendChild(BX.create("DIV",{props:{className:"bx-session-message"},style:{top:"0",backgroundColor:"#FFEB41",border:"1px solid #EDDA3C",width:"630px",fontFamily:"Arial,Helvetica,sans-serif",fontSize:"13px",fontWeight:"bold",textAlign:"center",color:"black",position:"absolute",zIndex:"10000",padding:"10px"},html:'<a class="bx-session-message-close" '+'style="display:block; width:12px; height:12px; background:url(/bitrix/js/main/core/images/close.gif) center no-repeat; float:right;" '+'href="javascript:bxSession.Close()"></a>'+BX.message("SessExpired")}));BX.ZIndexManager.register(e.notifier);BX.ZIndexManager.bringToFront(e.notifier);var s=BX.GetWindowScrollPos();var n=BX.GetWindowInnerSize();e.notifier.style.left=parseInt(s.scrollLeft+n.innerWidth/2-parseInt(e.notifier.clientWidth)/2)+"px";if(BX.browser.IsIE()){e.notifier.style.top=s.scrollTop+"px";BX.bind(window,"scroll",function(){var t=BX.GetWindowScrollPos();e.notifier.style.top=t.scrollTop+"px"})}else{e.notifier.style.position="fixed"}}e.notifier.style.display=""}}};this.Close=function(){this.notifier.style.display="none"}}var bxSession=new CBXSession;
/* End */
;
//# sourceMappingURL=kernel_main.map.js