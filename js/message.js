var d = new Date();

var scrollMsg =  d.toString();


//d.getMonth()+ 1 + " " d.getDate() + " "+ d.getFullYear() + " "
      //+ d.getHours()+ ":" + d.getMinutes;

var beginPos = 0;

function scrollingMsg() {
document.msgForm.scrollingMsgBox.value =
scrollMsg.substring(beginPos,scrollMsg.length)+scrollMsg.substring(0,beginPos);
beginPos = beginPos + 1;
if (beginPos > scrollMsg.length) {
beginPos = 0
}
window.setTimeout("scrollingMsg()",100)
}
