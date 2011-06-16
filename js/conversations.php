<?
include("../include/config.php");
?>
$(document).ready( function() {
    var Scriptolution = {};
    window.Scriptolution = Scriptolution;
    Scriptolution.messages = new Object();
    Scriptolution.messages.show_progress = function() {
      $('.progress-indicator-icon-message').show();
      $('.message-form-control .send-small').hide();
    };

    Scriptolution.messages.hide_progress = function() {
      $('.progress-indicator-icon-message').hide();
      $('.message-form-control .send-small').show();
    };

    Scriptolution.messages.remove_attachment = function() {
      $("#message_message_attachment_id").val("");
      $("#attached_file_name").html("");
      $('.files-added').hide();
      $('.multiple-files').show();
    };
    
    Scriptolution.messages.remove_tos = function() {
      $('p.terms').hide();
    };

    Scriptolution.messages.show_tos = function() {
      $('p.terms').show();
    };

   	$('.unread-message span').corner('5px');
   	$('p.related-gig span').corner('5px');
		
    $('.content-text').corner('round 5px');
    $('.message-inner div.files ul li').corner('3px');

    $('.by-me .files ul li').corner('5px');
    $('.by-partner .files ul li').corner('5px');

    $('#attached_file_name').corner('5px');
    $('.files-added ul li').corner('5px');
    $('.files ul li a').corner('5px');

    $('.by-me .files ul li a').corner('5px');

    function GetHeight() {
    var y = 0;
    if (self.innerHeight)
    {
    y = self.innerHeight;
    }
    else if (document.documentElement && document.documentElement.clientHeight)
    {
    y = document.documentElement.clientHeight;
    }
    else if (document.body)
    {
    y = document.body.clientHeight;
    }
    return y;
    }
    
    try {
    $.scrollTo($('#new_message').position().top + $('#new_message').height() - GetHeight() + 5)
    } catch(err) {
    }
    
    $("#toggle-attach").click(function() { 
      $(".attachment-add").toggle(); 
      $("#toggle-attach").toggleClass('toggle-close');
      Scriptolution.messages.show_tos();
      try {

      $.scrollTo($('#new_message').position().top + $('#new_message').height() -  GetHeight() + 5);
      } catch(err) {
      }
      return false;
      });

      $('.message-form-control .send-small').click(function() {
        Scriptolution.messages.show_progress();
        return true;
        });

      $('.remove_attachment').click(function() {
         Scriptolution.messages.remove_attachment();
         Scriptolution.messages.show_tos();
        });

    $('#fileInput').uploadify({
      'uploader'  : base_url + '/js/uploadify.swf',
      'script'    : base_url + '/upload',
      'cancelImg' : base_url + '/images/jcancel.png',
      'buttonImg' : base_url + '/images/jbrowse.png',
      'wmode'     : 'transparent',
      'width'     : 81,
      'height'    : 25,
      'rollover'  : false,
      'sizeLimit' : 52428800,
      'auto'      : true,
      'multi'     : false,
      'fileDataName' : 'fileInput',
      'onComplete' : function(a,b,c,resp){ eval(resp) },
      'onSelect'  : function() {Scriptolution.messages.remove_attachment(); document.getElementById('message_validation_error').innerHTML = ''; Scriptolution.messages.show_progress(); Scriptolution.messages.remove_tos(); },
      'onError'   : Scriptolution.messages.hide_progress,
      'onCancel'  : function() {Scriptolution.messages.hide_progress(); Scriptolution.messages.show_tos(); }
    });

    $("#new_message").submit(function() {
		$('.msg-error').hide();
		document.getElementById('message_validation_error').innerHTML = '';
		var msgusr = $("#message_body").val();
		if(msgusr.length >= 1)
		{
			$.post($(this).attr('action'), $(this).serialize(),function(data){
				$('#msgresults').html(data);
				document.getElementById('message_body').value = '';
				Scriptolution.messages.remove_attachment();
				Scriptolution.messages.hide_progress();
			});
		}
		else
		{
			document.getElementById('message_validation_error').innerHTML = "<?php echo $lang['257']; ?>";
			$('.msg-error').show();
			Scriptolution.messages.hide_progress();
		} 
      return false;
      });

    $('.spam_message').click(function() {
      $.post($(this).attr('href'), null, null, "script");
      return false;
      });
      
    $('.compose').click(function() {
        $('#message_body').focus();
        $.scrollTo('#new_message');
        return false;
        });

    $('.remove_attachment').click(function() {
        $("#message_message_attachment_id").val("");
        $("#attached_file_name").html("");
        $('.files-added').hide();
        });
    $('.message-form-control .send-small').click(function() {
        Scriptolution.messages.show_progress();
        return true;
    });
    
    $('.page_refresh').live("click", function() {
        window.location.reload();
        });
    $('.new_message_toggler').click(function() {
        $("#new_message").toggle();
        return false;
        });
	
    $('.message[title]').qtip({
      style: {
        background:'#333333',
        color:'white',
        textAlign:'center',
        border:{width: 1, radius: 5, color: '#333333'},
        tip:{corner:'leftMiddle',size: { x:6,y:10 }}
      },
      position: {corner: {target:'rightMiddle',tooltip:'leftMiddle'}}
    });

});
