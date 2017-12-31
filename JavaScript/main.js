$(document).ready(function() {
  initMessageClosers();

  scrollToDiv();
});

function initMessageClosers() {
  $('.close').click(function() {
    $(this).parent().fadeOut();
  });
}

function scrollToDiv(){
  $(".InitialPage").on("click", function( e ) {

    e.preventDefault();

    $("body, html").animate({
      scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);

  });
}

function showUserResult(str){
  //alert("asd");
  //document.getElementById("txtHint").innerHTML = str;
	if (str.length == 0) {
		document.getElementById("txtHint").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}

		};
		xmlhttp.open("GET", "https://gnomo.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-2/actions/javaScript/check_username.php?q=" + str, true);
		xmlhttp.send();
	}
}
