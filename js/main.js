jQuery.ajaxSetup({ 
    'beforeSend': function(xhr) {
        xhr.setRequestHeader("Accept", "text/javascript")
    }
})
$(document).ready( function() {
$('.helpbox.blue p b').corner('5px');
	$('a.tag').corner('3px');    
	if ( !$.browser.msie ) {
      $('.compose-form').corner('3px');
      $('.compose-form input').corner('3px');
      $('.compose-form textarea').corner('3px');
      $('h3.intro b').corner('3px');
      $('a.question').corner('3px');
      $('.faq-entries.last').corner('bl br 3px');
      $('.faq-entries-new').corner('tl tr 3px');      
	}
    $('a.contact-support').click(function() { $('.contact-form').toggle(); return false; });
	$('textarea#suggestion_content').click(function() { $('.suggest-category-select').show(); });
    $('.suggest').corner('8px');
		$('.gig-order-now a').corner('5px');
		$('.browser-notice p span').corner('5px');
		$('.browser-notice .close span').click(function() { $('.browser-notice').fadeOut(); });
        $('a.question').click(function() {
      $(this).parent().next().toggle();
     return false;
    });
    $('.rssEmbed').corner('3px');
    $('#conversations_quick_navigation').change(function(){
      if ($(this).val() != "Quick navigation") {
        window.location = base_url + '/inbox?' + $(this).val();
      }
      });
	toggleSmallSearchBoxHint();
function toggleSmallSearchBoxHint(){
	if( $('.swap-value-small-search').val() == '' ){
		$('.swap-value-small-search').css("background","#fff url(" + base_url +"/images/bg-small-search-box-idle.gif) repeat-x");
	}
	else{
		$('.swap-value-small-search').css('background','#fff url(' + base_url +'/images/bg-input02.gif) repeat-x');		
	}	
} 
$('.swap-value-small-search').focus(function(){
	$('.swap-value-small-search').css('background','#fff')
});
$('.swap-value-small-search').blur(function(){
	toggleSmallSearchBoxHint();
});
$('.bad-review-button').click(function() {
    $('.contact-seller-from-review').show('fast');
    return true;
});
$('.good-review-button').click(function() {
    $('.contact-seller-from-review').hide('fast');
    return true;
});
$('.column3 .more-options').click(function() {
    $(this).next().toggle('fast');
    return true;
});
$('.edit-gig-form .button').click(function() {
		$('.edit-gig-form .button').hide();
    $('.progress-indicator-icon-gigform').show();
    return true;
});
$('.inbox-compose .button').click(function() {
		$('.inbox-compose .button').hide();
    $('.progress-indicator-icon-message').show();
    return true;
});
$('.thank-form .button').click(function() {
		$('.thank-form .button').hide();
    $('.progress-indicator-icon-review').show();
    return true;
});
$('.settings-form .btn-update').click(function() {
		$('.settings-form .btn-update').hide();
    $('.settings-form .progress-indicator-icon-gigform').show();
    return true;
});
$('.reset-form .btn-change').click(function() {
		$('.reset-form .btn-change').hide();
    $('.reset-form .progress-indicator-icon-gigform').show();
    return true;
});
$('.notify-form .row .button').click(function() {
		$('.notify-form .row .button').hide();
    $('.notify-form .row .progress-indicator-icon-notifycomp').show();
    return true;
});
$('.suggest-form .button').click(function() {
	if ($('#suggest_form #suggestion_content').val() == '') {
	return false;} else {
	$('.suggest-form .button').hide();
	$('.suggest-form .suggest-progress-indicator-icon-message').show();
	return true;}
});
$('.row01 .progress-indicator-icon-message').click(function() {
		$('.row01 .button').hide();
    $('.row01 .progress-indicator-icon-message').show();
    return true;
});
function expandSideMenu(){
	$('#side_menu_expanded').toggle("fast", toggleMoreToLess);
}
$('#side_menu_expander').click(function() {
	expandSideMenu();
	return false;
});
function toggleMoreToLess() {
	if ($('#side_menu_expander').text() == "More..."){
		$('#side_menu_expander').text("Less...");
	}else{
		$('#side_menu_expander').text("More...");			
	}
}
$('#login-button').click(function() {
});
$('#join-button').click(function() {
    $('.register-popup').toggle();
    $('.login-popup').hide();
    $("input:text:visible:first").focus();
    return false;
});
$('a.show_join_popup').click(function() {
    $('.register-popup').show();
    return false;
});
$('a.join-close-button').click(function() {
    $('.register-popup').hide();
    return false;
});
$('#suggest_form').submit(function() {
    if ($.inArray($('#suggest_form #content').val(),swapValues) != '-1') {
        return false;
    } else {
        $.post(this.action, $(this).serialize(), null, "script");
        return false;
    }
});
$('#submit_new_gig').submit(function() {
    if ($.inArray($('#submit_new_gig #quicktitle').val(),swapValues) != '-1') {
        return false;
    } else {
        return true;
    }
});
$('#search_form').submit(function() {
    if ($.inArray($('#search_form #query').val(),swapValues) != '-1') {
        return false;
    } else {
        return true;
    }
});
$('a.select-all').click(function() {
    $('.checkbox').each(function(){
        $(this).attr('checked', true);
    });
    return false;
});
$('a.select-none').click(function() {
    unselectCheckboxes();
    return false;
});
$('a.select-active').click(function() {
    unselectCheckboxes();
    $('.checkbox.approved').each(function(){
        $(this).attr('checked', true);
    });
    return false;
});
$('a.select-suspended').click(function() {
    unselectCheckboxes();
    $('.checkbox.suspended').each(function(){
        $(this).attr('checked', true);
    });
    return false;
});
$('a.select-read').click(function() {
    unselectCheckboxes();
    $('.checkbox.read').each(function(){
        $(this).attr('checked', true);
    });
    return false;
});
$('a.select-unread').click(function() {
    unselectCheckboxes();
    $('.checkbox.unread').each(function(){
        $(this).attr('checked', true);
    });
    return false;
});
$('.btn-suspend').click(function() {
    if ($('.checkbox:checked').size() > 0) {
        $('#gigs_form').attr('action',base_url+'/manage_gigs?suspend=1');
        $('#gigs_form').submit();
    } else {
        return false;
    }
});
$('.btn-activate').click(function() {
    if ($('.checkbox:checked').size() > 0) {
        $('#gigs_form').attr('action',base_url+'/manage_gigs?activate=1');
        $('#gigs_form').submit();
    } else {
        return false;
    }
});
$('.btn-delete').click(function() {
    if ($('.checkbox:checked').size() > 0) {
        $('#gigs_form').attr('action',base_url+'/manage_gigs?delete=1');
        $('#gigs_form').submit();
    } else {
        return false;
    }
});
$('.btn-mark-as-read').click(function() {
    if ($('.checkbox:checked').size() > 0) {
        $('#messages_form').attr('action',$('#messages_form').attr('action')+'/read_selected');
        $('#messages_form').submit();
    } else {
        return false;
    }
});
$('a.forgotpassword').click(function() {
    $('div.loginwrapper').hide();
    $('div.forgotpasswordform').show();
    return false;
});
$('a.backtologin').click(function() {
    $('div.forgotpasswordform').hide();
    $('div.loginwrapper').show();
    return false;
});
if ($('#gig_title').length != 0) {
    updateGigTitleCharsCount();
    $('#gig_title').keyup(function(){
        updateGigTitleCharsCount();
    });
};
if ($('#gig_description').length != 0) {
    updateGigDescCharsCount();
    $('#gig_description').keyup(function(){
        updateGigDescCharsCount();
    });
};
$('input[maxlength],textarea[maxlength]').keyup(function(){
    var max = parseInt($(this).attr('maxlength'));
    if($(this).val().length > max){
        $(this).val($(this).val().substr(0, $(this).attr('maxlength')));
    };
});
$('a.addbookmark').click(function() {
	$('#addbookmark').hide();
	$('#removebookmark').show();
    $.ajax({
        url: this.href,
        dataType: "script"
    });
    return false;
});
$('a.removebookmark').click(function() {
    $('#removebookmark').hide();
	$('#addbookmark').show();
    $.ajax({
        url: this.href,
        dataType: "script"
    });
    return false;
});
$('a.changepassword').click(function() {
    $('.reset-form').toggle('fast');
    return false;
});
$('a.shareit').click(function() {
    if ($(this).parent().parent().next('.pop-share').css('display') == "none") {
        $(this).parent().parent().next('.pop-share').show();
    } else {
        $(this).parent().parent().next('.pop-share').hide();
    }
    return false;
});
$('a.pshare').click(function() {
    if ($(this).next('.p-share').css('display') == "none") {
        $(this).next('.p-share').show();
    } else {
        $(this).next('.p-share').hide();
    }
    return false;
});
$("#user_username").keyup(function() {
    checkUsername();
});
$('#join_form').submit(function() {
document.getElementById("status").style.display="none";
$('#joinresults').html('');
$('#join_form .button').hide();
$('#join_form .progress-indicator-icon-join').show();
$.post($(this).attr('action'), $(this).serialize(), function(data) {
  $('#joinresults').html(data);
  $('#join_form .progress-indicator-icon-join').hide();
  $('#join_form .button').show();
});
return false;
});
$('#session_form').submit(function() {
	if($('#session_form #l_username').val() == '' && $('#session_form #l_password').val() == ''){
		return false;
	}
$('#logresults').html('');
$('#session_form .button').hide();
$('#session_form .progress-indicator-icon-login').show();
$.post($(this).attr('action'), $(this).serialize(),function(data){
	$('#logresults').html(data);
    $('#session_form .progress-indicator-icon-login').hide();
    $('#session_form .button').show();
});
return false;
});
$('#forgot_password_form').submit(function() {
$('#fpresults').html('');
$('#forgot_password_form .button').hide();
$('#forgot_password_form .progress-indicator-icon-login').show();
$.post($(this).attr('action'), $(this).serialize(),function(data){
	$('#fpresults').html(data);
    $('#forgot_password_form .progress-indicator-icon-login').hide();
    $('#forgot_password_form .button').show();
});
return false;
});
});
pic1 = new Image(16, 16);
pic1.src = base_url + "/images/loader.gif";
function checkUsername() {
    var usr = $("#user_username").val();
    if(usr.length >= 4)
    {
        $("#status").html('<div class="status-checking"><img align="absmiddle" src="' + base_url + '/images/loader.gif" /> Checking availability...</div>');
        $.ajax({
            type: "POST",
            url: base_url + "/checkuser.php",
            data: "username="+ usr,
            success: function(msg){
                $("#status").ajaxComplete(function(event, request, settings){
                    if(msg == 'OK')
                    {
                        $("#user_username").removeClass('object_error');
                        $("#user_username").addClass("object_ok");
                        $(this).html(' <div class="status-ok"><img align="absmiddle" src="' + base_url + '/images/bg-valid-name.gif" /></div> ');
                    }
                    else
                    {
                        $("#user_username").removeClass('object_ok');
                        $("#user_username").addClass("object_error");
                        $(this).html(msg);
                    }
                });
            }
        });
    }
    else
    {
        $("#status").html('<div class="status-error">Username should have at least 4 characters</div>');
        $("#user_username").removeClass('object_ok');
        $("#user_username").addClass("object_error");
    }
};
function deleteSelectedMessages() {
    if ($('.checkbox:checked').size() > 0) {
        $('#messages_form').attr('action',$('#messages_form').attr('action')+'/delete_selected');
        $('#messages_form').submit();
    } else {
        return false;
    }
    };
