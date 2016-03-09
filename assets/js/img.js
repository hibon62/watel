jQuery(function($){
    $('.map').append('<div class="overlay">').append('<div class="mapy"></div>');
    $('.map .mapy').hide();
    var expert = [
        {name : 'Thomas', slug: 'thomas'},
        {name : 'Maxime', slug: 'maxime'},
        {name : 'Florian', slug: 'florian'},
        {name : 'Jerome', slug: 'jerome'},
        {name : 'Nicolas', slug: 'nicolas'},
        {name : 'Nicolas', slug: 'nicolas'},
        {name : 'Philippe', slug: 'philippe'},
        {name : 'Frederic', slug: 'frederic'},
    ];

    //Tooltip qui suit la souris
    $(document).mousemove(function(e){
        $('.map .mapy').css({
            top:e.pageY,
            left:e.pageX
        });
    });

    //On passe sur une région
    $('.map area').mouseover(function(){
        var index = $(this).index();
        var left = -index * 1184 - 1184;
        $('.map .mapy').html(expert[index].name).stop().fadeTo(500,1);
        $('.map .overlay').css({
            backgroundPosition : left+"px 0px" 
        });
    });

    //On sort de la map
    $('.map').mouseout(function(){
        $('.map .overlay').css({
            backgroundPosition : "1184px 0px" 
        });
        $('.map .mapy').stop().fadeTo(500,0);
    })
});