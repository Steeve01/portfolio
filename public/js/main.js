$(document).ready(function(){
  $('.noAdmin').css({
    'display':'none'
  });
  $('div').css({
    'opacity': '1'
  });
  if($.url("query").split("=")[1]=='no'){
    $('.noAdmin').css({
      'display':'block'
    });
  }
})
