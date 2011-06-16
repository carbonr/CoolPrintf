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
      $('.message-form-control .upload-panel p').hide();
    };
    Scriptolution.messages.show_tos = function() {
      $('.message-form-control .upload-panel p').show();
    };
    
    $('.content-text').corner("round 5px");
    $('.sysmsg').corner("round 5px");
    $('ul.tabs li a').corner("5px top");
    $('span.status').corner("5px");
    $('ul.filters li a').corner("5px");
    $('.mutual-status b.timestamp').corner("5px");
    $('span#attached_file_name').corner("5px");
    $('div.files ul li a').corner("5px");
    $('.message-inner').corner("5px");
    $('.boxes .box').corner("5px");
    $('.milestone').corner("5px");
    $('.order-finish').corner("5px");
    $('textarea#rating_comment').corner("5px");
    $('a.back-to-manage').corner("5px");
    $('.yellow .table-container').corner("br 5px bl 5px");
    $('.green .table-container').corner("br 5px bl 5px");
    $('.info').corner("tl 5px tr 5px");
		$('.read-more').corner('5px');
    $('span.instructions').corner("5px");    
    $('#attached_file_name').corner('5px');
    $('.index td.status div').corner("round 5px");
    $('td.status[title]').qtip();
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

    $('.milestone[title]').qtip({
      style: {
        background:'#333333',
        color:'white',
        textAlign:'center',
        border:{width: 1, radius: 5, color: '#333333'},
        tip:{corner:'leftMiddle',size: { x:6,y:10 }}
      },
      position: {corner: {target:'rightMiddle',tooltip:'leftMiddle'}}
    });

    $('.show-tooltip').qtip({
      style: {
        background:'#333333',
        color:'white',
        textAlign:'center',
        border:{width: 1, radius: 5, color: '#333333'},
        tip:{corner:'leftMiddle',size: { x:6,y:10 }}
      },
      position: {corner: {target:'rightMiddle',tooltip:'leftMiddle'}}
    });

    $("#toggle-attach").click(function() { 
      $(".attachment-add").toggle(); 
      $("#toggle-attach").toggleClass('toggle-close');
      return false;
      });

    $('.unread .content-text').effect("highlight", {}, 1000);

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
      'onSelect'  : function() {Scriptolution.messages.remove_attachment(); Scriptolution.messages.show_progress(); Scriptolution.messages.remove_tos(); },
      'onError'   : Scriptolution.messages.hide_progress,
      'onCancel'  : function() {Scriptolution.messages.hide_progress(); Scriptolution.messages.show_tos(); }
      });
	
	$("#new_message.nonajaxy").submit(function() {
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
			document.getElementById('message_validation_error').innerHTML = "<?php echo $lang['358']; ?>";
			$('.msg-error').show();
			Scriptolution.messages.hide_progress();
		} 
      return false;
      });

    $("#new_message.ajaxy").submit(function() {
        $('.msg-error').hide();
        $('#message_validation_error').html("");
        if ($('#message_body').val().length < 5){
          Scriptolution.messages.hide_progress();
          $('.msg-error').show();
          $('#message_validation_error').removeClass("green-text");
		      if ($('#message_message_format').val() != '' ) {
		          $('#message_validation_error').html("<?php echo $lang['358']; ?>"); 
			      } else {
          		$('#message_validation_error').html("<?php echo $lang['358']; ?>");
			      }; 
          return false;
        }
		  $.post($(this).attr('action'), $(this).serialize(),function(data){
				$('#msgresults').html(data);
				document.getElementById('message_body').value = '';
				Scriptolution.messages.remove_attachment();
				Scriptolution.messages.hide_progress();
			});
          return false;
        });

    $('.remove_attachment').click(function() {
         Scriptolution.messages.remove_attachment();
         Scriptolution.messages.show_tos();
        });

    $('.message-form-control .send-small').click(function() {
        Scriptolution.messages.show_progress();
        return true;
        });
    $('.payment-accepted-info-button').click(function(){
        $('#payment-accepted-info').toggle();
        return false;
        });

    $('.open_dispute').click(function() {
        $('#dispute').toggle();
        return false;
        });

    $('.message_toggler').click(function() {
        $('.tabs LI').removeClass('selected');
        $('.tabs LI.talk').addClass('selected');
        $('.boxes .box').removeClass('selected');
        $('.radio_button').attr('checked', false);
        $('#gotProbs').removeClass('select-deliver');
        $('#problems_box').hide();
        $('.msg-error').hide()
        $('.support-message').hide('');				
        
        $(".attachment-add").hide(); 
        $("#toggle-attach").removeClass('toggle-close');

        $('#message_validation_error').html('')
        $('#message_form_wrapper').show();
        $('#message_message_format').val('');
        $("#gotProbs.content-text").removeClass('select-gotprobs');
        $(".tip.rspnd").removeClass('rspnd-deliver');
        $(".tip.rspnd").removeClass('rspnd-problems');
        return false;
        });
    
    $('.deliver_toggler').click(function() {
        if ($(this).hasClass('deliver_toggler_disabled')){
          alert("A dispute is currently active. Please resolve it in order to deliver your work.")
        } else {
        $('.tabs LI').removeClass('selected');
        $('.tabs LI.deliver').addClass('selected');
        $('#gotProbs').addClass('select-deliver');
        $('.boxes .box').removeClass('selected');
        $('.radio_button').attr('checked', false);
        $('#problems_box').hide();
        $('.msg-error').hide();
        $('.support-message').hide('');				
        
        $(".attachment-add").show(); 
        $("#toggle-attach").addClass('toggle-close');

        $('#message_validation_error').html('')

          $('#message_form_wrapper').show();
          $('#message_message_format').val('delivery');
          $('.msg-error').show();
          $('#message_validation_error').html("<strong><?php echo $lang['357']; ?></strong>");
          $('#message_validation_error').addClass("green-text");
          $("#gotProbs.content-text").removeClass('select-gotprobs');
        
          $(".tip.rspnd").addClass('rspnd-deliver');
          $(".tip.rspnd").removeClass('rspnd-problems');

        }
        return false;

        });

    $('.problems_toggler').click(function() {
        if ($('.tabs LI.text-link').hasClass('selected')) {
          $('.message_toggler').click();
          return false;
        }
        $('.tabs LI').removeClass('selected');
        $('.tabs LI.text-link').addClass('selected');
        $('#gotProbs').removeClass('select-deliver');
        $('#problems_box').show();
        $('#message_form_wrapper').hide();
        $('#message_message_format').val('');
        $("#gotProbs.content-text").addClass('select-gotprobs');
        $(".attachment-add").hide(); 
        $("#toggle-attach").addClass('toggle-close');
        $(".tip.rspnd").removeClass('rspnd-deliver');
        $(".tip.rspnd").addClass('rspnd-problems');
        return false;
        });
  

    // Problems
    $('.mutual_toggler').click(function() {
        $('.boxes .box').removeClass('selected');
        $('.boxes .mutual_toggler').addClass('selected');
        $('.radio_button').attr('checked', false);
        $('#radio_mutual').attr('checked', true);
        $('#message_form_wrapper').show();
        $('.msg-error').show();
        $('.support-message').hide('');
        if ($(this).hasClass('mutual_toggler_buyer')) {
          $('#message_validation_error').html("<?php echo $lang['356']; ?>");
        } else {
          $('#message_validation_error').html("<?php echo $lang['355']; ?>");
        }
        $('#message_message_format').val('mutual_cancellation_request');
        $('.send-button').show('');
        return false;

        });

    $('.reject_toggler').click(function() {
        $('.boxes .box').removeClass('selected');
        $('.boxes .rejection').addClass('selected');
        $('.radio_button').attr('checked', false);
        $('#radio_reject').attr('checked', true);
        $('#message_form_wrapper').show();
        $('.msg-error').show();
        $('#message_validation_error').removeClass("green-text");
        $('#message_validation_error').addClass("reason-text");
        $('#message_validation_error').html("<?php echo $lang['354']; ?>");
        $('#message_message_format').val('rejection');
        $('.support-message').hide('');				
        $('.send-button').show('');
        return false;

        });


    $('.force_toggler').click(function() {
        $('.boxes .box').removeClass('selected');
        $('.boxes .force_toggler').addClass('selected');
        $('.radio_button').attr('checked', false);
        $('#radio_force').attr('checked', true);
        $('#message_form_wrapper').show();
        $('.msg-error').show();
        $('#message_validation_error').removeClass("green-text");
        $('#message_validation_error').addClass("reason-text");
        $('#message_validation_error').html("<?php echo $lang['353']; ?>");
        $('#message_message_format').val('seller_cancellation');
        $('.support-message').hide('');				
        $('.send-button').show('');
        return false;

        });

    $('.support_toggler').click(function() {
        $('.boxes .box').removeClass('selected');
        $('.boxes .support_toggler').addClass('selected');
        $('.radio_button').attr('checked', false);
        $('#radio_support').attr('checked', true);
        $('#message_form_wrapper').hide();
        $('.support-message').show('');
        $('.send-button').hide('');
        return false;

        });

    $('.page_refresh').live("click", function() {
      window.location.reload();
      });

    $('a.conversation-link').click(function() { 
        $('a.hidden-action').toggle();
        return false; 
        });

    $('a.showInstructions').click(function() { 
        $('span.instructions').toggle('fast');
        return false; 
        });

    $('.delivery_toggler').click(function() {
        $('.review_form').toggle();
        return false;
        });
	
	$('#rating_comment').click(function() {
		$('#rating_comment').val('');
        return false;
        });
	
    $('#rating_comment').hint();

});
