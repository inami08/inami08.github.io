let month = new Date().getMonth();
let date = new Date().getDate();
let day = new Date().getDay();
let dayname = ['(Sun)','(Mon)','(Tue)','(Wed)','(Thu)','(Fri)','(Sat)'];
$('#timezone').text(month + 1 +'.' + date);
$('#dayzone').text(dayname[day]);

$('#btn-wrapper').on('click',function(){
    $('#ham-btn').toggleClass('is-active');
    $('#g-nav').fadeToggle(300);
});

$('#g-nav a').on('click',function(){
  $('#g-nav').fadeOut(200);
  $('#ham-btn').removeClass('is-active');
});

$('#news-list').load('news.txt');