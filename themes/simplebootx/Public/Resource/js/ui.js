$(function () {
    $('#news-slide').responsiveSlides({
        pager: true,
        nav: true,
        namespace: 'rslides',
        pause: true
    });
    $('.nav-list').children('li:first-child').addClass('sel');
    $('.nav-list').children('li').mouseover(function(){
        $(this).children('ul').show();
    });
    $('.nav-list').children('li').mouseout(function(){
        $(this).children('ul').hide();
    })
    //友情链接
    $(".flinkfrm li").click(function(){
        if($(this).hasClass("sel")){
            $(".flinkfrm li").removeClass("sel");
            $(".flinkfrm li").css({"z-index":10});
            $(".flinkcont").hide();
        }else{
            $(".flinkfrm li").removeClass("sel");
            var slnb=Math.ceil($(this).find("ul").children("li").size()/3);
            $(".flinkcont").html($(this).find("ul").html());
            $(".flinkcont").css({"height":30*slnb+"px","margin-top":"-"+(30*slnb+40)+"px"});
            $(this).addClass("sel");
            $(this).css({"z-index":20});
            $(".flinkcont").show();
        }
    });

    $('.article-container > p > img').css({'margin-left':'-2em','margin-top':'24px'});
    $('.nav-list').on('click','li',function(){
        $(this).addClass('sel').siblings().removeClass('sel');
    });


});