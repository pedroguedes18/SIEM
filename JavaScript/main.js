let BASE_URL = 'https://gnomo.fe.up.pt/~ee12144/trabalhosSiem/trabalhoPHP-2/';

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

/*function ShowHotelupdate(){
  var option;

  option = document.forms["ChooseHotel"]["Hotel"].value);
  $.getJSON(BASE_URL + "api/getDataHotels.php", {id: option}, function(data) {
      $.each(data, function(i, tweet) {
        $('#tweets .tweet:first').before('<article class="tweet">' +
            '<header>' +
              '<span class="id">' + tweet.id + '</span>' +
              '<span class="realname">' + tweet.realname + '</span>' +
              '<a href="{$BASE_URL}pages/tweets/list_user.php?username=' + tweet.username + '" class="username">@' + tweet.username + '</a>' +
              '<span class="time">' + tweet.time + '</span>' +
            '</header>' +
            '<p>' + tweet.text + '</p>' +
          '</article>');
        $('#new_tweets').fadeOut();
      });
    });
}*/
