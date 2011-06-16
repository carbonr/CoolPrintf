$(document).ready( function() {
  $('.yellow .table-container').corner("br 5px bl 5px");
  $('.green .table-container').corner("br 5px bl 5px");
  $('.info').corner("tl 5px tr 5px");

	if ( !$.browser.msie ) {
  	$('td.status div').corner("round 3px");
	}

  // Status Tooltips Init
  $('.status[title]').qtip({
    style: {
      background:'#333333',
      color:'white',
      textAlign:'center',
      border:{width: 1, radius: 5, color: '#333333'},
      tip:{corner:'leftMiddle',size: { x:6,y:10 }}
    },
    position: {corner: {target:'rightMiddle',tooltip:'leftMiddle'}}
  });

  // Shopping/Sales Tabs
  $('.tabControlShopping').click(function() { 
    $('.tabShopping').show();
    $('.tabSales').hide();
    $('.tabControlShopping').addClass('selected');
    $('.tabControlSales').removeClass('selected');
  });
  $('.tabControlSales').click(function() { 
    $('.tabSales').show();
    $('.tabShopping').hide();
    $('.tabControlSales').addClass('selected');
    $('.tabControlShopping').removeClass('selected');
  });
  
  // Cornerizing Tabs
  $('.tabSet div').corner('tr 5px tl 5px');

  // Cornerizing Filters
  $('span.unread-message, div.message, .content-text').corner('5px');
  $('ul.filters li').corner('3px');

  // "New Conversation" Badge
  $('b.unread-message').corner('5px');
});



