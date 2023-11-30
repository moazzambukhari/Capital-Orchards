jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,

        width:900,

        height:360,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        fullwidth:false,

        playmutedandinlinewhenautoplay:false,

        donotresize:false,

        enabletouchswipe:true,

        fullscreen:true,

        autoplayvideo:false,

        addmargin:true,

        transitiononfirstslide:false,

        forceflash:false,

        isresponsive:true,

        forceflashonie11:true,

        forceflashonie10:true,

        pauseonmouseover:false,

        playvideoonclickthumb:true,

        slideinterval:5000,

        randomplay:false,

        scalemode:"fill",

        loop:0,

        autoplay:true,

        navplayvideoimage:"play-32-32-0.png",

        timerheight:2,

        shownumbering:false,

        skin:"Elegant",

        addgooglefonts:true,

        navpreviewposition:"bottom",

        navpreviewwidth:120,

        googlefonts:"Inder",

        textpositionmarginright:24,

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        navthumbnavigationarrowimagewidth:32,

        arrowwidth:32,

        navarrowimage:"navarrows-28-28-0.png",

        arrowhideonmouseleave:1000,

        texteffect1:"slide",

        texteffect2:"slide",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"none",

        navthumbtitleheight:20,

        navswitchonmouseover:false,

        arrowtop:50,

        textstyle:"dynamic",

        playvideoimageheight:64,

        showbackgroundimage:false,

        customcss:"",

        navopacity:0.8,

        navdirection:"horizontal",

        textbgcss:"display:none;",

        shadowcolor:"#aaaaaa",

        buttoncss:"display:block; position:relative; margin-top:10px;",

        bottomshadowimagewidth:110,

        navshowpreview:true,

        navradius:0,

        navmarginx:16,

        textpositionmarginleft:24,

        navplaypauseimage:"navplaypause-28-28-0.png",

        backgroundimagetop:-10,

        timercolor:"#ffffff",

        navhighlightcolor:"",

        texteffectdelay1:1000,

        texteffectdelay2:1500,

        texteffectduration1:800,

        texteffectduration2:800,

        navbuttoncolor:"",

        texteffectslidedirection:"bottom",

        showfacebook:true,

        titlecss:"display:table; position:relative; font:16px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; white-space:nowrap; background-color:#00ccff; padding:10px;",

        texteffectslidedistance1:10,

        texteffectslidedistance2:10,

        lightboxshowsocial:false,

        lightboxthumbtopmargin:12,

        navfeaturedarrowimageheight:8,

        navcolor:"",

        navthumbtitlewidth:120,

        texteffectseparate:true,

        arrowheight:32,

        bottomshadowimage:"bottomshadow-110-95-3.png",

        lightboxshowdescription:false,

        timerposition:"bottom",

        navthumbnavigationstyle:"arrow",

        borderradius:0,

        lightboxshowfacebook:true,

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"imageonly",

        texteffecteasing1:"easeOutCubic",

        navbordercolor:"#ffffff",

        navpreviewarrowimage:"previewarrow-16-8-1.png",

        showbottomshadow:true,

        texteffectslidedistance:10,

        texteffectdelay:800,

        backgroundimage:"",

        textformat:"Blue box",

        navshowbuttons:true,

        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",

        ribbonmarginy:0,

        ribbonmarginx:0,

        navbuttonhighlightcolor:"",

        navmarginy:16,

        navpreviewheight:60,

        descriptioncssresponsive:"font-size:12px;",

        navthumbresponsivemode:"samesize",

        lightboxshowtwitter:true,

        navshowplaypause:true,

        navshowplayvideo:false,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbcolumn:5,

        navthumbnavigationarrowimageheight:32,

        navpreviewarrowheight:8,

        showtwitter:true,

        lightboxshownavigation:false,

        showshadow:false,

        navfeaturedarrowimagewidth:16,

        navborderhighlightcolor:"",

        textautohide:true,

        lightboxthumbwidth:80,

        navthumbtitlehovercss:"text-decoration:underline;",

        navthumbmediumheight:64,

        texteffectresponsivesize:600,

        texteffecteasing:"easeOutCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:4,

        bordercolor:"#ffffff",

        ribbonimage:"ribbon_topleft-0.png",

        navwidth:28,

        navheight:28,

        timeropacity:0.6,

        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",

        navshowplaypausestandalone:false,

        navpreviewbordercolor:"#ffffff",

        lightboxthumbbottommargin:8,

        navborder:4,

        navthumbmediumsize:800,

        textpositionmargintop:24,

        buttoncssresponsive:"",

        playvideoimage:"playvideo-64-64-0.png",

        arrowimage:"arrows-32-32-0.png",

        navfonthighlightcolor:"#666666",

        showpinterest:true,

        navpreviewborder:4,

        navbuttonshowbgimage:true,

        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",

        playvideoimagewidth:64,

        navshowpreviewontouch:false,

        showtimer:true,

        navmultirows:false,

        showsocial:false,

        navfeaturedarrowimage:"featuredarrow-16-8-0.png",

        navthumbsmallsize:480,

        showribbon:false,

        navstyle:"numbering",

        descriptioncss:"display:block; position:relative; font:14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#00ccff;  background-color:#fff; margin-top:10px; padding:10px; ",

        numberingformat:"%NUM/%TOTAL ",

        navthumbmediumwidth:64,

        navfontsize:12,

        navimage:"bullet-24-24-0.png",

        navshowplaypausestandaloneautohide:false,

        navshowarrow:true,

        navshowfeaturedarrow:false,

        lightboxbarheight:64,

        ribbonimagey:0,

        ribbonimagex:0,

        navthumbsmallheight:48,

        textpositiondynamic:"bottomleft",

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        lightboxshowpinterest:true,

        titlecssresponsive:"font-size:12px;",

        navshowplaypausestandalonewidth:28,

        navthumbresponsive:false,

        navshowplaypausestandaloneheight:28,

        backgroundimagewidth:120,

        arrowmargin:8,

        texteffectduration:600,

        border:0,

        navfontcolor:"#333333",

        bottomshadowimagetop:95,

        initsocial:false,

        textpositionstatic:"bottom",

        navthumbsmallcolumn:3,

        textcss:"display:block; padding:8px 16px; text-align:left;",

        navthumbsmallwidth:48,

        navthumbmediumcolumn:4,

        textpositionmarginstatic:0,

        navposition:"topright",

        texteffectslidedirection1:"bottom",

        navpreviewarrowwidth:16,

        texteffectslidedirection2:"bottom",

        texteffectresponsive:true,

        shadowsize:5,

        textpositionmarginbottom:24,

        socialmode:"mouseover",

        lightboxshowtitle:true,

        cssslide: {

            duration:1000,

            easing:"ease",

            checked:true

        },

        transition:"cssslide",

        scalemode:"fill",

        isfullscreen:false,

        textformat: {

            "Center text": {

                titlecssresponsive:"font-size:12px;",

                descriptioncss:"display:block; position:relative; font-weight:300; font-style:normal; font-size:20px; line-height:30px; font-family:Georgia,sans-serif,Arial; color:#fff; padding:10px; margin:0px auto;",

                texteffect1:"slide",

                texteffect2:"slide",

                descriptioncssresponsive:"font-size:12px;",

                texteffectseparate:true,

                texteffectduration:600,

                textpositionmarginleft:24,

                textpositionstatic:"bottom",

                buttoncssresponsive:"",

                buttoncss:"display:block; position:relative; margin:10px auto;",

                addgooglefonts:false,

                textpositionmargintop:24,

                texteffecteasing2:"easeOutCubic",

                texteffectdelay:500,

                texteffecteasing1:"easeOutCubic",

                texteffectdelay1:1000,

                texteffectdelay2:1500,

                texteffectduration1:600,

                googlefonts:"",

                textpositionmarginright:24,

                textautohide:true,

                textstyle:"dynamic",

                texteffectslidedistance:30,

                texteffectslidedirection:"left",

                textcss:"display:block; padding:48px; text-align:center;",

                titlecss:"display:table; position:relative; font-weight:300; font-style:italic; font-size:32px; font-family:Georgia,sans-serif,Arial; color:#fff; padding:10px; margin:0px auto;",

                textpositionmarginstatic:0,

                texteffectresponsivesize:600,

                texteffectslidedirection1:"right",

                texteffectslidedistance1:60,

                texteffectslidedistance2:60,

                texteffectslidedirection2:"right",

                textbgcss:"display:none;",

                texteffectresponsive:true,

                texteffecteasing:"easeOutCubic",

                textpositiondynamic:"centercenter",

                textpositionmarginbottom:24,

                texteffect:"slide",

                texteffectduration2:600

            }

        }

    });

});