function spamSelectedMessages() {
    if ($('.checkbox:checked').size() > 0) {
        $('#messages_form').attr('action',$('#messages_form').attr('action')+'/spam_selected');
        $('#messages_form').submit();
    }else {
        return false;
    }
};
function updateGigTitleCharsCount() {
    var used = $('#gig_title').val().length;
    $('.gigtitleused').html(used);
};
function updateGigDescCharsCount() {
    var used = $('#gig_description').val().length;
    $('.gigdescused').html(used);
};
function unselectCheckboxes() {
    $('.checkbox').each(function(){
        $(this).attr('checked', false);
    });
};
function reset_html(id) {
    $('#'+id).html($('#'+id).html());
}
(function($){
    var url1 = /(^|&lt;|\s)(www\..+?\..+?)(\s|&gt;|$)/g,
    url2 = /(^|&lt;|\s)(((https?|ftp):\/\/|mailto:).+?)(\s|&gt;|$)/g,
    linkifyThis = function () {
        var childNodes = this.childNodes,
        i = childNodes.length;
        while(i--)
        {
            var n = childNodes[i];
            if (n.nodeType == 3) {
                var html = $.trim(n.nodeValue);
                if (html)
                {
                    html = html.replace(/&/g, '&amp;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;')
                    .replace(url1, '$1<a href="http://$2" target="_blank">$2</a>$3')
                    .replace(url2, '$1<a href="$2" target="_blank">$2</a>$5');
                    $(n).after(html).remove();
                }
            }
            else if (n.nodeType == 1  &&  !/^(a|button|textarea)$/i.test(n.tagName)) {
                linkifyThis.call(n);
            }
        }
    };
    $.fn.linkify = function () {
        return this.each(linkifyThis);
    };
})(jQuery);