var me = {};
me.avatar = "https://pbs.twimg.com/profile_images/1340729954867109889/RSJ81uYo_400x400.jpg";

var you = {};
you.avatar = "https://png.pngtree.com/png-clipart/20200701/original/pngtree-hacker-coding-with-a-keyboard-and-a-binary-background-color-illustration-png-image_5426760.jpg";

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

//-- No use time. It is a javaScript effect.
function insertChat(who, text, time){
    if (time === undefined){
        time = 0;
    }
    var control = "";
    var date = formatAMPM(new Date());
    
    if (who == "me"){
        control = '<li style="width:100%">' +
                        '<div class="msj macro">' +
                        '<div class="avatar"><img class="img-circle" style="width:100%;" src="'+ me.avatar +'" /></div>' +
                            '<div class="text text-l">' +
                                '<p>'+ text +'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '</div>' +
                    '</li>';                    
    }else{
        control = '<li style="width:100%;">' +
                        '<div class="msj-rta macro">' +
                            '<div class="text text-r">' +
                                '<p>'+text+'</p>' +
                                '<p><small>'+date+'</small></p>' +
                            '</div>' +
                        '<div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle" style="width:100%;" src="'+you.avatar+'" /></div>' +                                
                  '</li>';
    }
    setTimeout(
        function(){                        
            $("ul").append(control).scrollTop($("ul").prop('scrollHeight'));
        }, time);
    
}

function resetChat(){
    $("ul").empty();
}

$(".mytext").on("keydown", function(e){
    if (e.which == 13){
        var text = $(this).val();
        if (text !== ""){
            insertChat("me", text);              
            $(this).val('');
        }
    }
});

$('body > div > div > div:nth-child(2) > span').click(function(){
    $(".mytext").trigger({type: 'keydown', which: 13, keyCode: 13});
})

//-- Clear Chat
resetChat();

//-- Print Messages
  
insertChat("you", "Hi, Mr George Faust!", 14000);
insertChat("me", "Who are you and how do you know my name?", 16300);
insertChat("you", "I’m Mr. X’s partner. I wanted a small favour from you. Mr. X has been missing for the last few weeks and I just received an SOS message from him.",17900);
insertChat("you","I think he's in trouble. Do you have any idea about his whereabouts?",19900);
insertChat("me", "I know everyone’s whereabouts darling, but the question is whether I can trust you.",21300);
insertChat("me","However, since you already know my name and phone number, you must be pretty good at what you do.", 23300);
insertChat("you", "Where is he?", 25100);
insertChat("me", "I do know where he is, but what’s in it for me?",28200);
insertChat("you","You either tell me where he is or I disclose your identity!",30400);
insertChat("me","Woah Woah! Calm down! I’m sure we can strike a deal.",33700);
insertChat("you","You tell me what I want and I’ll owe you one.",35000);
insertChat("me","That sounds like a deal. I can give you a hint and if you really are who you claim to be, then you should be able to find it out quite easily.",37000);
insertChat("me","The answers you seek can be found in a ship in the middle of the Pacific Ocean-> go check for the number 2B02 ",40000);
insertChat("me","You better keep your word. After all, an informant needs all the favours he can get- part of the way this whole process functions. HEHE!",44990);
insertChat("you","Thanks! Bye.",47000);
insertChat("me","Bye, and don’t worry, this will not be the last time you hear from me.",48940);