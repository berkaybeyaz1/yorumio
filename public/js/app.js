 /*
    Desinger : Kerim Tuncer (https://www.facebook.com/profile.php?id=100011835845145)
    Developer : Ismail Berkay Beyaz (https://www.facebook.com/berkay.beyaz407) (http://github.com/berkaybeyaz1)
 */
 var baseurl = 'http://localhost:8000/';
 $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
 $(function() {

     $(".pTab1").pTab({
         pTab: '.tab-list',
         pTabElem: 'li',
         pClass: 'tab-active',
         pContent: '.tab-content',
         pDuration: 650,
         pEffect: 'fadeIn'
     });

     $('ul.series-list > li').click(function() {
         var obj = $(this).data('links');
         var title = $('.title').text();
         var season = $(this).data('season');
         var part = $(this).data('part');
         var text = '<p>'+ title +' '+ season +'. Sezon '+ part +'. Bölümünü sizler için sunduğumuz hangi platformdan izlemek istersin?</p>';
         var output = "";
         for(var i in obj){
             output += '<a href="'+ obj[i]['url'] +'"><b>'+ obj[i]['name'] +' ile Izle</b></a> ';
         }
         console.log(output);
         console.log(obj);
         $('.buttons').html(output);
         $('.modal-text').html(text);
         $('.overlay').fadeIn().show();
         $('.modal').addClass('modal-open').fadeIn().show();
         $('#wrapper').blurjs({
             customClass: 'blurjs',
             radius: 2,
             persist: true
         });
         $('.bg').blurjs({
             customClass: 'blurjs',
             radius: 1,
             persist: true
         });
         $('.close').click(function() {
             $.blurjs('reset');
             $('.modal').fadeOut();
             $('.overlay').fadeOut('slow');
         });
     });

     /*
     Search

      */
 });

 $('#wrapper').hide();
 $('.bg').hide();

 function loader() {
     $('#wrapper').fadeIn();
     $('.bg').fadeIn();
     $('#loader').fadeOut();
 }
 setTimeout(loader, 500);

 var timer;
 function up(){
     timer = setTimeout(function(){
         var keywords = $('.search-header-input').val();
         if(keywords.length > 0){
             $.post(baseurl + 'api/search',{keywords:keywords},function(markup){
                 console.log(markup);
             });
         }
     },500);
 }
 function down(){
     clearTimeout(timer);
 }