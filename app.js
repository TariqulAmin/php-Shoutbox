$(document).ready(function(){


   $('#shout-form').submit(function(e){

       e.preventDefault();

       var name=$('#name').val();
       var shout=$('#shout').val();
       var date= getDate();

       if(name=== '' || shout===''){

       	alert('Fill Your Name and Shout');
       }else{
          
          $.ajax({
            
            type:'POST',
            url:'shoutbox.php',
            data:{name:name, shout:shout,date:date},
            success:function(data){

                 $('ul').prepend(data);

                console.log(data);

            }



          });


       }

       
       $('#name').val('');
       $('#shout').val('');


   });


});



function getDate(){

var date;
date = new Date();
date = date.getUTCFullYear() + '-' +
    ('00' + (date.getUTCMonth()+1)).slice(-2) + '-' +
    ('00' + date.getUTCDate()).slice(-2) + ' ' + 
    ('00' + date.getUTCHours()).slice(-2) + ':' + 
    ('00' + date.getUTCMinutes()).slice(-2) + ':' + 
    ('00' + date.getUTCSeconds()).slice(-2);


return date;

}

