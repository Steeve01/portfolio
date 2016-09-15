$(document).ready(function(){
    var regexp = /^((http[s]?|ftp):\/)?\/?([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)??adm=no$/;
    var url = $(location).attr('href');
       
  $('.noAdmin').css({
    'display':'none'
  });
    if (regexp.test(url)){
        $('.noAdmin').css({
          'display':'block'
        });
    }
  $('div').css({
    'opacity': '1'
  });
  if($.url("query").split("=")[3]=='no'){
  }
})
